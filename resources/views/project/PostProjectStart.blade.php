@extends('layouts.homeMain')

@section('container')
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
                            <h4>Create your own project</h4>
                            <label>Choose a name for your project</label>
                            <input name="title" class="form-control" type="text" placeholder="Default input" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Tell us more about your project</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe your project here..." required></textarea>
                        </div>

                        <div class="col-md-12">
                            <h4>What skills are required?</h4>
                            <p>Enter up to 5 skills that best describe your project. Freelancers will use these skills
                                to find projects they are most interested and experienced in.</p>
                            <select name="refServiceId[]" class="selectpicker" multiple data-live-search="true">
                                @foreach ($service as $srvc)
                                <option value="{{ $srvc->ref_service_id }}">{{ $srvc->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <p>Material disediakan oleh...</p>
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
                        <label>Deadline project : </label>
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
                        <p>Provinsi</p>
                        <select name="refProvinceId" class="selectpicker" data-live-search="true">
                            @foreach ($province as $prvc)
                            <option value="{{ $prvc->ref_province_id }}">{{ $prvc->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-md-12 float-right">
                        <button type="submit" class="btn btn-success" href="{{ route('project.ProjectView') }}">Next</button>
                    </div>
                </form>

            </div>

            <div class="col-lg-2">
            </div>

        </div>


    </div>


</section><!-- End Contact Section -->
@endsection