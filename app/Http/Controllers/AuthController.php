<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('login', [
            // 'title'=>'Login',
            // 'active'=>'login',
            // 'kategoris'=>Kategori::all()
        ]);
    }

    public function register()
    {
        return view('register', [
            // 'title'=>'Login',
            // 'active'=>'login',
            // 'kategoris'=>Kategori::all()
        ]);
    }

    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => [],
            ], 400);
        }

        try {
            $data = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);

            $data->assignRole('user');

            return redirect('/login')->with('success', 'Berhasil mendaftar, silahkan masuk!');;
        } catch (\Throwable $th) {
            // return redirect()->back()->withInput()->withErrors(['password' => 'Kata sandi yang Anda masukkan salah.']);
        }
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            $user = Auth::user();
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('user')) {
                return redirect('/home');
            } else {
                return redirect('/login');
            }
        } else {
            // Authentication failed
            return redirect()->back()->withInput()->withErrors(['password' => 'Kata sandi yang Anda masukkan salah.']);
        }
    }

    public function update_profile(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required',
            'phone'=>'required',
            // 'updated_at' => now()
        ]);

        User::where('id', $id)->update($validateData);
        // $request->session()->flash('Success', 'Data berhasil diubah');
        
        return redirect('/myaccount')->with('success', 'Profil berhasil diperbarui!');
    }

    public function update_pp(Request $request, $id)
    {
        $validateData = $request->validate([
            'photo_profile' => 'mimes:jpeg,png,jpg|file|max:2048',
        ]);

        $file_path = User::where('id', $id)->value('photo_profile');

        if ($request->file('photo_profile')) {
            Storage::delete($file_path);
            $request->file('photo_profile')->move('photo_profile/', $request->file('photo_profile')->getClientOriginalName());
            $validateData['photo_profile'] =  'photo_profile/' . $request->file('photo_profile')->getClientOriginalName();
        }

        User::where('id', auth()->user()->id)->update($validateData);
        $request->session()->flash('Success', 'Data berhasil diubah');
        
        return redirect('/myaccount');
    }

    public function reset_password(Request $request, $id)
    {
        if (Hash::check($request->password_lama, auth()->user()->password)) {    
            $validateData = Validator::make($request->all(),[
                'password_baru'=>'required|min:5|max:255',
                // 'konfirmasi'=>'required|min:5|max:255|same:password_baru',
            ]);
            
            if ($validateData->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validateData->errors(),
                    'data' => [],
                ]);
            }
        
                User::where('id', $id)->update([
                    'password'=>Hash::make($request->password_baru),
                    'updated_at' => now()
                ]);

                return redirect('/myaccount')->with('success', 'Profil berhasil diperbarui!');
            }

        return response()->json([
            'message' => 'forbidden',
            'errors' => 'passwords do not match'
        ],403);
    }

    public function logout()
    {
        Auth::logout();
 
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/home');
    }
}