@extends('layouts.main')

@section('container')


 <!-- Header-->
 <header class="py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder  mb-2">A Bootstrap 5 template for modern businesses</h1>
                    <p class="lead fw-normal  mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ route('project.PostProjectStart') }}">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="assets/img/home1.png" alt="..." /></div>
        </div>
    </div>
</header>
<!-- End Header-->
 



<div id="accordion">

    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">

    @foreach ($faq as $quest)
    <div class="card">
      <div class="card-header" id="heading{{ $quest->faq_id }}">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $quest->faq_id }}" aria-expanded="false" aria-controls="collapse{{ $quest->faq_id }}">
            {{ $quest->title }}
          </button>
        </h5>
      </div>
  
      <div id="collapse{{ $quest->faq_id }}" class="collapse" aria-labelledby="heading{{ $quest->faq_id }}" data-parent="#accordion">
        <div class="card-body">
         {{ $quest->description }}
        </div>
      </div>
    </div>
    @endforeach
</div>
</div>
</div>
  </div>
      

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Portfolio</h2>
                    <p>Check our latest work</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                      <li data-filter="*" class="filter-active">All</li>
                      <li data-filter=".filter-tukang">Tukang</li>
                      <li data-filter=".filter-arsitek">Arsitek</li>
                      <li data-filter=".filter-design">Design Interior</li>
                    </ul>
                  </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                  @foreach ($picture as $pct)
                  @php
                      if($pct->WorkerPortofolio->ref_service_id == 1)
                      {
                        $tagPortofolio = 'tukang';
                      }else if ($pct->WorkerPortofolio->ref_service_id == 2)
                      {
                        $tagPortofolio = 'arsitek';
                      }else if ($pct->WorkerPortofolio->ref_service_id == 3)
                      {
                        $tagPortofolio = 'design';
                      }
                  @endphp 
                  
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $tagPortofolio }}">
                        <div class="portfolio-wrap">
                            <img src="{{ URL::asset($pct->picture_name) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $pct->WorkerPortofolio->name }}</h4>
                                <p>{{ $pct->WorkerPortofolio->description }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ URL::asset($pct->picture_name) }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="{{ $pct->WorkerPortofolio->name }}"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Our hard working team</p>
                </header>

                <div class="row gy-4">
                  @foreach ($worker as $wokr)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset($wokr->profile_pic) }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $wokr->name }}</h4>
                                <span>{{ $wokr->description }}</span>
                                <p>Rp {{ $wokr->price_range }}</p>
                            </div>
                        </div>
                    </div>
                  @endforeach                  
                </div>

            </div>

        </section><!-- End Team Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts form our Blog</p>
                </header>

                <div class="row">
                    @foreach ($article as $artc)
                        <div class="col-lg-4">
                            <div class="post-box">

                                <div class="post-img"><img src="{{ URL::asset($artc->picture) }}" class="img-fluid"
                                        alt=""></div>
                                <span class="post-date">{{ $artc->created_at }}</span>
                                <h3 class="post-title">{{ $artc->title }}</h3>
                                <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->


@endsection
