<?php

use App\Models\Cart;
use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

if (!function_exists('getSetting')) {
    function getSetting(){
        return DB::table('settings')->first();
    }
}


if (!function_exists('getTotalCart')) {
    function getTotalCart(){
        if( Auth::check() ){
            $carts = App\Models\Cart::leftJoin('courses', 'courses.id', 'carts.course_id')
                    ->select('courses.*', 'carts.price as cart_price', 'carts.qty as cart_qty')
                    ->where('carts.user_id', Auth::user()->id)->where('carts.order_id', NULL)
                    ->get()->count();
        }
        else{
            $carts = 0;
        }

        return $carts;
    }
}

if (!function_exists('getTotalCartAmount')) {
    function getTotalCartAmount(){
        if( Auth::check() ){
        $carts = Cart::leftJoin('courses', 'courses.id', 'carts.course_id')
                ->select('courses.*', 'carts.price as cart_price', 'carts.qty as cart_qty')
                ->where('carts.user_id', Auth::user()->id)->where('carts.order_id', NULL)
                ->get();
        }
        else{
            $carts = [];
        }

        $total_amount = 0;
        foreach( $carts as $item ){
            $total_amount += $item->cart_price * $item->cart_qty;
        }

        return $total_amount;
    }
}

// if (!function_exists('getSetting')) {
//     function getSetting(){
//         return DB::table('settings')->orderBy('id','DESC')->first();
//     }
// }

// if (!function_exists('getUser')) {
//     function getUser($id){
//         return DB::table('users')->where('id', $id)->first();
//     }
// }

// if (!function_exists('getPlan')) {
//     function getPlan($id){
//         return DB::table('plans')->where('id', $id)->first();
//     }
// }
// if (!function_exists('totalUserCount')) {
//     function totalUserCount($parentId){
//         return DB::table('users')->where('parent_user', $parentId)->count();
//     }
// }

// if (!function_exists('getNotification')) {
//     function getNotification($id){
//         return DB::table('notification_template')->where('id', $id)->first();
//     }
// }

// if (!function_exists('getUniqueSecretKey')) {
//     function getUniqueSecretKey()
//     {
//         $secretKey = Str::random(16);
//         $existingKey = DB::table('secret_keys')->where('key', $secretKey)->first();
//         if ($existingKey) {
//             return getUniqueSecretKey();
//         }

//         return $secretKey;
//     }
// }

// if (!function_exists('getDesignation')) {
//     function getDesignation($id){
//         return DB::table('designations')->where('id', $id)->first();
//     }
// }
// if (!function_exists('getAlarmLevel')) {
//     function getAlarmLevel($id){
//         return DB::table('defcon_level')->where('id', $id)->first();
//     }
// }

// function getUserIpAddr()
// {
//     $hostname = gethostname();
//     $localIP = getHostByName($hostname); 
//     return $localIP;
// }

// if (!function_exists('getUserSetting')) {
//     function getUserSetting($userid){
//         return DB::table('user_settings')->where('user_id', $userid)->first();
//     }
// }
// /*Print Validation Error List*/
// if (!function_exists('vError')) {
//     function vError($errors)
//     {
//         if ($errors->any()){
//             foreach ($errors->all() as $error){
//                 echo '<li class="text-danger">'. $error .'</li>';
//             }
//         }
//         else {
//             echo 'Not found any validation error';
//         }
//     }
// }
// if (!function_exists('get_error_response')) {
//     function get_error_response($code, $reason, $errors = [],  $error_as_string = '', $description = '')
//     {
//         if ($error_as_string == '') {
//             $error_as_string = $reason;
//         }
//         if ($description == '') {
//             $description = $reason;
//         }
//         return [
//             'code'          => $code,
//             'errors'        => $errors,
//             'error_as_string'  => $error_as_string,
//             'reason'        => $reason,
//             'description'   => $description,
//             'error_code'    => $code,
//             'link'          => ''
//         ];
//     }
// }

// if (!function_exists('checkPackageValidity')) {
//     function checkPackageValidity($user_id)
//     {
//         $user = DB::table('users')->where('id',$user_id)->first();
//         $today = strtotime("today midnight");
//         $expire = strtotime($user->plan_validity);
//         if($today >= $expire){
//             return false;
//         } else {
//             return true;
//         }
//     }
// }


// if (!function_exists('checkCardLimit')) {
//     function checkCardLimit($user_id)
//     {
//         $user = DB::table('users')->where('id',$user_id)->first();
//         if($user->plan_details){
//             $plan_details = json_decode($user->plan_details,true);
//             if($plan_details['no_of_vcards'] != 9999){
//                 $user_card = DB::table('business_cards')->where('status',1)->where('user_id',$user_id)->count();
//                 if($plan_details['no_of_vcards'] <=  $user_card){
//                     return false ;
//                 }
//             }
//         }
//         return true;
//     }
// }
// if (!function_exists('getPhoto')) {
//     function getPhoto($path)
//     {
//         if ($path && (str_starts_with($path, 'http://') || str_starts_with($path, 'https://'))) {
//             return $path;
//         }
        
//         if ($path) {
//             $ppath = public_path($path);
//             if (file_exists($ppath)) {
//                 return asset($path);
//             } else {
//                 return asset('assets/images/team/team-01.png');
//             }
//         } else { 
//             return asset('assets/images/team/team-01.png');
//         }
//     }
// }


// if (!function_exists('getAvatar')) {
//     function getAvatar($path)
//     {
//         if(!empty($path)){
//               return $path;
//             } else {
//             // return asset('assets/img/card/personal.png');
//             return asset('assets/img/default-profile.png');
//         }
//     }
// }

