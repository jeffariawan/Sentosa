@extends('layouts.homeMain')

@section('container')

<section id="registrasiworker">
    <div class="container">
        <div class="row gy-4 ">

            <div class="col-lg-2">
            </div>

            <div class="col-lg-8 shadow p-3 mb-5 bg-white rounded" style='padding: 3%;'>
                <form action="{{ route('user.registrasiworker.store') }}" method="post" class="">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-12">
                            <h4>Describe Yourself</h4>
                            <label>Tell us more about your project</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe your project here..." required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Masukan Gaji Anda Per Hari : </label>
                            <input name="priceRange" class="form-control" type="number" placeholder="Time estimation" required>
                        </div>

                        <div class="col-md-12">
                            <h4>What is your speciality</h4>
                            <p>Enter up to 5 skills that best describe your skills. You will use these skills
                                to find projects that fit you.</p>
                            <select name="refServiceId[]" class="selectpicker" multiple data-live-search="true">
                                @foreach ($service as $srvc)
                                <option value="{{ $srvc->ref_service_id }}">{{ $srvc->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <h4>Provinsi</h4>
                            <p>Di daerah mana saja anda bisa mengambil pekerjaan.</p>
                            <select name="refProvinceId[]" class="selectpicker" multiple data-live-search="true">
                                @foreach ($province as $prvc)
                                <option value="{{ $prvc->ref_province_id }}">{{ $prvc->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" href="{{ route('user.login.submit') }}">Next</button>
                        </div>
                    </div>

                </form>

            </div>

            <div class="col-lg-2">
            </div>

        </div>
    </div>
</section>


@endsection