<!DOCTYPE html>
<html lang="en">
<head>
    @php
        $seosetting = \App\SeoSetting::first();
    @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', $seosetting->description)" />
    <meta name="keywords" content="@yield('meta_keywords', $seosetting->keyword)">
    <meta name="author" content="{{ $seosetting->author }}">
    <meta name="sitemap_link" content="{{ $seosetting->sitemap_link }}">
    <title>Lingosphere</title>

    <!-- Responsive Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  
  <!--Box Icon-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/Lingosphere/img/Fav.png') }}">

    <!-- JavaScript to add 'loaded' class after page load -->
    <script type="text/javascript">
        window.addEventListener("load", function () {
            document.querySelector('body').classList.add('loaded');
        });
    </script>

   
    <!-- Include SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    
    <!-- Custom CSS Styles -->
    <link href="{{ asset('frontend/dist/css/custom-g.css') }}" rel="stylesheet" type="text/css" media="all">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('frontend/css/line-awesome.min.css') }}" media="all">

    <!-- Other CSS Files -->
    <link href="{{ asset('frontend/css/bootstrap-tagsinput.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend/css/jodit.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend/css/sweetalert2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend/css/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend/css/jquery.share.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('frontend/css/intlTelInput.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/spectrum.css') }}" rel="stylesheet" media="all">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    
    
    <link rel="stylesheet" href="{{ asset('frontend/Lingosphere/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Lingosphere/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Lingosphere/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Lingosphere/css/m_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Lingosphere/css/tirthak_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Lingosphere/css/saakshi.css') }}">
    
    
    
    
    
    
  
    <!--//added by narayan zade to display noty notication-->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noty@3.1.4/lib/noty.css">
    <script src="https://cdn.jsdelivr.net/npm/noty@3.1.4/lib/noty.js"></script>
    
    
    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   
   
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M30S4WRW1Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M30S4WRW1Z');
</script>
    
