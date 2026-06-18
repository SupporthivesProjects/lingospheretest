@extends('frontend.layouts.app')
@section('content')

    
<section class="checkout4_page">
    <div class="che_s1">
        <div class="ches1_inner">
            <h1 class="ches1_title mobile_none">checkout Summary</h1>
            <h1 class="ches1_title desktop_none">checkout</h1>
            <p class="ches1_subtitle">Please take care to view your order below before continuing through to payment. 
</p>
            <div class="ches1_main_box">
                <div class="ches1_box">
                    <div class="circle_div active">
                        <p class="circle_number">1</p>
                    </div>
                    <p class="circle_title active">Summary</p>
                </div>
                <div class="ches1_box">
                    <div class="circle_div">
                        <p class="circle_number">2</p>
                    </div>
                    <p class="circle_title">Billing Details</p>
                </div>
                <div class="ches1_box">
                    <div class="circle_div">
                        <p class="circle_number">3</p>
                    </div>
                    <p class="circle_title">Payment</p>
                </div>
            </div>
        </div>
    </div>
    <div class="che_s2">

        <div class="sec_up_cont">
            <div class="container sec_contain px-0 ">
                <div class="sec_down_box">
                    <div class="personal_information_b">
                        <h4 class="suumary_title">Summary</h4>
                        <div class="radio_box">
                            <h4 class="radio_title">What type of translation do you need?</h4>
                            <div class="check_boxex">
                                 @foreach($services as $index => $service)
                                <div class="frm" id="ser_{{ $service->id }}">
                                    <div class="form-check form_radio">
                                        <input class="form-check-input chek_inpoot " onclick="check_active('{{ $service->id }}')" value="{{ $service->slug }}" type="radio" name="request_type" id="service_{{ $service->id }}" data-title="{{ $service->name }}" data-description="{{ $service->description }}" data-unit-price="{{ $service->unit_price }}" data-converted-unit-price="{{ convert_price($service->unit_price) }}"  data-id="{{ $service->id }}" @if(!Session::has('Type') && $index === 0) checked="checked" @elseif(Session::has('Type') && Session::get('Type') == $service->id) checked="checked" @endif>
                                        <label class="check_label"  for="service_{{ $service->id }} ">
                                            <h4 class="icon_title">{{ $service->name }}</h4>
                                            <h4 class="icon_subtitle d-none d-lg-block d-md-block">
                                                {{ $service->description }} </h4>
                                        </label>

                                    </div>
                                    <h4 class="icon_subtitle d-block d-lg-none d-md-none">{{ $service->description }} </h4>
                                </div>
                                 @endforeach
                                <!--<div class="frm active">-->
                                <!--    <div class="form-check form_radio">-->
                                <!--        <input class="form-check-input chek_inpoot" value="standard" type="radio"-->
                                <!--            name="request_type" id="service_2"-->
                                <!--            data-title="Standard Professional Translation"-->
                                <!--            data-description="Text-based translations that are clear, comprehensive and perfect for everyday understanding."-->
                                <!--            data-unit-price="0.1" data-converted-unit-price="0.1" data-id="2"-->
                                <!--            checked="checked">-->
                                <!--        <label class="check_label" for="service_2">-->
                                <!--            <h4 class="icon_title">Standard Professional Translation</h4>-->
                                <!--            <h4 class=" icon_subtitle d-none d-lg-block d-md-block">Text-based-->
                                <!--                translations that are clear, comprehensive and perfect for-->
                                <!--                everyday understanding.</h4>-->
                                <!--        </label>-->
                                <!--    </div>-->
                                <!--    <h4 class="icon_subtitle d-block d-lg-none d-md-none">Precision, accuracy, and-->
                                <!--        authenticity guaranteed-->
                                <!--        for official documents and legal purposes. </h4>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="upper_split">
                            <h4 class="radio_title">What language pair do you need translated?</h4>
                            <div class="split_box">
                                <div class="form-group name_form">
                                    <label class="full_namee" for="exampleInputPassword1 full_namee">Translate from </label>
                                    <select class="form-select inpi_boxx" aria-label="Default select example" id="from_lang">
                                            @foreach (\App\Language ::all() as $key => $language)
                                            	<option value="{{ $language->name }}">{{ $language->name }}</option>
                                        	@endforeach
                                    </select>
                                    {{--<select class="form-select inpi_boxx" aria-label="Default select example" id="from_lang" onchange="checkLanguages()">
                                        <option selected value="English">English</option>
                                        <option value="Mandarin Chinese">Mandarin Chinese</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Arabic">Arabic</option>
                                        <option value="Bengali">Bengali</option>
                                        <option value="Portuguese">Portuguese</option>
                                        <option value="Russian">Russian</option>
                                        <option value="Urdu">Urdu</option>
                                        <option value="French">French</option>
                                    </select>--}}
                                </div>
                                <div class="form-group name_form">
                                    <label class="full_namee" for="exampleInputPassword1 full_namee">Translate to</label>
                                    <select class="form-select inpi_boxx" aria-label="Default select example" id="to_lang">
                                            @foreach (\App\Language ::all() as $key => $language)
                                            	<option value="{{ $language->name }}">{{ $language->name }}</option>
                                        	@endforeach
                                    </select>
                                    {{--<select class="form-select inpi_boxx" aria-label="Default select example" id="to_lang" onchange="checkLanguages()">
                                        <option  selected value="English">English</option>
                                        <option value="Mandarin Chinese">Mandarin Chinese</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Arabic">Arabic</option>
                                        <option value="Bengali">Bengali</option>
                                        <option value="Portuguese">Portuguese</option>
                                        <option value="Russian">Russian</option>
                                        <option value="Urdu">Urdu</option>
                                        <option value="French">French</option>
                                    </select>--}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group name_form">
                            <div class="lable_forget">
                                <label for="exampleInputEmail1" class="full_namee"> How many 
                                      <span class="suus-pages">pages</span>
                                     <span class="suus-words" style="display:none;">words</span> 
                                      do you need
                                    translated?</label>
                            </div>
                            <div class="impuut">
                                
                                <input type="number" min="1"  class="form-control inpi_boxx " max="99" name="no_of_pages" id="no_of_pages" value="1" aria-describedby="emailHelp" placeholder="Number of Pages" maxlength="2" size="2" value="1">
                                <input type="number" min="1"  class="form-control inpi_boxx " max="9999" name="no_of_words" value="1" id="no_of_words" aria-describedby="emailHelp" placeholder="Number of Words" maxlength="4" size="4" style="display:none;">
                                <p class="suus" data-aos="fade-up">A page is 250 words or fewer including numbers.</p>
                            </div>
                        </div>
                        <div class="radio_box">
                            <h4 class="radio_title">Upload the files you need translated</h4>
                            <form  id="servicedetailsform" method="POST" enctype="multipart/form-data" style="width: 100%;">
                                @csrf
                                <div class="name_form_div" onclick="field_box_file()">
                                    <p class="upload_placeholder" id="upload_placeholder">Upload document (.docx, .pdf)</p>
                                    <input type="file" class="form-control inpi_boxx" style="display: contents;"
                                         id="document" name="document" required form="servicedetailsform" >
                                    <img src=" {{ asset('frontend/Lingosphere/img/upload_icon.svg') }}" class="eye-btn_up" alt="">
                                </div>
                                <input type="hidden" form="servicedetailsform" id="from_lang_hidden" name="from_lang_hidden">
                                <input type="hidden" form="servicedetailsform" id="to_lang_hidden" name="to_lang_hidden">
                                <input type="hidden" form="servicedetailsform" id="service_id_hidden" name="service_id_hidden">
                                <input type="hidden" form="servicedetailsform" id="service_title_hidden" name="service_title_hidden">
                                <input type="hidden" form="servicedetailsform" id="service_description_hidden" name="service_description_hidden">
                                <input type="hidden" form="servicedetailsform" id="service_price_hidden" name="service_price_hidden">
                                <input type="hidden" form="servicedetailsform" id="service_no_of_pages_hidden" name="service_no_of_pages_hidden" value="1">
                                <input type="hidden" form="servicedetailsform" id="service_no_of_words_hidden" name="service_no_of_words_hidden" value="1">
                                <input type="hidden" form="servicedetailsform" id="formattedDeliveryDate_hidden" name="formattedDeliveryDate_hidden">
                            </form>  
                        </div>
                        <div class="radio_box">
                            <h4 class="radio_title">Have additional comments?</h4>
                            <textarea class="form-control textare_box" placeholder="First and third pages only" form="servicedetailsform" name="message"
                                id="message" style="height: 133px;" required></textarea>
                        </div>
                        <div class="radio_box">
                            <h4 class="radio_title">Urgent translation?</h4>
                            <div class="toggel_switch">
                                <div class="">
                                    <input type="radio" name="translation_urgency" id="no" value="168_hours" checked/>
                                    <label for="no" type="button" >No</label>
                                </div>
                                <div class="">
                                    <input type="radio" name="translation_urgency" id="fast" value="36_hours" />
                                    <label for="fast" type="button" value="36_hours (+ {{ single_price(24.24) }})">36-48 hours (+ {{ single_price(24.24) }})</label>
                                </div>
                            </div>
                        </div>

                        <div class="estimeted">
                            <h4 id="formattedDeliveryDate">Estimated delivery: Tuesday, 11:00 AM</h4>
                        </div>
                    </div>
                    <div class="summ_ary">
                        <div class="summary_box">
                            <h4 class="suumary_title">Summary</h4>
                            <div class="cart_box">
                                <div class="left_cart_name">
                                    <h4 class="l_c_t" id="service_title_label">Certified Translation</h4>
                                    <h4 class="l_c_s"><span id="service_no_of_pages_label">1</span> pages (<span id="word_counter">250</span> words max)</h4>
                                </div>
                                <div class="right_cart_name">
                                    <h4 class="l_c_t">{{ currency_symbol() }}<span id="service_price_label">00..00</span></h4>
                                </div>
                            </div>
                            <hr class="line">
                            <div class="sub_disc_box">
                                <div class="cart_tottal">
                                    <h4 class="suumary_title">Total</h4>
                                    <h4 class="suumary_title">{{ currency_symbol() }}<span id="service_total_label">00..00</span></h4>
                                </div>
                            </div>
                            <div class="lowwer_content">
                                <div class="icons_box">
                                    <img src=" {{ asset('frontend/Lingosphere/img/cal_logo.svg') }}" alt="" class="logos">
                                    <div class="icons_content">
                                        <h4 class="radio_title">Turnaround Time:<span id="formattedDeliveryDate_text"> 48 Hours</span></h4>
                                        <h4 class="icon_subtitle">Your request will be translated and returned within 48 hours. Check your inbox for updates.</h4>
                                    </div>
                                </div>
                                <div class="icons_box">
                                    <img src=" {{ asset('frontend/Lingosphere/img/trans_late.svg') }}" alt="" class="logos">
                                    <div class="icons_content">
                                        <h4 class="radio_title">Easy Checkout</h4>
                                        <h4 class="icon_subtitle">Payments are securely processed through our system for your peace of mind.</h4>
                                    </div>
                                </div>
                                <div class="icons_box">
                                    <img src=" {{ asset('frontend/Lingosphere/img/credit_card_logo.svg') }}" alt="" class="logos">
                                    <div class="icons_content">
                                        <h4 class="radio_title">High-Quality Translation</h4>
                                        <h4 class="icon_subtitle">Expert translations in your chosen languages, ensuring cultural nuances are captured.</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="dual_btn">
                                <button class="btn btn_white" type="button"  form="servicedetailsform" id="addtocart"> Add to Cart</button>
                                <button class="btn btn_redd" type="button" form="servicedetailsform" id="quickorder" value="Checkout"> Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
    
    


@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

 <script>
    $(document).ready(function() {
      
        function updateDetails() {
            var request_type = $('input[name="request_type"]:checked');
            var title = request_type.data('title');
            var description = request_type.data('description');
            var unitPrice = request_type.data('unit-price');
            var convertedPrice = request_type.data('converted-unit-price');
            var id = request_type.data('id');
            var translationUrgency = $('input[name="translation_urgency"]:checked').val();
            var fromLang = $('#from_lang').val();
            var toLang = $('#to_lang').val();
          
            var pages = Math.max(1, Math.ceil($('#no_of_words').val() / 250));
            var words = $('#no_of_words').val();
            
          
            var condition = request_type.val();
            var pagesInput = $('#no_of_pages');
            var wordsInput = $('#no_of_words');
            var pagesLabel = $('.suus-pages');
            var wordsLabel = $('.suus-words');

            if (condition === 'certified') {
                // Hide word input and label, show page input and label
               
                $('#word_counter').text(pages*250);
              
                wordsInput.hide();
                wordsLabel.hide();
                pagesInput.show();
                pagesLabel.show();
            } else if (condition === 'standard') {
                // Calculate pages based on standard translation (250 words per page) with a minimum of 1 page
                var words = wordsInput.val();
                var pages = Math.max(1, Math.ceil(words / 250));
                $('#word_counter').text(words);
                pagesInput.val(pages);
                wordsInput.show();
                wordsLabel.show();
                pagesInput.hide();
                pagesLabel.hide();
            } else {
                // Hide page input and label, show word input and label
                pagesInput.hide();
                pagesLabel.hide();
                wordsInput.show();
                wordsLabel.show();
            }

            function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }

            // Update the HTML elements with the capitalized text
            $('#from_lang_text').text(capitalizeFirstLetter(fromLang));
            $('#to_lang_text').text(capitalizeFirstLetter(toLang));
            $('#service_title_label').text(title);
            $('#service_description_label').text(description);

            if (condition === 'certified') {
                var pages = pagesInput.val();
                $('#service_no_of_pages_label').text(pages);
                $('#word_counter').text(pages * 250);
            } else {
                var words = wordsInput.val();
                $('#service_no_of_pages_label').text(Math.ceil(words / 250));
                $('#word_counter').text(words);
            }

            var addonprice = 0;
            var convertedaddonprice = 0;
            
             switch (translationUrgency) {
                case '168_hours':
                    addonprice = 0;
                    convertedaddonprice = 0;
                    break;
                case '36_hours':
                    addonprice = 24.24;
                    convertedaddonprice = {{ convert_price(24.24) }};
                    break;
                case '24_hours':
                    addonprice = 15.83;
                    convertedaddonprice = {{ convert_price(15.83) }};
                    break;
                case '12_hours':
                    addonprice = 31.67 ;
                    convertedaddonprice = {{ convert_price(31.67) }};
                    break;
                default:
                    addonprice = 15.83;
                    convertedaddonprice = {{ convert_price(15.83) }};
            }
            
           if (condition === 'certified') {

              $('#service_price_label').text((parseFloat(convertedPrice) * parseFloat(pages) + parseFloat(convertedaddonprice)).toFixed(2));
              $('#service_total_label').text((parseFloat(convertedPrice) * parseFloat(pages) + parseFloat(convertedaddonprice)).toFixed(2));

            } else {

              $('#service_price_label').text((parseFloat(convertedPrice) * parseFloat(words) + parseFloat(convertedaddonprice)).toFixed(2));
              $('#service_total_label').text((parseFloat(convertedPrice) * parseFloat(words) + parseFloat(convertedaddonprice)).toFixed(2));
              
            }

  
           
            
            $('#from_lang_hidden').val(fromLang);
            $('#to_lang_hidden').val(toLang);
            $('#service_id_hidden').val(id);
            $('#service_title_hidden').val(title);
            $('#service_description_hidden').val(description);
  
            if (condition === 'certified') {

               $('#service_no_of_pages_hidden').val(pages);
               $('#service_no_of_words_hidden').val(pages*250);
               $('#service_price_hidden').val((parseFloat(unitPrice*pages) + parseFloat(addonprice)).toFixed(2));

            } else {

              $('#service_no_of_pages_hidden').val(pages);
              $('#service_no_of_words_hidden').val(words);
               $('#service_price_hidden').val((parseFloat(unitPrice*words) + parseFloat(addonprice)).toFixed(2));
            }
  
           $('#formattedDeliveryDate_hidden').val(formatDate(new Date()));
  
  

            calculateEstimatedDelivery(translationUrgency);
        }

        function calculateEstimatedDelivery(deliveryOption) {
          
          
            switch (deliveryOption) {
                case '168_hours':
                    deliveryTime = 168;
                    break;
                case '36_hours':
                    deliveryTime = 36;
                    break;
                case '24_hours':
                    deliveryTime = 24;
                    break;
                case '12_hours':
                    deliveryTime = 12;
                    break;
                default:
                    deliveryTime = 24;
            }

            var currentDate = new Date();
            var estimatedDeliveryDate = new Date(currentDate.getTime() + deliveryTime * 60 * 60 * 1000);
            var formattedDeliveryDate = formatDate(estimatedDeliveryDate);

            $('#formattedDeliveryDate').text(formattedDeliveryDate);
            $('#formattedDeliveryDate_text').text(formattedDeliveryDate);
             $('#formattedDeliveryDate_hidden').val(formattedDeliveryDate);
            
        }
        

        function formatDate(date) {
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var day = days[date.getDay()];
        
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var period = hours >= 12 ? 'PM' : 'AM';
        
            hours = hours % 12;
            hours = hours ? hours : 12; // Handle midnight (0 hours)
        
            var formattedHours = hours.toString().padStart(2, '0');
            var formattedMinutes = minutes.toString().padStart(2, '0');
        
            return day + ', ' + formattedHours + ':' + formattedMinutes + ' ' + period;
        }

        // Event handlers
        $("input[name='translation_urgency']").on('change', updateDetails);
        $('#from_lang, #to_lang, #no_of_pages, #no_of_words').on('change input blur', updateDetails);
        $("input[name='request_type']").on('change', updateDetails);
        

        // Initial call to updateDetails
        updateDetails();
    });
