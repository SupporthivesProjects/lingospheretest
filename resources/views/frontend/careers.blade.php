@extends('frontend.layouts.app')
@section('content')

<style>
    .upload_div {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
      border-radius: var(--Lrg, 40px);
        border: 1px solid var(--Grayscale-03, #BDBDBD);
        background: var(--Grayscale-White, #FFF);
        padding: 12px 24px;
        width: 100%;
    }
    .upload_placeholder {
      color: var(--Grayscale-Off-Black, #0F0F0F);
        leading-trim: both;
        text-edge: cap;
        
        /* P/Btn */
        font-family: Raleway;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        text-transform: capitalize;
      margin: 0px;
    }
    @media only screen and (max-width: 600px) {
        .c-checkbox input[type='checkbox']~label:after, .c-checkbox input[type='checkbox']~.label:after {
            top: 20px;
        }
        .c-checkbox>.c-div>label:before, .c-checkbox>.c-div>.label:before {
            top: 15px;
        }
    }
</style>

    <section>
        <div class="extra_space">
        </div>
        <div class="joinus_sec1">
            <div class="in_joinus1">
                <div class="left_joinus1">
                    <div class="left_join_inside">
                        <h1 class="joinus_tt1" data-aos="fade-up">Expand Your Skillset with Us</h1>
                        <p class="joinus_pp1" data-aos="fade-up">Expand your skillset with us - learn from experts, tackle diverse projects, and grow professionally.</p>
                        <button class="btn green_btn forphone_100width"  onclick="scrollToDiv()" type="button">
                            Join the team
                        </button>
                    </div>
                </div>
                <div class="right_joinus1">
                </div>
            </div>
        </div>


        <div class="sec3_au">
            <div class="top_sec3_au">
                <h1 class="sec3au_tt" data-aos="fade-up">
                     The Process
                </h1>
                <p class="sec3au_pp" data-aos="fade-up">To join our team, submit your application, complete an interview, and undergo a skills assessment. Then, get started!</p>
            </div>

            <div class="container p-0">
                <div class="bottom_sec3_au">
                    <div class="per_darkgreenbox">
                        <div class="inner_green_box2">
                        </div>
                        <div class="topb_box_green">
                            Step 1
                        </div>
                        <div class="bottom_box" data-aos="fade-up">
                            Fill out our form 
                        </div>
                    </div>
                    <div class="per_darkgreenbox">
                        <div class="inner_green_box2">
                        </div>
                        <div class="topb_box_green">
                            Step 2
                        </div>
                        <div class="bottom_box" data-aos="fade-up">
                            Attend an interview
                        </div>
                    </div>
                    <div class="per_darkgreenbox">
                        <div class="inner_green_box2">
                        </div>
                        <div class="topb_box_green">
                            Step 3
                        </div>
                        <div class="bottom_box" data-aos="fade-up">
                            Short translation task

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="joinus_sec3">
            <div class="in_joinus3">

                <h1 class="joinus3_tt" data-aos="fade-up">The Benefits</h1>
                <p class="joinus3_pp" data-aos="fade-up">Join us to collaborate with a dynamic team, gain access to a range of different projects, and enhance your skills. Enjoy competitive pay and flexible working conditions while enhancing your skillset. </p>
                <div class="joinus_boxes_div">
                    <div class="joinus_boxes">
                        <div class="top_join_box" data-aos="fade-up">
                            Work Remotely

                        </div>
                        <div class="bottom_join_box">
                            <p class="bottom_join_box_pp" data-aos="fade-up">Enjoy flexibility, with the ability to work from anywhere at any time. </p>
                        </div>
                    </div>

                    <div class="joinus_boxes">
                        <div class="top_join_box" data-aos="fade-up">
                            Own Your Schedule
                        </div>
                        <div class="bottom_join_box">
                            <p class="bottom_join_box_pp" data-aos="fade-up">Set your own hours, achieve a better work-life balance, and maximise productivity.</p>
                        </div>
                    </div>

                    <div class="joinus_boxes">
                        <div class="top_join_box"data-aos="fade-up">
                            Learn Skills

                        </div>
                        <div class="bottom_join_box">
                            <p class="bottom_join_box_pp" data-aos="fade-up">Expand your expertise, develop new skills, and advance your career.
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="cont-form" id="JForm">

            <img src="{{ asset('frontend/Lingosphere/img/left_icon_sound.svg') }}" alt=""
                class="img-fluid left_icon_sound mobile_none" style="top: 60px;">
            <img src="{{ asset('frontend/Lingosphere/img/right_icon_sound.svg') }}" alt=""
                class="img-fluid right_icon_sound mobile_none" style="bottom: 75px;">

            <form class="job_formm" id="JoinForm" action="{{ route('request.careers') }}" method="post"
                enctype="multipart/form-data" onsubmit="return check_agree(this);">
                @csrf
                <input type="hidden" name="from_page" value="careers">
                <input type="hidden" id="message" name="message" placeholder="Additional Information" required
                    value="N/A">
                <div class="form-cont">

                    <p class="c-btxt">Job form</p>
                    <div class="inf-f">
                        <input type="text" class="form-control input_main" aria-describedby="emailHelp"
                            placeholder="Full Name" id="jobformtexts" name="fullname">
                        <input type="tel" class="form-control input_main" aria-describedby="emailHelp"
                            placeholder="Phone Number" id="jobformtexts" name="phone">
                    </div>

                    <div class="inf-f">
                        <input type="email" class="form-control input_main" id="jobformtexts" name="email"
                            aria-describedby="emailHelp" placeholder="Email Address">
                        <input type="text" class="form-control input_main" name="native_lang" id="jobformtexts"
                            aria-describedby="emailHelp" placeholder="Your native language">
                    </div>


                    <div class="join_two">

                        <div class="join_one">
                            <h1 class="joinone_tt">What language pairs are you working with? (e.g. Spanish to English)</h1>
                            <input type="text" class="form-control input_main" name="pairs_lang" id="jobformtexts"
                                aria-describedby="emailHelp" placeholder="e.g. Spanish to English">
                        </div>

                        <div class="join_one">
                            <h1 class="joinone_tt">What is your rate per source word for each language pair?</h1>
                            <input type="number" class="form-control input_main" id="jobformtexts"
                                placeholder="ex. {{ currency_symbol() }}0.25" name="rate_per"
                                aria-describedby="emailHelp" placeholder="">
                        </div>
                    </div>
                    <p class="joinone_tt" >What services do you offer?</p>
                    <div class="types_checks">
                    <div class="c-checkbox">
                        <div class="c-div">
                          <label class="d-flex justify-content-center justify-content-lg-start">
                            <input type="checkbox" id="translation" name="lang_pairs_rate[]" value="Translation">
                            <label for="translation"></label>
                          </label>
                        </div>
                        <div class="c-text">
                          <p class="login_strong">translation</p>
                        </div>
                    </div>
                    <div class="c-checkbox">
                        <div class="c-div">
                          <label class="d-flex justify-content-center justify-content-lg-start">
                            <input type="checkbox" id="proofreading" name="lang_pairs_rate[]" value="Proofreading">
                            <label for="proofreading"></label>
                          </label>
                        </div>
                        <div class="c-text">
                          <p class="login_strong">Proof reading</p>
                        </div>
                    </div>
                    <div class="c-checkbox">
                        <div class="c-div">
                          <label class="d-flex justify-content-center justify-content-lg-start">
                            <input type="checkbox" id="copywriting" name="lang_pairs_rate[]" value="Copywriting">
                            <label for="copywriting"></label>
                          </label>
                        </div>
                        <div class="c-text">
                          <p class="login_strong">CopyWriting</p>
                        </div>
                    </div>
                    <div class="c-checkbox">
                        <div class="c-div">
                          <label class="d-flex justify-content-center justify-content-lg-start">
                            <input type="checkbox" id="transcription" name="lang_pairs_rate[]" value="Transcription">
                            <label for="transcription"></label>
                          </label>
                        </div>
                        <div class="c-text">
                          <p class="login_strong">Transcription</p>
                        </div>
                    </div>
                    <div class="c-checkbox">
                        <div class="c-div">
                          <label class="d-flex justify-content-center justify-content-lg-start">
                            <input type="checkbox" id="Other" name="services" value="Other">
                            <label for="Other"></label>
                          </label>
                        </div>
                        <div class="c-text">
                          <p class="login_strong">Other</p>
                        </div>
                    </div>
                      
                </div>

                    {{-- <input type="text" class="form-control input_main" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Text"> --}}
        
                    <div class="join_one">
                        
                    
                        <div class="upload_div" onclick="field_box_file()">
                              <p class="upload_placeholder" id="upload_placeholder">Upload brief</p>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                              <path d="M17 9.50195C19.175 9.51395 20.353 9.61095 21.121 10.379C22 11.258 22 12.672 22 15.5V16.5C22 19.329 22 20.743 21.121 21.622C20.243 22.5 18.828 22.5 16 22.5H8C5.172 22.5 3.757 22.5 2.879 21.622C2 20.742 2 19.329 2 16.5V15.5C2 12.672 2 11.258 2.879 10.379C3.647 9.61095 4.825 9.51395 7 9.50195" stroke="url(#paint0_linear_7573_6736)" stroke-width="1.5" stroke-linecap="round"/>
                              <path d="M12 15.5V2.5M12 2.5L15 6M12 2.5L9 6" stroke="url(#paint1_linear_7573_6736)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <defs>
                                <linearGradient id="paint0_linear_7573_6736" x1="2" y1="9.50195" x2="13.8779" y2="27.7785" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#0D6B68"/>
                                  <stop offset="1" stop-color="#0D6B68"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_7573_6736" x1="9" y1="2.5" x2="18.8927" y2="7.06585" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#0D6B68"/>
                                  <stop offset="1" stop-color="#0D6B68"/>
                                </linearGradient>
                              </defs>
                            </svg>
                            </div>
                            <input type="file" class="form-control input_upload" style="display: contents;" name="document" id="selected_file_name" required>
                            
                            
                        
                        
                            <!--<input type="file" name="document" id="selected_file_name" required-->
                            <!--        class="form-control input_main" data-multiple-caption="{count} files selected"-->
                            <!--        multiple  style="width: 100%;"/>-->
                                <!--<label class="upload_label w-100" for="file"><span class="join_s4label">CV-->
                                <!--        Upload<span class="join_s4label"> (Click or drag to upload)</span></label>-->
                    </div>
                    <div class="checkbox-cont">
                        <div class="c-checkbox">
                            <div class="c-div">
                                <label class="d-flex justify-content-center justify-content-lg-start">
                                    <input type="checkbox" id="terms" name="terms">
                                    <label for="terms"></label>
                                </label>
                            </div>
                            <div class="c-text">
                                <p class="login_strong">By ticking this box, you agree to <a
                                        href="{{ route('termsandconditions') }}">Terms and
                                        Conditions</a> and <a href="{{ route('privacypolicy') }}">Privacy Policy.</a></p>
                            </div>
                        </div>
                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <div class="my-capcha g-recaptcha notrobot_1" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    </div>
                    {{-- <a href="#" class="cont-btn btn">Submit Your message</a> --}}
                    <button type="submit" class="cont-btn btn">Submit Your message</button>

                </div>
            </form>
        </div>

    </section>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"-->
<!--        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<!--    <script src="{{ asset('frontend/Lingosphere/dist/js/owl.carousel.js') }}"></script>-->
    <!-- <script src="./dist/js/bootstrap.min.js"></script>
<!--                <script src="./dist/js/bootstrap.bundle.min.js"></script> -->-->
<!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"-->
<!--        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">-->
<!--    </script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"-->
<!--        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">-->
<!--    </script>-->

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
        function scrollToDiv() {
            document.getElementById('JForm').scrollIntoView({ behavior: 'smooth' });
       }
       
       
       
       function field_box_file() {
          console.log('me');
          document.getElementById('selected_file_name').click();
        }
        $("#selected_file_name").on("change", function(e){
          document.getElementById('upload_placeholder').innerHTML = e.target.files[0].name;
        })

       
       
</script>

<script>
        function closeNoty() {
            if (window.activeNoty) {
                window.activeNoty.close();
            }
        }

        function check_agree(form) {
            closeNoty(); // Close any existing notification
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!form.fullname.value) {
                window.activeNoty = new Noty({
                    type: 'error',
                    text: 'Please Enter Fullname'
                }).show();
                return false;
            } else if (!form.email.value) {
                window.activeNoty = new Noty({
                    type: 'error',
                    text: 'Please Enter Email'
                }).show();
                return false;
            } else if (!emailRegex.test(form.email.value)) {

                window.activeNoty = new Noty({
                    type: 'error',
                    text: 'Please Enter a Valid Email Address'
                }).show();

            } else if (!form.phone.value) {
                window.activeNoty = new Noty({
                    type: 'error',
                    text: 'Please Enter Phone'
                }).show();
                return false;
            } else if (!form.native_lang.value) {
                window.activeNoty = new Noty({
                    type: 'error',
                    text: 'Please Enter Your Native Language'
                }).show();
                return false;
            } else if (!form.pairs_lang.value) {
                window.activeNoty = new Noty({
                    type: 'error',
                    text: 'Please Enter Language Pairs'
                }).show();
                return false;
            } else if (!form.rate_per.value) {
                window.activeNoty = new Noty({
                    type: 'error',
                    text: 'Please Enter Rate Per Source Word'
                }).show();
                return false;
            } else if (!form.message.value) {
                window.activeNoty = new Noty({
                    type: 'error',
                    text: 'Please Enter Comments'
                }).show();
                return false;
            
            } else if (form.selected_file_name.files.length === 0) {
                window.activeNoty = new Noty({
                    type: 'error',
                    text: 'Please Select a File'
                }).show();
                return false;
            }

            var checkboxes = $('input[name="lang_pairs_rate[]"]');
            var checkedCheckboxes = checkboxes.filter(':checked').length;
            if (checkedCheckboxes < 2) {
                    window.activeNoty = new Noty({
                        type: 'error',
                        text: 'Select at least two translation types'
                    }).show();
                    return false;
                }
            $('#submit-btn').attr('disabled', true);
            return true;
        }
    </script>
@endsection
