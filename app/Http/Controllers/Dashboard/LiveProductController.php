<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\LiveProduct;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Enums\LiveProductStatus;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LiveProductController extends Controller
{
    public function show()
    {
        $live_prodcuts = LiveProduct::get();
        return view('dashboard.product.edit-product',[
            'live_products' => $live_prodcuts,
        ]);
        // //sec1
        // $section_1_appetizer = LiveProduct::where('section_id', '=', 1)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.appetizer_menu_id')
        // ->value('section_products.appetizer_menu_id');

        // $section_1_maincourse = LiveProduct::where('section_id', '=', 1)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.main_course_menu_id')
        // ->value('section_products.main_course_menu_id');

        // $section_1_dessert = LiveProduct::where('section_id', '=', 1)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.dessert_menu_id')
        // ->value('section_products.dessert_menu_id');

        // //sec2
        // $section_2_appetizer = LiveProduct::where('section_id', '=', 2)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.appetizer_menu_id')
        // ->value('section_products.appetizer_menu_id');

        // $section_2_maincourse = LiveProduct::where('section_id', '=', 2)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.main_course_menu_id')
        // ->value('section_products.main_course_menu_id');

        // $section_2_dessert = LiveProduct::where('section_id', '=', 2)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.dessert_menu_id')
        // ->value('section_products.dessert_menu_id');

        // //sec3
        // $section_3_appetizer = LiveProduct::where('section_id', '=', 3)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.appetizer_menu_id')
        // ->value('section_products.appetizer_menu_id');

        // $section_3_maincourse = LiveProduct::where('section_id', '=', 3)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.main_course_menu_id')
        // ->value('section_products.main_course_menu_id');

        // $section_3_dessert = LiveProduct::where('section_id', '=', 3)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.dessert_menu_id')
        // ->value('section_products.dessert_menu_id');

        // //sec4
        // $section_4_appetizer = LiveProduct::where('section_id', '=', 4)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.appetizer_menu_id')
        // ->value('section_products.appetizer_menu_id');

        // $section_4_maincourse = LiveProduct::where('section_id', '=', 4)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.main_course_menu_id')
        // ->value('section_products.main_course_menu_id');

        // $section_4_dessert = LiveProduct::where('section_id', '=', 4)
        // ->leftjoin('section_products', 'section_products.id', '=', 'live_products.section_id')
        // ->leftjoin('menus', 'menus.id', '=', 'section_products.dessert_menu_id')
        // ->value('section_products.dessert_menu_id');

        // return view('dashboard.product.edit-product',[
        //     'sec1_appetizer' => $section_1_appetizer,
        //     'sec1_maincourse' => $section_1_maincourse,
        //     'sec1_dessert' => $section_1_dessert,
        //     'sec2_appetizer' => $section_2_appetizer,
        //     'sec2_maincourse' => $section_2_maincourse,
        //     'sec2_dessert' => $section_2_dessert,
        //     'sec3_appetizer' => $section_3_appetizer,
        //     'sec3_maincourse' => $section_3_maincourse,
        //     'sec3_dessert' => $section_3_dessert,
        //     'sec4_appetizer' => $section_4_appetizer,
        //     'sec4_maincourse' => $section_4_maincourse,
        //     'sec4_dessert' => $section_4_dessert, 
        // ]);

        // return response()->json([
        //     'sec1_appetizer' => $section_1_appetizer,
        //     'sec1_maincourse' => $section_1_maincourse,
        //     'sec1_dessert' => $section_1_dessert,
        //     'sec2_appetizer' => $section_2_appetizer,
        //     'sec2_maincourse' => $section_2_maincourse,
        //     'sec2_dessert' => $section_2_dessert,
        //     'sec3_appetizer' => $section_3_appetizer,
        //     'sec3_maincourse' => $section_3_maincourse,
        //     'sec3_dessert' => $section_3_dessert,
        //     'sec4_appetizer' => $section_4_appetizer,
        //     'sec4_maincourse' => $section_4_maincourse,
        //     'sec4_dessert' => $section_4_dessert, 
        // ]);
    }

    public function update_liveproduct(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'deliveryDate' => 'required|date',
            'fromDate' => 'required|date',
            'untilDate' => 'required|date',
            'statusLive' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }   

        try {
            $data = LiveProduct::where('id', $id)->first();

            $status = $request->statusLive;
            $data->update([
                'delivery' => $request->deliveryDate,
                'pre_order_from' => $request->fromDate,
                'pre_order_until' => $request->untilDate,
                'status' => $request->statusLive
            ]);

            return redirect('dashboard/edit_product')->with('success', 'Produk berhasil ditambahkan !');

            // return response()->json([
            //     'value' => $status
            // ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }
}
