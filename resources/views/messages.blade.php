@extends('layout.master')


@section('title', 'Sakan - Messages')



@section('head')


<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css')}}">
    <link rel="stylesheet" href="{{ asset('css/messages.css')}}">

@endsection


@section('content')


 <!-- Main Content -->
    <div class="chat-container">

        <!-- Sidebar: Chat List -->
        <div class="chat-sidebar">
            <div class="chat-search-box">
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-search text-muted"></i></span>
                    <input type="text" class="form-control bg-light border-start-0" placeholder="Search chats...">
                </div>
            </div>

            <ul class="chat-list">
                <!-- Active Chat Item -->
                <li class="chat-item active">
                    <div class="chat-avatar">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                            alt="Owner" style="width: 100%; height: 100%; border-radius: 50%;">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">
                            Ahmed Owner <span class="chat-time">10:45 AM</span>
                        </div>
                        <div class="chat-preview fw-semibold text-dark">
                            Is the apartment still available?
                        </div>
                    </div>
                    <span class="badge-unread">1</span>
                </li>

                <!-- Inactive Chat Item -->
                <li class="chat-item">
                    <div class="chat-avatar">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">
                            Sara Roommate <span class="chat-time">Yesterday</span>
                        </div>
                        <div class="chat-preview">
                            Hey, did you pay the electricity bill?
                        </div>
                    </div>
                </li>

                <!-- Inactive Chat Item -->
                <li class="chat-item">
                    <div class="chat-avatar text-white bg-secondary">
                        MK
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">
                            Mike King <span class="chat-time">Mon</span>
                        </div>
                        <div class="chat-preview">
                            Let's meet at the library.
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Main: Chat Body -->
        <div class="chat-body">
            <!-- Chat Header -->
            <div class="chat-header">
                <div class="d-flex align-items-center">
                    <div class="chat-avatar me-3">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                            alt="Owner" style="width: 40px; height: 40px; border-radius: 50%;">
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold">Ahmed Owner</h6>
                        <small class="text-success"><i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                            Online</small>
                    </div>
                </div>
                <div>
                    <button class="btn btn-outline-secondary btn-sm me-2"><i class="bi bi-telephone"></i></button>
                    <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-three-dots-vertical"></i></button>
                </div>
            </div>

            <!-- Messages -->
            <div class="chat-messages" id="chatMessages">
                <div class="text-center text-muted small my-3">Today</div>

                <div class="message sent">
                    Hello Ahmed, I saw your listing for the studio apartment near university.
                    <span class="message-time">10:30 AM <i class="bi bi-check2-all"></i></span>
                </div>

                <div class="message received">
                    Hi John! Yes, it is still available. Would you like to schedule a viewing?
                    <span class="message-time">10:32 AM</span>
                </div>

                <div class="message sent">
                    That would be great. Are you free tomorrow afternoon?
                    <span class="message-time">10:33 AM <i class="bi bi-check2-all"></i></span>
                </div>

                <div class="message received">
                    Tomorrow at 2 PM works for me.
                    <span class="message-time">10:45 AM</span>
                </div>

                <div class="message sent">
                    Is the apartment still available?
                    <span class="message-time">10:45 AM</span>
                </div>
            </div>

            <!-- Input Area -->
            <div class="chat-input-area">
                <button class="btn btn-light rounded-circle text-muted"><i class="bi bi-paperclip"></i></button>
                <input type="text" class="chat-input" placeholder="Type a message...">
                <button class="btn btn-primary rounded-circle p-2" style="width: 45px; height: 45px;"><i
                        class="bi bi-send-fill"></i></button>
            </div>
        </div>
    </div>

@endsection


@section('js')

<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Simple script to scroll to bottom of chat
        const chatMessages = document.getElementById('chatMessages');
        chatMessages.scrollTop = chatMessages.scrollHeight;
    </script>

@endsection