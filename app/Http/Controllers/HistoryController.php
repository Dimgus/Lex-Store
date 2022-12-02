<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){
        return view('history.index', [
            'title' => 'Order History',
            'active' => 'history',
            'orders' => Order::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get()
        ]);
    }

    public function detail($id){
        $order = Order::where('id', $id)->first();
        $order_details = OrderDetail::where('order_id', $order->id)->get();


        return view('history.detail', compact('order', 'order_details'), [
            'title' => 'Order History',
            'active' => 'history'
        ]);
    }
}
