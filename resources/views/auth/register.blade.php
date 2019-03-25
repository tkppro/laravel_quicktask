@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('common.header.register')</div>

                <div class="card-body">
                    {!! Form::open([
                        'method' => 'post',
                        'route' => 'register',
                    ]) !!}
                        <div class="form-group row">
                            {!! Form::label('name', @trans('common.form.label.name'), [
                                'class' => 'col-md-4 col-form-label text-md-right'
                            ]) !!}

                            <div class="col-md-6">
                                {!! Form::text('name', '', [
                                    'id' => 'name',
                                    'class' => 'form-control',
                                ]) !!}

                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', @trans('common.form.label.email'), [
                                'class' => 'col-md-4 col-form-label text-md-right'
                            ]) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', '', [
                                    'class' => 'form-control',
                                    'id' => 'email',
                                ]) !!}

                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', @trans('common.form.label.password'), [
                                'class' => 'col-md-4 col-form-label text-md-right'
                            ]) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', [
                                    'class' => 'form-control',
                                    'id' => 'password',
                                ]) !!}

                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', @trans('common.form.label.password_confirm'), [
                                'class' => 'col-md-4 col-form-label text-md-right'
                            ]) !!}

                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', [
                                    'class' => 'form-control',
                                    'id' => 'password-confirm',
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(@trans('common.form.button.register'), [
                                    'class' => 'btn btn-primary',
                                ]) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