</script>
    <script>
      $(document).ready(function () {
        $("#addtocart").on('click', function(e) {
            e.preventDefault();
            handleAddToCart();
            
        });
    
        $("#quickorder").on('click', function(e) {
            e.preventDefault();
            handleAddToCart(true);
        });
    
        function handleAddToCart(isQuickOrder = false) 
        {
            
            var fileInput = $('#document')[0].files.length;
            var messageInput = $('#message').val().trim(); // Get the value of the message input
            
            if (fileInput === 0) { // Check if file input is empty
                Noty.closeAll();
                new Noty({
                    text: 'Please select a file that you need translated',
                    type: 'error',
                    layout: 'center',
                    timeout: 3000 // Show the error message for 3 seconds
                }).show();
                return false;
                
            }
          else if( messageInput === ''){ // Check if message input is empty
                
                Noty.closeAll();
                new Noty({
                    text: 'Please provide a message',
                    type: 'error',
                    layout: 'center',
                    timeout: 3000 // Show the error message for 3 seconds
                }).show();
                return false;
                
            }
    
            var formData = new FormData($("#servicedetailsform")[0]);
    
            $.ajax({
                type: "POST",
                url: '{{ route('service.addToCart') }}',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    Noty.closeAll();
                    new Noty({
                            text: 'Please wait....',
                            type: 'info',
                            timeout: false,
                            layout: 'center',
                            theme: 'relax',
                            closeWith: [],
                            animation: {
                            open: 'animated fadeIn', // Add any desired animation classes
                            close: 'animated fadeOut' // Add any desired animation classes
                            }
                            }).show();
                },
                success: function (data) {
                    Noty.closeAll();
                    new Noty({
                        text: 'Choosen added to cart successfully.',
                        type: 'success',
                        
                        timeout: 3000 // Show success message for 3 seconds
                    }).show();
    
                    if (isQuickOrder) {
                        window.location.href = 'checkout'; // Redirect for Quick Order
                    } else {
                        location.reload();
                        $('#cart_items_sidenav, #cart_items_sidenav2').html(parseInt($('#cart_items_sidenav, #cart_items_sidenav2').html()) + 1);
                    }
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                    Noty.closeAll();
                    new Noty({
                        text: 'Error occurred: ' + error,
                        type: 'error',
                        timeout: 3000 // Show the error message for 3 seconds
                    }).show();
                }
            });
        }
    });
    
    </script>
    <script>
        function checkLanguages() {
            var fromLang = document.getElementById("from_lang").value;
            var toLang = document.getElementById("to_lang").value;
    
            if (fromLang === toLang) {
                alert("From and To languages cannot be the same. Please select different languages.");
                // Reset the 'To' dropdown to default option or any desired action
                document.getElementById("to_lang").value = "English"; 
            }
        }
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
                } else {
                    a.classList.add('d-none');
                    b.classList.remove('active');
                    c.style.transform = "rotate(0deg)";
                }
            }
    
           function field_box_file() {
                console.log('me');
                document.getElementById('document').click();
            }
            
            $("#document").on("change", function (e) {
                var selectedFile = e.target.files[0];
                var selectedFileName = selectedFile.name;
                var fileExtension = selectedFileName.split('.').pop().toLowerCase();
            
                // Accepted file extensions: pdf and doc
                if (fileExtension !== 'pdf' && fileExtension !== 'doc' && fileExtension !== 'docx') {
                    // Show a notification or alert the user
                    Noty.closeAll();
                    new Noty({
                        text: 'Please upload only .doc or .pdf files.',
                        type: 'warning',
                        layout: 'center',
                        timeout: 3000 // Show success message for 3 seconds
                    }).show();
                    // Clear the file input
                    $("#document").val('');
                    // Reset the placeholder
                    document.getElementById('upload_placeholder').innerHTML = 'Upload document (.docx, .pdf)';
                    return;
                }
            
                // Update placeholder and input value with the selected file name
                document.getElementById('upload_placeholder').innerHTML = selectedFileName;
                $("#selected_file_name").val(selectedFileName);
            });
    
    
    
        </script>
    <script>
        $('#no_of_pages').on('input', function(e) {
            var inputValue = $(this).val();
            var isValid = /^(10|\d{1,2})$/.test(inputValue); // Allows digits from 1 to 9 and multiples of 10
            
            if (!isValid) {
                $(this).val(inputValue.slice(0, 2)); // Limits the input to 2 characters
                $('#error').show();
            } else {
                $('#error').hide();
            }
        });
        
        $('#no_of_pages').on('keypress', function(e) {
            var inputValue = e.key;
            var isValid = /^[1-9]$|^(10|\d{0,1})$/.test(inputValue); // Allows digits from 1 to 9 and multiples of 10
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>
    <script>
        const radioButtons = document.querySelectorAll('.r_btnn');
        radioButtons.forEach(button => {
            button.addEventListener('change', function() {
                // Reset background color of all boxes
                document.querySelectorAll('.ctsec').forEach(box => {
                    box.style.backgroundColor = '#F6F6F6';
                    box.style.borderColor = '#BDBDBD';
                });
                // Change background color of the selected box
                const container = this.closest('.ctsec');
                if (this.checked) {
                    container.style.backgroundColor = '#FBFCFF';
                    container.style.borderColor = '#587B5D';
                }
            });
        });
    </script>
    
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
 $(document).ready(function() {
    
    $('input[name="request_type"]:checked').parent().parent().addClass('active');

   
    $('.check_label').click(function() {
        $('.check_label').removeClass('active');
        $(this).addClass('active');
    });
});
   function check_active(x) {
       const id = document.getElementById('ser_' + x);
       document.getElementById('ser_1').classList.remove('active');
       document.getElementById('ser_2').classList.remove('active');
       id.classList.add('active');
 }
</script>
@endsection