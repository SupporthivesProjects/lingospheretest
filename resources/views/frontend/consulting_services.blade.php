@extends('frontend.layouts.app')
<style>
    .start-project-container .expert-service figure img {
        opacity: 1 !important;
        margin-left: -80px !important;
    }

    /*.web-design-main .expert-service figure {*/
    /*    margin-left: -3em;*/
    /*}*/
    /*.web-design-main .start-project-container .expert-service figure:before {*/

    /*    top: 8.5em !important;*/
    /*}*/
    /*.old-design-hand-r{*/
    /*    margin-top:3em !important;*/
    /*}*/
    /* #expert-banner-img #expert-banner-img img{
    height:100vh !important;
    border:2px solid red;
}*/

    .start-project-container .s-p-img .explore-img:after {
        left: 55px !important;
    }




    #expert-banner-img:after {

        z-index: 9999999 !important;
    }


    #services-head {
        font-size: 80px;
    }

    #img {
        height: 200px;
        margin-top: 50%;

    }

    #expert-banner-img {
        z-index: 1 !important;
    }

    #service-f-banner {
        z-index: 2 !important;
    }

    #img-z {
        z-index: 2 !important;
    }

    .about-banner {
        height: 700px !important;
    }


    .web-design-main .start-project-container .expert-service figure:before {
        margin-right: 4em !important;
    }


    .web-design-main .expert-service figure {
        width: 61vw !important;
    }


    .home-banner .banner-c-m {
        padding-top: 40px;
        border-top: 0.1rem solid white;
        margin-top: 40px;
    }


    #start-project-container {
        padding-top: 138px !important;
    }

    .h4-white-bold-service {
        font-family: Circular Std;
        font-style: normal;
        font-weight: bold;
        font-size: 40px;
        line-height: 51px;
        color: #FFFFFF;
    }

    .service-steps-content {
        margin-top: .75rem !important;
    }

    @media only screen and (max-width: 1280px) {
        .e-commerce {
            font-size: 54px !important;
        }

        .service-steps-content {
            height: 396px;
            min-height: 396px;
            margin-top: 0 !important;
        }

        .service-page-banner3 .steps-service {
            height: 396px;
            min-height: 396px;
        }
    }

    @media only screen and (max-width: 1710px) {
        .a-b-testing {
            font-size: 52px !important;
        }

        .h4-white-bold-service {
            font-size: 38px;
        }

        .service-steps-content {
            height: 396px;
            min-height: 396px;
            margin-top: 0 !important;
        }

        .service-page-banner3 .steps-service {
            height: 396px;
            min-height: 396px;
        }
    }

    @media only screen and (max-width: 768px) {
        .display-text {
            line-height: 70px !important;

        }

        .about-banner .banner-content {
            margin-right: 0;
            margin-top: 69px;
             !important;
            padding-top: 307px;
            ;
        }

        .creative-brand .block-img-r {
            margin-top: 214px !important;
        }


        .start-project-container .s-p-img {
            width: 100% !important;
            display: block;
            margin: auto;
        }

        .to-load .ta-2 {
            margin-top: 278px;

        }


        .ta-c {
            text-align: left !important;
        }

    }

    .select-service-head {
        font-family: 'Soleil Regular';
        font-style: normal;
        font-weight: 600;
        font-size: 40px;
        line-height: 51px;
        text-align: center;
        text-transform: capitalize;
        color: #FFFFFF;
    }

    @media only screen and (max-width: 768px) {
        .user-experience {
            height: 455px;
        }

        .e-commerce {
            font-size: 46px !important;
        }

        .a-b-testing {
            font-size: 46px !important;
        }

        .select-service-head {
            font-family: 'Soleil Regular';
            font-style: normal;
            font-weight: 600;
            font-size: 40px;
            line-height: 51px;
            text-align: center;
            text-transform: capitalize;
            color: #FFFFFF;
        }
    }

    .p-18-grey-service {
        font-family: Circular Std;
        font-style: normal;
        font-weight: 450;
        font-size: 18px;
        line-height: 30px;
        text-align: center;
        color: #797A7A;
    }

    .card {
        background: #F1F6F8 !important;
        border: 0px solid #F1F6F8 !important;
        border-radius: 0 !important;
    }

    @media only screen and (max-width: 600px) {
        .title-content-head {
            padding: 10px 23px 4px !important;
        }

        .background-offwhite {
            background: #57619094 !important;
        }

        .p-18-grey-service {
            font-family: Circular Std;
            font-style: normal;
            font-weight: 450;
            font-size: 18px;
            line-height: 30px;
            text-align: center;
            color: #ffffff82;
        }

        .marl-2 {
            margin-left: .85rem !important;
        }

        .marr-2 {
            margin-right: .85rem !important;
        }

        .service-steps-content {
            height: 100%;
            min-height: 100%;
            margin-top: 0 !important;
        }

        .h4-white-bold-service {
            font-family: Circular Std;
            font-style: normal;
            font-weight: bold;
            font-size: 26px !important;
            line-height: 160%;
            color: #FFFFFF;
        }

        .card {
            background: #ffffff !important;
            border: 0px solid #ffffff !important;
            border-radius: 0 !important;
        }

        .service-sec-cards {
            padding: 2.5rem 0.8rem !important;
        }

        .h3-white {
            font-weight: 700 !important;
            font-size: 26px !important;
        }

        .service-h4 {
            font-weight: bold !important;
            font-size: 26px !important;
        }

        .contact-us-form .form-control-lg {
            font-size: 16px !important;
        }
    }

    .navbar-light .navbar-nav .nav-link {
        color: #fff !important;
    }

    .c-checkbox>label:before,
    .c-checkbox>.label:before {
        background: #FFFFFF !important;
        border: 1px solid #12394A !important;
        top: 6px !important;
        border-radius: 0 !important;
    }

    .c-checkbox input[type='checkbox']~label:after,
    .c-checkbox input[type='checkbox']~.label:after {
        background: #FFFFFF !important;
    }
