@extends('layouts.dashboard')

@section('dashboard')

    <div class="container mb-4  ">
        <div class="profile">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://cdn.discordapp.com/attachments/794079381462581288/875602708923580486/account-avatar-profile-human-man-user-30448.webp"
                                    alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $user->name }}</h4>
                                    <p class="text-muted font-size-sm">{{ $user->RefProvince->name }}</p>
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
                                <div class="col-sm-12 text-secondary mb-2">
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', $user->name) }}">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-12 text-secondary mb-2">
                                    <input type="text" class="form-control" name="email"
                                        value="{{ old('email', $user->email) }}">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-12 text-secondary mb-2">
                                    <input type="text" class="form-control" name="phone"
                                        value="{{ old('phone', $user->phone) }}">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Age</h6>
                                </div>
                                <div class="col-sm-12 text-secondary mb-2">
                                    <input type="text" class="form-control" name="age"
                                        value="{{ old('age', $user->age) }}">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Province</h6>
                                </div>
                                <div class="col-sm-12 text-secondary ">
                                    <select class="form-control" name="refProvinceId">
                                        @foreach ($refProvince as $rp)
                                            <option value="{{ $rp->ref_province_id }}" @if (old('refProvinceId', $user->ref_province_id) == $rp->ref_province_id) selected="selected" @endif>
                                                {{ $rp->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <div class="card-body">
                                <div class="col-sm-12 mb-3">
                                    <label>Deskripsi</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                        rows="3" required>{{ old('description', $worker->description) }}</textarea>
                                </div>
                                <div class="col-sm-12 mb-4">
                                    <label>Gaji Anda Per Hari</label>
                                    <input name="priceRange" class="form-control" type="number"
                                        placeholder="Time estimation" required
                                        value="{{ old('priceRange', $worker->price_range) }}">
                                </div>
                                <div class="col-sm-12 mb-4">
                                    <label>Keahlian anda</label>
                                    <select name="refService[]" class="selectpicker float-right" multiple
                                        data-live-search="true">
                                        @foreach ($refService as $rs)
                                            <option value="{{ $rs->ref_service_id }}" @if (old('refServiceId', $worker->ref_service_id) == $rs->ref_service_id) selected="selected" @endif>
                                                {{ $rs->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="col-sm-12">
                                    <label>Lokasi anda mengambil<br>pekerjaan</label>
                                    <select name="refProvinceId[]" class="selectpicker float-right" multiple
                                        data-live-search="true">
                                        @foreach ($refProvince as $rp)
                                            <option value="{{ $rp->ref_province_id }}" @if (old('refProvince', $user->ref_province_id) == $rp->ref_province_id) selected="selected" @endif>
                                                {{ $rp->name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                            </div>
                            <div class="col-sm-9 text-secondary pt-4 float-right">
                                <div class="btn btn-primary px-4" style="background-color: white"><a
                                        href="{{ route('dashboard.profile') }}">back</a></div>
                                <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
