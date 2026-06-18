@extends('frontend.layouts.app')

@section('content')

<!--  new LINGOSPHERE CODE START HERE        new LINGOSPHERE CODE START HERE     new LINGOSPHERE CODE START HERE -->

{{--NEW CODE START HERE --}}

    <section>
        <div class="extra_space">
    
        </div>
        <div class="sec1_au">
            <div class="in_sec4_au">
                <div class="left_sec1_au">
    
                </div>
                <div class="right_sec1_au">
                    <div class="sec1_au_div">
                        <h1 class="sec1_au_tt" data-aos="fade-up">Connecting the World </h1>
                        <p class="sec1_au_pp" data-aos="fade-up">Translate with us to bridge language gaps seamlessly. Our expert team delivers precise, culturally relevant translations, ensuring your message resonates globally. </p>
                        <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('certified_translation') }}'">
                            Discover all services
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="sec2_au">
            <div class="in_sec2_au">
                <div class="thught_wala">
                    <div class="thought_div">
                        <p class="img_tt">Hello!</p>
                    </div>
                    <div class="thought_div2">
                        <p class="img_tt">Salut!</p>
                    </div>
                    <div class="thought_div">
                        <p class="img_tt">Bonjour!</p>
                    </div>
                </div>
                <div class="left_sec2_au">
    
                </div>
                <div class="right_sec2_au">
    
                    <div class="in_rightssec2_au">
                        <div>
                            <h1 class="his_tt" data-aos="fade-up">Our Expertise</h1>
                            <p class="sec2_pp" data-aos="fade-up">Our expertise lies in delivering accurate, high-quality translations across various industries. With a team of certified linguists and specialists, we ensure each project meets your standards. Our deep understanding of language and culture guarantees your message resonates globally. <br>We know that language often builds a barrier to other audiences. Whether you need legal documents, marketing materials, or technical manuals translated, our translations ensure your message is clear, compelling, and culturally appropriate, driving your business forward.
