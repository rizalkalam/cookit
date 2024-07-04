<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use App\Models\AddressUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class CheckOutController extends Controller
{
    public function index()
    {
        $addres = AddressUser::where('id', auth()->user()->address_id)->first();
        $carts = Cart::where('user_id', auth()->user()->id)->get();

        $product_id = Cart::where('user_id', auth()->user()->id)
        ->whereNull('bundling_id')
        ->get();

        $bundling_id = Cart::where('user_id', auth()->user()->id)
        ->whereNull('product_id')
        ->get();
        // $shipping_cart = AddressUser::where('user_id', auth()->user()->id)


        // return view('check-out', [
        //     'cart_products' => $product_id,
        //     'cart_bundlings' => $bundling_id,
        //     'addres' => $addres,
        //     'carts' => $carts
        // ]);

        return response()->json([
            'data_menu' => $product_id,
            'data_bundling' => $bundling_id,
        ]);
    }

    public function order_details($id)
    {
        $payment = Payment::where('order_id', $id)->first();
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        return view('rincian-pesanan', [
            'payment' => $payment,
            
        ]);
    }

    public function create_order(Request $request)
    {
        try {
            
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function payment(Request $request)
    {
        $params = array(
            'transaction_details' => array(
                'order_id' => Str::uuid()->toString(),
                'gross_amount' => $request->price,                
            ),
            'customer_details' => array(
                'first_name' => $request->customer_first_name,
                'email' => $request->customer_email
            ),
            'enabled_payments' => array('indomaret', 'shopeepay', 'credit_card', 'bca_va', 'bni_va', 'bri_va'),
        );

        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => "Basic $auth",
        ])->post('https://app.midtrans.com/snap/v1/transactions', $params);

        $response = json_decode($response->body());

        // save to db
        $payment = new Payment;
        $payment->order_id = $params['transaction_details']['order_id'];
        $payment->status = 'pending';
        $payment->customer_first_name = $request->customer_first_name;
        $payment->customer_email = $request->customer_email;
        $payment->customer_address = $request->customer_address;
        $payment->save();
        // $payment->item_name = $request->menu_name;
        // $payment->price = $request->price;

        // data check-out
        $product_id = Cart::where('user_id', auth()->user()->id)
        ->whereNull('bundling_id')
        ->get();

        $bundling_id = Cart::where('user_id', auth()->user()->id)
        ->whereNull('product_id')
        ->get();

        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $address_id = auth()->user()->address_id;
        foreach ($carts as $cart) {
            $menuName = $cart->menu->name ?? $cart->bundling->bundling_name;
            $menuType = $cart->menu->type->name_type ?? ' ';
            $menuDsc = $cart->menu->description ?? ' ';

            $order = Order::create([
                'user_id' => auth()->id(),
                'order_id' => $payment->order_id,
                'menu_name' => $menuName,
                'menu_type' => $menuType,
                'menu_dsc' => $menuDsc,
                'qty' => $cart->qty,
                'total_price' => $cart->total_price,
                'status' => 1,
                'address_user_id' => $address_id,
                'date'=> Carbon::now()
            ]);

            $cart = Cart::where('id', $cart->id)->delete();
        }


            $addres = AddressUser::where('id', auth()->user()->address_id)->first();
            // $payment = Payment::where('customer_email', $request->customer_email)->first();
            $oreder_id = Order::where('order_id', $payment->order_id)->value('order_id');

        // dd($response->token);
        return view('check-out',[
            'snapToken' => $response->token,
            'addres' => $addres,
            'carts' => $carts,
            'order_id' => $oreder_id,
            'cart_products' => $product_id,
            'cart_bundlings' => $bundling_id,
        ]);

        // return response()->json([
        //     'snapToken' => $response->token,
        //     'addres' => $addres,
        //     'carts' => $carts,
        //     'order_id' => $oreder_id,
        //     'cart_products' => $product_id,
        //     'cart_bundlings' => $bundling_id,
        // ]);
    }

    public function invoice($id)
    {
        $oreder_id = Order::where('order_id', $id)->value('order_id');
        $order_status = Order::where('order_id', $id)->value('status');
        $orders = Order::where('order_id', $id)->get();

        $address_user_id = $orders->first()->address_user_id;
        $address = AddressUser::where('id', $address_user_id)->first();
    
        return view('rincian-pesanan',[
            'order_id' => $oreder_id,
            'order_status' => $order_status,
            'orders' => $orders,
            'addres' => $address
        ]);
    }
}
