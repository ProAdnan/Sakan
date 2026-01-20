@extends('layout.master')


@section('title',  'Sakan - Student Housing Platform')



@section('head')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
   
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">


@endsection




@section('content')



    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container hero-content">
            <h1>Your Smart Way to Find<br>Student Housing</h1>
            <p>Find safe, affordable, and convenient apartments near your university in minutes. Connect directly with
                owners.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="apartments.html" class="btn btn-primary btn-lg">
                    <i class="bi bi-search"></i> Find an Apartment
                </a>
                <a href="signup.html" class="btn btn-outline-light btn-lg" style="border: 2px solid white;">
                    <i class="bi bi-house-add"></i> Post Your Apartment
                </a>
            </div>
        </div>
    </header>

    <!-- About Us Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Sakan?</h2>
                <p>We make student life easier by providing the best housing solutions.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-mortarboard"></i></div>
                        <h5>University-Based Search</h5>
                        <p class="text-muted small">Find homes closest to your campus easily.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-chat-dots"></i></div>
                        <h5>Direct Contact</h5>
                        <p class="text-muted small">Connect directly with apartment owners.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-house-heart"></i></div>
                        <h5>Student Friendly</h5>
                        <p class="text-muted small">Homes designed for student needs & budgets.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Secure Platform</h5>
                        <p class="text-muted small">Verified listings and safe interactions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Universities Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Explore Top Universities</h2>
                <p>Find housing near the most popular campuses.</p>
            </div>
            <div class="row g-4">
                <!-- University Card 1 -->
                <div class="col-md-4">
                    <div class="card university-card">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="University">
                        <div class="card-body text-center">
                            <h5 class="card-title">Harvard University</h5>
                            <p class="text-muted"><i class="bi bi-geo-alt"></i> Cambridge, MA</p>
                            <a href="apartments.html?uni=harvard" class="btn btn-secondary w-100">View Apartments</a>
                        </div>
                    </div>
                </div>
                <!-- University Card 2 -->
                <div class="col-md-4">
                    <div class="card university-card">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="University">
                        <div class="card-body text-center">
                            <h5 class="card-title">Stanford University</h5>
                            <p class="text-muted"><i class="bi bi-geo-alt"></i> Stanford, CA</p>
                            <a href="apartments.html?uni=stanford" class="btn btn-secondary w-100">View Apartments</a>
                        </div>
                    </div>
                </div>
                <!-- University Card 3 -->
                <div class="col-md-4">
                    <div class="card university-card">
                        <img src="https://images.unsplash.com/photo-1592280771884-f36b04321743?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="University">
                        <div class="card-body text-center">
                            <h5 class="card-title">MIT</h5>
                            <p class="text-muted"><i class="bi bi-geo-alt"></i> Cambridge, MA</p>
                            <a href="apartments.html?uni=mit" class="btn btn-secondary w-100">View Apartments</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="universities.html" class="btn btn-outline-primary">View All Universities</a>
            </div>
        </div>
    </section>

    <!-- Apartments Section -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Featured Apartments</h2>
                <p>Check out the latest listings for students.</p>
            </div>
            <div class="row g-4">
                <!-- Apartment Card 1 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card apartment-card">
                        <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Apartment">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">Sunny Studio</h5>
                                <span class="apartment-price">$800<small
                                        class="text-muted text-sm fw-normal">/mo</small></span>
                            </div>
                            <div class="apartment-meta">
                                <i class="bi bi-mortarboard"></i> Near Harvard University
                            </div>
                            <p class="text-muted small">Cozy studio perfect for a single student aiming for focus.</p>
                            <a href="apartment-details.html" class="btn btn-primary w-100 btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Apartment Card 2 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card apartment-card">
                        <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Apartment">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">Modern Loft</h5>
                                <span class="apartment-price">$1200<small
                                        class="text-muted text-sm fw-normal">/mo</small></span>
                            </div>
                            <div class="apartment-meta">
                                <i class="bi bi-mortarboard"></i> Near Stanford
                            </div>
                            <p class="text-muted small">Spacious loft with great light and modern amenities.</p>
                            <a href="apartment-details.html" class="btn btn-primary w-100 btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Apartment Card 3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card apartment-card">
                        <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Apartment">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">Cozy Room</h5>
                                <span class="apartment-price">$650<small
                                        class="text-muted text-sm fw-normal">/mo</small></span>
                            </div>
                            <div class="apartment-meta">
                                <i class="bi bi-mortarboard"></i> Near MIT
                            </div>
                            <p class="text-muted small">Private room in a shared student house. Great community.</p>
                            <a href="apartment-details.html" class="btn btn-primary w-100 btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Apartment Card 4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card apartment-card">
                        <img src="https://images.unsplash.com/photo-1512918760513-95f192902791?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Apartment">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">2BHK Flat</h5>
                                <span class="apartment-price">$1500<small
                                        class="text-muted text-sm fw-normal">/mo</small></span>
                            </div>
                            <div class="apartment-meta">
                                <i class="bi bi-mortarboard"></i> Near Duke
                            </div>
                            <p class="text-muted small">Perfect for sharing with a friend. Fully furnished.</p>
                            <a href="apartment-details.html" class="btn btn-primary w-100 btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="apartments.html" class="btn btn-outline-primary">Browse by University</a>
            </div>
        </div>
    </section>

@endsection



@section('js')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>


@endsection
