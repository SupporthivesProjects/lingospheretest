@php
if (Session::has('coupon_discount')){
    Session::forget('coupon_discount');
    }
@endphp

{{-- cart summary on shipping info after update --}} 
            <div class="check-head">
                                <h6>Order Summary</h6>
                            </div>
                            <div class="w100 my-order-table table-design">
                                <table class="table">
                                    <thead class="order-thead" style="border-bottom: 1px solid lightgrey;">
                                        <tr>
                                            <th class="p-name c-black pad20">Product Name</th>
                                            <th class="c-black pad20">QTY</th>
                                            <th class="p-price pad20 c-black">Total</th> 
                                        </tr>
                                    </thead>
                                    <tbody class="order-tbody" style="border-bottom: 1px solid lightgrey;">
                                        
                                         
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
                                            <tr class="order-tr">
                                                <td class="order-td p-name">
                                                  <p class="c-black padT20 padL20 padB20">{{ $product_name_with_choice }}</p> 
                                                </td>
                                                <td class="order-td p-qty">
                                                   <input type="number" name="quantity[{{ $key }}]" id="quantity" placeholder="1" value="{{ $cartItem['quantity'] }}" min="1" max="10" onchange="updateQuantity({{ $key }}, this)">
                                                </td>
                                                <td class="c-black order-td p-price pad20">
                                                    {{ single_price($cartItem['price']*$cartItem['quantity']) }}
                                                </td> 
                                            </tr> 
                                        @endforeach
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table> 
                            </form>    
                                <div class="other-tab pad20" style="border-bottom: 1px solid lightgrey;">
                                    <div class="d-f jc-sb ai-c">
                                        <h6 class="c-black">Subtotal</h6>
                                        @php
                                            $total = $subtotal+$tax+$shipping;
                                        @endphp
                                        <h3 class="c-black">{{ single_price($total) }}</h3>
                                    </div> 
                                
                                    
                                     @if (Auth::check() && \App\BusinessSetting::where('type', 'coupon_system')->first()->value == 1)
                                        @if (Session::has('coupon_discount'))
                                            
                                            <div class=" other-tab d-f jc-sb ai-c" style="padding-left: 0;padding-right: 0;">
                                                <h6 class="c-black">Coupon Code Successful: <br>
                                                    {{ \App\Coupon::find(Session::get('coupon_id'))->code }}</h6>
                                                <h3> -{{ single_price(Session::get('coupon_discount')) }}</h3>
                                            </div>
                                            
                                            <div class="mt-3">
                                                <form action="{{ route('checkout.remove_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="input-container ">
                                                        <input type="hidden" id="text" name="text" placeholder=" " value="{{ \App\Coupon::find(Session::get('coupon_id'))->code }}" readonly>
                                                    </div>
                                                    <div class="ta-c over-btn">
                                                        <button type="submit" class="btn btn-lime ">{{__('Change/Remove Coupon')}}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        @else
                                            <div class="mt-3">
                                                <form action="{{ route('checkout.apply_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="input-container ">
                                                        <label class="c-black" for="text">Enter Coupon Code   </label>
                                                        <input type="text" name="code" placeholder="{{__('Have coupon code? Enter here')}}" required>
                                                    </div>
                                                    <div class="ta-c over-btn">
                                                        <button type="submit" class="btn btn-lime ">Apply Code  </button>
                                                    </div>
                                                </form>
                                            </div>
                                        @endif
                                    @endif 
                                </div> 
                                
                                <div class="other-tab pad20 d-f jc-sb ai-c" style="border-bottom: 1px solid lightgrey;">
                                    <h6 class="c-black">Total</h6>
                                    @php
                                        if(Session::has('coupon_discount')){
                                            $total -= Session::get('coupon_discount');
                                        }
                                    @endphp
                                    <h3 class="c-black"> {{ single_price($total) }}</h3>
                                </div>
                                <div class="ta-c pad20 over-btn other-tab">
                                    <button type="submit" class="btn btn-lime" form="shippingAddress">Pay now </button>
                                </div>
                            </div>
            
            
            
            
            
            
            {{--<h1 class="text-blue">Overview</h1>
            <div class="mt-4 mb-3">
                 <div class="card card-body card-box-shadow">
                    <div class="row">
                        <div class="col-6"><p class="text-small text-grey">PRODUCTS</p></div>
                        <div class="col-3"><p class="text-small text-grey">Qty</p></div>
                        <div class="col-3"><p class="text-small text-grey">Price</p></div>
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
                        <div class="col-3">
                            <input type="number" name="quantity[{{ $key }}]" id="quantity" class="form-control input-number" placeholder="1" value="{{ $cartItem['quantity'] }}" min="1" max="10" onchange="updateQuantity({{ $key }}, this)">
                        </div>
                        <div class="col-3 text-right">
                            <p class="text-grey">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</p>
                        </div>
                    </div>
                    @endforeach
                    
                    @if (Session::has('coupon_discount'))
                      <div class=" row cart-shipping">
                            <div class="col-9">{{__('Coupon Discount')}}</div>
                            <div class="col-3 text-right">
                                <span class="text-italic text-blue">- {{ single_price(Session::get('coupon_discount')) }}</span>
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
                        <div class="col-9 mt-1"><p class="text-blue">Amount to pay</p></div>
                        <div class="col-3 mt-1 text-right"><p class="text-blue">{{ single_price($total) }}</p></div>
                    </div>
                    
                    <div class="row pt-2">
                        <button type="submit" class="btn btn-sm btn-banner-white btn-blue-vm w-100">Complete checkout</button>
                    </div>
                </div>
            </div>
            </form>
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
            --}}

