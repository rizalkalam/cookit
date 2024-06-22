<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\FlavorProfile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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
}
