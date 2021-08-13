@extends('layouts.dashboard')

@section('dashboard')

    <h1 class='create-article'>Create Portofolio</h1>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('dashboard.portofolio.update',$workerPortofolio->worker_portofolio_id) }}" class="mb-5">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name',$workerPortofolio->name) }}">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description" >{{ old('name',$workerPortofolio->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Service</label>
            <select class="form-control" name="refServiceId">
                <option value="">Pilih Service</option>
                @foreach ($refService as $rs)
                    <option value="{{ $rs->ref_service_id }}" @if(old('refServiceId',$workerPortofolio->ref_service_id)== $rs->ref_service_id) selected="selected" @endif>{{ $rs->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
                <label for="">Picture</label><br>
                <input type="file" name="image" id="" @if(old('refServiceId',$workerPortofolio->ref_service_id)== $rs->ref_service_id) selected="selected" @endif>
        </div>
        <button type="submit" class="btn btn-primary mt-3">create</button>
    </form>

@endsection
