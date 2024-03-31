<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blaise Sonzie Mennia's Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon_io/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon_io/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon_io/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('img/favicon_io/site.webmanifest') }}">
  {{-- <link href="{{ asset('img/1.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  {{-- Blade UI Icons  --}}
  @bukStyles
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="{{ route('index') }}">Blaise Mennia</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span>software developer</span> from Ghana</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-github"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{ asset('img/me.jpeg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Software Engineer - Full Stack</h3>
          <p class="fst-italic">
            As a seasoned software engineer, I bring a wealth of experience in developing innovative solutions and a passion for leveraging technology to drive positive change.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $about->birthday }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $about->website }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $about->phone }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $about->city }}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $about->age }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelors</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>menniablaise@yahoo.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
          <p>
            {{ $about->about }}
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-moon"></i>
            <span data-purecounter-start="0" data-purecounter-end="356" data-purecounter-duration="1" class="purecounter"></span>
            <p>Late Nights</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-code-square"></i>
            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-cup-hot"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Cups of Coffee</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS/Tailwind <i class="val">99%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">95%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Laravel <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Python <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-github-line" style="color: #ffbb2c;"></i>
            <h3>Github</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-open-source-line" style="color: #5578ff;"></i>
            <h3>Open Source</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-reactjs-line" style="color: #e80368;"></i>
            <h3>React</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <x-si-mysql width=32 height=32 style="color: #e361ff;" />
            <h3>&nbsp; MySQL</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Databases</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class=" ri-game-line" style="color: #ffa76e;"></i>
            <h3>Video Games</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-stack-overflow-line" style="color: #11dbcf;"></i>
            <h3>Stack Overflow</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-server-line" style="color: #4233ff;"></i>
            <h3>Server Management (VPS)</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <x-si-apache width=32 height=32 style="color: #b2904f;" />
            <h3>&nbsp; Apache Web Server</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <x-si-nginx width=32 height=32 style="color: #b20969;"/>
            <h3>&nbsp; Nginx Web Server</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <x-fab-linux style="color: #ff5828;" width=32 height=32 />
            <h3>&nbsp; Linux</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <x-fab-digital-ocean width=32 height=32 style="color: #29cc61;" />
            <h3>&nbsp; Digital Ocean</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    {{-- <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div> --}}
    <!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>Blaise Mennia</h4>
            <p><em>{{ $about->about }}</em></p>
            <p>
            <ul>
              <li>{{ $about->city }}</li>
              <li>{{ $about->phone }}</li>
              <li>{{ $about->email }}</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Bachelor of Science, Computer Science</h4>
            <h5>Jan 2015 - Nov 2018</h5>
            <p><em>Coventry University, Accra</em></p>
            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
          </div>
          <div class="resume-item">
            <h4>Diploma of Higher Education, Computing Science</h4>
            <h5>Nov 2014 - Sep 2017</h5>
            <p><em>Staffordshire University, Accra</em></p>
            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
          </div>
          <div class="resume-item">
            <h4>Advanced Certificate in Database Administration (ORACLE-
              OCA)</h4>
            <h5>Aug 2017</h5>
            <p><em>This certificate was issued by Ghana Institute of Management and Public Administration(GIMPA)            </em></p>
            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>Senior Software Developer (Full-Stack)</h4>
            <h5>Jan 2021 - Present</h5>
            <p><em>Interactive Digital, Accra </em></p>
            <p>
            <ul>
              <li>In this position I have weekly meetings with the manager to discuss and give updates on ongoing and upcoming projects</li>
              <li>I am responsible for managing and configuring our Linux-based Virtual Private Servers (VPS) which run on both Apache and Nginx web servers. </li>
              <li>I build and manage websites for both inhouse purposes and for clients according to their needs. I utilize frontend and backend technologies to build a complete website.</li>
              <li>I also work together with Frontend Developers and UI/UX Designers, both in-house and on client-side to solve technical challenges and delegate set tasks for a smooth and efficient delivery of software products</li>
              <li>This was a hybrid position for my first two years and has been fully remote ever since then.</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Software-User Tester, Programmer & Sales Associate - contract</h4>
            <h5>Jul 2020 - Oct 2020</h5>
            <p><em>TDI-Global, Accra</em></p>
            <p>
            <ul>
              <li>Debugged and built Laravel API's to be consumed by a project built with AngularJS; an e-learning platform (elearning.thinkmy3d.net)</li>
              <li>Optimized and redesigned existing Laravel API's on the e-learning platform which increased the speed of the system considerably</li>
              <li>Occasionally answered and handled customer service complaints</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Backend Developer</h4>
            <h5>Sep 2018 - Mar 2020</h5>
            <p><em>Social Security and National Insurance Trust(SSNIT), Accra</em></p>
            <p>
            <ul>
              <li>I was introduced working on large projects in a formal work settings with version control systems like Gitlab and GitHub</li>
              <li>Built REStful APIs with PHP Laravel for an in-house project that is being used by over two thousand(2,000) employees</li>
              <li>Managing the Oracle database of the project was one of my responsibilities</li>
              <li>Enhanced my time management and accuracy skills</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      {{-- <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div> --}}

      <div class="row portfolio-container">

        @foreach ($portfolios as $portfolio)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ $portfolio->image1 }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $portfolio['portfolio-title'] }}</h4>
              <p>Web App</p>
              <div class="portfolio-links">
                <a href="{{ $portfolio->image1 }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $portfolio['portfolio-title'] }}"><i class="bx bx-plus"></i></a>
                <a href="{{ route('portfolio', ['id' => $portfolio->id]) }}" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>{{ $contact->location }}</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-github"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>{{ $contact->email }}</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>{{ $contact->phone }}</p>
          </div>
        </div>
      </div>

      {{-- <form action="{{ route('contact') }}" method="post" role="form" class="php-email-form mt-4">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form> --}}

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <img src="{{ asset('img/1-removebg-preview.png') }}" alt="" class="logo-footer">
  </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  {{-- <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

  {{-- Blade UI Icons  --}}
  @bukScripts
</body>

</html>