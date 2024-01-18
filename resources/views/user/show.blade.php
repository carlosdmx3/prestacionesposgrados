@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? "{{ __('Show') User" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Oapellidopaterno:</strong>
                            {{ $user->oapellidopaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Oapellidomaterno:</strong>
                            {{ $user->oapellidomaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Orfc:</strong>
                            {{ $user->orfc }}
                        </div>
                        <div class="form-group">
                            <strong>Ocurp:</strong>
                            {{ $user->ocurp }}
                        </div>
                        <div class="form-group">
                            <strong>Ocorreo:</strong>
                            {{ $user->ocorreo }}
                        </div>
                        <div class="form-group">
                            <strong>Ofolio:</strong>
                            {{ $user->ofolio }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Istatus:</strong>
                            {{ $user->istatus }}
                        </div>
                        <div class="form-group">
                            <strong>Iusrins:</strong>
                            {{ $user->iusrins }}
                        </div>
                        <div class="form-group">
                            <strong>Iusrmod:</strong>
                            {{ $user->iusrmod }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
