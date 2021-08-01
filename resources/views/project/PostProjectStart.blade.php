@extends('layouts.main')

@section('container')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row gy-4">

            <div class="col-lg-2">
            </div>

            <div class="col-lg-8 bg-light">

                <form action="{{ route('project.PostProjectStart.store') }}" method="post" class="php-email-form">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-12">
                            <label>Choose a name for your project</label>
                            <input name="title" class="form-control" type="text" placeholder="Default input" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleFormControlTextarea1">Tell us more about your project</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe your project here..."  required></textarea>
                          </div>

                          <div class="col-md-12">
                            <h4>What skills are required?</h4>
                            <p>Enter up to 5 skills that best describe your project. Freelancers will use these skills to find projects they are most interested and experienced in.</p>                        
                                @foreach($service as $srvc )
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    <input class="form-check-input" type="checkbox" name="refServiceId[]" value="{{ $srvc->ref_service_id }}" >
                                        {{ $srvc->name }}
                                    </label>
                                </div>
                                @endforeach
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit">Next</button>
                        </div>

                    </div>
                </form>

            </div> 

            <div class="col-lg-2">
            </div>

        </div>

    </div>

</section><!-- End Contact Section -->
@endsection