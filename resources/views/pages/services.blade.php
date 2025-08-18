@extends('layouts.app')

@section('content')
   <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-layout-wrapper">
                <div class="banner-layout">
                    <div class="d-flex flex-column text-center align-items-center gspace-2">
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Our Services</h2>
                        <nav class="breadcrumb">
                            <a href="index.html" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Services</p>
                        </nav>
                    </div>
                    <div class="spacer"></div>
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

  <!-- Section Guide -->
        <div class="section-guide pb-3">
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

        <!-- Section Modal Video -->
        <div class="section p-0">
            <div id="modal-overlay" class="modal-overlay">
                <span class="modal-close"><i class="fa-solid fa-xmark"></i></span>
                <div class="video-modal">
                <iframe id="modal-video-frame" class="ifr-video" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Section Pricing -->
        <div class="section d-none">
            <div class="hero-container">
                <div class="d-flex flex-column justify-content-center text-center gspace-5">
                    <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <div class="sub-heading align-self-center">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Our Core Services</span>
                        </div>
                        <h2 class="title-heading heading-container heading-container-short">Flexible Pricing Plans for Every Business</h2>
                    </div>
                    <div class="row row-cols-xl-3 row-cols-1 grid-spacer-2">
                        <div class="col">
                            <div class="pricing-container">
                                <div class="card card-pricing-title animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                    <div class="spacer"></div>
                                    <div class="content">
                                        <h3 class="title-heading">Let's Find the Right Strategy for You!</h3>
                                        <div class="link-wrapper">
                                            <a href=".contact.html">Book a Free Consultation</a>
                                            <i class="fa-solid fa-arrow-circle-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-pricing animate-box animated animate__animated" data-animate="animate__fadeInUp">
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
                                        <li><a href="single_services.html">Social Media Management (1 Platform)</a></li>
                                        <li><a href="single_services.html">Monthly Performance Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-pricing pricing-highlight animate-box animated slow animate__animated" data-animate="animate__fadeInUp">
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
                                <div class="card pricing-highlight-box animate-box animated animate__animated" data-animate="animate__fadeInRight">
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
                                <div class="card card-pricing animate-box animated animate__animated" data-animate="animate__fadeInUp">
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
                                        <li><a href="single_services.html">Social Media Management (1 Platform)</a></li>
                                        <li><a href="single_services.html">Monthly Performance Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
