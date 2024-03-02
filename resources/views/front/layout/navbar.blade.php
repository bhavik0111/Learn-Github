<style>
    nav {
        height: 80px;
        position: fixed;
        top: 0;
        float: right;
        left: 0;
        width: 100%;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        z-index: 99;
        background: rgba(0, 0, 0, 0.5);
        font-family: "Raleway", Arial, Helvetica, sans-serif;
    }

    nav .navbar {
        width: 100%;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 0;
        background: rgba(0, 0, 0, 0.5);

        /* background: red; */
        padding: 0 50px;
    }

    nav .navbar .links li a:after {
        position: relative;
        font-family: "FontAwesome";
        content: "\f111";
        font-size: 6px;
        margin-left: 20px;
        margin-top: 0px;
        color: #18ae90;
    }

    .navbar .logo a {
        line-height: 35px;
        font-size: 11px;
        color: #fff;
        text-decoration: none;
        font-weight: normal;
        font-style: normal;
    }

    /* nav .navbar .links li a:hover {
      color: #18ae90;
    } */

    nav .navbar .nav-links {
        /* line-height: 70px; */
        height: 100%;
    }

    nav .navbar .links {
        display: flex;
    }

    nav .navbar .links li {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        list-style: none;
    }

    nav .navbar .links li a {
        height: 100%;
        text-decoration: none;
        white-space: nowrap;
        color: #fff;
        font-weight: normal;
        font-style: normal;
        font-family: "Raleway", Arial, Helvetica, sans-serif;
        float: left;
        font-size: 11px;
        letter-spacing: 3px;
        text-transform: uppercase;
        padding: 25px 0px 25px 20px;
    }

    .links li:hover .htmlcss-arrow,
    .links li:hover .js-arrow {
        transform: rotate(180deg);
    }

    nav .navbar .links li .arrow {
        /* background: red; */
        height: 100%;
        width: 22px;
        line-height: 70px;
        text-align: center;
        display: inline-block;
        color: #fff;
        transition: all 0.3s ease;
    }

    nav .navbar .links li .sub-menu {
        position: absolute;
        top: 70px;
        /* left: -34px; */
        line-height: 40px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        border-radius: 0 0 4px 4px;
        display: none;
        z-index: 2;
        padding: 0px 0px;
    }

    nav .navbar .links li:hover .htmlCss-sub-menu,
    nav .navbar .links li:hover .js-sub-menu {
        display: block;
    }

    .navbar .links li .sub-menu li {
        background: #222327;
        border-top: none;
        color: #ccc;
        /* width: 200px; */
        border-left: none;
        text-align: left;
        padding-top: 2px;
        padding-bottom: 2px;
    }

    /* .navbar .links li .sub-menu li a:hover {
      background-color: #18ae90;
      color: #111!important;
    } */
    .navbar .links li .sub-menu a {
        color: #fff;
        font-weight: normal;
        font-style: normal;
        font-family: "Raleway", Arial, Helvetica, sans-serif;
        float: right;
        font-size: 11px;
        letter-spacing: 3px;
        text-transform: uppercase;
        padding: 2px 15px 2px 15px;
    }

    .navbar .links li .sub-menu a:after {
        content: none;
    }

    .navbar .links li .sub-menu .more-arrow {
        line-height: 40px;
    }

    .navbar .links li .htmlCss-more-sub-menu {
        /* line-height: 40px; */
    }

    .navbar .links li .sub-menu .more-sub-menu {
        position: absolute;
        top: 0;
        left: 100%;
        border-radius: 0 4px 4px 4px;
        z-index: 1;
        display: none;
    }

    .links li .sub-menu .more:hover .more-sub-menu {
        display: block;
    }

    .navbar .search-box {
        display: none;
        position: relative;
        height: 40px;
        width: 40px;
    }

    .navbar .nav-links .sidebar-logo {
        display: none;
    }

    .navbar .bx-menu {
        display: none !important;
    }

    @media (max-width: 920px) {
        nav .navbar {
            max-width: 100%;
            padding: 0 25px;
        }

        nav .navbar .logo a {
            font-size: 27px;
        }

        nav .navbar .links li {
            padding: 0 10px;
            white-space: nowrap;
        }

        nav .navbar .links li a {
            font-size: 11px;
        }

        nav .navbar .links li a:after {
            content: "";
        }
    }

    @media (max-width: 800px) {
        nav {
            /* position: relative; */
        }

        .navbar .bx-menu {
            display: block !important;
        }

        nav .navbar .nav-links {
            position: fixed;
            top: 0;
            left: -100%;
            display: block;
            max-width: 270px;
            width: 100%;
            background: rgba(0, 0, 0, 0.9);
            line-height: 40px;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            z-index: 1000;
        }

        .navbar .nav-links .sidebar-logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-logo .logo-name {
            font-size: 25px;
            color: #fff;
        }

        .sidebar-logo i,
        .navbar .bx-menu {
            font-size: 25px;
            color: #fff;
        }

        nav .navbar .links {
            display: block;
            margin-top: 20px;
        }

        nav .navbar .links li .arrow {
            line-height: 40px;
        }

        nav .navbar .links li {
            display: block;
        }

        nav .navbar .links li .sub-menu {
            position: relative;
            top: 0;
            box-shadow: none;
            display: none;
        }

        nav .navbar .links li .sub-menu li {
            border-bottom: none;
        }

        .navbar .links li .sub-menu a {
            float: left;
        }

        .navbar .links li .sub-menu .more-sub-menu {
            display: none;
            position: relative;
            left: 0;
        }

        .navbar .links li .sub-menu .more-sub-menu li {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .links li:hover .htmlcss-arrow,
        .links li:hover .js-arrow {
            transform: rotate(0deg);
        }

        .navbar .links li .sub-menu .more-sub-menu {
            display: none;
        }

        .navbar .links li .sub-menu .more span {
            /* background: red; */
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
        }

        .links li .sub-menu .more:hover .more-sub-menu {
            display: none;
        }

        nav .navbar .links li:hover .htmlCss-sub-menu,
        nav .navbar .links li:hover .js-sub-menu {
            display: none;
        }

        .navbar .nav-links.show1 .links .htmlCss-sub-menu,
        .navbar .nav-links.show3 .links .js-sub-menu,
        .navbar .nav-links.show2 .links .more .more-sub-menu {
            display: block;
        }

        .navbar .nav-links.show1 .links .htmlcss-arrow,
        .navbar .nav-links.show3 .links .js-arrow {
            transform: rotate(180deg);
        }

        .navbar .nav-links.show2 .links .more-arrow {
            transform: rotate(90deg);
        }

        nav .navbar .links li a:after {
            content: none;
        }
    }

    @media (max-width: 370px) {
        nav .navbar .nav-links {
            max-width: 100%;
        }

        nav .navbar .links li a:after {
            content: none;
        }
    }

    @media (max-width: 920px) {
        nav .navbar {
            max-width: 100%;
            padding: 0 25px;
        }

        nav .navbar .logo a {
            font-size: 27px;
        }

        nav .navbar .links li {
            padding: 0 10px;
            white-space: nowrap;
        }

        nav .navbar .links li a {
            font-size: 11px;
            padding: 1px 0px 1px 10px;
        }

        nav .navbar .links li a:after {
            content: "";
        }
    }

    @media (max-width: 800px) {
        nav {
            /* position: relative; */
        }

        .navbar .bx-menu {
            display: block !important;
        }

        nav .navbar .nav-links {
            position: fixed;
            top: 0;
            left: -100%;
            display: block;
            max-width: 270px;
            width: 100%;
            background: rgba(0, 0, 0, 0.9);
            line-height: 40px;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            z-index: 1000;
        }

        .navbar .nav-links .sidebar-logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-logo .logo-name {
            font-size: 25px;
            color: #fff;
        }

        .sidebar-logo i,
        .navbar .bx-menu {
            font-size: 25px;
            color: #fff;
        }

        nav .navbar .links {
            display: block;
            margin-top: 20px;
            padding: 14px;
        }

        nav .navbar .links li .arrow {
            line-height: 40px;
        }

        nav .navbar .links li {
            display: block;
        }

        nav .navbar .links li .sub-menu {
            position: relative;
            top: 0;
            box-shadow: none;
            display: none;
        }

        nav .navbar .links li .sub-menu li {
            border-bottom: none;
        }

        .navbar .links li .sub-menu .more-sub-menu {
            display: none;
            position: relative;
            left: 0;
        }

        .navbar .links li .sub-menu .more-sub-menu li {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .links li:hover .htmlcss-arrow,
        .links li:hover .js-arrow {
            transform: rotate(0deg);
        }

        .navbar .links li .sub-menu .more-sub-menu {
            display: none;
        }

        .navbar .links li .sub-menu .more span {
            /* background: red; */
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
        }

        .links li .sub-menu .more:hover .more-sub-menu {
            display: none;
        }

        nav .navbar .links li:hover .htmlCss-sub-menu,
        nav .navbar .links li:hover .js-sub-menu {
            display: none;
        }

        .navbar .nav-links.show1 .links .htmlCss-sub-menu,
        .navbar .nav-links.show3 .links .js-sub-menu,
        .navbar .nav-links.show2 .links .more .more-sub-menu {
            display: block;
        }

        .navbar .nav-links.show1 .links .htmlcss-arrow,
        .navbar .nav-links.show3 .links .js-arrow {
            transform: rotate(180deg);
        }

        .navbar .nav-links.show2 .links .more-arrow {
            transform: rotate(90deg);
        }

        nav .navbar .links li a:after {
            content: "";
        }
    }

    @media (max-width: 370px) {
        nav .navbar .nav-links {
            max-width: 100%;
        }

        nav .navbar .links li a:after {
            content: "";
        }
    }

    @media (max-width: 920px) {
        nav .navbar {
            max-width: 100%;
            padding: 0 25px;
        }

        nav .navbar .logo a {
            font-size: 27px;
        }

        nav .navbar .links li {
            padding: 0 10px;
            white-space: nowrap;
        }

        nav .navbar .links li a {
            font-size: 11px;
        }

        nav .navbar .links li a:after {
            content: "";
        }

        navbar .links li .sub-menu li {
            background: '#000000';
        }
    }

    @media (max-width: 800px) {
        nav {
            /* position: relative; */
        }

        .navbar .bx-menu {
            display: block !important;
        }

        nav .navbar .nav-links {
            position: fixed;
            top: 0;
            left: -100%;
            display: block;
            max-width: 270px;
            width: 100%;
            background: rgba(0, 0, 0, 0.9);
            line-height: 40px;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            z-index: 1000;
        }

        .navbar .nav-links .sidebar-logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-logo .logo-name {
            font-size: 25px;
            color: #fff;
        }

        .sidebar-logo i,
        .navbar .bx-menu {
            font-size: 25px;
            color: #fff;
        }

        nav .navbar .links {
            display: block;
            margin-top: 20px;
        }

        nav .navbar .links li .arrow {
            line-height: 40px;
        }

        nav .navbar .links li {
            display: block;
        }

        nav .navbar .links li .sub-menu {
            position: relative;
            top: 0;
            box-shadow: none;
            display: none;
        }

        nav .navbar .links li .sub-menu li {
            border-bottom: none;
        }

        .navbar .links li .sub-menu li {
            background: none !important;
        }

        .navbar .links li .sub-menu .more-sub-menu {
            display: none;
            position: relative;
            left: 0;
        }

        .navbar .links li .sub-menu .more-sub-menu li {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .links li:hover .htmlcss-arrow,
        .links li:hover .js-arrow {
            transform: rotate(0deg);
        }

        .navbar .links li .sub-menu .more-sub-menu {
            display: none;
        }

        .navbar .links li .sub-menu .more span {
            /* background: red; */
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
        }

        .links li .sub-menu .more:hover .more-sub-menu {
            display: none;
        }

        nav .navbar .links li:hover .htmlCss-sub-menu,
        nav .navbar .links li:hover .js-sub-menu {
            display: none;
        }

        .navbar .nav-links.show1 .links .htmlCss-sub-menu,
        .navbar .nav-links.show3 .links .js-sub-menu,
        .navbar .nav-links.show2 .links .more .more-sub-menu {
            display: block;
        }

        .navbar .nav-links.show1 .links .htmlcss-arrow,
        .navbar .nav-links.show3 .links .js-arrow {
            transform: rotate(180deg);
        }

        .navbar .nav-links.show2 .links .more-arrow {
            transform: rotate(90deg);
        }

        nav .navbar .links li a:after {
            content: "";
        }
    }

    @media (max-width: 370px) {
        nav .navbar .nav-links {
            max-width: 100%;
        }

        nav .navbar .links li a:after {
            content: "";
        }
    }
</style>
<header class="" id="header">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2">

            </div>
            <div class="col-md-9">
                <nav>
                    <div class="navbar" id="logo"> <img src="../front/images/Folder3.png" alt="">
                        <i class='bx bx-menu'></i>
                        <div class="nav-links">
                            <div class="sidebar-logo">
                                <span class="logo-name">VFW</span>
                                <i class='bx bx-x'></i>
                            </div>
                            <ul class="links">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li> <a title="About Us" href="{{ route('aboutus') }}">About Us</a></li>

                                <li class="has-dropdown"><a title="Services">Services</a>
                                    <ul class="htmlCss-sub-menu sub-menu">
                                        @foreach ($services as $service)
                                            <li><a title="{{ $service->title }}"
                                                    href="{{ route('service', $service->id) }}">{{ $service->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                {{-- <li class="has-dropdown"><a title="Flats">Projects</a>
                                    <ul class="htmlCss-sub-menu sub-menu">
                                        <li><a href="{{ route('front.project', 'turnkey_project') }}">TURNKEY PROJECTS</a>
                                        </li>
                                        <li><a href="{{ route('front.project', 'interior_execution') }}">INTERIOR EXECUTION</a>
                                        </li>
                                        <li> <a href="{{ route('front.project', 'interior_designing') }}">INTERIOR DESIGNING</a>
                                        </li>
                                        <li> <a href="{{ route('front.project', 'project_management') }}">PROJECT MANAGEMENT</a>
                                        </li>
                                        <li> <a href="{{ route('front.project', 'civil_work') }}">CIVIL WORK</a>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li><a title="Portfolio" href="{{ route('front.portfolio') }}">Portfolio</a>
                                </li>
                                <li><a title="Contact Us" href="{{ route('contactus') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="search-box"> <i class='bx bx-search'></i>
                            <div class="input-box"> <input type="text" placeholder="Search..."> </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
