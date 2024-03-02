<aside class="navbar navbar-vertical navbar-expand-lg sidebar-gc navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('admin.dashbord') }}">
                <img src="{{ asset('front/images/Folder3.png') }}" width="90" height="32" alt="{{ __('Logo') }}"
                    class="navbar-brand-image">
            </a>
        </h1>
        <div class="collapse navbar-collapse left-navbar" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.dashbord') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa fa-home h-3"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Dashbord') }}
                        </span>
                    </a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link " href="" data-bs-toggle="dropdown">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fab fa-audible"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Products & Categories') }}
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="{{ route('admin.products.index') }}"> <i class="fa fa-arrow-right"></i> &nbsp; {{ __('All Products') }}</a>
                                <a class="dropdown-item" href="{{ route('admin.categories.index') }}"> <i class="fa fa-arrow-right"></i> &nbsp; {{ __('All Categories') }}</a>
                            </div>
                        </div>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.home_slider.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fab fa-audible"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Home Slider Images') }}
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.work_solution.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-shield-alt"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('All Work Solution') }}
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.services.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-shield-alt"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Our Services') }}
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.recent_work.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-shield-alt"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Our Recent Works') }}
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.project.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-shield-alt"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Projects') }}
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.portfolio.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-users"></i>
                        </span>
                        <span class="nav-link-title">
                            {{-- {{ __('What Our Customer Says') }} --}}
                            {{ __('Portfolio') }}
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.logos.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-users"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Partners Logo') }}
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.about.create') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-users"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('About Us') }}
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.global_setting.create') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa fa-cog h-3"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Settings') }}
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.practice.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa fa-cog h-3"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('practice') }}
                        </span>
                    </a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link " href="" data-bs-toggle="dropdown"  >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa fa-cog h-3"></i>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Home Page Settings') }}
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="{{ route('admin.home_slider.index') }}"> <i class="fa fa-arrow-right"></i> &nbsp; {{ __('Home Slider') }}</a>
                                <a class="dropdown-item" href="#"> <i class="fa fa-arrow-right"></i> &nbsp; {{ __('WHAT OUR CUSTOMER SAYS') }}</a>
                                <a class="dropdown-item" href="#"> <i class="fa fa-arrow-right"></i> &nbsp; {{ __('About Us') }}</a>
                                <a class="dropdown-item" href="#"> <i class="fa fa-arrow-right"></i> &nbsp; {{ __('Contact Us') }}</a>
                                <a class="dropdown-item" href="#"> <i class="fa fa-arrow-right"></i> &nbsp; {{ __('Events') }}</a>
                            </div>
                        </div>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</aside>