</p>
    
                        </div>
                        @auth
                        <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('dashboard') }}'">
                            My Account
                        </button>
                        @else
                        <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('user.login') }}'">
                            Sign up
                        </button>
                        @endauth
                    </div>
    
                    <img src="{{ asset('frontend/Lingosphere/img/sound1_sec2.svg') }}" alt=""
                        class="img-fluid sound1_sec2 mobile_none">
                    <img src="{{ asset('frontend/Lingosphere/img/sound2_sec2.svg') }}" alt=""
                        class="img-fluid sound2_sec2 mobile_none">
    
                </div>
            </div>
        </div>
    
        <div class="sec3_au">
            <div class="top_sec3_au">
                <h1 class="sec3au_tt" data-aos="fade-up">
                    Our Benefits
                </h1>
                <p class="sec3au_pp" data-aos="fade-up">All our translations are provided with the client in mind. We listen to your requirements, take on board feedback and always strive to ensure customer satisfaction. </p>
            </div>
    
            <div class="container p-0">
                <div class="bottom_sec3_au">
                    <div class="per_greenbox">
                        <div class="inner_green_box">
                        </div>
                        <div class="topb_box">
                            30+
                        </div>
                        <div class="bottom_box">
                            Languages
                        </div>
                    </div>
                    <div class="per_greenbox">
                        <div class="inner_green_box">
                        </div>
                        <div class="topb_box">
                            5 Star
                        </div>
                        <div class="bottom_box">
                            customer satisfaction
                        </div>
                    </div>
                    <div class="per_greenbox">
                        <div class="inner_green_box">
                        </div>
                        <div class="topb_box">
                            24/7
                        </div>
                        <div class="bottom_box">
                            dedicated support
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    
        <div class="sec4_au">
            <div class="in_sec4_au">
                <div class="left_sec4_au">
                </div>
                <div class="right_sec4_au">
                    <div class="in_rightssec4_au">
                        <div>
                            <h1 class="his_tt" data-aos="fade-up">Who We Are</h1>
                            <p class="his_pp" data-aos="fade-up">Founded with a passion for bridging barriers across the world, our company has grown from a small team to a global leader in translation services. Over the years, we've expanded our expertise, embracing new technologies whilst staying true to our commitment to quality, accuracy, and client satisfaction.</p>
    
                        </div>
                        <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('careers') }}'">
                            Find out more
                        </button>
                    </div>
    
                    <img src="{{ asset('frontend/Lingosphere/img/sound1_sec4.svg') }}" alt=""
                        class="img-fluid sound1_sec4 mobile_none">
                    <img src="{{ asset('frontend/Lingosphere/img/sound2_sec4.svg') }}" alt=""
                        class="img-fluid sound2_sec4 mobile_none">
                    <img src="{{ asset('frontend/Lingosphere/img/sound3_sec4.svg') }}" alt=""
                        class="img-fluid sound3_sec4 mobile_none">
                    <img src="{{ asset('frontend/Lingosphere/img/sound4_sec4.svg') }}" alt=""
                        class="img-fluid sound4_sec4 mobile_none">
                </div>
            </div>
        </div>
    
        <div class="sec5_au">
            <div class="in_sec5_au">
                <div class="container p-0">
                    <div class="inner_sec5">
                        <div class="left_iner5">
                            <h1 class="leftin5_tt" data-aos="fade-up">Our mission &<br class="desktop_none"> values</h1>
                            <p class="leftin5_pp" data-aos="fade-up">Our mission is to empower global communication through accurate, culturally relevant translations. We value excellence, integrity, and client satisfaction, ensuring every project reflects the highest quality. We strive to build lasting relationships with our clients, helping you to connect worldwide..</p>
                        </div>
                        <div class="right_iner5">
                            <div class="top_in5">
                                <div class="benefits_box1">
                                    <h1 class="crd_tt" data-aos="fade-up">Commitment to Quality</h1>
                                    <p class="leftin5_pp" data-aos="fade-up">We consistently deliver top-notch translations, focusing on accuracy and excellence to meet the highest industry standards in every project.</p>
                                </div>
                                <div class="benefits_box2">
                                    <h1 class="crd_tt" data-aos="fade-up">Integrity in Action</h1>
                                    <p class="leftin5_pp" data-aos="fade-up">We operate with honesty and transparency, ensuring trust and ethical practices in all interactions, from client communication to service delivery. </p>
                                </div>
                            </div>
                            <div class="bottom_in5">
                                <div class="benefits_box2">
                                    <h1 class="crd_tt" data-aos="fade-up">Client-centered</h1>
                                    <p class="leftin5_pp" data-aos="fade-up">Our clients’ needs are our priority. We tailor our services to meet your specific requirements, providing personalised and responsive support.</p>
                                </div>
                                <div class="benefits_box1">
                                    <h1 class="crd_tt" data-aos="fade-up">Cultural Sensitivity</h1>
                                    <p class="leftin5_pp" data-aos="fade-up">We honour cultural differences by delivering translations that respect and reflect the nuances and context of each target language and audience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <form id="contactform" class="form-cont"  role="form" action="{{ route('contactus.store') }}" method="post" onsubmit="return check_agree(this);">
                @csrf
                    <input type="hidden" name="from_page" class="form-control" value="contactus">
                    <div class="inf-f">
                        <input type="text" class="form-control input_main" name="fullname" id="fullname" form="contactform"
                            placeholder="Name" required>
                        <input type="email" class="form-control input_main" name="email" id="email" form="contactform"
                            placeholder="Email" required>
                    </div>
                    <input type="tel" class="form-control input_main" name="phone" id="phone" form="contactform"
                            placeholder="Phone Number" required>
                    <textarea name="message" id="message" class="message-f" placeholder="Subject" form="contactform"></textarea>
                    <div class="checkbox-cont">
                        <div class="c-checkbox">
                            <div class="c-div">
                                <label class="d-flex justify-content-center justify-content-lg-start">
                                    <input type="checkbox" id="terms" name="terms">
                                    <label for="terms"></label>
                                </label>
                            </div>
                            <div class="c-text">
                                <p class="login_strong">By ticking this box, you agree to <a href="{{ route('termsandconditions') }}">Terms and Conditions</a>
                                    and <a href="{{ route('privacypolicy') }}">Privacy Policy.</a></p>
                            </div>
                        </div>
                        {{--<img src="./img/captcha.png" alt="" class="captcha">--}}
                        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                        <div class="h-captcha mx-auto my_mob_24" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                    </div>
                    {{--<a href="#" class="cont-btn btn">Submit Your message</a>--}}
                    <button type="submit" class="cont-btn btn" form="contactform">Submit Your message</button>
                </form>
            </div>
        </div>
        
        <div class="sec7_au">
            <div class="in_sec7_au">
            </div>
        </div>
    </section>



{{--CODE END HERE--}}


@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
function check_agree(form) {
    //var response = grecaptcha.getResponse();
    console.log(form.email.valid);
    if (form.fullname && form.email && form.message && form.terms.checked) {
        
        $('#submit-btn').attr('disabled', true);
        return true;
    }else if(!form.fullname.value){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Enter Fullname'
        }) 
            return false;
    }else if(!form.email.value){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Enter Email'
        }) 
            return false;
    }else if(!form.phone.value){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Enter Phone'
        }) 
            return false;
    }else if(!form.message.value){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Enter Comments'
        }) 
            return false;
    }else if(!form.terms.checked){
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
<!--new script lingosphere -->
<script>
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
</script>
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
</script>
<script>
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

@endsection