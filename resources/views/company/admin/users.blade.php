@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                @include('company.admin.sidemenu')
            </div>

            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">

                        <div class="form-group row">
                            <a href="{{ route('company.admin.users.new') }}">
                                <button type="button" class="btn btn-primary">
                                    {{ __('New User') }}
                                </button>
                            </a>
                        </div>

                        <div class="row">

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <td>{{ $user->getName() }}</td>
                                    <td>{{ $user->getEmail() }}</td>
                                    <td><a href="{{ route('company.admin.users.edit', ['id' => $user->getId()]) }}">Edit</a></td>
                                @endforeach
                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
