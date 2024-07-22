<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class RevenueController extends Controller
{
    public function index()
    {
        $yesterday = Carbon::yesterday();
        $users = User::whereNot('id', 1)->get();
        $user_count = $users->count();
        $users_yesterday_count = User::whereNot('id', 1)
            ->whereDate('created_at', $yesterday)
            ->count();

        // Hitung persentase kenaikan
        if ($users_yesterday_count > 0) {
            $user_percentage_increase = (($user_count - $users_yesterday_count) / $users_yesterday_count) * 100;
        } else {
            $user_percentage_increase = 0; // Jika tidak ada data kemarin, persentase kenaikan dianggap 0
        }

        $user_percentage_increase_formatted = number_format($user_percentage_increase, 1);


        $orders = Order::get();        
        $order_count = $orders->count(); // Get the count of orders
        $orders_yesterday = Order::whereDate('date', $yesterday)->count();

        // Calculate the percentage increase
        if ($orders_yesterday > 0) {
            $order_percentage_increase = (($order_count - $orders_yesterday) / $orders_yesterday) * 100;
        } else {
            $order_percentage_increase = 0; // If there are no orders yesterday, the percentage increase is considered 0
        }

        $order_percentage_increase_formatted = number_format($order_percentage_increase, 1);

        $orders_completed = Order::where('status', 'completed')->get();
        $order_completed_count = count($orders_completed);
        $completed_yesterday = Order::where('status', 'completed')
        ->whereDate('date', $yesterday)
        ->count();
        // Hitung persentase kenaikan
        if ($completed_yesterday > 0) {
            $completed_percentage_increase = (($orders_completed - $completed_yesterday) / $completed_yesterday) * 100;
        } else {
            $completed_percentage_increase = 0; // Jika tidak ada data kemarin, persentase kenaikan dianggap 0
        }
        $completed_percentage_increase_formatted = number_format($completed_percentage_increase, 1);

        $orders_rejected = Order::where('status', 'rejected')->get();
        $order_rejected_count = count($orders_rejected);
        $rejected_yesterday = Order::where('status', 'rejected')
        ->whereDate('date', $yesterday)
        ->count();
        // Hitung persentase kenaikan
        if ($rejected_yesterday > 0) {
            $rejected_percentage_increase = (($orders_rejected - $rejected_yesterday) / $rejected_yesterday) * 100;
        } else {
            $rejected_percentage_increase = 0; // Jika tidak ada data kemarin, persentase kenaikan dianggap 0
        }
        $rejected_percentage_increase_formatted = number_format($rejected_percentage_increase, 1);

        return view('dashboard.home', [
            'user_count' => $user_count,
            'user_percentage_increase' => $user_percentage_increase_formatted,
            'order_count' => $order_count,
            'order_percentage_increase' => $order_percentage_increase_formatted,
            'order_completed_count' => $order_completed_count,
            'completed_percentage_increase' => $completed_percentage_increase_formatted,
            'order_rejected_count' => $order_rejected_count,
            'rejected_percentage_increase' => $rejected_percentage_increase_formatted,
        ]);
    }
}
