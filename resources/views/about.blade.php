<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
            ])
        @endcomponent
    </section>
    <section class="investor_relation_tabs py-6">
        <ul
            class="nav nav-tabs justify-content-center mb-2 mb-sm-2 mb-md-5 d-block d-sm-block d-md-flex text-center text-sm-center text-md-left">
            <li class="nav-item">
                <a href="#profile" class="nav-link active text-uppercase" data-toggle="tab"><span>Company
                        Profile</span></a>
            </li>
            {{-- <hr class="d-none d-sm-none d-md-block"> --}}
            {{-- <li class="nav-item">
                <a href="#philosophy" class="nav-link text-uppercase" data-toggle="tab"><span>Our Philosophy</span></a>
            </li> --}}
            <hr class="d-none d-sm-none d-md-block">
            <li class="nav-item">
                <a href="#vision" class="nav-link text-uppercase" data-toggle="tab"><span>Vision & Mission</span></a>
            </li>
            <hr class="d-none d-sm-none d-md-block">
            <li class="nav-item">
                <a href="#global" class="nav-link text-uppercase" data-toggle="tab"><span>Global Presence</span></a>
            </li>
            {{-- <hr class="d-none d-sm-none d-md-block"> --}}
            {{-- <li class="nav-item">
                <a href="#where" class="nav-link text-uppercase" data-toggle="tab"><span>Where we are</span></a>
            </li> --}}
            {{-- <hr class="d-none d-sm-none d-md-block"> --}}
            {{-- <li class="nav-item">
                <a href="#relations" class="nav-link text-uppercase" data-toggle="tab"><span>PArtner
                        relations</span></a>
            </li> --}}
            <hr class="d-none d-sm-none d-md-block">
            <li class="nav-item">
                <a href="#knowledge" class="nav-link text-uppercase" data-toggle="tab"><span>Knowledge and
                        R&D</span></a>
            </li>
            <hr class="d-none d-sm-none d-md-block">
            <li class="nav-item">
                <a href="#awards" class="nav-link text-uppercase" data-toggle="tab"><span>Certifications &
                        Awards</span></a>
            </li>
        </ul>
        <div class="section-divider d-block d-sm-block d-md-none d-lg-none">
            <hr>
        </div>
        <div class="tab-content mt-3 mt-sm-3 mt-md-0">
            <div class="tab-pane fade show active container" id="profile">
                <h1 class="text-uppercase mb-4 text-center primary-color">Company Profile</h1>
                <p class="desc mb-3 text-center">Matco Foods Limited is a leading Food Processing & Export Company in
                    South-Asia,
                    established in 1964. We provide packed consumer foods products that offer convenience, and supply
                    quality ingredients to the pharmaceutical and confectionery industries. Our products include basmati
                    rice, rice glucose, rice protein, Himalayan pink salt, spices, dessert mixes and more.
                </p>
                <p class="desc text-center">As the largest basmati rice exporter from Pakistan, we have over 50 years of
                    experience
                    in the rice industry, and more than 150 corporate customers, with our flagship brand “Falak”
                    available in more than 65 countries worldwide.</p>
                <div class="journey mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <h1 class="text-uppercase mb-5 text-center primary-color">Our journey</h1>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">1964</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis text-center">Matco Rice Processing
                                            Pvt. Ltd is founded by Syed
                                            Sarfaraz Ali Ghori, a visionary entrepreneur.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="1964" data-desc="Matco Rice Processing Pvt. Ltd is founded by Syed
                                            Sarfaraz Ali Ghori, a visionary entrepreneur." data-toggle="modal"
                                                data-target="#journey" type="submit" class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">1970</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Matco sets up its first rice
                                            processing plant in
                                            Larkana, Sindh. At that time, direct export of rice by private companies was
                                            not allowed and Matco sold processed rice to RECP which was the Government
                                            export monopoly.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="1970" data-desc="Matco sets up its first rice
                                            processing plant in
                                            Larkana, Sindh. At that time, direct export of rice by private companies was
                                            not allowed and Matco sold processed rice to RECP which was the Government
                                            export monopoly." data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">1980</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Matco Rice begins operations to
                                            serve as an agent of
                                            Satake Japan, in Pakistan. </p>
                                        <div class="btn-submit text-center mt-5"><button data-year="1980" data-desc="Matco Rice begins operations to
                                            serve as an agent of
                                            Satake Japan, in Pakistan. " data-toggle="modal" data-target="#journey"
                                                type="submit" class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">1990</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Matco commissions Pakistan’s
                                            first fully-automated,
                                            modern rice processing plant supplied by Satake Corporation of Japan.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="1990" data-desc="Matco commissions Pakistan’s
                                            first fully-automated,
                                            modern rice processing plant supplied by Satake Corporation of Japan."
                                                data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">1999</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">The company’s flagship brand
                                            Falak, is launched in the
                                            international market, with the first shipment of its own brand.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="1999" data-desc="The company’s flagship brand
                                            Falak, is launched in the
                                            international market, with the first shipment of its own brand."
                                                data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2000</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Matco’s second state-of-the-art
                                            rice processing unit
                                            is set up in S.I.T.E.-II Industrial Zone, Karachi. Ghori Trust is sponsored
                                            and formed by Matco to support community service initiatives.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2000" data-desc="Matco’s second state-of-the-art
                                            rice processing unit
                                            is set up in S.I.T.E.-II Industrial Zone, Karachi. Ghori Trust is sponsored
                                            and formed by Matco to support community service initiatives."
                                                data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2004</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">The flagship brand Falak is
                                            launched in the local
                                            Pakistan market.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2004" data-desc="The flagship brand Falak is
                                            launched in the local
                                            Pakistan market." data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2006</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">The company operates 25
                                            warehouses for storing raw
                                            rice to meet its milling capacity.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2006" data-desc="The company operates 25
                                            warehouses for storing raw
                                            rice to meet its milling capacity." data-toggle="modal"
                                                data-target="#journey" type="submit" class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2008</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Matco successfully adds its 4th
                                            processing line at its
                                            existing facilities in S.I.T.E.-II Industrial Area Karachi to meet the ever
                                            increasing demand.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2008" data-desc="Matco successfully adds its 4th
                                            processing line at its
                                            existing facilities in S.I.T.E.-II Industrial Area Karachi to meet the ever
                                            increasing demand." data-toggle="modal" data-target="#journey"
                                                type="submit" class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2009</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Matco commissions Sadhoke Plant
                                            (Phase-1) in Punjab,
                                            Pakistan.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2009" data-desc="Matco commissions Sadhoke Plant
                                            (Phase-1) in Punjab,
                                            Pakistan." data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2011</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Subsequently, 3 more silos and 2
                                            more dryers are added
                                            (Phase-II) are added to increase rice storage and drying capacity</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2011" data-desc="Subsequently, 3 more silos and 2
                                            more dryers are added
                                            (Phase-II) are added to increase rice storage and drying capacity"
                                                data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2012</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">IFC, a member of World Bank
                                            Group injects an equity
                                            investment of US$ 5 million for further expansion of Sadhoke Plant.
                                            Matco’s Kissan Dost Program (Friends of Farmer) is launched to provide
                                            farmers with services to improve their rice production capabilities and
                                            lower their costs.
                                        </p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2012" data-desc="IFC, a member of World Bank
                                            Group injects an equity
                                            investment of US$ 5 million for further expansion of Sadhoke Plant.
                                            Matco’s Kissan Dost Program (Friends of Farmer) is launched to provide
                                            farmers with services to improve their rice production capabilities and
                                            lower their costs." data-toggle="modal" data-target="#journey"
                                                type="submit" class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2014</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Matco established a New Product
                                            Development unit to
                                            venture into new products, and launches Organic Rice Flour, Himalayan pink
                                            salt and Rice Bran Oil in the local and international markets.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2014" data-desc="Matco established a New Product
                                            Development unit to
                                            venture into new products, and launches Organic Rice Flour, Himalayan pink
                                            salt and Rice Bran Oil in the local and international markets."
                                                data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2015</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">The company formally changes its
                                            name from Matco Rice
                                            Processing (Pvt.) Limited. to Matco Foods (Pvt.) Limited in line with its
                                            vision to become a leading supplier of consumer foods. </p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2015" data-desc="The company formally changes its
                                            name from Matco Rice
                                            Processing (Pvt.) Limited. to Matco Foods (Pvt.) Limited in line with its
                                            vision to become a leading supplier of consumer foods." data-toggle="modal"
                                                data-target="#journey" type="submit" class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2016</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Falak Masala range is launched
                                            in the local market,
                                            along with premium grinder bottle range. The company introduces Falak Kheer
                                            Mix, the first of the company’s new dessert range, in the local and
                                            international markets.</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2016" data-desc="Falak Masala range is launched
                                            in the local market,
                                            along with premium grinder bottle range. The company introduces Falak Kheer
                                            Mix, the first of the company’s new dessert range, in the local and
                                            international markets." data-toggle="modal" data-target="#journey"
                                                type="submit" class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2017</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Matco sets up a dedicated state
                                            of the art organic
                                            Rice Glucose and Rice Protein manufacturing facility in Karachi.
                                            Matco Foods and Oxfam sign a pilot project Grassroots Farming Initiative in
                                            10 villages in Punjab, targeting 1500 farmers, predominantly females, to
                                            improve their socio-economic wellbeing.
                                        </p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2017" data-desc="Matco sets up a dedicated state
                                            of the art organic
                                            Rice Glucose and Rice Protein manufacturing facility in Karachi.
                                            Matco Foods and Oxfam sign a pilot project Grassroots Farming Initiative in
                                            10 villages in Punjab, targeting 1500 farmers, predominantly females, to
                                            improve their socio-economic wellbeing." data-toggle="modal"
                                                data-target="#journey" type="submit" class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2018</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">The first international shipment
                                            of Rice Glucose is
                                            made by Matco Foods.
                                            Falak Ginger and Garlic paste range is launched in the market.
                                            The company is formally listed as a Limited company at the Pakistan Stock
                                            Exchange (PSX).
                                            Commissioning for Phase 2 Expansion of the Rice Glucose Plant commences.
                                        </p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2018" data-desc="The first international shipment
                                            of Rice Glucose is
                                            made by Matco Foods.
                                            Falak Ginger and Garlic paste range is launched in the market.
                                            The company is formally listed as a Limited company at the Pakistan Stock
                                            Exchange (PSX).
                                            Commissioning for Phase 2 Expansion of the Rice Glucose Plant commences."
                                                data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2019</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Matco Foods shifts to its new
                                            Corporate Head Office
                                            in
                                            Karachi.
                                            Falak Desi Shakar (jaggery powder) and Falak Arabian Sea Salt and Low Sodium
                                            Salt are introduced as part of its Gourmet Salt Range.
                                            Matco Foods and Barentz International, form a joint venture Barentz Pakistan
                                            (Private) Limited to provide a ‘one-stop-solution’ service for standard and
                                            specialty ingredients for the Food, Nutrition and Pharmaceutical industries.
                                            Rice Glucose plant Phase 2 Expansion is completed and production begins.
                                            Grassroots Farming Initiative Phase 2 commences and is extended till 2021,
                                            to reach 2500 farmers.
                                            Matco Goes Green initiative is launched with the aim of using sustainable
                                            and energy methods. Solar panels are installed in the Karachi facilities
                                        </p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2019" data-desc="Matco Foods shifts to its new
                                            Corporate Head Office
                                            in
                                            Karachi.
                                            Falak Desi Shakar (jaggery powder) and Falak Arabian Sea Salt and Low Sodium
                                            Salt are introduced as part of its Gourmet Salt Range.
                                            Matco Foods and Barentz International, form a joint venture Barentz Pakistan
                                            (Private) Limited to provide a ‘one-stop-solution’ service for standard and
                                            specialty ingredients for the Food, Nutrition and Pharmaceutical industries.
                                            Rice Glucose plant Phase 2 Expansion is completed and production begins.
                                            Grassroots Farming Initiative Phase 2 commences and is extended till 2021,
                                            to reach 2500 farmers.
                                            Matco Goes Green initiative is launched with the aim of using sustainable
                                            and energy methods. Solar panels are installed in the Karachi facilities"
                                                data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2020</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Solar panels are installed in
                                            Punjab facilities as
                                            part of Matco Goes Green
                                            Matco receives the Foods Excellence Award for the best rice brand in
                                            Pakistan by Governor Sindh.
                                            Matco Foods formally announces its new venture to set up a corn starch
                                            manufacturing plant at a Special Economic Zone (SEZ) in Faisalabad, Punjab.
                                        </p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2020"
                                                data-desc="Solar panels are installed in
                                            Punjab facilities as
                                            part of Matco Goes Green
                                            Matco receives the Foods Excellence Award for the best rice brand in
                                            Pakistan by Governor Sindh.
                                            Matco Foods formally announces its new venture to set up a corn starch
                                            manufacturing plant at a Special Economic Zone (SEZ) in Faisalabad, Punjab." data-toggle="modal" data-target="#journey" type="submit"
                                                class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="year">
                                        <h1 class="journeyYear">2021</h1>
                                    </div>
                                    <div class="content">
                                        <p class="desc text-center three-row-ellipsis">Ground breaking ceremony of
                                            Matco’s new Corn Star
                                            Plant at Faisalabad</p>
                                        <div class="btn-submit text-center mt-5"><button data-year="2021" data-desc="Ground breaking ceremony of
                                            Matco’s new Corn Star
                                            Plant at Faisalabad" data-toggle="modal" data-target="#journey"
                                                type="submit" class="btn journey-modal">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center" id="philosophy">
                    <h1 class="text-uppercase my-5 primary-color">Our Philosophy</h1>
                    <div class="container mb-4">
                        <div class="row">
                            <div class="col-md-7"><img class="w-100 h-100"
                                    src="{{ asset('frontend-assets/img/2 - Philosophy.jpg') }}" alt="OP" /></div>
                            <div class="col-md-5 d-flex flex-column justify-content-between text-left py-3">
                                <p class="desc mb-3 mb-sm-3 mb-md-0">To produce premium quality food products and
                                    ingredients that
                                    conform
                                    to international
                                    standards.</p>
                                <p class="desc mb-3 mb-sm-3 mb-md-0">To be innovative, customer oriented and create
                                    strong
                                    partnerships
                                    with suppliers.</p>
                                <p class="desc mb-3 mb-sm-3 mb-md-0">To continuously invest in our staff – the biggest
                                    assets of the
                                    company.
                                </p>
                                <p class="desc mb-3 mb-sm-3 mb-md-0">To create long term value for all our stakeholders
                                    –
                                    customers,
                                    shareholders, staff, suppliers and the wider community.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade text-center" id="vision">
                <h1 class="text-uppercase mb-5 primary-color">Vision & Mission</h1>
                <div class="banner mx-auto d-none d-sm-none d-md-block" style="background-image: url({{ asset('frontend-assets/img/Vision-and-Mission-1529-x-380.jpg') }});     background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;">
                    <div class="content d-flex flex-column h-100 justify-content-center text-left">
                        {{-- <p class="vission desc mb-0">To become a leading global supplier of premium quality food
                            products and
                            ingredients
                            that offer convenience to customers.</p> --}}
                    </div>
                </div>
                <div class="d-md-none p-3">
                    <p class="desc mb-3 mb-sm-3 mb-md-0">To become a leading global supplier of premium quality
                        food
                        products and
                        ingredients
                        that offer convenience to customers.</p>
                    <img class="w-100" class=""
                        src="{{ asset('frontend-assets/img/Vision and mission 388x375.png') }}" alt="OP" />
                </div>
            </div>
            <div class="tab-pane fade container" id="global">
                <h1 class="text-uppercase mb-4 primary-color text-center">Global Presence</h1>
                <p class="desc mb-0 text-center">At Matco we strive to deliver excellence in food quality, taste and services
                    to all
                    our global customers. Our presence expands through 50+ countries with over 150 corporate clients.
                    Through are extensive network, we have the ability to meet the demands of all are local and
                    international customers
                </p>
                <div class="where_we_are my-5" id="where">
                    <div class="container text-center">
                        <h1 class="text-uppercase mb-4 primary-color">Where We Are</h1>
                        <p class="desc mb-3">At Matco we strive to deliver excellence in food quality, taste and
                            services to
                            all
                            our global customers. Our presence expands through 50+ countries with over 150 corporate
                            clients.
                            Through are extensive network, we have the ability to meet the demands of all are local and
                            international customers.
                        </p>
                    </div>
                    {{-- <img class="w-100 h-100" src="{{ asset('frontend-assets/img/maps.jpg') }}" alt="OP" /> --}}
                    <img class="w-100 h-100 d-none d-sm-none d-md-block"
                        src="{{ asset('frontend-assets/img/Group 1154.png') }}" alt="OP" />
                    <div class="country_list container d-none d-sm-none d-md-block">
                        <div class="continent w-75 mt-5">
                            <p class="sub_heading text-uppercase mb-3">Asia Pacific & Australia</p>
                            <p class="country mr-2">Australia</p>
                            <p class="country mr-2">Bangladesh</p>
                            <p class="country mr-2">China</p>
                            <p class="country mr-2">Hong Kong</p>
                            <p class="country mr-2">Malaysia</p>
                            <p class="country mr-2">New Zealand</p>
                            <p class="country mr-2">Singapore</p>
                            <p class="country mr-2">South Korea</p>
                            <p class="country mr-2">Sri Lanka</p>
                            <p class="country mr-2">Thailand</p>
                        </div>
                        <div class="continent w-75 mt-5">
                            <p class="sub_heading text-uppercase mb-3">North America</p>
                            <p class="country mr-2">United States of America</p>
                            <p class="country mr-2">Canada</p>
                            <p class="country mr-2">Trinidad & Tobago</p>
                        </div>
                        <div class="continent w-75 mt-5">
                            <p class="sub_heading text-uppercase mb-3">AfricA</p>
                            <p class="country mr-2">Djibouti</p>
                            <p class="country mr-2">Ethiopia</p>
                            <p class="country mr-2">Libya</p>
                            <p class="country mr-2">Maldives</p>
                            <p class="country mr-2">Mauritius</p>
                            <p class="country mr-2">Mozambique</p>
                            <p class="country mr-2">South Africa</p>
                        </div>
                        <div class="continent w-75 mt-5">
                            <p class="sub_heading text-uppercase mb-3">Commonwealth of Independent Countries</p>
                            <p class="country mr-2">Russia</p>
                            <p class="country mr-2">Ukraine</p>
                            <p class="country mr-2">Armenia</p>
                            <p class="country mr-2">Georgia</p>
                            <p class="country mr-2">Lithuania</p>
                        </div>
                        <div class="continent w-75 mt-5">
                            <p class="sub_heading text-uppercase mb-3">Middle East</p>
                            <p class="country mr-2">Lebanon</p>
                            <p class="country mr-2">Bahrain</p>
                            <p class="country mr-2">Egypt</p>
                            <p class="country mr-2">Iraq</p>
                            <p class="country mr-2">Jordan</p>
                            <p class="country mr-2">Kuwait</p>
                            <p class="country mr-2">Oman</p>
                            <p class="country mr-2">Qatar</p>
                            <p class="country mr-2">Kingdom of Saudi Arabia</p>
                            <p class="country mr-2">United Arab Emirates</p>
                            <p class="country mr-2">Yemen</p>
                        </div>
                        <div class="continent w-75 mt-5">
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
                            <p class="country mr-2">Poland</p>
                            <p class="country mr-2">Portugal</p>
                            <p class="country mr-2">Réunion</p>
                            <p class="country mr-2">Spain</p>
                            <p class="country mr-2">Sweden</p>
                            <p class="country mr-2">Switzerland</p>
                            <p class="country mr-2">Turkey</p>
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
                                    <p class="     ">China</p>
                                    <p class="">Hong Kong</p>
                                    <p class="">Malaysia</p>
                                    <p class="    ">New Zealand</p>
                                    <p class=" ">Singapore</p>
                                    <p class=" ">South Korea</p>
                                    <p class="">Sri Lanka</p>
                                    <p class="">Thailand</p>
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
                                    <p class="">Russia</p>
                                    <p class="">Ukraine</p>
                                    <p class="">Armenia</p>
                                    <p class="">Georgia</p>
                                    <p class="">Lithuania</p>
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
                                    <p class="">Lebanon</p>
                                    <p class="">Bahrain</p>
                                    <p class="">Egypt</p>
                                    <p class="">Iraq</p>
                                    <p class="">Jordan</p>
                                    <p class="">Kuwait</p>
                                    <p class="">Oman</p>
                                    <p class="">Qatar</p>
                                    <p class="">Kingdom of Saudi Arabia</p>
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
                                    <p class="">Poland</p>
                                    <p class="">Portugal</p>
                                    <p class="">Réunion</p>
                                    <p class="">Spain</p>
                                    <p class="">Sweden</p>
                                    <p class="">Switzerland</p>
                                    <p class="">Turkey</p>
                                    <p class="">United Kingdom</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center my-5" id="relations">
                    <h1 class="text-uppercase mb-5 primary-color">Partner relations</h1>
                    <img class="w-100 h-100" src="{{ asset('frontend-assets/img/prHeader.jpg') }}" alt="OP" />
                    <div class="container mt-5 ">
                        <p class="desc mb-3">Our team of regional representatives and distributors are key
                            in
                            helping
                            us
                            reach
                            the homes and hearts of millions. Our relationships with our valued distributors,
                            suppliers
                            and
                            other partners are the pillars for our business.</p>
                        <p class="desc mb-5">Matco exhibits regularly in all the leading international
                            trade fairs
                            such as
                            Gulfood (Dubai), SIAL (Paris), Anuga (Cologne), Biofach (Nuremberg) and several
                            others.
                            These
                            annual
                            events provides the ideal platform for us to reconnect with and strengthen
                            relationships
                            with
                            our
                            existing partners, and meet new potential partners. </p>
                        <div class="relation mt-3">
                            <div class="owl-carousel owl-theme">
                                <div class="item m-3">
                                    <div class="content">
                                        <img class="w-100"
                                            src="{{ asset('frontend-assets/img/2.1 - Gulf Foods 2020.jpg') }}"
                                            alt="OP" />
                                        <p class="sub_heading text-uppercase mb-0 mt-3 partner-relations">Gulf Foods
                                            Expo 2020
                                        </p>
                                    </div>
                                </div>
                                <div class="item m-3">
                                    <div class="content">
                                        <img class="w-100"
                                            src="{{ asset('frontend-assets/img/2.2 - Trade Event Islamabad 2021.jpg') }}"
                                            alt="OP" />
                                        <p class="sub_heading text-uppercase mb-0 mt-3 partner-relations">Trade Event
                                            Islamabad 2021
                                        </p>
                                    </div>
                                </div>
                                <div class="item m-3">
                                    <div class="content">
                                        <img class="w-100"
                                            src="{{ asset('frontend-assets/img/2.3 - ANUGA 2021.jpg') }}" alt="OP" />
                                        <p class="sub_heading text-uppercase mb-0 mt-3 partner-relations">Anuga Expo –
                                            2021
                                        </p>
                                    </div>
                                </div>
                                <div class="item m-3">
                                    <div class="content">
                                        <img class="w-100"
                                            src="{{ asset('frontend-assets/img/2.4 - REAP Export Awards.jpg') }}"
                                            alt="OP" />
                                        <p class="sub_heading text-uppercase mb-0 mt-3 partner-relations">REAP Export
                                            Awards 2021
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="desc mt-4">To learn more about becoming our distributor</p>
                        <div class="btn-submit"><button type="submit" class="btn">Click
                                Here</button>
                        </div>
                    </div>


                </div>
            </div>
            <div class="tab-pane fade container text-center" id="knowledge">
                <h1 class="text-uppercase mb-4 primary-color">Knowledge and R&D</h1>
                <p class="desc mb-4">In house R&D is one of Matco’s key strengths, in line with our
                    promise of
                    excellence and innovation in our production methods, equipment, and product quality. Our
                    dedicated
                    group of engineers and food technologists are continuously engaged in product and
                    process
                    improvements, striving to become Pakistan’s most advanced consumer foods and
                    agri-business. </p>
                <p class="sub_heading text-uppercase mb-4">Custom Formulations</p>
                <p class="desc">Matco provides tailored formulations and products for its
                    customers. We
                    are
                    committed to producing
                    customised products and satisfying the diverse needs of all our customers, exploring new
                    ideas
                    and
                    innovative methods.
                </p>
            </div>
            <div class="tab-pane fade container text-center" id="awards">
                <h1 class="text-uppercase mb-4 primary-color">Awards</h1>
                <div class="owl-carousel owl-theme my-5">
                    <div class="item">
                        <div><img class="w-100 h-100" src="{{ asset('frontend-assets/img/REAP.jpg') }}"
                                alt="OP" /></div>
                        <div>
                            <p class="desc">REAP Top 100 Pakistani Exporters Gold Medal and Trophy, 2021</p>
                        </div>
                    </div>
                    <div class="item">
                        <div><img class="w-100 h-100"
                                src="{{ asset('frontend-assets/img/Food Excellence award.jpg') }}" alt="OP" /></div>
                        <div>
                            <p class="desc">Food Excellence Award 2019, for the ‘Best Rice Brand – FALAK’,
                                2019</p>
                        </div>
                    </div>
                    <div class="item">
                        <div><img class="w-100 h-100"
                                src="{{ asset('frontend-assets/img/brand of year 2014.jpg') }}" alt="OP" /></div>
                        <div>
                            <p class="desc">Brand of the Year Award, 2015</p>
                        </div>
                    </div>
                    <div class="item">
                        <div><img class="w-100 h-100"
                                src="{{ asset('frontend-assets/img/brand of the year 2015.jpg') }}" alt="OP" /></div>
                        <div>
                            <p class="desc">Brand of the Year Award, 2014</p>
                        </div>
                    </div>
                </div>
                <h1 class="text-uppercase my-5 primary-color about-certification">Certifications</h1>
                <x-certification-component></x-certification-component>
            </div>
        </div>
        </div>
    </section>
    <div class="modal fade " id="journey" tabindex="-1" role="dialog" aria-labelledby="journeyLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-3">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h1 class="modal-title primary-color font-weight-bold text-center">
                        2004</h1>
                    <div class="white text-center font-light mt-3">
                        <p class="modal-desc-body"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
