@extends('frontend.layouts.app')

@section('content')

    
<div class="shopping-cart-sec" data-aos="fade-up">
        <div class="d-lg-none d-block d-sm-block d-md-none">
            <div class="cart-heading-sec ">
                <h3>My Shopping Cart</h3>
                {{--<p>Remove Selected</p>--}}
            </div>
        </div>

        <div class="container">
            <div class="d-lg-block d-md-block d-sm-none d-none">
                <div class="cart-heading-sec ">
                    <h3>My Shopping Cart</h3>
                    {{--<p>Remove Selected</p>--}}
                </div>
            </div>

            <div class="row align-center">
                @if(Session::has('cart'))
                @if(count(Session::get('cart')) > 0)
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">

                    <div class="cart-sec">

                        <div class="cart-table-sec">
                            <table class="table">
                                <thead>
                                    <tr>
                                        {{--<th style="width:8%">
                                            <div class="order-checkbox">

                                            </div>
                                        </th>--}}
                                        <th style="width:70%">
                                            <div class="product-name">
                                                <h5>Product</h5>
                                            </div>
                                        </th>
                                        <th style="width:20%">
                                            <div class="price">
                                                <h5>Price</h5>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $subtotal = 0;
                                    $tax = 0;
                                    
                                    @endphp
                                  
                                    @foreach (Session::get('cart') as $key => $cartItem)
                                    @php
                                  
                                    $product = \App\Product::find($cartItem['id']);
                                  
                                    $category_name = \App\Category::find($product->category_id)->name;

                                    $subtotal = $subtotal + round(convert_price($cartItem['price']*$cartItem['quantity']), 2);
                                  
                                   
                                    $product_name_with_choice = $product->name;
                                    if ($cartItem['variant'] != null) {
                                    $product_name_with_choice = $product->name.' - '.$cartItem['variant'];
                                    }

                                    @endphp
                                    <tr>
                                        
                                        <td style="width:70%">
                                            <div class="product-name">
                                                <h3> {{ $product_name_with_choice }} </h3>
                                                <div class="duration">Length: {{ $product->subscription }}</div>
                                               
                                            </div>
                                        </td>

                                        <td style="width:20%">
                                            <div class="price">
                                                <div class="product-price"> {{ single_price($cartItem['price']*$cartItem['quantity']) }} </div>
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="total-sec">
                        <div class="total-sec-box">
                            <div class="subtotal">
                                <div class="subtotal">
                                    Subtotal
                                </div>
                                <div class="subtotal-amount">
                                     {{ currency_symbol().$subtotal }}
                                </div>
                            </div>
                           
                            
                            @if(Session::has('coupon_discount'))
                            <div class="discount">
                                <div class="subtotal">
                                    Discount
                                </div>
                                <div class="subtotal-amount">
                                    {{ Session::get('coupon_discount') }}
                                </div>
                            </div>
                            @endif
                            
                            <div class="total-part">
                                <div class="total">Total</div>
                                <div class="total-amount"> {{ currency_symbol().$subtotal }}</div>
                            </div>
                            
                            @if (Auth::check() && \App\BusinessSetting::where('type', 'coupon_system')->first()->value == 1)
                            @if (Session::has('coupon_discount'))
                            <div class="apply-code">
                                <form id="cpn_remove" class="common-form discount-form" action="{{ route('checkout.remove_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group ">
                                        <input form="cpn_remove" type="text" class="form-control" placeholder="Discount Code" value="{{ \App\Coupon::find(Session::get('coupon_id'))->code }}" readonly>
                                    </div>
                                </form>
                                <div class="apply-btn-sec">
                                    <button form="cpn_remove" type="submit" class="apply-btn">Remove</button>
                                </div>
                            </div>
                            <div class="code-applied-line">
                                <p>*{{ \App\Coupon::find(Session::get('coupon_id'))->code }}* Code applied successfully</p>
                            </div>
                            @else
                            <div class="apply-code">
                                <form id="cpn_apply" class="common-form discount-form" action="{{ route('checkout.apply_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group ">
                                        <input form="cpn_apply" type="text" name="code" class="form-control" placeholder="Discount Code">
                                    </div>
                                </form>
                                <div class="apply-btn-sec">
                                    <button form="cpn_apply" type="submit" class="apply-btn">Apply</button>
                                </div>
                            </div>
                            @endif
                            @endif
                            <div class="checkout-btn">
                                <a href="{{ route('checkout.shipping_info') }}" class="common-btn"> Secure Checkout </a>
                            </div>

                        </div>
                    </div>
                </div>
                @else
                <h2>
                    Your cart is empty !
                </h2>
                @endif
                @endif
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
