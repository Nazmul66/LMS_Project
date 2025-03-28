<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <title>Email template</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet" />
</head>

<body style="margin: 20px auto; text-align: center; margin: 0 auto; width: 650px; font-family: 'Open Sans', sans-serif; background-color: #e2e2e2; display: block">
    <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin-top: 0; padding: 0 30px; background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353); box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353); width: 100%">
        <tbody>
            <tr>
                <td>
                    <table style="margin-top: 0" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <img src="{{ asset('multikart/email-template/images/delivery.png') }}" alt="" style="margin-bottom: 30px" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('multikart/email-template/images/success.png') }}" alt="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="title" style="color: #444444; font-size: 22px; font-weight: bold; margin-top: 10px; margin-bottom: 10px; padding-bottom: 0; text-transform: uppercase; display: inline-block; line-height: 1">
                                    thank you</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 15px 0">Payment Is Successfully Processsed And Your Order Is On The Way</p>
                                <p style="margin: 15px 0">Transaction ID: {{ $mailData->order_id }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="border-top: 1px solid #777; height: 1px; margin-top: 30px"></div>
                            </td>
                        </tr>
                        {{-- <tr>
                            <td>
                                <img src="{{ asset('multikart/email-template/images/order-success.png') }}" alt="" style="margin-top: 30px" />
                            </td>
                        </tr> --}}
                    </table>

                    <table style="margin-top: 0" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <h2 class="title" style="color: #444444; font-size: 22px; font-weight: bold; margin-top: 10px; margin-bottom: 10px; padding-bottom: 0; text-transform: uppercase; display: inline-block; line-height: 1">
                                    YOUR ORDER DETAILS</h2>
                            </td>
                        </tr>
                    </table>

                    <table style="margin-top: 0; border: 1px solid #ddd; border-collapse: collapse" class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
                        <tr align="left">
                            <th style="font-size: 16px; padding: 15px; text-align: center; border: 1px solid #ddd; border-collapse: collapse">
                                PRODUCT</th>
                            <th style="font-size: 16px; padding: 15px; text-align: center; padding-left: 15px; border: 1px solid #ddd; border-collapse: collapse">
                                DESCRIPTION</th>
                            <th style="font-size: 16px; padding: 15px; text-align: center; border: 1px solid #ddd; border-collapse: collapse">
                                QUANTITY</th>
                            <th style="font-size: 16px; padding: 15px; text-align: center; border: 1px solid #ddd; border-collapse: collapse">
                                PRICE</th>
                        </tr>

                        @php
                            $carts = App\Models\Cart::
                                    leftJoin('courses', 'courses.id', 'carts.course_id')->select('courses.image', 'courses.title', 'carts.price', 'carts.qty')
                                    ->where('carts.order_id', $mailData->order_id)
                                    ->get();
                        @endphp

                        @foreach ($carts as $row)
                            <tr>
                                <td style="border: 1px solid #ddd; border-collapse: collapse">
                                    <img src="{{ asset($row->image) }}" alt="" width="70" />
                                </td>

                                <td style="border: 1px solid #ddd; border-collapse: collapse; padding-left: 15px" valign="top">
                                    <h5 style="text-align: left; font-weight: 400; margin-top: 15px; color: #444">{{ $row->title }}</h5>
                                </td>

                                <td style="border: 1px solid #ddd; border-collapse: collapse; padding-left: 15px" valign="top">
                                    {{-- <h5 style="text-align: left; font-weight: 400; font-size: 14px; color: #444; margin-top: 15px; margin-bottom: 0px">
                                        Size : <span> L</span></h5> --}}
                                    <h5 style="text-align: left; font-weight: 400; font-size: 14px; color: #444; margin-top: 10px">QTY :
                                        <span>{{ $row->qty }}</span>
                                    </h5>
                                </td>

                                <td style="border: 1px solid #ddd; border-collapse: collapse; padding-left: 15px" valign="top">
                                    <h5 style="text-align: left; font-weight: 400; font-size: 14px; color: #444; margin-top: 15px">
                                        <b>${{ $row->price }}</b>
                                    </h5>
                                </td>
                            </tr>
                        @endforeach
                        

                        {{-- <tr>
                            <td style="border: 1px solid #ddd; border-collapse: collapse">
                                <img src="{{ asset('multikart/email-template/images/product/9.jpg') }}" alt="" width="70" />
                            </td>
                            <td style="border: 1px solid #ddd; border-collapse: collapse; padding-left: 15px" valign="top">
                                <h5 style="text-align: left; font-weight: 400; margin-top: 15px; color: #444">Three seater Wood Style sofa for Leavingroom</h5>
                            </td>
                            <td style="border: 1px solid #ddd; border-collapse: collapse; padding-left: 15px" valign="top">
                                <h5 style="text-align: left; font-weight: 400; font-size: 14px; color: #444; margin-top: 15px; margin-bottom: 0px">
                                    Size : <span> L</span></h5>
                                <h5 style="text-align: left; font-weight: 400; font-size: 14px; color: #444; margin-top: 10px">QTY :
                                    <span>1</span>
                                </h5>
                            </td>
                            <td style="border: 1px solid #ddd; border-collapse: collapse; padding-left: 15px" valign="top">
                                <h5 style="text-align: left; font-weight: 400; font-size: 14px; color: #444; margin-top: 15px">
                                    <b>$500</b>
                                </h5>
                            </td>
                        </tr> --}}


                        <tr>
                            <td style="border-bottom: 1px solid #ddd; border-collapse: collapse; line-height: 49px; font-size: 13px; color: #000000; padding-left: 20px; text-align: left; border-right: unset" colspan="2" style="line-height: 49px; font-size: 13px; color: #000000; padding-left: 20px; text-align: left; border-right: unset">
                                Products:</td>
                            <td style="border-bottom: 1px solid #ddd; line-height: 49px; padding-right: 28px; font-size: 13px; color: #000000; text-align: right; border-left: unset" colspan="3" class="price" style="line-height: 49px; text-align: right; padding-right: 28px; font-size: 13px; color: #000000; text-align: right; border-left: unset">
                                <b>${{ number_format($mailData->total_amount, 2) }}</b>
                            </td>
                        </tr>

                        {{-- <tr>
                            <td style="border-bottom: 1px solid #ddd; border-collapse: collapse; line-height: 49px; font-size: 13px; color: #000000; padding-left: 20px; text-align: left; border-right: unset" colspan="2" style="line-height: 49px; font-size: 13px; color: #000000; padding-left: 20px; text-align: left; border-right: unset">
                                Discount :</td>
                            <td style="border-bottom: 1px solid #ddd; line-height: 49px; padding-right: 28px; font-size: 13px; color: #000000; text-align: right; border-left: unset" colspan="3" class="price" style="line-height: 49px; text-align: right; padding-right: 28px; font-size: 13px; color: #000000; text-align: right; border-left: unset">
                                <b>$10</b>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 1px solid #ddd; border-collapse: collapse; line-height: 49px; font-size: 13px; color: #000000; padding-left: 20px; text-align: left; border-right: unset" colspan="2" style="line-height: 49px; font-family: Arial; font-size: 13px; color: #000000; padding-left: 20px; text-align: left; border-right: unset">
                                Gift Wripping:</td>
                            <td style="border-bottom: 1px solid #ddd; line-height: 49px; padding-right: 28px; font-size: 13px; color: #000000; text-align: right; border-left: unset" colspan="3" class="price" style="line-height: 49px; text-align: right; padding-right: 28px; font-size: 13px; color: #000000; text-align: right; border-left: unset">
                                <b>$2600</b>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 1px solid #ddd; border-collapse: collapse; line-height: 49px; font-size: 13px; color: #000000; padding-left: 20px; text-align: left; border-right: unset" colspan="2" style="line-height: 49px; font-size: 13px; color: #000000; padding-left: 20px; text-align: left; border-right: unset">
                                Shipping :</td>
                            <td style="border-bottom: 1px solid #ddd; line-height: 49px; padding-right: 28px; font-size: 13px; color: #000000; text-align: right; border-left: unset" colspan="3" class="price" style="line-height: 49px; text-align: right; padding-right: 28px; font-size: 13px; color: #000000; text-align: right; border-left: unset">
                                <b>$30</b>
                            </td>
                        </tr> --}}

                        <tr>
                            <td style="border-bottom: 1px solid #ddd; border-collapse: collapse; line-height: 49px; font-size: 13px; color: #000000; padding-left: 20px; text-align: left; border-right: unset" colspan="2" style="line-height: 49px; font-size: 13px; color: #000000; padding-left: 20px; text-align: left; border-right: unset">
                                TOTAL PAID :</td>
                            <td style="border-bottom: 1px solid #ddd; line-height: 49px; padding-right: 28px; font-size: 13px; color: #000000; text-align: right; border-left: unset" colspan="3" class="price" style="line-height: 49px; text-align: right; padding-right: 28px; font-size: 13px; color: #000000; text-align: right; border-left: unset">
                                <b>${{ $mailData->total_amount }}</b>
                            </td>
                        </tr>
                    </table>

                    <table style="width: 100%; margin-top: 30px; margin-bottom: 30px" cellpadding="0" cellspacing="0" border="0" align="left" style="width: 100%; margin-top: 30px; margin-bottom: 30px">
                        <tbody>
                            <tr>
                                <td style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px; width: 50%">
                                    <h5 style="text-align: left; font-weight: 400; font-size: 16px; font-weight: 500; color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top: 0; margin-bottom: 13px">
                                        Delivery Address</h5>
                                    <p style="margin: 15px 0; text-align: left; font-weight: normal; font-size: 14px; color: #000000; line-height: 21px; margin-top: 0">
                                        {{ $mailData->address }}
                                    </p>
                                </td>
                                <td width="57" height="25" class="user-info">
                                    <img src="{{ asset('multikart/email-template/images/space.jpg') }}" alt=" " height="25" width="57" /></td>
                                <td class="user-info" style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px; width: 50%">
                                    <h5 style="text-align: left; font-weight: 400; font-size: 16px; font-weight: 500; color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top: 0; margin-bottom: 13px">
                                        Shipping Address</h5>
                                    <p style="margin: 15px 0; text-align: left; font-weight: normal; font-size: 14px; color: #000000; line-height: 21px; margin-top: 0">
                                        {{ $mailData->address }}
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <table style="margin-top: 0; text-align: center; background-color: #fafafa" class="main-bg-light text-center top-0" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 30px">
                <div>
                    <h4 class="title" style="margin: 0; text-align: center; color: #444444; font-size: 22px; font-weight: bold; margin-top: 10px; margin-bottom: 10px; padding-bottom: 0; text-transform: uppercase; display: inline-block; line-height: 1">
                        Follow us</h4>
                </div>
                <table style="margin-top: 20px" border="0" cellpadding="0" cellspacing="0" class="footer-social-icon" align="center" class="text-center" style="margin-top: 20px; text-align: center">
                    <tr>
                        <td>
                            @if ( !empty(getSetting()->facebook_url) )
                                <a style="text-decoration: none" href="{{ getSetting()->facebook_url }}">
                                    <img style="margin-left: 5px; margin-right: 5px" src="{{ asset('multikart/email-template/images/facebook.png') }}" alt="" />
                                </a> 
                            @endif
                        </td>

                        {{-- <td>
                            <a style="text-decoration: none" href="#">
                                <img style="margin-left: 5px; margin-right: 5px" src="{{ asset('multikart/email-template/images/youtube.png') }}" alt="" />
                            </a>
                        </td> --}}

                        <td>
                            @if ( !empty(getSetting()->twitter_url) )
                                <a style="text-decoration: none" href="{{ getSetting()->twitter_url }}">
                                    <img style="margin-left: 5px; margin-right: 5px" src="{{ asset('multikart/email-template/images/twitter.png') }}" alt="" />
                                </a>
                            @endif
                        </td>

                        <td>
                            <a style="text-decoration: none" href="mailto: {{ $mailData->email }}">
                                <img style="margin-left: 5px; margin-right: 5px" src="{{ asset('multikart/email-template/images/gplus.png') }}" alt="" />
                            </a>
                        </td>

                        <td>
                            @if ( !empty(getSetting()->linkedin_url) )
                                <a style="text-decoration: none" href="{{ getSetting()->linkedin_url }}">
                                    <img style="margin-left: 5px; margin-right: 5px" src="{{ asset('multikart/email-template/images/linkedin.png') }}" alt="" />
                                </a>
                            @endif
                        </td>

                        {{-- <td>
                            <a style="text-decoration: none" href="#">
                                <img style="margin-left: 5px; margin-right: 5px" src="{{ asset('multikart/email-template/images/pinterest.png') }}" alt="" />
                            </a>
                        </td> --}}
                    </tr>
                </table>
                <div style="border-top: 1px solid #ddd; margin: 20px auto 0"></div>
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px auto 0">
                    <tbody>
                        {{-- <tr>
                            <td>
                                <a href="#" style="font-size: 13px; text-decoration: none">Want to change how you receive these
                  emails?</a>
                            </td>
                        </tr> --}}
                        <tr>
                            <td>
                                <p style="font-size: 13px; margin: 0">Copyright © <u><a href="{{ url('/') }}">{{ getSetting()->copyright ?? '2024' }}</a></u> . All Rights Reserved.</p>
                            </td>
                        </tr>
                        {{-- <tr>
                            <td>
                                <a href="#" style="font-size: 13px; margin: 0; text-decoration: underline">Unsubscribe</a>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>