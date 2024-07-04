<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\District;
use App\Models\AddressUser;
use Illuminate\Http\Request;
use App\Models\AddressDetail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profile_saya()
    {
        $data = User::where('id', auth()->user()->id)->get();

        $orders = Order::where('user_id', auth()->user()->id)->get();

        $groupedOrders = collect($orders)->groupBy(function ($item) {
            return $item['date'] . '_' . $item['order_id'];
        });
    
        // Memformat hasil sesuai dengan keinginan
        $formattedOrders = $groupedOrders->map(function ($group, $key) {
            list($date, $order_id) = explode('_', $key);
            return [
                'date' => $date,
                'order_id' => $order_id,
                'data' => $group->toArray()
            ];
        })->values()->toArray();

        $addresses = AddressUser::where('user_id', auth()->user()->id)->get();
        
        return view('profile', [
            'profiles' => $data,
            'orders' => $orders,
            'formattedOrders' => $formattedOrders,
            'addresses' => $addresses,
        ]);

        // return response()->json([
        //     'orders'=>$orders
        // ]);
    }

    public function update_profile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'photo_profile' => 'nullable|mimes:jpeg,png,jpg|file|max:3048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $user = User::where('id', auth()->user()->id)->firstOrFail();

            //img
            $photo_profile = $request->file('photo_profile');

            if ($photo_profile) {
                // Delete the old image file if it exists and is not the default image
                if ($user->photo_profile && $user->photo_profile != 'assets/img-default.png') {
                    Storage::delete($user->photo_profile);
                }

                $img_name = $photo_profile->getClientOriginalName();
                $stored_img_path = $photo_profile->storeAs('photo_profile', $img_name);
            } else {
                if ($user->photo_profile && $user->photo_profile != 'assets/img-default.png') {
                    Storage::delete($user->photo_profile);
                }

                $stored_img_path = 'assets/img-default.png';
            }

            $user->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'photo_profile' => $stored_img_path,
            ]);

            return redirect('/profil_saya')->with('success', 'Profile berhasil diubah !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/profil_saya')->with('error', 'Gagal mengubah data !');
        }
    }

    public function add_address()
    {
        $areas = AddressDetail::all();
        $districts = District::all();

        return view('address.form-alamat', [
            'areas' => $areas,
            'districts' => $districts,
        ]);
    }

    public function show_district(Request $request)
    {
        $districts = District::where('area_id', $request->area_id)->get();
        return response()->json($districts);
    }

    public function create_address_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'phone_address' => 'required',
            'area' => 'required',
            'district' => 'required',
            'complete_address' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $input_area = AddressDetail::where('id', $request->area)->value('area');
            $input_district = District::where('id', $request->district)->value('district_name');
            $data = AddressUser::create([
                'user_id' => auth()->user()->id,
                'full_name' => $request->full_name,
                'phone_address' =>  $request->phone_address,
                'area' => $input_area,
                'district' => $input_district,
                'complete_address' => $request->complete_address
            ]);

            return redirect('/alamat_saya')->with('success', 'Alamat berhasil ditambahkan !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/tambah_alamat')->with('error', 'Gagal mengubah data !');
        }
    }

    public function edit_address($id)
    {
        $areas = AddressDetail::all();
        $data = AddressUser::where('id', $id)->first();

        return view('address.edit-alamat', [
            'address' => $data,
            'areas' => $areas
        ]);        
    }

    public function update_address_user(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'phone_address' => 'required',
            'area' => 'required',
            'district' => 'required',
            'complete_address' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $data = AddressUser::where('id', $id)->first();
            
            $input_area = AddressDetail::where('id', $request->area)->value('area');
            $input_district = District::where('id', $request->district)->value('district_name');

            $data->update([
                'full_name' => $request->full_name,
                'phone_address' =>  $request->phone_address,
                'area' => $input_area,
                'district' => $input_district,
                'complete_address' => $request->complete_address
            ]);

            return redirect('/alamat_saya')->with('success', 'Alamat berhasil diubah !');
        } catch (\Throwable $th) {
            return redirect('/ubah_alamat')->with('error', 'Gagal mengubah data !');
        }
    }

    public function delete_address_user($id)
    {
        try {
            $data = AddressUser::where('id', $id)->first();

            $data->delete();
            return redirect('/alamat_saya')->with('success', 'Alamat berhasil dihapus !');
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }
}
