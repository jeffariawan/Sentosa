@extends('layouts.homeMain')

@section('container')

    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4 mb-4" style="font-size:24pt; text-align:center; font-weight:900;">Daftar sebagai: </div>
    <div class="col-lg-4"></div>

</div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-cone-striped"></i>
                        <div class="text-center text-lg-start">
                            <a href="{{ route('user.registrasiworker') }}"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Pekerja</span> <i class="bi bi-arrow-right ml-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4 col-md-6">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-person-badge"></i>
                        <div class="text-center text-lg-start">
                            <a href="{{ route('user.login') }}"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Customer</span>
                                <i class="bi bi-arrow-right ml-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                </div>
            </div>

        </div>
    </section>
@endsection
