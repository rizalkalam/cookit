<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $data = User::whereNot('id', 1)->get();

        return view('dashboard.customer.customer', [
            'data' => $data,
        ]);
    }
}
