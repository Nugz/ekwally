@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <form method="POST" action="{{ route('company.profile.update') }}" aria-label="{{ __('Profile') }}">
                    @csrf

                    <div class="card-header">{{ __('Company Info') }}</div>

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                {{ $company->getName() }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="website_url" class="col-md-4 col-form-label text-md-right">{{ __('Website URL') }}</label>

                            <div class="col-md-6">
                                {{ $company->getWebsiteUrl() }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kvk_nummer" class="col-md-4 col-form-label text-md-right">{{ __('KVK Nummer') }}</label>

                            <div class="col-md-6">
                                {{ $company->getKvkNummer() }}
                            </div>
                        </div>

                    </div>

                    <div class="card-header">{{ __('Company description') }}</div>

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="section" class="col-md-4 col-form-label text-md-right">{{ __('Section') }}</label>

                            <div class="col-md-6">
                                <input id="section" type="text" class="form-control{{ $errors->has('section') ? ' is-invalid' : '' }}" name="section" value="{{ old('section') }}">

                                @if ($errors->has('section'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('section') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nr_employees" class="col-md-4 col-form-label text-md-right">{{ __('# Employees') }}</label>

                            <div class="col-md-6">

                                <select id="nr_employees" class="form-control{{ $errors->has('nr_employees') ? ' is-invalid' : '' }}" name="nr_employees">
                                    <option value="">Selecteer aantal...</option>
                                    <option value="1-5"
                                        @if ("1-5" == old('nr_employees', $company->getNrEmployees()))
                                        selected="selected"
                                        @endif
                                    >1-5</option>

                                    <option value="5-10"
                                            @if ("5-10" == old('nr_employees', $company->getNrEmployees()))
                                            selected="selected"
                                            @endif
                                    >5-10</option>

                                    <option value="10-25"
                                            @if ("10-25" == old('nr_employees', $company->getNrEmployees()))
                                            selected="selected"
                                            @endif
                                    >10-25</option>

                                    <option value="25-50"
                                            @if ("25-50" == old('nr_employees', $company->getNrEmployees()))
                                            selected="selected"
                                            @endif
                                    >25-50</option>

                                    <option value="50-100"
                                            @if ("50-100" == old('nr_employees', $company->getNrEmployees()))
                                            selected="selected"
                                            @endif
                                    >50-100</option>

                                    <option value="100-250"
                                            @if ("100-250" == old('nr_employees', $company->getNrEmployees()))
                                            selected="selected"
                                            @endif
                                    >100-250</option>

                                    <option value="250-500"
                                            @if ("250-500" == old('nr_employees', $company->getNrEmployees()))
                                            selected="selected"
                                            @endif
                                    >250-500</option>

                                    <option value="500+"
                                            @if ("500+" == old('nr_employees', $company->getNrEmployees()))
                                            selected="selected"
                                            @endif
                                    >500+</option>
                                </select>

                                {{--<input id="nr_employees" type="text" class="form-control{{ $errors->has('nr_employees') ? ' is-invalid' : '' }}" name="nr_employees" value="{{ old('nr_employees') }}">--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-controll{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description">{{ old('description', $company->getDescription()) }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
