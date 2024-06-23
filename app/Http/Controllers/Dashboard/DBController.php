<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Unit;
use App\Models\District;
use App\Models\MaterialSent;
use Illuminate\Http\Request;
use App\Models\AddressDetail;
use App\Models\FlavorProfile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\AddressListResource;

class DBController extends Controller
{
    public function profile_rasa()
    {
        $data = FlavorProfile::get();

        return view('dashboard.database.profile-rasa', [
            'flavors' => $data
        ]);
    }

    public function create_profile_rasa(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'flavor' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $data = FlavorProfile::create([
                'flavor' => $request->flavor
            ]);

            return redirect('/dashboard/database/profile_rasa')->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function delete_profile_rasa($id)
    {
        $flavor = FlavorProfile::where('id', $id)->first();

        $flavor->delete();

        return redirect('/dashboard/database/profile_rasa')->with('success', 'Produk berhasil dihapus !');
    }

    public function bahan_dikirim()
    {
        $data = MaterialSent::get();

        return view('dashboard.database.bahan-dikirim', [
            'materials' => $data
        ]);
    }

    public function add_bahan()
    {
        $data = MaterialSent::get();

        return view('dashboard.database.add-bahan', [
            'materials' => $data
        ]);
    }

    public function create_bahan_dikirim(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'material_name' => 'required',
            'material_img' => 'nullable|mimes:jpeg,png,jpg|file|max:3048',
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
            $material_img = $request->file('material_img');

            if ($material_img) {
                $img_name = $material_img->getClientOriginalName();
                $stored_img_path = $material_img->storeAs('img_menu', $img_name);
            } else {
                $stored_img_path = 'assets/img-default.png';
            }
            

            $data = MaterialSent::create([
                'material_name' => $request->material_name,
                'material_img' => $stored_img_path, 
            ]);

            return redirect('/dashboard/database/bahan_dikirim')->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/dashboard/database/tambah_bahan')->with('error', 'Gagal menambah data');
        }
    }

    public function detail_bahan($id)
    {
        $material = MaterialSent::find($id);

        if (!$material) {
            return redirect('/dashboard/database/bahan_dikirim')->with('error', 'Material not found');
        }

        return view('dashboard.database.edit-bahan', [
            'material' => $material
        ]);
    }

    public function update_bahan_dikirim(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'material_name' => 'required',
            'material_img' => 'nullable|mimes:jpeg,png,jpg|file|max:3048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $data = MaterialSent::find($id);

            //img
            $material_img = $request->file('material_img');

            if ($material_img) {
                // Delete the old image file if it exists and is not the default image
                if ($data->material_img && $data->material_img != 'assets/img-default.png') {
                    Storage::delete($data->material_img);
                }

                $img_name = $material_img->getClientOriginalName();
                $stored_img_path = $material_img->storeAs('img_menu', $img_name);
            } else {
                if ($data->material_img && $data->material_img != 'assets/img-default.png') {
                    Storage::delete($data->material_img);
                }

                $stored_img_path = 'assets/img-default.png';
            }
            
            $data->update([
                'material_name' => $request->material_name,
                'material_img' => $stored_img_path, 
            ]);

            return redirect('/dashboard/database/bahan_dikirim')->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/dashboard/database/tambah_bahan')->with('error', 'Gagal menambah data');
        }
    }

    public function delete_bahan_dikirim($id)
    {
        try {
            $data = MaterialSent::findOrFail($id);

            // Hapus gambar jika ada dan bukan gambar default
            if ($data->material_img && $data->material_img != 'assets/img-default.png') {
                Storage::delete($data->material_img);
            }
        
            // Hapus data dari database setelah menghapus gambar
            $data->delete();
        
            return redirect('/dashboard/database/bahan_dikirim')->with('success', 'Produk berhasil dihapus !');
        } catch (\Throwable $th) {
            // Tangani exception jika terjadi kesalahan
            return redirect('/dashboard/database/bahan_dikirim')->with('error', 'Gagal menghapus produk: ' . $th->getMessage());
        }
    }

    public function satuan_unit()
    {
        $data = Unit::get();

        return view('dashboard.database.satuan-unit', [
            'units' => $data
        ]);
    }

    public function create_satuan_unit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'unit' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $data = Unit::create([
                'unit' => $request->unit
            ]);

            return redirect('/dashboard/database/satuan_unit')->with('success', 'Satuan unit berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function delete_satuan_unit($id)
    {
        $unit = Unit::where('id', $id)->first();

        $unit->delete();

        return redirect('/dashboard/database/satuan_unit')->with('success', 'Produk berhasil dihapus !');
    }
}
