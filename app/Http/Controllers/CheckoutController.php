<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;



class CheckoutController extends Controller
{
    public function index(){
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order_details = [];
        if(!empty($order)){
            $order_details = OrderDetail::where('order_id', $order->id)->get();
        }

        return view('order.checkout', compact('order', 'order_details'), [
            'title' => 'Checkout',
            'active' => 'Cart'
        ]);
    }

    public function delete($id){
        $order_details = OrderDetail::where('id', $id)->first();

        $order = Order::where('id', $order_details->order_id)->first();
        $order->total_price = $order->total_price-$order_details->total_price;
        $order->update();

        $order_details->delete();

        Alert::error('Order Deleted', 'Deleted');
        return redirect('/checkout');
    }

    public function confirm(){
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->address)){
            Alert::error('Please Complete Profile', 'Failed');
            return redirect('/dashboard/profile');    
        }
        if (empty($user->phone)) {
            Alert::error('Please Complete Profile', 'Failed');
            return redirect('/dashboard/profile');    
        }



        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order_id = $order->id;
        $order->status = 1;
        $order->update();

        $order_details = OrderDetail::where('order_id', $order_id)->get();
        foreach($order_details as $order_detail){
            $product = Product::where('id', $order_detail->product->id)->first();
            $product->stock = $product->stock-$order_detail->total;
            $product->update();
        }

        Alert::success('Order has been Checkout', 'Please continue payment');
        return redirect('history/'.$order->id);
    }

}
