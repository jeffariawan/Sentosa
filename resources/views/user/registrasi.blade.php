@extends('layouts.main')

@section('container')

    <section>
        <div class="container">

            <div class="alert text-center my-4">
            </div>

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif

            <form action="{{ route('user.registrasi.store') }}" method="post" class="php-email-form">
                {{ csrf_field() }}
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                        <div class="row">
                            <div class="col text-center">
                                <h1>Register</h1>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col mt-4">
                                <h6>Nama</h6>
                                <input name="name" type="text" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <h6>Email</h6>
                                <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <h6>Username</h6>
                                <input name="username" type="text" class="form-control" placeholder="Username" value="{{ old('usename') }}">
                                @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <h6>Password</h6>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="col">
                                <h6>Confirm Password</h6>
                                <input name="confirm" type="password" class="form-control" placeholder="Confirm Password">
                                @if ($errors->has('confirm'))
                                    <span class="text-danger">{{ $errors->first('confirm') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-start mt-4">
                            <div class="col">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        I Read and Accept <a href="https://www.froala.com">Terms and Conditions</a>
                                    </label>
                                </div>

                                <button class="btn btn-primary mt-4">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
