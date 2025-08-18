@extends('layouts.app')

@section('content')
       <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-layout-wrapper">
                <div class="banner-layout">
                    <div class="d-flex flex-column text-center align-items-center gspace-2">
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">About Vicsystems</h2>
                        <nav class="breadcrumb">
                            <a href="index.html" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">About Us</p>
                        </nav>
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>

<!-- Section Expertise -->
<div class="section">
    <div class="hero-container">
        <div class="d-flex flex-column flex-xl-row gspace-5">

            <!-- Left Image & Call-to-Action -->
            <div class="expertise-img-layout">
                <div class="image-container expertise-img">
                    <img src="image/working-job-career-casual-showing-SJZWF3N-1024x737.jpg"
                         alt="Expertise Image"
                         class="img-fluid animate-box animated animate__animated"
                         data-animate="animate__fadeInUp">
                    <div class="expertise-layout d-non">
                        <div class="d-flex flex-column">
                            <div class="card-expertise-wrapper">
                                <div class="card card-expertise animate-box animated animate__animated"
                                    data-animate="animate__fadeInDown">
                                    <h4>Ready to Elevate Your Digital Growth?</h4>
                                    <p>We design tailored solutions that drive real impact.</p>
                                    <div class="d-flex align-items-center flex-row gspace-2 expertise-link">
                                        <a href="contact.html">Start Your Project</a>
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

            <!-- Right Content -->
            <div class="expertise-title">
                <div class="sub-heading animate-box animated animate__animated"
                     data-animate="animate__fadeInRight">
                    <i class="fa-regular fa-circle-dot"></i>
                    <span>Our Expertise</span>
                </div>
                <h3 class="title-heading animate-box animated animate__animated"
                    data-animate="animate__fadeInRight">
                    Smart Solutions for Every Business
                </h3>
                <p>
                    We bring together creativity, technology, and strategy to help organizations
                    thrive in today’s digital landscape. From IT services to digital media and
                    custom tools, we deliver solutions that are practical and result-driven.
                </p>

                <div class="d-flex flex-column flex-md-row gspace-2">

                    <!-- Expertise List -->
                    <div class="expertise-list">
                        <h5>What We Offer</h5>
                        <ul class="check-list">
                            <li><a href="single_services.html">Web & Mobile Development</a></li>
                            <li><a href="single_services.html">IT Consultancy & Support</a></li>
                            <li><a href="single_services.html">Digital Branding & Media</a></li>
                            <li><a href="single_services.html">Custom Business Solutions</a></li>
                            <li><a href="single_services.html">System Integration</a></li>
                        </ul>
                    </div>

                    <!-- Experience Counter -->
                    <div class="card card-expertise card-expertise-counter animate-box animated animate__animated"
                        data-animate="animate__fadeInUp">
                        <div class="d-flex flex-row gspace-2 align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <span class="counter" data-target="10"></span>
                                <span class="counter-detail">+</span>
                            </div>
                            <h6>Years of Combined Expertise</h6>
                        </div>
                        <p>
                            Trusted by businesses across media, healthcare, and energy to deliver
                            reliable, scalable, and innovative technology.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Section Partner -->
        @include('incs.partners')

        <!-- Section Why Choose Us -->
        <div class="section d-none ">
            <div class="hero-container ">
                <div class="d-flex flex-column flex-xl-row gspace-5">
                    <div class="chooseus-card-container">
                        <div class="d-flex flex-column gspace-2">
                            <div class="card card-chooseus  animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                                <div class="chooseus-icon-wrapper">
                                    <div class="chooseus-spacer above"></div>
                                    <div class="chooseus-icon-layout">
                                        <div class="chooseus-icon">
                                            <img src="image/Icon-2.png" alt="Why Choose Us Icon" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="chooseus-spacer below"></div>
                                </div>
                                <div class="chooseus-content">
                                    <h4 class="chooseus-title">Innovation & Integrity</h4>
                                    <p>Every decision is backed by real-time analytics for maximum impact lorem ipsum dolor sit  consectetur adipiscing elit ut elit tellus luctus nec.</p>
                                    <div class="link-wrapper">
                                        <a href="#">Read More</a>
                                        <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-chooseus  animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                <div class="chooseus-icon-wrapper">
                                    <div class="chooseus-spacer above"></div>
                                    <div class="chooseus-icon-layout">
                                        <div class="chooseus-icon">
                                            <img src="image/icon-1.png" alt="Why Choose Us Icon" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="chooseus-spacer below"></div>
                                </div>
                                <div class="chooseus-content">
                                    <h4 class="chooseus-title">Collaboration</h4>
                                    <a href="#" class="chooseus-title"></a>
                                    <p>Cutting-edge marketing techniques to keep you ahead of the competition lorem ipsum dolor sit awsa consectetur adipiscing elit ut elit.</p>
                                    <div class="link-wrapper">
                                        <a href="#">Read More</a>
                                        <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-chooseus animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                                <div class="chooseus-icon-wrapper">
                                    <div class="chooseus-spacer above"></div>
                                    <div class="chooseus-icon-layout">
                                        <div class="chooseus-icon">
                                            <img src="image/Icon-3.png" alt="Why Choose Us Icon" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="chooseus-spacer below"></div>
                                </div>
                                <div class="chooseus-content">
                                    <a href="#" class="chooseus-title"><h4>Result Driven</h4></a>
                                    <p>Clear insights and performance tracking, so you always know your ROI lorem ipsum dolo consectetur adipiscing elit ut elit tellus luctus nec.</p>
                                    <div class="link-wrapper">
                                        <a href="#">Read More</a>
                                        <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chooseus-content-container">
                        <div class="d-flex flex-column gspace-5">
                            <div class="d-flex flex-column gspace-2">
                                <div class="sub-heading  animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Our Core Values</span>
                                </div>
                                <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInDown">The Principles That Define Us</h2>
                                <p class="mb-0 animate-box animated animate__animated" data-animate="animate__fadeInDown">In the fast-paced digital world, choosing the right marketing partner makes all the difference. At Marko, we don’t just create campaigns—we craft strategies that deliver measurable success.</p>
                            </div>
                            <div class="image-container">
                                <img src="image/collaborative-process-of-multicultural-skilled-peo-5EHBQRG-1024x683.jpg" alt="Why Choose Us Image" class="chooseus-img">
                                <div class="card-chooseus-cta-layout">
                                    <div class="chooseus-cta-spacer"></div>
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="chooseus-cta-spacer"></div>
                                        <div class="card-chooseus-cta-wrapper">
                                            <div class="card card-chooseus-cta animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                                <h5>Partner with Marko & take your brand to the next level.</h5>
                                                <div class="link-wrapper">
                                                    <a href="contact.html">Let's Talk Strategy</a>
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
        <div class="section-guide pt-5 d-none">
            <div class="guide-banner">
                <div class="hero-container">
                    <div class="guide-content  animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <div class="guide-video-container">
                            <button class="request-loader" data-video="https://www.youtube.com/embed/VhBl3dHT5SY?autoplay=1"><i class="fa-solid fa-play"></i></button>
                            <p>
                                See How We Help Brands Grow
                            </p>
                        </div>
                        <div class="d-flex flex-column gspace-2">
                            <h3 class="title-heading">Transform Your Business with Marko!</h3>
                            <p>Take your digital marketing to the next level with data-driven strategies and innovative solutions. Let's create something amazing together!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Modal Video -->
        <div class="section p-0">
            <div id="modal-overlay" class="modal-overlay">
                <span class="modal-close"><i class="fa-solid fa-xmark"></i></span>
                <div class="video-modal">
                <iframe id="modal-video-frame" class="ifr-video" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Section Team -->
        <div class="section">
            <div class="hero-container">
                <div class="team-wrapper">
                    <div class="card team-layout">
                        <div class="d-flex flex-column align-items-center gspace-2 animate-box animate__animated" data-animate="animate__fadeInLeft">
                            <div class="sub-heading">
                                <i class="fa-regular fa-circle-dot"></i>
                                <span>Our Team</span>
                            </div>
                            <h2 class="title-heading">Meet the Minds Behind Your Digital Success</h2>
                        </div>
                        <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 grid-spacer-2">
                            <div class="col">
                                <div class="d-flex flex-column">
                                    <div class="image-team">
                                        <img src="image/team-3.jpg" alt="Team Image" class="img-fluid">
                                        <div class="social-team-wrapper">
                                            <div class="social-team-spacer"></div>
                                            <div class="d-flex flex-column align-items-end">
                                                <div class="social-team-container">
                                                    <a href="https://facebook.com/" class="social-item">
                                                        <i class="fa-brands fa-facebook"></i>
                                                    </a>
                                                    <a href="https://instagram.com/" class="social-item">
                                                        <i class="fa-brands fa-instagram"></i>
                                                    </a>
                                                    <a href="https://linkedin.com/" class="social-item">
                                                        <i class="fa-brands fa-linkedin"></i>
                                                    </a>
                                                </div>
                                                <div class="social-team-spacer"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-profile">
                                        <h4>Jordan Lee</h4>
                                        <span class="title">Head of Creative</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column">
                                    <div class="image-team">
                                        <img src="image/team-2.jpg" alt="Team Image" class="img-fluid">
                                        <div class="social-team-wrapper">
                                            <div class="social-team-spacer"></div>
                                            <div class="d-flex flex-column align-items-end">
                                                <div class="social-team-container">
                                                    <a href="https://facebook.com/" class="social-item">
                                                        <i class="fa-brands fa-facebook"></i>
                                                    </a>
                                                    <a href="https://instagram.com/" class="social-item">
                                                        <i class="fa-brands fa-instagram"></i>
                                                    </a>
                                                    <a href="https://linkedin.com/" class="social-item">
                                                        <i class="fa-brands fa-linkedin"></i>
                                                    </a>
                                                </div>
                                                <div class="social-team-spacer"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-profile">
                                        <h4>Chloe Tan</h4>
                                        <span class="title">Senior SEO Specialist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column">
                                    <div class="image-team">
                                        <img src="image/team-1.jpg" alt="Team Image" class="img-fluid">
                                        <div class="social-team-wrapper">
                                            <div class="social-team-spacer"></div>
                                            <div class="d-flex flex-column align-items-end">
                                                <div class="social-team-container">
                                                    <a href="https://facebook.com/" class="social-item">
                                                        <i class="fa-brands fa-facebook"></i>
                                                    </a>
                                                    <a href="https://instagram.com/" class="social-item">
                                                        <i class="fa-brands fa-instagram"></i>
                                                    </a>
                                                    <a href="https://linkedin.com/" class="social-item">
                                                        <i class="fa-brands fa-linkedin"></i>
                                                    </a>
                                                </div>
                                                <div class="social-team-spacer"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-profile">
                                        <h4>Daniel Cruz</h4>
                                        <span class="title">Performance Marketing Lead</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
            </div>
        </div>

        @include('incs.our_process')



@endsection
