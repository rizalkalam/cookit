<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
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
            'full_name' => 'required',
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
                'full_name' => $request->full_name,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), 
            ]);

            $data->assignRole('user');

            event(new Registered($data));
            Auth::login($data);

            return redirect('/email/verify');
        } catch (\Throwable $th) {
            // return redirect()->back()->withInput()->withErrors(['password' => 'Kata sandi yang Anda masukkan salah.']);
        }
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('name', 'password');

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