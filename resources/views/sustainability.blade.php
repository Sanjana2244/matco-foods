<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
            ])
        @endcomponent
    </section>
    <div class="" id="sustainability">
        {{-- <h1 class="text-uppercase my-5 text-center primary-color">Sustainability</h1> --}}
        <div class="container py-6">
            <div class="row mb-3 sustainability ">
                <div class="col-md-12">
                    <p class="sub_heading text-uppercase">Matco Goes Green</p>
                </div>
                <div class="col-md-7 d-flex flex-column justify-content-between">
                    <p class="desc">
                        With the ongoing global climate crisis, we aim to reduce our carbon footprint and reach our goal
                        of using sustainable and energy efficient production. Matco Goes Green is our latest initiative,
                        which highlights the use of renewable energy in our production methods.</p>
                    <p class="desc">
                        The first project of installing solar panels at the Karachi rice processing facilities is
                        complete. The project size is 413 kWp and has an annual energy generation capacity of 615,000
                        kWp units. Through this, 378 tons of Co2 emissions are avoided which is roughly equivalent to
                        planting 15,376 trees.</p>
                    <p class="desc">
                        In the next phase we are increasing the project size and installing solar panels at our Punjab
                        facilities. The project size is 722 kWp with an annual generation capacity of 1,027,786 kWp
                        units per year, and reduce Co2 emissions by 615 tons per year. It is expected to be completed by
                        June 2020. This project is also equipped with net metering which will enable us to add back
                        approximately 280,000 kWp units annually to the national grid.</p>
                    <p class="desc">
                        Shifting to sustainable energy provides us with continuous energy at full capacity and in turn
                        uninterrupted operations of our production lines, improving asset utilization intensity and
                        increasing efficiency.

                    </p>
                </div>
                <div class="col-md-5 goes_green">
                    <img src="{{ asset('frontend-assets/img/4---MFL-Goes-Green.jpg') }}" alt="OP" />
                </div>
            </div>
            <div class="row mb-3 sustainability">
                <div class="col-md-12">
                    <p class="sub_heading text-uppercase">Sustainable Supply Chain</p>
                    <p class="desc">Our integrated supply chain from fields to rice mills to the production
                        plants ensures traceability at all stages. This also ensures rigorous quality control and
                        reinforces our promise of delivering the best to our customers. As a member of the Sustainable
                        Rice Platform (SRP), Matco Foods Limited also ensures sustainability and efficiency at all
                        levels of production, connecting all stakeholders, improving the livelihood of farmers and
                        protecting and preserving the environment.
                    </p>
                </div>
            </div>
            <div class="row mb-3 sustainability">
                <div class="col-md-12">
                    <p class="sub_heading text-uppercase">Kissan Dost Program</p>
                </div>
                <div class="col-md-5 kissan_dost order-4 order-sm-4 order-md-1">
                    <img src="{{ asset('frontend-assets/img/5-Kisan-Dost-Program.jpg') }}" alt="OP" />
                </div>
                <div class="col-md-7 d-flex flex-column justify-content-between order-1 order-sm-1 order-md-4">
                    <p class="desc">MFL started its Kissan Dost Program (Farmer’s Friend Program) in 2012 to
                        assist farmers near its Sadhoke, Punjab processing plant. This program currently caters to over
                        600 farmers, providing them extensive services with the aim of improving the supply chain of
                        basmati rice, enhancing the production capabilities of the farmers and lowering their costs.
                        This program ensures traceability at every level from the planting of the seeds, to procurement
                        and the processing of the final product.</p>
                    <p class="desc">The program was successful in empowering farmers’ communities to avoid
                        exploitative middlemen and deal directly with large buyers like MFL.</p>
                    <p class="desc">After over three years of dedicated engagement, this program has achieved
                        EU Organic Certification. This was achieved through detailed auditing at farm-level production,
                        factory-level processing and administrative-level traceability. MFL supplies certified Organic
                        Brown and Organic White Basmati Rice to its customers across the globe through this program..
                    </p>
                </div>
            </div>
            <div class="row mb-3 sustainability">
                <div class="col-md-12">
                    <p class="sub_heading text-uppercase">Grassroots Farming Initiative</p>
                </div>
                <div class="col-md-7 d-flex flex-column justify-content-between">
                    <p class="desc">
                        In June 2017 MFL and Oxfam signed an agreement to run a pilot project in 10 villages in Punjab,
                        Pakistan. The aim was to improve social, economic and environmental conditions of rice growers
                        and workers in the rice value chain, especially targeting women who despite forming the bulk of
                        the farmers, reap the fewest rewards.</p>
                    <p class="desc">Phase 2 of this project has begun in 2019, and extended till 2021. MFL and
                        Oxfam will target a total of 25 local Grower Organizations (Villagers), reaching a total of 2500
                        farmers. MFL has supplied free seeds & technical equipment amongst other services to this
                        project to improve the yield and farm efficiency from the ground-up, and equip farmers with the
                        best modern farming practices.

                    </p>
                    </p>
                </div>
                <div class="col-md-5 grass_root d-md-block">
                    <img src="{{ asset('frontend-assets/img/6-Grassroots-Farming-Initiative.jpg') }}" alt="OP" />
                </div>
            </div>
            <div class="row mb-3 sustainability">
                <div class="col-md-12">
                    <p class="sub_heading text-uppercase text-center text-md-left">Community Service & Development</p>
                    <p class="desc">MFL’s vision is to support community service initiatives in the spheres of
                        education and health in Pakistan. To this end, the company sponsored and formed a charitable
                        trust by the name of
                        Ghori Trust in October 2000, registered under the Trust Act, 1882.The Federal Board of Revenue
                        (FBR) has registered Ghori Trust as a Non-Profit Organization.
                    </p>
                </div>
            </div>
            {{-- <div class="mb-3 row foundation">
                <div class="col-md-6 my-auto">
                    <div class="citizen-foundation text-center text-md-left text-sm-center">
                        <img src="{{ asset('frontend-assets/img/citizen.png') }}" alt="OP" />
                    </div>
                    <p class="sub_heading text-uppercase mt-5 mb-3">The Citizens Foundation</p>
                    <p class="desc">Ghori Trust donated funds to The Citizens Foundation (TCF) for the
                        establishment of a school and its running costs for three years. TCF is a non-profit
                        organization that operates over 650 schools in Pakistan, providing subsidized education to
                        85,000 children. Located in Taiser Town, North Karachi, TCF Ghori Campus provides quality
                        primary education to over 200 students who are managed by a teaching staff of 6 tutors. </p>
                    <p class="desc">Matco also sponsored the TCL Ilmathon 2020, with the mission to eliminate
                        illiteracy across Pakistan with 1,500+ schools.</p>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="citizen-foundation text-center text-md-left text-sm-center">
                        <img src="{{ asset('frontend-assets/img/hunar.png') }}" alt="OP" />
                    </div>
                    <p class="sub_heading text-uppercase mt-5 mb-3">The Hunar Foundation</p>
                    <p class="desc">Donations to the The Hunar Foundation (THF) were made for opening a
                        vocational education school to promote technical education. THF, accredited by City & Guilds
                        (UK), aims to create a new cadre of skilled Pakistanis with internationally recognized technical
                        qualifications that open up a world of opportunities for them.
                    </p>
                    <p class="desc">With the help of Matco, Ghori Trust initiated its first ‘Apprenticeship /
                        Technical Training Program’ at Matco’s production facilities. The objective of this program was
                        to provide young individuals with theoretical knowledge and practical skills of technical
                        know-how, thereby improving their skill set and future employment opportunities.</p>
                </div>

                <div class="col-md-6 my-auto">
                    <div class="citizen-foundation text-center text-md-left text-sm-center">
                        <img src="{{ asset('frontend-assets/img/1---NOWPDP 270x350.png') }}" alt="OP" />
                    </div>
                    <p class="sub_heading text-uppercase mt-5 mb-3">Network of
                        Organizations
                        Working for People with
                        Disabilities, Pakistan (NOWPDP)</p>
                    <p class="desc">Matco has been worked with the Network of Organizations Working for People
                        with Disabilities, Pakistan (NOWPDP) to help individuals with disabilities make the most of
                        their valuable skills. The partnership with Matco helped generate funds for NOWPDP and increases
                        awareness about its cause. On the purchase of every FALAK® Brown Basmati Rice jar, a portion of
                        the proceeds from sales was contributed to NOWPDP.</p>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="citizen-foundation text-center text-md-left text-sm-center">
                        <img src="{{ asset('frontend-assets/img/2---Shamil 270x250.png') }}" alt="OP" />
                    </div>
                    <p class="sub_heading text-uppercase mt-5 mb-3">The Shamil Initiative</p>
                    <p class="desc">In 2021, Matco parented with ‘The Shamil Initiative’, a social enterprise
                        in collaboration with NOWPDP (Network of Organizations working for Persons with Disabilities
                        Pakistan), with the vision to alleviate the financial shortcomings of the disenfranchised
                        community and create jobs, through the campaign ‘Khayal Rakhna’. </p>
                    <p class="desc">The campaign produces recyclable fabric bags, employing person with
                        disabilities to do so, given out as a token of appreciation to Frontline Healthcare Workers and
                        support staff serving across different hospitals and AVCs in Karachi.</p>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="citizen-foundation text-center text-md-left text-sm-center">
                        <img src="{{ asset('frontend-assets/img/3-Health-and-Rehab-270x350.jpg') }}" alt="OP" />
                    </div>
                    <p class="sub_heading text-uppercase mt-5 mb-3">Health & Rehabilitation</p>
                    <p class="desc">Ghori Trust donated funds to Indus Hospital, located in Korangi, Karachi,
                        for establishment of a Multi-Drug Resistant Tuberculosis (MDR TB) Out Patient Facility. Indus
                        Hospital is a state-of-the-art facility that provides healthcare to everyone completely free of
                        any charges.</p>
                    <p class="desc">A complete Pediatric Intensive Care Unit at Abbasi Shaheed Hospital,
                        Karachi has also been funded by Ghori trust, to provide treatment for children born with birth
                        defects or complications.</p>
                    <p class="desc">Following the Pediatric ICU, Ghori Trust donated dialysis machines and
                        upgraded existing dialysis machines for Abbasi Shaheed Hospital in Karachi.</p>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="citizen-foundation text-center text-md-left text-sm-center">
                        <img src="{{ asset('frontend-assets/img/10 - HBL and Matco  - Loans for Kissans.jpg') }}"
                            alt="OP" />
                    </div>
                    <p class="sub_heading text-uppercase mt-5 mb-3">Disaster
                        Relief Funds</p>
                    <p class="desc">Matco is a committed member of the society and strives to make
                        constructive efforts for the welfare of the community. To that effect, Ghori Trust, in
                        collaboration with Matco Foods Limited donated rice and rations to the earthquake victims in
                        Kashmir of 2005, and the floods in Pakistan in 2010, 2011 and 2020. Food camps for flood
                        affected areas in the Punjab regions of Sadhoke, Kamoke and Mureedke were also conducted.</p>
                </div>
                <div class="col-md-6 kissan_dost mt-3">
                    <img src="{{ asset('frontend-assets/img/9 - Medical Camp for Kissans.jpg') }}" alt="OP" />
                </div>
                <div class="col-md-6 my-auto mt-3">
                    <p class="sub_heading text-uppercase">Covid-19 Response</p>
                    <p class="desc">Generous financial and aid-in-kind contributions were made for the
                        Covid-19 Relief Fund in Pakistan by Matco and Ghori Trust. Moreover to provide financial relief
                        to customers, prices at our Fair Price Shops were further reduced.</p>
                    <p class="desc">We give thanks to all our partners that enabled us to support our nation
                        and community during this most trying pandemic.</p>
                </div>
            </div> --}}
            <div id="sustainability" class="foundation mt-5">
                <div class="owl-carousel owl-theme">
                    <div class="item text-center">
                        <img class="services mx-auto" src="{{ asset('frontend-assets/img/citizen-Logo.png') }}" alt="OP" />
                        <p class="sub_heading text-uppercase mt-5 mb-3">The Citizens Foundation</p>
                        <p class="desc">Ghori Trust donated funds to The Citizens Foundation (TCF) for the
                            establishment of a school and its running costs for three years. TCF is a non-profit
                            organization that operates over 650 schools in Pakistan, providing subsidized education to
                            85,000 children. Located in Taiser Town, North Karachi, TCF Ghori Campus provides quality
                            primary education to over 200 students who are managed by a teaching staff of 6 tutors. </p>
                        <p class="desc">Matco also sponsored the TCL Ilmathon 2020, with the mission to
                            eliminate
                            illiteracy across Pakistan with 1,500+ schools.</p>
                    </div>
                    <div class="item text-center">
                        <img class="services mx-auto" src="{{ asset('frontend-assets/img/Hunar-Logo.png') }}" alt="OP" />
                        <p class="sub_heading text-uppercase mt-5 mb-3">The Hunar Foundation</p>
                        <p class="desc">Donations to the The Hunar Foundation (THF) were made for opening a
                            vocational education school to promote technical education. THF, accredited by City & Guilds
                            (UK), aims to create a new cadre of skilled Pakistanis with internationally recognized
                            technical
                            qualifications that open up a world of opportunities for them.
                            With the help of Matco, Ghori Trust initiated its first
                            ‘Apprenticeship /
                            Technical Training Program’ at Matco’s production facilities. The objective of this program
                            was
                            to provide young individuals with theoretical knowledge and practical skills of technical
                            know-how, thereby improving their skill set and future employment opportunities.</p>
                    </div>
                    <div class="item text-center">
                        <img class="services mx-auto" src="{{ asset('frontend-assets/img/nowp-Logo.png') }}"
                            alt="OP" />
                        <p class="sub_heading text-uppercase mt-5 mb-3">Network of
                            Organizations
                            Working for People with
                            Disabilities, Pakistan (NOWPDP)</p>
                        <p class="desc">Matco has been worked with the Network of Organizations Working for
                            People
                            with Disabilities, Pakistan (NOWPDP) to help individuals with disabilities make the most of
                            their valuable skills. The partnership with Matco helped generate funds for NOWPDP and
                            increases
                            awareness about its cause. On the purchase of every FALAK® Brown Basmati Rice jar, a portion
                            of
                            the proceeds from sales was contributed to NOWPDP.</p>
                    </div>
                    <div class="item text-center">
                        <img class="services mx-auto" src="{{ asset('frontend-assets/img/shamil-Logo.png') }}"
                            alt="OP" />
                        <p class="sub_heading text-uppercase mt-5 mb-3">The Shamil Initiative</p>
                        <p class="desc">In 2021, Matco parented with ‘The Shamil Initiative’, a social
                            enterprise
                            in collaboration with NOWPDP (Network of Organizations working for Persons with Disabilities
                            Pakistan), with the vision to alleviate the financial shortcomings of the disenfranchised
                            community and create jobs, through the campaign ‘Khayal Rakhna’. The campaign produces
                            recyclable fabric bags, employing person with
                            disabilities to do so, given out as a token of appreciation to Frontline Healthcare Workers
                            and
                            support staff serving across different hospitals and AVCs in Karachi.</p>
                    </div>
                    <div class="item text-center">
                        <img class="services mx-auto"
                            src="{{ asset('frontend-assets/img/indus.png') }}" alt="OP" />
                        <p class="sub_heading text-uppercase mt-5 mb-3">Health & Rehabilitation</p>
                        <p class="desc">Ghori Trust donated funds to Indus Hospital, located in Korangi,
                            Karachi,
                            for establishment of a Multi-Drug Resistant Tuberculosis (MDR TB) Out Patient Facility.
                            Indus
                            Hospital is a state-of-the-art facility that provides healthcare to everyone completely free
                            of
                            any charges.A complete Pediatric Intensive Care Unit at Abbasi Shaheed Hospital,
                            Karachi has also been funded by Ghori trust, to provide treatment for children born with
                            birth
                            defects or complications.Following the Pediatric ICU, Ghori Trust donated dialysis machines
                            and
                            upgraded existing dialysis machines for Abbasi Shaheed Hospital in Karachi.</p>
                    </div>
                    <div class="item text-center">
                        <img class="services mx-auto"
                            src="{{ asset('frontend-assets/img/disater-relief-logo.png') }}"
                            alt="OP" />
                        <p class="sub_heading text-uppercase mt-5 mb-3">Disaster
                            Relief Funds</p>
                        <p class="desc">Matco is a committed member of the society and strives to make
                            constructive efforts for the welfare of the community. To that effect, Ghori Trust, in
                            collaboration with Matco Foods Limited donated rice and rations to the earthquake victims in
                            Kashmir of 2005, and the floods in Pakistan in 2010, 2011 and 2020. Food camps for flood
                            affected areas in the Punjab regions of Sadhoke, Kamoke and Mureedke were also conducted.
                        </p>
                    </div>
                    <div class="item text-center">
                        <img class="services mx-auto"
                            src="{{ asset('frontend-assets/img/covid-19-response---logo.png') }}" alt="OP" />
                        <p class="sub_heading text-uppercase">Covid-19 Response</p>
                        <p class="desc">Generous financial and aid-in-kind contributions were made for the
                            Covid-19 Relief Fund in Pakistan by Matco and Ghori Trust. Moreover to provide financial
                            relief
                            to customers, prices at our Fair Price Shops were further reduced.We give thanks to all our
                            partners that enabled us to support our
                            nation
                            and community during this most trying pandemic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
