<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title']  = "Manage Order List";
        $data['orders'] = Order::leftJoin('users', 'users.id', 'orders.user_id')
                    ->select('users.*','orders.order_id','orders.total_product','orders.total_amount','orders.payment_method', 'orders.status', 'orders.created_at', 'orders.transaction_id', 'orders.payment_number',)
                    ->where('users.role', 2)
                    ->orderBy('orders.id', 'DESC')
                    ->get();
        return view('admin.pages.order.index', $data);
    }


    public function update(string $order_id)
    {
        //  dd($order_id);
        $order  =  Order::where('order_id', $order_id)->first();
        $order->status = 1;
        $order->save();

         Toastr::success(trans('Order Confirm Successfully!'), 'Success', ["positionClass" => "toast-top-right"]);
         return redirect()->back();
    }
}
