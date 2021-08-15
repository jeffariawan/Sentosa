@extends('layouts.dashboard')

@section('dashboard')


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
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>



                    </article><!-- End blog entry -->

@endsection
