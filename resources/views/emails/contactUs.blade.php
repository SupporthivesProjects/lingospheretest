@php
    $data = $array['data'];
@endphp
<!DOCTYPE html>
<html>
<head>
    <title>Your Email Title</title>
</head>
<body>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center" bgcolor="#f2f2f2" style="padding: 20px 0;">
                <table width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" style="border-collapse: collapse; box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 0px;">
                            <img src="{{ asset('frontend/Lingosphere/img/header.png') }}" alt="" style="margin: auto; display: block;height:88px;">
                        </td>
                    </tr>
                    <!-- Header End -->
                   
                    <!-- Content -->
                    <tr>
                        <td style="padding: 20px 100px;padding:40px;">
                            <div>
                            <h1 style="font-size:28px; font-weight: 700; text-align: center;color:#070034;font-family:Arial;text-transform:capitalise;">
                                    @php
                                    $pageMessage = ($data["from_page"] == "service")
                                    ? "Custom Package Request"
                                    : (($data["from_page"] == "careers")
                                    ? "Careers Form Confirmation"
                                    : "Contact Form Confirmation");
                                    echo $pageMessage;
                                    @endphp
                            
                            </h1>
                            <p style="font-size: 16px; font-weight: 400px; color:#232323;text-align: center;line-height: 150%;font-family:Arial;"> Dear Admin, Details Submitted by {{ $data['fullname'] }},
                               </p>
                               <table width="100%" cellspacing="0" cellpadding="10" border="0" style="border-collapse: collapse;margin-top:24px;">
                                    <tr>
                                        <td class="gry-color small strong small-text">Full Name:</td>
                                        <td class="text-right small-text">{{ $data['fullname'] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="gry-color small small-text">Email:</td>
                                        <td class="text-right small-text">{{ $data['email'] }}</td>
                                    </tr>
                                    {{--<tr>
                                        <td class="gry-color small small-text">Phone:</td>
                                        <td class="text-right small-text">{{ $data['phone'] }}</td>
                                    </tr>--}}
                                    @if(isset($data['address']))
                                        <tr>
                                            <td class="gry-color small small-text">Address:</td>
                                            <td class="text-right small-text">{{ $data['address'] }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td class="gry-color small small-text">Message:</td>
                                        <td class="text-right small-text">{{ $data['message'] }}</td>
                                    </tr>
                                    @if(isset($data['medium']))
                                        <tr>
                                            <td class="gry-color small small-text">Medium:</td>
                                            <td class="text-right small-text">{{ $data['medium'] }}</td>
                                        </tr>
                                    @endif
                                     @if(isset($data['native_lang']))
                                        <tr>
                                            <td class="gry-color small small-text">Native Language:</td>
                                            <td class="text-right small-text">{{ $data['native_lang'] }}</td>
                                        </tr>
                                    @endif
                                     @if(isset($data['pairs_lang']))
                                        <tr>
                                            <td class="gry-color small small-text">Pairs Langauge:</td>
                                            <td class="text-right small-text">{{ $data['pairs_lang'] }}</td>
                                        </tr>
                                    @endif
                                     @if(isset($data['rate_per']))
                                        <tr>
                                            <td class="gry-color small small-text">Rate as per Source Words:</td>
                                            <td class="text-right small-text">{{ $data['rate_per'] }}</td>
                                        </tr>
                                    @endif
                                     @if(isset($data['lang_pairs_rate']))
                                        <tr>
                                            <td class="gry-color small small-text">Pairs Language:</td>
                                            <td class="text-right small-text">{{ $data['lang_pairs_rate'] }}</td>
                                        </tr>
                                    @endif
                            
                             </table> 
                             </div>
                        </td>
                    </tr>
                    <!-- Content End-->
                    <!-----------Footer----------->
                    <tr>
                        <td>
                            <table width="100%" cellspacing="0" cellpadding="" border="0px" style="border-collapse: collapse;"> 
                                <tr style=" background:#0D6B68;height:157px;padding:50px;background-size:cover;">
                                    <td style="text-align:center;"><img src="{{ asset('frontend/Lingosphere/img/Logo.png') }}" alt="">
                                   
                                    </td> 
                                    <td style="text-align:right;">
                                        <p style="font-size: 16px; font-weight: 700; color:#FFFFFF;font-style: normal;font-family:Arial;line-height:24px;padding-right:40px;">
                                        support@lingosphere.co<br>
                                      SUNZAR SERVICES LTD,
<br>
Nikokreontos, 2 <br>
NICE DREAM, 6th floor, Flat/Office 601 <br>
1066, Nicosia, Cyprus
                                        </p>
                                    </td>           
                                </tr>
                                <tr>              
                            </table>
                        </td>
                    </tr> 
                    <!-----------Footer End----------->   
                </table>
            </td>
        </tr>
    </table>
</body>
</html>