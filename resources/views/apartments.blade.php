@extends('layout.master')



@section('title', 'Apartments - Sakan')

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
    <link rel="stylesheet" href="{{ asset('css/apartments.css') }}">



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
        <div class="row pt-4">
            <!-- Sidebar (Filters) -->
            <div class="col-lg-3 mb-4">
                <div class="sidebar-filters">
                    <h4 class="mb-4">Filter Results</h4>

                    <!-- Search by Name -->
                    <div class="filter-group">
                        <div class="filter-title">Search</div>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i
                                    class="bi bi-search text-muted"></i></span>
                            <input type="text" class="form-control border-start-0 ps-0" placeholder="Apartment Name">
                        </div>
                    </div>

                    <!-- University -->
                    <div class="filter-group">
                        <div class="filter-title">University</div>
                        <select class="form-select">
                            <option selected>All Universities</option>
                            <option value="ksu">King Saud University</option>
                            <option value="pnu">Princess Nourah University</option>
                            <option value="psu">Prince Sultan University</option>
                            <option value="yamamah">Al Yamamah University</option>
                            <option value="iau">Imam Abdulrahman Bin Faisal University</option>
                        </select>
                    </div>

                    <!-- Area -->
                    <div class="filter-group">
                        <div class="filter-title">Area (sqm)</div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="number" class="form-control" placeholder="Min" min="0">
                            <span class="text-muted">-</span>
                            <input type="number" class="form-control" placeholder="Max" min="0">
                        </div>
                    </div>

                    <!-- Rent Type -->
                    <div class="filter-group">
                        <div class="filter-title">Rent Type</div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="rentType" id="rentWhole" value="whole"
                                checked>
                            <label class="form-check-label" for="rentWhole">Whole Apartment</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="rentType" id="rentRooms" value="rooms">
                            <label class="form-check-label" for="rentRooms">Rooms</label>
                        </div>
                    </div>

                    <!-- Price Range -->
                    <div class="filter-group">
                        <div class="filter-title">Price Range ($)</div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="number" class="form-control" placeholder="Min" min="0">
                            <span class="text-muted">-</span>
                            <input type="number" class="form-control" placeholder="Max" min="0">
                        </div>
                    </div>




                    <button class="btn btn-primary w-100">Apply Filters</button>
                </div>
            </div>

            <!-- Main Content (Apartments List) -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h4 fw-bold mb-0">Apartments Near Universities</h2>
                    <span class="text-muted">Showing 4 results</span>
                </div>

                <!-- Apartment Item 1 -->
                <div class="apartment-card-vertical" data-gender="male">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                alt="Apartment">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body h-100 d-flex flex-column justify-content-center">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h3 class="apt-title">Sunny Studio near Harvard</h3>
                                    <span class="apt-price">$800<small
                                            class="text-muted fs-6 fw-normal">/mo</small></span>
                                </div>
                                <div class="apt-meta">
                                    <span><i class="bi bi-geo-alt-fill"></i> Cambridge, MA</span>
                                    <span><i class="bi bi-mortarboard-fill"></i> Harvard University</span>
                                </div>
                                <p class="apt-info">A beautiful, sun-drenched studio apartment located just 5 minutes
                                    walk from the main campus. Fully furnished and ready to move in.</p>
                                <div class="mt-auto">
                                    <a href="apartment-details.html" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Apartment Item 2 -->
                <div class="apartment-card-vertical" data-gender="female">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                alt="Apartment">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body h-100 d-flex flex-column justify-content-center">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h3 class="apt-title">Modern Loft in Stanford</h3>
                                    <span class="apt-price">$1200<small
                                            class="text-muted fs-6 fw-normal">/mo</small></span>
                                </div>
                                <div class="apt-meta">
                                    <span><i class="bi bi-geo-alt-fill"></i> Stanford, CA</span>
                                    <span><i class="bi bi-mortarboard-fill"></i> Stanford University</span>
                                </div>
                                <p class="apt-info">Stylish loft with modern amenities. High ceilings, large windows,
                                    and a great community atmosphere.</p>
                                <div class="mt-auto">
                                    <a href="apartment-details.html" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Apartment Item 3 -->
                <div class="apartment-card-vertical" data-gender="male">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                alt="Apartment">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body h-100 d-flex flex-column justify-content-center">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h3 class="apt-title">Cozy Room near MIT</h3>
                                    <span class="apt-price">$650<small
                                            class="text-muted fs-6 fw-normal">/mo</small></span>
                                </div>
                                <div class="apt-meta">
                                    <span><i class="bi bi-geo-alt-fill"></i> Cambridge, MA</span>
                                    <span><i class="bi bi-mortarboard-fill"></i> MIT</span>
                                </div>
                                <p class="apt-info">Affordable private room in a shared house. Great for meeting other
                                    students. Utilities included.</p>
                                <div class="mt-auto">
                                    <a href="apartment-details.html" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Apartment Item 4 -->
                <div class="apartment-card-vertical" data-gender="female">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.unsplash.com/photo-1512918760513-95f192902791?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                alt="Apartment">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body h-100 d-flex flex-column justify-content-center">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h3 class="apt-title">2BHK Flat near Duke</h3>
                                    <span class="apt-price">$1500<small
                                            class="text-muted fs-6 fw-normal">/mo</small></span>
                                </div>
                                <div class="apt-meta">
                                    <span><i class="bi bi-geo-alt-fill"></i> Durham, NC</span>
                                    <span><i class="bi bi-mortarboard-fill"></i> Duke University</span>
                                </div>
                                <p class="apt-info">Spacious 2 bedroom apartment ideal for sharing provided with all
                                    necessary furniture and appliances.</p>
                                <div class="mt-auto">
                                    <a href="apartment-details.html" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection


@section('js')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/main.js')}}"></script>


@endsection

