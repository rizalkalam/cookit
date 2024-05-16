<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function myaccount()
    {
        return view('myaccount', [
            
        ]);
    }

    public function member()
    {
        return view('member', [
            
        ]);
    }

    public function reset_password()
    {
        return view('reset_password', [

        ]);
    }
}
