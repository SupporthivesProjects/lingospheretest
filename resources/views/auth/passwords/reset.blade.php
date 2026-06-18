@extends('frontend.layouts.app')

@section('content')
    
    <section class="recover_password">
        <div class="rp_main">
            <div class="rp_inner">
                <div class="re_left im_new"></div>
                <div class="re_right">
                    <form  method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                        <div class="rp_content_box">
                        <div class="the_boxer">
                            <h1 class="rp_title">Reset your password</h1>
                            <p class="rp_subtitle">Password must change from prior ones.</p>
                        </div>
                        <div>
                            <input id="email" type="email" readonly  class="form-control input_global  {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Email" required autofocus>
                         @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        
                        </div>
                        <div class="">
                            <input id="password" type="password" class="form-control input_global  {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="New Password" required>
                    
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="">
                            <input id="password-confirm" type="password" class="form-control input_global" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>
                        <div class="dual_btn">
                        <button class="btn btn_white" type="submit" onclick="window.location.href='{{ route('user.login') }}'">Go Back</button>
                        <button class="btn btn_redd" type="submit">Recover Password</button>
                        </div>
                    </div>
                    </form>
                    <img src="{{ asset('frontend/lingosphere/images/patternL.png') }}" alt="" class="img-fluid patternL">
                    <img src="{{ asset('frontend/lingosphere/images/pattern_R.png') }}" alt="" class="img-fluid patternR">
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.getElementById('otherInput_checkbox');
        const inputField = document.getElementById('otherInput');

        // Function to assign input value to checkbox
        function assignValueToCheckbox() {
            if (checkbox.checked) {
                checkbox.value = inputField.value;
            }
        }

        // Function to handle checkbox state change
        function handleCheckboxChange() {
            if (checkbox.checked) {
                inputField.style.display = 'block';
                inputField.addEventListener('input', assignValueToCheckbox);
                assignValueToCheckbox();
            } else {
                inputField.style.display = 'none';
                inputField.removeEventListener('input', assignValueToCheckbox);
            }
        }

        // Add event listener to checkbox change
        checkbox.addEventListener('change', handleCheckboxChange);

        // Trigger the initial state
        handleCheckboxChange();
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
            document.getElementById('selected_file_name').click();
        }
        
        $("#selected_file_name").on("change", function (e) {
            var selectedFile = e.target.files[0];
            var selectedFileName = selectedFile.name;
            var fileExtension = selectedFileName.split('.').pop().toLowerCase();
        
            // Check if the file extension is not .doc or .pdf
            if (fileExtension !== 'doc' && fileExtension !== 'pdf') {
                // Show notification using Noty.js or alert
                Noty.closeAll();
                new Noty({
                    text: 'Please upload only .doc or .pdf files.',
                    type: 'warning',
                    timeout: 3000 // Show success message for 3 seconds
                }).show();
                // Clear the file input
                $("#selected_file_name").val('');
                // Reset the placeholder
                document.getElementById('upload_placeholder').innerHTML = 'Upload Resume (.docx, .pdf)';
                return;
            }
        
            // Update placeholder and input value with selected file name
            document.getElementById('upload_placeholder').innerHTML = selectedFileName;
            $("#selected_file_name").val(selectedFileName);
        });


    </script>
   
<script>
function closeNoty() {
    if (window.activeNoty) {
        window.activeNoty.close();
    }
}

function check_agree(form) {
    closeNoty(); // Close any existing notification

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
    } else if (!form.terms.checked) {
        window.activeNoty = new Noty({
            type: 'error',
            text: 'Please Accept T&C'
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
            text: 'Select at least two checkboxes'
        }).show();
        return false;
    }

    $('#submit-btn').attr('disabled', true);
    return true;
}
</script>


@endsection
