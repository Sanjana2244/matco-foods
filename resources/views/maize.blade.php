<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
        ])
        @endcomponent
    </section>
    <section class="basmati rice-syrup py-6 container">
        <div class="product_heading text-center">
            <span class="text-uppercase"><strong>Corn Starch</strong></span>
        </div>
        <div class="product_desc mt-3">
            <p>Welcome to Matco Foods Corn Division, the leading producer of high-quality maize starch products. Our
                state-of-the-art plant, equipped with cutting-edge technology and expertise from Asia, USA, and Europe,
                has been proudly serving industries since 2022. We are committed to delivering performance-efficient
                and tailored solutions to meet the unique needs of various industries.</p>
            <span class="" style="color: #15245a"><strong>About Us:</strong></span>
            <p>At Matco Foods Corn Division, we take pride in our wide range of starches and animal nutrition
                products. Our starches are carefully formulated and produced from Yellow Dent Corn, White Corn, and
                Waxy Corn. They are available as both Un-Modified and Modified starches, ensuring versatility and
                reliability for our valued customers.</p>
        </div>

        <div class="section-divider">
            <hr>
        </div>
        <div class="section-2 text-center">
            <div class="learn_more mt-5">
                <p>Corn Starch Brochure </p>
                <x-read-more target="_blank" button_link="frontend-assets/pdf/Matco Corn Starch Brochure.pdf"
                    button_name="click here"></x-read-more>
            </div>


        </div>
        <div class="section-5 my-5">
            <span class="feature text-uppercase">Our Starches:</span>
            <p class="mt-3">Our starches are designed to cater to a diverse array of industries, offering specialized
                solutions that
                enhance performance and quality.</p>

            <div class="row syrup-application mt-4 lastest_news justify-content-center">
                <div id="mat-tex" class="col-md-4 d-none d-sm-none d-md-block d-lg-block">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/mat-tex.jpg') }}');">
                        <div class="over-lay justify-content-center">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis mb-0">MAT-TEX</h6>
                                <div class="row items">

                                    <div class="col-md-12 my-1 text-center">
                                        <div class="item p-2"> MAT-TEX is specifically crafted for textile finishing,
                                            sizing, denim applications, and printing. Experience improved efficiency and
                                            exceptional results with MAT-TEX.</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="mat-cor" class="col-md-4 d-none d-sm-none d-md-block d-lg-block">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/mat-cor.jpg') }}');">
                        <div class="over-lay justify-content-center">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis mb-0">MAT-COR</h6>
                                <div class="row items">
                                    <div class="col-md-12 my-1 text-center">
                                        <div class="item p-2">MAT-COR is the perfect fit for paper-making, providing
                                            excellent adhesive glue for corrugated sheet and board production, paper
                                            tube manufacturing, and paper sack production.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="mat-blanc" class="col-md-4 d-none d-sm-none d-md-block d-lg-block">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/mat-blanc.jpg') }}');">
                        <div class="over-lay justify-content-center">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis mb-0">MAT-BLANC</h6>
                                <div class="row items">
                                    <div class="col-md-12 my-1 text-center">
                                        <div class="item p-2">MAT-BLANC is your go-to choice for food and beverages.
                                            Whether it's custard powder, recipe mixes, sauces and condiments, desserts
                                            and soups, snacks, noodles, or crackers - MAT-BLANC delivers exceptional
                                            performance.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="mat-pharm" class="col-md-4 d-none d-sm-none d-md-block d-lg-block mt-4">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/mat-pharma.jpg') }}');">
                        <div class="over-lay justify-content-center">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis mb-0">MAT-PHARMA</h6>
                                <div class="row items">
                                    <div class="col-md-12 my-1 text-center">
                                        <div class="item p-2">MAT-PHARM is specially designed for pharmaceutical
                                            applications, including swallowable tablets and hard capsules. Trust
                                            MAT-PHARM for your nutraceutical mixes as well.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="mat-ap" class="col-md-4 d-none d-sm-none d-md-block d-lg-block mt-4">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/mat-ap.jpg') }}');">
                        <div class="over-lay justify-content-center">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis mb-0">MAT-AP</h6>
                                <div class="row items">
                                    <div class="col-md-12 my-1 text-center">
                                        <div class="item p-2">MAT-AP is your all-purpose starch, catering to various
                                            industrial needs. Use it for adhesives, paints, ceramics, construction
                                            materials, lubricant agents, and detergents.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-12 new-slider d-block d-sm-block d-md-none d-lg-none">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img class="mb-4" src="{{ asset('frontend-assets/img/mat-tex.jpg') }}" width="100%"
                                alt="mat-tex"/>
                            <div class="accordion d-md-none" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0 ">
                                            <button style="font-size: 16px" class="btn btn-link btn-block text-left"
                                                type="button" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">MAT-TEX
                                                <i class="fa fa-chevron-down pull-right"></i>
                                                <i class="fa fa-chevron-up pull-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body items">
                                            MAT-TEX is specifically crafted for textile finishing, sizing, denim
                                            applications, and printing. Experience
                                            improved efficiency and exceptional results with MAT-TEX.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="mb-4" src="{{ asset('frontend-assets/img/mat-cor mbl.jpg') }}" width="100%"
                                alt="mat-cor" />
                            <div class="accordion d-md-none" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button style="font-size: 16px" class="btn btn-link btn-block text-left"
                                                type="button" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">MAT-COR
                                                <i class="fa fa-chevron-down pull-right"></i>
                                                <i class="fa fa-chevron-up pull-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body items">
                                            MAT-COR is the perfect fit for paper-making, providing excellent adhesive
                                            glue for corrugated sheet and
                                            board production, paper tube manufacturing, and paper sack production.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="mb-4" src="{{ asset('frontend-assets/img/mat-blanc mbl.jpg') }}"
                                width="100%" alt="mat-blanc" />
                            <div class="accordion d-md-none" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button style="font-size: 16px" class="btn btn-link btn-block text-left"
                                                type="button" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">MAT-BLANC
                                                <i class="fa fa-chevron-down pull-right"></i>
                                                <i class="fa fa-chevron-up pull-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body items">
                                            MAT-BLANC is your go-to choice for food and beverages. Whether it&#39;s
                                            custard powder, recipe mixes,
                                            sauces and condiments, desserts and soups, snacks, noodles, or crackers -
                                            MAT-BLANC delivers
                                            exceptional performance.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="mb-4" src="{{ asset('frontend-assets/img/mat-pharma.jpg') }}"
                                width="100%" alt="mat-pharma" />
                            <div class="accordion d-md-none" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button style="font-size: 16px" class="btn btn-link btn-block text-left"
                                                type="button" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">MAT-PHARMA
                                                <i class="fa fa-chevron-down pull-right"></i>
                                                <i class="fa fa-chevron-up pull-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body items">
                                            MAT-PHARM is specially designed for pharmaceutical applications, including
                                            swallowable tablets and
                                            hard capsules. Trust MAT-PHARM for your nutraceutical mixes as well.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="mb-4" src="{{ asset('frontend-assets/img/mat-ap.jpg') }}" width="100%"
                                alt="mat-ap" />
                            <div class="accordion d-md-none" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button style="font-size: 16px" class="btn btn-link btn-block text-left"
                                                type="button" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">MAT-AP
                                                <i class="fa fa-chevron-down pull-right"></i>
                                                <i class="fa fa-chevron-up pull-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body items">
                                            MAT-AP is your all-purpose starch, catering to various industrial needs. Use
                                            it for adhesives, paints,
                                            ceramics, construction materials, lubricant agents, and detergents.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-7">
            <span class="text-uppercase">Why Choose Matco Corn Starch?</span>
            <span class="mt-4" style="display: block">Uncompromising Quality:</span>
            <p class="mb-4">Our starches undergo rigorous quality control measures to ensure they meet
                the highest standards.
            </p>

            <span>Tailored Solutions:</span>
            <p class="mb-4">We understand that different industries have unique requirements. Our starches are
                designed to cater to specific needs, delivering the best results.
            </p>

            <span>Expertise and Innovation:</span>
            <p class="mb-4">Backed by technology and expertise from around the world, we continuously
                strive to innovate and improve our products.
            </p>

            <span>Sustainable Practices:</span>
            <p class="mb-4">We are committed to environmentally responsible practices and sustainability
                throughout our manufacturing process.
            </p>


        </div>
        <div class="section-3 mt-5">
            <div class="my-5 heading text-center">
                <span class="text-uppercase"
                    style="font-size: 24px; color:#15245a; font-weight:500">Certifications</span>
            </div>
            <div class="row justify-content-center align-items-baseline">


                <div class=" col-4 col-sm-4 col-md-2"><img class="w-100"
                        src="{{ asset('frontend-assets/img/PxKg5x.png') }}" alt="halal" /></div>
                <div class=" col-4 col-sm-4 col-md-2"><img class="w-100"
                        src="{{ asset('frontend-assets/img/H0zp7P.png') }}" alt="Certificate" /></div>

                <div class=" col-4 col-sm-4 col-md-2"><img class="w-100"
                        src="{{ asset('frontend-assets/img/4 - EU Organic.png') }}" alt="Organic" /></div>
                <div class="col-6 col-4 col-sm-4 col-md-3"><img class="w-100"
                        src="{{ asset('frontend-assets/img/3dZxH9.png') }}" alt="Food Safety system" /></div>
            </div>


        </div>
    </section>
    @section('afterScripts')
        <script>
            $(document).ready(function() {
                $('#mat-tex').hover(function() {
                    $('.syrup-application.lastest_news #mat-tex .content h6').toggle();
                    $('.syrup-application.lastest_news #mat-tex .items .item').toggle();
                })
                $('#mat-cor').hover(function() {
                    $('.syrup-application.lastest_news #mat-cor .content h6').toggle();
                    $('.syrup-application.lastest_news #mat-cor .items .item').toggle();
                })
                $('#mat-blanc').hover(function() {
                    $('.syrup-application.lastest_news #mat-blanc .content h6').toggle();
                    $('.syrup-application.lastest_news #mat-blanc .items .item').toggle();
                })
                $('#mat-pharm').hover(function() {
                    $('.syrup-application.lastest_news #mat-pharm .content h6').toggle();
                    $('.syrup-application.lastest_news #mat-pharm .items .item').toggle();
                })
                $('#mat-ap').hover(function() {
                    $('.syrup-application.lastest_news #mat-ap .content h6').toggle();
                    $('.syrup-application.lastest_news #mat-ap .items .item').toggle();
                })
            });
        </script>
    @endsection


</x-guest-layout>
