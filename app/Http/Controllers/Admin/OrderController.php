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
                            ->select('users.*','orders.order_id','orders.total_product','orders.total_amount','orders.payment_method')
                            ->get();
        return view('admin.pages.order.index', $data);
    }
}
