
@auth
    @if (Auth::user()->role == 'student')
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">Sakan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavStudent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavStudent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/#about') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('universitiesPage') }}">Universities</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('apartmentspage') }}">Apartments</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/#contact') }}">Contact Us</a></li>
                    </ul>


                    <div class="dropdown pe-3">
                        <a href="#" class="text-dark position-relative me-2" id="notificationDropdownStudent"
                            data-bs-toggle="dropdown" aria-expanded="false" title="Notifications">
                            <i class="bi bi-bell fs-5"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="notificationDropdownStudent"
                            style="min-width: 250px;">
                            <li>
                                <h6 class="dropdown-header">Notifications</h6>

                                @if (auth()->user()->unreadNotifications->count() > 0)
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        {{ auth()->user()->unreadNotifications->count() }}
                                    </span>
                                @endif
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                @forelse(auth()->user()->unreadNotifications as $notification)
                            <li>
                                <a class="dropdown-item d-inline" href="{{ $notification->data['url'] ?? '#' }}">
                                    {{ $notification->data['message'] }}
                                    <br><small class="text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                                </a>
                                <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST"
                                    class="ms-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm text-danger p-0 d-inline" title="Delete">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </form>

                            </li>


                        @empty
                            <li class="dropdown-item text-center">No new notifications</li>
    @endforelse




    </li>
    </ul>
    </div>

    <div class="d-flex align-items-center gap-3">
        <a href="{{ route('messages.index') }}" class="text-dark position-relative me-2" title="Messages">
            <i class="bi bi-chat-dots fs-5"></i>

        </a>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="studentDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                <div class="bg-light rounded-circle d-flex justify-content-center align-items-center me-2"
                    style="width: 35px; height: 35px;">
                    <i class="bi bi-person text-secondary"></i>
                </div>
                <span class="text-dark fw-medium">{{ Auth::user()->name }} </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="studentDropdown">
                <li><a class="dropdown-item" href="{{ route('profile.edit', Auth::user()->id) }}">Profile</a>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>


                <li>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();"
                            class="dropdown-item text-danger">Sign out</a>

                    </form>
                </li>

            </ul>
        </div>
    </div>
    </div>
    </div>
    </nav>
@elseif(Auth::user()->role == 'owner')
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">Sakan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavOwner">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavOwner">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('universitiesPage') }}">Universities</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('apartmentspage') }}">Apartments</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#contact') }}">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold text-primary"
                            href="{{ route('owner.index') }}">Owner Dashboard</a></li>
                </ul>
                <div class="d-flex align-items-center gap-3">



                    <div class="dropdown pe-3">
                        <a href="#" class="text-dark position-relative me-2" id="notificationDropdownStudent"
                            data-bs-toggle="dropdown" aria-expanded="false" title="Notifications">
                            <i class="bi bi-bell fs-5"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="notificationDropdownStudent"
                            style="min-width: 250px;">
                            <li>
                                <h6 class="dropdown-header">Notifications</h6>

                                @if (auth()->user()->unreadNotifications->count() > 0)
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        {{ auth()->user()->unreadNotifications->count() }}
                                    </span>
                                @endif
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                @forelse(auth()->user()->unreadNotifications as $notification)
                            <li>
                                <a class="dropdown-item" href="{{ $notification->data['url'] ?? '#' }}">
                                    {{ $notification->data['message'] }}
                                    <br><small class="text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                                </a>

                                <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST"
                                    class="ms-2 ">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm text-danger p-0" title="Delete">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </form>



                            </li>


                        @empty
                            <li class="dropdown-item text-center">No new notifications</li>
                            @endforelse




                            </li>
                        </ul>
                    </div>

                    <a href="{{ route('messages.index') }}" class="text-dark position-relative me-2" title="Messages">
                        <i class="bi bi-chat-dots fs-5"></i>
                    </a>

                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
                            id="ownerDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="bg-light rounded-circle d-flex justify-content-center align-items-center me-2"
                                style="width: 35px; height: 35px;">
                                <i class="bi bi-building text-secondary"></i>
                            </div>
                            <span class="text-dark fw-medium">{{ Auth::user()->name }} </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="ownerDropdown">
                            <li><a class="dropdown-item" href="{{ route('owner.index') }}">Dashboard</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                        class="dropdown-item text-danger">Sign out</a>

                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@elseif(Auth::user()->role == 'admin')
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">Sakan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAdmin">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAdmin">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('universitiesPage') }}">Universities</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('apartmentspage') }}">Apartments</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#contact') }}">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold text-danger"
                            href="{{ route('admin.index') }}">Dashboard</a></li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
                            id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="bg-light rounded-circle d-flex justify-content-center align-items-center me-2"
                                style="width: 35px; height: 35px;">
                                <i class="bi bi-shield-lock text-danger"></i>
                            </div>
                            <span class="text-dark fw-medium">{{ Auth::user()->name }} </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="adminDropdown">
                            <li><a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin_profile.index') }}">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                        class="dropdown-item text-danger">Sign out</a>

                                </form>
                            </li>





                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @endif
@else
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">Sakan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('universitiesPage') }}">Universities</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('apartmentspage') }}">Apartments</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#contact') }}">Contact Us</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="{{ route('login') }}" class="btn-nav-login">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-nav-signup">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>



@endauth
