@extends('layouts.homeMain')

@section('container')
<style>
    h4{font-weight: 900;}
    label {font-weight: 600;}
    </style>
<!-- ======= Contact Section ======= -->
<section id="postproject" class="postproject">
    <div class="container">
        <div class="row gy-4 ">

            <div class="col-lg-2">
            </div>

            <div class="col-lg-8 shadow p-3 mb-5 bg-white rounded" style='padding: 3%;'>
                <form action="{{ route('project.PostProjectStart.store') }}" method="post" class="">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-12">
                            <h4 class="mb-4">Buatlah project anda sendiri</h4>
                            <label>Judul project anda</label>
                            <input name="title" class="form-control" type="text" placeholder="Judul" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Deskripsikan project anda</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi project" required></textarea>
                        </div>

                        <div class="col-md-12">
                            <h4>Pilihlah kategori project anda</h4>
                            <p>Tersedia beberapa pilihan kategori, anda boleh memilih bebrapa kategori yang sesuai<br>dengan project anda.</p>
                            <select name="refServiceId[]" class="selectpicker" multiple data-live-search="true">
                                @foreach ($service as $srvc)
                                <option value="{{ $srvc->ref_service_id }}">{{ $srvc->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Material disediakan oleh...</label>
                            <select class="form-control" name="materialFrom">
                                <option value="0">Customer</option>
                                <option value="1">Pekerja</option>
                            </select>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label>Masukan Budget untuk projek ini</label>
                        </div>
                        <div class="col-md-6 mt-2">
                            <input name="minBudget" class="form-control" type="text" placeholder="Minimal Budget" required>
                        </div>
                        <div class="col-md-6 mt-2">
                            <input name="maxBudget" class="form-control" type="text" placeholder="Maximal Budget" required>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="birthday">Tanggal mulai Projek :</label>
                        <br>
                        <input type="date" class="form-control" name="startDt" placeholder="Start date">
                    </div>

                    <div class="form-group">
                        <label>Ingin selesai dallam berapa hari : </label>
                        <input name="timeEstimation" class="form-control" type="number" placeholder="Time estimation" required>
                    </div>

                    <div class="form-group">
                        <label>Jumlah pekerja yang diinginkan : </label>
                        <input name="totalWorker" class="form-control" type="number" placeholder="Jumlah pekerja">
                    </div>


                    <div class="form-group">
                        <label>Alamat :</label>
                        <input name="address" type="text" class="form-control" placeholder="Alamat">
                    </div>

                    <div class="form-group">
                        <label>Provinsi</label><br>
                        <select name="refProvinceId" class="selectpicker" data-live-search="true">
                            @foreach ($province as $prvc)
                            <option value="{{ $prvc->ref_province_id }}">{{ $prvc->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-md-12 float-right">
                        <button type="submit" class="btn btn-primary btn-lg float-right" style="width: 200px;"  href="{{ route('project.ProjectView') }}">Next</button>
                    </div>
                </form>

            </div>

            <div class="col-lg-2">
            </div>

        </div>


    </div>


</section><!-- End Contact Section -->
@endsection