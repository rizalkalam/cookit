<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\LiveProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function dashboard_product()
    {
        // dates
            $dates = LiveProduct::select('delivery')->get();
            // Carbon::setLocale('id');

            $months = [];
            $days = [];
        
            foreach ($dates as $date) {
                $parsedDate = Carbon::parse($date->delivery);
                $months[] = $parsedDate->translatedFormat('F');
                $days[] = $parsedDate->format('d');
            }
        // end-dates

        // card
            $data = LiveProduct::select([
                'delivery',
            ])->get();
        // end-card

        // data menu
                // $menus = Live;
        return view('dashboard.product.product',[
            "months" => $months,
            "days" => $days,
        ]);
    }
}
