<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Order;
use App\Models\AddressUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderListController extends Controller
{
    public function index()
    {
        $data = Order::get();

        return view('dashboard.orderlist.order-list', [
            'data' => $data
        ]);
    }

    public function detail($id)
    {
        $orders = Order::where('order_id', $id)->get();

        $user = Order::where('order_id', $id)->first();
        $addres = AddressUser::where('user_id', $user->user_id)->first();

        $oreder_id = Order::where('order_id', $id)->value('order_id');
        $order_status = Order::where('order_id', $id)->value('status');

        $user_id = User::where('id', $user->user_id)->first();

        return view('dashboard.orderlist.detail',[
            'orders' => $orders,
            'addres' => $addres,
            'order_status' => $order_status,
            'order_id' => $oreder_id,
            'user' => $user_id,
        ]);
    }
    public function update_status(Request $request, $id)
    {
        try {
            $orders = Order::where('order_id', $id)->get();
            foreach ($orders as $order) {
                $order->update([
                    'status' => $request->status,
                ]);
            }

            return redirect('/dashboard/order_list')->with(['success', 'User berhasil ditambahkan!', 'show_modal' => true]); 
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }
}
