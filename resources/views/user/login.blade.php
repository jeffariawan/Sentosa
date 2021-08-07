@extends('layouts.main')

@section('container')
    <section id="registrasi" class="registrasi">
        <div class="container">
            <div class="row gy-4 mt-4">

                <div class="col-lg-4">
                </div>

                <div class="col-lg-4 shadow p-4 mb-5 bg-white rounded" style='padding: 3%;'>

                    @if (Session::has('success'))
                        <div class="alert alert-danger">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif

                    <form action="{{ route('user.login.submit') }}" method="post" class="php-email-form">
                        {{ csrf_field() }}
                        <div class="col text-center">
                            <h1>Login</h1>
                        </div>

                        <div class="form-group">
                            <input name="username" type="text" class="form-control" placeholder="Username"
                                value="{{ old('username') }}">
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <div class="form-group mt-3">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="row justify-content-start mt-3">
                            <div class="col">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Remember Me <a href="https://www.froala.com"></a>
                                    </label>
                                </div>

                                <button class="btn btn-primary mt-2">Submit</button>
                            </div>
                        </div>

                        <div class="card-footer my-4">
                            <div class="d-flex justify-content-center links">
                                Don't have an account?<a href="{{ route('user.registrasi') }}">Sign Up</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection




{{-- <form action="{{ route('user.login.submit') }}" method="post">
		@csrf
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-user"></i></span>
			</div>
			<input name="username" type="text" class="form-control" placeholder="username">

		</div>
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-key"></i></span>
			</div>
			<input name="password" type="password" class="form-control" placeholder="password">
		</div>
		<div class="row align-items-center remember">
			<input type="checkbox">Remember Me
		</div>
		<div class="form-group">
			<input type="submit" value="Login" class="btn float-right login_btn">
		</div>
	</form> --}}
