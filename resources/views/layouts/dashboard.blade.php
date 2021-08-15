@extends('layouts.homeMain')

@section('container')

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    @yield('dashboard')

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar" style="padding: 0; padding-bottom:50px;">
                        <div class="container p-4 pl-5 pb-1 mb-4" style="background-color: #1b4a9b;">
                            <div class="row">
                                <h1 class="sidebar-title mb-2" style="color: white;">Welcome Back!</h1>
                            </div>
                            <div class="row">
                                <h3 class="sidebar-title" style="color: white;">{{ $user->name }}</h3>
                            </div>
                        </div>

                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <h4 class="ml-4"><a href="{{ route('dashboard.index') }}">Home</a></h4>
                            </div>
                            <div class="post-item clearfix">
                                <h4 class="ml-4"><a href="{{ route('dashboard.profile') }}">Profile</a></h4>
                            </div>
                            <div class="post-item clearfix">
                                <h4 class="ml-4"><a href="{{ route('dashboard.portofolio') }}">Portofolio</a></h4>
                            </div>
                            <div class="post-item clearfix">
                                <h4 class="ml-4"><a href="{{ route('project.PostProjectStart') }}">Buat project</a></h4>
                            </div>
                            <div class="post-item clearfix">
                                <h4 class="ml-4"><a href="{{ route('project.ProjectView') }}">Cari project</a></h4>
                            </div>
                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->

    </main><!-- End #main -->



@endsection
