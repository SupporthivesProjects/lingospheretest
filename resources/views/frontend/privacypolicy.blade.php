@extends('frontend.layouts.app')
<!--<style>
    ul li {
        color: #587B5D;
        font-family: "DM Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        margin-bottom: 32px;
}
    }
</style>-->

@section('content')


{{--NEW CODE START HERE!!  --}}
    <section class="terms-div container">
        <h1 class="terms-txt">Privacy Policy</h1>
        <div class="tt-div">
            
            <p data-aos="fade-up">
                
            At LINGOSPHERE, we are dedicated to safeguarding your privacy and securing your personal information. This Privacy Policy outlines our practices regarding the collection, use, disclosure, and protection of the information you provide when you visit our website,<a href="https://lingosphere.co/"> www.lingosphere.co</a>, or use our translation services. We encourage you to review this policy to understand how we handle your personal data. SUNZAR SERVICES LTD operates our website (www.lingosphere.co) and services with a registered address in Nikokreontos, 2
NICE DREAM, 6th floor, Flat/Office 601
1066, Nicosia, Cyprus. <br>
                By accessing or using our website and services, you consent to the practices described in this Privacy Policy. If you have any questions or concerns about how we manage your 
                information, please contact us using the details provided at the end of this policy. We appreciate your trust in handling your personal data. <br>
                We may update this Privacy Policy at times to reflect changes in our services or updates to applicable laws and regulations. We advise you to review this policy regularly to 
                stay informed about our privacy practices. Continued use of our services after updates signifies your acceptance of the revised terms.<br>    



            </p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Collection and Use of Personal Information
</h4>
            <p data-aos="fade-up">We collect only the essential personal data required to provide our services and fulfil our legal obligations. This includes basic contact details such as your name, email address, and phone number, which help us communicate with you regarding our services. We also process payment information securely, including credit card details, solely for transaction purposes.
<br>Additionally, we collect information about your use of our services and details about the device you use to access our website, such as IP address, browser type, and operating system. Any additional data provided or collected as required by law is handled with the utmost care. We ensure your personal data is processed lawfully, securely, and confidentially.
<br> Your personal information is used to deliver our services, communicate with you, enhance your experience, and fulfil legal obligations. 
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Use of Cookies
</h4>
            <p data-aos="fade-up">We use cookies on our website to improve your browsing experience and the functionality of our site, www.lingosphere.co. Cookies are small text files stored on your device that help us remember your preferences, analyse interactions with our website, and optimise performance.
<br>We use both session cookies, which expire when you close your browser, and persistent cookies, which remain on your device for a set period or until deleted. 
<br>By using our website, you consent to our use of cookies. You can manage your cookie preferences through your browser settings and delete cookies as needed. Note that disabling cookies may impact the functionality of our website and your user experience. 
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Child Privacy
</h4>
            <p data-aos="fade-up">Our website, www.lingosphere.co, does not knowingly collect personal information from individuals under 18. If we discover that we have inadvertently collected data from a user under 18, we will promptly delete it. If you believe we may have collected such data without consent, please get in contact with us immediately for appropriate action.
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Safeguarding Your Personal Information
</h4>
            <p data-aos="fade-up">We prioritise the security of your personal data and use robust technical and organisational measures to prevent unauthorised access, disclosure, alteration, or destruction of the data. Although we maintain high-level security, please be aware that no website can be entirely immune to cyber threats. Therefore, your use of our website is at your own risk.
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Your Legal Rights
</h4>
            <p data-aos="fade-up">You have the right to access your personal data and request information on how it is processed. You can request corrections if your data is inaccurate or incomplete. In certain cases, such as when the data is no longer needed, you may request deletion. You also have the right to restrict data processing and receive a copy of your data. Additionally, you can object to data processing, including for marketing purposes.
<br>For more information about these rights or to exercise them, please contact us using the information provided. 
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Contact Information
</h4>
            <p data-aos="fade-up">For inquiries regarding your data rights or questions about our Privacy Policy, please contact us at support@lingosphere.co. We are committed to addressing your concerns and providing support as needed.
</p>
        </div>
       
    </section>
{{--NEW CODE END HERE!!  --}}


@endsection

@section('script')

<!--new script lingosphere -->
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
</script>
<script>
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