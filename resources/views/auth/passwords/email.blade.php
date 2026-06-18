@extends('frontend.layouts.app')

@section('content')


    <section class="recover_password">
        <div class="rp_main">
            <div class="rp_inner">
                <div class="re_left"></div>
                <div class="re_right">
                    <form method="POST" id="roh" action="{{ route('password.email') }}">
                     @csrf
                    <div class="rp_content_box">
                        <h1 class="rp_title">recover your password</h1>
                        <div class="">
                            
                            @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                                 <input id="email" type="text" class="form-control input_global {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email or Phone">
                            @else
                                <input type="email" class="form-control input_global  {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required placeholder="{{ __('Email') }}" name="email">
                            @endif
            
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="dual_btn">
                        <button class="btn btn_white" type="button" onclick="window.location.href='{{ route('home') }}'">Go Back</button>
                        <button class="btn btn_redd" type="submit">Recover Password</button>
                        </div>
                    </div>
                    </form>
                    <img src="{{ asset('frontend/Lingosphere/img/patternL.png') }}" alt="" class="img-fluid patternL">
                    <img src="{{ asset('frontend/Lingosphere//img/pattern_R.png') }}" alt="" class="img-fluid patternR">
                </div>
            </div>
        </div>
    </section>
    
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
