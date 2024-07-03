<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\BundlingType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {
        // $data = Cart::where('user_id', auth()->user()->id)->get();
        $product_id = Cart::where('user_id', auth()->user()->id)
        ->whereNull('bundling_id')
        ->get();

        $bundling_id = Cart::where('user_id', auth()->user()->id)
        ->whereNull('product_id')
        ->get();

        // $data_product = Menu
        // $data_bundling = Bundling::where('id', $bundling_id)->get();

        // $detail_bundling = BundlingType::leftjoin('bundlings', 'bundlings.id', '=', 'bundling_types.bundling_id')
        // ->leftjoin('menus', 'menus.id', '=', 'bundling_types.menu_id')
        // ->where('bundling_types.bundling_id', $bundling_id)
        // ->select([
        //     'bundling_types.id as id',
        //     'bundling_types.id as bundling_id',
        //     'bundling_types.menu_id as menu_id',
        //     'menus.name as name',
        //     'menus.img_menu as img_menu',
        //     'menus.updated_at as updated_as',
        //     'menus.price as price',
        //     'bundling_types.qty as qty',
        //     'bundling_types.status_bundling as status_bundling',
        // ])
        // ->get();

        return view('keranjang',[
            'cart_products' => $product_id,
            'cart_bundlings' => $bundling_id
        ]);

        // return response()->json([
        //     'data_menu' => $product_id,
        //     'data_bundling' => $bundling_id,
        // ]);
    }

    public function add_to_cart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'product_id' => 'required',
            // 'qty' => 'required',
            'total_price' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            
            $existingCart = Cart::where('product_id', $request->id)->first();

            if ($existingCart) {
                // Update existing cart item
                $existingCart->update([
                    'qty' => $existingCart->qty + $request->qty,
                    'total_price' => $existingCart->total_price + $request->total_price,
                ]);
            } else {
                // Create new cart item
                Cart::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $request->id,
                    'qty' => $request->qty,
                    'total_price' => $request->total_price,
                ]);
            }

            return back()->with(['success', 'User berhasil ditambahkan!', 'show_modal' => true]); 
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }

    public function bundling_to_cart(Request $request)
    {
        try {
            $existingCart = Cart::where('bundling_id', $request->bundling_id)->first();

            if ($existingCart) {
                // Update existing cart item
                return back()->with(['failed', 'Produk bundling sudah di keranjang!', 'show_modal' => true]); 
            } else {
                // Create new cart item
                Cart::create([
                    'user_id' => auth()->user()->id,
                    'bundling_id' => $request->bundling_id,
                    'qty' => 1,
                    'total_price' => $request->bundling_price,
                ]);

                return back()->with(['success', 'User berhasil ditambahkan!', 'show_modal' => true]); 
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }

    public function delete_cart($id)
    {
        try {
            $cart = Cart::where('id', $id)->first();

            $cart->delete();
            return back()->with(['success', 'Data berhasil dihapus!', 'show_modal' => true]); 
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }
}
