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

{{--Old Code Start--}}

{{--<section class="dashboard_section">
    <div class="container dashboard_container">

        <!--Dashboard Top Start-->
        <div class="dashboard_top">
            <div class="nav nav-tabs tab_button_bar" id="nav-tab" role="tablist">
                <button class="tab tab_button acc_tab_button " id="nav-account-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-account" type="button" role="tab" aria-controls="nav-account"
                    aria-selected="true">Account Details</button>
                <button class="tab tab_button active" id="nav-order-tab" data-bs-toggle="tab" data-bs-target="#nav-order"
                    type="button" role="tab" aria-controls="nav-order" aria-selected="false">Order History</button>
                <button class="tab tab_button log_tab_button" onclick="window.location.href='{{ route('logout') }}'">Log
                    out</button>
            </div>
        </div>
        <!--Dashboard Top End-->

        <!--Dashboard Bottom Start-->
        <div class="container dashboard_bottom">
            <div class="tab-content" id="nav-tabContent">
                <!--Account Details Start-->
                <div class="tab-pane fade  account_tab show" id="nav-account" role="tabpanel"
                    aria-labelledby="nav-account-tab">
                    <div class="account_tab_inner">
                    <form id="form-profile-update" action="{{ route('customer.profile.update') }}" method="POST" enctype="multipart/form-data" onsubmit="return check_agree(this);">
                    @csrf
                     </form>
                        <div class="account_left">
                            <h6 class="account_title">Personal information</h6>
                            <div class="first_last">
                                <div class="input_bar w-100">
                                    <p class="input_label">First name</p>
                                    <input type="text" class="form-control account_textbox" form="form-profile-update" name="name" value="{{ Auth::user()->name }}"  placeholder="Full Name">
                                </div>
                                <div class="input_bar w-100">
                                    <p class="input_label">Last name</p>
                                    <input type="text" class="form-control account_textbox" id="" placeholder="Doe">
                                </div>
                            </div>
                            <div class="input_bar w-100">
                                <p class="input_label">Phone</p>
                                <input type="number" class="form-control account_textbox" id="" placeholder="+123 45 678 9012">
                            </div>
                            <div class="input_bar w-100">
                                <p class="input_label">Email</p>
                                <input type="email" class="form-control account_textbox" form="form-profile-update" name="email" value="{{ Auth::user()->email }}"  placeholder="Email" readonly>
                            </div>
                            <div class="first_last">
                                <div class="input_bar w-100">
                                    <p class="input_label">New Password</p>
                                    <input type="password" class="form-control account_textbox" form="form-profile-update" id="new_password" name="new_password"  placeholder="New Password" required>
                                </div>
                                <div class="input_bar w-100">
                                    <p class="input_label">Confirm New Password</p>
                                    <input type="password" class="form-control account_textbox" form="form-profile-update" id="confirm_password" name="confirm_password"  placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <button type="submit" form="form-profile-update" class="btn account_savebtn">Save changes</button>
                        </div>
                        <div class="account_left">
                            <h6 class="account_title">Billing details</h6>
                            <div class="first_last">
                                <div class="input_bar w-100">
                                    <p class="input_label">Address line 1</p>
                                    <input type="text" class="form-control account_textbox" placeholder="Address line 1" value="{{ $user->address }}" readonly>
                                </div>
                                <div class="input_bar w-100">
                                    <p class="input_label">Post code</p>
                                    <input type="text" class="form-control account_textbox" placeholder="Zip / Postal code" value="{{ $user->postal_code }}" readonly>
                                </div>
                            </div>
                            <div class="input_bar w-100">
                                <p class="input_label">Address line 2</p>
                                <input type="text" class="form-control account_textbox" placeholder="Address line 2" value="{{ $user->addressL2 }}" readonly>
                            </div>
                            <div class="first_last">
                                <div class="input_bar w-100">
                                    <p class="input_label">Country</p>
                                    <div class="dropdown w-100">
                                        <select class="btn account_dropdown w-100 " id="country-select" readonly aria-label="Default select example">
                                            @foreach (\App\Country::all() as $key => $country)
                                                <option value="{{ $country->code }}" 
                                                    @if ($country->code == $user->country || $country->code == $user->country) selected @endif>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="input_bar w-100">
                                <p class="input_label">City</p>
                                <input type="text" class="form-control account_textbox" placeholder="City" value="{{ $user->city }}" readonly>
                                </div>
                            </div>
                            <!--<div class="input_bar w-100">-->
                            <!--    <p class="input_label">State/area (optional)</p>-->
                            <!--    <input type="text" class="form-control account_textbox" id="" placeholder="State/area">-->
                            <!--</div>-->
                            <!--<button type="button" class="btn account_savebtn">Save changes</button>-->
                        </div>
                    </div>
                </div>
                <!--Account Details End-->
                <!--Order History Start-->
                <div class="tab-pane fade active order_tab show" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
                    <table class="table table-borderless mb-0 table-striped">
                        <thead class="account_table_header">
                            <tr class="align-middle">
                                <th scope="col"><p class="table_head_text">Order No</p></th>
                                <th scope="col"><p class="table_head_text">Date</p></th>
                                <!--<th scope="col"><p class="table_head_text">Service type</p></th>-->
                                <!--<th scope="col"><p class="table_head_text">Pages</p></th>-->
                                <!--<th scope="col"><p class="table_head_text">Words</p></th>-->
                                <th class="head_button_bar" scope="col"><p class="table_head_text">View</p></th>
                                <th scope="col"><p class="table_head_text">Total</p></th>
                            </tr>
                        </thead>
                        <tbody class="account_table_body">
                            @foreach ($orders as $key => $order)
                            <tr class="align-middle">
                                <td><p class="table_body_text" onclick="show_purchase_history_details({{ $order->id }})" style="cursor:pointer;"><span class="order_th_mob">Order:&nbsp;</span>#{{ $order->code }}</p></td>
                                <td><p class="table_body_text"><span class="order_th_mob">Date:&nbsp;</span>{{ date('d-m-Y', $order->date) }}</p></td>
                                <!--<td><p class="table_body_text"><span class="order_th_mob">Service type:&nbsp;</span>Certified translation</p></td>-->
                                <!--<td><p class="table_body_text"><span class="order_th_mob">Pages:&nbsp;</span>4</p></td>-->
                                <!--<td><p class="table_body_text"><span class="order_th_mob">Words:&nbsp;</span>1,000</p></td>-->
                                <td class="button_bar"><button class="table_body_button" onclick="show_purchase_history_details({{ $order->id }})" style="cursor:pointer;">View</button></td>
                                <td><p class="table_body_text mob_total"><span class="order_th_mob mob_total">Total:&nbsp;</span>{{ single_price($order->grand_total) }}</p></td>
                            </tr>
                            @endforeach
                            <!--<tr class="align-middle">-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Order:&nbsp;</span>#1234567</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Date:&nbsp;</span>09 - 12 - 2023</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Service type:&nbsp;</span>Certified translation</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Pages:&nbsp;</span>4</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Words:&nbsp;</span>1,000</p></td>-->
                            <!--    <td class="button_bar"><button class="table_body_button">Awaiting</button></td>-->
                            <!--    <td><p class="table_body_text mob_total"><span class="order_th_mob mob_total">Total:&nbsp;</span>£99.80</p></td>-->
                            <!--</tr>-->
                            <!--<tr class="align-middle">-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Order:&nbsp;</span>#1234567</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Date:&nbsp;</span>09 - 12 - 2023</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Service type:&nbsp;</span>Certified translation</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Pages:&nbsp;</span>4</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Words:&nbsp;</span>1,000</p></td>-->
                            <!--    <td class="button_bar"><button class="table_body_button">Awaiting</button></td>-->
                            <!--    <td><p class="table_body_text mob_total"><span class="order_th_mob mob_total">Total:&nbsp;</span>£99.80</p></td>-->
                            <!--</tr>-->
                            <!--<tr class="align-middle">-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Order:&nbsp;</span>#1234567</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Date:&nbsp;</span>09 - 12 - 2023</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Service type:&nbsp;</span>Certified translation</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Pages:&nbsp;</span>4</p></td>-->
                            <!--    <td><p class="table_body_text"><span class="order_th_mob">Words:&nbsp;</span>1,000</p></td>-->
                            <!--    <td class="button_bar"><button class="table_body_button">Awaiting</button></td>-->
                            <!--    <td><p class="table_body_text mob_total"><span class="order_th_mob mob_total">Total:&nbsp;</span>£99.80</p></td>-->
                            <!--</tr>-->
                        </tbody>
                    </table>
                </div>
                <!--Order History End-->
            </div>
        </div>
        <!--Dashboard Bottom End-->
    </div>
</section>
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
</div> --}}

