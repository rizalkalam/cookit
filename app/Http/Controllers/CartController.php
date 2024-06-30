<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {
        $data = Cart::where('user_id', auth()->user()->id)->get();

        return view('keranjang',[
            'cart_items' => $data
        ]);

        // return response()->json([
        //     'data' => $data
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
