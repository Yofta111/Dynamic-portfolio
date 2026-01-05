<!DOCTYPE html>
<html lang="en">
<head>


    <title>Yoftahe's rezume</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">


</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">



<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#section-home">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-resume">My Education</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>




<section class="site-hero" style="background-image: url({{asset('frontend/images/Yoftahe.webp')}});" id="section-home" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row intro-text align-items-center justify-content-center">
            <div class="col-md-10 text-center pt-5">

                <h1 class="site-heading site-animate">Hello, I'm <strong class="d-block">Yoftahe Araya</strong></h1>
                <strong class="d-block text-white text-uppercase letter-spacing">and this is My Rezume</strong>

            </div>
        </div>
    </div>
</section> <!-- section -->






<section class="site-section" id="section-portfolio">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center col-md-12">
                <h2>Featured <strong>Portfolio</strong></h2>
            </div>
        </div>
        <div class="filters-content">
            <div class="row grid">
                @foreach ($portfolios as $portfolio)
                    <div class="single-portfolio col-sm-4 all mockup">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid"
                                     src="{{ asset($portfolio->image) }}"
                                     alt="Video_editing_image">
                            </div>

                            <a href="{{ asset($portfolio->image) }}" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex">
                                        <img src="{{ asset('images/preview.html') }}" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="p-inner">
                            <h4>{{ $portfolio->description }}</h4>
                            <div class="cat">{{$portfolio->title}}</div>
                        </div>
                    </div>

    @endforeach

</section>
<section class="site-section " id="section-resume">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="section-heading text-center">
                    <h2>My <strong>Education</strong></h2>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="mb-5"></h2>
                <div class="resume-item mb-4">
                    <span class="date"><span class="icon-calendar"></span> September 2018 - August 2020</span>
                    <h3>Elementary School Education</h3>
                    <p>Foundational years at Saint Joseph School, where curiosity was nurtured through structured learning and early academic milestones, setting the stage for future educational growth.
                        This period instilled love for discovery that continues to shape my approach to learning.</p>
                    <span class="school">Saint Joseph School</span>
                </div>

                <div class="resume-item mb-4">
                    <span class="date"><span class="icon-calendar"></span> October 2024 - July 2024.</span>
                    <h3>Freshman Year</h3>
                    <p>The beginning of university life at Addis Ababa University, adapting to collegiate expectations, and building a foundation in one’s chosen field of study.
                        I embraced new challenges and began to see myself as part of a larger academic and professional community.</p>
                    <span class="school">Addis Ababa University</span>
                </div>
            </div>
            <div class="col-md-6">


                <h2 class="mb-5"></h2>

                <div class="resume-item mb-4">
                    <span class="date"><span class="icon-calendar"></span> September 2020 - July 2024</span>
                    <h3>High School</h3>
                    <p>our transformative years at Saint Joseph School, marked by intellectual expansion, personal development, and preparation for higher education through rigorous coursework and extracurricular engagement.</p>
                    <span class="school">Saint Joseph School</span>
                </div>

                <div class="resume-item mb-4">
                    <span class="date"><span class="icon-calendar"></span> October 2025 - Present</span>
                    <h3>Software Engineering</h3>
                    <p>Currently pursuing a degree in Software Engineering at HiLCoE School of Computer Science & Technology, diving into programming fundamentals, algorithms, and real-world tech applications with a focus on innovation and problem-solving.</p>
                    <span class="school">HiLCoE School of Computer Science & Technology</span>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="site-section" id="section-about">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
                <img src="{{asset('frontend/images/face.jpg')}}" alt="Image placeholder" class="img-fluid">
            </div>
            <div class="col-lg-5 pl-lg-5">
                <div class="section-heading">
                    <h2>About <strong>Me</strong></h2>
                </div>
                <p class="mb-5  ">  I am a creative and versatile designer specializing in graphic design, web development, and video production. With a passion for crafting visually compelling and user-friendly experiences, I bring ideas to life across multiple digital platforms. Whether it’s designing eye-catching graphics, building responsive websites, or producing engaging video content, I combine creativity
                    with technical expertise to deliver high-quality, impactful results. I thrive on turning concepts into visually stunning realities that resonate with audiences and elevate brands.</p>

                <p>
                    <a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Hire Me</a>
                    <a href="#" class="btn btn-secondary px-4 py-2 btn-sm">Download CV</a>
                </p>
            </div>
        </div>


    </div>
</section>

