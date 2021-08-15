@extends('layouts.dashboard')

@section('dashboard')

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
                                    echo date('Y-m-d', strtotime($date . ' + ' . $bidWinner->time_estimation . 'days'));
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
                            @if ($project->user_id == $user->user_id && $project->status == 'Finish' && $review == null)
                                <a href="{{ route('dashboard.salesrating', ['projectid' => $project->project_id]) }}"
                                    class="btn btn-primary">
                                    <span>Beri Penilaian</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            @endif
                        </div>

                        @if ($project->status == 'open') 
                        <div class="blog-comments mt-4">
                            <?php
                            $userIdSession = session('userId');
                            if ($userIdSession == $project->user_id) {
                                echo '<h4  class="comments-count">Daftar orang yang mengajukan penawaran</h4>';
                            }
                            ?>
                            <h4 class="comments-count">
                                @php
                                    if($bid != null){
                                        echo $bid->count();
                                    }else{
                                        echo "0";
                                    }
                                @endphp
                                
                                Penawar</h4>

                            @php $userIdSession = session('userId') @endphp

                            @if ($project->status == 'open')
                            @if($bid != null){
                                @foreach ($bid as $b)
                                    <div id="comment-1" class="comment">
                                        <div class="d-flex">
                                            <div>
                                                <h5><a href="#">{{ $b->worker->user->name }} </a>
                                                    {{-- <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a> --}}
                                                </h5>
                                                <time datetime="{{ $b->created_at }}">{{ $b->created_at }}</time>
                                                <p>
                                                    {{ $b->description }}
                                                </p>
                                                @if ($userIdSession == $project->user_id)
                                                    <form
                                                        action="{{ route('project.ProjectViewDetail.setprojectwinner') }}"
                                                        method="post">
                                                        <input name="bid_id" type="hidden" value="{{ $b->bid_id }}">
                                                        <input name="project_id" type="hidden"
                                                            value="{{ $project->project_id }}">
                                                        <input class="btn btn-primary" type="submit"
                                                            value="Pilih Sebagai pemenang">
                                                    </form>
                                                @endif

                                            </div>
                                        </div>
                                    </div><!-- End comment #1 -->

                                    {{-- <div id="comment-reply-1" class="comment comment-reply">
                                        <div class="d-flex">
                                            <div>
                                                <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i
                                                            class="bi bi-reply-fill"></i> Reply</a></h5>
                                                <time datetime="2020-01-01">01 Jan, 2020</time>
                                                <p>
                                                    Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam
                                                    aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed
                                                    necessitatibus aut est. Eum officiis sed repellat maxime vero nisi
                                                    natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.
                                                </p>
                                            </div>

                                        </div>
                                    </div><!-- End comment reply #1-->

                                    <div id="comment-reply-1" class="comment comment-reply">
                                        <form
                                            action="{{ route('project.ProjectViewDetail.commentStore') }}">
                                            @csrf
                                            <div class="row">
                                                <input name="bid_id" type="hidden" value="xm234jq">
                                                <input name="user_id" type="hidden" value="xm234jq">
                                                <div class="col form-group">
                                                    <textarea name="desc" class="form-control"
                                                        placeholder="Tulis pesan anda"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tinggalkan Pesan</button>
                                        </form>
                                    </div> --}}


                                @endforeach
                            @endif

                            @endif
                            <?php
                            if ($project->status != 'open') {
                                echo '<h4 class="comments-count">Projek anda sudah ada pemenang</h4>';
                            }
                            ?>
                            <?php
                            if($userIdSession != $project->user_id){
                            ?>
                            <div class="reply-form">
                                <h4>Buat penawaran</h4>
                                <p>Masukan detail penawaran anda </p>
                                <form
                                    action="{{ route('project.ProjectViewDetail.bidstore', ['userid' => $userIdSession, 'projectid' => $project->project_id]) }}">
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
                                            <input name="start" type="date" class="form-control"
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
                        @endif


                    </article><!-- End blog entry -->

                    @endsection
          