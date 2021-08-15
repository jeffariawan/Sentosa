@extends('layouts.dashboard')

@section('dashboard')

                    <article class="entry entry-single">

                        <div class="entry-content">
                            <form action="{{ route('dashboard.salesrating.store') }}" method="post" class="">
                                {{ csrf_field() }}
                                <h3>Berikan Rating</h3>
                                <div class="form-group">
                                    <label>Score : </label>
                                    <input name="score" class="form-control" type="number" placeholder="nilai dari 1 - 5"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Description : </label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                        rows="3" placeholder="Berikan detail penilaian disini" required></textarea>
                                </div>
                                <input name="project_id" type="hidden" value="{{ $project->project_id }}">
                                <div class="col-md-5">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>

                    </article><!-- End blog entry -->


@endsection
