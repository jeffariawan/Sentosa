@extends('layouts.homeMain')

@section('container')


    <main id="main">


        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>{{ $project->title }}</h2>
                    </div>
                    <div class="col-lg-4">
                        <h2>Budget Rp.{{ $project->budget_range_min }} - Rp.{{ $project->budget_range_max }}</h2>
                    </div>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

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
                                <p>
                                    {{ $project->description }}
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



                        <div class="blog-comments">
                            <?php
                            $userIdSession = session('userId');
                            if($userIdSession == $project->user_id){
                              echo  '<h4  class="comments-count">Daftar orang yang mengajurkan penawaran</h4>';
                            }
                            ?>
                            <h4 class="comments-count">{{ $bid->count()}} Penawar</h4>

                            @if($project->status == "open")
                             @foreach($bid as $b)
                            <div id="comment-1" class="comment">
                                <div class="d-flex">
                                    <div>
                                        <h5><a href="#">{{ $b->worker->user->name }} </a>
                                        {{--  <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a> --}}
                                        </h5>
                                        <time datetime="{{ $b->created_at }}">{{ $b->created_at }}</time>
                                        <p>
                                            {{ $b->description }}
                                        </p>
                                        <form action="{{ route('project.ProjectViewDetail.setprojectwinner')}}" method="post">
                                             <input name="bid_id" type="hidden" value="{{ $b->bid_id }}">
                                             <input name="project_id" type="hidden" value="{{ $project->project_id }}">
                                            <input class="btn btn-primary" type="submit" value="Pilih Sebagai pemenang">
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End comment #1 -->
                            @endforeach
                            @endif
                            <?php 
                            if($project->status != "open"){
                            echo '<h4 class="comments-count">Projek anda sudah ada pemenang</h4>';
                            }
                            ?>
                            <?php
                            $userIdSession = session('userId');
                            if($userIdSession != $project->user_id){
                            ?>
                            <div class="reply-form">
                                <h4>Buat penawaran</h4>
                                <p>Masukan detail penawaran anda </p>
                                <form action="{{ route('project.ProjectViewDetail.bidstore', ['userid' => $userIdSession, 'projectid' => $project->project_id]) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="offerprice" type="text" class="form-control"
                                                placeholder="Masukan harga penawaran anda">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="totalworker" type="text" class="form-control"
                                                placeholder="Jumlah pekerja untuk projek ini">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <input name="time" type="text" class="form-control"
                                                placeholder="waktu yang dibutuhkan untuk selesai">
                                        </div>
                                        <div class="col form-group">
                                            <input name="start" type="text" class="form-control"
                                                placeholder="Bisa mulai tanggal berapa">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="desc" class="form-control" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Bid</button>

                                </form>

                            </div>
                            <?php
                            }                
                            ?>
                        </div><!-- End blog comments -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->



    @endsection
