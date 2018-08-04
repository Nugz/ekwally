@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('eKwally') }}</div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-6">
                                <h3>{{ __('Particulier Portaal') }}</h3>

                                <a href="{{ route('user.register') }}">
                                    <button type="button" class="btn btn-primary">
                                        {{ __('Ik zoek een baan') }}
                                    </button>
                                </a>
                            </div>

                            <div class="col-md-6">
                                <h3>{{ __('Zakelijk Portaal') }}</h3>

                                <a href="{{ route('company.register') }}">
                                    <button type="button" class="btn btn-primary">
                                        {{ __('Ik zoek een versterking') }}
                                    </button>
                                </a>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <h3>{{ __('Al deelnemer') }}</h3>

                                <a href="{{ route('login') }}">
                                    <button type="button" class="btn btn-primary">
                                        {{ __('Klik hier om in te loggen') }}
                                    </button>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
