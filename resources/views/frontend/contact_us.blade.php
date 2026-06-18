@extends('frontend.layouts.app')

@section('content')

    {{-- NEW CODE STRATS HERE --}}
    <section class="contactus-cont">
        <div class="cont-top">
            <div class="c-info">
                <h1>Our Contact details</h1>
                <div class="info-txt">
                    <p style="text-align:center;">SUNZAR SERVICES LTD,
<br>
<!--Elaionon, 75-->
<!--<br>-->
<!--Strovolos, 2060, Nicosia, Cyprus-->
<!--<br>-->
<!--HE455113-->
Nikokreontos, 2 <br>
NICE DREAM, 6th floor, Flat/Office 601 <br>
1066, Nicosia, Cyprus
</p>
                    <p>support@lingosphere.co</p>
                    <!--<p>TBC</p>-->
                </div>
            </div>
        </div>
        <div class="cont-form">

            <img src="{{ asset('frontend/Lingosphere/img/left_icon_sound.svg') }}" alt=""
                class="img-fluid left_icon_sound mobile_none">
            <img src="{{ asset('frontend/Lingosphere/img/right_icon_sound.svg') }}" alt=""
                class="img-fluid right_icon_sound mobile_none">

            <div class="form-cont">
                <p class="c-btxt">Get in touch</p>

                <div class="inf-f">
                    <input type="text" class="form-control input_main" id="fullname" aria-describedby="emailHelp"
                        placeholder="Full Name" form="contactform" name="fullname" required>
                </div>
                <div class="inf-f">
                    <input type="email" class="form-control input_main" id="email" aria-describedby="emailHelp"
                        placeholder="Email" form="contactform"name="email" required>
                    <input type="tel" class="form-control input_main" id="phone" aria-describedby="emailHelp"
                        placeholder="Phone Number" form="contactform"name="phone" required>

                </div>
                <textarea name="message" id="message" class="message-f" form="contactform"placeholder="Your Message"></textarea>
                <form id="contactform" role="form" action="{{ route('contactus.store') }}" method="post"
                        onsubmit="return check_agree(this);">
                @csrf
                <input type="hidden" name="from_page" class="form-control" value="contactus">
                <div class="checkbox-cont">
                    <div class="c-checkbox">
                        <div class="c-div">
                            <label class="d-flex justify-content-center justify-content-lg-start">
                                <input type="checkbox" id="terms" name="terms" form="contactform">
                                <label for="terms"></label>
                            </label>
                        </div>
                        <div class="c-text">
                            <p class="login_strong">By ticking this box, you agree to <a
                                    href=" {{ route('termsandconditions') }}">Terms and
                                    Conditions</a> and <a href="{{ route('privacypolicy') }}">Privacy Policy.</a></p>
                        </div>
                    </div>
                    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                        <div class="h-captcha mx-auto my_mob_24" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"  form="contactform" ></div>
                </div>
                
                    
                <button class="cont-btn btn" type="submit">Submit Your message</a>
                    </form>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./dist/js/owl.carousel.js"></script>
    <!-- <script src="./dist/js/bootstrap.min.js"></script>
                <script src="./dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $(".hamburger_menu").click(function() {
                $(".header_mobo_main_slide").fadeIn("slow");
                $(".hamburger_menu").fadeOut("slow");
                $(".hamburger_menu_close").fadeIn("slow");
                $(".header_cart_mobo_main_slide").fadeOut("slow");
            });
            $(".hamburger_menu_close").click(function() {
                $(".header_mobo_main_slide").fadeOut("slow");
                $(".hamburger_menu").fadeIn("slow");
                $(".hamburger_menu_close").fadeOut("slow");
            });
            $(".cart_menu").click(function() {
                $(".header_cart_mobo_main_slide").fadeIn("slow");
                $(".cart_menu").fadeOut("slow");
                $(".cart_menu_close").fadeIn("slow");
                $(".header_mobo_main_slide").fadeOut("slow");
            });
            $(".cart_menu_close").click(function() {
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
        function check_agree(form) {
            //var response = grecaptcha.getResponse();
            console.log(form.email.valid);
            if (form.fullname && form.email && form.phone && form.message && form.terms.checked) {

                $('#submit-btn').attr('disabled', true);
                return true;
            } else if (!form.fullname.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Fullname'
                })
                return false;
            } else if (!form.email.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Email'
                })
                return false;
            } else if (!form.phone.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Phone'
                })
                return false;
            } else if (!form.message.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Comments'
                })
                return false;
            } else if (!form.terms.checked) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Accept T&C'
                })
                return false;
            }
            return false;
        }
    </script>
@endsection
