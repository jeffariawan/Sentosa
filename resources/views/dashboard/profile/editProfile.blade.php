@extends('layouts.dashboard')

@section('dashboard')

    <div class="container">
        <div class="profile">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://cdn.discordapp.com/attachments/794079381462581288/875602708923580486/account-avatar-profile-human-man-user-30448.webp" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $user->name }}</h4>
                                    <p class="text-muted font-size-sm">{{ $refProv->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('dashboard.profile.update', $user->user_id) }}" class="mb-5">
                            @csrf
                            <div class="card-body">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary mb-2">
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', $user->name) }}">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary mb-2">
                                    <input type="text" class="form-control" name="email"
                                        value="{{ old('email', $user->email) }}">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary mb-2">
                                    <input type="text" class="form-control" name="phone"
                                        value="{{ old('phone', $user->phone) }}">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Age</h6>
                                </div>
                                <div class="col-sm-9 text-secondary mb-2">
                                    <input type="text" class="form-control" name="age"
                                        value="{{ old('age', $user->age) }}">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Province</h6>
                                </div>
                                <div class="col-sm-9 text-secondary mb-3">
                                    <select class="form-control" name="refProvinceId">
                                        @foreach ($refProvince as $rp)
                                            <option value="{{ $rp->ref_province_id }}" @if (old('refProvinceId', $user->ref_province_id) == $rp->ref_province_id) selected="selected" @endif>
                                                {{ $rp->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <div class="btn btn-primary px-4" style="background-color: white"><a
                                            href="{{ route('dashboard.profile') }}">back</a></div>
                                    <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
