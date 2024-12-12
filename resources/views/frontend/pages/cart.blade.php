@extends('frontend.layouts.master')

@push('add-title')
    
@endpush

@push('add-css')
    
@endpush

@section('cart', 'active')

@section('body-content')

<!-- header-area-start -->
@include('frontend.include.header2')


@include('frontend.include.breadcrumb', ['title' => 'Cart Page'])
<!-- ./ page-header -->

<section class="cart-section pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="table-content cart-table">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="product-remove"></th>
                                <th class="cart-product-name text-center">Products</th>
                                <th class="product-price"> Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($carts as $row)
                                <tr>
                                    <td class="product-remove">
                                        <a href="{{ route('cart.delete', $row->id) }}">
                                            <i class='bx bx-x' style="font-size: 24px;"></i>
                                        </a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="{{ route('course-details', $row->id) }}">
                                            <img src="{{ asset($row->image) }}" alt="img">
                                        </a>
                                        <div class="product-thumbnail">
                                            <h4 class="title">{{ $row->title }}</h4>
                                        </div>
                                    </td>
                                    <td class="product-price"><span class="amount">${{ number_format($row->cart_price, 2) }}</span></td>
                                    <td class="product-quantity">
                                        <div class="quantity__group">
                                            <input type="number" class="input-text qty text" name="quantity" readonly value="{{ $row->cart_qty }}" min="1" max="100" step="1" autocomplete="off">
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">${{ number_format($row->cart_price * $row->cart_qty, 2) }}</span></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <div class="alert alert-danger mx-3" role="alert">
                                            There are no products in your cart.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <div class="checkout-proceed">
                                            <a href="{{ url('/') }}" class="ed-primary-btn checkout-btn">Go Back</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
                {{-- <div class="cart-btn-wrap">
                    <div class="left-item">
                        <input type="text" class="form-control" placeholder="Coupon Code">
                        <button class="ed-primary-btn">Apply Coupon</button>
                    </div>
                    <button class="ed-primary-btn update-btn">Update Cart</button>
                </div> --}}
            </div>
            <div class="col-lg-4">
            <div class="checkout-wrapper">
                <div class="checkout-top checkout-item item-1">
                    <h4 class="title">Cart Totals</h4>
                </div>
                <div class="checkout-top checkout-item">
                    <h4 class="title">Subtotal</h4>
                    <span class="price">${{ number_format(getTotalCartAmount(), 2) }}</span>
                </div>
                
                {{-- <div class="checkout-shipping checkout-item">
                    <h4 class="title">Shipping</h4>
                    <div class="shipping-right">
                        <div class="checkout-option-wrapper">
                            <div class="shipping-option">
                                <input id="flat_rate" type="radio" name="shipping">
                                <label for="flat_rate">Free Shipping</label>
                            </div>
                            <div class="shipping-option">
                                <input id="local_pickup" type="radio" name="shipping">
                                <label for="local_pickup">Flat Rate</label>
                            </div>
                            <div class="shipping-option">
                                <input id="free_shipping" type="radio" name="shipping">
                                <label for="free_shipping">Local Pickup</label>
                            </div>
                        </div>
                        <p>Shipping options will be updated <br> during checkout</p>
                        <span>Calculate Shipping</span>
                    </div>
                </div> --}}

                <div class="checkout-total checkout-item">
                    <h4 class="title">Total</h4>
                    <span>${{ number_format(getTotalCartAmount(), 2) }}</span>
                </div>
            </div>
            <div class="checkout-proceed">
                <a href="{{ route('checkout') }}" class="ed-primary-btn checkout-btn">Proceed to Checkout</a>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ cart-section -->


@endsection


@push('add-js')checkout
    
@endpush