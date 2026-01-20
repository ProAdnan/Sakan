@extends('layout.master')


@section('title', 'Apartment Details - Sakan')



@section('head')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/apartment-details.css') }}">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
@endsection


@section('class', 'class="bg-light"')



@section('content')


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Sakan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="universities.html">Universities</a></li>
                    <li class="nav-item"><a class="nav-link active" href="apartments.html">Apartments</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="login.html" class="btn-nav-login">Login</a>
                    <a href="signup.html" class="btn btn-nav-signup">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5 pb-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="my-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="apartments.html">Apartments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sunny Studio near Harvard</li>
            </ol>
        </nav>

        <!-- Gallery -->
        <!-- Gallery Carousel -->
        <div id="apartmentCarousel" class="carousel slide gallery-container mb-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#apartmentCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#apartmentCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#apartmentCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                        class="d-block w-100 carousel-img" alt="Main View">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1583847661450-8a02f4a21e4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                        class="d-block w-100 carousel-img" alt="Kitchen">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1512918760513-95f192902791?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                        class="d-block w-100 carousel-img" alt="Bedroom">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#apartmentCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#apartmentCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <!-- Header Info -->
                <div class="details-header">
                    <div class="d-flex justify-content-between align-items-start flex-wrap">
                        <div>
                            <h1 class="h2 fw-bold mb-2">Sunny Studio near Harvard</h1>
                            <div class="text-muted mb-2">
                                <i class="bi bi-geo-alt-fill text-primary"></i> 123 Cambridge St, MA &bull;
                                <i class="bi bi-mortarboard-fill text-primary ms-2"></i> Harvard University &bull;
                                <i class="bi bi-aspect-ratio text-primary ms-2"></i> 45 m² &bull;
                                <i class="bi bi-gender-male text-primary ms-2"></i> Males &bull;
                                <i class="bi bi-house text-primary ms-2"></i> Whole Apartment
                            </div>
                        </div>
                        <div class="text-end">
                            <div class="price-tag">$800</div>
                            <div class="price-period">per month</div>
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="mb-4">
                    <h4 class="h5 fw-bold mb-3">Key Features</h4>
                    <div class="d-flex flex-wrap">
                        <span class="feature-badge"><i class="bi bi-wifi"></i> Free WiFi</span>
                        <span class="feature-badge"><i class="bi bi-snow"></i> Air Conditioning</span>
                        <span class="feature-badge"><i class="bi bi-cup-hot"></i> Kitchen</span>
                        <span class="feature-badge"><i class="bi bi-shield-lock"></i> Security</span>
                        <span class="feature-badge"><i class="bi bi-water"></i> Water Included</span>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <h4 class="h5 fw-bold mb-3">About this place</h4>
                    <p class="text-muted">
                        Welcome to this bright and cozy studio apartment, perfectly located for students attending
                        Harvard University.
                        The space features a large window that lets in plenty of natural light, a comfortable study
                        area, and a fully equipped kitchenette.
                        <br><br>
                        The building is secure and quiet, ideal for focusing on your studies. You'll be walking distance
                        from the campus, grocery stores, and public transport.
                        Laundry facilities are available in the basement.
                    </p>
                </div>

                <!-- Map Placeholder -->
                <div class="mb-4">
                    <h4 class="h5 fw-bold mb-3">Location</h4>
                    <div id="map" style="height: 400px; z-index: 1;" class="rounded border"></div>
                </div>
            </div>

            <!-- Sidebar (Contact) -->
            <div class="col-lg-4">
                <div class="owner-card sticky-top" style="top: 100px;">
                    <h4 class="h5 fw-bold mb-4">Contact Owner</h4>
                    <div class="d-flex align-items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="Owner" class="owner-avatar me-3">
                        <div>
                            <h6 class="mb-0 fw-bold">Alex Johnson</h6>
                            <small class="text-muted">Verified Owner</small>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary">Request to Join</button>
                        <button class="btn btn-outline-primary"><i class="bi bi-chat-dots"></i> Chat with Owner</button>
                    </div>

                    <div class="mt-4 pt-3 border-top">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope text-muted me-2"></i>
                            <span class="text-muted">alex@example.com</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-telephone text-muted me-2"></i>
                            <span class="text-muted">+1 234 567 8900</span>
                        </div>
                    </div>

                    <hr class="my-4">

                    <p class="small text-muted mb-0 text-center">
                        <i class="bi bi-shield-check text-success"></i> Payments are secured by Sakan
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Map centered on Cambridge, MA (approx coordinates)
            var map = L.map('map').setView([42.3736, -71.1097], 14);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            // Add a marker for the apartment
            var marker = L.marker([42.3736, -71.1097]).addTo(map)
                .bindPopup('<b>Sunny Studio</b><br>123 Cambridge St.')
                .openPopup();
        });
    </script>

@endsection
