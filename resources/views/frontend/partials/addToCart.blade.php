<div class="modal-body py-4  added-to-cart" style="background: #1E284B;">
                <div class="cart-item  " style="max-width: 100%;background: #1E284B;">
                    <!--<button class="close-icon"><img src="{{ asset('frontend/dist/images/close-icon-blue.svg') }}" alt="close icon"></button> -->
                    
                    <button class="close-icon absolute-close-btn" data-bs-dismiss="modal" aria-label="Close" style="min-width:25px;">
                        <img src="{{ asset('frontend/dist/img/delete_cart.svg') }}" alt="close icon">
                    </button> 
                    
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-12 col-12 mb-3">
                            <div class="product-box-img">
                                <div class="product-box-container">
                                    <div class="block-image">
                                        <img src="{{ asset(json_decode($product->photos)[0]) }}" alt="product image" style="width:190px; max-width:190px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12 align-self-center">
                            <div class="product-d-container">
                                <form id="option-choice-form">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <h3 class="h3-white text-left">{{ __($product->name) }}</h3> 
                                    <div class="" style="display: inline-flex;">
                                        <div>
                                           <span class="h4-desktop-white">Qty</span>
                                            <input type="number" name="quantity" id="quantity" value="1" placeholder="1" min="1" max="10"> 
                                        </div>
                                        <div class="m-1">
                                            <h3 class="h4-desktop-orange">{{ home_discounted_price($product->id) }}</h3>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-orange" onclick="addToCart()"> Add to cart </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    
    {{--<div class="row">
        <div class="col-md-4">
            <div class="block-image">
                <img src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset(json_decode($product->photos)[0]) }}" class="lazyload addedtocart-img" alt="Product Image">
            </div>
        </div>
        <div class="col-md-8 pl-md-4">
            <div class="">
                <h3 class="addedtocart-heading border-0">{{ __($product->name) }}</h3>
            </div>
            <form id="option-choice-form">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <div class="row mt-2">
                    <div class="pl-2">
                        <p class="price-label">Price</p>
                        <p class="price-amount">{{ home_discounted_price($product->id) }}</p>
                    </div>
                    <div class="ml-2">
                        <p class="price-label">Qty</p>
                        <input type="number" name="quantity" id="quantity" class="form-control input-number" placeholder="1" value="1" min="1" max="10">
                    </div>
                </div>
                <div class="row" id="chosen_price_div">
                    <div class="pl-2">
                        <div class="product-description-label price-label pt-2">{{__('Total Price')}}:</div>
                    </div>
                    <div class="ml-2">
                        <div class="product-price price-amount">
                            <strong id="chosen_price">

                            </strong>
                        </div>
                    </div>
                </div>
            </form>  
            <div>
                @php
                    $qty = 0;
                    if($product->variant_product){
                        foreach ($product->stocks as $key => $stock) {
                            $qty += $stock->qty;
                        }
                    }
                    else{
                        $qty = $product->current_stock;
                    }
                @endphp
                @if ($qty > 0)
                    <button type="button" class="btn btn-modal-atc mt-2" onclick="addToCart()">{{__('Add to cart')}}</button>
                @else
                    <button type="button" class="btn btn-modal-os mt-2" disabled>
                        <i class="la la-cart-arrow-down"></i> {{__('Out of Stock')}}
                    </button>
                @endif
                <button class="btn btn-backToShop mr-md-2" data-dismiss="modal">{{__('Back to shopping')}}</button>
                <a href="{{ route('checkout.shipping_info') }}" class="btn btn-proceedToCheckout ml-md-2">{{__('Proceed to Checkout')}}</a>
            </div>
            
        </div>
    </div>--}}    
</div>
<script type="text/javascript">
    cartQuantityInitialize();
    $('#option-choice-form input').on('change', function(){
        getVariantPrice();
    });
</script>
