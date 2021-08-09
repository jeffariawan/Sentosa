@extends('layouts.homeMain')

@section('container')

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <!-- Project Anda -->
                    <?php if($projectUser != null){ ?>
                    <article class="entry entry-single">
                        <div class="entry-meta">
                            <h4 class="h4-sentosa">Project Anda</h4>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tittle</th>
                                    <th scope="col">Final Price</th>
                                    <th scope="col">Project Start</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($projectUser as $puser)
                                    <tr>
                                        <th scope="row">{{ $i = $i + 1 }}</th>
                                        <td>{{ $puser->title }}</td>
                                        <td>{{ $puser->final_price }}</td>
                                        <td>{{ $puser->project_start_dt }}</td>
                                        <td>{{ $puser->status }}</td>
                                        <td>
                                            <a href="{{ route('dashboard.projectDetail', ['projectid' => $puser->project_id]) }}"
                                                class="btn btn-primary">
                                                <span>Lihat detail</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </article><!-- End Project Anda -->
                    <?php } ?>

                    <?php if($projectWorker != null){ ?>
                    <!-- Pekerjaan Anda -->
                    <article class="entry entry-single">
                        <div class="entry-meta">
                            <h4 class="h4-sentosa">Pekerjaan Anda</h4>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tittle</th>
                                    <th scope="col">Income</th>
                                    <th scope="col">Project Status</th>
                                    <th scope="col">Bid Status</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($projectWorker as $bid)
                                    <?php
                                    if($bid->project->status != 'open' && $bid->win_status != 1){
                                    }else{
                                    ?>
                                    <tr>
                                        <th scope="row">{{ $i = $i + 1 }}</th>
                                        <td>{{ $bid->project->title }}</td>
                                        <td>{{ $bid->offer_price }}</td>
                                        <td>{{ $bid->project->status }}</td>
                                        <td>
                                            @php
                                                if ($bid->win_status == 0) {
                                                    echo 'Menunggu Konfirmasi';
                                                } else {
                                                    echo 'Menang';
                                                }
                                            @endphp
                                        </td>
                                        <td>
                                            <a href="{{ route('dashboard.projectDetail', ['projectid' => $bid->project_id]) }}"
                                                class="btn btn-primary">
                                                <span>Lihat detail</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                        ?>
                                @endforeach
                            </tbody>
                        </table>

                    </article><!-- End Pekerjaan Anda -->
                    <?php } ?>


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
