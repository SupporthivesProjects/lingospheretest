<div class="container">
    <div class="row cols-xs-space cols-sm-space cols-md-space">
        <div class="col-xl-8">
            <!-- <form class="form-default bg-white p-4" data-toggle="validator" role="form"> -->
            <div class="form-default bg-white p-4">
                <div class="">
                    <div class="">
                        <table class="table-cart border-bottom w-100">
                            <thead>
                                <tr>
                                    <th class="product-image"></th>
                                    <th class="product-name">{{__('Product')}}</th>
                                    <th class="product-price d-none d-lg-table-cell">{{__('Price')}}</th>
                                    <th class="product-quanity d-none d-md-table-cell">{{__('Quantity')}}</th>
                                    <th class="product-total">{{__('Total')}}</th>
                                    <th class="product-remove"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $total = 0;
                                @endphp
                                @foreach (Session::get('cart') as $key => $cartItem)
                                    @php
                                    $product = \App\Product::find($cartItem['id']);
                                    $total = $total + $cartItem['price']*$cartItem['quantity'];
                                    $product_name_with_choice = $product->name;
                                    if ($cartItem['variant'] != null) {
                                        $product_name_with_choice = $product->name.' - '.$cartItem['variant'];
                                    }
                                    @endphp
                                    <tr class="cart-item">
                                        <td class="product-image">
                                            <a href="#" class="mr-3">
                                                <img loading="lazy"  src="{{ asset($product->thumbnail_img) }}">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <span class="pr-4 d-block">{{ $product_name_with_choice }}</span>
                                        </td>

                                        <td class="product-price d-none d-lg-table-cell">
                                            <span class="pr-3 d-block">{{ single_price($cartItem['price']) }}</span>
                                        </td>

                                        <td class="product-quantity d-none d-md-table-cell">
                                            <div class="input-group input-group--style-2 pr-2" style="width: 170px;">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="minus" data-field="quantity[{{ $key }}]">
                                                        <i class="la la-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity[{{ $key }}]" id="quantity" class="form-control input-number" placeholder="1" value="{{ $cartItem['quantity'] }}" min="1" max="10" onchange="updateQuantity({{ $key }}, this)">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="plus" data-field="quantity[{{ $key }}]">
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="product-total">
                                            <span>{{ single_price($cartItem['price']*$cartItem['quantity']) }}</span>
                                        </td>
                                        <td class="product-remove">
                                            <a href="#" onclick="removeFromCartView(event, {{ $key }})" class="text-right pl-4">
                                                <i class="la la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
                        @if(Auth::check())
                            <a href="{{ route('checkout.shipping_info') }}" class="btn btn-styled btn-base-1">{{__('Continue to Shipping')}}</a>
                        @else
                            <button class="btn btn-styled btn-base-1" onclick="showCheckoutModal()">{{__('Continue to Shipping')}}</button>
                        @endif
                    </div>
                </div>
            </div>
            <!-- </form> -->
        </div>

        {{--<div class="col-xl-4 ml-lg-auto">
            @include('frontend.partials.cart_summary')
        </div> --}}
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

<script type="text/javascript">
    cartQuantityInitialize();
</script>
