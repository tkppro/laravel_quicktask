@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('common.header.verify')</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    @lang('common.header.check_verify')
                    @lang('common.header.receive_email'), <a href="{{ route('verification.resend') }}">@lang('common.header.request_email')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
