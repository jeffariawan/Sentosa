@extends('layouts.homeMain')

@section('container')
    <section id="regissentosa" class="regissentosa">
        <div class="container">
            <div class="row gy-4 mt-3">

                <div class="col-lg-3">
                </div>

                <div class="col-lg-6 shadow p-3 mb-5 bg-white rounded" style='padding: 3%;'>

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif

                    <form action="{{ route('user.registrasi.store2') }}" method="post" class="">
                        {{ csrf_field() }}
                        <div class="col text-center">
                            <h1>Registrasi</h1>
                        </div>
                        <div class="row gy-4 mt-2">
                            <div class="col-md-6">
                                <h6>Nama</h6>
                                <input name="name" type="text" class="form-control" placeholder="Name"
                                    value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h6>Username</h6>
                                <input name="username" type="text" class="form-control" placeholder="Username"
                                    value="{{ old('username') }}">
                                @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <h6>Email</h6>
                            <input name="email" type="email" class="form-control" placeholder="Email"
                                value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group mt-4">
                            <h6>Age</h6>
                            <input name="age" type="text" class="form-control" placeholder="Your Age"
                                value="{{ old('age') }}">
                            @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            @endif
                        </div>

                        <div class="row gy-4 mt-2">
                            <div class="col-md-6">
                                <h6>Phone Number</h6>
                                <input name="phone" type="phone" class="form-control" placeholder="Phone Number"
                                    value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h6>Province</h6>
                                <select name="refProvinceId" class="selectpicker" data-live-search="true" required>
                                    @foreach ($province as $prvc)
                                        <option value="{{ $prvc->ref_province_id }}">{{ $prvc->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row gy-4 mt-2">
                            <div class="col-md-6">
                                <h6>Password</h6>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
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

                                <button class="btn btn-primary mt-4" >Submit</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        </div>
    </section>


    {{-- <section>
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
    </section> --}}
@endsection
