<footer class="footer">
    <div class="footer_top">
        <div class="footer_top_one">
            <img src="{{ asset('frontend/Lingosphere/img/footer_logo.svg') }}" alt="" class="img-fluid mobile_none">
            <img src="{{ asset('frontend/Lingosphere/img/footer_mobo_logo.svg') }}" alt="" class="img-fluid desktop_none">
            <img src="{{ asset('frontend/Lingosphere/img/masterCard.svg') }}" alt="" class="img-fluid">
        </div>
        <div class="footer_top_two">
            <div class="footer_top_two_top">
                <button class="btn footer_link" onclick="window.location.href='{{ route('request_translation') }}'">Our Services</button>
                <img src="{{ asset('frontend/Lingosphere/img/circle.svg') }}" alt="" class="img-fluid mobile_none">
                <button class="btn footer_link" onclick="window.location.href='{{ route('aboutus') }}'">About us</button>
                <img src="{{ asset('frontend/Lingosphere/img/circle.svg') }}" alt="" class="img-fluid mobile_none">
                <button class="btn footer_link" onclick="window.location.href='{{ route('careers') }}'">Join us</button>
                <img src="{{ asset('frontend/Lingosphere/img/circle.svg') }}" alt="" class="img-fluid mobile_none">
                <button class="btn footer_link" onclick="window.location.href='{{ route('faqs') }}'">FAQ's</button>
                <img src="{{ asset('frontend/Lingosphere/img/circle.svg') }}" alt="" class="img-fluid mobile_none">
                <button class="btn footer_link" onclick="window.location.href='{{ route('contactus') }}'">Support</button>
                <img src="{{ asset('frontend/Lingosphere/img/circle.svg') }}" alt="" class="img-fluid mobile_none">
                <button class="btn footer_link" onclick="window.location.href='{{ route('termsandconditions') }}'">Terms & Conditions</button>
                <img src="{{ asset('frontend/Lingosphere/img/circle.svg') }}" alt="" class="img-fluid mobile_none">
                <button class="btn footer_link" onclick="window.location.href='{{ route('privacypolicy') }}'">Privacy Policy</button>
            </div>
            <div class="dotted desktop_none"></div>
            <div class="footer_top_two_bottom">
                <button class="btn footer_link">SUNZAR SERVICES LTD,
<br>
<!--Elaionon, 75-->
<!--<br>-->
<!--Strovolos, 2060, Nicosia, Cyprus-->
<!--<br>-->
<!--HE455113-->
Nikokreontos, 2 <br>
NICE DREAM, 6th floor, Flat/Office 601  <br>
1066, Nicosia, Cyprus
</button>
                <img src="{{ asset('frontend/Lingosphere/img/circle.svg') }}" alt="" class="img-fluid mobile_none">
                <button class="btn footer_link">support@lingosphere.co</button>
                {{--<img src="{{ asset('frontend/Lingosphere/img/circle.svg') }}" alt="" class="img-fluid mobile_none">--}}
                {{--<button class="btn footer_link">TBC</button>--}}
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <p class="footer_copyright">©Lingosphere. {{ date('Y') }} All right reserved.</p>
    </div>
</footer>