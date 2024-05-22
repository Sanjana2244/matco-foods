<x-guest-layout>
    <section class="other  home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
            ])
        @endcomponent
    </section>
    <section class="products private-label py-6 container">
        <div class="landing_text text-center">
            <p>Matco provides customised packing solutions for its customers in over 55 countries, and currently service
                over 150 corporate customers, ensuring traceability in every process. Matco ensures compliance with
                local and international health, food, safety and environment standards.</p>
        </div>
        <div class="product_list_images mt-5">
            <div class="row">
                <div class="col-md-6 product_list">
                    <a href="{{ route('pages.basmatiRice') }}" class="d-block my-4 p-b active">Basmati Rice</a>
                    <a href="{{ route('pages.nonBasmatiRice') }}" class="d-block my-4 p-nb">Non-Basmati Rice</a>
                    <a href="{{ route('pages.organicRice') }}" class="d-block my-4 p-o">Organic Rice</a>
                    <a href="{{ route('pages.riceSyrup') }}" class="d-block my-4 p-rs">Rice Syrup</a>
                    <a href="{{ route('pages.riceProtien') }}" class="d-block my-4 p-rp">Rice Protein</a>
                    <a href="{{ route('pages.solids') }}" class="d-block my-4 p-m">Maltodextrin</a>
                    <a href="{{ route('pages.maize') }}" class="d-block my-4 p-mcs">Maize Corn Starch</a>
                    <a href="!#" class="d-block my-4 p-wrf">White rice flour</a>
                </div>

                {{-- <a href="{{ route('pages.basmatiRice') }}" class="d-block my-4 active">Basmati Rice</a>
                    <a href="{{ route('pages.nonBasmatiRice') }}" class="d-block my-4">Non-Basmati Rice</a>
                    <a href="{{ route('pages.organicRice') }}" class="d-block my-4">Organic Rice</a>
                    <a href="{{ route('pages.riceSyrup') }}" class="d-block my-4">Rice Syrup</a>
                    <a href="{{ route('pages.riceProtien') }}" class="d-block my-4">Rice Protein</a>
                    <a href="!#" class="d-block my-4">Maltodextrin</a>
                    <a href="!#" class="d-block my-4">Maize Corn Starch</a>
                    <a href="!#" class="d-block my-4">White rice flour</a> --}}




                <div class="col-md-6 product_images">
                    <div class="owl-carousel owl-theme">
                        <div class="item p-b text-center">
                            <img src="{{ asset('frontend-assets/img/3 - Basmati Rice.png') }}" alt="Basmati Rice" />
                            <h5><a href="{{ route('pages.basmatiRice') }}" class="d-block my-3">Basmati Rice</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.basmatiRice') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item p-nb text-center">
                            <img src="{{ asset('frontend-assets/img/3 - Non-Basmati Rice.png') }}" alt="Non-Basmati Rice" />
                            <h5><a href="{{ route('pages.nonBasmatiRice') }}" class="d-block my-3">Non-Basmati
                                    Rice</a></h5>
                            <x-read-more button_link="{{ route('pages.nonBasmatiRice') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item p-o text-center">
                            <img src="{{ asset('frontend-assets/img/5 - Organic Rice.png') }}" alt="Organic Rice" />
                            <h5><a href="{{ route('pages.organicRice') }}" class="d-block my-3">Organic Rice</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.organicRice') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item p-rs text-center">
                            <img src="{{ asset('frontend-assets/img/6 - Rice Syrup.png') }}" alt="Rice Syrup" />
                            <h5><a href="{{ route('pages.riceSyrup') }}" class="d-block my-3">Rice Syrup</a></h5>
                            <x-read-more button_link="{{ route('pages.riceSyrup') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item p-rp text-center">
                            <img src="{{ asset('frontend-assets/img/7 - Rice Protein.png') }}" alt="Rice Protein" />
                            <h5><a href="{{ route('pages.riceProtien') }}" class="d-block my-3">Rice Protein</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.riceProtien') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item p-m text-center">
                            <img src="{{ asset('frontend-assets/img/8 - Solids.png') }}" alt="Solids" />
                            <h5><a href="{{ route('pages.solids') }}" class="d-block my-3">Maltodextrin</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.solids') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item p-mcs text-center">
                            <img src="{{ asset('frontend-assets/img/16 - Corn Starch 256x346.png') }}" alt="Corn Starch " />
                            <h5><a href="{{ route('pages.maize') }}" class="d-block my-3">Maize Corn Starch</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.maize') }}" button_name="View More">
                            </x-read-more>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-6 my-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block">
            <span class="text-uppercase">AVAILABLE SKU's</span>
            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="product_range text-right" colspan="2">1kg/2lbs</td>
                                <td class="product_range">2kg/4lbs</td>
                                <td class="product_range ">5kg/10lbs</td>
                                <td class="product_range ">20kg/40lbs</td>
                                <td class="product_range ">25kg</td>
                                <td class="product_range ">40kg</td>
                                <td class="product_range ">50kg</td>
                            </tr>
                            <tr>
                                <td style="width: 30%">Cotton/Non Woven</td>
                                <td style="width: 10%" class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td style="width: 10%" class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td style="width: 10%" class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td style="width: 10%" class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td style="width: 10%" class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td style="width: 10%" class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td style="width: 10%" class="text-center"></td>
                            </tr>
                            <tr>
                                <td>Jute</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                            </tr>
                            <tr>
                                <td>Plastic/Metalized
                                </td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td>JPP/PP laminated/Matt PP
                                    ute</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                            </tr>
                            <tr>
                                <td>Card box
                                </td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td>Jars</td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"><img
                                        src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" /></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="section-divider d-md-none mt-5">
            <hr>
        </div>
        <div class="section-6 my-5 d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <span class="text-uppercase mb-5 d-block text-center">PACKAGING</span>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="accordion private-acc" id="accordionExample">
                        <div class="card my-3 packaging-mob">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">Cotton/Non Woven
                                        <i class="fa fa-chevron-down pull-right"></i>
                                        <i class="fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />1kg/2lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />2kg/4lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />5kg/10lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />20kg/40lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" />25kg
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" />40kg
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3 packaging-mob">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">Jute
                                        <i class="fa fa-chevron-down pull-right"></i>
                                        <i class="fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />5kg/10lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />20kg/40lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" />25kg
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" />40kg
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" />50kg
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3 packaging-mob">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">Plastic/Metalized
                                        <i class="fa fa-chevron-down pull-right"></i>
                                        <i class="fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />1kg/2lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />2kg/4lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />20kg/40lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />5kg/10lbs</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3 packaging-mob">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">JPP/PP laminated/Matt PP ute
                                        <i class="fa fa-chevron-down pull-right"></i>
                                        <i class="fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />5kg/10lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />20kg/40lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" />25kg
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" />40kg
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="check" />50kg
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3 packaging-mob">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">Card box
                                        <i class="fa fa-chevron-down pull-right"></i>
                                        <i class="fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />1kg/2lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />2kg/4lbs</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3 packaging-mob">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">Jars
                                        <i class="fa fa-chevron-down pull-right"></i>
                                        <i class="fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseSix" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />1kg/2lbs</div>
                                        <div class="col-6 col-sm-4 col-md-none my-3"><img
                                                src="{{ asset('frontend-assets/img/Group 867.png') }}"
                                                alt="check" />2kg/4lbs</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="packaging-mob pb-2">
                        
                        <h4 class="text-left" style="color: #15245a;">Cotton/Non Woven</h4>
                        <ul>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />1kg/2lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />2kg/4lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />5kg/10lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />20kg/40lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />25kg</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />40kg</li>
                        </ul>
                    </div> --}}
                    {{-- <div class="packaging-mob pb-2">
                        <h4 class="text-left" style="color: #15245a;">Jute</h4>
                        <ul>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />5kg/10lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />20kg/40lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />25kg</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />40kg</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />50kg</li>
                        </ul>
                    </div> --}}
                    {{-- <div class="packaging-mob pb-2">
                        <h4 class="text-left" style="color: #15245a;">Plastic/Metalized</h4>
                        <ul>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />1kg/2lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />2kg/4lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />20kg/40lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />5kg/10lbs</li>
                        </ul>
                    </div> --}}
                    {{-- <div class="packaging-mob pb-2">
                        <h4 class="text-left" style="color: #15245a;">JPP/PP laminated/Matt PP ute</h4>
                        <ul>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />5kg/10lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />20kg/40lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />25kg</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />40kg</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />50kg</li>

                        </ul>
                    </div> --}}
                    {{-- <div class="packaging-mob pb-2">
                        <h4 class="text-left" style="color: #15245a;">Card box</h4>
                        <ul>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />1kg/2lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />2kg/4lbs</li>

                        </ul>
                    </div> --}}
                    {{-- <div class="packaging-mob pb-2">
                        <h4 class="text-left" style="color: #15245a;">Jars</h4>
                        <ul>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />1kg/2lbs</li>
                            <li class="col-4 col-sm-4 col-md-none my-3"><img
                                    src="{{ asset('frontend-assets/img/Group 867.png') }}" alt="" />2kg/4lbs</li>

                        </ul>
                    </div> --}}

                </div>
            </div>

        </div>
        <div class="section-2 text-center">
            <div class="learn_more my-5">
                <p>To view our full products range</p>
                <x-read-more button_link="/products" button_name="click here"></x-read-more>
            </div>
        </div>

        <div class="section-divider">
            <hr>
        </div>
        <x-certification-component></x-certification-component>
    </section>
    @section('afterScripts')
        <script>
            $(document).ready(function() {

                var prod = $('.product_images .owl-carousel').owlCarousel({
                    loop: true,
                    dots: false,
                    nav: true,
                    autoplay: false,
                    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>',
                        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });

                prod.on('changed.owl.carousel', function(event) {
                    setTimeout(function() {
                        var activeEls = $('.owl-item.active .item').eq(1).attr('class');
                        var arr = activeEls.split(' ');
                        setCarouselCaption(arr[arr.length - 2]);
                    }, 1);
                });
            });

            function setCarouselCaption(el) {
                $(".product_list .d-block").removeClass("active");
                $(".product_list ." + el).addClass("active");
            }
        </script>
    @endsection
</x-guest-layout>
