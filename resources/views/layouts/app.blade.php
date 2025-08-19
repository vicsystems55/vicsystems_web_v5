<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $meta_title ?? 'Vicsystems Technologies Ltd. | ICT, Innovation & Creative Solutions' }}</title>
    <meta name="description"
        content="{{ $meta_description ?? 'Vicsystems Technologies Ltd. delivers ICT services, web and mobile app development, IT consultancy, social media management, custom electronics, and AI-powered creative solutions for businesses and individuals.' }}">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('image/favicon.ico') }}">

    @yield('styles')
</head>

<body>
    @include('incs.header')

    <!-- Section Content Edit -->
    <aside>
        <div id="edit-sidebar"></div>
    </aside>

    <!-- Section Search -->
    <div class="search-overlay">
        <button class="search-close">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="search-content">
            <form action="https://marko.foxcreation.net/search.html" method="GET"
                class="search-form animate-box animated slow animate__animated" data-animate="animate__fadeInDown">
                <input type="text" name="q" placeholder="Search...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>

    <!-- Section Sidebar -->
    <aside>
        <div>
            <div class="content-overlay">
                <div class="content-edit-sidebar">
                    <div class="sidebar-header">
                        <div></div>
                        <div class="close-btn-second">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                    <div class="content">
                        <span>Click on the Edit Content button to edit/add the content.</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="sidebar-overlay"></div>
            <div class="sidebar">
                <div class="sidebar-header">
                    <div class="logo">
                        <img src="image/marko-logo.png" class="site-logo img-fluid logo" alt="Logo">
                    </div>
                    <button class="close-btn"><span>X</span></button>
                </div>
                <ul class="menu">
                    <li>
                        <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About
                            Us</a>
                    </li>

                       <li>
                        <a class="{{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>

                    {{-- <li class="sidebar-dropdown">
                        <div class="dropdown-header">
                            <a class="{{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">Services</a>
                            <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button>
                        </div>
                        <ul class="sidebar-dropdown-menu">
                            <li><a class="{{ request()->routeIs('services') ? 'active' : '' }}"
                                    href="{{ route('services') }}">All Services</a></li>
                        </ul>
                    </li> --}}

                         {{-- <li>
                        <a class="{{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                    </li> --}}

                    {{-- <li class="sidebar-dropdown">
                        <div class="dropdown-header">
                            <a class="{{ request()->routeIs('blog') || request()->routeIs('post') ? 'active' : '' }}"
                                href="#">Blog</a>
                            <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button>
                        </div>
                        <ul class="sidebar-dropdown-menu">
                            <li><a class="{{ request()->routeIs('blog') ? 'active' : '' }}"
                                    href="{{ route('blog') }}">All Posts</a></li>
                            <li><a class="{{ request()->routeIs('post') ? 'active' : '' }}"
                                    href="{{ route('post') }}">Single Post</a></li>
                        </ul>
                    </li> --}}

                    <li>
                        <a class="{{ request()->routeIs('portfolio') ? 'active' : '' }}"
                            href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </aside>

    <!-- Section Main Content-->
    <main>
        @yield('content')

    </main>

    @include('incs.footer')

    @yield('script')

    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/swiper-script.js') }}"></script>
    <script src="{{ asset('js/submit-form.js') }}"></script>
    <script src="{{ asset('js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/video_embedded.js') }}"></script>


</body>

</html>
