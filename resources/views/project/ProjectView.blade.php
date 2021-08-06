@extends('layouts.homeMain')

@section('container')


    <section id="projectView">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 mb-30 mt-5">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Filter
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    @foreach ($service as $srvc)
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input filter_checkbox"
                                                id="{{ $srvc->ref_service_id }}">
                                            <label class="custom-control-label" for="{{ $srvc->ref_service_id }}">
                                                {{ $srvc->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9 col-md-12 col-sm-12 mb-30 mt-5">
                    <div class="card">
                        <div class="col-lg-12">
                            <div class="row">
                                <section id="blog" class="blog">
                                    <div class="container" data-aos="fade-up">
                                        <div class="row">
                                            <div class="entries causes_div">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

{{-- @extends('layouts.homeMain')

@section('container')


    <section id="projectView">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 mb-30 mt-5">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Filter
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    @foreach ($service as $srvc)
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input filter_checkbox"
                                                id="{{ $srvc->ref_service_id }}">
                                            <label class="custom-control-label" for="{{ $srvc->ref_service_id }}">
                                                {{ $srvc->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9 col-md-12 col-sm-12 mb-30 mt-5">
                    <div class="card">
                        <div class="col-lg-12">
                            <div class="row">
                                <section id="blog" class="blog">
                                    <div class="container" data-aos="fade-up">
                                        <div class="row">
                                            <div class="entries causes_div">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
 --}}