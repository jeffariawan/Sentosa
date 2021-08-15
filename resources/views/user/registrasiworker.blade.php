@extends('layouts.homeMain')

@section('container')
<style>
    h4{font-weight: 900;}
    label {font-weight: 600;}
    </style>
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
                            <h4 class="mb-3">Deskripsi Pekerja</h4>
                            <label>Deskripsikan keahlian anda</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="keahlian anda" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Perkiraan Gaji Anda Per Hari : </label>
                            <input name="priceRange" class="form-control" type="number" placeholder="Gaji per hari" required>
                        </div>

                        <div class="col-md-12">
                            <h4>Pilih keahlian anda</h4>
                            <p>Tersedia beberapa pilihan, pilihlah sesuai dengan keahlian anda</p>
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

                        <div class="col-md-12 float-right">
                            <button type="submit" class="btn btn-primary btn-lg float-right" style="width: 200px;"  href="{{ route('project.ProjectView') }}">Next</button>
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