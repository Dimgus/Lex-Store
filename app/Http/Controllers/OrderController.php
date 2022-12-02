<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index($product_name){
        // $product = Product::where('id', $id)->first();
        return view('order.index', [
            'title' => 'Order',
            'active' => 'order',
            'products' => Product::where('product_name', $product_name)->first()
        ]);
    }

    public function order(Request $request, $product_name){
        $products = Product::where('product_name', $product_name)->first();

        if($request->order_quantity > $products->stock){
            return redirect('/product/order/'.$product_name);
        }

        // Validate
        $check_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        // save to order database
        if(empty($check_order)){
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->date = Carbon::now();
            $order->status = 0;
            $order->total_price = 0;
            $order->code = mt_rand(100,999);
            $order->save();
        }

        // save to order_details database
        $new_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        // validate order_details
        $check_order_details = OrderDetail::where('product_id', $products->id)->where('order_id', $new_order->id)->first();

        if(empty($check_order_details)){
            $order_details = new OrderDetail;
            $order_details->product_id = $products->id;
            $order_details->order_id = $new_order->id;
            $order_details->total = $request->order_quantity;
            $order_details->total_price = $products->price*$request->order_quantity;
            $order_details->save();
        }else{
            $order_details = OrderDetail::where('product_id', $products->id)->where('order_id', $new_order->id)->first();
            $order_details->total = $order_details->total+$request->order_quantity;
            $order_details->total_price = $order_details->total_price+($products->price*$request->order_quantity);
            $order_details->update();
        }

        // Total amounts
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order->total_price = $order->total_price+($products->price*$request->order_quantity);
        $order->update();

        Alert::success('Order Successful', 'Success');
        return redirect('/checkout');
    }

    public function checkout(){
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order_details = OrderDetail::where('order_id', $order->id)->get();

        return view('order.checkout', compact('order', 'order_details'));
    }
}
