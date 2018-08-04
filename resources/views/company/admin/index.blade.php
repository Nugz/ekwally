@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                @include('company.admin.sidemenu')
            </div>

            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{ __('Admin Dashboard') }}</div>

                    <div class="card-body">


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
