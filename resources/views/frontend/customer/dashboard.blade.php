@extends('frontend.layouts.app')

@if(Auth::check())
    @php
        $user = Auth::user();
        //dump($user->id);
        $user_id = Auth::user()->id;
        //DB::enableQueryLog();
        $u2 = DB::table('last_billing_address')->where('user_id',$user_id)->orderBy('id','desc')->first();
        //$query = DB::getQueryLog();
        //$query = end($query);
        //dd($query);
        //dump($u2);
        if($u2){
            $user = $u2;
        }
         //dump($user);
    @endphp
@endif
@section('content')


<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
        <div class="modal-content position-relative">
            <div class="c-preloader">
                <i class="fa fa-spin fa-spinner"></i>
            </div>
            <div id="order-details-modal-body" style="background: #F6F7FB;">

            </div>
        </div>
    </div>
</div> 

<!--Dashboard End-->
{{--New code ends--}}

<section class="checkout4_page">
    <div class="che_s1">
        <div class="dashboard_s1">
            <h1 class="dashboard_title" data-aos="fade-up">Welcome Back User</h1>
            <p class="dashboard_subtitle" data-aos="fade-up">Update your shipping and billing addresses password and view your order history.</p>
            <div class="dashobard_tab_button" id="pills-tab" role="tablist">
                <button class="btn dashboard_btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Account&nbsp;Details</button>
            
                <button class="btn dashboard_btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Order&nbsp;History</button>
            
                <button class="btn dashboard_btn" id="pills-contact-tab" onclick="window.location.href='{{ route('logout') }}'">Sign&nbsp;Out 
                    <img src="{{ asset('frontend/lingosphere/images/signout_logo.svg') }}" alt="" class="img-fluid">
                </button>
            </div>
        </div>
    </div>
    <div class="dashboard_s2">
        <div class="container">
            <div class="dashboard_inner">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <form class="account_form" id="form-profile-update" action="{{ route('customer.profile.update') }}" method="POST" enctype="multipart/form-data" onsubmit="return check_agree(this);">
                            @csrf
                            <div class="interim">
                                <div class="dashboard_tab_1">
                                    <div class="dashtab_left">
                                        <div class="">
                                            <input type="text" class="form-control input_global" form="form-profile-update" name="name" value="{{ Auth::user()->name }}" placeholder="Full Name">
                                        </div>
                                        {{-- <div class="">
                                            <input type="email" class="form-control input_global" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
                                        </div> --}}
                                        <div class="">
                                            <input type="email" class="form-control input_global" form="form-profile-update" name="email" value="{{ Auth::user()->email }}" placeholder="Email Address">
                                        </div>
                                        {{-- <div class="">
                                            <input type="email" class="form-control input_global" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
                                        </div> --}}
                                        <div class="">
                                            <input type="password" class="form-control input_global" form="form-profile-update" id="new_password" name="new_password" placeholder="Password">
                                        </div>
                                        <div class="">
                                            <input type="password" class="form-control input_global" form="form-profile-update" id="confirm_password" name="confirm_password" required placeholder="Confirm New Password">
                                        </div>
                                    </div>
                                    <div class="dashtab_right">
                                        <div class="">
                                            <input type="text" class="form-control input_global" readonly value="{{ $user->address }}" placeholder="Address Line 1">
                                        </div>
                                        <div class="">
                                            <input type="text" class="form-control input_global" readonly value="{{ $user->addressL2 }}" placeholder="Address Line 2">
                                        </div>
                                        <div class="">
                                            <input type="email" class="form-control input_global" value="{{ $user->postal_code }}" readonly placeholder="City/Town">
                                        </div>
                                        <div class="">
                                            <select class="form-select inpi_boxx " id="country-select"  aria-label="Default select example">
                                                @foreach (\App\Country::all() as $key => $country)
                                                    <option value="{{ $country->code }}" 
                                                        @if ($country->code == $user->country || $country->code == $user->country) selected @endif>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="">
                                            <input type="email" class="form-control input_global" readonly value="{{ $user->country }}" placeholder="Country/State/Province">
                                        </div>
                                        <div class="">
                                            <input type="email" class="form-control input_global" value="{{ $user->postal_code }}" readonly  placeholder="Zip Code/Postal Code">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn_redd" type="submit" form="form-profile-update">Proceed to checkout</button>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="tab_table">
                            <div class="mobile_none">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col"><p class="t_head_text">Order&nbsp;#</p></th>
                                        <th scope="col"><p class="t_head_text">Date</p></th>
                                        {{--<th scope="col"><p class="t_head_text">QTY</p></th>--}}
                                        <th scope="col"><p class="t_head_text">Total</p></th>
                                        <th scope="col"><p class="t_head_text text-center">Status</p></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                            <tr>
                                            <th scope="row"><p class="t_body_text">{{ $order->code }}</p></th>
                                            <td><p class="t_body_text">{{ date('d-m-Y', $order->date) }}</p></td>
                                            {{--<td><p class="t_body_text"> {{Page 4}}</p></td>--}}
                                            <td><p class="t_body_text">{{ single_price($order->grand_total) }}</p></td>
                                            <td><button class="btn btn_table_light mx-auto" onclick="show_purchase_history_details({{ $order->id }})">In Progress</button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="desktop_none">
                            <div class="table_mob">
                                @foreach ($orders as $key => $order)
                                    <div class="table_disput">
                                        <div class="row">
                                            <div class="col-6"><p class="t_head_text">Order #</p></div>
                                            <div class="col-6"><p class="t_head_text text-end">{{ $order->code }}</p></div>
                                        </div>
                                        <div class="table_bord"></div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="t_body_title">Date</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="t_body_text">{{ date('d-m-Y', $order->date) }}</p>
                                            </div>
                                            {{--<div class="col-6">
                                                <p class="t_body_title">QTY</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="t_body_text">4 pages</p>
                                            </div>--}}
                                            <div class="col-6">
                                                <p class="t_body_title">Total</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="t_body_text">{{ single_price($order->grand_total) }}</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="t_body_title mb-0">Status</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="t_body_text mb-0" onclick="show_purchase_history_details({{ $order->id }})"> In Progress</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

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

<script>
    const radioButtons = document.querySelectorAll('.chek_inpoot');
  
    radioButtons.forEach((radioButton) => {
      radioButton.addEventListener('click', (event) => {
        const frm = event.target.closest('.frm');
        frm.classList.add('active');
        const siblings = frm.parentNode.children;
        for (let i = 0; i < siblings.length; i++) {
          if (siblings[i] !== frm) {
            siblings[i].classList.remove('active');
          }
        }
      });
    });




  function field_box_file() {
    console.log('me');
    document.getElementById('document').click();
  }
  $("#document").on("change", function(e){
    document.getElementById('upload_placeholder').innerHTML = e.target.files[0].name;
  })
  </script>


@endsection
