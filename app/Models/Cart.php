<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    public static function getCartData(){
        if( Auth::check() ){
            $cartData = self::leftJoin('courses', 'courses.id', 'carts.course_id')
            ->select('courses.*', 'carts.price as cart_price', 'carts.qty as cart_qty')
            ->where('carts.user_id', Auth::user()->id)->where('carts.order_id', NULL)
            ->get();
        }
        else{
            $cartData = [];
        }

        return $cartData;
    } 
}