{{--Old Code End--}}

{{--new code starts--}}

<!--Dashboard Start-->
<div id="accounttab">
    <section class="account_s1">
        <div class="container account_c1">
            <div class="account_titlebar">
                <h1 class="account_title" data-aos="fade-up">Welcome Back Users</h1>
                <p class="account_subtitle"data-aos="fade-up">Update your shipping and billing addresses password and view your order history.
                </p>
            </div>
            <div class="tab_main table-responsive">
                <ul class="nav nav-pills tab_buttonbar">
                    <li class="btn tab_btn" href="{{ route('dashboard') }}" >Account Details</a>
                    </li>
                    <li class="active"><a class="btn tab_btn" href="{{ route('purchase_history.index') }}" data-toggle="tab">Order history</a>
                    </li>
                    <li><a class="btn tab_signoutbtn" href="{{ route('logout') }}">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="account_s2">
        <div class="tab-content clearfix container tab_container">
            <!--Order Start-->
            <div class="tab-pane" id="2b">
                <div class="tab_orderbar mobile_none">
                    <div class="table-responsive account_inner d-flex">
                        <table class="table table-borderless mb-0 table-striped">
                            <thead class="account_table_header">
                                <tr class="align-middle">
                                    <th scope="col">
                                        <p class="table_head_text">Order #</p>
                                    </th>
                                    <th scope="col">
                                        <p class="table_head_text text-center">Date</p>
                                    </th>
                                    <th scope="col">
                                        <p class="table_head_text text-center">QTYs</p>
                                    </th>
                                    <th scope="col">
                                        <p class="table_head_text text-center">Total</p>
                                    </th>
                                    <th scope="col">
                                        <p class="table_head_text text-center">Status</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="account_table_body">
                                @foreach ($orders as $key => $order)
                                <tr class="align-middle">
                                    <td>
                                        <p class="table_body_text">{{ $order->code }}</p>
                                    </td>
                                    <td>
                                        <p class="table_body_text text-center">{{ date('d-m-Y', $order->date) }}</p>
                                    </td>
                                    <td>
                                        <p class="table_body_text text-center">{{ $order->QTY }} </p>
                                    </td>
                                    <td>
                                        <p class="table_body_text text-center">{{ single_price($order->grand_total) }}</p>
                                    </td>
                                    <td><button type="button" class="btn status_inprogressbtn" >In&nbsp;Progress</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Mobile Order Table Start-->
                <div class="tab_orderbar_mob desktop_none table-striped">
                    <div class="mob_ordercard">
                        @foreach ($orders as $key => $order)
                        <div class="order_mobtop">
                            <h1 class="table_head_text">Order #</h1>
                            <p class="table_head_text">{{ $order->code }}</p>
                        </div>
                        <div class="order_mobbottom">
                            <div class="order_detailline">
                                <h class="order_bottomtitle">Date</h>
                                <p class="table_body_text">{{ date('d-m-Y', $order->date) }}</p>
                            </div>
                            <div class="order_detailline">
                                <h class="order_bottomtitle">QTYs</h>
                                <p class="table_body_text">{{ $order->QTY }} </p>
                            </div>
                            <div class="order_detailline">
                                <h class="order_bottomtitle">Total</h>
                                <p class="table_body_text">{{ single_price($order->grand_total) }}</p>
                            </div>
                            <div class="order_detailline">
                                <h class="order_bottomtitle">Status</h>
                                <p class="table_body_text">In Progress</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--Mobile Order Table End-->
            </div>
            <!--Order End-->
            {{--<div class="tab-pane fade active order_tab show" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
                <table class="table table-borderless mb-0 table-striped">
                    <thead class="account_table_header">
                        <tr class="align-middle">
                            <th scope="col"><p class="table_head_text">Order No</p></th>
                            <th scope="col"><p class="table_head_text">Date</p></th>
                            <th scope="col"><p class="table_head_text">Total</p></th>
                            <th class="head_button_bar" scope="col"><p class="table_head_text">View</p></th>
                        </tr>
                    </thead>
                    <tbody class="account_table_body">
                        @foreach ($orders as $key => $order)
                        <tr class="align-middle">
                            <td><p class="table_body_text" onclick="show_purchase_history_details({{ $order->id }})" style="cursor:pointer;"><span class="order_th_mob">Order:&nbsp;</span>#{{ $order->code }}</p></td>
                            <td><p class="table_body_text"><span class="order_th_mob">Date:&nbsp;</span>{{ date('d-m-Y', $order->date) }}</p></td>
                            
                            <td><p class="table_body_text mob_total"><span class="order_th_mob mob_total">Total:&nbsp;</span>{{ single_price($order->grand_total) }}</p></td>
                            <td class="button_bar"><button class="table_body_button status_completebtn" onclick="show_purchase_history_details({{ $order->id }})" style="cursor:pointer;">View</button></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>--}}

        </div>
    </section>
</div>
<!--Dashboard End-->

<!--MODAL -->
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


{{--new code ends--}}
@endsection
@section('script')

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
            c.style.marginTop = "5px";
        } else {
            a.classList.add('d-none');
            b.classList.remove('active');
            c.style.transform = "rotate(0deg)";
            c.style.marginTop = "-4px";
        }
    }
</script>
<script>
    function check_agree(form) {

        var passwordstring = form.new_password.value;
        var passwordconfirmstring = form.confirm_password.value;
        

        if (passwordstring.length >= 6 && passwordconfirmstring == passwordstring) {
                return true;
            } else if (passwordstring.length < 6) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password is too short, please choose a password longer than 6 characters'
                })
            } else if (passwordstring.length == null || passwordconfirmstring.length == null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: "Password can't be empty, please enter password longer than 6 characters"
                })
            } else if (passwordconfirmstring.length < 6) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Confirm Password is too short, please choose a password longer than 6 characters'
                })
            } else if (passwordconfirmstring != passwordstring) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password Mismatched, please try again'
                })
            }
            return false;
       
    }
</script>
@endsection
