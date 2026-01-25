@extends('layouts.owner_master')
@section('title', 'Messages - Owner Dashboard')



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





@endsection

@section('content')
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-bold mb-1">Messages</h2>
            <p class="text-muted">Chat with interested students.</p>
        </div>
    </div>

    <!-- Messages Placeholder Layout -->
    <div class="row" style="height: 600px;">
        <!-- Conversation List -->
        <div class="col-md-4 h-100">
            <div class="dashboard-card h-100 d-flex flex-column">
                <div class="p-3 border-bottom">
                    <input type="text" class="form-control" placeholder="Search messages...">
                </div>
                <div class="flex-grow-1 overflow-auto">
                    <!-- Chat Item 1 -->
                    <div class="p-3 border-bottom d-flex align-items-center gap-3 bg-light">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 40px; height: 40px;">JD</div>
                        <div class="flex-grow-1 overflow-hidden">
                            <div class="d-flex justify-content-between">
                                <span class="fw-bold text-truncate">John Doe</span>
                                <small class="text-muted">10:30 AM</small>
                            </div>
                            <div class="text-truncate small text-muted">Is the apartment still available?</div>
                        </div>
                    </div>
                    <!-- Chat Item 2 -->
                    <div class="p-3 border-bottom d-flex align-items-center gap-3">
                        <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 40px; height: 40px;">MK</div>
                        <div class="flex-grow-1 overflow-hidden">
                            <div class="d-flex justify-content-between">
                                <span class="fw-bold text-truncate">Mike Ross</span>
                                <small class="text-muted">Yesterday</small>
                            </div>
                            <div class="text-truncate small text-muted">Thanks for the info!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Area -->
        <div class="col-md-8 h-100">
            <div class="dashboard-card h-100 d-flex flex-column">
                <div class="p-3 border-bottom d-flex align-items-center gap-3">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 40px; height: 40px;">JD</div>
                    <span class="fw-bold">John Doe</span>
                </div>
                <div class="flex-grow-1 p-4 overflow-auto bg-light">
                    <!-- Messages -->
                    <div class="d-flex mb-3 justify-content-end">
                        <div class="bg-primary text-white p-3 rounded-start rounded-top shadow-sm" style="max-width: 70%;">
                            Hello John, yes the apartment is available.
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="bg-white p-3 rounded-end rounded-top shadow-sm border" style="max-width: 70%;">
                            Great! Can I schedule a visit for tomorrow?
                        </div>
                    </div>
                </div>
                <div class="p-3 border-top bg-white">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type a message...">
                        <button class="btn btn-primary"><i class="bi bi-send-fill"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')

    <script>
        const el = document.getElementById("Messages");
        el.classList.add("active");
    </script>

@endsection
