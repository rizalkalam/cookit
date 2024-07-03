<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\PromotionProduct;
use App\Http\Controllers\Controller;

class PromotionMenuController extends Controller
{
    public function index()
    {
        $menu_appetizer = Menu::where('type_id', 1)->get(); 
        $menu_maincourse = Menu::where('type_id', 2)->get();
        $menu_dessert = Menu::where('type_id', 3)->get();
        return view('dashboard.product.live-to-promote', [
            'menu_appetizer' => $menu_appetizer,
            'menu_maincourse' => $menu_maincourse,
            'menu_dessert' => $menu_dessert
        ]);
    }

    public function change_promotion($id)
    {
        try {
            $promotion = PromotionProduct::first();

            $promotion->update([
                'menu_id' => $id
            ]);

            return redirect('/dashboard/product')->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }
}
