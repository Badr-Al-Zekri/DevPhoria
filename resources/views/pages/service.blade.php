@extends('layouts.app')

@section('title', 'Our Blog')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">99</h1>
                        <h5 class="text-white mt-1">Success in getting happy customer</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">25</h1>
                        <h5 class="text-white mt-1">Thousands of successful business</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">5</h1>
                        <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Services Start -->
    <div class="container-fluid services py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Services</h5>
                <h1>Services Built Specifically For Your Business</h1>
            </div>
            <div class="row g-5 services-inner">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Web Design</h4>
                                <p class="mb-4">Explanation: We create stunning, user-friendly websites tailored to your brand, ensuring a strong online presence.<br>Advantages: Boosts brand credibility, improves user engagement, responsive across all devices.<br>Use Cases: New business websites, portfolio sites, e-commerce platforms, redesign of existing sites.</p>
                                <a href="{{ route('payment', ['service' => 'Web Design', 'price' => '700']) }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Consult Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Web Development</h4>
                                <p class="mb-4">Explanation: Building robust and scalable web applications from concept to deployment, focusing on functionality and performance.<br>Advantages: Custom features, seamless integration, high performance, future-proof solutions.<br>Use Cases: Custom web applications, enterprise solutions, API development, backend systems.</p>
                                <a href="{{ route('payment', ['service' => 'Web Development', 'price' => '1500']) }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Consult Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">UI/UX Design</h4>
                                <p class="mb-4">Explanation: Crafting intuitive and visually appealing user interfaces (UI) and exceptional user experiences (UX) to delight your audience.<br>Advantages: Enhanced user satisfaction, improved conversion rates, cohesive brand identity.<br>Use Cases: Application interface design, user journey mapping, usability testing, wireframing.</p>
                                <a href="{{ route('payment', ['service' => 'UI/UX Design', 'price' => '900']) }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Consult Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fas fa-user-secret fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Web Cecurity</h4>
                                <p class="mb-4">Explanation: Protecting your online assets from cyber threats with comprehensive security measures and proactive monitoring.<br>Advantages: Data protection, compliance adherence, peace of mind, prevention of financial losses.<br>Use Cases: Penetration testing, vulnerability assessments, firewall configuration, security audits.</p>
                                <a href="{{ route('payment', ['service' => 'Web Security', 'price' => '1100']) }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Consult Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-envelope-open fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Digital Marketing</h4>
                                <p class="mb-4">Explanation: Driving online growth through strategic campaigns, search engine optimization (SEO), social media, and content marketing.<br>Advantages: Increased visibility, higher traffic, lead generation, measurable ROI.<br>Use Cases: SEO strategy, social media management, email marketing, content creation.</p>
                                <a href="{{ route('payment', ['service' => 'Digital Marketing', 'price' => '600']) }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Consult Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fas fa-laptop fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Programming</h4>
                                <p class="mb-4">Explanation: Developing custom software solutions and applications using various programming languages to solve complex business challenges.<br>Advantages: Tailored functionality, automation of tasks, improved efficiency, innovation enablement.<br>Use Cases: Custom software, mobile app development, data analysis tools, system integrations.</p>
                                <a href="{{ route('payment', ['service' => 'Programming', 'price' => '1200']) }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Consult Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
