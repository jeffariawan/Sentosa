@extends('layouts.homeMain')

@section('container')

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog-single.html">{{ $user->name }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog-single.html"><time
                                            datetime="2020-01-01">{{ $project->created_at }}</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i> <a
                                        href="blog-single.html">{{ $province->name }}</a></li>
                            </ul>
                        </div>

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
                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Business</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
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
