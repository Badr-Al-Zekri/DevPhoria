<div class="container-fluid bg-primary">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="{{ url('/') }}" class="navbar-brand">
                <h1 class="text-white fw-bold d-block">Dev<span class="text-secondary">Phoria</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <!-- Home -->
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>

                    <!-- About -->
                    <a href="{{ url('/about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>

                    <!-- Services -->
                    <a href="{{ url('/services') }}" class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">Services</a>

                    <!-- Projects -->
                    <a href="{{ url('/projects') }}" class="nav-item nav-link {{ Request::is('projects') ? 'active' : '' }}">Projects</a>

                    <!-- Pages Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('blog') || Request::is('team') || Request::is('testimonials') || Request::is('404') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded">
                            <a href="{{ url('/blog') }}" class="dropdown-item {{ Request::is('blog') ? 'active' : '' }}">Our Blog</a>
                            <a href="{{ url('/team') }}" class="dropdown-item {{ Request::is('team') ? 'active' : '' }}">Our Team</a>
                            <a href="{{ url('/testimonials') }}" class="dropdown-item {{ Request::is('testimonials') ? 'active' : '' }}">Testimonial</a>
                            {{-- <a href="{{ url('/404') }}" class="dropdown-item {{ Request::is('404') ? 'active' : '' }}">404 Page</a> --}}
                        </div>
                    </div>

                    <!-- Contact -->
                    <a href="{{ url('/contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="d-none d-xl-flex flex-shrink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="#" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt text-white fa-2x"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4 border-end">
                    <span class="text-white-50">Have any questions?</span>
                    <span class="text-secondary">Call: +967 779141884</span>
                </div>
                <div class="d-flex align-items-center justify-content-center ms-4">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="bi bi-search text-white fa-2x"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Search Modal Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by Keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <form action="{{ route('search') }}" method="GET" class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="Keywords" aria-describedby="search-icon-1" name="query">
                    <button type="submit" class="input-group-text btn-primary"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->
