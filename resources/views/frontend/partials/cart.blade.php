{{-- <a href="#" class="nav-link navtext" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Cart
                                    </a>
            <ul class="dropdown-menu dropdown-menu-right px-3 py-2">
                                        <li>
                                            <div class="dropdown-cart px-0" id="dropdown-cart">
                                                @if(Session::has('cart'))
                                                    @if(count($cart = Session::get('cart')) > 0)
                                                        <div class="dc-header">
                                                            <h3 class="heading heading-6 strong-700 cart-head-title">{{__('Added to cart')}}</h3>
                                                        </div>
                                                        
                                                    <div class="order-summary-cart cart-details">
                                                      <div class="order-summary-details">
                                                        <div class="dropdown-cart-items c-scrollbar">
                                                            @php
                                                                $total = 0;
                                                            @endphp
                                                            @foreach($cart as $key => $cartItem)
                                                                @php
                                                                    $product = \App\Product::find($cartItem['id']);
                                                                    $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                                @endphp
                                                                         <div class="order-div">
                                                                             <p class="product-name">{{ __($product->name) }}<span style="float:right;">
                                                                                 <button class="btn" onclick="removeFromCart({{ $key }})" style="min-width: 16px;min-height: 16px;line-height: 0px;">
                                                                                    <i class="la la-close"></i>
                                                                                </button>
                                                                                </span></p>
                                                                             <small class="duration">{{ $product->subscription }}</small>
                                                                             <small class="duration ms-3">x{{ $cartItem['quantity'] }}</small>
                                                                             <p class="pro-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</p>
                                                                         </div>
                                                                         @endforeach
                                                                    
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="dc-item py-3">
                                                            <div class="total-price-div d-none d-lg-block d-md-block">
                                                                 <h5 class="text-center pb-3"><span class="total-p text-center">Total: </span><span class="total-price">{{ single_price($total) }}</span></h5>
                                                             </div>
                                                             <div class="total-price-div d-block d-lg-none d-md-none">
                                                                 <h5 class="text-center"><span class="total-p">Amount Paid:  </span><span class="total-price">{{ single_price($total) }}</span></h5>
                                                             </div>
                                                             <div class="cart-btn d-flex justify-content-around mb-2">
                                                                 <a href="{{ route('home') }}" class="btn-blue d-flex align-items-center px-2" style="text-decoration:none !important;">Continue Shopping</a>
                                                                 <a href="{{ route('checkout.shipping_info') }}" class="btn-blue d-flex align-items-center px-2" style="text-decoration:none !important;">Checkout</a>
                                                             </div>
                                                        </div>
                                                    @else
                                                        <div class="dc-header">
                                                            <h3 class="heading cart-head-title heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                                        </div>
                                                    @endif
                                                @else
                                                    <div class="dc-header">
                                                        <h3 class="heading cart-head-title heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                                    </div>
                                                @endif
                                            </div>
                                        </li>
                                    </ul>--}}
                                    <img src="{{ asset('frontend/lingosphere/images/cart.svg') }}" class="img-fluid" alt="">
                             @if (Session::has('cart'))
                                <span class="count">{{ count(Session::get('cart'))}}</span>
                                
                                @else
                                <span class="count">0</span>
                                @endif
                              
                               <ul class="dropdown-menu dropdown-menu-left px-0" style="left: -200px;">
                                        <li>
                                            <div class="dropdown-cart px-0">
                                @if (Session::has('cart'))
                                    @if (count($cart = Session::get('cart')) > 0)
                                        <div class="dc-header">
                                            <h3 class="heading heading-6 strong-700">{{__('Cart Items')}}</h3>
                                        </div>
                                        <div class="dropdown-cart-items c-scrollbar">
                                            @php
                                                $total = 0;
                                            @endphp
                                            @foreach ($cart as $key => $cartItem)
                                                @php
                                                    $product = \App\Product::find($cartItem['id']);
                                                    $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                @endphp
                                                <div class="dc-item">
                                                    <div class="d-flex align-items-center">
                                                        {{--<div class="dc-image">
                                                            <a href="{{ route('product', $product->slug) }}">
                                                                <img src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid lazyload" alt="{{ __($product->name) }}">
                                                            </a>
                                                        </div>--}}
                                                        <div class="dc-content">
                                                            <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                <a href="{{ route('product', $product->slug) }}">
                                                                    {{ __($product->name) }}
                                                                </a>
                                                            </span>
    
                                                            <span class="dc-quantity">x{{ $cartItem['quantity'] }}</span>
                                                            <span class="dc-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</span>
                                                        </div>
                                                        <div class="dc-actions">
                                                            <button onclick="removeFromCart({{ $key }})">
                                                                <i class="la la-close"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="dc-item py-3">
                                            <span class="subtotal-text">{{__('Subtotal')}}</span>
                                            <span class="subtotal-amount">{{ single_price($total) }}</span>
                                        </div>
                                        <div class="py-2 text-center dc-btn ta-c mt-lg-2">
                                            <ul class="inline-links inline-links--style-3 list-inline btn-blue">
                                                @if (!Auth::check())
                                                <li class="px-1 list-inline-item">
                                                    <a href="{{ route('checkout.shipping_info') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 pb-2" style="color: black !important;position: relative;top: 6px;">
                                                        <i class="la la-shopping-cart"></i> {{__('Login & Checkout')}}
                                                    </a>
                                                </li>
                                                @endif
                                                @if (Auth::check())
                                                <li class="px-1 list-inline-item">
                                                    <a href="{{ route('checkout.shipping_info') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 pb-2" style="color: black !important;position: relative;top: 6px;">
                                                        <i class="la la-mail-forward"></i> {{__('Checkout')}}
                                                    </a>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                    @else
                                        <div class="dc-header">
                                            <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                        </div>
                                    @endif
                                @else
                                    <div class="dc-header">
                                        <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                    </div>
                                @endif
                            </div>
                        </li>
                    </ul>