</style>
@section('content')
<section class="service-page-banner pb-5 pb-lg-7">
    <img src="{{ asset('frontend/dist/img/service-banner-bg.jpg') }}" alt="trems-bg-img" class="img-fluid bg-image d-none d-lg-block d-md-none">
    <img src="{{ asset('frontend/dist/img/service-banner-mobbg.jpg') }}" alt="trems-bg-img" class="img-fluid bg-image d-block d-lg-none d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-11 col-sm-12 col-12 m-auto">
                <div class="title-content-head text-center">
                    <h1 class="h3-white">Choose a learning method that works for you</h1>
                    <p class="para-2 d-none d-lg-block d-md-block"> Explore the resources in our shop or read below about some of the topics our experts can help you with. </p>
                    <p class="para-2 d-block d-lg-none d-md-none" style="line-height: 30px;"> Explore the resources in our shop or read below about some of the topics our experts can help you with.</p>
                    <a href="{{ route('products') }}" class="btn btn-orange px-3">Explore Resources</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-page-banner2 pt-6 pt-lg-7 pb-0 pb-lg-7">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('frontend/dist/img/a-b-testing.jpg') }}" alt="A/B Testing Strategies" class="card-img-top rounded-0">
                    </a>
                    <div class="card-body align-items-start text-left text-lg-center service-sec-cards">
                        <h4 class="h4-black-bold text-left text-lg-center">A/B Testing Strategies</h4>
                        <p class="p-18-grey text-left text-lg-center">
                            Make sure that your website and design works as well as possible across multiple platforms including smartphones and devices with effective A/B Testing.
                        </p>
                        <a href="{{ route('services') }}" class="btn btn-orange px-3">Request Services</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card d-none d-lg-block">
                    <div class="card-body align-items-start text-left text-lg-center service-sec-cards">
                        <h4 class="h4-black-bold text-left text-lg-center">E-Commerce Setup</h4>
                        <p class="p-18-grey text-left text-lg-center">
                            Everything you need to know to be able to build, design and manage your very own e-commerce platform suitable for a number of different brands and businesses.
                        </p>
                        <a href="{{ route('services') }}" class="btn btn-orange px-3">Request Services</a>
                    </div>
                    <a href="#">
                        <img src="{{ asset('frontend/dist/img/ecommerce-setup.jpg') }}" alt="E-Commerce Setup" class="card-img-top rounded-0">
                    </a>
                </div>
                <div class="card d-lg-none">
                    <a href="#">
                        <img src="{{ asset('frontend/dist/img/ecommerce-setup.jpg') }}" alt="E-Commerce Setup" class="card-img-top rounded-0">
                    </a>
                    <div class="card-body align-items-start text-left text-lg-center service-sec-cards">
                        <h4 class="h4-black-bold text-left text-lg-center">A/B Testing Strategies </h4>
                        <p class="p-18-grey text-left text-lg-center">
                            Make sure that your website and design works as well as possible across multiple platforms including smartphones and devices with effective A/B Testing.
                        </p>
                        <a href="{{ route('services') }}" class="btn btn-orange px-3">Request Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-page-banner3 pb-6 pb-lg-7">
    <img src="{{ asset('frontend/dist/img/service-banner3-bg.jpg') }}" alt="trems-bg-img" class="img-fluid bg-image d-none d-lg-block d-md-none">
    <img src="{{ asset('frontend/dist/img/service-banner3-mobbg.jpg') }}" alt="trems-bg-img" class="img-fluid bg-image d-block d-lg-none d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 p-md-0">
                <img src="{{ asset('frontend/dist/img/service-step1.jpg') }}" alt="User Interface Design" class="steps-service img-fluid d-none d-lg-block">
                <img src="{{ asset('frontend/dist/img/service-mobstep2.jpg') }}" alt="User Interface Design" class="w-100 img-fluid d-lg-none">
            </div>
            <div class="col-md-6 col-lg-6 p-md-0 background-offwhite marl-2 mb-5 mb-lg-0 marr-2 mr-lg-0 ml-lg-0">
                <div class="service-steps-content">
                    <h4 class="h4-white-bold-service mb-3">User Interface Design </h4>
                    <p class="p-18-grey-service text-left mb-3 d-none d-lg-block">Master and understand the importance of User Interface Design, so your website not only looks great but is easy to use.
                    </p>
                    <p class="p-18-grey-service text-left mb-3 d-lg-none">Master and understand the importance of User Interface Design, so your website not only looks great but is easy to use.</p>
                    <a href="{{ route('services') }}" class="btn btn-green px-3 mb-4 mb-lg-0">Request Services</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 p-md-0 background-offwhite marl-2 mb-5 mb-lg-0 marr-2 mr-lg-0 ml-lg-0 order-1 order-lg-0">
                <div class="service-steps-content">
                    <h4 class="h4-white-bold-service mb-3">User Experience Design </h4>
                    <p class="p-18-grey-service text-left mb-3 d-none d-lg-block">Learn how to build a website which is easy for the customer to navigate through, helping to boost traffic and sales for your business.
                    </p>
                    <p class="p-18-grey-service text-left mb-3 d-lg-none">Learn how to build a website which is easy for the customer to navigate through, helping to boost traffic and sales for your business.</p>
                    <a href="{{ route('services') }}" class="btn btn-green px-3 mb-4 mb-lg-0">Request Services</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 p-md-0">
                <img src="{{ asset('frontend/dist/img/service-step2.jpg') }}" alt="User Experience Design" class="steps-service img-fluid d-none d-lg-block">
                <img src="{{ asset('frontend/dist/img/service-mobstep1.jpg') }}" alt="User Experience Design" class="w-100 img-fluid d-lg-none">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 p-md-0">
                <img src="{{ asset('frontend/dist/img/service-step3.jpg') }}" alt="Illustration Design" class="steps-service img-fluid d-none d-lg-block">
                <img src="{{ asset('frontend/dist/img/service-mobstep3.jpg') }}" alt="Illustration Design" class="w-100 img-fluid d-lg-none">
            </div>
            <div class="col-md-6 col-lg-6 p-md-0 background-offwhite marl-2 marr-2 mr-lg-0 ml-lg-0">
                <div class="service-steps-content">
                    <h4 class="h4-white-bold-service mb-3">Illustration Design</h4>
                    <p class="p-18-grey-service text-left mb-3 d-none d-lg-block">Monotonectally synthesize synergistic
                        portals and<br> value-added paradigms.
                        Approp syndicate vertical<br>
                        content whereas.</p>
                    <p class="p-18-grey-service text-left mb-3 d-lg-none">Monotonectally synthesize
                        synergistic portals and value-added paradigms.
                        Approp syndicate vertical
                        content whereas.</p>
                    <a href="{{ route('services') }}" class="btn btn-green px-3 mb-4 mb-lg-0">Request Services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-from p-0 py-lg-5">
    <div class="container contact-box-bg px-0 px-lg-2">
        <div class="contact-box text-center">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-12 m-auto">
                    <div class="contact-us-form white-bg-col">
                        <div class="contact-head pt-lg-6 py-3 py-lg-3 pt-5">
                            <h3 class="h4-black-bold service-h4 mb-0 pl-3 pl-lg-0 text-left text-lg-center">Request A Service</h3>
                        </div>
                        <form class="form-group mb-0 mb-lg-3" id="requestform" action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data" onsubmit="return check_agree(this);">
                            @csrf
                            <input type="hidden" name="from_page" value="service">
                            <input type="hidden" name="message" id="message" class="form-control-lg" placeholder="Message" value="N/A">
                            <input type="hidden" id="phone" name="phone" class="form-control-lg" placeholder="Phone" value="N/A">

                            <div class="row px-lg-5 px-3">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                    <input type="text" id="fullname" name="fullname" class="form-control-lg" placeholder="Full Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                    <input type="email" id="email" name="email" class="form-control-lg" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                    <select name="service" id="service" class="form-control-lg">
                                        <option value="NULL" selected disabled>Select Service</option>
                                        <option value="E-Commerce Setup">E-Commerce Setup</option>
                                        <option value="A/B Testing Strategies">A/B Testing Strategies</option>
                                        <option value="User Interface Design">User Interface Design</option>
                                        <option value="User Experience Design">User Experience Design</option>
                                        <option value="Illustration Design">Illustration Design</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                    <input type="file" name="document" id="document" class="form-control-lg" placeholder="Upload Your Brief" required>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12 m-auto">
                                    <div class="c-checkbox">
                                        <label class="d-flex ml-3">
                                            <input type="checkbox" id="call" name="call">
                                            <label for="call"></label>
                                            <span class="check-text text-left"> By requesting a call, you are agreeing to our consultancy rates*</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12 m-auto">
                                    <div class="c-checkbox">
                                        <label class="d-flex ml-3">
                                            <input type="checkbox" id="terms" name="terms">
                                            <label for="terms"></label>
                                            <span class="check-text text-left"> By ticking this box, you agree with the <a href="{{ route('termsandconditions') }}" class=""> Terms and
                                                    Conditions </a> and <a href="{{ route('privacypolicy') }}" class=""> Privacy Policy </a></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12 m-auto">
                                    <div class="g-recaptcha" data-recaptcha data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                                    <button class="btn btn-green w-100 " type="submit"> Send message </button </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="service-hero-banner">
        <img src="{{ asset('frontend/dist/img/service-banner_img.jpg') }}" alt="service-bg-img" class="img-fluid bg-image d-none d-lg-block">
