<?php

namespace App\Http\Controllers;

use App\Models\WeeklyMenu;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function detail_menu(WeeklyMenu $menu)
    {
        return view('product',[
            'menu' => $menu,
        ]);
    }
}
