<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
        ])
        @endcomponent
    </section>
    <section class="falak py-6 container">
        <div class="product_heading text-center">
            <span class="text-uppercase"><strong>Falak</strong> – The Flagship Brand</span>
        </div>
        <div class="product_desc text-center mt-3">
            <p>Matco launched Falak Basmati Rice in 1999 in Pakistan, as premium product, quality and consistency
                guaranteed with every purchase. As a reflection of our success, today Falak Basmati Rice is Pakistan’s
                leading branded basmati rice, available in over 40 countries worldwide from Hong Kong, to South Africa
                to Netherlands and North America</p>
        </div>
        <div class="section-1 text-center my-5">
            <span>NEW PRODUCTS</span>
            <p class="mt-3">We believe in setting market trends and discovering new opportunities, a reflection
                of our
                commitment to
                satisfying our customers and keeping pace with the changing market dynamics. With this in mind we have
                successfully ventured into new products, focusing in innovation, providing consumer products that offer
                convenience. Our new products include Spices and Herbs, Himalayan Pink Salt, Organic Brown Rice, Flour
                and many others.
            </p>
        </div>
        <div class="section-2 text-center mb-5">
            <span>OUR BRANDS</span>
            <ul class="nav nav-tabs justify-content-center mb-6 mt-5">
                <li class="nav-item mx-3">
                    <a href="#international" class="nav-link active text-uppercase" data-toggle="tab">Falak
                        International Brands</a>
                </li>
                <li class="nav-item mx-3 mt-3 mt-sm-3 mt-md-0 mt-lg-0">
                    <a href="#local" class="nav-link text-uppercase" data-toggle="tab">Falak Local Brands</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active text-center" id="international">
                    <div class="download_international_catalogue">
                        <a class="d-block download_link mb-3">Falak Product Catalogue – International</a>
                        <x-read-more target="_blank"
                            button_link="frontend-assets/pdf/Falak International Product Catalogue.pdf"
                            button_name="click here to download"></x-read-more>
                    </div>
                    <div class="international_brands mt-5">
                        <div class="owl-carousel owl-theme">
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/basmati-slider.png') }}"
                                    alt="basmati" />
                                <span class="text-uppercase">BASMATI RICE</span>
                            </div>
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/2 - Spices.png') }}"
                                    alt="Spices" />
                                <span class="text-uppercase">Spices & Herbs</span>
                            </div>
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/3 - Salt.png') }}"
                                    alt="Salt" />
                                <span class="text-uppercase">SALT</span>
                            </div>
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/4 - Flours.png') }}"
                                    alt="Flours" />
                                <span class="text-uppercase">FLOUR</span>
                            </div>
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/5 - Deserts.png') }}"
                                    alt="Deserts" />
                                <span class="text-uppercase">DESSERT</span>
                            </div>
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/6 - Pastes.png') }}"
                                    alt="Pastes" />
                                <span class="text-uppercase">Pastes</span>
                            </div>
                            {{-- <div class="item text-center">
                                <img class="mb-2"
                                    src="{{ asset('frontend-assets/img/Falak Masalas - Product Image 523x708.png') }}"
                                    alt="" />
                                <span class="text-uppercase">Masalas</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade text-center" id="local">
                    <div class="">
                        <a class="d-block download_link mb-3">Falak Product Catalogue – Pakistan</a>
                        <x-read-more target="_blank" button_link="frontend-assets/pdf/Falak Local Product Catalogue.pdf"
                            button_name="click here to download"></x-read-more>
                    </div>
                    <div class="local_brands mt-5">
                        <div class="owl-carousel owl-theme">
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/1 - Rice.png') }}"
                                    alt="Rice" />
                                <span class="text-uppercase">BASMATI RICE</span>
                            </div>
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/2 - Spices.png') }}"
                                    alt="Spices" />
                                <span class="text-uppercase">Spices & Herbs</span>
                            </div>
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/3 - Salt.png') }}"
                                    alt="Salt" />
                                <span class="text-uppercase">SALT</span>
                            </div>
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/4 - Flours.png') }}"
                                    alt="Flours" />
                                <span class="text-uppercase">FLOUR</span>
                            </div>
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/5 - Deserts.png') }}"
                                    alt="Deserts" />
                                <span class="text-uppercase">DESSERT</span>
                            </div>
                            <div class="item text-center">
                                <img class="mb-2" src="{{ asset('frontend-assets/img/6 - Pastes.png') }}"
                                    alt="Pastes" />
                                <span class="text-uppercase">Pastes</span>
                            </div>
                            {{-- <div class="item text-center">
                                <img class="mb-2"
                                    src="{{ asset('frontend-assets/img/Falak Masalas - Product Image 523x708.png') }}"
                                    alt="" />
                                <span class="text-uppercase">Masalas</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-divider d-md-none d-lg-none">
            <hr>
        </div>
        <div class="section-3">
            <div class="where_we_are">
                <div class="container text-center my-3">
                    <span class="text-uppercase">WHERE WE ARE</span>
                </div>
                {{-- <img class="w-100 h-100" src="{{ asset('frontend-assets/img/Group 844.jpg') }}" alt="OP" /> --}}
                <img class="w-100 h-100 d-none d-sm-none d-md-block"
                    src="{{ asset('frontend-assets/img/Group 1154.png') }}" alt="OP" />
                <div class="country_list container d-none d-sm-none d-md-block">
                    <div class="continent col-md-9 col-12 mt-5">
                        <p class="sub_heading text-uppercase mb-3">Asia Pacific & Australia</p>
                        <p class="country mr-2">Australia</p>
                        <p class="country mr-2">Bangladesh</p>
                        <p class="country mr-2">Hong Kong</p>
                        <p class="country mr-2">New Zealand</p>
                        <p class="country mr-2">Singapore</p>
                        <p class="country mr-2">South Korea</p>
                        <p class="country mr-2">Sri Lanka</p>
                    </div>
                    <div class="continent col-md-9 col-12 mt-5">
                        <p class="sub_heading text-uppercase mb-3">North America</p>
                        <p class="country mr-2">United States of America</p>
                        <p class="country mr-2">Canada</p>
                        <p class="country mr-2">Trinidad & Tobago</p>
                    </div>

                    <div class="continent col-md-9 col-12 mt-5">
                        <p class="sub_heading text-uppercase mb-3">AfricA</p>
                        <p class="country mr-2">Djibouti</p>
                        <p class="country mr-2">Ethiopia</p>
                        <p class="country mr-2">Libya</p>
                        <p class="country mr-2">Maldives</p>
                        <p class="country mr-2">Mauritius</p>
                        <p class="country mr-2">Mozambique</p>
                        <p class="country mr-2">South Africa</p>
                    </div>
                    <div class="continent col-md-9 col-12 mt-5">
                        <p class="sub_heading text-uppercase mb-3">Commonwealth of Independent Countries</p>
                        <p class="country mr-2">Armenia</p>
                    </div>
                    <div class="continent col-md-9 col-12 mt-5">
                        <p class="sub_heading text-uppercase mb-3">Middle East</p>
                        <p class="country mr-2">Iraq</p>
                        <p class="country mr-2">Jordan</p>
                        <p class="country mr-2">Qatar</p>
                        <p class="country mr-2">United Arab Emirates</p>
                        <p class="country mr-2">Yemen</p>
                    </div>
                    <div class="continent col-md-9 col-12 mt-5">
                        <p class="sub_heading text-uppercase mb-3">Europe</p>
                        <p class="country mr-2">Belgium</p>
                        <p class="country mr-2">Czech Republic</p>
                        <p class="country mr-2">Denmark</p>
                        <p class="country mr-2">Finland</p>
                        <p class="country mr-2">France</p>
                        <p class="country mr-2">Germany</p>
                        <p class="country mr-2">Greece</p>
                        <p class="country mr-2">Italy</p>
                        <p class="country mr-2">Malta</p>
                        <p class="country mr-2">Netherlands</p>
                        <p class="country mr-2">Norway</p>
                        <p class="country mr-2">Spain</p>
                        <p class="country mr-2">Sweden</p>
                        <p class="country mr-2">Switzerland</p>
                        <p class="country mr-2">United Kingdom</p>
                    </div>
                </div>
                <div class="accordion d-md-none" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">Asia
                                    Pacific & Australia
                                    <i class="fa fa-chevron-down pull-right"></i>
                                    <i class="fa fa-chevron-up pull-right"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="">Australia</p>
                                <p class="">Bangladesh</p>
                                <p class="">Hong Kong</p>
                                <p class="    ">New Zealand</p>
                                <p class=" ">Singapore</p>
                                <p class=" ">South Korea</p>
                                <p class="">Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">North America

                                    <i class="fa fa-chevron-down pull-right"></i>
                                    <i class="fa fa-chevron-up pull-right"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="">United States of America</p>
                                <p class="">Canada</p>
                                <p class="
                                        ">Trinidad & Tobago
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">AfricA
                                    <i class="fa fa-chevron-down pull-right"></i>
                                    <i class="fa fa-chevron-up pull-right"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="">Djibouti</p>
                                <p class="">Ethiopia</p>
                                <p class="">Libya</p>
                                <p class="">Maldives</p>
                                <p class="">Mauritius</p>
                                <p class="">Mozambique</p>
                                <p class="">South Africa</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button"
                                    data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">Commonwealth of Independent Countries

                                    <i class="fa fa-chevron-down pull-right"></i>
                                    <i class="fa fa-chevron-up pull-right"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="">Armenia</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">Middle East

                                    <i class="fa fa-chevron-down pull-right"></i>
                                    <i class="fa fa-chevron-up pull-right"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="">Iraq</p>
                                <p class="">Jordan</p>
                                <p class="">Qatar</p>
                                <p class="">United Arab Emirates</p>
                                <p class="">Yemen</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">Europe
                                    <i class="fa fa-chevron-down pull-right"></i>
                                    <i class="fa fa-chevron-up pull-right"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="">Belgium</p>
                                <p class="">Czech Republic</p>
                                <p class="">Denmark</p>
                                <p class="">Finland</p>
                                <p class="">France</p>
                                <p class="">Germany</p>
                                <p class="">Greece</p>
                                <p class="">Italy</p>
                                <p class="">Malta</p>
                                <p class="">Netherlands</p>
                                <p class="">Norway</p>
                                <p class="">Spain</p>
                                <p class="">Sweden</p>
                                <p class="">Switzerland</p>
                                <p class="">United Kingdom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-4">
            <div class="text-center my-5">
                <span class="text-uppercase mb-4">SOCIAL MEDIA</span>
            </div>
            <style>

            </style>
            {{-- <div class="row">
                <div class="col-md-12"> --}}
                    <!-- SnapWidget -->
                    {{-- <script src="https://snapwidget.com/js/snapwidget.js"></script>
                    <iframe src="https://snapwidget.com/embed/1050337" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>                     --}}
                    {{-- Tagembed --}}
                    {{-- <div class="tagembed-container" style=" width:100%;height:100%;overflow: auto;">
                         <div class="tagembed-socialwall" data-wall-id="125605"
                            view-url="https://widget.tagembed.com/125605"> </div>
                        <script src="//widget.tagembed.com/embed.min.js" type="text/javascript"></script>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-md-4 my-1 px-1 d-none d-sm-none d-md-block d-lg-block">
                    <a target="_blank" href="https://www.instagram.com/p/Cg3mVAdNsNT/?utm_source=ig_web_copy_link">
                        <img src="{{ asset('frontend-assets/img/inst-1new.png') }}" width="100%" alt="inst" />
                    </a>
                </div>
                <div class="col-md-4 my-1 px-1 d-none d-sm-none d-md-block d-lg-block">
                    <a target="_blank" href="https://www.instagram.com/p/Chwrglmofil/?utm_source=ig_web_copy_link">
                        <img src="{{ asset('frontend-assets/img/inst-2new.png') }}" width="100%" alt="inst" />
                    </a>
                </div>
                <div class="col-md-4 my-1 px-1 d-none d-sm-none d-md-block d-lg-block">
                    <a target="_blank" href="https://www.instagram.com/p/CgRSWy1tKta/?utm_source=ig_web_copy_link">
                        <img src="{{ asset('frontend-assets/img/inst-3new.png') }}" width="100%" alt="inst" />
                    </a>
                </div>
                <div class="col-md-4 my-1 px-1 d-none d-sm-none d-md-block d-lg-block">
                    <a target="_blank" href="https://www.instagram.com/p/CckXa-eJ8TH/?utm_source=ig_web_copy_link">
                        <img src="{{ asset('frontend-assets/img/inst-4new.png') }}" width="100%" alt="inst" />
                    </a>
                </div>
                <div class="col-md-4 my-1 px-1 d-none d-sm-none d-md-block d-lg-block">
                    <a target="_blank" href="https://www.instagram.com/p/CcgII2Lvw43/?utm_source=ig_web_copy_link">
                        <img src="{{ asset('frontend-assets/img/inst-5new.png') }}" width="100%" alt="inst" />
                    </a>
                </div>
                <div class="col-md-4 my-1 px-1 d-none d-sm-none d-md-block d-lg-block">
                    <a target="_blank" href="https://www.instagram.com/p/ChZLNLcNODP/?utm_source=ig_web_copy_link">
                        <img src="{{ asset('frontend-assets/img/inst-6new.png') }}" width="100%" alt="inst" />
                    </a>
                </div>
                <div class="col-md-12 new-slider p-0 d-block d-sm-block d-md-none d-lg-none">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <a target="_blank"
                                href="https://www.instagram.com/p/Cg3mVAdNsNT/?utm_source=ig_web_copy_link">
                                <img src="{{ asset('frontend-assets/img/inst-1new.png') }}" width="100%"
                                    alt="inst" />
                            </a>
                        </div>
                        <div class="item">
                            <a target="_blank"
                                href="https://www.instagram.com/p/Chwrglmofil/?utm_source=ig_web_copy_link">
                                <img src="{{ asset('frontend-assets/img/inst-2new.png') }}" width="100%"
                                    alt="inst" />
                            </a>
                        </div>
                        <div class="item">
                            <a target="_blank"
                                href="https://www.instagram.com/p/CgRSWy1tKta/?utm_source=ig_web_copy_link">
                                <img src="{{ asset('frontend-assets/img/inst-3new.png') }}" width="100%"
                                    alt="inst" />
                            </a>
                        </div>
                        <div class="item">
                            <a target="_blank"
                                href="https://www.instagram.com/p/CckXa-eJ8TH/?utm_source=ig_web_copy_link">
                                <img src="{{ asset('frontend-assets/img/inst-4new.png') }}" width="100%"
                                    alt="inst" />
                            </a>
                        </div>
                        <div class="item">
                            <a target="_blank"
                                href="https://www.instagram.com/p/CcgII2Lvw43/?utm_source=ig_web_copy_link">
                                <img src="{{ asset('frontend-assets/img/inst-5new.png') }}" width="100%"
                                    alt="inst" />
                            </a>
                        </div>
                        <div class="item">
                            <a target="_blank"
                                href="https://www.instagram.com/p/ChZLNLcNODP/?utm_source=ig_web_copy_link">
                                <img src="{{ asset('frontend-assets/img/inst-6new.png') }}" width="100%"
                                    alt="inst" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2 text-center">
            <div class="learn_more mt-5">
                <p>To view our full products range</p>
                <x-read-more button_link="/products" button_name="click here"></x-read-more>
            </div>
        </div>
    </section>
</x-guest-layout>
