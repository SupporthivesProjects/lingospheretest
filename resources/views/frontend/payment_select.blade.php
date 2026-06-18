@extends('frontend.layouts.app')

@section('content')

    <div id="page-content">
        <section class="slice-xs sct-color-2 border-bottom">
            <div class="container container-sm">
                <div class="row cols-delimited justify-content-center">
                    <div class="col">
                        <div class="icon-block icon-block--style-1-v5 text-center ">
                            <div class="block-icon c-gray-light mb-0">
                                <i class="la la-shopping-cart"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">1. {{__('My Cart')}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="icon-block icon-block--style-1-v5 text-center ">
                            <div class="block-icon mb-0 c-gray-light">
                                <i class="la la-map-o"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">2. {{__('Billing info')}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="icon-block icon-block--style-1-v5 text-center active">
                            <div class="block-icon mb-0">
                                <i class="la la-credit-card"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">3. {{__('Payment')}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="icon-block icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-light mb-0">
                                <i class="la la-check-circle"></i>
                            </div>
                            <div class="block-content d-none d-md-block">
                                <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">4. {{__('Confirmation')}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-3 gry-bg" style="background: #F6F7FB;">
            <div class="container">
                <div class="row cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-lg-8">
                        <form action="{{ route('payment.checkout') }}" class="form-default" data-toggle="validator" role="form" method="POST" id="checkout-form">
                            @csrf
                            <div class="card">
                                <div class="card-title px-4 py-3">
                                    <h3 class="heading heading-5 strong-500">
                                        {{__('Select a payment option')}}
                                    </h3>
                                </div>
                                <div class="card-body text-center">
                                    <div class="row">
                                        <div class="col-md-6 mx-auto">
                                            <div class="row">
                                                @if(\App\BusinessSetting::where('type', 'citigate_payment')->first()->value == 1)
                                                    <div class="col-6">
                                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="Citigate">
                                                            <input type="radio" id="" name="payment_option" value="citigate" checked>
                                                            <span>
                                                                <img loading="lazy" src="{{ asset('frontend/leap-assets/assets/img/citigate.png')}}" class="img-fluid">
                                                            </span>
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(\App\BusinessSetting::where('type', 'cash_payment')->first()->value == 1)
                                                    <div class="col-6">
                                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="Cash on Delivery">
                                                            <input type="radio" id="" name="payment_option" value="cash_on_delivery">
                                                            <span>
                                                                <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/cod.png')}}" class="img-fluid">
                                                            </span>
                                                        </label>
                                                    </div>
                                                @endif
                                                @if (Auth::check())
                                                    @if (\App\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                                                        @foreach(\App\ManualPaymentMethod::all() as $method)
                                                          <div class="col-6">
                                                              <label class="payment_option mb-4" data-toggle="tooltip" data-title="{{ $method->heading }}">
                                                                  <input type="radio" id="" name="payment_option" value="{{ $method->heading }}">
                                                                  <span>
                                                                      <img loading="lazy"  src="{{ asset($method->photo)}}" class="img-fluid">
                                                                  </span>
                                                              </label>
                                                          </div>
                                                        @endforeach
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @if (Auth::check() && \App\BusinessSetting::where('type', 'wallet_system')->first()->value == 1)
                                        <div class="or or--1 mt-2">
                                            <span>or</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-6 col-lg-8 col-md-10 mx-auto">
                                                <div class="text-center bg-gray py-4">
                                                    <i class="fa"></i>
                                                    <div class="h5 mb-4">Your wallet balance : <strong>{{ single_price(Auth::user()->balance) }}</strong></div>
                                                    @if(Auth::user()->balance < $total)
                                                        <button type="button" class="btn btn-base-2" disabled>Insufficient balance</button>
                                                    @else
                                                        <button  type="button" onclick="use_wallet()" class="btn btn-base-1">Pay with wallet</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row align-items-center pt-4">
                                <div class="col-6">
                                    <a href="{{ route('home') }}" class="link link--style-3">
                                        <i class="ion-android-arrow-back"></i>
                                        {{__('Return to shop')}}
                                    </a>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="submit" class="btn btn-styled btn-base-1">{{__('Complete Order')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    {{--<div class="col-lg-4 ml-lg-auto">
                        @include('frontend.partials.cart_summary')
                    </div>--}}
                    <!-- ./ cart summary -->   
                    <div class="col-xl-4 col-md-6">
                    {{--<h1 class="text-blue">Overview</h1>--}}
                        <div class="">
                            <div class="card card-body card-box-shadow">
                                <div class="row">
                                    <div class="col-6"><p class="text-small text-grey">PRODUCTS</p></div>
                                    <div class="col-2"><p class="text-small text-grey">Qty</p></div>
                                    <div class="col-4"><p class="text-small text-grey text-center">Price</p></div>
                                </div>
                                @php
                                    $subtotal = 0;
                                    $tax = 0;
                                    $shipping = 0;
                                @endphp
                                @foreach (Session::get('cart') as $key => $cartItem)
                                    @php
                                        $product = \App\Product::find($cartItem['id']);
                                        $category_name = \App\Category::find($product->category_id)->name;
                                       
                                        $subtotal += $cartItem['price']*$cartItem['quantity'];
                                        $tax += $cartItem['tax']*$cartItem['quantity'];
                                        $shipping += $cartItem['shipping']*$cartItem['quantity'];
                                        $product_name_with_choice = $product->name;
                                        if ($cartItem['variant'] != null) {
                                            $product_name_with_choice = $product->name.' - '.$cartItem['variant'];
                                        }
                                    @endphp
                        
                                    <div class="row">
                                        <div class="col-12"><p class="text-small text-gey">E-book</p></div>
                                        <div class="col-6"><p class="text-grey">{{ $product_name_with_choice }}</p></div>
                                        <div class="col-2"><strong class="product-quantity text-grey">× {{ $cartItem['quantity'] }}</strong></div>
                                        <div class="col-4 text-right"><p class="text-grey">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</p></div>
                                    </div>
                                @endforeach
                        
                                @if (Session::has('coupon_discount'))
                                    <div class=" row cart-shipping">
                                        <div class="col-8">{{__('Coupon Discount')}}</div>
                                        <div class="col-4 text-right">
                                            <span class="text-italic text-blue "> - {{ single_price(Session::get('coupon_discount')) }}</span>
                                        </div>
                                    </div>
                                @endif
        
                                @php
                                    $total = $subtotal+$tax+$shipping;
                                    if(Session::has('coupon_discount')){
                                        $total -= Session::get('coupon_discount');
                                    }
                                @endphp
                        
                                <div class="row border-top-black mt-2">
                                    <div class="col-8 mt-1"><p class="text-blue">Amount to pay</p></div>
                                    <div class="col-4 mt-1"><p class="text-blue text-right">{{ single_price($total) }}</p></div>
                                </div>
                        
                                {{--<div class="row pt-2">
                                    <button type="submit" class="btn btn-sm btn-banner-white btn-blue-vm w-100">Complete checkout</button>
                                </div>--}}
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col">
                                @if (Auth::check() && \App\BusinessSetting::where('type', 'coupon_system')->first()->value == 1)
                                    @if (Session::has('coupon_discount'))
                                        <div class="mt-3">
                                            <form action="{{ route('checkout.remove_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="coupon">Change Coupon/Discount Code</label>
                                                    <div class="form-control bg-gray w-100">{{ \App\Coupon::find(Session::get('coupon_id'))->code }}</div>
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-orange w-100">{{__('Change Coupon')}}</button>
                                            </form>
                                        </div>
                                    @else
                                        <div class="mt-3">
                                            <form action="{{ route('checkout.apply_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="coupon">Add Coupon/Discount Code</label>
                                                    <input type="text" class="form-control w-100" name="code" placeholder="{{__('Have coupon code? Enter here')}}" required>
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-orange w-100">{{__('Test & apply')}}</button>
                                            </form>
                                        </div>
                                    @endif
                                @endif   
                            </div>
                        </div>
                    </div>
                    <!-- ./ cart summary -->  
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function use_wallet(){
            $('input[name=payment_option]').val('wallet');
            $('#checkout-form').submit();
        }
    </script>
@endsection
