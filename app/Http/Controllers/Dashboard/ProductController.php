<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Menu;
use App\Models\Unit;
use App\Models\ToSent;
use App\Models\HowToCook;
use App\Models\LiveProduct;
use App\Models\MaterialSent;
use Illuminate\Http\Request;
use App\Models\FlavorProfile;
use App\Models\NutritionsMenu;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

    public function tambah_menu()
    {
        return view('dashboard.product.add-menu',[
            // 'menu' => $menu,
            // 'to_sents' => $to_sents,
            // 'flavors' => $list_flavors,
            // 'materials' => $list_materials,
            // 'units' => $list_units,
            // 'nutritions' => $nutritions,
            // 'tutorials' => $how_to_cook,
        ]);
    }

    public function edit_menu($id)
    {
        $menu = Menu::where('id', $id)->first();

        $to_sents = ToSent::join('material_sents', 'material_sents.id', '=', 'to_sents.material_id')
        ->join('units', 'units.id', '=', 'to_sents.unit_id')
        ->where('to_sents.menu_id', $id)
        ->orderBy('to_sents.id', 'asc')->get([
            'to_sents.id',
            'to_sents.qty',
            'to_sents.material_id',
            'to_sents.unit_id',
            'material_sents.material_name',
            'units.unit'
        ]);
        $list_flavors = FlavorProfile::get();
        $list_materials = MaterialSent::get();
        $list_units = Unit::get();

        $nutritions = NutritionsMenu::join('units', 'units.id', '=', 'nutritions_menus.unit_id')
        ->where('nutritions_menus.menu_id', $id)
        ->get([
            'nutritions_menus.id',
            'nutritions_menus.karbohidrat',
            'nutritions_menus.karbohidrat_unit',
            'nutritions_menus.protein',
            'nutritions_menus.protein_unit',
            'nutritions_menus.lemak',
            'nutritions_menus.lemak_unit',
            'nutritions_menus.serat',
            'nutritions_menus.serat_unit',
            'nutritions_menus.natrium',
            'nutritions_menus.natrium_unit',
            'nutritions_menus.kalori',
            'nutritions_menus.kalori_unit',
            'units.unit'
        ]);

        $how_to_cook = HowToCook::where('menu_id', $id)->get(['how_to_cooks.id', 'how_to_cooks.instruction', 'how_to_cooks.image']);


        return view('dashboard.product.edit-menu',[
            'menu' => $menu,
            'to_sents' => $to_sents,
            'flavors' => $list_flavors,
            'materials' => $list_materials,
            'units' => $list_units,
            'nutritions' => $nutritions,
            'tutorials' => $how_to_cook,
        ]);
    }

    public function create_tosent(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'material_id' => 'required',
            'qty' => 'required',
            'unit_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }   

        try {
            $data = ToSent::create([
                'menu_id' => $id,
                'material_id' => $request->material_id,
                'qty' => $request->qty,
                'unit_id' => $request->unit_id,
            ]);

            return redirect('/dashboard/product/menu/'.$id)->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            // return response()->json([
            //     'message' => 'failed',
            //     'errors' => $th->getMessage(),
            // ], 400);
            
            return redirect('/dashboard/product')->with('error', 'Gagal menambah data !');
        }
    }

    public function update_tosent(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'material_id' => 'required',
            'qty' => 'required',
            'unit_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }   

        try {
            $data = ToSent::where('id', $request->tosentId)->first();
            $data->update([
                'material_id' => $request->material_id,
                'qty' => $request->qty,
                'unit_id' => $request->unit_id
            ]);

            return redirect('/dashboard/product/menu/'.$id)->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);

            // return redirect('/dashboard/product')->with('error', 'Gagal menambah data !');
        }
    }

    public function delete_tosent(Request $request, $id)
    {
        $data = ToSent::where('id', $request->tosentId)->first();

        $data->delete();
        return redirect('/dashboard/product/menu/'.$id)->with('success', 'Produk berhasil ditambahkan !');
    }

    public function update_nutrition(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
                'karbohidrat' => 'required',
                'karbohidrat_unit' => 'required',
                'protein' => 'required',
                'protein_unit' => 'required',
                'lemak' => 'required',
                'lemak_unit' => 'required',
                'serat' => 'required',
                'serat_unit' => 'required',
                'natrium' => 'required',
                'natrium_unit' => 'required',
                'kalori' => 'required',
                'kalori_unit' => 'required',
                // 'unit_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $data = NutritionsMenu::where('menu_id', $id)->first();
            $data->update([
                'karbohidrat' => $request->karbohidrat,
                'karbohidrat_unit' => $request->karbohidrat_unit,
                'protein' => $request->protein,
                'protein_unit' => $request->protein_unit,
                'lemak' => $request->lemak,
                'lemak_unit' => $request->lemak_unit,
                'serat' => $request->serat,
                'serat_unit' => $request->serat_unit,
                'natrium' => $request->natrium,
                'natrium_unit' => $request->natrium_unit,
                'kalori' => $request->kalori,
                'kalori_unit' => $request->kalori_unit,
                // 'unit_id' => $request->unit_id
            ]);

            return redirect('/dashboard/product/menu/'.$id)->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
           
    }

    public function create_tutorial(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'instruction' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg|file|max:3048',
            // 'step_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }   

        try {
             //img
             $image = $request->file('image');

             if ($image) {
                 $img_name = $image->getClientOriginalName();
                 $stored_img_path = $image->storeAs('img_menu', $img_name);
             } else {
                 $stored_img_path = 'assets/img-default.png';
             }
             
            $data = HowToCook::create([
                'menu_id' => $id,
                'instruction' => $request->instruction,
                'image' => $stored_img_path
            ]);

            return redirect('/dashboard/product/menu/'.$id)->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/dashboard/product')->with('error', 'Gagal menambah data !');
        }
    }

    public function update_tutorial(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tutorialId'=>'required',
            'instructionInput' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg|file|max:3048',
            // 'step_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $tutorial = HowToCook::where('id', $request->tutorialId)->first();

            $tutorial->update([
                'instruction' => $request->instructionInput,
                // 'menu_id' => $id,
                // 'image' => $stored_img_path
            ]);

            return redirect('/dashboard/product/menu/'.$id)->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }

    public function delete_tutorial(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tutorialId'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $data = HowToCook::where('id', $request->tutorialId)->first();

            $data->delete();
            return redirect('/dashboard/product/menu/'.$id)->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }

        
    }

    public function update_menu(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'img_menu' => 'nullable|mimes:jpeg,png,jpg|file|max:3048',
            'price' => 'required',
            'name' => 'required',
            'description' => 'required',
            'profile_yt' => 'required',
            'link_yt' => 'required',
            'flavor_id' => 'required',
            'qty' => 'required',
            'material_id' => 'required', // Pastikan ini sesuai dengan kebutuhan Anda
            'unit_id' => 'required', // Pastikan ini sesuai dengan kebutuhan Anda
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $menu = Menu::where('id', $id)->first();

            //img
            $img_menu = $request->file('img_menu');

            if ($img_menu) {
                // Delete the old image file if it exists and is not the default image
                if ($menu->img_menu && $menu->img_menu != 'assets/img-default.png') {
                    Storage::delete($menu->img_menu);
                }

                $img_name = $img_menu->getClientOriginalName();
                $stored_img_path = $img_menu->storeAs('img_menu', $img_name);
            } else {
                if ($menu->img_menu && $menu->img_menu != 'assets/img-default.png') {
                    Storage::delete($menu->img_menu);
                }

                $stored_img_path = 'assets/img-default.png';
            }

            $menu->update([
                'img_menu' => $stored_img_path,
                'price' => $request->price,
                'name' => $request->name,
                'description' => $request->description,
                'profile_yt' => $request->profile_yt,
                'link_yt' => $request->link_yt,
                'flavor_id' => $request->flavor_id,
            ]);

            // Update data terkait lainnya
            $to_sent = ToSent::where('id',$id)->first();
            $to_sent->update([
                'menu_id' => $id,
                'material_id' => $request->material_id,
                'qty' => $request->qty,
                'unit_id' => $request->unit_id,
            ]);

            
             // Terima value yang digabungkan dari request
            // $to_sent_combined = $request->input('to_sent_combined');

            // Pisahkan value menjadi dua bagian
            // list($material_id, $to_sent_id) = explode('_', $to_sent_combined);

            // $material = MaterialSent::find($material_id);
            // $toSent = ToSent::find($to_sent_id);

            // $nutrition = NutritionsMenu::where('menu_id', $id)->first();

            // $nutrition->update([
            //     'karbohidrat' => $request->karbohidrat,
            //     'karbohidrat_unit' => $request->karbohidrat_unit,
            //     'protein' => $request->protein,
            //     'protein_unit' => $request->protein_unit,
            //     'lemak' => $request->lemak,
            //     'lemak_unit' => $request->lemak_unit,
            //     'serat' => $request->serat,
            //     'serat_unit' => $request->serat_unit,
            //     'natrium' => $request->natrium,
            //     'natrium_unit' => $request->natrium_unit,
            //     'kalori' => $request->kalori,
            //     'kalori_unit' => $request->kalori_unit,
            // ]);

            // return response()->json([
            //     'message' => 'Data kode guru baru berhasil dibuat',
            //     'a' => $menu,
            //     'b' => $to_sent,
            //     'c' => $nutrition
            // ]);
            return redirect('/dashboard/product/menu/'.$id)->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
            // return redirect('/dashboard/product')->with('error', 'Gagal menambah data !');
        }
    }
}
