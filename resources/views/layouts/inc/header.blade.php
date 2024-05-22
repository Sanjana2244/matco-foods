<header class="header {{ request()->is('news') ? 'position-static' : 'position-absolute' }}">
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3"
            aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" onclick="openNav()">
                <img src="{{ asset('frontend-assets/img/hamburger.png') }}" alt="hamburger" />
            </span>
        </button>
        <a class="navbar-brand d-none d-sm-none d-md-inline-block desktop" href="/">
            <img src="{{ asset('frontend-assets/img/logo.png') }}" alt="logo" />
        </a>
        <a class="navbar-brand d-inline-block d-sm-inlnie-block d-md-none" href="/">
            <img src="{{ asset('frontend-assets/img/logo-without-text.png') }}" alt="logo" />
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.about') }}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.products.index') }}">PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.sustainability') }}">SUSTAINABILITY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.investorRelation') }}">INVESTOR RELATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.news') }}">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.career') }}">CAREERS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.contact') }}">CONTACT US</a>
                </li>

                {{-- <li class="nav-item my-auto pl-3">
                    <a href="https://www.facebook.com/matcofoods">
                        <img src="{{ asset('frontend-assets/img/facebook.png') }}" alt="facebook" />
                    </a>
                </li>
                <li class="nav-item my-auto pl-2">
                    <a href="https://www.linkedin.com/company/matco-foods/">
                        <img src="{{ asset('frontend-assets/img/linkedin.png') }}" alt="linkedin" />
                    </a>
                </li>
                <li class="nav-item my-auto pl-2">
                    <a href="https://www.instagram.com/falak.rice/">
                        <img src="{{ asset('frontend-assets/img/instagram.png') }}" alt="instagram" />
                    </a>
                </li>
                <li class="nav-item my-auto pl-2 pr-2">
                    <a href="https://www.youtube.com/channel/UCdRWeyCRbHHA-5i0V5jm4Zg">
                        <img src="{{ asset('frontend-assets/img/youtube.png') }}" alt="youtube" />
                    </a>
                </li> --}}
                <li class="nav-item d-flex">
                    <form class="form-inline md-form mb-0 waves-effect waves-light">
                        <i class="fa fa-search px-3"></i>
                    </form>
                </li>
                {{-- <li class="nav-item my-auto pl-1 pr-2">
                    <a href="#">
                        <img src="{{ asset('frontend-assets/img/urdu.png') }}" alt="linkedin" />
                    </a>
                </li> --}}
            </ul>
        </div>
    </nav>

    <div class="searchForm">
        {{-- <form action="{{ route('pages.search') }}" method="POST"> --}}
            {{-- @csrf --}}
            <input id="search-product" type="text" class="input" name="search" placeholder="Search" autocomplete="off">
            <i class="fa fa-times"></i>
            <div id="product_list"></div>  
        {{-- </form> --}}
    </div>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="/">
                <img src="{{ asset('frontend-assets/img/logo.png') }}" alt="logo" />
            </a>
            <a class="nav-link my-3" href="{{ route('pages.about') }}">ABOUT US</a>

            <a class="nav-link my-3" href="{{ route('pages.products.index') }}">PRODUCTS</a>

            <a class="nav-link my-3" href="{{ route('pages.sustainability') }}">SUSTAINABILITY</a>

            <a class="nav-link my-3" href="{{ route('pages.investorRelation') }}">INVESTOR RELATIONS</a>
            
            <a class="nav-link my-3" href="{{ route('pages.news') }}">NEWS</a>

            <a class="nav-link my-3" href="{{ route('pages.career') }}">CAREERS</a>


            <a class="nav-link my-3" href="{{ route('pages.contact') }}">CONTACT US</a>

            <a class="d-inline-block" href="https://www.facebook.com/matcofoods">
                <img src="{{ asset('frontend-assets/img/facebookFooterLogo.png') }}" alt="facebook" />
            </a>

            <a class="d-inline-block" href="https://www.linkedin.com/company/matco-foods/">
                <img src="{{ asset('frontend-assets/img/linkedIN-white.png') }}" alt="linkedin" />
            </a>

            <a class="d-inline-block" href="https://www.instagram.com/falak.rice/">
                <img src="{{ asset('frontend-assets/img/instaFooterLogo.png') }}" alt="instagram" />
            </a>

            <a class="d-inline-block" href="https://www.youtube.com/channel/UCdRWeyCRbHHA-5i0V5jm4Zg">
                <img src="{{ asset('frontend-assets/img/Group 1030.png') }}" alt="youtube" />
            </a>

        </div>
    </div>

</header>
