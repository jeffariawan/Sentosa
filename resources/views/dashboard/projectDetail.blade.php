@extends('layouts.homeMain')

@section('container')

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-content">
                            <h3 class="comments-count">Detail Project</h3>
                            <h4 class="comments-count">Nama</h4>
                            <p>
                                {{ $project->title }}
                            </p>
                            <h4 class="comments-count">Deskripsi</h4>
                            <p>
                                {{ $project->description }}
                            </p>
                            <h4 class="comments-count">Harga yang disepakati</h4>
                            <p>
                                Rp.{{ $project->final_price }}
                            </p>
                            <h4 class="comments-count">Material dari</h4>
                            <p>
                                @php
                                    if ($project->material_from = 1) {
                                        echo 'Pekerja';
                                    } else {
                                        echo 'Pemilik';
                                    }
                                @endphp
                            </p>
                            <h4 class="comments-count">Alamat</h4>
                            <p>
                                {{ $project->address }}
                            </p>
                            <h4 class="comments-count">Daerah</h4>
                            <p>
                                {{ $province->name }}
                            </p>
                            <h4 class="comments-count">Status pekerjaan</h4>
                            <p>
                                {{ $project->status }}
                            </p>
                            @if ($project->status == 'progress') '
                                <h4 class="comments-count">Tanggal mulai</h4>
                                <p>
                                    <?php
                                    $date = date_create($project->project_start_dt);
                                    echo date_format($date, 'Y-m-d');
                                    ?>
                                </p>
                                <h4 class="comments-count">Pekiraan tanggal selesai</h4>
                                <p>
                                    <?php
                                    $date = $project->project_start_dt;
                                    echo date('Y-m-d', strtotime($date . ' + ' . $bid->time_estimation . 'days'));
                                    ?>
                                </p>
                            @endif

                            @if ($project->user_id == $user->user_id && $project->status == 'progress')
                                <a href="{{ route('dashboard.projectpayment', ['projectid' => $project->project_id]) }}"
                                    class="btn btn-primary">
                                    <span>Pekerjaan sudah selesai</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            @endif
                            @if ($project->user_id == $user->user_id && $project->status == 'Finish')
                                <a href="{{ route('dashboard.salesrating', ['projectid' => $project->project_id]) }}"
                                    class="btn btn-primary">
                                    <span>Beri Penilaian</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            @endif
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
                                <h3 class="sidebar-title" style="color: white;">{{ $bid->worker->user->name }}</h3>
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
