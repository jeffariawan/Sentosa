@extends('layouts.dashboard')

@section('dashboard')

    <div class="container">
        <div class="profile">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                    alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $user->name }}</h4>
                                    <p class="text-muted font-size-sm">{{ $refProvince->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            @if ($worker != null)
                                <h4 class="ml-3" style="font-weight: bold">Keahlian</h4>
                                @foreach ($workerService as $workerSvc)
                                    <ul class="list-group mt-1">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span class="text-secondary">{{ $workerSvc->refService->name }}</span>
                                        </li>
                                    </ul>
                                @endforeach
                            @else
                                <a href="{{ route('user.opsiregistrasi') }}"
                                    class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center"
                                    style="height: 50px">
                                    <span>Daftar pekerja</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->name }}
                            </div>
                            <hr>
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->email }}
                            </div>
                            <hr>
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->phone }}
                            </div>
                            <hr>
                            <div class="col-sm-3">
                                <h6 class="mb-0">Age</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->age }}
                            </div>
                            <hr>
                            <div class="col-sm-3">
                                <h6 class="mb-0">Province</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $refProvince->name }}
                            </div>
                            <hr>
                            <div class="col-sm-12">
                                <a class="btn btn-primary"
                                    href="{{ route('dashboard.profile.edit', $user->user_id) }}">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">  
                                    @if ($worker != null)
                                        <h6 class="d-flex align-items-center mb-3"><i
                                                class="material-icons text-info mr-2">Detail Pekerja</i></h6>
                                        <small>Deskripsi</small>
                                        <div class="mb-3">
                                            <p>{{ $worker->description }}</p>
                                        </div>
                                        <small>Kisaran Harga</small>
                                        <div class="mb-3">
                                            <p>{{ $worker->price_range }}</p>
                                        </div>
                                        <small>Tingkat Pekerja</small>
                                        <div class="mb-3">
                                            <p>{{ $worker->WorkerLevel->name }}</p>
                                        </div>
                                        <small>Tingkat Pekerja</small>
                                        <div class="mb-3">
                                            <p>{{ $worker->WorkerLevel->name }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
