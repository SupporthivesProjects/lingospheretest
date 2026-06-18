@extends('frontend.layouts.app')
@section('content')
    <!--Certified Section Start-->
    <!--Section 1 Start-->
   

    {{-- NEW CODE STARTS HERE --}}


    <section class="for_st">
        <div class="extra_space">

        </div>



        <div class="sec1_au">




            <div class="in_sec1_ct">

                <div class="left_sec1_ct">
                    <div class="left_st_sec1_content">

                        <div>
                            <h1 class="ct_tt" data-aos="fade-up">Standard translation Services</h1>
                            <p class="ct_pp" data-aos="fade-up">Experience seamless standard translations with precision and clarity. Our skilled team delivers accurate, high-quality translations for all your everyday documents, ensuring effective communication across languages.</p>
                        </div>
                        <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('request_translation') }}'">
                            Translate today!
                        </button>
                    </div>
                </div>
                <div class="right_sec1_st">


                </div>

            </div>

        </div>


        <div class="ct_sec2">

            <div class="left_ctsec2">


                <div class="white_box">
                    <h1 class="whitebox_tt" data-aos="fade-up">Standard Translation</h1>
                    <p class="whitebox_pp" data-aos="fade-up">{{ single_price(0.13) }} per word</p>
                </div>


                <div class="benefits_list">

                    <div class="left_benefits">



                        <div class="per_benefit">
                            <img src="{{ asset('frontend/Lingosphere/img/tick_icon.svg')}}" alt="" class="img-fluid">
                            <p class="benefits_pp" data-aos="fade-up">Translations by industry experts</p>
                        </div>

                        <div class="per_benefit">
                            <img src="{{ asset('frontend/Lingosphere/img/tick_icon.svg')}}" alt="" class="img-fluid">
                            <p class="benefits_pp" data-aos="fade-up">Fast turnaround </p>
                        </div>

                        <div class="per_benefit">
                            <img src="{{ asset('frontend/Lingosphere/img/tick_icon.svg')}}" alt="" class="img-fluid">
                            <p class="benefits_pp" data-aos="fade-up">Includes revisions</p>
                        </div>

                    </div>

                    <div class="left_benefits">

                        <div class="per_benefit2">
                            <img src="{{ asset('frontend/Lingosphere/img/tick_icon.svg')}}" alt="" class="img-fluid">
                            <p class="benefits_pp" data-aos="fade-up">Delivered via email</p>
                        </div>

                        <div class="per_benefit2">
                            <img src="{{ asset('frontend/Lingosphere/img/tick_icon.svg')}}" alt="" class="img-fluid">
                            <p class="benefits_pp" data-aos="fade-up">24-hour support</p>
                        </div>

                        <div class="per_benefit2">
                            <img src="{{ asset('frontend/Lingosphere/img/tick_icon.svg')}}" alt="" class="img-fluid">
                            <p class="benefits_pp" data-aos="fade-up">Satisfaction guaranteed</p>
                        </div>

                    </div>

                </div>

                <button class="btn second_whitebtn" onclick="window.location.href='{{ route('request_translation') }}?ref=certified'">
                    Get started
                </button>


            </div>
            <div class="right_ctsec2">


                <div class="siddha_col">

                    <div class="benefits_box11">

                        <h1 class="benefits_tttt" data-aos="fade-up">Accuracy</h1>
                        <p class="benefits_pppp" data-aos="fade-up">Our expert linguists guarantee every detail is precisely translated, maintaining the original meaning and context. Rely on us for translations that reflect your document's true intent and nuances. 
</p>

                    </div>


                    <div class="benefits_box22">

                        <h1 class="benefits_tttt" data-aos="fade-up">Speed</h1>
                        <p class="benefits_pppp" data-aos="fade-up">We ensure rapid turnaround times without compromising quality. Our efficient process means that your translations are completed quickly, meeting tight deadlines, and keeping your projects on track.
</p>

                    </div>

                </div>

                <div class="siddha_col2">


                    <div class="benefits_box22">

                        <h1 class="benefits_tttt" data-aos="fade-up">Confidentiality
</h1>
                        <p class="benefits_pppp" data-aos="fade-up">We prioritise your privacy and handle all documents with strict confidentiality. Your sensitive information remains secure, giving you peace of mind throughout the translation process.
</p>

                    </div>

                    <div class="benefits_box11">

                        <h1 class="benefits_tttt" data-aos="fade-up">Expertise</h1>
                        <p class="benefits_pppp" data-aos="fade-up">Benefit from our team of skilled professionals with specialised knowledge in various fields. Our expertise guarantees accurate, high-quality translations tailored to your specific industry and needs.
</p>

                    </div>


                </div>

            </div>
        </div>




        <div class="ct_sec3">
            <div>
                <img src="{{ asset('frontend/Lingosphere/img/mob_sec3_st.png')}}" alt="" class="img-fluid desktop_none" style="width: 100%;">
            </div>

            <div class="in_ct_sec3">

                <div class="container p-0">
                    <div class="dv_sec3ct">
                        <div>
                            <h1 class="sec3ct_tt" data-aos="fade-up">The Process
</h1>
                            <p class="sec3ct_pp" data-aos="fade-up">Our translation process is straightforward: submit your document through our secure portal, receive a detailed quote, and let our expert linguists handle the translation. We ensure accuracy through rigorous quality checks and deliver your translated document on time and ready for your use.
