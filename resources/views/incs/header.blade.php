    <!-- Section Header -->
    <header>
        <!-- Section Navbar -->
        <div class="navbar-wrapper">
            <nav class="navbar navbar-expand-xl">
                <div class="navbar-container">
                    <div class="logo-container">
                        <a class="navbar-brand" href="index.html"><img src="image/marko-logo.png"
                                class="site-logo img-fluid"></a>
                    </div>
                    <button class="navbar-toggler nav-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars "></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                    href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                    href="{{ route('about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}"
                                    href="{{ route('services') }}">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}"
                                    href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="nav-item dropdown d-none">
                                <a class="nav-link dropdown-toggle {{ request()->routeIs('blog') || request()->routeIs('post') ? 'active' : '' }}"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Blog <i class="fa-solid fa-angle-down accent-color"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item {{ request()->routeIs('blog') ? 'active' : '' }}"
                                            href="{{ route('blog') }}">All Posts</a></li>
                                    <li><a class="dropdown-item {{ request()->routeIs('post') ? 'active' : '' }}"
                                            href="{{ route('post') }}">Single Post</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}"
                                    href="{{ route('portfolio') }}">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                    href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-action-container">
                        <div class="navbar-action-button">
                            <button id="themeSwitch" class="themeswitch" aria-label="Toggle Theme">
                                <i id="themeIcon" class="fas fa-moon"></i>
                            </button>
                        </div>
                        <div class="navbar-icon-wrapper">
                            <div class="icon-circle" style="height: 30px; width: 30px;">
                                <i class="fa-solid fa-phone-volume" style="font-size: 20px;"></i>
                            </div>
                            <h6>+234 (803) 783 5670</h6>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
