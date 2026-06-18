@extends('frontend.layouts.app')

@section('content')


{{--New Code Start--}}

<section class="checkout4_page">
    <div class="che_s1">
        <div class="ches1_inner">
            <h1 class="ches1_title mobile_none">Billing Details</h1>
            <h1 class="ches1_title desktop_none" data-aos="fade-up">Billing Details</h1>
            <p class="ches1_subtitle" data-aos="fade-up">Please enter your billing details below and review your order before continuing to checkout. </p>
            <div class="ches1_main_box">
                <div class="ches1_box">
                    <div class="circle_div active"><p class="circle_number">1</p></div>
                    <p class="circle_title active">Summary</p>
                </div>
                <div class="ches1_box">
                    <div class="circle_div active"><p class="circle_number">2</p></div>
                    <p class="circle_title active">Billing Details</p>
                </div>
                <div class="ches1_box">
                    <div class="circle_div"><p class="circle_number">3</p></div>
                    <p class="circle_title">Payment</p>
                </div>
            </div>
        </div>
    </div>
    <div class="che_s2">

        <div class="sec_up_cont">
            <div class="container sec_contain px-0 ">
            <div class="sec_down_box">
                <div class="che3_s2_left">
                    <h4 class="suumary_title">billing Details</h4>
                    @if (Auth::check())
                    @php
                        $user = Auth::user();
                    @endphp
                    <div class="divitrix">
                        <div class="">
                            <input type="text" class="form-control input_global" name="name" value="{{ $user->name }}" placeholder="First Name" form="shippingAddress" required>
                        </div>
                        <div class="">
                            <input type="text" class="form-control input_global" name="lname" value="{{ $user->lname }}" placeholder="Last name" form="shippingAddress" required>
                        </div>
                        <div class="">
                            <input type="email" class="form-control input_global" name="email" value="{{ $user->email }}" placeholder="Email address" form="shippingAddress" readonly>
                        </div>
                        <div class="">
                            <input type="tel" class="form-control input_global" name="phone" value="{{ $user->phone }}" placeholder="Phone" form="shippingAddress" required>
                        </div>
                        <div class="">
                            <input type="date" class="form-control input_global" value="{{ $user->dob }}" id="dob" name="dob" placeholder="Date of birth" max="@php echo date('Y-m-d',strtotime('18 years ago')); @endphp" form="shippingAddress" required>
                        </div>
                        <div class="">
                            <input type="text" class="form-control input_global" name="address" value="{{ $user->address }}" placeholder="Address Line 1" form="shippingAddress" required>
                        </div>
                        <div class="">
                            <input type="text" class="form-control input_global" name="addressL2" value="{{ $user->addressL2 }}" placeholder="Address Line 2" form="shippingAddress">
                        </div>
                        <div class="">
                            <select class="form-select inpi_boxx" id="country" name="country" style="border: 1px solid #BDBDBD;" aria-label="Default select example" form="shippingAddress" required>
                                <!--<option selected="">Country</option>-->
                                <!--<option value="1">One</option>-->
                                <!--<option value="2">Two</option>-->
                                <!--<option value="3">Three</option>-->
                                @foreach (\App\Country::all() as $key => $country)
                                <option value="{{ $country->code }}">{{ $country->name }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="">
                            <input type="text" class="form-control input_global" name="city" value="{{ $user->city }}" placeholder="City/Town" form="shippingAddress" required>
                        </div>
                        <div class="">
                            <input type="text" class="form-control input_global" name="postal_code" value="{{ $user->postal_code }}" placeholder="Zip / Post Code" form="shippingAddress" required>
                        </div>
                    </div>
                    @endif
                    <div class="divitrix2">
                        <p class="divitrix_text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <span>Privacy Policy.</span></p>
                        <img src="{{ asset('frontend/Lingosphere/img/masterCard.svg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="summ_ary">
                <div class="summary_box">
                    <h4 class="suumary_title">Summary</h4>
                    @php
                    $subtotal = 0;
                    $tax = 0;
                    $shipping = 0;
                    
                    @endphp
                    @foreach (Session::get('cart') as $key => $cartItem)
                        @php
                            $subtotal = $subtotal + round(convert_price($cartItem['price']), 2);
                        @endphp
                    <div class="cart_box">
                    <div class="left_cart_name">
                        <h4 class="l_c_t">{{ $cartItem['service_title'] }}</h4>
                        <h4 class="l_c_s">{{ $cartItem['service_no_of_pages'] }} pages ({{ $cartItem['service_no_of_words'] }} words max)</h4>
                    </div>
                    <div class="right_cart_name">
                        <h4 class="l_c_t">{{ single_price($cartItem['price']) }}</h4>
                    </div>
                    </div>
                    @endforeach
                    <hr class="line">
                    <div class="sub_disc_box">
                    <div class="cart_tottal">
                        <h4 class="suumary_title">Total</h4>
                        <h4 class="suumary_title">{{ currency_symbol().number_format($subtotal,2) }}</h4>
                    </div>
                    </div>
                    <div class="lowwer_content">
                    <div class="icons_box">
                        <img src="{{ asset('frontend/Lingosphere/img/cal_logo.svg') }}" alt="" class="logos">
                        <div class="icons_content">
                        <h4 class="radio_title">Turnaround Time: 48 Hours</h4>
                        <h4 class="icon_subtitle">Your request will be translated and returned within 48 hours. Check your inbox for updates.</h4>
                        </div>
                    </div>
                    <div class="icons_box">
                        <img src="{{ asset('frontend/Lingosphere/img/trans_late.svg') }}" alt="" class="logos">
                        <div class="icons_content">
                        <h4 class="radio_title">Easy Checkout</h4>
                        <h4 class="icon_subtitle">Payments are securely processed through our system for your peace of mind.</h4>
                        </div>
                    </div>
                    <div class="icons_box">
                        <img src="{{ asset('frontend/Lingosphere/img/credit_card_logo.svg') }}" alt="" class="logos">
                        <div class="icons_content">
                        <h4 class="radio_title">High-Quality Translation</h4>
                        <h4 class="icon_subtitle">Expert translations in your chosen languages, ensuring cultural nuances are captured.</h4>
                        </div>
                    </div>
                    </div>
                    <div class="line"></div>
                    <form class="ultrabox" id="shippingAddress" data-toggle="validator" action="{{ route('checkout.store_shipping_infostore') }}" role="form" method="POST" onsubmit="return check_agree(this);">
                        @csrf
                        <input type="hidden" form="shippingAddress" class="form-control" name="user_id" value="{{ $user->id }}" required />
                        <input type="hidden" form="shippingAddress" name="checkout_type" value="logged">
                        <div class="cboxcap_div">
                            <div class="chec_bo">
                                <div class="c-checkbox_M">
                                    <div class="c-div_M">
                                      <label class="d-flex justify-content-center justify-content-lg-start">
                                        <input type="checkbox" id="terms" name="terms">
                                        <label for="terms"></label>
                                      </label>
                                    </div>
                                    <div class="c-text_M">
                                      <p class="login_strong_M">By clicking the button you acknowledge that you have read and agree to the <a href="">Terms of Use.</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--<img src="{{ asset('frontend/Lingosphere/img/reCaptcha.png') }}" alt="" class="img-fluid">-->
                            <div  class="g-recaptcha" data-recaptcha data-sitekey="{{ env('GOOGLE_CAPTCHA_SITE_KEY') }}"></div>
                        </div>
                        <button class="btn btn_redd mt-3" type="submit">Proceed to checkout</button>
                    </form>
                </div>
                </div>
            </div>


            </div>
        </div>
    </div>
</section>

{{--New Code End--}}

@endsection

@section('script')
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
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

<script>
    const radioButtons = document.querySelectorAll('.chek_inpoot');
  
    radioButtons.forEach((radioButton) => {
      radioButton.addEventListener('click', (event) => {
        const frm = event.target.closest('.frm');
        frm.classList.add('active');
        const siblings = frm.parentNode.children;
        for (let i = 0; i < siblings.length; i++) {
          if (siblings[i] !== frm) {
            siblings[i].classList.remove('active');
          }
        }
      });
    });




  function field_box_file() {
    console.log('me');
    document.getElementById('document').click();
  }
  $("#document").on("change", function(e){
    document.getElementById('upload_placeholder').innerHTML = e.target.files[0].name;
  })
</script>


<script type="text/javascript">


    function removeFromCart1(key){
        $.post('{{ route('cart.removeFromCart') }}', {_token:'{{ csrf_token() }}', key:key}, function(data){
            //updateNavCart();
            $('#cart-summary').html(data);
             Swal.fire({
                icon: 'success',
                title: 'Item Removed',
                text: 'Item has been removed from cart'
            })
            
           location.reload();
        });
    }

    function removeFromCartView(e, key) {
        e.preventDefault();
        removeFromCart(key);
        //location.reload();
    }

    function updateQuantity(key, element) {
        $.post('{{ route('cart.updateQuantity') }}', {
            _token: '{{ csrf_token() }}',
            key: key,
            quantity: element.value
        }, function(data) {
            updateNavCart();
            $('#cart-summary').html(data);
        });
    }

    function showCheckoutModal() {
        $('#GuestCheckout').modal();
    }

   
    
</script>

<script>
    function check_agree(form) {
        var response = grecaptcha.getResponse();
       

        if (form.terms.checked && response) {
            return true;
        
        } else if (!form.terms.checked) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please accept terms and conditions'
            })
        } else if (response.length == 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select Captcha'
            })
            return false;
        }
        return false;
    }
</script>
@endsection
