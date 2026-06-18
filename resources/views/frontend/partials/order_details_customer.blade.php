<script>
    $('.btn-close').on('click', function() {
    $('#order_details').modal('hide');
});
</script><div class="modal-header">
    <h5 class="modal-title c-black strong-600 heading-5">{{__('Order id')}}: {{ $order->code }}</h5>
    <button type="button" class="close btn btn-close" data-dismiss="modal" aria-label="Close" style="min-width: 25px;">
    </button>
</div>
<style>

    .order-details {
    display: flex;
    flex-direction: column;
}

.detail {
    display: flex;
    margin-bottom: 8px;
}

.detail b {
    min-width: 120px;
    margin-right: 8px;
}

.detail p {
    margin: 0;
}

.detail p span {
    font-weight: bold;
}

</style>
@php
    //dump($order);
    $status = $order->orderDetails->first()->delivery_status;
    $refund_request_addon = \App\Addon::where('unique_identifier', 'refund_request')->first();
    $baseUrl = url('/');
@endphp

<div class="modal-body">
    <div class="pt-6">
        
        <ul class="process-steps c-black clearfix" style="margin-top: 150px;">
            <li @if($status == 'pending') class="active" @else class="done" @endif>
                <div class="icon">1</div>
                <div class="title">{{__('Order placed')}}</div>
            </li>
            <li @if($status == 'on_review') class="active" @elseif($status == 'on_delivery' || $status == 'delivered') class="done" @endif>
                <div class="icon">2</div>
                <div class="title">{{__('On review')}}</div>
            </li>
            <li @if($status == 'on_delivery') class="active" @elseif($status == 'delivered') class="done" @endif>
                <div class="icon">3</div>
                <div class="title">{{__('On delivery')}}</div>
            </li>
            <li @if($status == 'delivered') class="done" @endif>
                <div class="icon">4</div>
                <div class="title">{{__('Delivered')}}</div>
            </li>
        </ul>
    </div>
    <div class="c-black card mt-4">
        <div class="card-header py-2 px-3 heading-6 strong-600 clearfix">
            <div class="float-left">{{__('Order Summary')}}</div>
        </div>
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-lg-6">
                    <table class="details-table table">
                        <tr>
                            <td class="w-50 strong-600">{{__('Order Code')}}:</td>
                            <td>{{ $order->code }}</td>
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">{{__('Customer')}}:</td>
                            <td>{{ json_decode($order->shipping_address)->name }}</td>
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">{{__('Email')}}:</td>
                            @if ($order->user_id != null)
                                <td>{{ $order->user->email }}</td>
                            @endif
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">{{__('Billing address')}}:</td>
                            <td>{{ json_decode($order->shipping_address)->address }}, {{ json_decode($order->shipping_address)->city }}, {{ json_decode($order->shipping_address)->country }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6">
                    <table class="details-table table">
                        <tr>
                            <td class="w-50 strong-600">{{__('Order date')}}:</td>
                            <td>{{ date('d-m-Y H:m A', $order->date) }}</td>
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">{{__('Order status')}}:</td>
                            <td>{{ ($order->payment_status == 'paid') ? 'Paid' : 'Failed' }}</td>
                        </tr>
                        <tr>
                            <td class="w-50 strong-600">{{__('Total order amount')}}:</td>
                            <td>{{ single_price($order->orderDetails->sum('price') + $order->orderDetails->sum('tax')) }}</td>
                        </tr>
                        {{--<tr>
                            <td class="w-50 strong-600">{{__('Shipping method')}}:</td>
                            <td>{{__('Flat shipping rate')}}</td>
                        </tr>--}}
                        <tr>
                            <td class="w-50 strong-600">{{__('Payment method')}}:</td>
                            <td>Debit/Credit card{{ ucfirst(str_replace('_', ' ', $order->payment_type)) }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="c-black card mt-4">
                <div class="card-header py-2 px-3 heading-6 strong-600">{{__('Order Details')}}</div>
                <div class="card-body pb-0">
                    <table class="details-table table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th >{{__('Service Details')}}</th>
                                {{--<th>{{__('Variation')}}</th>--}}
                                <th>{{__('No of pages')}}</th>
                                {{--<th>{{__('Delivery Type')}}</th>--}}
                                <th>{{__('Price')}}</th>
                                @if ($refund_request_addon != null && $refund_request_addon->activated == 1)
                                    <th>{{__('Refund')}}</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderDetails as $key => $orderDetail)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                       <div class="order-details">
                                            <div class="detail">
                                                <b>Service:</b>
                                                <p>
                                                    @if ($orderDetail->product != null)
                                                        {{ $orderDetail->product->name }}
                                                    @else
                                                        <strong>{{ __('Product Unavailable') }}</strong>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="detail">
                                                <b>From Language:</b>
                                                <p><span style="font-weight: 300;">{{ $orderDetail->from_lang }}</span></p>
                                            </div>
                                            <div class="detail">
                                                <b>To Language:</b>
                                                <p><span style="font-weight: 300;">{{ $orderDetail->to_lang }}</span></p>
                                            </div>
                                            <div class="detail">
                                                <b>Est. Delivery:</b>
                                                <p><span style="font-weight: 300;">{{ $orderDetail->delivery_datetime }}</span></p>
                                            </div>
                                            <div class="detail">
                                                <b>Note:</b>
                                                <p><span style="font-weight: 300;">{{ $orderDetail->message }}</span></p>
                                            </div>
                                            <div class="detail">
                                                <b>File:</b>
                                                <p><span style="font-weight: 300;"><a download href="{{ $baseUrl.'/'.$orderDetail->translation_file }}">Download Translation File</a></span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $orderDetail->quantity }} page(s)</td>
                                    <td>{{ single_price($orderDetail->price) }}</td>
                                    @if ($refund_request_addon != null && $refund_request_addon->activated == 1)
                                        @php
                                            $no_of_max_day = \App\BusinessSetting::where('type', 'refund_request_time')->first()->value;
                                            $last_refund_date = $orderDetail->created_at->addDays($no_of_max_day);
                                            $today_date = \Carbon\Carbon::now();
                                        @endphp
                                        <td>
                                            @if ($orderDetail->product != null && $orderDetail->product->refundable != 0 && $orderDetail->refund_request == null && $today_date <= $last_refund_date && $orderDetail->delivery_status == 'delivered')
                                                <a href="{{ route('refund_request_send_page', $orderDetail->id) }}" class="btn btn-styled btn-sm btn-base-1">{{ __('Send') }}</a>
                                            @elseif ($orderDetail->refund_request != null && $orderDetail->refund_request->refund_status == 0)
                                                <span class="strong-600">{{ __('Pending') }}</span>
                                            @elseif ($orderDetail->refund_request != null && $orderDetail->refund_request->refund_status == 1)
                                                <span class="strong-600">{{ __('Approved') }}</span>
                                            @elseif ($orderDetail->product->refundable != 0)
                                                <span class="strong-600">{{ __('N/A') }}</span>
                                            @else
                                                <span class="strong-600">{{ __('Non-refundable') }}</span>
                                            @endif
                                        </td>
                                    @endif
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          <div class="col-lg-12">
            <div class="c-black card mt-4">
                <div class="card-header py-2 px-3 heading-6 strong-600">{{__('Order Amount')}}</div>
                <div class="card-body pb-0">
                    <table class="table details-table">
                        <tbody>
                            <tr>
                                <th>{{__('Subtotal')}}</th>
                                <td class="text-right">
                                    <span class="strong-600">{{ single_price($order->orderDetails->sum('price')) }}</span>
                                </td>
                            </tr>
                            {{--<tr>
                                <th>{{__('Shipping')}}</th>
                                <td class="text-right">
                                    <span class="text-italic">{{ single_price($order->orderDetails->sum('shipping_cost')) }}</span>
                                </td>
                            </tr>--}}
                            <tr>
                                <th>{{__('Tax')}}</th>
                                <td class="text-right">
                                    <span class="text-italic">{{ single_price($order->orderDetails->sum('tax')) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>{{__('Coupon Discount')}}</th>
                                <td class="text-right">
                                    <span class="text-italic">{{ single_price($order->coupon_discount) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th><span class="strong-600">{{__('Total')}}</span></th>
                                <td class="text-right">
                                    <strong><span>{{ single_price($order->grand_total) }}</span></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        
    </div>
</div>

<script type="text/javascript">
    function show_make_payment_modal(order_id){
        $.post('{{ route('checkout.make_payment') }}', {_token:'{{ csrf_token() }}', order_id : order_id}, function(data){
            $('#payment_modal_body').html(data);
            $('#payment_modal').modal('show');
            $('input[name=order_id]').val(order_id);
        });
    }
</script>
