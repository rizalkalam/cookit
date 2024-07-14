<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Menu;
use App\Models\Bundling;
use App\Models\MenuType;
use App\Models\BundlingType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BundlingMenuController extends Controller
{
    public function index($bundling)
    {
        $lowerCaseType = strtolower(str_replace(' ', '', $bundling));

        $bundlingTypes = [
            'Bundling Appetizer' => 1,
            'Bundling Maincourse' => 2,
            'Bundling Dessert' => 3,
        ];

        $menus = [];

        foreach ($bundlingTypes as $type => $typeId) {
            $menus[$type] = BundlingType::leftJoin('bundlings', 'bundlings.id', '=', 'bundling_types.bundling_id')
                ->leftJoin('menus', 'menus.id', '=', 'bundling_types.menu_id')
                ->where('bundlings.bundling_name', $bundling)
                ->where('bundling_types.name_type', $type)
                ->where('menus.type_id', $typeId)
                ->select([
                    'bundling_types.id as id',
                    'bundling_types.bundling_id as bundling_id',
                    'bundling_types.menu_id as menu_id',
                    'menus.name as name',
                    'menus.updated_at as updated_at',
                    'menus.price as price',
                    'bundling_types.qty as qty',
                    'bundling_types.status_bundling as status_bundling',
                ])
                ->get();
        }

        // Accessing individual menu types
        $menu_appetizer = $menus['Bundling Appetizer'];
        $menu_maincourse = $menus['Bundling Maincourse'];
        $menu_dessert = $menus['Bundling Dessert'];

        $bundling_price = BundlingType::leftjoin('bundlings', 'bundlings.id', '=', 'bundling_types.bundling_id')
        ->where('bundlings.bundling_name', $bundling)
        ->first();

        // return response()->json([
        //     'bundling' => $bundling,
        //     'menu_appetizer' => $menu_appetizer,
        //     'menu_maincourse' => $menu_maincourse,
        //     'menu_dessert' => $menu_dessert,
        // ]);

        return view('dashboard.product.edit-bundling', [
            'bundling' => $bundling,
            'menu_appetizer' => $menu_appetizer,
            'menu_maincourse' => $menu_maincourse,
            'menu_dessert' => $menu_dessert,
            'bundling_price' => $bundling_price
        ]);
    }

    public function create_status_bundling(Request $request)
    {
        $type_name = MenuType::where('id', $menu->type_id)->value('name_type');

            $bundling_nametype = str_replace('', '', $type_name);

            $bundling_ids = [1, 2, 3, 4];
            foreach ($bundling_ids as $bundling_id) {
                BundlingType::create([
                    'name_type' => $bundling_nametype,
                    'bundling_id' => $bundling_id,
                    'menu_id' => $request->menu_id,
                    'qty' => 0,
                    'status_bundling' => 2
                ]);
            }
    }

    public function update_status_bundling(Request $request)
    {
        try {
            $data = BundlingType::where('id', $request->bundlingtyp_id)->first();

            $status_bundling = $request->has('status_bundling') && $request->status_bundling == 1 ? 'on_bundling' : 'off_bundling';

            $data->update([
                'status_bundling'=>$status_bundling,
                'qty'=>$request->qty_menu
            ]);

            return back()->with('success', 'User berhasil ditambahkan!');
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }

    public function delete_status_bundling(Request $request, $id)
    {

    }

    public function update_bundling(Request $request, $bundling)
    {
        try {
            $request->validate([
                'price' => 'required|numeric',
                // other validations...
            ]);
        
                // Ambil nilai dari input
                $inputPrice = $request->input('price');
                
                // Konversi ke float jika diperlukan
                $price = floatval(str_replace(',', '.', $inputPrice));
                
                // Simpan atau lakukan operasi lainnya sesuai kebutuhan aplikasi
                
                // Format kembali untuk ditampilkan di view
                $formattedPrice = number_format($price, 0, ',', '.');
        
            // Update the bundling price
            $bundling = Bundling::where('bundling_name', $bundling)->first();
            $bundling->update([
                'price'=>$price
            ]);

            return back()->with('success', 'User berhasil ditambahkan!');
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }
    
}
