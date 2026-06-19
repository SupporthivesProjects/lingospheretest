@extends('frontend.layouts.app')

@section('content')

    
<section>

    <div class="extra_space"></div>


    <div class="section1_sl">
        <div class="in_sec1_td">


            <div class="left_sec1_td">



            </div>

            <div class="right_sec1_td">

                <img src="{{ asset('frontend/Lingosphere/img/sound1_td.svg') }}" alt="" class="img-fluid sound1_td mobile_none">
                <img src="{{ asset('frontend/Lingosphere/img/sound2_td.svg') }}" alt="" class="img-fluid sound2_td mobile_none">

                <div class="inside_left_td">

                    <h1 class="sl_tt" data-aos="fade-up">
                        Translate All Documents

                    </h1>

                    <p class="sl_pp" data-aos="fade-up">Translate any document effortlessly - swift, accurate, and tailored to your specific needs!
</p>
                    <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('request_translation') }}'">
                        Translate now!
                    </button>
                </div>


            </div>


        </div>
    </div>




    <div class="section2_sl">

        <div class="in_sec2_td">

            


            <div class="container p-0">
<div class="title_sl for_personal_padding">
                <h1 class="title_sl_tt">Common&nbsp;<br class="desktop_none">Documents</h1>
                <div class="horizontal-line2 mobile_none"></div>
            </div>


                <div class="mobile_none">
                    <div class="all_languages_sec">

                        <div class="per_column_lang">

                            <div class="languages_div_div">
                                Academic Transcripts
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Adoption Documents
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Apostille
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Asylum Documents
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Background Check
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Bank Statement
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Birth Certificate
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                        </div>


                        <div class="per_column_lang">

                            <div class="languages_div_div">
                                Brochure
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Business License
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Change Of Name
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Course Guide
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Criminal Record
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>


                            <div class="languages_div_div">
                                Death Certificate
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Deposition
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>
                        </div>

                        <div class="per_column_lang">

                            <div class="languages_div_div">
                                Diploma
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Divorce Documents
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Driver's License
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Email
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Employee Manual
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Financial Statement
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Handbook
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                        </div>



                        <div class="per_column_lang">

                            <div class="languages_div_div">
                                Legal Contract
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Marriage Certificate
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Medical Records
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Meeting Minutes

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Mortgage Application
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Passport

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Patent Application
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                        </div>




                        <div class="per_column_lang">

                            <div class="languages_div_div">
                                Press Release
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Product Manual
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Rental Agreement
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Resume

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Tax Returns
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>


                            <div class="languages_div_div">
                                University Application

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Vaccination Record
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                            </div>
                        </div>






                    </div>

                </div>

                <div class="desktop_none">
                    <div class="all_languages_sec_mobile">


                        <div class="languages_div_div">
                            Academic Transcripts
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Adoption Documents
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Apostille
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Asylum Documents
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Background Check
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Bank Statement
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Birth Certificate
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>
                        <div class="languages_div_div">
                            Brochure
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Business License
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Change Of Name
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Course Guide
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Criminal Record
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>


                        <div class="languages_div_div">
                            Death Certificate
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Deposition
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Diploma
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Divorce Documents
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Driver's License
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Email
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Employee Manual
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Financial Statement
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Handbook
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>


                        <div class="languages_div_div">
                            Legal Contract
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Marriage Certificate
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Medical Records
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Meeting Minutes

                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Mortgage Application
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Passport

                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Patent Application
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>


                        <div class="languages_div_div">
                            Press Release
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Product Manual
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Rental Agreement
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Resume

                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Tax Returns
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>


                        <div class="languages_div_div">
                            University Application

                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>

                        <div class="languages_div_div">
                            Vaccination Record
                            <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt="" class="img-fluid blackcircle">
                        </div>


                    </div>
                </div>


            </div>



        </div>

    </div>



    <div class="cont-form">

        <img src="{{ asset('frontend/Lingosphere/img/left_icon_sound.svg') }}" alt="" class="img-fluid left_icon_sound mobile_none">
        <img src="{{ asset('frontend/Lingosphere/img/right_icon_sound.svg') }}" alt="" class="img-fluid right_icon_sound mobile_none">
       <form id="contactform" action="{{ route('contactus.store') }}" method="post" onsubmit="return check_agree(this);">
            @csrf
            <input type="hidden" name="from_page" value="documents">
            <div class="form-cont">
            <p class="c-btxt">Get in touch</p>
            <div class="inf-f">
                <input type="text" class="form-control input_main" id="name" name="fullname" aria-describedby="emailHelp"
                    placeholder="First Name" required>
                <input type="email" class="form-control input_main"  id="email" name="email" aria-describedby="emailHelp"
                    placeholder="Email Address" required>
            </div>
            <textarea id="message" name="message" class="message-f" placeholder="Subject" required></textarea>
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
                            and <a href="{{ route('termsandconditions') }}">Privacy Policy.</a></p>
                    </div>
                </div>
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <div class="col g-recaptcha mx-auto my_mob_24" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
            </div>
            <button type="submit" class="cont-btn btn">Submit Your message</button>
        </div>
        </form>
    </div>

    <div class="sec7_au">

        <div class="in_sec3_td">

        </div>

    </div>

</section>

    
@endsection

@section('script')
    <script>
        function check_agree(form) {
            if (form.terms.checked) {
                $('#submit-btn').attr('disabled', true);
                return true;
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