<img src="{{ asset('frontend/dist/img/service-banner_mobimg.jpg') }}" alt="service-bg-img" class="img-fluid bg-image d-lg-none">
<div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12 col-12">
            <div class="top-hero-content">
                <h1 class="h1-desktop-white d-none d-lg-block">
                    Bespoke design learning packages
                </h1>
                <h1 class="h1-desktop-white d-lg-none">
                    Bespoke<br> design learning <br>packages

                </h1>
                <p class="para-1 text-left d-none d-lg-block">
                    If you are looking to learn a specific set of skills or
                    advance in a certain area of design, then we offer bespoke
                    learning packages which will be tailored to your individual needs.

                </p>
                <p class="para-1 text-left d-lg-none">
                    If you are looking to learn a specific set of skills or
                    advance in a certain area of design, then we offer bespoke
                    learning packages which will be tailored to your individual needs.
                </p>
                <div class="d-block d-flex justify-content-start mt-lg-4 mt-4 ">
                    <a href="{{ route('services') }}" class="btn btn-red">Request a service</a>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12 col-12">

        </div>
    </div>
</div>
</section>
<section class="service-sec2 pt-0 pt-lg-5 pb-0">
    <!--<img src="{{ asset('frontend/dist/img/service-banner_img.jpg') }}" alt="service-bg-img" class="img-fluid bg-image">-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-12 pr-lg-2">
                <div class="top-hero-content">
                    <div class="row p-4 bg-offwhite mb-2 d-none d-lg-flex">
                        <div class="col-lg-6 col-md-6 align-self-center">
                            <h1 class="h2-desktop-black text-lg-left">
                                User<br> Experience<br> (UX)
                            </h1>
                        </div>
                        <div class="col-lg-6 col-md-6 align-self-center">
                            <p class="p-standard text-lg-left">
                                Learn how to effectively design and organise
                                a web page in order to enhance user experience
                                and someone’s emotional response to the design and
                                layout of a web page so that they can easily navigate
                                through the website.

                            </p>
                            <div class="d-block d-flex justify-content-start mt-2 mt-lg-2">
                                <a href="{{ route('services') }}" class="btn btn-red">Request a service</a>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none d-lg-block">
                        <div class="col-12 p-lg-0">
                            <img src="{{ asset('frontend/dist/img/grass_and_laptop.jpg') }}" alt="grass with laptop" class="img-fluid w-100 d-none d-lg-block">
                        </div>
                    </div>

                    <div class="row d-lg-none">
                        <div class="col-12 p-0 p-lg-0">
                            <img src="{{ asset('frontend/dist/img/grass_and_laptopmob.jpg') }}" alt="grass with laptop" class="img-fluid w-100 d-lg-none">
                        </div>
                    </div>
                    <div class="row p-2 p-lg-4 bg-white mb-5 mb-lg-2 d-lg-none">
                        <div class="col-lg-5 col-md-6 align-self-center">
                            <h1 class="h2-desktop-black text-left text-lg-left mt-4 mt-lg-0">
                                User Experience<br> (UX)
                            </h1>
                        </div>
                        <div class="col-lg-7 col-md-6 align-self-center">
                            <p class="p-standard text-left text-lg-left">
                                Learn how to effectively design and organise a web
                                page in order to enhance user experience and someone’s
                                emotional response to the design and layout of a web page
                                so that they can easily navigate through the website.

                            </p>
                            <div class="d-block d-flex justify-content-start mt-2 mt-lg-2">
                                <a href="{{ route('services') }}" class="btn btn-red">Request a service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-12 pl-lg-3">
                <!--<img src="{{ asset('frontend/dist/img/colourfulllights.jpg') }}" alt="lights" class="img-fluid bg-image">-->
                <div class="row h-100">
                    <!--<div class="col-lg-12 colourfulllights ml-lg-2">-->
                    <div class="col-lg-12 colourfulllights">
                        <div class="white-box-bglights m-2">
                            <div class="row p-3 p-lg-4 user-experience bg-offwhite mb-2 m-0 m-lg-2">
                                <div class="col-12 align-self-center">
                                    <h1 class="h2-desktop-black text-left text-lg-left d-none d-lg-block">
                                        Content Management Systems

                                    </h1>
                                    <h1 class="h2-desktop-black text-left text-lg-left d-lg-none mb-0">
                                        Content <br>Management Systems
                                    </h1>
                                </div>
                                <div class="col-12 align-self-center">
                                    <p class="p-standard text-left text-lg-left d-none d-lg-block">
                                        Learn how to streamline the process of uploading
                                        regular content on your website with Content Management
                                        Systems such as Wordpress and Webflow.

                                    </p>
                                    <p class="p-standard text-left text-lg-left d-lg-none">
                                        Learn how to streamline the process of uploading
                                        regular content on your website with Content Management
                                        Systems such as Wordpress and Webflow.

                                    </p>
                                    <div class="d-block d-flex justify-content-start mt-2 mt-lg-2">
                                        <a href="{{ route('services') }}" class="btn btn-red">Request a service</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row min-vh-50 mt-lg-2 service-old-building">
            <div class="col-lg-5 col-md-6 col-sm-12 col-12 p-3 pt-lg-5 pb-lg-5 pl-lg-5 pr-lg-0 align-self-center">
                <div class="white-box-buildings old-place-bg">
                    <div class="row pt-4 pb-4 p-3 p-lg-5 bg-offwhite mb-2 m-2">
                        <div class="col-12 align-self-center p-lg-0">
                            <h1 class="h2-desktop-black text-left text-lg-left">
                                Software Masterclasses
                            </h1>
                        </div>
                        <div class="col-12 align-self-center p-lg-0">
                            <p class="p-standard text-left text-lg-left d-none d-lg-block">
                                Study the best website design software in depth and
                                discover which website design software platforms best
                                suit you and your needs.

                            </p>
                            <p class="p-standard text-left text-lg-left d-lg-none">
                                Study the best website design software in depth and
                                discover which website design software platforms best
                                suit you and your needs.

                            </p>
                            <div class="d-block d-flex justify-content-start mt-2 mt-lg-2">
                                <a href="{{ route('services') }}" class="btn btn-red">Request a service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-sec3 pt-0 pb-0 pb-lg-7 pt-lg-2">
    <!--<img src="{{ asset('frontend/dist/img/service-banner_img.jpg') }}" alt="service-bg-img" class="img-fluid bg-image">-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0 p-lg-0 pr-lg-1 align-self-center">
                <div class="top-hero-content2 chess-img">
                    <h1 class="h2-desktop-white a-b-testing text-center text-lg-left">
                        User Interface (UI)
                    </h1>
                    <p class="para-1 text-center text-lg-left">
                        Learn how to master User Interface which will help
                        you to guide the audience through a web page using
                        specific design elements such as web pages, buttons,
                        menus and micro-interactions.

                    </p>
                    <div class="d-block d-flex justify-content-center justify-content-lg-start mt-2 mt-lg-2">
                        <a href="{{ route('services') }}" class="btn btn-red">Request a service</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0 p-lg-0 pl-lg-1 align-self-center">
                <!--<img src="{{ asset('frontend/dist/img/colourfulllights.jpg') }}" alt="lights" class="img-fluid bg-image">-->
                <div class="top-hero-content3 headphone-img">
                    <h1 class="h2-desktop-white e-commerce text-lg-left">
                        Typography and Graphic Design

                    </h1>
                    <p class="para-1 text-lg-left">
                        Enhance your website design work with graphic design
                        and typography skills to be able to create hand drawn
                        typography, custom illustrations and other individual
                        creative flourishes.

                    </p>
                    <div class="d-block d-flex justify-content-center justify-content-lg-start mt-2 mt-lg-2">
                        <a href="{{ route('services') }}" class="btn btn-red">Request a service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-from pt-lg-0  pt-0 pb-lg-6 pb-4">
    <div class="service-us-bg"></div>
    <div class="container service-box-bg p-0">
        <div class="service-box text-center">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-12 col-12 m-auto">
                    <div class="service-us-form p-3 p-lg-0 primary-bg-col">
                        <div class="service-head py-3">
                            <h3 class="select-service-head">Select a service</h3>
                        </div>
                        <form class="form-group" id="requestform" action="{{ route('contactus.store') }}" method="post" onsubmit="return check_agree(this);">
                            @csrf
                            <input type="hidden" name="from_page" value="service">
                            <input type="hidden" name="message" id="message" value="N/A">
                            <input type="hidden" id="phone" name="phone" class="form-control-lg" value="N/A">

                            <div class="row px-lg-4">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                    <lable class="legend">Full Name</lable>
                                    <input type="text" id="fullname" name="fullname" class="form-control-lg" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                    <lable class="legend">Email address</lable>
                                    <input type="email" id="email" name="email" class="form-control-lg" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                    <lable class="legend">Service Selection</lable>
                                    <select name="service" id="service" class="form-control-lg">
                                        <option value="NULL" selected disabled>Select Service</option>
                                        <option value="E-Commerce Setup">E-Commerce Setup</option>
                                        <option value="A/B Testing Strategies">A/B Testing Strategies</option>
                                        <option value="User Interface Design">User Interface Design</option>
                                        <option value="User Experience Design">User Experience Design</option>
                                        <option value="Illustration Design">Illustration Design</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                    <lable class="legend">Upload Your Brief</lable>
                                    <!--<input name="message" id="message" class="form-control-lg" required>-->
                                    <input type="file" id="document" name="document" class="form-control-lg" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="c-checkbox">
                                        <label class="d-flex ml-3">
                                            <input type="checkbox" id="call" name="call">
                                            <label for="call"></label>
                                            <span class="check-text text-left">By requesting a call, you are agreeing to our consultancy rates*</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="c-checkbox">
                                        <label class="d-flex ml-3">
                                            <input type="checkbox" id="terms" name="terms">
                                            <label for="terms"></label>
                                            <span class="check-text text-left">By ticking this box, you agree with the <a href="{{ route('termsandconditions') }}" class="col-red"> Terms and
                                                    Conditions </a> and <a href="{{ route('privacypolicy') }}" class="col-red"> Privacy Policy </a></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                                    <div class="g-recaptcha" data-recaptcha data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-0 mb-lg-3">
                                    <button class="btn btn-red w-100 " type="submit">Submit request</button </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>--}}