<section class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2>Client <strong>Testimonial</strong></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                <div class="block-47 d-flex mb-5">
                    <div class="block-47-image">
                        <img src="{{asset('frontend/images/person_2.jpg')}}" alt="Image placeholder" class="img-fluid">
                    </div>
                    <blockquote class="block-47-quote">
                        <p>“Working with Yoftahe Araya has been an absolute game-changer for our business. Their attention to detail, professionalism, and commitment to results exceeded our expectations. We saw noticeable improvements within weeks, and their team made the entire process smooth and enjoyable. Highly recommend!</p>
                        <cite class="block-47-quote-author">&mdash; Abel Tewelde, CEO <a href="#">XYZ Inc.</a></cite>
                    </blockquote>
                </div>

            </div>
            <div class="col-md-6">

                <div class="block-47 d-flex mb-5">
                    <div class="block-47-image">
                        <img src="{{asset('frontend/images/person_2.jpg')}}" alt="Image placeholder" class="img-fluid">
                    </div>
                    <blockquote class="block-47-quote">
                        <p>“I couldn’t be happier with the service from Yoftahe Araya. They truly understood our goals and went above and beyond to deliver exactly what we needed. The communication was clear, the work was top-quality, and the results speak for themselves.”</p>
                        <cite class="block-47-quote-author">&mdash; Zelalem Abebe, CEO <a href="#">XYZ Inc.</a></cite>
                    </blockquote>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="site-section pb-0"  id="section-services">
    <div class="container">

        <div class="row mb-4">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2>My <strong>Services</strong></h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-4 text-center mb-5">
                <div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-browser2"></span>
						</span>
                    <h3 class="mb-4">Fullstack Website Development</h3>
                    <p>Design-focused web developer with strong visual sensibility and proficiency in translating UI/UX concepts into clean, responsive websites. Combines front-end skills with a designer’s eye for layout, typography, and brand consistency.</p>
                    <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 text-center mb-5">
                <div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-presentation"></span>
						</span>
                    <h3 class="mb-4">Graphics Design</h3>
                    <p>Creative Graphic Designer skilled in visual branding, and digital content. Uses in Adobe Illustrator and Adobe Photoshop. Translates client ideas into polished, on-brand designs for print and digital—focused on clarity, impact, and consistency.</p>
                    <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 text-center mb-5">
                <div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-video2"></span>
						</span>
                    <h3 class="mb-4">Video Editing</h3>
                    <p>I've worked on content for platforms like TikTok and looking to work on YouTube, and I enjoy creating
                        clean, engaging edits that match the message and audience. I'm eager to learn more and grow as part of your team.</p>
                    <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
                </div>
            </div>



        </div>
    </div>
</section>




<section class="site-section" id="section-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="section-heading text-center">
                    <h2>Blog on <strong>Medium</strong></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="blog-entry">
                    <a href="#"><img src="{{asset('frontend/images/post_1.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
                    <div class="blog-entry-text">
                        <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                        <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                        <div class="meta">
                            <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                            <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="blog-entry">
                    <a href="#"><img src="{{asset('frontend/images/post_2.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
                    <div class="blog-entry-text">
                        <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                        <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                        <div class="meta">
                            <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                            <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="blog-entry">
                    <a href="#"><img src="{{asset('frontend/images/post_3.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
                    <div class="blog-entry-text">
                        <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                        <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                        <div class="meta">
                            <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                            <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="site-section" id="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="section-heading text-center">
                    <h2>Get <strong>In Touch</strong></h2>
                </div>
            </div>

            <div class="col-md-7 mb-5 mb-md-0">
                <form action="#" class="site-form">
                    <h3 class="mb-5">Get In Touch</h3>
                    <div class="form-group">
                        <input type="text" class="form-control px-3 py-4" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control px-3 py-4" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control px-3 py-4" placeholder="Your Phone">
                    </div>
                    <div class="form-group mb-5">
                        <textarea class="form-control px-3 py-4"cols="30" rows="10" placeholder="Write a Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary  px-4 py-3" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-md-5 pl-md-5">
                <h3 class="mb-5">My Contact Details</h3>
                <ul class="site-contact-details">
                    <li>
                        <span class="text-uppercase">Email</span>
                        <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="601309140520070d01090c4e030f0d">yoftaraya@gmail.com</a>
                    </li>
                    <li>
                        <span class="text-uppercase">Phone</span>
                        +251 915771277
                        <span class="text-uppercase">Address</span>
                        Addis Ababa, ET <br>
                        Kolfe Keranio  <br>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<footer class="site-footer">
    <div class="container">

        <div class="row mb-5">
            <p class="col-12 text-center">
                Copyright &copy; <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved</a>

            </p>
        </div>

        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <p>
                    <a href="#" class="social-item"><span class="icon-facebook"></span></a>
                    <a href="#" class="social-item"><span class="icon-twitter"></span></a>
                    <a href="#" class="social-item"><span class="icon-instagram2"></span></a>
                    <a href="#" class="social-item"><span class="icon-linkedin2"></span></a>
                    <a href="#" class="social-item"><span class="icon-vimeo"></span></a>
                </p>
            </div>
        </div>

    </div>
</footer>




<script src="{{ asset('frontend/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>

<script src="{{ asset('frontend/js/vendor/jquery.easing.1.3.js') }}"></script>

<script src="{{ asset('frontend/js/vendor/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/jquery.waypoints.min.js') }}"></script>

{{-- External CDN files --}}
<script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>

<script src="{{ asset('frontend/js/custom.js') }}"></script>


</body>

</html>