</head>
        <body>
            @php
            if(Session::has('currency_code'))
            {
                $currency_code = Session::get('currency_code');
            }
            else
            {
                $currency_code = \App\Currency::findOrFail(\App\BusinessSetting::where('type', 'system_default_currency')->first()->value)->code;
            }
            
            //echo  $currency_code ;
            @endphp

        
       {{--New Code Start--}}
       
       <style>
           .active_class{
               color:#0D6B68;
           }
       </style>
       
       <header class="fixed-top">
        <div class="header_top">
            <div class="container desktop_header p-0">
                <div class="header_main_container">
                    <div class="header_left">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('frontend/Lingosphere/img/header_logo.svg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="header_right">
                        <div class="currency_drop_container">
                            <button class="btn btn_currency_drop" onclick="justDrop('service_drop', 'roter1')">
                                Our Services
                                <img src="{{ asset('frontend/Lingosphere/img/drop.svg') }}" alt="" class="img-fluid" id="roter1">
                            </button>
                            <div class="dropped_div d-none" id="service_drop">
                                <img src="{{ asset('frontend/Lingosphere/img/polygon_trigonal.svg') }}" alt="" class="img-fluid poly_img">
                                <button class="btn btn_header_service {{ request()->routeIs('certified_translation') ? 'active' : '' }}" onclick="window.location.href='{{ route('certified_translation') }}'">Certified translation</button>
                                <button class="btn btn_header_service {{ request()->routeIs('standard_translation') ? 'active' : '' }}" onclick="window.location.href='{{ route('standard_translation') }}'">Standard translation</button>
                                <div class="dotted"></div>
                                <button class="btn btn_header_service {{ request()->routeIs('languages') ? 'active' : '' }}" onclick="window.location.href='{{ route('languages') }}'">Supported languages</button>
                                <button class="btn btn_header_service {{ request()->routeIs('documents') ? 'active' : '' }}" onclick="window.location.href='{{ route('documents') }}'">Supported documents</button>
                            </div>
                        </div>
                        <button class="btn btn_header_link {{ request()->routeIs('aboutus') ? 'active' : '' }}" onclick="window.location.href='{{ route('aboutus') }}'">
                            About Us
                        </button>
                        <button class="btn btn_header_link {{ request()->routeIs('careers') ? 'active' : '' }}" onclick="window.location.href='{{ route('careers') }}'">
                            Join us
                        </button>
                        <button class="btn btn_header_link {{ request()->routeIs('faqs') ? 'active' : '' }}" onclick="window.location.href='{{ route('faqs') }}'">
                            FAQ's
                        </button>
                        <button class="btn btn_header_link {{ request()->routeIs('contactus') ? 'active' : '' }}" onclick="window.location.href='{{ route('contactus') }}'">
                            Support
                        </button>
                        <div class="vertical_bar"></div>
                        <div class="currency_drop_container">
                            <button class="btn btn_currency_drop" onclick="justDrop('desk_currency_drop', 'roter2')">
                                 {{ $currency_code }} 
                                <img src="{{ asset('frontend/Lingosphere/img/drop.svg') }}" alt="" class="img-fluid" id="roter2">
                            </button>
                            <div class="dropped_div_currency d-none" id="desk_currency_drop" >
                                <img src="{{ asset('frontend/Lingosphere/img/polygon_trigonal.svg') }}" alt="" class="img-fluid poly_img">
                                @foreach (\App\Currency::where('status', 1)->get() as $key => $currency)
                                <button class="dropdown-item @if($currency_code == $currency->code) active @else '' @endif" data-currency="{{ $currency->code }}">{{ $currency->code }} ({{ $currency->symbol }})</button>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="cart_acc">
                            
                            
                            
                            <div class="currency_drop_container">
                                <button class="btn btn_header_link"  onclick="justDrop('cart_drop', 'roter_unknown')">
                                <img src="{{ asset('frontend/Lingosphere/img/cart_basket.svg') }}" alt="" class="img-fluid">
                                @if(Session::has('cart')) 
                                     @if(count($cart = Session::get('cart')) > 0)
                                     <span  id="cart_items_sidenav" >{{ count($cart = Session::get('cart'))}}</span>
                                     @else<span id="cart_items_sidenav" >0</span>
                                     @endif 
                                     @else
                                     <span id="cart_items_sidenav" >0</span>
                                @endif
                            </button>
                                <div class="cartdropped_div d-none" id="cart_drop">
                                    <img src="{{ asset('frontend/Lingosphere/img/polygon_trigonal.svg') }}" alt="" class="img-fluid poly_img">
                                    @if(Session::has('cart'))
                                       @if(count($cart = Session::get('cart')) > 0)
                                    <div class="cart-item-add">
                                        <h1 class="cart_titl">Cart</h1>
                                        @php
                                        $total1 = 0;
                                        @endphp
                                        @foreach($cart as $key => $cartItem)
                                        @php
                                        $total1 = $total1 + round(convert_price($cartItem['price']), 2);
                                        @endphp                                                   
                                        <div class="cart_product_frame">
                                            <div class="cart_product_detail_div">
                                                <p class="cart_desk_prod_title">{{ $cartItem['service_title'] }}</p>
                                                <p class="cart_desk_prod_subtitle">{{ $cartItem['service_no_of_pages'] }} pages ({{ ($cartItem['service_no_of_words']) }} words max)</p>
                                            </div>
                                            <div class="cart_prod_left">
                                                <p class="cart_prod_price">{{ single_price($cartItem['price']) }}</p>
                                                <button class="btn btn_x p-0" onclick="removeFromCartNarayan({{ $key }})">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M15 1L1 15" stroke="#230C0F" stroke-width="2" stroke-linecap="round"></path>
                                                      <path d="M1 1L15 15" stroke="#230C0F" stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="cart_calculator">
                                            <div class="cart_info_divider"></div>
                                            <div class="cart_calc_frames">
                                                <p class="cart_calc_info">Subtotal</p>
                                                <p class="cart_calc_info">{{ currency_symbol() }}{{ number_format($total1,2) }}</p>
                                            </div>
                                            
                                            <div class="cart_info_divider"></div>
                                            <div class="cart_calc_frames">
                                                <p class="cart_calc_info2">Total</p>
                                                <p class="cart_calc_info2">{{ currency_symbol() }}{{ number_format($total1,2) }}</p>
                                            </div>
                                        </div>
                                        <button class="btn btn_header" onclick="window.location.href='{{ route('checkout.shipping_info') }}'">
                                          To secure checkout
                                        </button>
                                    </div>
                                    @else
                                    <div class="dc-header">
                                        <h3 class="heading heading-6 strong-700" style="color:black;text-align: center;">{{__('Your Cart is empty')}}</h3>
                                    </div>
                                    @endif
                                @else
                                    <div class="dc-header">
                                        <h3 class="heading heading-6 strong-700" style="color:black;text-align: center;">{{__('Your Cart is empty')}}</h3>
                                    </div>
                                @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            @auth
                            <button class="btn btn_header_link">
                                <img src="{{ asset('frontend/Lingosphere/img/acc_logo.svg') }}" alt="" class="img-fluid" onclick="window.location.href='{{ route('dashboard') }}'">
                            </button>
                            @else
                            <button class="btn btn_header_link">
                                <img src="{{ asset('frontend/Lingosphere/img/acc_logo.svg') }}" alt="" class="img-fluid" onclick="window.location.href='{{ route('user.login') }}'">
                            </button>
                            @endauth
                        </div>
                        
                        <button class="btn btn_header" onclick="window.location.href='{{ route('request_translation') }}'">
                            Get your translations
                        </button>
                    </div>
                </div>
            </div>
            <div class="container mobile_header">
                <div class="header_mobo_main">
                    <div class="header_mobo_left">
                        <img src="{{ asset('frontend/Lingosphere/img/header_mobo.svg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="header_mobo_right">
                        
                        
                        <div class="currency_drop_container">
                            <button class="btn btn_header_link"  onclick="justDrop('cart_drop1', 'roter1')" style="gap: 2px;">
                                <img src="{{ asset('frontend/Lingosphere/img/cart_basket.svg') }}" alt="" class="img-fluid">
                                <span>(@if (Session::has('cart'))<span  id="cart_items_sidenav">{{ count(Session::get('cart')) }}</span>@else<span  id="cart_items_sidenav">0</span>@endif)</span>
                            </button>
                            <div class="cartdropped_div d-none" id="cart_drop1">
                                <img src="{{ asset('frontend/Lingosphere/img/polygon_trigonal.svg') }}" alt="" class="img-fluid poly_img">
                                <button class="btn btn_header_service" onclick="window.location.href='{{ route('certified_translation') }}'">Certified translation</button>
                                <button class="btn btn_header_service" onclick="window.location.href='{{ route('standard_translation') }}'">Standard translation</button>
                                <div class="dotted"></div>
                                <button class="btn btn_header_service" onclick="window.location.href='{{ route('languages') }}'">Supported languages</button>
                                <button class="btn btn_header_service" onclick="window.location.href='{{ route('documents') }}'">Supported documents</button>
                            </div>
                        </div>
                        
                        
                        
                        <div class="hamburger_menu">
                            <img src="{{ asset('frontend/Lingosphere/img/hamburger_logo.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="hamburger_menu_close" style="display: none;">
                            <img src="{{ asset('frontend/Lingosphere/img/hamburger_close.svg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_mobo_main_slide" style="display: none;">
            <div class="header_main_mobo">
                <div class="currency_drop_container">
                    <button class="btn btn_currency_drop" onclick="justDrop('service_drop2', 'roter3')">
                        Services
                        <img src="{{ asset('frontend/Lingosphere/img/drop.svg') }}" alt="" class="img-fluid" id="roter3">
                    </button>
                    <div class="dropped_div d-none" id="service_drop2">
                        <button class="btn btn_header_service {{ request()->routeIs('certified_translation') ? 'active_class' : '' }}" onclick="window.location.href='{{ route('certified_translation') }}'">Certified translation</button>
                        <button class="btn btn_header_service {{ request()->routeIs('standard_translation') ? 'active_class' : '' }}" onclick="window.location.href='{{ route('standard_translation') }}'">Standard translation</button>
                        <div class="dotted"></div>
                        <button class="btn btn_header_service {{ request()->routeIs('languages') ? 'active_class' : '' }}" onclick="window.location.href='{{ route('languages') }}'">Supported languages</button>
                        <button class="btn btn_header_service {{ request()->routeIs('documents') ? 'active_class' : '' }}" onclick="window.location.href='{{ route('documents') }}'">Supported documents</button>
                    </div>
                </div>

                <button class="btn btn_header_link {{ request()->routeIs('aboutus') ? 'active_class' : '' }}" onclick="window.location.href='{{ route('aboutus') }}'">
                    Our story
                </button>
                <button class="btn btn_header_link {{ request()->routeIs('careers') ? 'active_class' : '' }}" onclick="window.location.href='{{ route('careers') }}'">
                    Join us
                </button>
                <button class="btn btn_header_link {{ request()->routeIs('faqs') ? 'active_class' : '' }}" onclick="window.location.href='{{ route('faqs') }}'">
                    Faqs
                </button>
                <button class="btn btn_header_link {{ request()->routeIs('contactus') ? 'active_class' : '' }}" onclick="window.location.href='{{ route('contactus') }}'">
                    Contact
                </button>
                <div class="dotted"></div>
                @auth
                <button class="btn btn_header_link" onclick="window.location.href='{{ route('dashboard') }}'">
                    <img src="{{ asset('frontend/Lingosphere/img/acc_logo.svg') }}" alt="" class="img-fluid"> My account
                </button>
                @else
                <button class="btn btn_header_link" onclick="window.location.href='{{ route('user.login') }}'">
                    <img src="{{ asset('frontend/Lingosphere/img/acc_logo.svg') }}" alt="" class="img-fluid"> Login / Signup
                </button>
                @endauth
                <button class="btn btn_header_link">
                    <img src="{{ asset('frontend/Lingosphere/img/cart_basket.svg') }}" alt="" class="img-fluid"> Shopping Cart
                </button>
                <div class="currency_drop_container">
                    <button class="btn btn_currency_drop" onclick="justDrop('mobo_currency_drop', 'roter4')">
                       {{ $currency_code }} {{ (\App\Currency::where('code', $currency_code)->first()->symbol) }}
                        <img src="{{ asset('frontend/Lingosphere/img/drop.svg') }}" alt="" class="img-fluid" id="roter4">
                    </button>
                    <div class="dropped_div_currency d-none" id="mobo_currency_drop">
                         @foreach (\App\Currency::where('status', 1)->get() as $key => $currency)
                        <button class="dropdown-item @if($currency_code == $currency->code) active @else '' @endif" data-currency="{{ $currency->code }}">{{ $currency->code }} ({{ $currency->symbol }})</button>
                        @endforeach
                       
                    </div>
                </div>
                <button class="btn btn_header" onclick="window.location.href='{{ route('request_translation') }}'">
                    Translate Now
                </button>

            </div>
        </div>


    </header>
       
       {{--New Code End--}}
       
    @yield('content')
    

    @include('frontend.inc.footer')

</div>
    @include('frontend.partials.modal')

    @if (\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1)
        <div id="fb-root"></div>
        <!-- Your customer chat code -->
        <div class="fb-customerchat"
          attribution=setup_tool
          page_id="{{ env('FACEBOOK_PAGE_ID') }}">
        </div>
    @endif

   
    <!--Lingosphere SCRIPT FILES ADDED starts-->
    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('frontend/Lingosphere/dist/js/owl.carousel.js') }}"></script>
    <!-- <script src="./dist/js/bootstrap.min.js"></script>
        <script src="./dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    
     <script type="text/javascript">
      // This script appears only in the demo - it disables forms with no action attribute to prevent 
      // navigating away from the page.
      jQuery("form:not([action])").on('submit', function(){return false;});
    </script>
    
    
    <!--OLD SCRIPT FILES-->
    
     <!-- External JavaScript Libraries -->
   
    <!--<script src="{{ asset('frontend/ocean/dist/js/app.js') }}"></script>-->
    <script src="{{ asset('frontend/ocean/dist/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/ocean/dist/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/ocean/dist/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/ocean/dist/js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/lingosphere/assets/js/header.js') }}"></script>

    <!-- Additional JavaScript Libraries -->
    <script src="{{ asset('frontend/js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jodit.min.js') }}"></script>
    <script src="{{ asset('frontend/js/xzoom.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fb-script.js') }}"></script>
    <script src="{{ asset('frontend/js/lazysizes.min.js') }}"></script>
    <script src="{{ asset('frontend/js/intlTelInput.min.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('frontend/js/active-shop.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <!-- Additional Plugins: Sorted A-Z -->
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.share.js') }}"></script>
    
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
    <!--OLD SCRIPT FILES-->
    
    
    <script>
    $(document).ready(function() {
    $(".inactive").click(function(){
        $(".mobile-slide-menu").fadeIn("slow");
    });
    $(".menuactive").click(function(){
        $(".mobile-slide-menu").fadeOut("slow");
    });
    $('.cart-icon').click(function(){
        $('.cart-add').toggle();
    })
    $('.cross_x_cart').click(function(){
        $('.cart-add').hide();
    })
});
    
    function closeNav() {
  document.getElementById("serviceSidenav").style.width = "0%";
  
}
</script>
    <script>
    
            $(document).ready(function() {
                $('.category-nav-element').each(function(i, el) {
                    $(el).on('mouseover', function(){
                        if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                            $.post('{{ route('category.elements') }}', {_token: AIZ.data.csrf, id:$(el).data('id')}, function(data){
                                $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                            });
                        }
                    });
                });
                if ($('#lang-change').length > 0) {
                    $('#lang-change .dropdown-menu a').each(function() {
                        $(this).on('click', function(e){
                            e.preventDefault();
                            var $this = $(this);
                            var locale = $this.data('flag');
                            $.post('{{ route('language.change') }}',{_token: AIZ.data.csrf, locale:locale}, function(data){
                                location.reload();
                            });
    
                        });
                    });
                }
    
                /*if ($('#GBP-dropdown').length > 0) {
                    $('#GBP-dropdown a.dropdown-item').each(function() {
                        $(this).on('click', function(e){
                            e.preventDefault();
                            var $this = $(this);
                            var currency_code = $this.data('currency');
                            $.post('{{ route('currency.change') }}',{_token: AIZ.data.csrf, currency_code:currency_code}, function(data){
                                location.reload();
                            });
    
                        });
                    });
                }*/
            });
    
      </script>
    <script>
    
        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function(){
                    if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                        $.post('{{ route('category.elements') }}', {_token: '{{ csrf_token()}}', id:$(el).data('id')}, function(data){
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-item a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}',{_token:'{{ csrf_token() }}', locale:locale}, function(data){
                            location.reload();
                        });
    
                    });
                });
            }
    
                // $('#currencyDropDown a.dropdown-item').each(function() 
                // {
                //     $(this).on('click', function(e)
                //     {
                //         e.preventDefault();
                //         var $this = $(this);
                //         var currency_code = $(this).data('currency'); // Extract currency code from anchor text
                //         console.log(currency_code);
                //         $.post('{{ route('currency.change') }}', {_token: '{{ csrf_token() }}', currency_code: currency_code}, function(data){
                //             location.reload();
                //         });
                //     });
                // });


    
    
            if ($('#desk_currency_drop').length > 0) {
                //$('#currency-change dropdown-item a').each(function() { 
                $('#desk_currency_drop button.dropdown-item').each(function() {
                    $(this).on('click', function(e){
                        //alert(1);
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        console.log(currency_code);
                        $.post('{{ route('currency.change') }}',{_token:'{{ csrf_token() }}', currency_code:currency_code}, function(data){
                            location.reload();
                        });
    
                    });
                });
            }
            
            
            if ($('#mobo_currency_drop').length > 0) {
                //$('#currency-change dropdown-item a').each(function() { 
                $('#mobo_currency_drop button.dropdown-item').each(function() {
                    $(this).on('click', function(e){
                        //alert(1);
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        console.log(currency_code);
                        $.post('{{ route('currency.change') }}',{_token:'{{ csrf_token() }}', currency_code:currency_code}, function(data){
                            location.reload();
                        });
    
                    });
                });
            }
        });
    
        $('#search').on('keyup', function(){
            search();
        });
    
        $('#search').on('focus', function(){
            search();
        });
    
        function search(){
            var search = $('#search').val();
            if(search.length > 0){
                $('body').addClass("typed-search-box-shown");
    
                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('{{ route('search.ajax') }}', { _token: '{{ @csrf_token() }}', search:search}, function(data){
                    if(data == '0'){
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+search+'"</strong>');
                        $('.search-preloader').addClass('d-none');
    
                    }
                    else{
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            }
            else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }
    
        function updateNavCart(){
            $.post('{{ route('cart.nav_cart') }}', {_token:'{{ csrf_token() }}'}, function(data){
                // console.log(data);
                $('#cart_items').html(data);
            });
        }
        
        function removeFromCartNarayan(key) {
            $.post('{{ route('cart.removeFromCart') }}', {
                _token: '{{ csrf_token() }}',
                key: key
            })
            .done(function(data) {
                if (data.success) {
                    new Noty({
                        type: 'success',  // Notification type
                        layout: 'topRight',  // Notification position
                        text: 'Item removed from cart!',  // Message
                        timeout: 2000  // Auto close after 2 seconds
                    }).show();
        
                    setTimeout(function() {
                        location.reload();  // Reload page after a short delay
                    }, 2000);  // Delay reload to allow the notification to show
                } else {
                    new Noty({
                        type: 'error',
                        layout: 'topRight',
                        text: 'Failed to remove item from cart.',
                        timeout: 2000
                    }).show();
                }
            })
            .fail(function(error) {
                console.error('Error:', error);
        
                new Noty({
                    type: 'error',
                    layout: 'topRight',
                    text: 'An error occurred. Please try again.',
                    timeout: 2000
                }).show();
        
                setTimeout(function() {
                    location.reload();  // Reload page after a short delay on failure
                }, 2000);
            });
        }

    
        function addToCompare(id){
            $.post('{{ route('compare.addToCompare') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                $('#compare').html(data);
                showFrontendAlert('success', 'Item has been added to compare list');
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
            });
        }
    
        function addToWishList(id){
            @if (Auth::check() && (Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller'))
                $.post('{{ route('wishlists.store') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                    if(data != 0){
                        $('#wishlist').html(data);
                        showFrontendAlert('success', 'Item has been added to wishlist');
                    }
                    else{
                        showFrontendAlert('warning', 'Please login first');
                    }
                });
            @else
                showFrontendAlert('warning', 'Please login first');
            @endif
        }
    
        function showAddToCartModal(id){
            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal("show");
            $('.c-preloader').show();
            $.post('{{ route('cart.showCartModal') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                /*$('.xzoom, .xzoom-gallery').xzoom({
                    Xoffset: 20,
                    bg: true,
                    tint: '#000',
                    defaultScale: -1
                });*/
                getVariantPrice();
            });
        }
    
        $('#option-choice-form input').on('change', function(){
            getVariantPrice();
        });
    
        function getVariantPrice(){
            if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
                $.ajax({
                   type:"POST",
                   url: '{{ route('products.variant_price') }}',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){
                       $('#option-choice-form #chosen_price_div').removeClass('d-none');
                       $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                       $('#available-quantity').html(data.quantity);
                       $('.input-number').prop('max', data.quantity);
                       //console.log(data.quantity);
                       if(parseInt(data.quantity) < 1){
                           $('.buy-now').hide();
                           $('.add-to-cart').hide();
                       }
                       else{
                           $('.buy-now').show();
                           $('.add-to-cart').show();
                       }
                   }
               });
            }
        }
    
        function checkAddToCartValidity(){
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                  names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                  count++;
            });
    
            if($('#option-choice-form input:radio:checked').length == count){
                return true;
            }
    
            return false;
        }
    
        function addToCart(){
            if(checkAddToCartValidity()) {
                $('#addToCart').modal("show");
                $('.c-preloader').show();
                $.ajax({
                   type:"POST",
                   url: '{{ route('cart.addToCart') }}',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){
                       $('#addToCart-modal-body').html(null);
                       $('.c-preloader').hide();
                       //$('#modal-size').removeClass('modal-lg');
                       $('#addToCart-modal-body').html(data);
                       updateNavCart();
                       $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
                      $('#cart_items_sidenav2').html(parseInt($('#cart_items_sidenav2').html())-1);
                   }
               });
            }
            else{
                showFrontendAlert('warning', 'Please choose all the options');
            }
        }
    
        function buyNow(){
            if(checkAddToCartValidity()) {
                $('#addToCart').modal("show");
                $('.c-preloader').show();
                $.ajax({
                   type:"POST",
                   url: '{{ route('cart.addToCart') }}',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){
                       //$('#addToCart-modal-body').html(null);
                       //$('.c-preloader').hide();
                       //$('#modal-size').removeClass('modal-lg');
                       //$('#addToCart-modal-body').html(data);
                       updateNavCart();
                       $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
                       window.location.replace("{{ route('checkout.shipping_info') }}");
                   }
               });
            }
            else{
                showFrontendAlert('warning', 'Please choose all the options');
            }
        }
    
        function show_purchase_history_details(order_id)
        {
            $('#order-details-modal-body').html(null);
    
            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }
    
            $.post('{{ route('purchase_history.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal("show");
                $('.c-preloader').hide();
            });
        }
    
        function show_order_details(order_id)
        {
            $('#order-details-modal-body').html(null);
    
            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }
    
            $.post('{{ route('orders.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal("show");
                $('.c-preloader').hide();
            });
        }
    
        function cartQuantityInitialize(){
            $('.btn-number').click(function(e) {
                e.preventDefault();
    
                fieldName = $(this).attr('data-field');
                type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());
    
                if (!isNaN(currentVal)) {
                    if (type == 'minus') {
    
                        if (currentVal > input.attr('min')) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('min')) {
                            $(this).attr('disabled', true);
                        }
    
                    } else if (type == 'plus') {
    
                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }
    
                    }
                } else {
                    input.val(0);
                }
            });
    
            $('.input-number').focusin(function() {
                $(this).data('oldValue', $(this).val());
            });
    
            $('.input-number').change(function() {
    
                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());
    
                name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
    
    
            });
            $(".input-number").keydown(function(e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        }
    
         function imageInputInitialize(){
             $('.custom-input-file').each(function() {
                 var $input = $(this),
                     $label = $input.next('label'),
                     labelVal = $label.html();
    
                 $input.on('change', function(e) {
                     var fileName = '';
    
                     if (this.files && this.files.length > 1)
                         fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                     else if (e.target.value)
                         fileName = e.target.value.split('\\').pop();
    
                     if (fileName)
                         $label.find('span').html(fileName);
                     else
                         $label.html(labelVal);
                 });
    
                 // Firefox bug fix
                 $input
                     .on('focus', function() {
                         $input.addClass('has-focus');
                     })
                     .on('blur', function() {
                         $input.removeClass('has-focus');
                     });
             });
         }
    
    </script>
    <script>
        function showFrontendAlert(type, message){
            if(type == 'payfail'){
            
                swal({
                    position: 'center',
                    //type: 'error',
                    //title: message,
                    //showConfirmButton: true
                    width:'auto',
                    icon: 'error',
                    title: '<h1 class="text-blue">Payment was unsuccessful</h1>',
                    html:'<p class="body-large text-grey">Please try again</p>',
                    showConfirmButton: true,
                    confirmButtonText: 'Ok'
                    
                });
            }else if(type == 'regSuccess'){
            
                swal({
                    position: 'center',
                    //type: 'error',
                    //title: message,
                    //showConfirmButton: true
                    width:'auto',
                    icon: 'error',
                    title: '<h1 class="text-blue">Account Successfully Created!</h1>',
                    html:'<p class="body-large text-grey">Your account has been created. Please confirm belo to continue. </p>',
                    showConfirmButton: true,
                    confirmButtonText: 'Access your account here'
                    
                });
            }
            else{
                if(type == 'danger'){
                    type = 'error';
                }
                swal({
                    position: 'center',
                    type: type,
                    title: message,
                    showConfirmButton: false,
                    timer: 3000
                });
            }
        }
    </script>
    
    @foreach (session('flash_notification', collect())->toArray() as $message)
        <script>
            showFrontendAlert('{{ $message['level'] }}', '{{ $message['message'] }}');
        </script>
    @endforeach
    
    <script>
    // Make by Narayan zade
    function addToCart1Step(id) {
        if (checkAddToCartValidity()) {
           
             $('.addedtocart').modal("show");
            // Animation for the "Adding to Cart" text
            $('#carttitle').css('opacity', 0).html('Adding to Cart').animate({ opacity: 1 }, 500);
            $('#addtocarticon').css('display', 'none');
    
            // Animation for the "Adding to cart, please wait..." text
            $('#cartdescription').css('opacity', 0).html('Adding to cart, please wait...').animate({ opacity: 1 }, 500);
    
            $.ajax({
                type: "POST",
                url: '{{ route('cart.addToCart') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    quantity: 1
                },
                success: function (data) {
                   
                    $('.addedtocart').modal("show");
                    // Update the cart items
                    $("#cart_items_sidenav").load(location.href + " #cart_items_sidenav");
                    $("#cart_items_sidenav2").load(location.href + " #cart_items_sidenav2");
                    $("#cartbody").load(location.href + " #cartbody");
                    $("#cartbody2").load(location.href + " #cartbody2");
    
                    // Animation for the "Added to Cart" text
                    $('#carttitle').css('opacity', 0).html('Added to Cart').animate({ opacity: 1 }, 500);
                    $('#cartdescription').html('Your chosen service has successfully been added to the cart.');
                }
            });
        }
    }
    </script>
    <div class="modal fade addedtocart" id="forgotpass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <h2 id="carttitle">Adding to cart</h2>
                    <p id="cartdescription">
                       Service added to Cart
                    </p>
                    <div class="cancel-submit-btn">
                        <div class="cancel-btn">
                            <a  style="cursor:pointer;" data-bs-dismiss="modal" class="light-btn"><< Shopping</a>
                        </div>
                        <div class="submit-btn">
                            <a href="{{ route('checkout.shipping_info') }}" class="dark-btn">Checkout >></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
   
   <!-- Registration Success Modal -->
   {{--<div class="modal fade" id="registrationsuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal_dialog">
            <div class="modal-content modal_content_box">
                <div class="modal-header modal_header">
                    <button type="button" class="btn_close" data-bs-dismiss="modal">
                        <img src="{{ asset('frontend/TranslatorTongue/img/x.svg') }}" alt="" class="close">
                    </button>
                </div>
                <div class="modal-body modal_body">
                    <div class="modal_content">
                        <h4 class="modal_title">Registration Successful</h4>
                        <p class="modal_sub">Thank you for registering! Please check your email to verify your account. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    
    <div class="modal fade" id="registrationsuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal_dialog">
                <div class="modal-content modal_content">
                    <div class="custom_modal_body">
                        <div class="modal_inner">
                            <div class="modal_content">
                                <h1 class="modal_title">Account Successfully Created!</h1>
                                <p class="modal_subtitle">Thank you for registering! A verification email has been sent to you. </p>
                                <button class="btn btn_redd mx-auto mowid100" data-bs-dismiss="modal">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @if(Session::has('registrationsuccess'))
        <script>
            $(document).ready(function() {
                $('#registrationsuccess').modal('show');
            });
        </script>
    @endif
    
    @if(Session::has('loginfailed'))
        <script>
            $(document).ready(function() {
                $('#loginfailed').modal('show');
            });
        </script>
    @endif
    
    <div class="modal fade" id="loginfailed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal_dialog">
                <div class="modal-content modal_content">
                    <div class="custom_modal_body">
                        <div class="modal_inner bg_fail">
                            <div class="modal_content">
                                <h1 class="modal_title">Something went wrong</h1>
                                <p class="modal_subtitle" style="color: #B33951;">Diam tincidunt vestibulum pharetra nulla non nullam. Tellus lobortis.</p>
                                <button class="btn btn_redd mx-auto mowid100" data-bs-dismiss="modal">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Login Invalid Modal -->
    <div class="modal fade" id="commonerror" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal_dialog">
            <div class="modal-content modal_content_box">
                <div class="modal-header modal_header">
                    <button type="button" class="btn_close" data-bs-dismiss="modal">
                        <img src="{{ asset('frontend/TranslatorTongue/img/x.svg') }}" alt="" class="close">
                    </button>
                </div>
                <div class="modal-body modal_body">
                    <div class="modal_content">
                        <h4 class="modal_title">Error</h4>
                        <p class="modal_sub">Sorry, something went wrong during the form submission. Please try again later.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if(Session::has('commonerror'))
        <script>
            $(document).ready(function() {
                $('#commonerror').modal('show');
            });
        </script>
    @endif

    <!-- Reset Password Link Sent Modal -->
        
    <div class="modal fade" id="resetpasswordlinksent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_dialog">
            <div class="modal-content modal_content">
                <div class="custom_modal_body">
                    <div class="modal_inner">
                        <div class="modal_content">
                            <h1 class="modal_title">Password Reset Link Sent</h1>
                            <p class="modal_subtitle" style="color:#0F0F0F;">Password reset link has been sent on your email. Please check...</p>
                            <button class="btn btn_redd mx-auto mowid100" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if(Session::has('resetpasswordlinksent'))
        <script>
            $(document).ready(function() {
                $('#resetpasswordlinksent').modal('show');
            });
        </script>
    @endif
    
   
    @if(Session::has('contactsuccess'))
        <script>
            $(document).ready(function() {
                $('#contactsuccess').modal('show');
            });
        </script>
    @endif
    
    <div class="modal fade" id="contactsuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_dialog">
            <div class="modal-content modal_content">
                <div class="custom_modal_body">
                    <div class="modal_inner bg_fail">
                        <div class="modal_content">
                            <h1 class="modal_title">Contact Form Submitted !</h1>
                            <p class="modal_subtitle" style="color: #B33951;">This email is to confirm your submission of the career form. Please allow 48 hours for us to respond. In the meantime, why not browse our services?</p>
                            <button class="btn btn_redd mx-auto mowid100" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="careerscontactsuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal_dialog">
            <div class="modal-content modal_content_box">
                <div class="modal-header modal_header">
                    <button type="button" class="btn_close" data-bs-dismiss="modal">
                        <img src="{{ asset('frontend/TranslatorTongue/img/x.svg') }}" alt="" class="close">
                    </button>
                </div>
                <div class="modal-body modal_body">
                    <div class="modal_content">
                        <h4 class="modal_title">Application Received!</h4>
                        <p class="modal_sub">Thank you for your interest in joining our team! Your application has been received and is being reviewed. We'll be in touch soon.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if(Session::has('careerscontactsuccess'))
        <script>
            $(document).ready(function() {
                //$('#careerscontactsuccess').modal('show');
                Swal.fire({
                    width:'auto',
                    icon: 'Success',
                    title: '<h1 class="text-blue">Application Received !!</h1>',
                    html:'<p class="body-large text-grey">Thank you for your interest in joining our team! Your application has been received and is being reviewed. We'll be in touch soon.</p>',
                    showConfirmButton: true,
                    confirmButtonText: 'Ok'
                    
                });
            });
        </script>
    @endif


    @if(Session::has('packagesuccess'))
        <script>
            $(document).ready(function() {
                $('#packagesuccess').modal('show');
            });
        </script>
    @endif
    
    <div class="modal fade" id="packagesuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_dialog">
            <div class="modal-content modal_content">
                <div class="custom_modal_body">
                    <div class="modal_inner">
                        <div class="modal_content">
                            <h1 class="modal_title">Thanks for Submitting a Query!</h1>
                            <p class="modal_subtitle" style="color:#0F0F0F;">We have sent you an email confirming your custom package enquiry.</p>
                            <button class="btn btn_redd mx-auto mowid100" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Captcha Selection Error Modal -->
    <div class="modal fade" id="captchafailed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal_dialog">
            <div class="modal-content modal_content_box">
                <div class="modal-header modal_header">
                    <button type="button" class="btn_close" data-bs-dismiss="modal">
                        <img src="{{ asset('frontend/TranslatorTongue/img/x.svg') }}" alt="" class="close">
                    </button>
                </div>
                <div class="modal-body modal_body">
                    <div class="modal_content">
                        <h4 class="modal_title">Captcha Selection Error</h4>
                        <p class="modal_sub"> Please complete the captcha before submitting the form.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if(Session::has('captchafailed'))
        <script>
            $(document).ready(function() {
                //$('#captchafailed').modal('show');
                Swal.fire({
                    width:'auto',
                    icon: 'error',
                    title: '<h1 class="text-blue">Captcha Selection Error</h1>',
                    html:'<p class="body-large text-grey">Please complete the captcha before submitting the form</p>',
                    showConfirmButton: true,
                    confirmButtonText: 'Ok'
                    
                });
            });
        </script>
    @endif

    
    @if(Session::has('paymentsuccess'))
        <script>
            $(document).ready(function() {
                $('#paymentsuccess').modal('show');
            });
        </script>
    @endif
    
    <div class="modal fade" id="paymentsuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_dialog">
            <div class="modal-content modal_content">
                <div class="custom_modal_body">
                    <div class="modal_inner">
                        <div class="modal_content">
                            <h1 class="modal_title">Payment Successful</h1>
                            <p class="modal_subtitle" style="color:#0F0F0F;">Your Payment has gone through !Thank you for your purchase. Your transaction is complete and your order is on its way. If you have any questions, contact our support team.</p>
                            <button class="btn btn_redd mx-auto mowid100" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Canceled Modal -->
    <div class="modal fade" id="paymentcancelled" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal_dialog">
            <div class="modal-content modal_content_box">
                <div class="modal-header modal_header">
                    <button type="button" class="btn_close" data-bs-dismiss="modal">
                        <img src="{{ asset('frontend/TranslatorTongue/img/x.svg') }}" alt="" class="close">
                    </button>
                </div>
                <div class="modal-body modal_body">
                    <div class="modal_content">
                        <h4 class="modal_title">Payment Cancelled</h4>
                        <p class="modal_sub"> Your payment has been cancelled.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if(Session::has('paymentcancelled'))
        <script>
            $(document).ready(function() {
                //$('#paymentcancelled').modal('show');
                Swal.fire({
                    width:'auto',
                    icon: 'error',
                    title: '<h1 class="text-blue">Payment Cancelled</h1>',
                    html:'<p class="body-large text-grey">Your Payment has been cancelled.</p>',
                    showConfirmButton: true,
                    confirmButtonText: 'Ok'
                    
                });
                
                
            });
        </script>
    @endif

    
    
    
     @if(Session::has('paymentfailed'))
        <script>
            $(document).ready(function() {
                $('#paymentfailed').modal('show');
            });
        </script>
    @endif
    
    <div class="modal fade" id="paymentfailed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_dialog">
            <div class="modal-content modal_content">
                <div class="custom_modal_body">
                    <div class="modal_inner bg_fail">
                        <div class="modal_content">
                            <h1 class="modal_title">Payment Failed</h1>
                            <p class="modal_subtitle" style="color: #B33951;">We encountered an issue processing your payment.Please check your information and try again. If the problem persists, contact our support team and we will try to resolve the problem. We appreciate your patience.</p>
                            <button class="btn btn_redd mx-auto mowid100" data-bs-dismiss="modal">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $.fn.hasId = function(id) {
          return this.attr('id') == id;
        };
        const $dropdown = $(".dropdown");
        const $dropdownToggle = $(".dropdown-toggle");
        const $dropdownMenu = $(".dropdown-menu");
        const showClass = "show";
        
        $(window).on("load resize", function() {
          if (this.matchMedia("(min-width: 768px)").matches) {
            $dropdown.hover(
              function() {
                if($dropdown.hasId('cart_items')){
                    $('#cart_items').addClass(showClass);
                    $('#cart_items .dropdown-toggle').attr("aria-expanded", "true");
                    $('#cart_items .dropdown-menu').addClass(showClass);
                    $('#cart_items .dropdown-cart').addClass(showClass);
                }else{
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                }
              },
              function() {
                    if($dropdown.hasId('cart_items')){
                        $('#cart_items').removeClass(showClass);
                        $('#cart_items .dropdown-toggle').attr("aria-expanded", "false");
                        $('#cart_items .dropdown-menu').removeClass(showClass);
                        $('#cart_items .dropdown-cart').removeClass(showClass);
                    }else{
                        const $this = $(this);
                        $this.removeClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "false");
                        $this.find($dropdownMenu).removeClass(showClass);
                    }
              }
            );
          } else {
            $dropdown.off("mouseenter mouseleave");
          }
        });
        
        
        const $dropdown_cart = $("#cart_items");
        const $dropdownToggle_cart = $(".dropdown-toggle");
        const $dropdownMenu_cart = $(".dropdown-menu");
        const showClass_cart = "show";
        
        $(window).on("load resize", function() {
          if (this.matchMedia("(min-width: 768px)").matches) {
            $dropdown_cart.hover(
              function() {
                if($dropdown_cart.hasId('cart_items')){
                    $('#cart_items').addClass(showClass_cart);
                    $('#cart_items .dropdown-toggle').attr("aria-expanded", "true");
                    $('#cart_items .dropdown-menu').addClass(showClass_cart);
                    $('#cart_items .dropdown-cart').addClass(showClass_cart);
                }else{
                    const $this = $(this);
                    $this.addClass(showClass_cart);
                    $this.find($dropdownToggle_cart).attr("aria-expanded", "true");
                    $this.find($dropdownMenu_cart).addClass(showClass_cart);
                }
              },
              function() {
                    if($dropdown_cart.hasId('cart_items')){
                        $('#cart_items').removeClass(showClass_cart);
                        $('#cart_items .dropdown-toggle').attr("aria-expanded", "false");
                        $('#cart_items .dropdown-menu').removeClass(showClass_cart);
                        $('#cart_items .dropdown-cart').removeClass(showClass_cart);
                    }else{
                        const $this = $(this);
                        $this.removeClass(showClass_cart);
                        $this.find($dropdownToggle_cart).attr("aria-expanded", "false");
                        $this.find($dropdownMenu_cart).removeClass(showClass_cart);
                    }
              }
            );
          } else {
            $dropdown_cart.off("mouseenter mouseleave");
          }
        });
        
        /*document.getElementById("ldd").onclick = function () {
            location.href = "{{ route('products') }}";
        };*/
    </script>
    <script>
        $(function () {
            
          $(document).scroll(function () {
            var $nav = $(".fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
          });
        });
    </script>
    <script>
          $(document).on("click", ".btn-menu", function () {
             $(".navbar").addClass("bg-color");
            });
    </script>
    <script>
     
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>


@yield('script')


  </body>
</html>