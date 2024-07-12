<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AddressUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddressUserController extends Controller
{
    public function index()
    {
        $data = AddressUser::where('user_id', auth()->user()->id)->get();

        return view('address.alamat', [
            'address' => $data
        ]);
    }

    // public function ubah_alamat($id)
    // {
    //     $data = AddressUser::where('id', $id)->first();

    //     return view('address.edit-alamat', [
    //         'addres' => $data
    //     ]);
    // }

    public function update_selected_address(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'selected_address' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $data = User::where('id', auth()->user()->id)->first();

            $data->update([
                'address_id' => $request->selected_address
            ]);

            return redirect('/check_out')->with('success', 'Alamat berhasil diubah'); 
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }
}
