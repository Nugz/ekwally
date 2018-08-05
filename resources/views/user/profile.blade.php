@extends('layouts.app')

@section('vue')
    <script src="{{ mix('js/profile.js') }}" defer></script>
@endsection

@section('content')

{{-- Vue component --}}

<profile></profile>

{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}

                {{--<form method="POST" action="{{ route('user.profile.update') }}" aria-label="{{ __('Profile') }}">--}}
                    {{--@csrf--}}

                    {{--<div class="card-header">{{ __('Account Info') }}</div>--}}

                    {{--<div class="card-body">--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--{{ $user->getName() }}--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="website_url" class="col-md-4 col-form-label text-md-right">{{ __('E-mail Adres') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--{{ $user->getEmail() }}--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
