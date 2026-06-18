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
                            <p style="font-size: 16px; font-weight: 400px; color:#232323;text-align: center;line-height: 150%;font-family:Arial;"> Dear {{ $data['fullname'] }},<br><br>
                            This email is to confirm your submission of the contact form. Please allow for 48 hours for us to respond. In the meantime, why not browse our services.
                               </p>
                               <table width="100%" cellspacing="0" cellpadding="10" border="0" style="border-collapse: collapse;margin-top:24px;">
                                <td align="center">
                                    <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ route('request_translation') }}" style="margin-bottom:25px;margin-top:10px;height:50px; v-text-anchor:middle; width:190px;" arcsize="0%"  stroke="f" fillcolor="#A90000"><w:anchorlock/><center style="padding-top:20px;padding-bottom:20px;color:#000000;font-size:20px"><![endif]-->
                                     <a href="{{ route('request_translation') }}" style="color:#FFFFFF;background:#0D6B68;padding:16px 24px;font-size: 16px;font-weight:400;text-decoration:none;font-family:Arial;line-height:22px;border-radius:100px;text-transform:capitalize;">Read More</a>
                                     <!--[if mso]></center></v:roundrect><![endif]-->
                                </td>   
                               </table> 
                             </div>
                        </td>
                    </tr>
                               
                    <tr>
                        <td>
                            <!--[if mso]><style>.outlook-back {background: #401620 !important;height: 160px;}</style><![endif]-->
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
                            </table>
                            <!-- Footer -->
                        </td>
                    </tr>     
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
