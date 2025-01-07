@extends('frontend.layouts.master')

@push('add-title')
    
@endpush

@push('add-css')
    
@endpush

{{-- @php
    $user = App\Models\User::leftJoin('addresses', 'addresses.user_id', 'users.id')
           ->select('addresses.*', 'users.*')
           ->where('users.id', Auth::user()->id)
           ->first();
@endphp --}}

@section('body-content')

<!-- header-area-start -->
@include('frontend.include.header2')


@include('frontend.include.breadcrumb', ['title' => 'Checkout'])
<!-- ./ page-header -->

<section class="checkout-section pt-100 pb-100">
    <div class="container">
        {{-- <div class="checkout-top">
            <div class="coupon-list">
                <div class="verify-item mb-30">
                    <h4 class="title">Returning customers?<button type="button" class="rr-checkout-login-form-reveal-btn">Click here</button> to login</h4>
                    <div id="rrReturnCustomerLoginForm" class="login-form">
                        <form action="mail.php">
                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                            <input type="text" id="password" name="password" class="form-control" placeholder="Password">
                        </form>
                        <div class="checkbox-wrap">
                            <div class="checkbox-item">
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3">Remember Me</label>
                            </div>
                            <a href="#" class="forgot">Forgot Password?</a>
                        </div>
                        <button class="ed-primary-btn">Login</button>
                    </div>
                </div>
                <div class="verify-item">
                    <h4 class="title">Returning customers?<button type="button" class="rr-checkout-coupon-form-reveal-btn">Click here</button> to login</h4>
                    <div id="rrCheckoutCouponForm" class="login-form">
                        <form action="mail.php">
                            <input type="text" id="code" name="code" class="form-control" placeholder="Coupon Code">
                        </form>
                        <button class="ed-primary-btn">Apply</button>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <form action="{{ route('order') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="checkout-left">
                        <h3 class="form-header">Billing Details</h3>

                        <div class="checkout-form-wrap">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item name">
                                        <h4 class="form-title">Full Name*</h4>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>

                                {{-- <div class="col-md-6">
                                    <div class="form-item">
                                        <h4 class="form-title">Last Name*</h4>
                                        <input type="text" id="last_name" name="last_name" class="form-control">
                                    </div>
                                </div> --}}
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Email Address*</h4>
                                        <input type="email" readonly id="email" value="{{ Auth::user()->email }}" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>


                            {{-- <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Country / Region*</h4>
                                        <input type="text" id="country" name="country" class="form-control" placeholder="United States (US)">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item ">
                                        <h4 class="form-title">Street Address*</h4>
                                        <input type="text" id="address" name="address" class="form-control street-control" value="{{ old('address', Auth::user()->address ?? "") }}" placeholder="House number and street number">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Town / City*</h4>
                                        <input type="text" id="city" name="city" class="form-control" value="{{ old('city', Auth::user()->city ?? "") }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Zip Code*</h4>
                                        <input type="number" id="zip_code" name="zip_code" class="form-control" value="{{ old('zip_code', Auth::user()->zip_code ?? "") }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Phone*</h4>
                                        <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', Auth::user()->phone ?? "") }}">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="checkout-right">
                        <h3 class="form-header">Your Order</h3>
                        <div class="order-box">
                            <div class="order-items">
                                <div class="order-item item-1">
                                    <div class="order-left">
                                        <span class="product">Product</span>
                                    </div>
                                    <div class="order-right">
                                        <span class="price">Price</span>
                                    </div>
                                </div>

                                @foreach ($carts as $row)
                                    <div class="order-item">
                                        <div class="order-left">
                                            <a href="{{ route('course-details', $row->id) }}" class="order-img">
                                                <img src="{{ asset($row->image) }}" alt="img">
                                            </a>
                                        </div>
                                        <div class="order-right">
                                            <div class="content">
                                                <span class="category">{{ $row->cart_qty }} qty * $ {{ number_format($row->cart_price, 2) }}</span>
                                                <h4 class="title">{{ $row->title }}</h4>
                                            </div>
                                            <span class="price">${{ number_format($row->cart_qty * $row->cart_price, 2) }}</span>
                                        </div>
                                    </div>
                                @endforeach


                                {{-- <div class="order-item">
                                    <div class="order-left">
                                        <div class="order-img"><img src="{{ asset('frontend/assets/img/shop/shop-2.png') }}" alt="img"></div>
                                    </div>
                                    <div class="order-right">
                                        <div class="content">
                                            <span class="category">Ups System</span>
                                            <h4 class="title">Nova Sound Elegance</h4>
                                        </div>
                                        <span class="price">$500.00</span>
                                    </div>
                                </div>

                                <div class="order-item">
                                    <div class="order-left">
                                        <div class="order-img"><img src="{{ asset('frontend/assets/img/shop/shop-3.png') }}" alt="img"></div>
                                    </div>
                                    <div class="order-right">
                                        <div class="content">
                                            <span class="category">Headset Mic</span>
                                            <h4 class="title">Pure Pod Harmony</h4>
                                        </div>
                                        <span class="price">$500.00</span>
                                    </div>
                                </div> --}}

                                <div class="order-item item-1">
                                    <div class="order-left">
                                        <span class="left-title">Subtotal</span>
                                    </div>
                                    <div class="order-right">
                                        <span class="right-title">${{ number_format(getTotalCartAmount(), 2) }}</span>
                                    </div>
                                </div>

                                {{-- <div class="order-item item-1">
                                    <div class="order-left">
                                        <span class="left-title">Shipping</span>
                                    </div>
                                    <div class="order-right">
                                        <span class="right-title"><span>Flat rate:</span>$50.00</span>
                                    </div>
                                </div> --}}

                                <div class="order-item item-1">
                                    <div class="order-left">
                                        <span class="left-title">Total Price:</span>
                                    </div>
                                    <div class="order-right">
                                        <span class="right-title title-2">${{ number_format(getTotalCartAmount(), 2) }}</span>
                                        <input type="hidden" name="total_amount" value="{{ getTotalCartAmount() }}">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="total_product" value="{{ getTotalCart() }}">

                            <div class="payment-option-wrap">
                                <div class="payment-option">
                                    {{-- <div class="shipping-option">
                                        <div class="options">
                                            <input id="flat_rate" type="radio" name="shipping">
                                            <label for="flat_rate">Direct Bank Transfer</label>
                                        </div>
                                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                    </div> --}}

                                    {{-- <div class="shipping-option">
                                        <input id="local_pickup" type="radio" name="shipping">
                                        <label for="local_pickup">Check Payments</label>
                                    </div> --}}

                                    <div class="shipping-option mb-5">
                                        <input id="free_shipping" type="radio" name="payment_method" value="cash_payment" required data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <label for="free_shipping" >Cash Payment</label>

                                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                 <div class="mb-3 mt-3">
                                                    <input type="text" class="form-control" name="payment_number" placeholder="Payment Number" required>
                                                 </div>

                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="transaction_id" placeholder="Transaction Id" required>
                                                </div>
                                            </div>
                                    </div>

                                    {{-- <div class="shipping-option">
                                        <input id="paypal" type="radio" name="shipping">
                                        <label for="paypal">Paypal</label>
                                    </div> --}}
                                </div>
                                
                                {{-- <p class="desc">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <span>privacy policy.</span></p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I have read and agree terms and conditions *
                                    </label>
                                </div> --}}

                                <button class="ed-primary-btn order-btn">Place Your Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- ./ checkout-section -->

@endsection


@push('add-js')
    
@endpush