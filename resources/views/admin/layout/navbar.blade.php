<!-- Navbar -->
<header class="navbar navbar-expand-md navbar-light d-none d-lg-flex d-print-none navbar-gc">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav flex-row order-md-last">

            <div class="nav-item dropdown">
                <a href="jascript:void(0);" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm">
                        <i class="fa fa-user"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow nav-dropdown-gc">
                    <div class="role-info-gc">
                        <span class="avatar avatar-sm"><i class="fa fa-user"></i></span>
                        <div class="ps-2">
                            <div>
                                @if (auth()->user())
                                    {{ auth()->user()->name }}
                                @endif
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('admin.profile.adminprofile') }}"
                        class="dropdown-item text-dark">{{ __('Profile') }}
                    </a>

                    <a href="{{ route('logout') }}" class="dropdown-item text-dark"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div>
                {{-- <form action="./" method="get" autocomplete="off" novalidate>
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg>
                        </span>
                        <input type="text" value="" class="form-control" placeholder="Search…"
                            aria-label="Search in website">
                    </div>
                </form> --}}
            </div>
        </div>
    </div>
</header>
