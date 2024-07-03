<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\ToSent;
use App\Models\Bundling;
use App\Models\WeeklyMenu;
use App\Models\BundlingType;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function home()
    {
        $qty_snackattack_appetizer = BundlingType::where('name_type', 'Bundling Appetizer')
        ->where('bundling_id', 1)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_snackattack_appetizer = 0;
        foreach ($qty_snackattack_appetizer as $item) {
            $totalQty_snackattack_appetizer += $item->qty;
        }

        $qty_snackattack_maincourse = BundlingType::where('name_type', 'Bundling Maincourse')
        ->where('bundling_id', 1)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_snackattack_maincourse = 0;
        foreach ($qty_snackattack_maincourse as $item) {
            $totalQty_snackattack_maincourse += $item->qty;
        }

        $qty_snackattack_dessert = BundlingType::where('name_type', 'Bundling Dessert')
        ->where('bundling_id', 1)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_snackattack_dessert = 0;
        foreach ($qty_snackattack_dessert as $item) {
            $totalQty_snackattack_dessert += $item->qty;
        }

        $qty_cooktheday_appetizer = BundlingType::where('name_type', 'Bundling Appetizer')
        ->where('bundling_id', 2)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_cooktheday_appetizer = 0;
        foreach ($qty_cooktheday_appetizer as $item) {
            $totalQty_cooktheday_appetizer += $item->qty;
        }

        $qty_cooktheday_maincourse = BundlingType::where('name_type', 'Bundling Maincourse')
        ->where('bundling_id', 2)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_cooktheday_maincourse = 0;
        foreach ($qty_cooktheday_maincourse as $item) {
            $totalQty_cooktheday_maincourse += $item->qty;
        }

        $qty_cooktheday_dessert = BundlingType::where('name_type', 'Bundling Dessert')
        ->where('bundling_id', 2)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_cooktheday_dessert = 0;
        foreach ($qty_cooktheday_dessert as $item) {
            $totalQty_cooktheday_dessert += $item->qty;
        }

        $qty_cookitonce_appetizer = BundlingType::where('name_type', 'Bundling Appetizer')
        ->where('bundling_id', 3)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_cookitonce_appetizer = 0;
        foreach ($qty_cookitonce_appetizer as $item) {
            $totalQty_cookitonce_appetizer += $item->qty;
        }

        $qty_cookitonce_maincourse = BundlingType::where('name_type', 'Bundling Maincourse')
        ->where('bundling_id', 3)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_cookitonce_maincourse = 0;
        foreach ($qty_cookitonce_maincourse as $item) {
            $totalQty_cookitonce_maincourse += $item->qty;
        }

        $qty_cookitonce_dessert = BundlingType::where('name_type', 'Bundling Dessert')
        ->where('bundling_id', 3)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_cookitonce_dessert = 0;
        foreach ($qty_cookitonce_dessert as $item) {
            $totalQty_cookitonce_dessert += $item->qty;
        }

        $qty_adorableweek_appetizer = BundlingType::where('name_type', 'Bundling Appetizer')
        ->where('bundling_id', 4)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_adorableweek_appetizer = 0;
        foreach ($qty_adorableweek_appetizer as $item) {
            $totalQty_adorableweek_appetizer += $item->qty;
        }

        $qty_adorableweek_maincourse = BundlingType::where('name_type', 'Bundling Maincourse')
        ->where('bundling_id', 4)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_adorableweek_maincourse = 0;
        foreach ($qty_adorableweek_maincourse as $item) {
            $totalQty_adorableweek_maincourse += $item->qty;
        }

        $qty_adorableweek_dessert = BundlingType::where('name_type', 'Bundling Dessert')
        ->where('bundling_id', 4)
        ->where('status_bundling', 1)
        ->get();
        $totalQty_adorableweek_dessert = 0;
        foreach ($qty_adorableweek_dessert as $item) {
            $totalQty_adorableweek_dessert += $item->qty;
        }

        // Total jumlah qty snackattack
        $total_snackattack = $totalQty_cookitonce_appetizer + $totalQty_cookitonce_maincourse + $totalQty_cookitonce_dessert;
        // Total jumlah qty cooktheday
        $total_cooktheday = $totalQty_cooktheday_appetizer + $totalQty_cookitonce_maincourse + $totalQty_cooktheday_dessert;
        // Total jumlah qty cookitonce
        $total_cookitonce = $totalQty_cookitonce_appetizer + $totalQty_cookitonce_maincourse + $totalQty_cookitonce_dessert;
        // Total jumlah qty adorableweek
        $total_adorableweek = $totalQty_adorableweek_appetizer + $totalQty_adorableweek_maincourse + $totalQty_adorableweek_dessert;

        $snackattack = Bundling::where('bundling_name', 'Snack Attack')
        ->first();
        $cooktheday = Bundling::where('bundling_name', 'Cook The Day')
        ->first();
        $cookitonce = Bundling::where('bundling_name', 'Cook It Once')
        ->first();
        $adorableweek = Bundling::where('bundling_name', 'Adorable Week')
        ->first();

        // return response()->json([
        //     'data1' => $totalQty_adorableweek_appetizer,
        //     'data2' => $totalQty_adorableweek_maincourse,
        //     'data3' => $totalQty_adorableweek_dessert,
        //     'total' => $total_adorableweek
        // ]);

        return view('home', [
            "menus" => Menu::all(),
            'qty_snackattack_appetizer' => $totalQty_snackattack_appetizer,
            'qty_snackattack_maincourse' => $totalQty_snackattack_maincourse,
            'qty_snackattack_dessert' => $totalQty_snackattack_dessert,
            'qty_cooktheday_appetizer' => $totalQty_cooktheday_appetizer,
            'qty_cooktheday_maincourse' => $totalQty_cooktheday_maincourse,
            'qty_cooktheday_dessert' => $totalQty_cooktheday_dessert,
            'qty_cookitonce_appetizer' => $totalQty_cookitonce_appetizer,
            'qty_cookitonce_maincourse' => $totalQty_cookitonce_maincourse,
            'qty_cookitonce_dessert' => $totalQty_cookitonce_dessert,
            'qty_adorableweek_appetizer' => $totalQty_adorableweek_appetizer,
            'qty_adorableweek_maincourse' => $totalQty_adorableweek_maincourse,
            'qty_adorableweek_dessert' => $totalQty_adorableweek_dessert,
            'total_snackattack' => $total_snackattack,
            'total_cooktheday' => $total_cooktheday,
            'total_cookitonce' => $total_cookitonce,
            'total_adorableweek' => $total_adorableweek,
            'snackattack' => $snackattack,
            'cooktheday' => $cooktheday,
            'cookitonce' => $cookitonce,
            'adorableweek' => $adorableweek,
        ]);
    }

    public function bundling($bundling)
    {
        $data = BundlingType::leftjoin('bundlings', 'bundlings.id', '=', 'bundling_types.bundling_id')
        ->where('bundlings.bundling_name', $bundling)
        ->where('status_bundling', 1)
        ->get();

        $input_data = BundlingType::leftjoin('bundlings', 'bundlings.id', '=', 'bundling_types.bundling_id')
        ->where('bundlings.bundling_name', $bundling)
        ->where('status_bundling', 1)
        ->first();

        return view('bundling', [
            'title' => $bundling,
            'bundlings' => $data,
            'input_data' => $input_data,
        ]);

        // return response()->json([
        //     'title' => $bundling,
        //     'bundlings' => $data,
        //     'input_data' => $input_data,
        // ]);
    }

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
