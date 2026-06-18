@extends('frontend.layouts.app')
@section('content')

@if(Session::has('order_code'))
@php
$order_code=Session::get('order_code');
//dd($order_code);
@endphp
@else
@php
$order_code="Session expired";
@endphp
@endif

@if(Session::has('order_date'))
@php
$order_date=Session::get('order_date');
//dd($order_code);
@endphp
@else
@php
$order_date="Session expired";
@endphp
@endif



{{--Old Code Start--}}
{{--
<section class="mid_section">
    <div class=" container payment_section">
        <div class="pay_result">
            <h1 class="pay_title">Payment successful!</h1>
            <p class="pay_subtitle">thank you for your order, an email will  be sent with your order confirmation and the details of said order.</p>
            <div class="pay_buttons">
                <button class="btn explore_button" onclick="window.location.href='{{ route('certified_translation') }}'">Request&nbsp;one&nbsp;more&nbsp;translation</button>
                <button class="btn home_button" onclick="window.location.href='{{ route('home') }}'">Back&nbsp;home</button>
            </div>
        </div>
        <div class="pay_summary">
            <div class="order_details">
                <p class="order_no">Order #{{$order_code}}</p>
                <p class="order_date">Date {{ date('d-m-Y H:m A', $order_date) }}</p>
            </div>
            @php
            $total=0;
            @endphp
                
            @foreach ($order as $key => $orderDetail)
                @php
                    $product = \App\Product::find($orderDetail->product_id);
                    $order = \App\Order::find($orderDetail->order_id);
                    $total = $total + round(convert_price($orderDetail->price),2);
                    //dd($order);
                @endphp
            <div class="certified_trans">
                <div class="certified_data">
                    <h7 class="certified_title">{{ $product->name }}</h7>
                    <p class="no_pages">{{ $orderDetail->service_no_of_pages  }} Pages ({{ $orderDetail->service_no_of_words  }} words max)</p>
                </div>
                <h6 class="certified_amt">{{ single_price($orderDetail->price) }}</h6>
            </div>
            @endforeach
            <!-- <div class="certified_trans">
                <div class="certified_data">
                    <h7 class="certified_title">Certified Translation</h7>
                    <p class="no_pages">4 pages (1,000 words max)</p>
                </div>
                <h6 class="certified_amt">£99.80</h6>
            </div> -->
            <div class="total_amt">
                <div class="sub_line"></div>
                <div class="total_terms">
                <div class="sub_total">
                    <p class="subtotal_amt">Sub total</p>
                    <p class="sub_amt">{{ currency_symbol().$total }}</p>
                </div>
                <!-- <div class="sub_total">
                    <p class="subtotal_amt">Discount</p>
                    <p class="sub_amt">£0</p>
                </div>
                <div class="sub_total">
                    <p class="subtotal_amt">Tax</p>
                    <p class="sub_amt">£0</p>
                </div> -->
            </div>
                <div class="sub_line"></div>
                <div class="sub_total">
                    <h5 class="total">Total</h5>
                    <h5 class="total">{{ currency_symbol().$total }}</h5>
                </div>



            </div>

        </div>

    </div>

</section>
--}}
{{--Old Code End--}}
{{--NEW CODE STARTS--}}

{{--<section class="payment-successful-section payment-main">
        <div class="container">
            <div class="col">
                <div class="payment-content-left-main">
                    <div class="row">
                        <div class="payment-content-left" data-aos="fade-up">
                            <h2>Payment Successful!</h2>
                            <p style="color: #587B5D;">When your translation has been completed, it will be delivered straight to your inbox via email. </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <a href="{{ route('home') }}" class="btn btn-white">Homepage</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <a href="{{ route('purchase_history.index') }}" class="btn btn-yellow">View Account</a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
  </section>--}}

{{--NEW CODE ENDS--}}

{{--New Code Start--}}

<div class="cf_div">

    <div class="left_cf">

        <img src="{{ asset('frontend/Lingosphere/img/cf_right_sound.svg') }}" alt="" class="img-fluid cf_right_sound mobile_none">
        <img src="{{ asset('frontend/Lingosphere/img/cf_left_sound.svg') }}" alt="" class="img-fluid cf_left_sound mobile_none">

        <div class="in_left_cf">

            <h1 class="cf_tt">
                Payment Successful!
            </h1>

            <p class="cs_pp">Congratulations, your payment was successful! Thank you for your order. 
</p>
            <div class="btn_div">

                <button class="btn cf_leftbtn forphone_100width" onclick="window.location.href='{{ route('home') }}'">
                    Return home
                </button>

                <button class="btn cf_rightbtn forphone_100width" onclick="window.location.href='{{ route('dashboard') }}'">
                    View Order
                </button>

                

            </div>
        </div>

    </div>

    <div class="right_cs">

    </div>

</div>

{{--New Code End--}}

@endsection
@section('script')
<script>
    $(document).ready(function () {
        $(".hamburger_menu").click(function () {
            $(".header_mobo_main_slide").fadeIn("slow");
            $(".hamburger_menu").fadeOut("slow");
            $(".hamburger_menu_close").fadeIn("slow");
            $(".header_cart_mobo_main_slide").fadeOut("slow");
        });
        $(".hamburger_menu_close").click(function () {
            $(".header_mobo_main_slide").fadeOut("slow");
            $(".hamburger_menu").fadeIn("slow");
            $(".hamburger_menu_close").fadeOut("slow");
        });
        $(".cart_menu").click(function () {
            $(".header_cart_mobo_main_slide").fadeIn("slow");
            $(".cart_menu").fadeOut("slow");
            $(".cart_menu_close").fadeIn("slow");
            $(".header_mobo_main_slide").fadeOut("slow");
        });
        $(".cart_menu_close").click(function () {
            $(".header_cart_mobo_main_slide").fadeOut("slow");
            $(".cart_menu").fadeIn("slow");
            $(".cart_menu_close").fadeOut("slow");
        });
    });

    function justDrop(droperId, roterId) {
        const theId = document.getElementById(droperId);
        const theId2 = document.getElementById(roterId);
        if (theId.classList.contains('d-none')) {
            theId.classList.remove('d-none');
            theId2.style.rotate = '180deg';
        } else {
            theId.classList.add('d-none');
            theId2.style.rotate = '0deg';
        }
    }

    function counterMinus(indexPosition) {
        const myId = 'cart_product_units' + indexPosition;
        const inputElement = document.getElementById(myId);
        let currentValue = parseInt(inputElement.value, 10);

        if (isNaN(currentValue)) {
            currentValue = 0;
        }

        if (currentValue > 1) {
            const newValue = currentValue - 1;
            inputElement.value = newValue;
        } else {
            inputElement.value = currentValue;
        }
    }


    function counterPlus(indexPosition) {
        const myId = 'cart_product_units' + indexPosition;
        const inputElement = document.getElementById(myId);
        let currentValue = parseInt(inputElement.value, 10);

        if (isNaN(currentValue)) {
            currentValue = 0;
        }

        if (currentValue < 10) {
            const newValue = currentValue + 1;
            inputElement.value = newValue;
        } else {
            inputElement.value = currentValue;
        }
    }
</script>
@endsection