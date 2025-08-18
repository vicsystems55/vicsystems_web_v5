@extends('layouts.app')

@section('content')
    <div>
        <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-video-container keep-dark animate-box animated animate__animated"
                data-animate="animate__fadeInUp">
                <div id="banner-video-background"></div>
                <div class="hero-container position-relative">
                    <div class="d-flex flex-column gspace-2">
                        <!-- Main Heading -->
                        <h1 class="title-heading-banner animate-box animated animate__animated"
                            data-animate="animate__fadeInLef">
                            Driving Growth with Technology
                        </h1>

                        <div class="banner-heading">
                            <!-- Video Section -->
                            <div class="banner-video-content order-xl-1 order-2 animate-box animated animate__animated"
                                data-animate="animate__fadeInUp">
                                <div
                                    class="d-flex flex-column flex-xl-row text-xl-start text-center align-items-center gspace-5">
                                    <button class="request-loader"
                                        data-video="https://www.youtube.com/embed/ziiHfGe8Ce8?si=2tS5tmEX_H9fQjJ7">
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                    <p>
                                        See how we power businesses with ICT, digital tools, and innovation.
                                    </p>
                                </div>
                            </div>

                            <!-- Banner Content -->
                            <div class="banner-content order-xl-2 order-1 animate-box animated animate__animated"
                                data-animate="animate__fadeInRight">
                                <p>
                                    Vicsystems delivers ICT services, smart electronics, and AI creativity —
                                    helping businesses and individuals succeed in the digital age.
                                </p>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-center justify-content-xl-start align-self-center align-self-xl-start gspace-3">
                                    <a href="/about" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>Get Started</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                    <!-- Reviewer Section -->
                                    <div class="banner-reviewer">
                                        <div class="d-flex flex-row align-items-center">
                                            <img src="image/Photo-14.jpg" alt="Reviewer" class="avatar">
                                            <img src="image/Photo-1.jpg" alt="Reviewer" class="avatar">
                                            <img src="image/Photo-2.jpg" alt="Reviewer" class="avatar">
                                        </div>
                                        <div class="detail">
                                            <span>2.7k+ Clients</span>
                                            <span>Worldwide</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Section Expertise -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column flex-xl-row gspace-5">
                    <div class="expertise-img-layout">
                        <div class="image-container expertise-img">
                            <img src="image/working-job-career-casual-showing-SJZWF3N-1024x737.jpg" alt="Expertise Image"
                                class="img-fluid animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="expertise-layout d-non">
                                <div class="d-flex flex-column">
                                    <div class="card-expertise-wrapper">
                                        <div class="card card-expertise animate-box animated animate__animated"
                                            data-animate="animate__fadeInDown">
                                            <h4>Ready to Elevate Your Digital Presence?</h4>
                                            <p>Let’s build the right tech solutions for your growth.</p>
                                            <div class="d-flex align-items-center flex-row gspace-2 expertise-link">
                                                <a href="contact.html">Get Free Consultation</a>
                                                <i class="fa-solid fa-circle-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="expertise-spacer"></div>
                                </div>
                                <div class="expertise-spacer"></div>
                            </div>
                        </div>
                    </div>

                    <div class="expertise-title">
                        <div class="sub-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Our Expertise</span>
                        </div>
                        <h3 class="title-heading animate-box animated animate__animated"
                            data-animate="animate__fadeInRight">
                            Innovative Solutions, Tailored for You
                        </h3>
                        <p>
                            At <strong>Vicsystems Technologies Ltd.</strong>, we combine passion, experience, and innovation
                            to deliver solutions that help businesses grow in the digital era.
                            From web and mobile development to IT consultancy and digital media,
                            we provide strategies that produce measurable results.
                        </p>

                        <div class="d-flex flex-column flex-md-row gspace-2">
                            <div class="expertise-list">
                                <h5>What We Do Best</h5>
                                <ul class="check-list">
                                    <li><a href="single_services.html">Web & Mobile App Development</a></li>
                                    <li><a href="single_services.html">IT Consultancy & Support</a></li>
                                    <li><a href="single_services.html">Branding & Digital Media</a></li>
                                    <li><a href="single_services.html">Software & System Solutions</a></li>
                                    <li><a href="single_services.html">Custom Business Tools</a></li>
                                </ul>
                            </div>

                            <div class="card card-expertise card-expertise-counter animate-box animated animate__animated"
                                data-animate="animate__fadeInUp">
                                <div class="d-flex flex-row gspace-2 align-items-center">
                                    <div class="d-flex flex-row align-items-center">
                                        <span class="counter" data-target="10"></span>
                                        <span class="counter-detail">+</span>
                                    </div>
                                    <h6>Years of Combined Tech Experience</h6>
                                </div>
                                <p>
                                    Trusted by businesses in media, healthcare, energy, and beyond
                                    to deliver reliable, scalable, and innovative solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Modal Video -->
        <div class="section p-0">
            <div id="modal-overlay" class="modal-overlay">
                <span class="my-close"><i class="fa-solid fa-xmark"></i></span>
                <div class="my-modal">
                    <iframe id="my-video-frame" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        @include('incs.partners')

        <!-- Section Why Choose Us -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column flex-xl-row gspace-5">

                    <!-- Cards -->
                    <div class="chooseus-card-container">
                        <div class="d-flex flex-column gspace-2">

                            <!-- Card 1 -->
                            <div class="card card-chooseus animate-box animated fast animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="chooseus-icon-wrapper">
                                    <div class="chooseus-spacer above"></div>
                                    <div class="chooseus-icon-layout">
                                        <div class="chooseus-icon">
                                            <img src="image/Icon-2.png" alt="Digital Marketing" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="chooseus-spacer below"></div>
                                </div>
                                <div class="chooseus-content">
                                    <h4 class="chooseus-title">Digital Marketing That Works</h4>
                                    <p>We help small businesses grow with tailored online campaigns that boost visibility,
                                        attract customers, and strengthen brand identity.</p>
                                    <div class="link-wrapper">
                                        <a href="#">Read More</a>
                                        <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="card card-chooseus animate-box animated animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="chooseus-icon-wrapper">
                                    <div class="chooseus-spacer above"></div>
                                    <div class="chooseus-icon-layout">
                                        <div class="chooseus-icon">
                                            <img src="image/icon-1.png" alt="Websites" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="chooseus-spacer below"></div>
                                </div>
                                <div class="chooseus-content">
                                    <h4 class="chooseus-title">Impactful Website Development</h4>
                                    <p>From startups to growing enterprises, we build responsive websites that showcase your
                                        business and convert visitors into loyal clients.</p>
                                    <div class="link-wrapper">
                                        <a href="#">Read More</a>
                                        <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="card card-chooseus animate-box animated slow animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="chooseus-icon-wrapper">
                                    <div class="chooseus-spacer above"></div>
                                    <div class="chooseus-icon-layout">
                                        <div class="chooseus-icon">
                                            <img src="image/Icon-3.png" alt="Apps" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="chooseus-spacer below"></div>
                                </div>
                                <div class="chooseus-content">
                                    <h4 class="chooseus-title">Web & Mobile Apps</h4>
                                    <p>We create scalable web and mobile applications that simplify business operations,
                                        expand customer reach, and drive sustainable growth.</p>
                                    <div class="link-wrapper">
                                        <a href="#">Read More</a>
                                        <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="chooseus-content-container">
                        <div class="d-flex flex-column gspace-5">
                            <div class="d-flex flex-column gspace-2">
                                <div class="sub-heading animate-box animated animate__animated"
                                    data-animate="animate__fadeInDown">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Why Choose Vicsystems Technologies</span>
                                </div>
                                <h2 class="title-heading animate-box animated animate__animated"
                                    data-animate="animate__fadeInDown">
                                    Empowering Businesses Through Technology
                                </h2>
                                <p class="mb-0 animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                    At Vicsystems Technologies, we transform ideas into powerful digital solutions. From
                                    strategic marketing to modern websites and mobile apps, we’ve helped small businesses
                                    become more visible, connect with their audience, and compete confidently in today’s
                                    market.
                                </p>
                            </div>

                            <!-- Image + CTA -->
                            <div class="image-container">
                                <img src="image/team-collaboration.png" alt="Why Choose Us Image" class="chooseus-img">
                                <div class="card-chooseus-cta-layout">
                                    <div class="chooseus-cta-spacer"></div>
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="chooseus-cta-spacer"></div>
                                        <div class="card-chooseus-cta-wrapper">
                                            <div class="card card-chooseus-cta animate-box animated animate__animated"
                                                data-animate="animate__fadeInUp">
                                                <h5>Partner with us to grow your business digitally.</h5>
                                                <div class="link-wrapper">
                                                    <a href="contact.html">Let’s Build Together</a>
                                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Section Guide -->
        <div class="section-guide">
            <div class="guide-banner">
                <div class="hero-container">
                    <div class="guide-content animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <div class="guide-video-container">
                            <button class="request-loader"
                                data-video="https://www.youtube.com/embed/hK0ZGDhl7Jo?si=yqffLSSHCDcOZxl6?autoplay=1"><i
                                    class="fa-solid fa-play"></i></button>
                            <p>
                                Discover How We Empower Businesses
                            </p>
                        </div>
                        <div class="d-flex flex-column gspace-2">
                            <h3 class="title-heading">Transform Your Business with vicSystems</h3>
                            <p>From websites to mobile apps and digital marketing, we help brands stand out, reach more
                                people, and grow faster in today’s digital world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Section Service -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column justify-content-center text-center gspace-5">
                    <div class="d-flex flex-column justify-content-center text-center gspace-2">
                        <div class="sub-heading align-self-center animate-box" data-animate="animate__fadeInDown">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Our Core Services</span>
                        </div>
                        <h2 class="title-heading heading-container heading-container-medium animate-box"
                            data-animate="animate__fadeInDown">
                            Digital Solutions That Drive Real Results
                        </h2>
                    </div>

                    <div class="card-service-wrapper">
                        <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 grid-spacer-2">

                            @foreach ($services as $service)
                                <div class="col">
                                    <div class="card card-service animate-box" data-animate="animate__fadeInLeft">
                                        <div class="d-flex flex-row align-items-center gspace-2 gspace-md-3">
                                            <div class="service-icon-wrapper">
                                                <div class="service-icon">
                                                    <i class="{{ $service->icon ?? 'fa-solid fa-circle' }}"
                                                        style="font-size: 2rem; color: white;"></i>
                                                </div>
                                            </div>
                                            <div class="service-title">
                                                <h4 class="mb-0">{{ $service->title }}</h4>
                                            </div>
                                        </div>
                                        <p>{{ $service->short_description }}</p>
                                        <a href="#" class="btn btn-accent">
                                            <div class="btn-title">
                                                <span>View Details</span>
                                            </div>
                                            <div class="icon-circle">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="service-link-footer">
                        <p>
                            Need a custom solution? Let's create a strategy tailored for your business.
                            <a href="{{ route('contact') }}">Get a Free Strategy Call</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Section Case Studies -->
        <div class="section p-0 d-none">
            <div class="hero-container">
                <div class="case-studies-layout">
                    <div class="card card-case-studies">
                        <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                            <div class="col">
                                <div class="d-flex flex-column gspace-2 animate-box animated animate__animated"
                                    data-animate="animate__fadeInLeft">
                                    <div class="sub-heading">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        <span>Case Studies</span>
                                    </div>
                                    <h2 class="title-heading">See How We Help Businesses Thrive</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column h-100 justify-content-end gspace-2 animate-box animated animate__animated"
                                    data-animate="animate__fadeInRight">
                                    <p>We don't just talk about results—we deliver them. Here are some of our most
                                        impactful case studies showcasing how our digital marketing strategies drive
                                        success.</p>
                                    <div class="link-wrapper">
                                        <a href="case_studies.html">More Case Studies</a>
                                        <i class="fa-solid fa-circle-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column gspace-2">
                            <div class="d-flex flex-column flex-xl-row gspace-2">
                                <div class="card case-studies-content local-business animate-box animated fast animate__animated"
                                    data-animate="animate__fadeInUp">
                                    <div
                                        class="case-studies-component large align-self-end justify-content-end align-items-end">
                                        <div class="cs-component">
                                            <a href="#">Social</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Influencer</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Retargeting</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Google</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Video</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Local</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Community</a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gspace-2">
                                        <a href="#" class="case-studies-title">
                                            <h4>Local Business Digital Transformation</h4>
                                        </a>
                                        <p>
                                            5x ROI on social media campaigns & 80% increase in engagement lorem ipsum
                                            dolor sit amet consectetur.
                                        </p>
                                    </div>
                                </div>
                                <div class="card case-studies-content saas-leads animate-box animated animate__animated"
                                    data-animate="animate__fadeInUp">
                                    <div class="d-flex flex-column gspace-2">
                                        <a href="#" class="case-studies-title">
                                            <h4>SaaS Lead Generation Success</h4>
                                        </a>
                                        <p>
                                            150% increase in qualified leads & 70% lower customer acquisition cost.
                                        </p>
                                    </div>
                                    <div
                                        class="case-studies-component small align-self-end justify-content-end align-items-end">
                                        <div class="cs-component">
                                            <a href="#">Content</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Linkeind Ads</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Email</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Webinar</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Landing</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">CRM</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Retargeting</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-xl-row gspace-2">
                                <div class="card case-studies-content ecommerce animate-box animated fast animate__animated"
                                    data-animate="animate__fadeInUp">
                                    <div
                                        class="case-studies-component small align-self-start justify-content-start align-items-start">
                                        <div class="cs-component">
                                            <a href="#">SEO</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">PPC Ads</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">CRO</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Analytics</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Influencer</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">A/B Testing</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Email</a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gspace-2">
                                        <a href="#" class="case-studies-title">
                                            <h4>E-Commerce Growth Boost</h4>
                                        </a>
                                        <p>
                                            3x increase in organic traffic & 2x revenue growth in 6 months lorem ipsum
                                            dolor.
                                        </p>
                                    </div>
                                </div>

                                <div class="card case-studies-content startup-branding animate-box animated animate__animated"
                                    data-animate="animate__fadeInUp">
                                    <div class="d-flex flex-column gspace-2">
                                        <a href="#" class="case-studies-title">
                                            <h4>Startup Brand Awareness Expansion</h4>
                                        </a>
                                        <p>
                                            200% increase in brand mentions & 60% higher engagement rates lorem ipsum
                                            dolor sit amet consectetur.
                                        </p>
                                    </div>
                                    <div
                                        class="case-studies-component large align-self-start justify-content-start align-items-start">
                                        <div class="cs-component">
                                            <a href="#">Viral</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Partnership</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">PR</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Growth</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">UGC</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Media</a>
                                        </div>
                                        <div class="cs-component">
                                            <a href="#">Brading</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>

        <!-- Section Testimonial -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-5">
                    <div class="d-flex flex-column flex-xl-row gspace-5">
                        <div class="testimonial-reviewer-container">
                            <div class="testimonial-header-wrapper animate-box animated fast animate__animated"
                                data-animate="animate__fadeInDown">
                                <div class="card card-testimonial-reviewer">
                                    <div
                                        class="d-flex flex-column flex-md-row flex-xl-column justify-content-between gspace-3">
                                        <div class="testimonial-reviewer">
                                            <div class="avatar-container">
                                                <img src="image/Photo-14.jpg" alt="Testimonial Reviewer" class="avatar">
                                                <img src="image/Photo-1.jpg" alt="Testimonial Reviewer" class="avatar">
                                                <img src="image/Photo-2.jpg" alt="Testimonial Reviewer" class="avatar">
                                                <img src="image/Photo-6.jpg" alt="Testimonial Reviewer" class="avatar">
                                            </div>
                                            <div class="detail">
                                                <h6>2.7k Positive</h6>
                                                <h6>Reviews</h6>
                                            </div>
                                        </div>
                                        <div class="testimonial-rating-container">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center gspace-1">
                                                <div class="d-flex flex-row align-items-center">
                                                    <span class="counter" data-target="90"></span>
                                                    <span class="counter-detail">%</span>
                                                </div>
                                                <p>Improved Project</p>
                                            </div>
                                            <div class="underline-vertical"></div>
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center gspace-1">
                                                <div class="d-flex flex-row align-items-center">
                                                    <span class="counter" data-target="49"></span>
                                                    <span class="counter-detail">%</span>
                                                </div>
                                                <p>New Project</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex flex-column flex-md-row flex-xl-column justify-content-center gspace-2">
                                        <div class="testimonial-header-link-wrapper">
                                            <i class="fa-regular fa-circle-check accent-color"></i>
                                            <a href="#">Social Media Growth</a>
                                        </div>
                                        <div class="testimonial-header-link-wrapper">
                                            <i class="fa-regular fa-circle-check accent-color"></i>
                                            <a href="#">Performance Marketing</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-title-container">
                            <div class="testimonial-header-wrapper-title animate-box animated animate__animated"
                                data-animate="animate__fadeInRight">
                                <div class="card-testimonial-header-title">
                                    <div class="sub-heading">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        <span>What Our Client Says</span>
                                    </div>
                                    <h2 class="title-heading">Real Stories of <br>Growth and Transformation
                                    </h2>
                                    <p>See how Vicsystems Technologies has helped businesses boost visibility,
                                        attract more customers, and achieve digital success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="overflow-hidden">
                            <div class="swiper swiperTestimonial">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card card-testimonial">
                                            <div class="stars">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <div class="d-flex flex-row gspace-2">
                                                    <div class="testimonial-image">
                                                        <img src="images/testimonials/client1.jpg" alt="Testimonial Image"
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="profile-name">Dwin Okafor</span>
                                                        <p class="profile-info">Nigeria</p>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                            </div>
                                            <p class="testimonial-description">
                                                “Vicsystems created a modern website for my business that immediately
                                                attracted new clients. Their support team is always available when I need
                                                updates.”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card card-testimonial">
                                            <div class="stars">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <div class="d-flex flex-row gspace-2">
                                                    <div class="testimonial-image">
                                                        <img src="images/testimonials/client2.jpg" alt="Testimonial Image"
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="profile-name">Isaiah Kaybaju</span>
                                                        <p class="profile-info">United Kingdom</p>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                            </div>
                                            <p class="testimonial-description">
                                                “They developed an app that helped us manage operations smoothly. The design
                                                is clean, and our customers find it very easy to use.”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card card-testimonial">
                                            <div class="stars">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <div class="d-flex flex-row gspace-2">
                                                    <div class="testimonial-image">
                                                        <img src="images/testimonials/client3.jpg" alt="Testimonial Image"
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="profile-name">Godis Chukwere</span>
                                                        <p class="profile-info">United Kingdom</p>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                            </div>
                                            <p class="testimonial-description">
                                                “Their digital marketing strategies gave my brand the visibility it was
                                                lacking. I’ve seen real growth in traffic and customer engagement.”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card card-testimonial">
                                            <div class="stars">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <div class="d-flex flex-row gspace-2">
                                                    <div class="testimonial-image">
                                                        <img src="images/testimonials/client4.jpg" alt="Testimonial Image"
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="profile-name">Joseph Sabir</span>
                                                        <p class="profile-info">United Kingdom</p>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                            </div>
                                            <p class="testimonial-description">
                                                “I’m impressed with their professionalism. From branding to online
                                                visibility, Vicsystems delivered beyond expectations. Highly recommended!”
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        @include('incs.our_process')


        <!-- Section Pricing -->
        <div class="section d-none">
            <div class="hero-container d-none">
                <div class="d-flex flex-column justify-content-center text-center gspace-5">
                    <div class="d-flex flex-column gspace-2 animate-box animated animate__animated"
                        data-animate="animate__fadeInUp">
                        <div class="sub-heading align-self-center">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Our Core Services</span>
                        </div>
                        <h2 class="title-heading heading-container heading-container-short">Flexible Pricing Plans for
                            Every Business</h2>
                    </div>
                    <div class="row row-cols-xl-3 row-cols-1 grid-spacer-2">
                        <div class="col">
                            <div class="pricing-container">
                                <div class="card card-pricing-title animate-box animated animate__animated"
                                    data-animate="animate__fadeInLeft">
                                    <div class="spacer"></div>
                                    <div class="content">
                                        <h3 class="title-heading">Let's Find the Right Strategy for You!</h3>
                                        <div class="link-wrapper">
                                            <a href=".contact.html">Book a Free Consultation</a>
                                            <i class="fa-solid fa-arrow-circle-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-pricing animate-box animated animate__animated"
                                    data-animate="animate__fadeInUp">
                                    <h4>Starter</h4>
                                    <p>Perfect for startups & small businesses</p>
                                    <div class="d-flex flex-row gspace-1 align-items-center h-100">
                                        <h3>
                                            $99
                                        </h3>
                                        <p>/Month</p>
                                    </div>
                                    <a href="#" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>View Details</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                    <ul class="check-list">
                                        <li><a href="single_services.html">Basic SEO & Marketing</a></li>
                                        <li><a href="single_services.html">Social Media Management (1 Platform)</a>
                                        </li>
                                        <li><a href="single_services.html">Monthly Performance Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-pricing pricing-highlight animate-box animated slow animate__animated"
                                data-animate="animate__fadeInUp">
                                <div class="spacer"></div>
                                <h4>Enterprise</h4>
                                <p>Full scale marketing for maximum impact</p>
                                <div class="d-flex flex-row gspace-1 align-items-center">
                                    <h3>
                                        $399
                                    </h3>
                                    <p>/Month</p>
                                </div>
                                <a href="#" class="btn btn-accent">
                                    <div class="btn-title">
                                        <span>View Details</span>
                                    </div>
                                    <div class="icon-circle">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                                <div class="core-benefits">
                                    <div class="benefit">
                                        <i class="fa-solid fa-brain"></i>
                                        <a href="#">Dedicated Account Manager</a>
                                    </div>
                                    <div class="benefit">
                                        <i class="fa-brands fa-accessible-icon"></i>
                                        <a href="#">Priority Support 24/7</a>
                                    </div>
                                    <div class="benefit">
                                        <i class="fa-solid fa-bug"></i>
                                        <a href="#">Customized Growth Strength</a>
                                    </div>
                                </div>
                                <ul class="check-list">
                                    <li><a href="#">Complate Digital Marketing Suite</a></li>
                                    <li><a href="#">Paid Ads Management</a></li>
                                    <li><a href="#">Dedicated Account Manager</a></li>
                                    <li><a href="#">Email Marketing & Automation</a></li>
                                    <li><a href="#">Dedicated Account Manager</a></li>
                                    <li><a href="#">Weekly Performance insights</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="pricing-container">
                                <div class="card pricing-highlight-box animate-box animated animate__animated"
                                    data-animate="animate__fadeInRight">
                                    <div class="d-flex flex-column gspace-2 w-100">
                                        <h5>Your Growth, Our Priority!</h5>
                                        <div class="d-flex flex-column gspace-2">
                                            <div class="pricing-highlights">
                                                <a href="#">Data-Driven Digital Marketing</a>
                                                <i class="fa-solid fa-arrow-circle-right"></i>
                                            </div>
                                            <div class="pricing-highlights">
                                                <a href="#">Proven Strategies for Higher</a>
                                                <i class="fa-solid fa-arrow-circle-right"></i>
                                            </div>
                                            <div class="pricing-highlights">
                                                <a href="#">Scalable Solution for Every Business</a>
                                                <i class="fa-solid fa-arrow-circle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spacer"></div>
                                </div>
                                <div class="card card-pricing animate-box animated animate__animated"
                                    data-animate="animate__fadeInUp">
                                    <h4>Growth</h4>
                                    <p>Best for growing businesses ready</p>
                                    <div class="d-flex flex-row gspace-1 align-items-center h-100">
                                        <h3>
                                            $299
                                        </h3>
                                        <p>/Month</p>
                                    </div>
                                    <a href="#" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>View Details</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                    <ul class="check-list">
                                        <li><a href="single_services.html">Basic SEO & Marketing</a></li>
                                        <li><a href="single_services.html">Social Media Management (1 Platform)</a>
                                        </li>
                                        <li><a href="single_services.html">Monthly Performance Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Newsletter -->
        <div class="section">
            <div class="hero-container">
                <div class="newsletter-wrapper">
                    <div class="newsletter-layout">
                        <div class="spacer"></div>
                        <div class="d-flex flex-column gspace-5 position-relative z-2">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated"
                                data-animate="animate__fadeInLeft">
                                <h3 class="title-heading">Stay Ahead in Digital Marketing</h3>
                                <p>Get exclusive insights, trends, and strategies delivered straight to your inbox.
                                    Subscribe now!</p>
                            </div>
                            <div id="newsletter-success" class="alert success hidden">
                                <span class="check-icon"><i class="fa-solid fa-2xl fa-check"></i></span>
                                <p class="text-center">Thank you! Form submitted successfully.</p>
                            </div>

                            <div id="newsletter-error" class="alert error hidden">
                                <span class="cross-icon"><i class="fa-solid fa-2xl fa-xmark"></i></span>
                                <p class="text-center">Oops! Form submission failed. Please try again.</p>
                            </div>

                            <form action="#" method="POST"
                                id="newsletterForm" class="needs-validation animate-box animated animate__animated"
                                data-animate="animate__fadeInRight">
                                <div class="input-container">
                                    <input type="email" name="newsletter-email" id="newsletter-email"
                                        placeholder="Give your best email" required>
                                    <p class="error-text hidden"></p>
                                </div>
                                <button class="btn btn-accent" type="submit">
                                    <span class="btn-title">
                                        <span>Subscribe</span>
                                    </span>
                                    <span class="icon-circle">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Blog -->
        <div class="section d-none">
            <div class="hero-container d-none">
                <div class="d-flex flex-column gspace-5">
                    <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5 m-0">
                        <div class="col col-xl-8 ps-0 pe-0">
                            <div class="d-flex flex-column gspace-2 animate-box animated fast animate__animated"
                                data-animate="animate__fadeInLeft">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Insights & Trends</span>
                                </div>
                                <h2 class="title-heading">Latest Digital Marketing Strategies & Tips</h2>
                            </div>
                        </div>
                        <div class="col col-xl-4 ps-0 pe-0">
                            <div class="d-flex flex-column gspace-2 justify-content-end h-100 animate-box animated animate__animated"
                                data-animate="animate__fadeInRight">
                                <p>Explore our latest blog articles covering industry trends, expert insights, and
                                    actionable strategies to elevate your digital marketing game.</p>
                                <div class="link-wrapper">
                                    <a href="blog.html">View All Articles</a>
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-md-2 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-blog animate-box animated animate__animated"
                                data-animate="animate__fadeInUp" onclick="window.location.href='single_post.html'">
                                <div class="blog-image">
                                    <img src="image/collaborative-process-of-multicultural-skilled-peo-AN9FZBQ-1024x683.jpg"
                                        alt="Blog Image">
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row gspace-2">
                                        <div class="d-flex flex-row gspace-1 align-items-center">
                                            <i class="fa-solid fa-calendar accent-color"></i>
                                            <span class="meta-data">April 14, 2025</span>
                                        </div>
                                        <div class="d-flex flex-row gspace-1 align-items-center">
                                            <i class="fa-solid fa-folder accent-color"></i>
                                            <span class="meta-data">Social Media</span>
                                        </div>
                                    </div>
                                    <a href="single_post.html" class="blog-link">Mastering Instagram and Facebook
                                        Ads</a>
                                    <p>Lorem ipsum dolor si consectetur adipiscing elit ut elit tellus luctus nec
                                        ullamcorper mattis pulvinar dapibus leo.</p>
                                    <a href="single_post.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-blog animate-box animated animate__animated"
                                data-animate="animate__fadeInUp" onclick="window.location.href='single_post.html'">
                                <div class="blog-image">
                                    <img src="image/collaborative-process-of-multicultural-skilled-peo-LY58K9U-1024x683.jpg"
                                        alt="Blog Image">
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row gspace-2">
                                        <div class="d-flex flex-row gspace-1 align-items-center">
                                            <i class="fa-solid fa-calendar accent-color"></i>
                                            <span class="meta-data">April 14, 2025</span>
                                        </div>
                                        <div class="d-flex flex-row gspace-1 align-items-center">
                                            <i class="fa-solid fa-folder accent-color"></i>
                                            <span class="meta-data">SEO</span>
                                        </div>
                                    </div>
                                    <a href="single_post.html" class="blog-link">Growth Strategies for Digital
                                        Business</a>
                                    <p>Lorem ipsum dolor si consectetur adipiscing elit ut elit tellus luctus nec
                                        ullamcorper mattis pulvinar dapibus leo.</p>
                                    <a href="single_post.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