@endsection

@section('script')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function tog(v) {
        return v ? 'addClass' : 'removeClass';
    }
    $(document).on('input', '.clearable', function() {
        $(this)[tog(this.value)]('x');
    }).on('mousemove', '.x', function(e) {
        $(this)[tog(this.offsetWidth - 18 < e.clientX - this.getBoundingClientRect().left)]('onX');
    }).on('touchstart click', '.onX', function(ev) {
        ev.preventDefault();
        $(this).removeClass('x onX').val('').change();
    });
</script>

{{--<script>

    window.addEventListener("DOMContentLoaded", function(e) {
        
    var myForm = document.getElementById("requestform");
     
    var checkForm = function(e) {
      if(!this.call.checked) {
        swal("Please indicate that you accept the consultancy rates");
        this.call.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
      else if(!this.terms.checked) {
        swal("Please indicate that you accept the Terms and Conditions");
        this.terms.focus();
        e.preventDefault(); // equivalent to return false
        return;
      } 
      else if(!jQuery('#g-recaptcha-response').val()){
        swal('Please fill up the captcha');
        $('.recaptcha-checkbox-border').focus();
        e.preventDefault();
        return;
      }
    };

    // attach the form submit handler
    myForm.addEventListener("submit", checkForm, false);
    

    var myCheckbox = document.getElementById("terms");
    var myCheckboxMsg = "Please indicate that you accept the Terms and Conditions";

    // set the starting error message
    myCheckbox.setCustomValidity(myCheckboxMsg);

    // attach checkbox handler to toggle error message
    myCheckbox.addEventListener("change", function(e) {
      this.setCustomValidity(this.validity.valueMissing ? myCheckboxMsg : "");
    }, false);
      
      
    var myCheckbox2 = document.getElementById("call");
    var myCheckboxMsg2 = "Please indicate that you accept the consultancy rates";

    // set the starting error message
    myCheckbox2.setCustomValidity(myCheckboxMsg2);

    // attach checkbox handler to toggle error message
    myCheckbox2.addEventListener("change", function(e) {
      this.setCustomValidity(this.validity.valueMissing ? myCheckboxMsg2 : "");
    }, false);

  }, false);
  

  </script>--}}
<script>
    function check_agree(form) {
        var response = grecaptcha.getResponse();
        if (form.terms.checked && form.call.checked && response) {
            return true;
        } else if (!form.call.checked) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please indicate that you are agreeing to our consultancy rates*'
            })
        } else if (!form.terms.checked) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please indicate that you accept the Terms and Conditions.'
            })
        } else if (response.length == 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select Captcha'
            })
            return false;
        }
        return false;
    }
</script>
@endsection