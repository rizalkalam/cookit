<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Menu;
use App\Models\Unit;
use App\Models\ToSent;
use App\Models\Bundling;
use App\Models\MenuType;
use App\Models\HowToCook;
use App\Models\LiveProduct;
use App\Models\BundlingType;
use App\Models\MaterialSent;
use Illuminate\Http\Request;
use App\Models\FlavorProfile;
use App\Models\NutritionsMenu;
use App\Models\SectionProduct;
use Illuminate\Support\Carbon;
use App\Models\PromotionProduct;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function dashboard_product()
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

        $promotion = PromotionProduct::first();

        $bundling_snackattack = BundlingType::where('bundling_id', 1)
        ->where('status_bundling', 1)
        ->get();
        $bundling_cooktheday = BundlingType::where('bundling_id', 2)
        ->where('status_bundling', 1)
        ->get();
        $bundling_cookitonce = BundlingType::where('bundling_id', 3)
        ->where('status_bundling', 1)
        ->get();
        $bundling_adorableweek = BundlingType::where('bundling_id', 4)
        ->where('status_bundling', 1)
        ->get();

        $snackattack = $bundling_snackattack->first();
        $cooktheday = $bundling_cooktheday->first();
        $cookitonce = $bundling_cookitonce->first();
        $adorableweek = $bundling_adorableweek->first();

        $snackattack_appetizer = $bundling_snackattack->filter(function($item) {
            return $item->name_type === 'Bundling Appetizer';
        });
        $snackattack_maincourse = $bundling_snackattack->filter(function($item) {
            return $item->name_type === 'Bundling Maincourse';
        });
        $snackattack_dessert = $bundling_snackattack->filter(function($item) {
            return $item->name_type === 'Bundling Dessert';
        });

        $cooktheday_appetizer = $bundling_cooktheday->filter(function($item){
            return $item->name_type === 'Bundling Appetizer';
        });
        $cooktheday_maincourse = $bundling_cooktheday->filter(function($item){
            return $item->name_type === 'Bundling Maincourse';
        });
        $cooktheday_dessert = $bundling_cooktheday->filter(function($item){
            return $item->name_type === 'Bundling Dessert';
        });

        $cookitonce_appetizer = $bundling_cookitonce->filter(function($item){
            return $item->name_type === 'Bundling Appetizer';
        });
        $cookitonce_maincourse = $bundling_cookitonce->filter(function($item){
            return $item->name_type === 'Bundling Maincourse';
        });
        $cookitonce_dessert = $bundling_cookitonce->filter(function($item){
            return $item->name_type === 'Bundling Dessert';
        });

        $adorableweek_appetizer = $bundling_adorableweek->filter(function($item){
            return $item->name_type === 'Bundling Appetizer';
        });
        $adorableweek_maincourse = $bundling_adorableweek->filter(function($item){
            return $item->name_type === 'Bundling Maincourse';
        });
        $adorableweek_dessert = $bundling_adorableweek->filter(function($item){
            return $item->name_type === 'Bundling Dessert';
        });
    

        return view('dashboard.product.product',[
            "sections" => $section,
            "section_id" => $section_id,
            "months" => $months,
            "days" => $days,
            "promotion" => $promotion,
            "bundling_snackattack" => $bundling_snackattack,
            "bundling_cooktheday" => $bundling_cooktheday,
            "bundling_cookitonce" => $bundling_cookitonce,
            "bundling_adorableweek" => $bundling_adorableweek,
            "snackattack" => $snackattack,
            "cooktheday" => $cooktheday,
            "cookitonce" => $cookitonce,
            "adorableweek" => $adorableweek,
            "snackattack_appetizer" => $snackattack_appetizer,
            "snackattack_maincourse" => $snackattack_maincourse,
            "snackattack_dessert" => $snackattack_dessert,
            "cooktheday_appetizer" => $cooktheday_appetizer,
            "cooktheday_maincourse" => $cooktheday_maincourse,
            "cooktheday_dessert" => $cooktheday_dessert,
            "cookitonce_appetizer" => $cookitonce_appetizer,
            "cookitonce_maincourse" => $cookitonce_maincourse,
            "cookitonce_dessert" => $cookitonce_dessert,
            "adorableweek_appetizer" => $adorableweek_appetizer,
            "adorableweek_maincourse" => $adorableweek_maincourse,
            "adorableweek_dessert" => $adorableweek_dessert,
        ]);

        // return response()->json([
        //     "sections" => $section,
        //     "months" => $months,
        //     "days" => $days,
        // ]);
    }

    public function edit_product()
    {
        return view('dashboard.product.edit-product',[
            // 'menu' => $menu,
            // 'to_sents' => $to_sents,
            // 'flavors' => $list_flavors,
            // 'materials' => $list_materials,
            // 'units' => $list_units,
            // 'nutritions' => $nutritions,
            // 'tutorials' => $how_to_cook,
        ]);
    }

    public function tambah_menu($section_number, $type)
    {
        $menu_type = MenuType::where('name_type', '=', $type )->value('id');

        $list_flavors = FlavorProfile::get();
        return view('dashboard.product.add-menu',[
            'section_id' => $section_number,
            'type' => $type,
            'type_id' => $menu_type,
            'flavors' => $list_flavors,
            // 'menu' => $menu,
            // 'to_sents' => $to_sents,
            // 'materials' => $list_materials,
            // 'units' => $list_units,
            // 'nutritions' => $nutritions,
            // 'tutorials' => $how_to_cook,
        ]);
    }

    public function edit_menu($section_number, $type, $id)
    {
        // $menu = Menu::where('id', $id)->first();

        $lowerCaseType = strtolower(str_replace(' ', '', $type));

        $menu = LiveProduct::join('section_products', 'section_products.id', '=', 'live_products.section_id')
        ->join('menus', 'menus.id', '=', $lowerCaseType.'_menu_id')
        ->where('menus.id', $id)
        ->first();

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

        $nutritions = NutritionsMenu::where('nutritions_menus.menu_id', $id)
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
            'type' => $type
        ]);

        // return response()->json([
        //     'menu' => $menu,
        //     'to_sents' => $to_sents,
        //     'flavors' => $list_flavors,
        //     'materials' => $list_materials,
        //     'units' => $list_units,
        //     'nutritions' => $nutritions,
        //     'tutorials' => $how_to_cook,
        //     'section' => $section_number,
        //     'type' => $type,
        //     'id' => $id
        // ]);
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

            $menu = Menu::where('id', $id)->first();
            $menu->update([
                'update_at' => Carbon::now()
            ]);

            return back()->with('success', 'User berhasil ditambahkan!');
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

            $menu = Menu::where('id', $id)->first();
            $menu->update([
                'update_at' => Carbon::now()
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

        $menu = Menu::where('id', $id)->first();
            $menu->update([
                'update_at' => Carbon::now()
            ]);

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

            $menu = Menu::where('id', $id)->first();
            $menu->update([
                'update_at' => Carbon::now()
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

            $menu = Menu::where('id', $id)->first();
            $menu->update([
                'update_at' => Carbon::now()
            ]);

            return back()->with('success', 'User berhasil ditambahkan!');
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
                'menu_id' => $id,
                // 'image' => $stored_img_path
            ]);

            $menu = Menu::where('id', $id)->first();
            $menu->update([
                'update_at' => Carbon::now()
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

            $menu = Menu::where('id', $id)->first();
            $menu->update([
                'update_at' => Carbon::now()
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

    public function delete_menu($id)
    {
        try {
            // Menggunakan transaksi untuk memastikan semua operasi berhasil atau gagal bersama-sama
            DB::beginTransaction();
    
            // Menghapus data dari tabel BundlingType
            BundlingType::where('menu_id', $id)->delete();

            // Menghapus data dari tabel ToSent
            ToSent::where('menu_id', $id)->delete();
    
            // Menghapus data dari tabel NutritionsMenu
            NutritionsMenu::where('menu_id', $id)->delete();
    
            // Menghapus data dari tabel HowToCook
            HowToCook::where('menu_id', $id)->delete();
    
            // Menghapus data dari tabel Menu
            Menu::where('id', $id)->delete();
    
            // Commit transaksi jika semua operasi berhasil
            DB::commit();
    
            // Redirect atau response berhasil
            return redirect('dashboard/edit_product')->with('success', 'Data berhasil dihapus !');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi error
            DB::rollback();
    
            // Redirect atau response gagal
            return redirect()->back()->with('error', 'Gagal menghapus menu: ' . $e->getMessage());
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
            'type_id' => 'required',
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
                'type_id' => $request->type_id,
                'update_at' => Carbon::now()
            ]);

            return redirect('dashboard/product')->with('success', 'Produk berhasil ditambahkan !');

            // return response()->json([
            //     'value' => $status
            // ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
            // return redirect('/dashboard/product')->with('error', 'Gagal menambah data !');
        }
    }

    public function create_menu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'img_menu' => 'nullable|mimes:jpeg,png,jpg|file|max:3048',
            'price' => 'required',
            'name' => 'required',
            'description' => 'required',
            'profile_yt' => 'required',
            'link_yt' => 'required',
            'flavor_id' => 'required',
            'type_id' => 'required',
            'section_id' => 'required',
            
            // 'karbohidrat' => 'required',
            // 'karbohidrat_unit' => 'required',
            // 'protein' => 'required',
            // 'protein_unit' => 'required',
            // 'lemak' => 'required',
            // 'lemak_unit' => 'required',
            // 'serat' => 'required',
            // 'serat_unit' => 'required',
            // 'natrium' => 'required',
            // 'natrium_unit' => 'required',
            // 'kalori' => 'required',
            // 'kalori_unit' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            //img
            $img_menu = $request->file('img_menu');

            if ($img_menu) {
                $img_name = $img_menu->getClientOriginalName();
                $stored_img_path = $img_menu->storeAs('img_menu', $img_name);
            } else {
                $stored_img_path = 'assets/img-default.png';
            }

            $menu = Menu::create([
                'img_menu' => $stored_img_path,
                'price' => $request->price,
                'name' => $request->name,
                'description' => $request->description,
                'profile_yt' => $request->profile_yt,
                'link_yt' => $request->link_yt,
                'flavor_id' => $request->flavor_id,
                'type_id' => $request->type_id,
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ]);

            $nutrition = NutritionsMenu::create([
                'menu_id'=> $menu->id,
                'karbohidrat' => 0,
                'karbohidrat_unit' => 1,
                'protein' => 0,
                'protein_unit' => 1,
                'lemak' => 0,
                'lemak_unit' => 1,
                'serat' => 0,
                'serat_unit' => 1,
                'natrium' => 0,
                'natrium_unit' => 1,
                'kalori' => 0,
                'kalori_unit' => 1,
            ]);

            $type_name = MenuType::where('id', $menu->type_id)->value('name_type');

            $bundling_nametype = str_replace('', '', $type_name);

            $bundling_ids = [1, 2, 3, 4];
            foreach ($bundling_ids as $bundling_id) {
                BundlingType::create([
                    'name_type' => $bundling_nametype,
                    'bundling_id' => $bundling_id,
                    'menu_id' => $menu->id,
                    'qty' => 0,
                    'status_bundling' => 2
                ]);
            }
            

            //update on section
        $section = SectionProduct::where('id', $request->section_id)->first();

            if ($request->type_id == 1) {
                $section->update([
                    'appetizer_menu_id' => $menu->id
                ]);
            } elseif ($request->type_id == 2) {
                $section->update([
                    'maincourse_menu_id' => $menu->id
                ]);
            } else {
                $section->update([
                    'dessert_menu_id' => $menu->id
                ]);
            }


            
            return redirect('/dashboard/edit_product')->with('success', 'Produk berhasil ditambahkan !');
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
