@extends('frontend.layouts.app')

@section('content')

{{--New Code Start--}}

<section class="home_page">
        


    <div class="hs1">
        <div class="sh1_inner">
            <div class="hs1_main">
                <div class="hs1_left">
                    <div class="hs1_content">
                        <div class="hs1_pill">
                            <p class="hs1_pre_title">Your Translation Partner</p>
                        </div>
                        <h1 class="hs1_title" data-aos="fade-up">
                            Global Language Solutions
                        </h1>
                        <p class="hs1_subtitle" data-aos="fade-up">
                            Discover the ultimate solution for global communication! We offer expert translation services that bridge language gaps and connect cultures. Whether you’re expanding internationally or need precise local translations, our team ensures clarity, accuracy, and seamless interactions across the globe.
                            
                        </p>
                        <button class="btn btn_big_hs1" onclick="window.location.href='{{ route('certified_translation') }}'">
                            Start Here
                            <div class="circ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                    <path d="M1 7.5H13M13 7.5L7 1.5M13 7.5L7 13.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="hs1_right">
                        <video class="bg-image d-lg-block d-md-block d-none" loop="" muted="" autoplay="" style="object-fit: cover;">
                            <source src="{{ asset('frontend/Lingosphere/img/home-vdo.mp4') }}" type="video/mp4">
                        </video>
                        
                        <video class="bg-image d-lg-none d-md-none d-block" loop="" muted="" autoplay="" style="object-fit: cover;">
                            <source src="{{ asset('frontend/Lingosphere/img/home-vdo-mb.mp4') }}" type="video/mp4">
                        </video>
                </div>
            </div>
        </div>
    </div>



    <div class="home_sec2">

        <div class="home_floater">
            <div class="floater_inner">
                <h1 class="floater_title" data-aos="fade-up">Accuracy</h1>
                <p class="floater_subtitle" data-aos="fade-up">
                    Our translations are meticulously checked for precise and error-free results every time.
                </p>
            </div>
            <div class="floater_inner">
                <h1 class="floater_title" data-aos="fade-up">Reliability</h1>
                <p class="floater_subtitle" data-aos="fade-up">
                    Benefit from our team's deep knowledge and specialised skills in various industries.
                </p>
            </div>
            <div class="floater_inner">
                <h1 class="floater_title" data-aos="fade-up">Efficiency</h1>
                <p class="floater_subtitle" data-aos="fade-up">
                    Count on us for timely delivery and consistent quality you can trust.
                </p>
            </div>
            <div class="floater_inner">
                <h1 class="floater_title" data-aos="fade-up">Expertise</h1>
                <p class="floater_subtitle" data-aos="fade-up">
                    Experience fast turnaround times with streamlined processes and practical solutions.
                </p>
            </div>
        </div>
        <div>
            <h1 class="joinus3_tt" data-aos="fade-up">Translate with Us</h1>
            <p class="joinus3_pp" style="margin-bottom: 0px;" data-aos="fade-up">Translate with us to ensure precision, cultural relevance, and timely delivery. Our expert team guarantees high-quality translations that effectively convey your message across languages and borders.</p>
        </div>
        <div class="home_div_box">

            <div class="joinus_boxes">

                <div class="top_join_box" data-aos="fade-up">
                    Legally compliant

                </div>

                <div class="bottom_join_box">

                    <img src="{{ asset('frontend/Lingosphere/img/home_icons1.svg') }}" alt="" class="img-fluid">

                    <p class="bottom_join_box_pp" data-aos="fade-up">Legally compliant translations ensure accuracy and adherence to official standards.</p>
                    
                </div>

            </div>
            <div class="joinus_boxes">

                <div class="top_join_box" data-aos="fade-up">
                    Budget-friendly
                </div>

                <div class="bottom_join_box">

                    <img src="{{ asset('frontend/Lingosphere/img/home_icons2.svg') }}" alt="" class="img-fluid">

                    <p class="bottom_join_box_pp" data-aos="fade-up">Cost-efficient solutions maximise value while minimising expenses, delivering translations within your budget.</p>
                    
                </div>

            </div>
            <div class="joinus_boxes">

                <div class="top_join_box" data-aos="fade-up">
                    High-quality
                </div>

                <div class="bottom_join_box">

                    <img src="{{ asset('frontend/Lingosphere/img/home_icons3.svg') }}" alt="" class="img-fluid">

                    <p class="bottom_join_box_pp" data-aos="fade-up">Our translations deliver accuracy and clarity, ensuring your message resonates across all languages.</p>
                    
                </div>

            </div>

        </div>
    </div>


    <div class="home_sec3">


        <div class="left_home3">

        </div>

        <div class="right_home3">

            <img src="{{ asset('frontend/Lingosphere/img/sound1_ct.svg') }}" alt="" class="img-fluid sound1_home mobile_none">
            <img src="{{ asset('frontend/Lingosphere/img/sound2_ct.svg') }}" alt="" class="img-fluid sound2_home mobile_none">

            <div class="home_languages_main_div">
                
                <div class="top_lang_div">
                        <h1 class="sec3ct_tt" data-aos="fade-up" >Check Out Our Languages</h1>
                        <p class="sec5ct_pp" data-aos="fade-up">Our clients rave about our diverse language options, which include Spanish, Chinese, French, German, and more. We ensure your message resonates perfectly across languages, making global communication seamless and practical. Explore our extensive language services and connect with the world effortlessly!</p>
                </div>

                <div class="middle_lang_div">

                    <div class="singlecol_lang">

                        <div class="languages_div_div">
                            Spanish

                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Arabic

                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            German
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                    </div>

                    <div class="singlecol_lang">

                        <div class="languages_div_div">
                            Japanese

                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Italian

                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Russian
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                    </div>

                    <div class="singlecol_lang mobile_none">

                        <div class="languages_div_div">
                            Chinese

                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            French

                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            +Many More!
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                    </div>

                </div>

                <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('request_translation') }}'">

                    <div class="mobile_none">
                        Start Today
                    </div>

                    <div class="desktop_none" onclick="window.location.href='{{ route('documents') }}'" >
                        See All
                    </div>
                    
                </button>

                
            </div>

        </div>

    </div>

    <div class="sec3_au">

        <div class="top_sec3_au">
                <h1 class="sec3au_tt" style="margin-bottom: 0px;" data-aos="fade-up">
                    Easy Steps to Translations
                </h1>
        </div>

        <div class="container p-0">
            <div class="bottom_sec3_au">

                <div class="per_greenbox">

                    <div class="inner_green_box">

                    </div>

                    <div class="topb_box">
                        Step 1
                    </div>
                    <div class="bottom_box" data-aos="fade-up">
                        Upload documents
                    </div>

                </div>
                <div class="per_greenbox">

                    <div class="inner_green_box">

                    </div>

                    <div class="topb_box">
                        Step 2
                    </div>
                    <div class="bottom_box" data-aos="fade-up">
                        Easy checkout 
                    </div>

                </div>
                <div class="per_greenbox">

                    <div class="inner_green_box">

                    </div>

                    <div class="topb_box">
                        Step 3
                    </div>
                    <div class="bottom_box" data-aos="fade-up">
                        Receive translations
                    </div>

                </div>

            </div>
        </div>
        @auth
        <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('dashboard') }}'">
            My Account
        </button>
        @else
        <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('user.login') }}'">
            Create an account
        </button>
        @endauth

        
    </div>

    <div class="home_sec5">


        <div class="left_home5">

            <img src="{{ asset('frontend/Lingosphere/img/sound3_ct.svg') }}" alt="" class="img-fluid sound3_ct mobile_none">
            <img src="{{ asset('frontend/Lingosphere/img/sound4_ct.svg') }}" alt="" class="img-fluid sound4_ct mobile_none">


            <div class="in_left_home5">

                <div class="top_sec6_left">
                    <h1 class="sec3ct_tt" data-aos="fade-up" >Popular Documents<br>with Our Customers</h1>
                    <p class="sec6ct_pp" data-aos="fade-up">Our customers translate a wide range of documents, including legal contracts, tech manuals, medical records, and personal certificates. We ensure every word hits the mark, delivering precision and clarity for all your essential needs. Let’s make your documents cross languages!</p>
                </div>


                <div class="mobile_none">
                    <div class="middle_lang_div">

                    

                        <div class="singlecol_lang">

                            <div class="languages_div_div" data-aos="fade-up">
                                Financial documents

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div" data-aos="fade-up">
                                Birth certificates


                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                           

                        </div>

                        <div class="singlecol_lang mobile_none">

                            
                            <div class="languages_div_div" data-aos="fade-up">
                                Health records 

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div" data-aos="fade-up">
                                Bank statements
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                        </div>

                    </div>

                </div>

                

                <div class="desktop_none">
                    <div class="middle_lang_div">

                    

                        <div class="singlecol_lang">

                            <div class="languages_div_div" data-aos="fade-up">
                                Financial documents
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div" data-aos="fade-up">
                                Birth certificates.

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>


                            <div class="languages_div_div" data-aos="fade-up">
                                Health records 

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div" data-aos="fade-up">
                                Bank statements
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                           

                        </div>


                    </div>
                </div>
                

                <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('documents') }}'">
                    See All
                </button>

                

            </div>
        </div>

        <div class="right_home5">

        </div>

    </div>

    <div class="hs6">
        <div class="container">
            <h1 class="hs6_title" data-aos="fade-up">Benefits of Our Translations</h1>
            <div class="hs6_carousel">
                <div class="owl-carousel owl-theme">
                    
                        <div class="hs6_card">
                            <div class="hs6_card_img_frame">
                                <img src="{{ asset('frontend/Lingosphere/img/hs6_i1.png') }}" alt="" class="img-fluid hs6_card_img">
                            </div>
                            <div class="hs6_card_body">
                                <h1 class="hs6_card_title" data-aos="fade-up">Business Growth</h1>
                                <p class="hs6_card_subtitle" data-aos="fade-up">Accelerate your business growth with our expert translation services. Reach new markets, engage a global audience, and drive expansion by breaking down those barriers and communicating effectively across regions.</p>
                            </div>
                        </div>
                    
                    
                        <div class="hs6_card">
                            <div class="hs6_card_img_frame">
                                <img src="{{ asset('frontend/Lingosphere/img/hs6_i2.png') }}" alt="" class="img-fluid hs6_card_img">
                            </div>
                            <div class="hs6_card_body">
                                <h1 class="hs6_card_title" data-aos="fade-up">International Reach</h1>
                                <p class="hs6_card_subtitle" data-aos="fade-up">Expand your business's footprint by bridging language gaps and connecting with international audiences. Our translations help you tap into new markets and grow your global presence effectively and seamlessly.</p>
                            </div>
                        </div>
                    
                    
                        <div class="hs6_card">
                            <div class="hs6_card_img_frame">
                                <img src="{{ asset('frontend/Lingosphere/img/hs6_i3.png') }}" alt="" class="img-fluid hs6_card_img">
                            </div>
                            <div class="hs6_card_body">
                                <h1 class="hs6_card_title" data-aos="fade-up">Clear Communication</h1>
                                <p class="hs6_card_subtitle" data-aos="fade-up">Ensure your message is accurately conveyed across languages, avoiding misunderstandings and misinterpretations. Our precise translations create effective dialogue and strengthen relationships with your customers. </p>
                            </div>
                        </div>
                    
                    
                        <div class="hs6_card">
                            <div class="hs6_card_img_frame">
                                <img src="{{ asset('frontend/Lingosphere/img/hs6_i4.png') }}" alt="" class="img-fluid hs6_card_img">
                            </div>
                            <div class="hs6_card_body">
                                <h1 class="hs6_card_title" data-aos="fade-up">Cultural Accuracy</h1>
                                <p class="hs6_card_subtitle" data-aos="fade-up">Benefit from translations that respect and reflect cultural nuances and context. We provide culturally relevant translations that resonate with your target audience, enhancing engagement.</p>
                            </div>
                        </div>
                    
                </div>
            </div>
            <button class="btn green_btn forphone_100width mx-auto" onclick="window.location.href='{{ route('certified_translation') }}'">
                Explore all services
            </button>
        </div>
    </div>

    <div class="ct_sec3">
        <div>
            <img src="{{ asset('frontend/Lingosphere/img/home_last_mob.png') }}" alt="" class="img-fluid desktop_none" style="width: 100%;">
        </div>

        <div class="in_ct_sec3">

            <div class="container p-0">
                    <div class="dv_sec1">
                        <div>
                            <h1 class="sec3ct_tt" data-aos="fade-up">Why Translate with Us</h1>
                            <p class="sec3ct_pp" data-aos="fade-up">Choose us for our commitment to excellence, expert team, and personalised service. We deliver high-quality translations, meet deadlines, and ensure client satisfaction. Our innovative approach and dedication make us the ideal partner for all your language needs.</p>
                        </div>
                        @auth
                        <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('dashboard') }}'">
                           My Account
                        </button>
                        @else
                        <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('user.login') }}'">
                            Translate Today
                        </button>
                        @endauth

                    </div>
            </div>
            <img src="{{ asset('frontend/Lingosphere/img/home_last.png') }}" alt="" class="img-fluid cut_boxes2 mobile_none">
        </div>

    </div>


</section>

{{--New Code End--}}
    
@endsection

@section('script')
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
    
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:28,
            nav:false,
            dots: false,
            responsive:{
                0:{
                    items:1,
                    margin:0,
                    loop: false,
                    dots: false,
                    nav:true,
                    navText: ["<span class='btn btn_owl'><img class='img-fluid' src='{{ asset('frontend/Lingosphere/img/ar_l.png') }}'/></span>","<span class='btn btn_owl'><img class='img-fluid' src='{{ asset('frontend/Lingosphere/img/ar_r.png') }}'/></span>"],
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    })

</script>
@endsection
