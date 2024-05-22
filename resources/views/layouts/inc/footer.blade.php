<footer>
    <div class="row justify-content-center pt-5 pb-3 m-0">

        <div class="col-12 col-md-4 service">
            <div class="row mx-3 mx-sm-3 mx-md-0 mx-lg-0">
                <div
                    class="col-12 col-md-12 order-last order-sm-last order-md-first mt-4 mt-sm-4 mt-md-0 mt-lg-0 ftr-content">
                    <p
                        class="text-white order-last order-sm-last order-md-first text-center text-md-left text-lg-left mb-0">
                        Matco Foods Limited is
                        a leading
                        Pakistan-based agribusiness with over 50 years of
                        experience in the rice
                        industry. It is the largest basmati rice exporter from Pakistan operating 5 processing plants.
                        Its
                        products reach over 60 countries worldwide.</p>
                </div>
                <div class="col-12 col-md-12">
                    <img class="my-2 ftr-bnr-2 w-100" src="{{ asset('frontend-assets/img/footerBanner.jpg') }}"
                        alt="falak">
                </div>
                <div class="col-5 p-0 mt-3 text-center">
                    <img class="footer-logo" src="{{ asset('frontend-assets/img/footerLogo.png') }}" alt="falak">
                </div>
                <div class="col-1 mt-3 p-0 divider">
                    <hr>
                </div>
                <div class="col-6 mt-3 p-0">
                    <img class="jama-punji w-100" src="{{ asset('frontend-assets/img/jamaPunji.png') }}" alt="falak">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-2 quick_links mt-5 mt-sm-5 mt-md-0 mt-lg-0">
            <h5 class="text-white mb-3 mb-sm-2 mb-md-5 mb-lg-5 text-uppercase">Quick Links</h5>
            <ul class="list-unstyled">
                <li>
                    <a href="{{ route('pages.about') }}">About us</a>
                </li>
                <li>
                    <a href="{{ route('pages.products.index') }}">Products</a>
                </li>
                <li>
                    <a href="{{ route('pages.sustainability') }}">Sustainability</a>
                </li>
                <li>
                    <a href="{{ route('pages.investorRelation') }}">Investor Relations</a>
                </li>
                <li>
                    <a href="{{ route('pages.news') }}">News</a>
                </li>
                <li>
                    <a href="{{ route('pages.career') }}">Careers</a>
                </li>
                <li>
                    <a href="{{ route('pages.contact') }}">Contact us</a>
                </li>

            </ul>
        </div>
        <div class="col-12 col-md-2 product_links mt-5 mt-sm-5 mt-md-0 mt-lg-0">
            <h5 class="text-white mb-3 mb-sm-2 mb-md-5 mb-lg-5 text-uppercase">Products</h5>
            {{-- <div class="row"> --}}
            {{-- <div class="col-12 col-md-6"> --}}
            <ul class="list-unstyled ">
                <li>
                    <a href="{{ route('pages.falak') }}">Falak – The Flagship Brand</a>
                </li>
                <li>
                    <a href="{{ route('pages.basmatiRice') }}">Basmati Rice
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages.nonBasmatiRice') }}">Non-Basmati Rice</a>
                </li>
                <li>
                    <a href="{{ route('pages.organicRice') }}">Organic Rice </a>
                </li>
                <li>
                    <a href="{{ route('pages.privateLabelling') }}">Private
                        Labelling </a>
                </li>
                <li>
                    <a href="{{ route('pages.riceSyrup') }}">Rice Syrup </a>
                </li>
                <li>
                    <a href="{{ route('pages.riceProtien') }}">Rice Protein</a>
                </li>
                <li>
                    <a href="{{ route('pages.solids') }}">Maltodextrin / Syrup Solids</a>
                </li>
                <li>
                    <a href="{{ route('pages.dextroseMonohydrate') }}">Organic Dextrose Monohydrate
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages.otherLeadingBrands') }}">Other Leading Brands</a>
                </li>
                <li>
                    <a href="{{ route('pages.maize') }}">Maize Corn Starch</a>
                </li>
            </ul>
            {{-- </div> --}}

            {{-- <div class="col-12 col-md-6 product-list-2 pl-4 pr-0 d-none d-sm-none d-md-block d-lg-block d-xl-block">

                <ul class="list-unstyled contact_us">
                    <li>
                        <img style="top: 1%; left: -1%;" src="{{ asset('frontend-assets/img/marker.png') }}"
                            alt="marker" />
                        <p class="mb-4">B-1 / A, S.I.T.E Phase 1, Super Highway Industrial Area, Karachi, Pkaistan
                            75340</p>
                    </li>
                    <li>
                        <img style="top: 23%; left:-3%;" src="{{ asset('frontend-assets/img/phone.png') }}"
                            alt="phone" />
                        <p class="mb-4">Karachi<br>
                            +92301-8250969, +92321-2422902</p>
                    </li>
                    <li>
                        <img style="top: 39%; left:-3%" src="{{ asset('frontend-assets/img/phone.png') }}"
                            alt="phone" />
                        <p class="mb-4">Glucose / Maltodextrin / Rice Protein<br>
                            +92333-1207746</p>
                    </li>
                    <li>
                        <img style="top: 69%; left:-2%" src="{{ asset('frontend-assets/img/phone.png') }}"
                            alt="phone" />
                        <p class="mb-4">Rice Plant Sadhoke, Punjab<br>
                            +92346-8206056</p>
                    </li>

                    <li>
                        <img style="top: 56%; left:-2%" src="{{ asset('frontend-assets/img/phone.png') }}"
                            alt="phone" />
                        <p class="mb-4">Corn Division Punjab<br>
                            +92321-6612044</p>
                    </li>
                    <li>
                        <img style="top: 80.5%; left:-2%" src="{{ asset('frontend-assets/img/email.png') }}"
                            alt="email" />
                        <p class="mb-0">contact@matcofoods.com</p>
                        <p class="mb-0"> customercare@falakrice.com</p>
                        <p class="mb-0"> glucose@matcofoods.com</p>
                        <p>corn.division@matcofoods.com</p>

                    </li>


                </ul>
            </div> --}}
            {{-- </div> --}}
        </div>
        <div
            class="col-12 col-md-2 product_links mt-5 mt-sm-5 mt-md-0 mt-lg-0 pr-0 d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <h5 class="text-white mb-3 mb-sm-2 mb-md-5 mb-lg-5 text-uppercase">contact</h5>
            <ul class="list-unstyled contact_us">
                <li>
                    <img style="top: 12%; left: -1%;" src="{{ asset('frontend-assets/img/marker.png') }}"
                        alt="marker" />
                    <p class="mb-4">B-1 / A, S.I.T.E Phase 1, Super Highway Industrial Area, Karachi, Pkaistan
                        75340</p>
                </li>
                <li>
                    <img style="top: 25%; left:-3%;" src="{{ asset('frontend-assets/img/phone.png') }}"
                        alt="phone" />
                    <p class="mb-4">Tel<br>
                        +9221-36411661, +9221-36411662, +9221-36411663</p>
                </li>
                
                <li>
                    <img style="top: 38%; left:-3%;" src="{{ asset('frontend-assets/img/phone.png') }}"
                        alt="phone" />
                    <p class="mb-4">Mobile<br>
                        +92301-8250969, +92321-2422902</p>
                </li>
                <li>
                    <img style="top: 52%; left:-3%" src="{{ asset('frontend-assets/img/phone.png') }}"
                        alt="phone" />
                    <p class="mb-4">Glucose / Maltodextrin / Rice Protein<br>
                        +92333-1207746</p>
                </li>
                <li>
                    <img style="top: 65%; left:-2%" src="{{ asset('frontend-assets/img/phone.png') }}"
                        alt="phone" />
                    <p class="mb-4">Rice Plant Sadhoke, Punjab<br>
                        +92330-1236661</p>
                </li>

                <li>
                    <img style="top: 75%; left:-2%" src="{{ asset('frontend-assets/img/phone.png') }}"
                        alt="phone" />
                    <p class="mb-4">Corn Division Punjab<br>
                        +92321-6612044</p>
                </li>
                <li class="Email-address">
                    <img style="top: 85.5%; left:-3%" src="{{ asset('frontend-assets/img/email.png') }}"
                        alt="email" />
                    <p class="mb-0">contact@matcofoods.com</p>
                    <p class="mb-0"> customercare@falakrice.com</p>
                    <p class="mb-0"> glucose@matcofoods.com</p>
                    <p>corn.division@matcofoods.com</p>

                </li>


            </ul>
        </div>

        <div class="col-12 col-sm-12 d-md-none d-lg-none d-xl-none quick_links mt-5 mt-sm-5 mt-md-0 mt-lg-0">
            <h5 class="text-white mb-3 mb-sm-2 mb-md-5 mb-lg-5 text-uppercase">Social Links</h5>
            <div>
                {{-- <img src="{{ asset('frontend-assets/img/facebookFooterLogo.png') }}" alt="" />
                <img class="ml-2" src="{{ asset('frontend-assets/img/linkedinFooterLogi.png') }}" alt="" />
                <img class="ml-2" src="{{ asset('frontend-assets/img/instaFooterLogo.png') }}" alt="" /> --}}
                <a class="d-inline-block" href="https://www.facebook.com/matcofoods">
                    <img src="{{ asset('frontend-assets/img/facebookFooterLogo.png') }}" alt="facebook" />
                </a>

                <a class="d-inline-block" href="https://www.linkedin.com/company/matco-foods/">
                    <img src="{{ asset('frontend-assets/img/linkedIN-white.png') }}" alt="linkedin" />
                </a>

                <a class="d-inline-block" href="https://www.instagram.com/matcofoods/">
                    <img src="{{ asset('frontend-assets/img/instaFooterLogo.png') }}" alt="instagram" />
                </a>

                <a class="d-inline-block" href="https://www.youtube.com/c/FalakRiceChannel">
                    <img src="{{ asset('frontend-assets/img/Group 1030.png') }}" alt="youtube" />
                </a>
            </div>
        </div>
        <div class="col-12 col-sm-12 d-md-none d-lg-none quick_links d-xl-none mt-5 mt-sm-5 mt-md-0 mt-lg-0">
            <h5 class="text-white mb-3 mb-sm-2 mb-md-5 mb-lg-5 text-uppercase">Contact</h5>
            <ul class="list-unstyled contact_us pl-4">
                <li>
                    <img style="top: 9%;" src="{{ asset('frontend-assets/img/marker.png') }}" alt="marker" />
                    <p>B-1 / A, S.I.T.E Phase 1, Super Highway Industrial Area, Karachi, Pkaistan 75340</p>
                </li>
                <li>
                    <img style="top: 21%;" src="{{ asset('frontend-assets/img/phone.png') }}" alt="phone" />
                    <p>Tel<br>
                        +9221-36411661, +9221-36411662, +9221-36411663</p>
                </li>
              
                <li>
                    <img style="top: 36%;" src="{{ asset('frontend-assets/img/phone.png') }}" alt="phone" />
                    <p>Mobile<br>
                        +92301-8250969, +92321-2422902</p>
                </li>
                <li>
                    <img style="top: 48%;" src="{{ asset('frontend-assets/img/phone.png') }}" alt="phone" />
                    <p>Glucose / Maltodextrin / Rice Protein<br>
                        +92333-1207746</p>
                </li>
                <li>
                    <img style="top: 59%;" src="{{ asset('frontend-assets/img/phone.png') }}" alt="phone" />
                    <p>Rice Plant Sadhoke, Punjab<br>
                        +92330-1236661</p>
                </li>

                <li>
                    <img style="top: 70%;" src="{{ asset('frontend-assets/img/phone.png') }}" alt="phone" />
                    <p>Corn Division Punjab<br>
                        +92321-6612044</p>
                </li>
                <li >
                    <img style="top: 81.5%;" src="{{ asset('frontend-assets/img/email.png') }}" alt="email" />
                    <p class="mb-0">contact@matcofoods.com</p>
                    <p class="mb-0">customercare@falakrice.com</p>
                    <p class="mb-0"> glucose@matcofoods.com</p>
                    <p>corn.division@matcofoods.com</p>

                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-center align-items-center  my-4 " style="gap: 50px;">
            <div class="rights text-uppercase">
                <p class="text-white text-center   mb-0">© {{ date('Y') }} MATCO FOODS LIMITED | ALL RIGHTS
                    RESERVED
                    |
                    <span>Powered By <b><a class="text-white" target="_blank"
                                href="https://www.ideabox.com.pk/">Ideabox</a></b></span>
                </p>



            </div>
            <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">

                <a class="d-inline-block" href="https://www.facebook.com/matcofoods">
                    <img src="{{ asset('frontend-assets/img/facebookFooterLogo.png') }}" alt="facebook" />
                </a>
                <a class="d-inline-block" href="https://www.linkedin.com/company/matco-foods/">
                    <img src="{{ asset('frontend-assets/img/linkedIN-white.png') }}" alt="linkedin" />
                </a>
                <a class="d-inline-block" href="https://www.instagram.com/matcofoods/">
                    <img src="{{ asset('frontend-assets/img/instaFooterLogo.png') }}" alt="instagram" />
                </a>
                <a class="d-inline-block" href="https://www.youtube.com/c/FalakRiceChannel">
                    <img src="{{ asset('frontend-assets/img/Group 1030.png') }}" alt="youtube" />
                </a>
            </div>
        </div>
        {{-- <div class="col-12 col-md-12 text-right"> 


            <a class="d-inline-block" href="https://www.facebook.com/matcofoods">
                <img src="{{ asset('frontend-assets/img/facebookFooterLogo.png') }}" alt="facebook" />
            </a>
            <a class="d-inline-block" href="https://www.linkedin.com/company/matco-foods/">
                <img src="{{ asset('frontend-assets/img/linkedIN-white.png') }}" alt="linkedin" />
            </a>
            <a class="d-inline-block" href="https://www.instagram.com/matcofoods/">
                <img src="{{ asset('frontend-assets/img/instaFooterLogo.png') }}" alt="instagram" />
            </a>
            <a class="d-inline-block" href="https://www.youtube.com/c/FalakRiceChannel">
                <img src="{{ asset('frontend-assets/img/Group 1030.png') }}" alt="youtube" />
            </a>
        </div> --}}



        {{-- <div> --}}


        {{-- </div> --}}
    </div>
</footer>