// if (!function_exists('getCover')) {
//     function getCover($path = null)
//     {
//         if($path){
//             $ppath = public_path($path);
//             if(file_exists($ppath)){
//               return asset($path);
//             } else {
//                 return asset('assets/img/default-cover.png');
//            }
//         }else{
//             return asset('assets/img/default-cover.png');
//         }
//     }
// }
// if (!function_exists('getProfile')) {
//     function getProfile($path = null)
//     {
//         if($path){
//             $ppath = public_path($path);
//             if(file_exists($ppath)){
//               return asset($path);
//             } else {
//                 return asset('assets/images/default-user.png');
//            }
//         }else{
//             return asset('assets/images/default-user.png');
//         }

//     }
// }
// if (!function_exists('getLogo')) {
//     function getLogo($path = null)
//     {
//         if($path){
//             $ppath = public_path($path);
//             if(file_exists($ppath)){
//               return asset($path);
//             } else {
//                 return asset('assets/images/demo-icon.png');
//            }
//         }else{
//             return asset('assets/images/demo-icon.png');
//         }
//     }
// }

// if (!function_exists('getIcon')) {
//     function getIcon($path = null)
//     {
//         if($path){
//             $ppath = public_path($path);
//             if(file_exists($ppath)){
//               return asset($path);
//             } else {
//                 return asset('assets/images/demo-icon.png');
//            }
//         }else{
//             return asset('assets/images/demo-icon.png');
//         }
//     }
// }

// if (!function_exists('getSeoImage')) {
//     function getSeoImage($path = null)
//     {
//         if($path){
//             $ppath = public_path($path);
//             if(file_exists($ppath)){
//               return asset($path);
//             } else {
//                 return asset('assets/images/demo-icon.png');
//            }
//         }else{
//             return asset('assets/images/demo-icon.png');
//         }
//     }
// }



// if (!function_exists('getDesigComp')) {
//     function getDesigComp($desig,$comp)
//     {
//         if($desig != '' & $comp != '' ){
//             return  $desig.' At '.$comp;
//         }else{
//             return  $desig.' '.$comp;
//         }

//     }
// }


// if (!function_exists('makeUrl')) {
//     function makeUrl($url)
//     {
//         if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
//             $url = "http://" . $url;
//         }
//         return $url;
//     }
// }

// if (!function_exists('getSocialIcon')) {
//     function getSocialIcon($ikey)
//     {
//         return DB::table('social_icon')->where('icon_name','=',$ikey)->first();
//     }
// }

// if (!function_exists('CurrencyFormat')) {
//     function CurrencyFormat($number, $decimal = 1) { // cents: 0=never, 1=if needed, 2=always
//         if (is_numeric($number)) { // a number
//             if (!$number) { // zero
//             $money = ($decimal == 2 ? '0.00' : '0.00'); // output zero
//             } else { // value
//             if (floor($number) == $number) { // whole number
//                 $money = number_format($number, ($decimal == 2 ? 2 : 2)); // format
//             } else { // cents
//                 $money = number_format(round($number, 2), ($decimal == 0 ? 0 : 2)); // format
//             } // integer or decimal
//             } // value
//             return $money;
//         } // numeric
//     } //
// }


// function formatFileName($file)
// {
//     $base_name = preg_replace('/\..+$/', '', $file->getClientOriginalName());
//     $base_name = explode(' ', $base_name);
//     $base_name = implode('-', $base_name);
//     $base_name = Str::lower($base_name);
//     $file_name = $base_name."-".uniqid().".".$file->getClientOriginalExtension();
//     return $file_name;
// }

// function checkPackage($id = null){
//     if($id){
//         $user = DB::table('users')->where('id',$id)->first();
//         if($user->plan_id){
//             return true;
//         }else{
//             return false;
//         }
//     }else{
//         return true;
//     }
// }


// function isFreePlan($user_id){
//     $user = DB::table('users')->select('plans.is_free')->leftJoin('plans','plans.id','=','users.plan_id')->where('users.id',$user_id)->first();
//     if($user->is_free==1){
//         return true;
//     }
//     return false;
// }
// function isAnnualPlan($user_id){
//     $user = DB::table('users')->select('users.*','plans.is_free')
//     ->leftJoin('plans','plans.id','=','users.plan_id')
//     ->where('users.id',$user_id)
//     ->first();
//     $subscription_end = new \Carbon\Carbon($user->plan_validity);
//     $subscription_start = new \Carbon\Carbon($user->plan_activation_date);
//     $diff_in_days = $subscription_start->diffInDays($subscription_end);
//     if($diff_in_days > 364 && $user->is_free==0){
//         return true;
//     }
//     return false;
// }

// function uploadImage(?object $file, string $path, int $width, int $height, $watermark = false): string
// {
//     // $width = 850;
//     // $height = 650;
//     $blank_img =  Image::canvas($width, $height, '#EBEEF7');
//     $pathCreate = public_path("/uploads/$path/");
//     if (!File::isDirectory($pathCreate)) {
//         File::makeDirectory($pathCreate, 0777, true, true);
//     }

//     $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
//     $updated_img = Image::make($file->getRealPath());
//     $imageWidth = $updated_img->width();
//     $imageHeight = $updated_img->height();
//     if ($imageWidth > $width) {

//         $updated_img->resize($width, null, function ($constraint) {
//             $constraint->aspectRatio();
//         });
//     }
//     if ($imageHeight > $height) {

//         $updated_img->resize(null, $height, function ($constraint) {
//             $constraint->aspectRatio();
//         });
//     }


//     $blank_img->insert($updated_img, 'center');
//     $blank_img->save(public_path('/uploads/' . $path . '/') . $fileName);
//     return "uploads/$path/" . $fileName;
// }



