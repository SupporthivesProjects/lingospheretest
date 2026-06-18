@extends('layouts.app')

@section('content')

<div class="row">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('User Login Details')}}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('Full Name') }}</th>
                        <th>{{ __('IP') }}</th>
                        <th>{{ __('City') }}</th>
                        <th>{{ __('Country') }}</th>
                        <th>{{ __('Country Code') }}</th>
                        <th>{{ __('Latitude') }}</th>
                        <th>{{ __('Longitude') }}</th>
                        <th>{{ __('Browser') }}</th>
                        <th>{{ __('Os') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userlogins as $key => $userlogins)
                    <tr>
                        <td>{{ ($key+1) }}</td>
                        <td>{{ $userlogins->user_name }}</td>
                        <td>{{ $userlogins->user_ip }}</td>
                        <td>{{ $userlogins->city }}</td>
                        <td>{{ $userlogins->country }}</td>
                        <td>{{ $userlogins->country_code }}</td>
                        <td>{{ $userlogins->latitude }}</td>
                        <td>{{ $userlogins->longitude }}</td>
                        <td>{{ $userlogins->browser }}</td>
                        <td>{{ $userlogins->os }}</td>
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


