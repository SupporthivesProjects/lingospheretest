@php
$order = $array['order'];
$generalsetting = \App\GeneralSetting::first();
$shipping_address = json_decode($order->shipping_address);
$baseUrl = url('/');
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
                        <td style="padding: 20px 60px;">
                            <div>
                                <h1 style="font-size:24px; font-weight: 700; text-align: center;color:#0F0F0F;font-family:Arial;text-transform:capitalise;">Transaction confirmation</h1>
                                <p style="font-size: 16px; font-weight: 500px; color:#232323;text-align: center;line-height: 150%;font-family:Arial;">Dear {{ $shipping_address->name }},
                                    Thank you for placing your order with us.<br>
                                    Below is a summary of your order.</p>
                                    <table width="100%" cellspacing="0" cellpadding="10" border="0" style="border-collapse: collapse;margin-top:24px;">
                                <td align="center">
                                     <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ route('purchase_history.index') }}" style="margin-bottom:25px;margin-top:10px;height:50px; v-text-anchor:middle; width:190px;" arcsize="0%"  stroke="f" fillcolor="#A90000"><w:anchorlock/><center style="padding-top:20px;padding-bottom:20px;color:#000000;font-size:20px"><![endif]-->
                                     <a href="{{ route('purchase_history.index') }}" style="color:#FFFFFF;background:#0D6B68;padding:16px 24px;font-size: 16px;font-weight:400;text-decoration:none;font-family:Arial;line-height:22px;border-radius:100px;text-transform:capitalize;">View order online</a>
                                     <!--[if mso]></center></v:roundrect><![endif]-->
                                </td>   
                               </table> 
                             </div>

                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 40px;padding-bottom:40px;">
                            <p style="padding:5px;font-size: 20px; font-weight: 700;text-transform:uppercase;font-family:Arial;border-top:1px solid #656565;"></p>
                            <p style="font-size: 16px; font-weight:700;text-transform:capitalize;font-family:Arial;color:#0E0E0E;text-align:center;">Billing Details:</p>
                            <table>
                                <tr style="font-size: 16px; font-weight: 400; color:#656565;  padding: 5px;line-height:26px;">
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->name }}</td>
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->email }}</td>
                                </tr>
                                <tr style="font-size: 16px; font-weight: 400; color:#656565;  padding: 5px;line-height:26px;">
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->address }}</td>
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->phone }}</td>
                                </tr>
                            </table>
                            <table style="margin-top:40px;background:#E3E3E3;padding:24px;">
                                <tr>
                                    <td style="height:16px;">
                                    <p style="display:flex;justify-content:space-between;padding:6px 16px;">
                                        <span style="color:#070034;font-size:20px;font-weight: 700;font-family:Arial;">
                                            Product
                                        </span>
                                        <span style="color:#070034;font-size:20px;font-weight: 700;font-family:Arial;margin-left:100px;">
                                            Quantity
                                        </span>
                                        <span style="color:#070034;font-size:20px;font-weight: 700;font-family:Arial;">
                                            Price
                                        </span>
                                    </p>
                                    </td>
                                   </tr>
                                   @php
                          
                                   @endphp
                                   
                                    @foreach($order->orderDetails as $key => $orderDetail)
                                    @if($orderDetail->product != null)
                
                                    @php
                                    $total_value_amount[] = bcdiv(convertPrice($orderDetail->price), 1, 2);
                                    $total = array_sum($total_value_amount);
                                    $total = number_format($total, 2, '.', '');
                                    @endphp
                               <tr>
                                <td style="background: #FFFFFF;padding:6px 16px;">
                                    <div style="width:425px;">
                                        <p style="color:#1A1A1A;font-size:20px;font-weight: 700;font-family:Arial;text-align:center;line-height:29px;display:flex;justify-content:space-between;">
                                            <span>{{ $orderDetail->product->name }}</span><span style="font-weight: 500;">1</span><span>{{ single_price($orderDetail->price) }}</span>
                                        </p>
                                        <p>
                                         <span style="color:#10142A;font-size:16px;font-weight: 700;font-family:Arial;">From:</span>
                                         <span style="color:#232323;font-size:15px;font-weight: 400;font-family:Arial;">{{ $orderDetail->from_lang }}</span>
                                        </p>
                                        <p>
                                            <span style="color:#10142A;font-size:16px;font-weight: 700;font-family:Arial;">To:</span>
                                            <span style="color:#232323;font-size:15px;font-weight: 400;font-family:Arial;">{{ $orderDetail->to_lang }}</span>
                                           </p>
                                           <p>
                                            <span style="color:#10142A;font-size:16px;font-weight: 700;font-family:Arial;">Translate File:</span>
                                            <span style="color:#232323;font-size:15px;font-weight: 400;font-family:Arial;"><a download href="{{ $baseUrl.'/'.$orderDetail->translation_file }}">Translation File</a></span>
                                           </p>
                                           <p>
                                            <span style="color:#10142A;font-size:16px;font-weight: 700;font-family:Arial;">No of Pages:</span>
                                            <span style="color:#232323;font-size:15px;font-weight: 400;font-family:Arial;">{{ $orderDetail->service_no_of_pages }} page(s)</span>
                                           </p>
                                           <p>
                                            <span style="color:#10142A;font-size:16px;font-weight: 700;font-family:Arial;">No of Words: </span>
                                            <span style="color:#232323;font-size:15px;font-weight: 400;font-family:Arial;">{{ $orderDetail->service_no_of_words }} Word(s)</span>
                                            <!--<span style="color:#0D6B68;font-size:15px;font-weight: 700;font-family:Arial;">+£24.00</span>-->
                                           </p>
                                           <p>
                                            <span style="color:#10142A;font-size:16px;font-weight: 700;font-family:Arial;">Delivery Date & Time:</span>
                                            <span style="color:#0D6B68;font-size:15px;font-weight: 400;font-family:Arial;">{{ $orderDetail->delivery_datetime }}</span>
                                           </p>
                                           <p>
                                            <span style="color:#10142A;font-size:16px;font-weight: 700;font-family:Arial;">Additional Information: </span>
                                            <span style="color:#232323;font-size:15px;font-weight: 400;font-family:Arial;">{{ $orderDetail->message }}</span>
                                           </p>
                                    </div>
                                </td>
                               </tr>
                               <tr>
                                <td style="height: 24px;">

                                </td>
                               </tr>
                               @endif
                               @endforeach
                        
                               <tr>
                                <td style="border-top: 2px solid #DBDAE6;padding:0px;">
                                    <p style="display: flex;justify-content:space-between;margin-bottom:0px;">
                                        <span style="color:#1A1A1A;font-size:28px;font-weight: 700;font-family:Arial;text-align:center;line-height:45px;">
                                            Total Paid
                                        </span>
                                        <span style="color:#0D6B68;font-size:28px;font-weight: 700;font-family:Arial;text-align:center;line-height:45px;">
                                            {{ single_price($order->grand_total) }}
                                        </span>
                                    </p>
                                </td>
                               </tr>
                            </table>  
                        </td>
                    </tr>
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
