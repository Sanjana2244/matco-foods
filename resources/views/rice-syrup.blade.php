<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
        ])
        @endcomponent
    </section>
    <section class="rice-syrup py-6 container">
        <div class="product_heading text-center">
            <span class="text-uppercase"><strong>Rice Syrup</strong></span>
        </div>
        <div class="product_desc text-center mt-3 mb-5">
            <p>Rice syrup is a liquid solution of a nutritive sweetener, obtained through starch hydrolysis, using rice
                as a raw material, purified and concentrated to form required solids. It is also known as glucose syrup
                or liquid glucose. It is an odourless viscous sweet syrup, processed and stored in an extremely hygienic
                environment.</p>

            <p class="mt-4">Liquid syrup has a wide range of applications and is particularly useful where high
                concentrations of
                invert sugars are required. It also has the advantages of being anti - crystalline, having a low
                freezing point and a varying degree of sweetening compared to sucrose.</p>
        </div>
        <div class="section-divider">
            <hr>
        </div>
        <div class="section-2 text-center my-5">
            <div class="learn_more">
                <p>Rice Syrup & Protein Catalogue</p>
                <x-read-more target="_blank" button_link="frontend-assets/pdf/Matco Foods Rice Syrup Catalogue.pdf"
                    button_name="click here"></x-read-more>
            </div>
        </div>
        <div class="section-divider d-md-none d-lg-none">
            <hr>
        </div>
        <div class="section-5 my-5">
            <span class="feature text-uppercase">Rice Syrup Features</span>
            <div class="d-block feature-list my-5">
                <span class="d-inline">Organic</span>
                <hr class="d-inline-block">
                <span class="d-inline">Sweet Flavour</span>
                <hr class="d-inline-block">
                <span class="d-inline">Odourless</span>
                <hr class="d-inline-block">
                <span class="d-inline">from GMO Free Rice</span>
                <hr class="d-inline-block">
                <span class="d-inline">Suitable for Vegetarians</span>
                <hr class="d-inline-block">
                <span class="d-inline">Hypoallergenic</span>
                <hr class="d-inline-block">
                <span class="d-inline">Retains Moisture</span>
                <hr class="d-inline-block">
                <span class="d-inline">Maintains Freshness of Food</span>
            </div>
            <span class="text-uppercase">Rice Syrup Applications</span>
            <div class="row syrup-application mt-4 lastest_news justify-content-center">
                <div id="sweet" class="col-md-4 d-none d-sm-none d-md-block d-lg-block">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/1 - Sweetener.jpg') }}');">
                        <div class="over-lay">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis">Sweetener & Preservative</h6>
                                <div class="row items">
                                    <div class="col-md-6 pr-1  my-1 text-center">
                                        <div class="item p-2">Baby Foods</div>
                                    </div>
                                    <div class="col-md-6 pl-1  my-1 text-center">
                                        <div class="item p-2">Confectionary</div>
                                    </div>
                                    <div class="col-md-6 pr-1  my-1 text-center">
                                        <div class="item p-2">Baking Goods</div>
                                    </div>
                                    <div class="col-md-6  pl-1 my-1 text-center">
                                        <div class="item p-2">Yoghurts</div>
                                    </div>
                                    <div class="col-md-6 pr-1  my-1 text-center">
                                        <div class="item p-2">Desserts </div>
                                    </div>
                                    <div class="col-md-6 pl-1  my-1 text-center">
                                        <div class="item p-2">Sauces</div>
                                    </div>
                                    <div class="col-md-12  my-1 text-center">
                                        <div class="item p-2">Humectant to keep food moist and fresh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="pharma" class="col-md-4 d-none d-sm-none d-md-block d-lg-block">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/2 - Pharmaceuticals.jpg') }}');">
                        <div class="over-lay">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis">Pharmaceutical</h6>
                                <div class="row items">
                                    <div class="col-md-6 pr-1  my-1 text-center">
                                        <div class="item p-2">Cough syrups</div>
                                    </div>
                                    <div class="col-md-6 pl-1  my-1 text-center">
                                        <div class="item p-2">Suspensions</div>
                                    </div>
                                    <div class="col-md-12  my-1 text-center">
                                        <div class="item p-2">Tablet granulating agent</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="other" class="col-md-4 d-none d-sm-none d-md-block d-lg-block">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/3 - Other Uses.jpg') }}');">
                        <div class="over-lay">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis">Other Uses</h6>
                                <div class="row items">
                                    <div class="col-md-6 pr-1  my-1 text-center">
                                        <div class="item p-2">Tobacco industry </div>
                                    </div>
                                    <div class="col-md-6 pl-1  my-1 text-center">
                                        <div class="item p-2">Leather industry</div>
                                    </div>
                                    <div class="col-md-6 pr-1 my-1 text-center">
                                        <div class="item p-2">Shoe polish</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- <div class="col-md-4 d-none d-sm-none d-md-block d-lg-block">
                    <img class="mb-4"
                        src="{{ asset('frontend-assets/img/1 - Sweetener.jpg') }}" width="100%"
                        alt="" />
                    <span>Sweetener & Preservative</span>
                </div> --}}
                {{-- <div class="col-md-4 d-none d-sm-none d-md-block d-lg-block">
                    <img class="mb-4"
                        src="{{ asset('frontend-assets/img/2 - Pharmaceuticals.jpg') }}" width="100%"
                        alt="" />
                    <span>Pharmaceutical</span>
                </div> --}}
                {{-- <div class="col-md-4 d-none d-sm-none d-md-block d-lg-block">
                    <img class="mb-4"
                        src="{{ asset('frontend-assets/img/3 - Other Uses.jpg') }}" width="100%"
                        alt="" />
                    <span>Other Uses</span>
                </div> --}}
                <div class="col-md-12 new-slider d-block d-sm-block d-md-none d-lg-none">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img class="mb-4" src="{{ asset('frontend-assets/img/1 - Sweetener.jpg') }}"
                                width="100%" alt="Sweetener" />
                            <div class="accordion d-md-none" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">Sweetener & Preservative
                                                <i class="fa fa-chevron-down pull-right"></i>
                                                <i class="fa fa-chevron-up pull-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body items">
                                            <div class="item p-2">Baby Foods</div>
                                            <div class="item p-2">Confectionary</div>
                                            <div class="item p-2">Baking Goods</div>
                                            <div class="item p-2">Yoghurts</div>
                                            <div class="item p-2">Desserts </div>
                                            <div class="item p-2">Sauces</div>
                                            <div class="item p-2">Humectant to keep food moist and fresh</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="mb-4" src="{{ asset('frontend-assets/img/2 - Pharmaceuticals.jpg') }}"
                                width="100%" alt="Pharmaceuticals" />
                            <div class="accordion d-md-none" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">Pharmaceutical
                                                <i class="fa fa-chevron-down pull-right"></i>
                                                <i class="fa fa-chevron-up pull-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body items">
                                            <div class="item p-2">Cough syrups</div>
                                            <div class="item p-2">Suspensions</div>
                                            <div class="item p-2">Tablet granulating agent</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="mb-4" src="{{ asset('frontend-assets/img/3 - Other Uses.jpg') }}"
                                width="100%" alt=" Other Uses" />
                            <div class="accordion d-md-none" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">Other Uses
                                                <i class="fa fa-chevron-down pull-right"></i>
                                                <i class="fa fa-chevron-up pull-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body items">
                                            <div class="item p-2">Tobacco industry</div>
                                            <div class="item p-2">Leather industry</div>
                                            <div class="item p-2">Shoe polish</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-6 mb-3">
            <span class="text-uppercase">Product Range</span>
            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table">
                        <tbody class="text-center">
                            <tr>
                                <td class="product_range text-center" colspan="2">Product Range</td>
                            </tr>
                            <tr>
                                <td>Organic Brown Rice Syrup</td>
                                <td class="text-center">28DE - 60DE</td>
                            </tr>
                            <tr>
                                <td>Organic Clarified Rice Syrup</td>
                                <td class="text-center">28DE - 60DE</td>
                            </tr>
                            <tr>
                                <td>Organic Brown Hi-Maltose Rice Syrup</td>
                                <td class="text-center">42DE - 45DE</td>
                            </tr>
                            <tr>
                                <td>Conventional Brown Rice Syrup </td>
                                <td class="text-center">28DE - 60DE</td>
                            </tr>
                            <tr>
                                <td>Conventional Clarified Rice Syrup</td>
                                <td class="text-center">28DE - 60DE</td>
                            </tr>
                            <tr>
                                <td>Conventional Brown Hi-Maltose Rice Syrup</td>
                                <td class="text-center">45DE</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="section-7">
            <span class="text-uppercase">Handling and Storage</span>
            <p class="mt-3">Rice syrup in storage tanks is stored in a clean and dry area, away from direct
                sunlight,
                with a room
                temperature maintained below 90°F/ 32°C.
            </p>
            <div class="row my-5">
                <div class="col-md-8 order-last order-sm-last order-md-first">
                    <span class="text-uppercase">Packaging</span>
                    <p class="my-4">We practice flexibility in packaging whilst adhering to international
                        standards, offering
                        customized packaging options.</p>
                    <ul class="ml-n-4">
                        <li>
                            <p>High Density Polyethylene (HDPE) drums,</p>
                        </li>
                        <li>
                            <p>HDPE jerry cansss</p>
                        </li>
                        <li>
                            <p>Stainless Steel tankers for bulk buying</p>
                        </li>
                        <li>
                            <p>Integrated Bulk Carton (IBC) containers with pallets and shrink wrapping. </p>
                        </li>
                    </ul>
                    <span class="text-uppercase">sales</span>
                    <ul class="ml-n-4">
                        <li>
                            <p>Please Contact <a href="">glucose@matcofoods.com</a> or +92-333-1207746
                            </p>
                        </li>

                    </ul>
                </div>
                <div class="col-md-4">
                    <img class="mb-4 w-100" src="{{ asset('frontend-assets/img/4 - Storage.jpg') }}"
                        alt="Storage" />
                </div>
            </div>
        </div>
        {{-- <div class="section-6 mb-3">
            <div class="row mt-3">
                <div class="col-md-12">
                    <table id="application-ingredient" class="table">
                        <tbody>
                            <tr>
                                <td class="product_range text-center">Application</td>
                                <td class="product_range text-center">Ingredient</td>
                                <td class="product_range text-center">Properties and Benefits</td>
                            </tr>
                            <tr>
                                <td>Baked Goods
                                    Cookies, Cakes and Muffins
                                </td>
                                <td>Rice syrup solids 21 - 24 DE
                                    Clarified rice syrup 60 DE
                                </td>

                                <td>Stabilizes moisture, moderates texture, partial egg white
                                    replacement Excellent freeze/thaw stability
                                </td>
                            </tr>
                            <tr>
                                <td>Beverages
                                    Flavored Drinks
                                    Beverage Dry Mixes
                                </td>
                                <td>Rice Maltodextrin14 - 18 DE</td>
                                <td>Improves body, low sweetness
                                    Low hygroscopicity, instant dispersibility, clean flavour
                                </td>
                            </tr>
                            <tr>
                                <td>Confections
                                    Hard Candies
                                    Jelly and Gum Candies
                                    Panned Candies
                                    Confectionery Coatings
                                </td>
                                <td>Clarified rice syrup 42 DE
                                    Clarified rice syrup 60 DE
                                    Rice syrup solids 21 - 24 DE
                                    Rice Maltodextrin 14 - 18 DE
                                </td>
                                <td>Controls sugar bloom, moderates stickiness
                                    Good choice of processing viscosity, clean flavour
                                    Barrier coating, provides shine
                                    Aids in fat reduction, helps control bloom
                                    Shiny outer coating, gum solutions
                                </td>
                            </tr>
                            <tr>
                                <td>Dressings and Spreads
                                    Peanut Butter
                                    Salad Dressings
                                </td>
                                <td>Rice Maltodextrin 14 - 18 DE
                                    Clarified rice syrup 42 DE
                                </td>
                                <td>Improves body, smooth, creamy mouth feel without grittiness
                                    Provide stability ,texture, smooth mouth feel
                                </td>
                            </tr>
                            <tr>
                                <td>Frozen Desserts
                                    Ice Cream
                                </td>
                                <td>Rice Maltodextrin 14 - 18 DE
                                    Rice syrup solids 21 - 24 DE
                                </td>
                                <td>Partial or complete gum stabilizer replacement. Aids in fat reduction, optimizes
                                    sweetness and freezing point while building total solids, improves body and melt
                                    character, lactose / ice crystal inhibitor.</td>
                            </tr>
                            <tr>
                                <td>Meats and Seafood
                                    Processed Meats
                                    Seasonings and Coatings
                                </td>
                                <td>Rice Syrup Solids 21 - 24 DE</td>
                                <td>Maximizes moisture binding and stability. Economical binder for optimizing texture
                                    and yield. Maximizes solids, seasoning carrier.
                                    Low sweetness, browning control, moisture binder, adhesion and barrier properties.
                                </td>
                            </tr>
                            <tr>
                                <td>Snacks and Cereals
                                    Nut / Snack Coatings
                                </td>
                                <td>Rice Maltodextrin 14 - 18 DE</td>
                                <td>Film forming, binder, flavor carrier. Tack coating without oil.</td>
                            </tr>
                            <tr>
                                <td>Soups, Sauces and Gravies
                                    Instant Sauces and Gravies
                                    Soups, Sauces and Frozen
                                    Entrees
                                </td>
                                <td>Rice Maltodextrin 14 - 18 DE</td>
                                <td>Aids in dispersibility of other ingredients, high solubility develops viscosity in
                                    hot water.
                                    Low sweetness profile, viscosity stability, moisture management, retort and high
                                    temperature stability.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div> --}}
        {{-- <div class="product_desc text-center mb-4">
            <p>To view our full products range, <a href="/products">Click here</a></p>
        </div> --}}
        <div class="section-divider">
            <hr>
        </div>
        <div class="section-2 text-center">
            <div class="learn_more mt-5">
                <p>To view our full products range</p>
                <x-read-more button_link="/products" button_name="click here"></x-read-more>
            </div>
        </div>
        <x-certification-component></x-certification-component>
    </section>
    @section('afterScripts')
        <script>
            $(document).ready(function() {
                $('#sweet').hover(function() {
                    $('.syrup-application.lastest_news #sweet .content h6').toggle();
                    $('.syrup-application.lastest_news #sweet .items .item').toggle();
                })
                $('#pharma').hover(function() {
                    $('.syrup-application.lastest_news #pharma .content h6').toggle();
                    $('.syrup-application.lastest_news #pharma .items .item').toggle();
                })
                $('#other').hover(function() {
                    $('.syrup-application.lastest_news #other .content h6').toggle();
                    $('.syrup-application.lastest_news #other .items .item').toggle();
                })
            });
        </script>
    @endsection
</x-guest-layout>
