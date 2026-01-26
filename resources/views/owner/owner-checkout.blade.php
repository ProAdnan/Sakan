@extends('layouts.owner_master')


@section('title', 'Checkout - Sakan')


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

    <script src="https://js.stripe.com/v3/"></script>


@endsection




@section('content')



@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('plans.index') }}" class="text-decoration-none text-muted me-3">
                <i class="bi bi-arrow-left"></i> Back to Plans
            </a>
            <h2 class="fw-bold mb-0">Secure Checkout</h2>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row g-5">
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm p-4">
                    <h4 class="mb-4">Payment Methods</h4>

                    <form id="payment-form" action="{{ route('plans.confirm',$plan->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                        <input type="hidden" name="card_token" id="card_token" value="">

                        <div class="mb-3">
                            <label class="form-label">Cardholder Name</label>
                            <input type="text" class="form-control" id="cardName" placeholder="John Doe" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Card Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="bi bi-credit-card"></i></span>
                                <input type="text" class="form-control border-start-0 ps-0" id="cardNumber"
                                    placeholder="4242 4242 4242 4242" maxlength="19" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Expiry Date</label>
                                <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY"
                                    maxlength="5" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">CVV / CVC</label>
                                <input type="password" class="form-control" id="cvv" placeholder="123" maxlength="4"
                                    required>
                            </div>
                        </div>

                        <button type="submit" id="checkout-btn" class="btn btn-primary w-100 py-3 fw-bold fs-5 shadow-sm">
                            <span id="btn-text">Pay ${{ number_format($plan->price, 2) }}</span>
                            <span id="btn-spinner" class="spinner-border spinner-border-sm d-none"></span>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card border-0 bg-light p-4">
                    <h4 class="mb-4">Order Summary</h4>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Plan</span>
                        <span class="fw-bold">{{ $plan->name }}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Duration</span>
                        <span class="fw-bold">{{ $plan->duration_days }} Days</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="h5 mb-0">Total</span>
                        <span class="h3 fw-bold text-primary mb-0">${{ $plan->price }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@endsection


@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const paymentForm = document.getElementById('payment-form');
        const checkoutBtn = document.getElementById('checkout-btn');
        const tokenInput = document.getElementById('card_token');

        if (!paymentForm) {
            console.error("Form not found! Check your ID.");
            return;
        }

        paymentForm.addEventListener('submit', function(e) {
            e.preventDefault();
            console.log("1. Submit intercepted...");

            // UI Changes
            checkoutBtn.disabled = true;
            document.getElementById('btn-text').classList.add('d-none');
            document.getElementById('btn-spinner').classList.remove('d-none');

            console.log("2. Simulating External API Call (2 seconds)...");

            setTimeout(() => {
                // Generate Fake Token
                const fakeToken = "tok_sakan_" + Math.random().toString(36).substr(2, 10);
                
                // Set value to hidden input
                tokenInput.value = fakeToken;
                
                console.log("3. Token created: " + fakeToken);
                console.log("4. Sending data to Laravel Route: {{ route('card.store') }}");

                // Use the standard form submit
                paymentForm.submit();
            }, 2000); 
        });
    });
</script>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Simple script to parse URL params and update summary
    document.addEventListener('DOMContentLoaded', () => {
        const params = new URLSearchParams(window.location.search);
        const plan = params.get('plan');
        const price = params.get('price');

        if (plan && price) {
            const planNameMap = {
                'starter': 'Starter Plan',
                'professional': 'Professional Plan',
                'enterprise': 'Enterprise Plan'
            };

            document.getElementById('planName').textContent = planNameMap[plan] || 'Unknown Plan';
            document.getElementById('planPrice').textContent = '$' + parseFloat(price).toFixed(2);
        }
    });
</script>


<script>
    const el = document.getElementById("Apartments");
    el.classList.add("active");
</script>


@endsection
