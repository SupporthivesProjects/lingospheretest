@extends('frontend.layouts.app')

@section('content')


{{--NEW CODE START HERE!!  --}}

    <section class="terms-div container">
        <h1 class="terms-txt">Terms & Conditions</h1>
        <div class="tt-div">
            
            <p data-aos="fade-up">Our mission is to deliver precise, dependable, and efficient translations that bridge language gaps and enhance global communication. To ensure clarity on our services, usage policies, and your rights and obligations, please review the following Terms and Conditions.</p>
        </div>
        <div class="tt-div">
            
            <p data-aos="fade-up">By accessing or using www.lingosphere.co, you agree to these Terms and Conditions. If you disagree with any part of these Terms, please refrain from using our services. These Terms govern your interaction with our website, services, and related applications.
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Amendments to Terms
</h4>
            <p data-aos="fade-up">We may update or modify these Terms and Conditions at our discretion. We encourage you to review this page regularly to stay informed of any changes. Continued use of our website after any changes implies acceptance of the updated terms.
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Website Usage Terms
</h4>
            <p data-aos="fade-up">Access to and use of www.lingosphere.co, including its content, features, and services, are governed by these Terms of Use. By visiting or using our site, you agree to comply with these terms. If you disagree, please do not use our website.
<br>Our website (www.lingosphere.co) and services are operated by SUNZAR SERVICES LTD with a registered address in Nikokreontos, 2
NICE DREAM, 6th floor, Flat/Office 601
1066, Nicosia, Cyprus
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Age Restriction
</h4>
            <p data-aos="fade-up">You must be at least 18 years old to use our website and services. By accessing www.lingosphere.co, you confirm that you meet this age requirement. If you are under 18, please do not use our website.
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Our Services, User Access, and Quotations
</h4>
            <p data-aos="fade-up">When placing an order, specify your desired delivery time and document type. For multiple documents, provide details about each document’s purpose to ensure accurate and timely translations. If using our services, include a brief statement about the intended use of the translation. Without this information, we will assume the translation is for informational purposes only. <br>Quotations are based on the details you provide, including the document specifics and intended use. If the information is insufficient, we may adjust the quotes as necessary.
            
            <p data-aos="fade-up"><b>Order Specifications</b> 
</h4>
            <p data-aos="fade-up">When placing an order, clients must indicate the urgency of the requested translation by selecting one of the following delivery options:

            <p <br> <b>Non-Urgent Translation:</b>  Completed within 5-7 business days.
<br> <b>Urgent Translation</b>: Completed within 36-48 hours.

<p data-aos="fade-up">For urgent translation requests, clients must ensure that all source materials provided at the time of the order are accurate and complete.

<p data-aos="fade-up">The company will not be held responsible for delays caused by incorrect source materials requiring further amendments.
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Payments and Refunds
</h4>
            <p data-aos="fade-up">Payments must be made in full at the time of purchase. Non-compliance may result in suspension of current and future orders. Payments are processed securely through an external system, and translations will be withheld until payment is completed. 
<br>We accept major credit and debit cards, with payment appearing as LSSS, CYPRUS on statements.
<br>Refunds are granted only under exceptional circumstances and at our discretion. If a refund is approved, allow up to 10 business days for the amount to appear in your account.
</p>

 </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Cancellation Policy
</h4>
            <p data-aos="fade-up">To cancel your order, please ensure the cancellation is made before our translation experts begin working or before any documents are dispatched. Once the process has started, cancellations will no longer be possible.
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Governing Law and Jurisdiction
</h4>
            <p data-aos="fade-up">These Terms and Conditions are governed by the laws of Cyprus. Any disputes related to the use of our services or website will be exclusively resolved by the courts of Cyprus. By using our services, you consent to the jurisdiction of these courts for any legal proceedings arising from these Terms and Conditions.
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Liability and Indemnification
</h4>
            <p data-aos="fade-up">While we strive to provide accurate and reliable translations, we cannot guarantee the accuracy, completeness, or suitability of translated content for specific purposes. We are not liable for any direct, indirect, or consequential damages, including loss of profits, data, or goodwill, arising from the use of our services. You agree to indemnify and hold us harmless from any claims, liabilities, damages, costs, and expenses (including legal fees) related to your use of our services, violations of these Terms, or infringements of rights.
</p>
        </div>
        <div class="tt-div">
            <h4 data-aos="fade-up">Contact Information
</h4>
            <p data-aos="fade-up">For more details about our services or these Terms and Conditions, please contact us at support@lingosphere.co. We are here to assist you and address any concerns.
<br> Thank you for choosing LINGOSPHERE.
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
