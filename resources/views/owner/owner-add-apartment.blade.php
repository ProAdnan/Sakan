@extends('layout.owner_master')


@section('title', 'Add New Apartment - Owner Dashboard')


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
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />


@endsection


@section('content')


    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="owner-apartments.html" class="text-decoration-none">My
                            Apartments</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add New</li>
                </ol>
            </nav>
            <h2 class="fw-bold mb-0">Add New Apartment</h2>
        </div>
    </div>

    <!-- Add Apartment Form -->
    <div class="dashboard-card">
        <div class="card-body p-4">
            <form action="owner-apartments.html">
                <div class="row g-4">
                    <!-- Basic Info Section -->
                    <div class="col-12">
                        <h5 class="mb-3 border-bottom pb-2">Basic Information</h5>
                    </div>

                    <div class="col-md-12">
                        <label for="apartmentName" class="form-label">Apartment Name</label>
                        <input type="text" class="form-control" id="apartmentName"
                            placeholder="e.g. Sunny Studio in Downtown" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Apartment Images</label>
                        <div class="p-5 text-center bg-light rounded border border-2 border-secondary border-opacity-25 position-relative"
                            style="border-style: dashed !important; cursor: pointer;"
                            onclick="document.getElementById('apartmentImages').click()">
                            <div id="uploadPrompt">
                                <i class="bi bi-cloud-arrow-up fs-1 text-primary mb-2"></i>
                                <h6 class="mb-1">Click to upload or directly drag images</h6>
                                <p class="text-muted small mb-0">Supported: JPG, PNG</p>
                            </div>
                            <div id="imagePreviewContainer" class="d-none d-flex flex-wrap gap-2 justify-content-center">
                            </div>
                            <input type="file" id="apartmentImages" multiple accept="image/*" class="d-none">
                        </div>
                        <div id="fileCount" class="form-text text-success mt-2"></div>
                    </div>

                    <div class="col-md-6">
                        <label for="apartmentLocation" class="form-label">Location</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                            <input type="text" class="form-control" id="apartmentLocation"
                                placeholder="City, District, Street" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="apartmentArea" class="form-label">Area (sqm)</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="apartmentArea" placeholder="e.g. 120" required>
                            <span class="input-group-text">m²</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Pin Location on Map</label>
                        <div id="map" style="height: 300px;" class="rounded border"></div>
                        <div class="form-text text-muted">Click on the map to set the exact location.</div>
                        <input type="hidden" id="apartmentLat" name="latitude">
                        <input type="hidden" id="apartmentLng" name="longitude">
                    </div>

                    <div class="col-md-6">
                        <label for="nearestUniversity" class="form-label">Nearest University</label>
                        <select class="form-select" id="nearestUniversity">
                            <option selected disabled>Select University</option>
                            <option value="ksu">King Saud University</option>
                            <option value="pnu">Princess Nourah University</option>
                            <option value="psu">Prince Sultan University</option>
                            <option value="yamamah">Al Yamamah University</option>
                            <option value="iau">Imam Abdulrahman Bin Faisal University</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="apartmentGender" class="form-label">Allowed Gender</label>
                        <select class="form-select" id="apartmentGender" required>
                            <option selected disabled>Select Gender</option>
                            <option value="male">Males</option>
                            <option value="female">Females</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="apartmentDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="apartmentDescription" rows="4"
                            placeholder="Describe the apartment, nearby amenities, etc." required></textarea>
                    </div>

                    <!-- Rent Details Section -->
                    <div class="col-12 mt-4">
                        <h5 class="mb-3 border-bottom pb-2">Rent & Pricing Details</h5>
                    </div>

                    <div class="col-12">
                        <label class="form-label d-block">Rent Type</label>
                        <div class="btn-group" role="group" aria-label="Rent Type">
                            <input type="radio" class="btn-check" name="rentType" id="rentWhole" value="whole"
                                checked>
                            <label class="btn btn-outline-primary" for="rentWhole">Whole Apartment</label>

                            <input type="radio" class="btn-check" name="rentType" id="rentRooms" value="rooms">
                            <label class="btn btn-outline-primary" for="rentRooms">Separate Rooms</label>
                        </div>
                    </div>

                    <!-- Whole Appt Price -->
                    <div class="col-md-6" id="wholePriceContainer">
                        <label for="wholePrice" class="form-label">Price for Whole Apartment</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" id="wholePrice" placeholder="0.00">
                            <span class="input-group-text">/mo</span>
                        </div>
                    </div>

                    <!-- Separate Rooms Details (Hidden by default) -->
                    <div class="col-md-12 row g-3 d-none" id="roomsContainer">
                        <div class="col-md-6">
                            <label for="numberOfRooms" class="form-label">Number of Rooms</label>
                            <input type="number" class="form-control" id="numberOfRooms" placeholder="e.g. 3">
                        </div>
                        <div class="col-md-6">
                            <label for="roomPrice" class="form-label">Price per Room</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="roomPrice" placeholder="0.00">
                                <span class="input-group-text">/mo</span>
                            </div>
                        </div>
                    </div>

                    <!-- Features Section -->
                    <div class="col-12 mt-4">
                        <h5 class="mb-3 border-bottom pb-2">Features & Amenities</h5>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Features & Amenities</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="featureInput"
                                placeholder="Enter a feature (e.g. Free WiFi, Gym, Parking)">
                            <button class="btn btn-outline-primary" type="button" id="addFeatureBtn">Add</button>
                        </div>
                        <div id="featuresContainer" class="d-flex flex-wrap gap-2 mb-2">
                            <!-- Features will be added here dynamically -->
                            <span class="badge bg-light text-dark border p-2 d-flex align-items-center gap-2">
                                Free WiFi
                                <i class="bi bi-x text-danger" style="cursor: pointer;"
                                    onclick="this.parentElement.remove()"></i>
                            </span>
                        </div>
                        <div class="form-text text-muted">Type a feature and press Enter or click Add.</div>
                        <!-- Hidden input to store all features for form submission -->
                        <input type="hidden" name="features" id="featuresList" value='["Free WiFi"]'>
                    </div>

                    <!-- Actions -->
                    <div class="col-12 mt-5 d-flex gap-2 justify-content-end">
                        <a href="owner-apartments.html" class="btn btn-light border">Cancel</a>
                        <button type="submit" class="btn btn-primary px-4">Create Apartment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection


