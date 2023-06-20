    <!-- Topbar -->
    <section class="container-fluid bg-dark py-2 px-lg-5 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none pe-3" href="" target='_blank'><i
                                class="fa fa-phone-alt pe-2 text-white"></i><span class="text-white">+92 300
                                6472719</span></a>
                        <span class="text-white">|</span>
                        <a class="text-decoration-none px-3" target='_blank'
                            href="https://mail.google.com/mail/u/0/#inbox?compose=new"><i
                                class="fa fa-envelope text-white pe-2"></i><span
                                class="text-white">vtiryk74@gmail.com</span></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="px-3" target='_blank' href="https://www.facebook.com/vtirykhan/">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a class="px-3" target='_blank' href="">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a class="px-3" target='_blank' href="">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                        <a class="px-3" target='_blank' href="">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a class="ps-3" target='_blank' href="">
                            <i class="fab fa-youtube text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Topbar End -->

    <!-- Navbar -->
    <section class="container-fluid position-relative position-relative p-0 d-lg-block" style="z-index: 9;">
        <div class="position-relative">
            <nav class="navbar navbar-expand-lg" style="background-color: #162239;">
                <div class="container pe-0">
                    <a class="navbar-brand text-white" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="VTI-RYK"
                            style="width: 50px; height: 50px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Request::routeIs('home') ? 'active': ''}}" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Request::routeIs('trades') ? 'active': ''}}" href="{{ route('trades') }}">Trades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Request::routeIs('faculty') ? 'active': ''}}" href="{{ route('faculty') }}">Faculty</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white {{ Request::routeIs('onlineAdd') ? 'active': ''}}" href="{{ route('onlineAdd') }}" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Admissions
                                </a>
                                <ul class="dropdown-menu rounded-0">
                                    <li><a class="dropdown-item {{ Request::routeIs('policy') ? 'active': ''}}" href="{{ route('policy') }}">Admission Policy</a></li>
                                    <li><a class="dropdown-item {{ Request::routeIs('howToApply') ? 'active': ''}}" href="{{ route('howToApply') }}">How to Apply?</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item {{ Request::routeIs('pnlineAdd') ? 'active': ''}}" href="{{ route('onlineAdd') }}">Apply Online</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Request::routeIs('about') ? 'active': ''}}" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Request::routeIs('contact') ? 'active': ''}}" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- Navbar end  -->