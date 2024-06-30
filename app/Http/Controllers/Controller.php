<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\ToSent;
use App\Models\WeeklyMenu;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function detail_menu(Menu $menu)
    {
        $to_sents = ToSent::where('menu_id', $menu->id)->get();
        return view('product',[
            'menu' => $menu,
            'to_sents' => $to_sents
        ]);

        // return response()->json([
        //     'menu' => $menu,
        //     'to_sents' => $to_sents
        // ]);
    }
}
