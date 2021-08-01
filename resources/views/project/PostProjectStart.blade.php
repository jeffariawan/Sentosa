@extends('layouts.main')

@section('container')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-3">
            </div>

            <div class="col-lg-6">
                <header class="section-header">
                    <h2>Tell us what you need done</h2>
                    <h4>skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.</h4>
                </header>

                <form action="{{ route('project.PostProjectStart.store') }}" method="post" class="php-email-form">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-12">
                            <h3>Choose a name for your project</h3>
                            <input type="text" class="form-control" name="title" placeholder="Subject" required>
                        </div>

                        <div class="col-md-12">
                            <h3>Tell us more about your project</h3>
                            <p>Start with a bit about yourself or your business, and include an overview of what you need done.
                            </p>
                            <textarea class="form-control" name="description" rows="4" placeholder="Describe your project here..."
                                required></textarea>
                                <select class="selectpicker" multiple data-live-search="true">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Barbecue</option>
                                  </select>
                                  
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
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                            <button type="submit">Next</button>
                        </div>

                    </div>
                </form>

            </div>

            <div class="col-lg-3">
            </div>

        </div>

    </div>

</section><!-- End Contact Section -->
@endsection