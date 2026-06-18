@extends('layouts.app')

@section('content')

<div class="row">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('All Contact Us Emails')}}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__('Full Name')}}</th>
                        <th>{{__('Email')}}</th>
                        <th>{{__('Phone')}}</th>
                        <th>{{__('Address')}}</th>
                        <th>{{__('Message')}}</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contactusemails as $key => $currency)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$currency->fullname}}</td>
                            <td>{{$currency->email}}</td>
                            <td>{{$currency->phone}}</td>
                            <td>{{$currency->address}}</td>
                            <td>{{$currency->message}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="modal fade" id="add_currency_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-content">

        </div>
    </div>
</div>

<div class="modal fade" id="currency_modal_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-content">

        </div>
    </div>
</div>

@endsection

@section('script')
    <script type="text/javascript">

        //Updates default currencies
        // function updateCurrency(i){
        //     var exchange_rate = $('#exchange_rate_'+i).val();
        //     if($('#status_'+i).is(':checked')){
        //         var status = 1;
        //     }
        //     else{
        //         var status = 0;
        //     }
        //     $.post('{{ route('currency.update') }}', {_token:'{{ csrf_token() }}', id:i, exchange_rate:exchange_rate, status:status}, function(data){
        //         location.reload();
        //     });
        // }
        //
        // //Updates your currency
        // function updateYourCurrency(i){
        //     var name = $('#name_'+i).val();
        //     var symbol = $('#symbol_'+i).val();
        //     var code = $('#code_'+i).val();
        //     var exchange_rate = $('#exchange_rate_'+i).val();
        //     if($('#status_'+i).is(':checked')){
        //         var status = 1;
        //     }
        //     else{
        //         var status = 0;
        //     }
        //     $.post('{{ route('your_currency.update') }}', {_token:'{{ csrf_token() }}', id:i, name:name, symbol:symbol, code:code, exchange_rate:exchange_rate, status:status}, function(data){
        //         location.reload();
        //     });
        // }

        function currency_modal(){
            $.get('{{ route('currency.create') }}',function(data){
                $('#modal-content').html(data);
                $('#add_currency_modal').modal('show');
            });
        }

        function update_currency_status(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('currency.update_status') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Currency Status updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }

        function edit_currency_modal(id){
            $.post('{{ route('currency.edit') }}',{_token:'{{ @csrf_token() }}', id:id}, function(data){
                $('#currency_modal_edit .modal-content').html(data);
                $('#currency_modal_edit').modal('show', {backdrop: 'static'});
            });
        }
    </script>
@endsection
