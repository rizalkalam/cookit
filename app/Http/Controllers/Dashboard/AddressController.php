<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\District;
use Illuminate\Http\Request;
use App\Models\AddressDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    public function data_alamat()
    {
        // Mengambil semua data area
        $addresses = AddressDetail::all();

        // Array untuk menyimpan data area dan district
        $data = [];

        foreach ($addresses as $address) {
            // Mengambil district berdasarkan area_id dari address_details
            $districts = District::where('area_id', $address->id)
                ->select('districts.district_name')
                ->get();

            // Menghitung jumlah district
            $districtCount = $districts->count();

            // Menambahkan data area dan district ke dalam array $data
            $data[] = [
                'id' => $address->id,
                'area' => $address->area,
                'district' => $districts,
                'district_count' => $districtCount,
            ];
        }

        // // Mengirimkan data ke view
        return view('dashboard.database.data-alamat', [
            'data' => $data,
        ]);   
    }

    public function create_data_alamat(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'area' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $data = AddressDetail::create([
                'area' => $request->area,
            ]);

            return redirect('/dashboard/database/data_alamat')->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/dashboard/database/data_alamat')->with('error', 'Gagal menambah data');
        }
    }

    public function edit_alamat($id)
    {
        // Mengambil data area berdasarkan $id
        $area = AddressDetail::where('id', $id)->first();

        // Mengambil district berdasarkan area_id dari address_details
        $districts = District::join('address_details', 'address_details.id', '=', 'districts.area_id')
            ->where('address_details.id', $id)
            ->select(['districts.district_name', 'districts.id'])
            ->get();

        // Menghitung jumlah district
        $districtCount = $districts->count();

        return view('dashboard.database.edit-alamat', [
            'addres' => $area,
            'districts' => $districts,
            'area_id' => $id
        ]);
    }

    public function district_add(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'district_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $data = District::create([
                'area_id' => $id,
                'district_name' => $request->district_name,
            ]);

            return redirect('/dashboard/database/data_alamat/'.$id)->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/dashboard/database/data_alamat')->with('error', 'Gagal menambah data');
        }
    }

    public function update_data_alamat(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'area' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $area = AddressDetail::find($id);
            
            $area->update([
                'area' => $request->area,
            ]);

            return redirect('/dashboard/database/data_alamat')->with('success', 'Produk berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/dashboard/database/data_alamat')->with('error', 'Gagal menambah data');
        }
    }

    public function delete_data_alamat($id)
    {
        $address = AddressDetail::where('id', $id)->first();
        $address->delete();

        $district = District::where('area_id', $id)->first();
        $district->delete();

        return redirect('/dashboard/database/data_alamat')->with('success', 'Alamat berhasil dihapus !');
    }

    public function district_del($id)
    {
        $data = District::where('id', $id)->first();

        $data->delete();

        return redirect('/dashboard/database/data_alamat')->with('success', 'Alamat berhasil dihapus !');
    }
}
