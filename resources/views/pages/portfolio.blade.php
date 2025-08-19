@extends('layouts.app')

@section('styles')
    <!-- Styles -->
    <style>
        .portfolio-section {
            font-family: var(--global-font);
            background-color: var(--accent-color-4);
            color: var(--text-color);
        }

        .portfolio-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent-color);
        }

        .portfolio-subtitle {
            color: var(--text-color);
            margin-bottom: 1.5rem;
        }

        .portfolio-tabs .nav-link {
            background: var(--accent-color-3);
            color: var(--text-color);
            border-radius: var(--global-border-radius);
            margin: 0 5px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .portfolio-tabs .nav-link.active,
        .portfolio-tabs .nav-link:hover {
            background: var(--accent-color-6);
            /* semi-transparent purple */
            color: var(--accent-color-2);
            /* white */
            font-weight: 600;
            box-shadow: var(--box-shadow-bottom-right), var(--box-shadow-top-left);
        }

        .portfolio-card {
            background: var(--accent-color-3);
            border-radius: var(--global-border-radius);
            overflow: hidden;
            width: 330px;
            box-shadow: var(--box-shadow-bottom-right-wide), var(--box-shadow-top-left-wide);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .portfolio-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .portfolio-info {
            padding: 15px;
            color: var(--accent-color-2);
        }

        .portfolio-info h5 {
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 5px;
        }

        .portfolio-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow-bottom-right), var(--box-shadow-top-left);
        }
    </style>
@endsection

@section('content')
    <div class="">

        <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-layout-wrapper">
                <div class="banner-layout">
                    <div class="d-flex flex-column text-center align-items-center gspace-2">
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            Our Portfolio</h2>
                        <nav class="breadcrumb">
                            <a href="index.html" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Portfolio</p>
                        </nav>
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>


        <!-- Section Case Studies -->
        <div class="section py-3 ">
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

                            <!-- Category Tabs -->
                            <ul class="nav nav-pills justify-content-center mb-4 portfolio-tabs animate-box animated animate__animated "
                                data-animate="animate__fadeInLeft" id="portfolioTabs" role="tablist">
                                <li class="nav-item"><button class="nav-link active" id="all-tab" data-bs-toggle="pill"
                                        data-bs-target="#all" type="button">All</button></li>
                                {{-- <li class="nav-item"><button class="nav-link" id="web-tab" data-bs-toggle="pill"
                                        data-bs-target="#web" type="button">Websites</button></li> --}}
                                <li class="nav-item"><button class="nav-link" id="ecom-tab" data-bs-toggle="pill"
                                        data-bs-target="#social" type="button">Social Media</button></li>
                                <li class="nav-item"><button class="nav-link" id="graphics-tab" data-bs-toggle="pill"
                                        data-bs-target="#graphics" type="button">Graphics</button></li>
                                <li class="nav-item"><button class="nav-link" id="apps-tab" data-bs-toggle="pill"
                                        data-bs-target="#apps" type="button">Mobile Apps</button></li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content  animate-box animated animate__animated"
                                data-animate="animate__fadeInRight" id="portfolioTabContent">

                                <!-- All Projects -->
                                <div class="tab-pane fade show active" id="all" role="tabpanel">
                                    <div class="row g-4">

                                        <!-- Portfolio Card -->
                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="/image/aljazirahnews.png" alt="Website Project">
                                                <div class="portfolio-info">
                                                    <h5>New Blog</h5>
                                                    <p>A modern responsive business website.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/poshtv.png" alt="E-commerce Project">
                                                <div class="portfolio-info">
                                                    <h5>Movie Streaming</h5>
                                                    <p>Custom movie websites.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/poshfm.png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Podcast</h5>
                                                    <p>Cross-platform radio streaming.</p>
                                                </div>
                                            </div>
                                        </div>

                                           <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/stafholdwebsite.png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Company website</h5>
                                                    <p>Coporate business profile</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/aljazirahlogo.png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Aljazirah Logo</h5>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/stafholdlogo.png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Stafhold Logo</h5>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/larydotlogo.png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Larydot Recruitment Logo</h5>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- All Projects -->
                                <div class="tab-pane fade " id="web" role="tabpanel">
                                    <div class="row g-4">

                                        <!-- Portfolio Card -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="images/project1.jpg" alt="Website Project">
                                                <div class="portfolio-info">
                                                    <h5>Website Project</h5>
                                                    <p>A modern responsive business website.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="images/project2.jpg" alt="E-commerce Project">
                                                <div class="portfolio-info">
                                                    <h5>E-commerce Store</h5>
                                                    <p>Custom online shop with payment integration.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="images/project3.jpg" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Mobile App</h5>
                                                    <p>Cross-platform mobile app for startups.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                                <!-- All Projects -->
                                <div class="tab-pane fade " id="social" role="tabpanel">
                                    <div class="row g-4">

                                        <!-- Portfolio Card -->
                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/yg1 (1).png" alt="Website Project">
                                                <div class="portfolio-info">

                                                    <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/yg1 (2).png" alt="E-commerce Project">
                                                <div class="portfolio-info">
                                                           <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/yg1 (3).png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                        <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>


                                         <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/itl (1).png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                        <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>

                                           <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/itl (2).png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                        <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>


                                          <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/itl (3).png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                        <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/itl (4).png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                        <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/itl (5).png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                        <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/itl (6).png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                        <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>

                                          <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/vics (1).png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                        <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>

                                          <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/vics (2).png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                        <p>Social Media Post</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- All Logo -->
                                <div class="tab-pane fade " id="graphics" role="tabpanel">
                                    <div class="row g-4">

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/aljazirahlogo.png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Aljazirah Logo</h5>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/stafholdlogo.png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Stafhold Logo</h5>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/larydotlogo.png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Larydot Recruitment Logo</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                   <!-- All Mobile -->
                                <div class="tab-pane fade " id="apps" role="tabpanel">
                                    <div class="row g-4">

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/bridge1.png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Job Portal</h5>

                                                </div>
                                            </div>
                                        </div>

                                          <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/bridge2.png" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Job Portal</h5>

                                                </div>
                                            </div>
                                        </div>

                                          <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/app1 (1).jpg" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Solar Analysis</h5>

                                                </div>
                                            </div>
                                        </div>

                                          <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/app1 (2).jpg" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Solar Analysis</h5>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-4">
                                            <div class="portfolio-card">
                                                <img src="image/app1 (3).jpg" alt="Mobile App">
                                                <div class="portfolio-info">
                                                    <h5>Solar Analysis</h5>

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>




                            </div>





                            <!-- Add similar tab-pane sections for Websites, E-commerce, Graphics, Mobile Apps -->

                        </div>
                    </div>
                </div>
                <div class="spacer"></div>
            </div>
        </div>
    </div>










    </div>
@endsection

{{-- @section('script')
    <!-- Masonry JS (for grid layout) -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize Masonry on all tab contents
            var masonryGrids = document.querySelectorAll('[data-masonry]');
            var masonryInstances = [];

            masonryGrids.forEach(function(grid) {
                masonryInstances.push(new Masonry(grid, {
                    itemSelector: '.col-sm-6',
                    percentPosition: true
                }));
            });

            // Recalculate Masonry when tab is shown
            var portfolioTabs = document.querySelectorAll('#portfolioTabs button');
            portfolioTabs.forEach(function(tab) {
                tab.addEventListener('shown.bs.tab', function() {
                    masonryInstances.forEach(function(masonry) {
                        masonry.layout(); // Refresh layout
                    });
                });
            });
        });
    </script>
@endsection --}}
