@extends('layouts.app')

@section('content')
    <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-layout-wrapper">
                <div class="banner-layout">
                    <div class="d-flex flex-column text-center align-items-center gspace-2">
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Our Blog</h2>
                        <nav class="breadcrumb">
                            <a href="index.html" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Blog</p>
                        </nav>
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>

        <!-- Section Blog -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-5">
                    <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5 m-0">
                        <div class="col col-xl-8 ps-0 pe-0">
                            <div class="d-flex flex-column gspace-2 animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Insights & Trends</span>
                                </div>
                                <h2 class="title-heading">Latest Digital Marketing Strategies & Tips</h2>
                            </div>
                        </div>
                        <div class="col col-xl-4 ps-0 pe-0">
                            <div class="d-flex flex-column gspace-2 justify-content-end h-100 animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                <p>Explore our latest blog articles covering industry trends, expert insights, and actionable strategies to elevate your digital marketing game.</p>
                                <div class="link-wrapper">
                                    <a href="blog.html">View All Articles</a>
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-md-2 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-blog animate-box animated animate__animated" data-animate="animate__fadeInUp" onclick="window.location.href='single_post.html'">
                                <div class="blog-image">
                                    <img src="image/collaborative-process-of-multicultural-skilled-peo-AN9FZBQ-1024x683.jpg" alt="Blog Image">
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
                                    <a href="single_post.html" class="blog-link">Mastering Instagram and Facebook Ads</a>
                                    <p>Lorem ipsum dolor si consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo.</p>
                                    <a href="single_post.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-blog animate-box animated animate__animated" data-animate="animate__fadeInUp" onclick="window.location.href='single_post.html'">
                                <div class="blog-image">
                                    <img src="image/collaborative-process-of-multicultural-skilled-peo-LY58K9U-1024x683.jpg" alt="Blog Image">
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
                                    <a href="single_post.html" class="blog-link">Growth Strategies for Digital Business</a>
                                    <p>Lorem ipsum dolor si consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo.</p>
                                    <a href="single_post.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
