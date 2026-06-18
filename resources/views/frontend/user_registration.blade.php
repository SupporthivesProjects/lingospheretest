@extends('frontend.layouts.app')

@section('content')

{{--New Code Start--}}

<section class="comon_bg">
    <div class="container sign_up_cont px-0 ">
        <div class="down_box">
            <div class="left_box">
                <div class="sing_up_box">
                    <h4 class="sing_title">Sign Up</h4>
                    <p class="sign_sub">You will need to make an account to use our services. Please use the form below to sign up. </p>
                    <p class="log_in">Have an account? <a href="{{ route('user.login') }}" class="odd">Log in</a></p>
                </div>
                <div class="form_box">
                    <div class="split_box">
                        <div class="form-group name_form">
                            <div class="lable_forget">
                                <label for="name" class="full_namee">Full Name</label>
                            </div>
                            <input type="text" class="form-control inpi_boxx " form="registerform" name="name" id="name" placeholder="Full Name" required>
                        </div>
                        {{--<div class="form-group name_form">
                            <div class="lable_forget">
                                <label for="email" class="full_namee">last Name</label>
                            </div>
                            <input type="email" class="form-control inpi_boxx " name="email" id="email" placeholder="Email Address" required>
                        </div>--}}
                    </div>
                    <div class="form-group name_form">
                        <div class="lable_forget">
                            <label for="email" class="full_namee">Email</label>
                        </div>
                        <input type="email" class="form-control inpi_boxx " form="registerform" name="email" id="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group name_form">
                        <div class="lable_forget">
                            <label for="password" class="full_namee">Password</label>
                        </div>
                        <input type="password" class="form-control inpi_boxx " form="registerform" name="password" id="password" class="form-control pass-icon" placeholder="Password ( at least 6 characters)" required>
                    </div>

                    <div class="form-group name_form">
                        <div class="lable_forget">
                            <label for="password_confirmation" class="full_namee">Confirm password</label>
                        </div>
                        <input type="password" class="form-control inpi_boxx " form="registerform" name="password_confirmation" id="password_confirmation" class="form-control pass-icon" placeholder="Password ( at least 6 characters)" required>
                    </div>
                    <div class="terms_captachabox">
                        <div class="custom-control custom_checkbox">
                            <input type="checkbox" class="form-check-input  tick_box" form="registerform" name="terms" id="terms">
                            <label class="custom-control-label terms_line" for="terms">I agree with the <a
                                    href="{{ route('termsandconditions') }}" class="odd">Terms & Conditions</a> &
                                <a href="{{ route('privacypolicy') }}" class="odd">Privacy Policy</a></label>
                        </div>
                        <form id="registerform" role="form" action="{{ route('register') }}" method="POST" onsubmit="return check_agree(this);">
                        @csrf
                        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                        <div class="h-captcha mx-auto my_mob_24" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                        {{--<img src="{{ asset('frontend/TranslatorTongue/img/reCAPTCHA.png') }}" alt="" class=" img-fluid  captacha">--}}
                        </form>
                    </div>

                    <button type="submit" form="registerform" class="btn btn_local1">  Sign up </button>
                </div>
            </div>
            <div class="rght_box">
                <img src="{{ asset('frontend/TranslatorTongue/img/right_side.png') }}" alt=""class="sign_upp img-fluid ">
            </div>
        </div>
</section>

{{--New Code End--}}

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('frontend/TranslatorTongue/dist/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/TranslatorTongue/dist/js/owl.carousel.js') }}"></script>
<!-- <script src="./dist/js/bootstrap.min.js"></script>
<script src="./dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

<script>
    $(document).ready(function () {
        $(".hamburger_menu").click(function () {
            $(".header_mobo_main_slide").fadeIn("slow");
            $(".hamburger_menu").fadeOut("slow");
            $(".hamburger_menu_close").fadeIn("slow");
        });
        $(".hamburger_menu_close").click(function () {
            $(".header_mobo_main_slide").fadeOut("slow");
            $(".hamburger_menu").fadeIn("slow");
            $(".hamburger_menu_close").fadeOut("slow");
        });
        $(".hamburger_cart").click(function () {
            $(".header_mobo_cart_slide").fadeIn("slow");
            $(".hamburger_menu").fadeOut("slow");
            $(".cart_menu_close").fadeIn("slow");
        });
        $(".close_cart_menu_mobo").click(function () {
            $(".header_mobo_cart_slide").fadeOut("slow");
        });
    });

    $(document).ready(function () {
        $('.hs3_btn').mouseover(function () {
            $('.straight_arrow').fadeOut('slow');
            $('.zic_zac_arrow').fadeIn('slow');
        });
        $('.hs3_btn').mouseout(function () {
            $('.straight_arrow').fadeIn('slow');
            $('.zic_zac_arrow').fadeOut('slow');
        });
    })

    function currency_drop() {
        var a = document.getElementById('currency_drop');
        if (a.classList.contains('d-none')) {
            a.classList.remove('d-none');
        } else {
            a.classList.add('d-none')
        }
    }

    function cart_drop() {
        var a = document.getElementById('cart_drop');
        if (a.classList.contains('d-none')) {
            a.classList.remove('d-none');
        } else {
            a.classList.add('d-none');
        }
    }

    function maintainer(droper_id, roter_id) {
        var a = document.getElementById(droper_id);
        var b = document.getElementById(roter_id);
        if (a.classList.contains('d-none')) {
            a.classList.remove('d-none');
            b.style.transform = "rotate(180deg)";
        } else {
            a.classList.add('d-none');
            b.style.transform = "rotate(0deg)";
        }
    }

    function maintainer_active(droper_id, active_id) {
        var a = document.getElementById(droper_id);
        var b = document.getElementById(active_id);
        if (a.classList.contains('d-none')) {
            a.classList.remove('d-none');
            b.classList.add('active');
        } else {
            a.classList.add('d-none');
            b.classList.remove('active');
        }
    }
    function maintainer_active_rotate(droper_id, active_id, roter_id) {
        var a = document.getElementById(droper_id);
        var b = document.getElementById(active_id);
        var c = document.getElementById(roter_id);
        if (a.classList.contains('d-none')) {
            a.classList.remove('d-none');
            b.classList.add('active');
            c.style.transform = "rotate(180deg)";
            c.style.marginTop = "5px";
        } else {
            a.classList.add('d-none');
            b.classList.remove('active');
            c.style.transform = "rotate(0deg)";
            c.style.marginTop = "-4px";
        }
    }

</script>
<script type="text/javascript">
    
    function check_agree(form) {
       
        var password1 = form.password.value;
        var password2 = form.password_confirmation.value;

        
        if (password2 == password1 && form.terms.checked ) {
          return true;
        } else if(password1.length < 6) {
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Password is too short, please try again !'
            })
        } else if(password2 != password1) {
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Password does not matched, please try again !'
            })
        } else if(!form.terms.checked) {
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'You must agree to the Terms and Conditions and Privacy Policy before continuing.'
            })
             return false;
        }
        return false;
    }
</script>
@endsection
