@extends('frontend.layouts.app')
<style>
    
</style>
@section('content')
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

{{--New Code Start--}}

<div class="dashboard-secinfobox mobileaccountbg" data-aos="fade-up">
        <div class="dashboard-sec account-detail-sec">

            <div class="dashboard-inline">
                <div class="account-toggle-part">
                    <div class="user-sec">
                        <img src="{{ asset('frontend/lingosphere/images/user-icon.svg') }}" class="img-fluid" alt="">
                        <div class="username">
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                    <div class="account-tabs">
                        <a href="{{ route('dashboard') }}">Account Details 
                        <img src="{{ asset('frontend/lingosphere/images/dash-accdetail-inactive-icon.svg') }}" class=" img-fluid" alt="">
                    </a>
                        <a href="{{ route('addresses') }}" class="active">Address Details 
                        <img src="{{ asset('frontend/lingosphere/images/dash-address-active-icon.svg') }}" class=" img-fluid" alt="">
                    </a>
                        <a href="{{ route('purchase_history.index') }}"> Order History 
                        <img src="{{ asset('frontend/lingosphere/images/dash-orderhistory-inactive-icon.svg') }}" class=" img-fluid" alt="">
                    </a>
                        <a href="{{ route('logout') }}"> Signout 
                        <img src="{{ asset('frontend/lingosphere/images/dashborad-signout-icon.svg') }}" class=" img-fluid" alt="">
                    </a>
                    </div>
                    <div class="mobile-account-tabs">
                        <a class="active" id="accounttabs-menu" data-bs-toggle="dropdown" aria-expanded="false">
                        Address Details 
                        <img src="{{ asset('frontend/lingosphere/images/mob-dash-downarrow.svg') }}" class=" img-fluid" alt="">
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a href="{{ route('dashboard') }}">Account Details 
                            <img src="{{ asset('frontend/lingosphere/images/dash-accdetail-inactive-icon.svg') }}" class=" img-fluid" alt="">
                            </a>
                            </li>
                            <li>
                                <a href="{{ route('purchase_history.index') }}"> Order History 
                                <img src="{{ asset('frontend/lingosphere/images/dash-orderhistory-inactive-icon.svg') }}" class=" img-fluid" alt="">
                            </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"> Signout 
                                <img src="{{ asset('frontend/lingosphere/images/dashborad-signout-icon.svg') }}" class=" img-fluid" alt="">
                            </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="account-info-part">
                    <div class="account-info-box">
                        <h2>Address Details</h2>
                        @if($user->address != '')
                            <p>The following addresses will be used on the checkout page by default.</p>
                        @endif
                        <div class="container">
                            <div class="acc-form">
                            @if($user->address != '')
                                <form class="common-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-group ">
                                                <input type="text" class="form-control" placeholder="Address line 1" value="{{ $user->address }}" readonly>
                                            </div>
                                        </div>
                                        @if($user->addressL2 != Null)
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-group ">
                                                <input type="text" class="form-control" placeholder="Address line 2" value="{{ $user->addressL2 }}" readonly>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-group ">
                                                <input type="text" class="form-control" placeholder="City" value="{{ $user->city }}" readonly>
                                            </div>
                                        </div>
                                        @if($user->stateProvince != Null)
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-group ">
                                                <input type="text" class="form-control" placeholder="State" value="{{  $user->stateProvince }}" readonly>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-group ">
                                                <div class="dropdown">
                                                    {{--<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Country
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">United Kingdom</a></li>
                                                        <li><a class="dropdown-item" href="#">United Kingdom</a></li>
                                                        <li><a class="dropdown-item" href="#">United Kingdom</a></li>
                                                    </ul>--}}
                                                    <input type="text" class="form-control" placeholder="Country" value="{{ $user->country }}" readonly>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-group ">
                                                <input type="text" class="form-control" placeholder="Zip / Postal Code" value="{{ $user->postal_code }}" readonly>
                                            </div>
                                        </div>

                                    </div>


                                    {{--<div class="savechange-btn">
                                        <a href="#" class="common-btn">Save Changes</a>
                                    </div>--}}

                                </form>
                            @endif    
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

{{--New Code End--}}
    
    
    
@endsection

@section('script')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        once: true
    })
</script>
 
@endsection