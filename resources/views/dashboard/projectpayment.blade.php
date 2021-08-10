@extends('layouts.homeMain')

@section('container')

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-content">
                            <form action="{{ route('dashboard.projectpayment.payment') }}" method="post" class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Nomor Pembayaran : </label>
                                    <input name="paymentNo" class="form-control" type="text" placeholder="No Pembayaran"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Akun : </label>
                                    <input name="accountName" class="form-control" type="text" placeholder="Nama akun">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal bayar : </label>
                                    <input name="paymentDate" class="form-control" type="date" placeholder="Tanggal bayar">
                                </div>
                                <input name="project_id" type="hidden" value="{{ $project->project_id }}">
                                <div class="col-md-5">
                                    <button class="btn btn-primary" type="submit"
                                        href="{{ route('user.login.submit') }}">Submit</button>
                                </div>
                            </form>
                        </div>



                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar" style="padding: 0; padding-bottom:50px;">
                        <div class="container p-4 pl-5 pb-1 mb-4" style="background-color: #1b4a9b;">
                            <div class="row">
                                <h1 class="sidebar-title mb-2" style="color: white;">Welcome Back!</h1>
                            </div>
                            <div class="row">
                            </div>
                        </div>

                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <h4 class="ml-4"><a href="blog-single.html">Dashboard</a></h4>
                            </div>
                            <div class="post-item clearfix">
                                <h4 class="ml-4"><a href="blog-single.html">Dashboard</a></h4>
                            </div>
                            <div class="post-item clearfix">
                                <h4 class="ml-4"><a href="blog-single.html">Dashboard</a></h4>
                            </div>
                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->

    </main><!-- End #main -->



@endsection