@section('js')



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script for Rent Type Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rentWholeRadio = document.getElementById('rentWhole');
            const rentRoomsRadio = document.getElementById('rentRooms');
            const wholePriceContainer = document.getElementById('wholePriceContainer');
            const roomsContainer = document.getElementById('roomsContainer');

            function toggleRentType() {
                if (rentWholeRadio.checked) {
                    wholePriceContainer.classList.remove('d-none');
                    roomsContainer.classList.add('d-none');
                    // Add required to whole price, remove from room fields
                    document.getElementById('wholePrice').setAttribute('required', '');
                    document.getElementById('numberOfRooms').removeAttribute('required');
                    document.getElementById('roomPrice').removeAttribute('required');
                } else {
                    wholePriceContainer.classList.add('d-none');
                    roomsContainer.classList.remove('d-none');
                    roomsContainer.classList.add(
                        'd-flex'); // Since it's a row, ensure it displays correctly when shown
                    // Add required to room fields, remove from whole price
                    document.getElementById('wholePrice').removeAttribute('required');
                    document.getElementById('numberOfRooms').setAttribute('required', '');
                    document.getElementById('roomPrice').setAttribute('required', '');
                }
            }

            // Initial check
            toggleRentType();

            // Listeners
            rentWholeRadio.addEventListener('change', toggleRentType);
            rentRoomsRadio.addEventListener('change', toggleRentType);

            // Image Preview Logic
            const imageInput = document.getElementById('apartmentImages');
            const uploadPrompt = document.getElementById('uploadPrompt');
            const previewContainer = document.getElementById('imagePreviewContainer');
            const fileCount = document.getElementById('fileCount');

            imageInput.addEventListener('change', function(e) {
                const files = e.target.files;

                if (files.length > 0) {
                    uploadPrompt.classList.add('d-none');
                    previewContainer.classList.remove('d-none');
                    previewContainer.innerHTML = ''; // Clear previous previews

                    fileCount.textContent = files.length + ' files selected';

                    Array.from(files).forEach(file => {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.className = 'rounded object-fit-cover border shadow-sm';
                            img.style.width = '80px';
                            img.style.height = '80px';
                            previewContainer.appendChild(img);
                        }
                        reader.readAsDataURL(file);
                    });
                } else {
                    uploadPrompt.classList.remove('d-none');
                    previewContainer.classList.add('d-none');
                    previewContainer.innerHTML = '';
                    fileCount.textContent = '';
                }
            });
            // Features Logic
            const featureInput = document.getElementById('featureInput');
            const addFeatureBtn = document.getElementById('addFeatureBtn');
            const featuresContainer = document.getElementById('featuresContainer');
            const featuresListInput = document.getElementById('featuresList');

            function updateFeaturesList() {
                const features = Array.from(featuresContainer.children).map(badge => badge.textContent.trim());
                featuresListInput.value = JSON.stringify(features);
            }

            function addFeature() {
                const value = featureInput.value.trim();
                if (value) {
                    const badge = document.createElement('span');
                    badge.className = 'badge bg-light text-dark border p-2 d-flex align-items-center gap-2';
                    badge.innerHTML = `${value} <i class="bi bi-x text-danger" style="cursor: pointer;"></i>`;

                    // Add remove functionality
                    badge.querySelector('i').addEventListener('click', function() {
                        badge.remove();
                        updateFeaturesList();
                    });

                    featuresContainer.appendChild(badge);
                    featureInput.value = '';
                    updateFeaturesList();
                }
            }

            addFeatureBtn.addEventListener('click', addFeature);
            featureInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    addFeature();
                }
            });

            // Initialize remove buttons for existing items (if any)
            featuresContainer.querySelectorAll('.bi-x').forEach(icon => {
                icon.addEventListener('click', function() {
                    this.parentElement.remove();
                    updateFeaturesList();
                });
            });
        });
    </script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Map
            // Default center: Riyadh (24.7136, 46.6753)
            var map = L.map('map').setView([24.7136, 46.6753], 13);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            var marker;
            var latInput = document.getElementById('apartmentLat');
            var lngInput = document.getElementById('apartmentLng');

            function onMapClick(e) {
                if (marker) {
                    map.removeLayer(marker);
                }
                marker = L.marker(e.latlng).addTo(map);
                latInput.value = e.latlng.lat;
                lngInput.value = e.latlng.lng;

                // You could optionally fill the 'apartmentLocation' text field here if you had reverse geocoding
            }

            map.on('click', onMapClick);
        });
    </script>


    <script>
        const el = document.getElementById("Apartments");
        el.classList.add("active");
    </script>



@endsection
