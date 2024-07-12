<?php

namespace App\Http\Controllers;

use App\Models\LiveProduct;
use Illuminate\Http\Request;
use App\Models\SectionProduct;
use Illuminate\Support\Carbon;

class WeeklyMenuController extends Controller
{
    public function index()
    {
        $live_products = LiveProduct::get();

        $section_id = [];
        $months = [];
        $days = [];
    
        foreach ($live_products as $live_product) {
            $section_id[] = $live_product->section_id;
            $date = Carbon::parse($live_product->delivery);
            $months[] = $date->format('F'); // Full month name, e.g., January
            $days[] = $date->day;
        }

        $section = SectionProduct::get();

        return view('weekly_menu',[
            "sections" => $section,
            "section_id" => $section_id,
            "months" => $months,
            "days" => $days,
        ]);
    }
}