</p>
                        </div>
                        <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('request_translation') }}'">
                            Find out more
                        </button>

                    </div>
                </div>
                <img src="{{ asset('frontend/Lingosphere/img/cut_boxes2.png')}}" alt="" class="img-fluid cut_boxes mobile_none">
            </div>

        </div>


        <div class="sec3_au">

            <div class="top_sec3_au">
                <h1 class="sec3au_tt" data-aos="fade-up">
                    The Benefits
                </h1>
                <p class="sec3au_pp" data-aos="fade-up">Experience precise, culturally nuanced translations with us. Benefit from expert linguists, fast turnaround, confidentiality, and tailored services that ensure your message resonates globally.</p>
            </div>

            <div class="container p-0">
                <div class="bottom_sec3_au">

                    <div class="per_greenbox">

                        <div class="inner_green_box">

                        </div>

                        <div class="topb_box" >
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








        <div class="ct_sec5">


            <div class="left_ctsec5">

            </div>

            <div class="right_ctsec5">
                <img src="{{ asset('frontend/Lingosphere/img/sound1_ct.svg')}}" alt="" class="img-fluid sound1_ct mobile_none">
                <img src="{{ asset('frontend/Lingosphere/img/sound2_ct.svg')}}" alt="" class="img-fluid sound2_ct mobile_none">

                <div class="languages_main_div">

                    <div class="top_lang_div">
                        <h1 class="sec3ct_tt" data-aos="fade-up">Check Out Our<br> Languages!</h1>
                        <p class="sec5ct_pp" data-aos="fade-up">Our clients rave about our diverse language options including Spanish, Chinese, French, German, and more. We ensure your message resonates perfectly across languages, making global communication seamless and effective. Explore our extensive language services and connect with the world effortlessly!</p>
                    </div>

                    <div class="middle_lang_div">

                        <div class="singlecol_lang">

                            <div class="languages_div_div">
                                Spanish

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Arabic

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                German
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                            </div>

                        </div>

                        <div class="singlecol_lang">

                            <div class="languages_div_div">
                                Japanese

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Italian

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Russian
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                            </div>

                        </div>

                        <div class="singlecol_lang mobile_none">

                            <div class="languages_div_div">
                                Chinese

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                French

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                +Many More!
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                            </div>

                        </div>

                    </div>

                    <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('request_translation') }}'">

                        <div class="mobile_none">
                            Start Today
                        </div>

                        <div class="desktop_none">
                            See All
                        </div>

                    </button>


                </div>

            </div>

        </div>



        <div class="ct_sec6">

            <div class="left_ctsec6">

                <div class="in_left_ctsec6">

                    <div class="top_sec6_left">
                        <h1 class="sec3ct_tt" data-aos="fade-up">Popular Documents<br>with Our Customers</h1>
                        <p class="sec6ct_pp" data-aos="fade-up">Our customers translate a wide range of documents, including legal contracts, tech manuals, medical records, and personal certificates. We ensure every word hits the mark, delivering precision and clarity for all your essential needs. Let’s make your documents cross languages!</p>
                    </div>


                    <div class="mobile_none">
                        <div class="middle_lang_div">



                            <div class="singlecol_lang">

                                <div class="languages_div_div" data-aos="fade-up">
                                    Financial documents

                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                                </div>

                                <div class="languages_div_div" data-aos="fade-up">
                                    Birth certificates


                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                                </div>



                            </div>

                            <div class="singlecol_lang mobile_none">


                                <div class="languages_div_div" data-aos="fade-up">
                                    Health records 


                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                                </div>

                                <div class="languages_div_div" data-aos="fade-up">
                                   Bank statements

                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="desktop_none">
                        <div class="middle_lang_div">



                            <div class="singlecol_lang">

                                <div class="languages_div_div" data-aos="fade-up">
                                    Financial documents

                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                                </div>

                                <div class="languages_div_div">
                                    Birth certificates


                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                                </div>


                                <div class="languages_div_div" data-aos="fade-up">
                                    Health records 


                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                                </div>

                                <div class="languages_div_div" data-aos="fade-up">
                                    Bank statements

                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg')}}" alt="" class="img-fluid blackcircle">
                                </div>



                            </div>


                        </div>
                    </div>


                    <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('documents') }}'">
                        See All
                    </button>



                </div>


                <img src="{{ asset('frontend/Lingosphere/img/sound3_ct.svg')}}" alt="" class="img-fluid sound3_ct mobile_none">
                <img src="{{ asset('frontend/Lingosphere/img/sound4_ct.svg')}}" alt="" class="img-fluid sound4_ct mobile_none">

            </div>

            <div class="right_ctsec6">

            </div>

        </div>

        <div class="sec7_ct">

            <div class="in_sec7_ct">
                <div class="insidediv_sec7">
                    <h1 class="sec7_tt" data-aos="fade-up">Start Translating Today
</h1>
                    <p class="sec7_pp" data-aos="fade-up">Start your translation journey today and experience seamless, high-quality language solutions tailored to your needs. Simply upload your document or get in touch with our team to discuss your individual requirements. We will provide a precise translation with a fast turnaround, ensuring your message is conveyed accurately. Join us on our mission to bridge language barriers and connect the world. 
</p>
                    <button class="btn white_btn" onclick="window.location.href='{{ route('aboutus') }}'">Translate now</button>
                </div>
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
@endsection
