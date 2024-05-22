<x-guest-layout>
    <h1 class="text-center my-5 text-uppercase primary-color">Latest News & Events</h1>
    <div class="row lastest_news m-0">
        <div class="col-md-4 p-0 cursor-pointer d-none d-sm-none d-md-block d-lg-block" data-toggle="modal"
            data-target="#covid">
            <div class="lastest_post" style="background-image: url('{{ asset('frontend-assets/img/nb-1.jpg') }}');">
                <div class="over-lay">
                    <div class="content">
                        <h6 class="text-center text-white two-row-ellipsis">Covid-19 Response</h6>
                        <p class="date text-center text-white mt-3"><i class="fa fa-calendar mr-2"></i>March / 15 /2021
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-0 cursor-pointer d-none d-sm-none d-md-block d-lg-block" data-toggle="modal"
            data-target="#newsEventModal">
            <div class="lastest_post" style="background-image: url('{{ asset('frontend-assets/img/nb-2.jpg') }}');">
                <div class="over-lay">
                    <div class="content">
                        <h6 class="text-center text-white two-row-ellipsis">Matco Foods Limited launches Falak Fried
                            Chicken Mix.</h6>
                        <p class="date text-center text-white mt-3"><i class="fa fa-calendar mr-2"></i>July / 19 /2021
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-0 cursor-pointer d-none d-sm-none d-md-block d-lg-block" data-toggle="modal"
            data-target="#award">
            <div class="lastest_post" style="background-image: url('{{ asset('frontend-assets/img/nb-3.jpg') }}');">
                <div class="over-lay">
                    <div class="content">
                        <h6 class="text-center text-white two-row-ellipsis">Matco is awarded Excellence in Export Award
                            at Rice Exporters Association of Pakistan Awards.</h6>
                        <p class="date text-center text-white mt-3"><i class="fa fa-calendar mr-2"></i>August / 28 /2021
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 new-slider p-0 d-none">
            <div class="owl-carousel owl-theme">
                <div class="item" data-toggle="modal" data-target="#covid">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/nb-1.jpg') }}');">
                        <div class="over-lay">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis">Covid-19 Response</h6>
                                <p class="date text-center text-white mt-3"><i class="fa fa-calendar mr-2"></i>March /
                                    15 /2021
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-toggle="modal" data-target="#newsEventModal">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/nb-2.jpg') }}');">
                        <div class="over-lay">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis">Matco Foods Limited launches Falak
                                    Fried Chicken Mix.</h6>
                                <p class="date text-center text-white mt-3"><i class="fa fa-calendar mr-2"></i>July / 19
                                    /2021
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-toggle="modal" data-target="#award">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/nb-3.jpg') }}');">
                        <div class="over-lay">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis">Matco is awarded Excellence in
                                    Export Award at Rice Exporters Association of Pakistan Awards.</h6>
                                <p class="date text-center text-white mt-3"><i class="fa fa-calendar mr-2"></i>August /
                                    28 /2021
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 news_events">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    {{-- start feature news --}}
                    <div class="col-md-8 most_lastest_news">
                        <div class="text-center most_lastest_news_details d-block d-sm-block d-md-none d-lg-none">
                            <p class="headLine two-row-ellipsis">Matco Foods Limited launches Falak Fried Chicken Mix.
                            </p>
                        </div>
                        <img class="w-100" src="{{ asset('frontend-assets/img/nb-2.jpg') }}" alt="lastest_news" />
                        <div class="text-center most_lastest_news_details pt-0 pt-sm-0 pt-md-5 pt-lg-5">
                            <p class="headLine two-row-ellipsis d-none d-sm-none d-md-block d-lg-block">Matco Foods
                                Limited launches Falak Fried Chicken Mix.</p>
                            <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, July 19th 2021</p>
                            <p class="desc px-3 three-row-ellipsis">Matco Foods Limited has announced the launch of
                                Falak Fried
                                Chicken Mix, an addition to its increasing product portfolio. The product launch was
                                held at Matco Foods limited Head Office, Karachi.
                                Expressing their views on the occasion, Jawed Ali Ghori (Chairman), Khalid Sarfaraz
                                Ghori (CEO) and Faizan Ali Ghori (Director) commented that “It is heartening to witness
                                that our spices, salt sand recipe mixes have received such positive responses from our
                                global family. We are delighted to expand our Falak Masala Range and launch Falak Fried
                                Chicken Mix in which our consumers are guaranteed quality, taste and convenience
                            </p>
                            <div class="read_more_news text-center mt-5" data-toggle="modal"
                                data-target="#newsEventModal">
                                <span>Read More</span></i>
                            </div>
                        </div>
                    </div>
                    {{-- end feature news --}}
                    <div class="col-md-4 mt-5 mt-md-0 mt-sm-5 news_list">
                        <h4 class="heading pb-2">POPULAR NEWS & EVENTS</h4>
                        <div class="list">

                            {{-- 2022 --}}
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news13">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/fi.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Showcases Innovation at Food
                                        Ingredient Europe 2022
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>6-8 December

                                        2022</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news14">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Gulfood new.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Gulfood 2022: Matco Foods Continues to
                                        Lead with Quality and Innovation
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>13-17 February

                                        2022</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news15">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Gulfood Manufacturing.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods participated in Gulfood
                                        Manufacturing 2022,
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>8-10 November

                                        2022</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news16">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/hum masala.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Shines at Hum Masala Food
                                        Festival Lahore 2022
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                        2022</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news17">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/IFTECH.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Excels at IFTECH Pakistan
                                        2022 Exhibition
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                        22-24 September 2022</p>
                                </div>
                            </div>

                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news18">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/matco starch plant.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Inauguration of Matco Corn Starch Plant
                                        2022
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                        26 August 2022</p>
                                </div>
                            </div>

                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news19">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/independence.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Celebrates Independence Day
                                        2022
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                        2022</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news20">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/womens day.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Celebrating International Women's Day
                                        2022 at Matco Foods
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                        2022</p>
                                </div>
                            </div>

                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news21">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/food festival.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Steals the Show at Karachi
                                        Eat Food Festival 2022
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                        2022</p>
                                </div>
                            </div>


                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news22">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Pak-Iraq Fair.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Exhibits at Pak-Iraq Fair
                                        2022, Strengthening Bilateral Ties
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                        15-17 March 2022</p>
                                </div>
                            </div>

                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news23">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Basmati Rice Award.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Receives Highest Exporter
                                        of Basmati Rice Award 2022
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                        27 September 2022</p>
                                </div>
                            </div>

                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news24">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Saudi Foodex.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Shines at Saudi Foodex 2022
                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                        13-16 September 2022</p>
                                </div>
                            </div>


                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news25">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/SIAL Paris.jpeg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Excels at SIAL Paris 2022

                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                        15-19 October 2022</p>
                                </div>
                            </div>

                            
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news26">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Campaign for Sustainable.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Joins "SRP Around The World" Campaign for Sustainable Rice Production 2022


                                    </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>

                                       5 December 2022</p>
                                </div>
                            </div>

                            {{-- 2022 --}}


                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news1">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/nb-3.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco is awarded Excellence in Export
                                        Award at Rice Exporters Association of Pakistan Awards.</p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Karachi,
                                        August 28th
                                        2021</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news2">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/2021 - gulfood - large.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco exhibits at Gulfood 2021 </p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Dubai,
                                        February 2021
                                    </p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news3">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/2021 - 14th Aug - large.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">14th August Celebrations and
                                        Recognizing
                                        20 Year of Service</p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Karachi, 14th
                                        August
                                        2021:
                                    </p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news4">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/2021 - anuga - large.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco participates in Anuga 2021 in
                                        Cologne, Germany</p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Cologne,
                                        October 9th 2021
                                    </p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news5">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/2021 - world food day - large.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">World Food Day: help us reduce child
                                        hunger</p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Karachi,
                                        October 16th
                                        2021
                                    </p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news6">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/2021 - matco x shamil - large.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco partners with NOWPDP x Shamil
                                        Initiative</p>
                                    {{-- <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Karachi, October 16th
                                        2021
                                    </p> --}}
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news7">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/2020 - barentz - large.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Barentz Pakistan enters into a Joint
                                        Venture with Matco Foods in Pakistan</p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Hoofddorp,
                                        February 5th, 2020
                                    </p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news8">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/2020 - corn starch - large.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods invests Rs. 1.4 billion for
                                        a new Corn Starch Facility</p>
                                    {{-- <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Hoofddorp, Netherlands, February 5th, 2020
                                    </p> --}}
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#covid">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/nb-1.jpg') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Covid-19 Response</p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Karachi, March
                                        2021
                                    </p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news10">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/2018 - matco ipo - large.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Limited announces
                                        successful closing of its Book Building process of its IPO</p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Karachi, 24th
                                        January
                                        2018
                                    </p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news11">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/2018 - matco rice glucose - large.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Matco Foods Limited signs agreement for
                                        expansion of Rice Glucose and Rice Protein Plant</p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>Karachi, Mar
                                        3rd 2018
                                    </p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer news-list" data-toggle="modal"
                                data-target="#news12">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/2017 - oxfam - large.jpg') }}"
                                        alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">Oxfam and Matco Foods team up against
                                        rural poverty</p>
                                    <p class="date one-row-ellipsis"><i class="fa fa-calendar mr-2"></i>June 14, 2017
                                    </p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer my-4 text-center d-md-none view-more-btn"
                                {{-- data-toggle="modal" data-target="#newsEventModal" --}}>
                                <div class="col-12 most_lastest_news_details">
                                    <div class="read_more_news view-more">
                                        <span>Read More</span></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="d-none d-sm-none d-md-block col-md-12 my-2">
                <hr>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8 most_lastest_news">
                        <div class="text-center most_lastest_news_details d-block d-sm-block d-md-none d-lg-none">
                            <p class="headLine two-row-ellipsis">First ever shipment of Organic brown Basmati Rice to
                                the EU</p>
                        </div>
                        <img class="w-100" src="{{ asset('frontend-assets/img/Mask Group 26.jpg') }}"
                            alt="lastest_news" />
                        <div class="text-center most_lastest_news_details pt-0 pt-sm-0 pt-md-5 pt-lg-5">
                            <p class="headLine d-none d-sm-none d-md-block d-lg-block">First ever shipment of Organic
                                brown Basmati Rice to the EU</p>
                            <p class="date"><i class="fa fa-calendar mr-2"></i>jul / 15 /2018</p>
                            <p class="desc px-3">We denounce with righteous indignation and dislike men who are so
                                beguiled and
                                demoralized by
                                the charms of pleasure of the moment, so blinded by desire</p>
                            <div class="read_more_news text-right" data-toggle="modal" data-target="#newsEventModal">
                                <span>Read More</span><i class="ml-2 fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 news_list">
                        <h4 class="heading pb-2">Events</h4>
                        <div class="list">
                            <div class="row mx-0 mb-2 cursor-pointer" data-toggle="modal" data-target="#newsEventModal">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Mask Group 21.png') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">First ever shipment of Organic
                                        brown Basmati Rice to the EU</p>
                                    <p class="date"><i class="fa fa-calendar mr-2"></i>jul / 15 /2018</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer" data-toggle="modal" data-target="#newsEventModal">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Mask Group 21.png') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">First ever shipment of Organic
                                        brown Basmati Rice to the EU</p>
                                    <p class="date"><i class="fa fa-calendar mr-2"></i>jul / 15 /2018</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer" data-toggle="modal" data-target="#newsEventModal">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Mask Group 21.png') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">First ever shipment of Organic
                                        brown Basmati Rice to the EU</p>
                                    <p class="date"><i class="fa fa-calendar mr-2"></i>jul / 15 /2018</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer" data-toggle="modal" data-target="#newsEventModal">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Mask Group 21.png') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">First ever shipment of Organic
                                        brown Basmati Rice to the EU</p>
                                    <p class="date"><i class="fa fa-calendar mr-2"></i>jul / 15 /2018</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer" data-toggle="modal" data-target="#newsEventModal">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Mask Group 21.png') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">First ever shipment of Organic
                                        brown Basmati Rice to the EU</p>
                                    <p class="date"><i class="fa fa-calendar mr-2"></i>jul / 15 /2018</p>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 cursor-pointer" data-toggle="modal" data-target="#newsEventModal">
                                <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                        src="{{ asset('frontend-assets/img/Mask Group 21.png') }}" alt="news" />
                                </div>
                                <div class="col-7 col-sm-7 col-md-7">
                                    <p class="headLine mb-1 three-row-ellipsis">First ever shipment of Organic
                                        brown Basmati Rice to the EU</p>
                                    <p class="date"><i class="fa fa-calendar mr-2"></i>jul / 15 /2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-12 my-2 d">
                <hr>
            </div> --}}
        </div>
    </div>
    <div class="modal fade ne-modals" id="newsEventModal" tabindex="-1" role="dialog"
        aria-labelledby="newsEventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsEventModalLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/nb-2.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Limited launches Falak Fried Chicken
                                    Mix.</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, July 19th 2021<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods Limited has announced the launch of Falak Fried
                                    Chicken Mix, an addition to its increasing product portfolio. The product launch was
                                    held at Matco Foods limited Head Office, Karachi.
                                    Expressing their views on the occasion, Jawed Ali Ghori (Chairman), Khalid Sarfaraz
                                    Ghori (CEO) and Faizan Ali Ghori (Director) commented that “It is heartening to
                                    witness that our spices, salt sand recipe mixes have received such positive
                                    responses from our global family. We are delighted to expand our Falak Masala Range
                                    and launch Falak Fried Chicken Mix in which our consumers are guaranteed quality,
                                    taste and convenience<br><br><strong>About Matco Foods</strong><br><br>Matco Foods
                                    Limited
                                    is a leading publicly-traded agri-business in South-Asia, providing convenient
                                    packaged consumer goods and quality ingredients. The company’s products include
                                    predominantly basmati rice, rice syrup, rice protein, rice maltodextrin, Himalayan
                                    pink salt and other gourmet salts, spices, dessert mixes, rice flour, gram flour and
                                    many more.<br><br>
                                    Matco has global portfolio of more than 150 corporate customers. It is the only agro
                                    processing company in Pakistan in which the International Finance Corporation (IFC)
                                    (World Bank Group) has invested equity. The company exports to over 65 countries and
                                    the flagship brand Falak is available in over 50 countries globally.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- creating static modals for demo --}}

    <div class="modal fade ne-modals" id="covid" tabindex="-1" role="dialog" aria-labelledby="covidLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="covidLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/nb-1.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Covid-19 Response</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, March 2021<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">In response to the global Covid-19 pandemic, generous
                                    financial and aid-in-kind contributions were made for the Covid-19 Relief Fund in
                                    Pakistan by Matco and Ghori Trust. Moreover to provide financial relief to
                                    customers, prices at company’s Fair Price Shops were further reduced.<br><br>
                                    Due to the Covid pandemic, Indus Hospital was facing severe blood shortages for
                                    their Cancer and Thalassemia patients. In partnership with Indus Hospital Matco also
                                    conducted a blood drive at its Karachi Head Office, following the SOPs provided by
                                    World Health Organisation (W.H.O.) and the Government of Pakistan <br><br>
                                    We give thanks to all our partners that enabled us to support our nation and
                                    community during this most trying pandemic. <br><br>
                                    To watch our event highlights <a
                                        href="https://www.facebook.com/matcofoods/videos/145967480666438"
                                        target="_blank">click here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="award" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/nb-3.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco is awarded Excellence in
                                    Export Award at Rice Exporters Association of Pakistan Awards.</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, August 28th
                                    2021<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods Limited was awarded the Excellence in Export Gold
                                    Medal by President Arif Alvi at Rice Exporters Association Pakistan's 13th Export
                                    Awards, 28th August 2021.<br><br>
                                    Matco is the largest exporter of basmati rice from Pakistan and we take pride is
                                    representing Pakistan as one of the Top 100 Exporters in the country, and give
                                    thanks to all our stakeholders and customers for this achievement.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="export" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/nb-3.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco is awarded Excellence in
                                    Export Award at Rice Exporters Association of Pakistan Awards.</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, August 28th
                                    2021<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods Limited was awarded the Excellence in Export Gold
                                    Medal by President Arif Alvi at Rice Exporters Association Pakistan's 13th Export
                                    Awards, 28th August 2021.<br><br>
                                    Matco is the largest exporter of basmati rice from Pakistan and we take pride is
                                    representing Pakistan as one of the Top 100 Exporters in the country, and give
                                    thanks to all our stakeholders and customers for this achievement.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news1" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/nb-3.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco is awarded Excellence in
                                    Export Award at Rice Exporters Association of Pakistan Awards.</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, August 28th
                                    2021<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods Limited was awarded the Excellence in Export Gold
                                    Medal by President Arif Alvi at Rice Exporters Association Pakistan's 13th Export
                                    Awards, 28th August 2021.<br><br>
                                    Matco is the largest exporter of basmati rice from Pakistan and we take pride is
                                    representing Pakistan as one of the Top 100 Exporters in the country, and give
                                    thanks to all our stakeholders and customers for this achievement.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news2" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/2021 - gulfood - large.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco exhibits at Gulfood 2021 </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Dubai, February 2021
                                    <i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author
                                </p>
                                <p class="desc">Matco Foods, Pakistan’s leading Food Corporation and the
                                    largest exporter of Basmati rice, participated in Gulfood 2021 in Dubai. The show
                                    was a tremendous success in the world food trade economy.<br><br>
                                    The company showcased its products which included Basmati Rice, Organic Basmati
                                    Rice, Himalayan Pink Salt, Spices and Herbs and introduced its new product ‘Falak
                                    Fried Chicken Mix’ to its customers. <br><br>
                                    Commenting on the event, Jawed Ali Ghori, Chairman of Matco Foods said “Gulfood
                                    provides us an excellent opportunity to meet with major international buyers and
                                    sellers under one roof. In this precarious post-pandemic world, this forum proved to
                                    be an ideal opportunity to reconnect with our partners and discuss solutions to move
                                    forward together. We thank our existing partners for their continued support and
                                    trust in our mission to become a leading global food corporation”.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news3" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/2021 - 14th Aug - large.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">14th August Celebrations and Recognizing 20 Year
                                    of Service</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, August 14th
                                    2021<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods Limited celebrated the 71st Independence Day of
                                    Pakistan with a flag hoisting ceremony at its Karachi Head Office with its employees
                                    and their families. The ceremony was followed by tea and snacks for the employees
                                    and. The flag hoisting ceremony is a regular feature at Matco, an activity enjoyed
                                    by all our people. <br><br>
                                    The company also gave awards to its employees with 20 years of service, recognizing
                                    their performance and loyalty to the company. We are committed to providing a
                                    nurturing environment to our employees, where they can excel and grow.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news4" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/2021 - anuga - large.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco participates in Anuga 2021 in Cologne,
                                    Germany</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Cologne, October 9th
                                    2021<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco foods successfully participated in Anuga 2021 in
                                    Cologne Germany this year. The exhibition was a great success for the company and a
                                    step forward into our plan to renew and improve our relations with our global
                                    family. The exhibition was a perfect platform to connect with our European
                                    stakeholders and customers. <br><br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news5" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100"
                                src="{{ asset('frontend-assets/img/2021 - world food day - large.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">World Food Day: help us reduce child hunger.</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, October 16th
                                    2021<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">This year on World Food Day, we pledged to serve our
                                    community and help reducing child hunger in the city. The weeks preceding the event,
                                    we ran a social media campaign where each 'Like’ and ‘Share’ on our media post would
                                    translate into a free meal for a child in the city. Through this campaign and with
                                    the help of our stakeholders, we were able to reach out and provide meals to 300+
                                    children in government schools near are Karachi factories. <br><br>
                                    To watch our event highlights <a
                                        href="https://www.facebook.com/FalakRice/videos/4676383865751220">click
                                        here</a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news6" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100"
                                src="{{ asset('frontend-assets/img/2021 - matco x shamil - large.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco partners with NOWPDP x Shamil Initiative
                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>
                                    <i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author
                                </p>
                                <p class="desc">Matco parented with ‘The Shamil Initiative’, a social
                                    enterprise in collaboration with NOWPDP (Network of Organizations working for
                                    Persons with Disabilities Pakistan), with the vision to alleviate the financial
                                    shortcomings of the disenfranchised community and create jobs, through the campaign
                                    ‘Khayal Rakhna’. <br><br>
                                    The campaign produces recyclable fabric bags, employing person with disabilities to
                                    do so, given out as a token of appreciation to Frontline Healthcare Workers and
                                    support staff serving across different hospitals and AVCs in Karachi.tco joins hands
                                    with The ‘Shamil’ Initiative in collaboration with NOWPDP

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news7" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/2020 - barentz - large.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Barentz Pakistan enters into a Joint Venture with
                                    Matco Foods in Pakistan</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Netherlands, February 5th
                                    2020<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Barentz international B.V. and Matco Foods Limited officially
                                    announce the start of a new Joint Venture in Pakistan, following agreement between
                                    both parties. The aim of the new activity is to better serve the rapidly growing
                                    Pakistani food processing market with a target group of 200 million citizens.
                                    <br><br>
                                    Matco Foods has built up an extended network within the
                                    Pakistan local food<br><br>Barentz International offers the broadest high-quality
                                    ingredients portfolio<br><br>
                                    within the global life science marketsBarentz Pakistan will primarily focus on the
                                    markets for
                                    Human Nutrition and
                                    Pharmaceutical products
                                    <br><br>

                                    Hidde van der Wal, CEO of Barentz, says: ‘We already had a good partnership with
                                    Matco
                                    Foods and we both see complementary business opportunities in the local Pakistan
                                    market.
                                    Pakistan has a fast-growing economy with a good variety of multinational and local
                                    food
                                    manufacturers. Our broad ingredients portfolio in combination with Matco Foods’
                                    strong
                                    local network will certainly add value to the local life science markets, starting
                                    with
                                    Human Nutrition and Pharmaceuticals.’ <br><br>
                                    Khalid Ghori, CEO of Matco Foods, adds: ‘In our relationship with Barentz we share
                                    the
                                    same family-business background; our knowledge-rooted sense for business and
                                    entrepreneurship. We have invested in processing facilities to produce ingredients
                                    such
                                    as rice glucose syrup, rice proteins and maltodextrin. Through these activities, we
                                    have
                                    an excellent insight into and an extended network with the local food industry. We
                                    are
                                    proud to have set up this joint venture with Barentz and to further explore their
                                    strong
                                    global ingredient portfolio.’ <br><br>
                                    Barentz Pakistan, with Barentz as majority stakeholder, operates from Karachi.
                                    <span>About Matco Foods </span>
                                    Matco Foods Limited is a leading publicly-traded agri-business in South-Asia,
                                    providing
                                    convenient packaged consumer goods and quality ingredients. The company’s products
                                    include predominantly basmati rice, rice syrup, rice protein, rice maltodextrin,
                                    Himalayan pink salt and other gourmet salts, spices, dessert mixes, rice flour, gram
                                    flour and many more.
                                    Matco has global portfolio of more than 150 corporate customers. It is the only agro
                                    processing company in Pakistan in which the International Finance Corporation (IFC)
                                    (World Bank Group) has invested equity. The company exports to over 65 countries and
                                    the
                                    flagship brand Falak is available in over 50 countries globally.
                                    <span>About Barentz </span>
                                    Barentz is a global specialty ingredients distributor for the human nutrition,
                                    pharmaceutical, personal care and animal nutrition markets. Headquartered in the
                                    Netherlands, Barentz distributes ingredients and additives for products to small and
                                    medium-sized enterprises (‘SMEs’) and large customers globally. The Group sources
                                    branded specialty ingredients from leading manufacturers worldwide and its
                                    ingredients
                                    experts provide value-added technical support (including pre-mixing, blending,
                                    ingredient formulation and ingredient testing) from its state-of-the-art production
                                    facilities in Europe, North America and Asia.
                                    Established in 1953, Barentz has operations in more than 60 countries with a strong
                                    presence in Europe and Asia, and a growing presence in North America and Latin
                                    America.
                                    Today, the Group employs circa 1,100 people worldwide, sources ingredients from more
                                    than 1,000 suppliers and serves more than 15,000 customers. Please visit:
                                    www.barentz.com.
                                    <span>For more information please contact: </span>
                                    Marcel Hölscher, Global Head of Marketing & Communication
                                    marcel.holscher@barentz.com +31 (0)23 567 34 56
                                    Saturnusstraat 15, 2132 HB Hoofddorp, The Netherlands
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news8" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100"
                                src="{{ asset('frontend-assets/img/2020 - corn starch - large.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods invests Rs. 1.4 billion for a new Corn
                                    Starch Facility</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, August 28th
                                    2021<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Food has decided to setup a Corn Starch Processing
                                    Plant in Allama Iqbal Industrial Estate SEZ, Faisalabad with an estimated investment
                                    of Rs. 1.40 billion which will be financed through mix of debt and equity. The
                                    capacity of plant will be 200 Tons Per day of Corn Grinding which will produce
                                    40,000 MT of Corn Starch per year and 18,000 MT of Animal Feed per year.<br><br>
                                    As per research, the market size for Corn Starch in Pakistan is growing by nearly
                                    5-7% per year which means the size of the market will double in the next 10 years.
                                    The corn starch is used majorly by textile industry followed by food & pharma sector
                                    and paper & board sector in Pakistan. Considering the expected investment in textile
                                    industry and next 5 year textile policy, the Company is expecting the increase in
                                    the corn-starch demand in Pakistan.<br><br>
                                    Corn Starch Business complements Matco’s existing Rice Glucose Division which caters
                                    to the same market of confectionary, food segment where Corn Starch is sold. Rice
                                    Protein, and Rice Bran from existing business also complements the Corn Gluten
                                    products as it will be sold in the Animal Feed segment. Matco will rely on its
                                    existing distribution network of Rice Glucose and Maltodextrin to market to existing
                                    customers and establish potential new customers. Matco has distributors in Karachi,
                                    Lahore, Faisalabad, Gujranwala, Peshawar, Sukkur, Hyderabad, Multan and other major
                                    cities. <br><br>
                                    Corn is the 3rd Largest Food Crop of Pakistan at 7.2 Million Tons of annual
                                    production. There is only one existing player with sufficient scale and market
                                    dynamics suggest that customer base is looking for other options of supply. Whereas,
                                    investment in Allama Iqbal Industrial Estate Special Economic Zone – Faisalabad will
                                    allow us tax holiday for 10 years. Further, Faisalabad is ideally located close to
                                    the main corn growing divisions of Faisalabad, Sahiwal and Multan.<br><br>
                                    Matco Foods Chief Executive Mr. Khalid Sarfaraz Ghori said that Matco already
                                    produces paddy and rice from the same growing areas where corn is grown – Jhang,
                                    Okara, Pakpattan and has links with suppliers for corn. Matco has extensive
                                    experience of procurement of agricultural raw material and we have experience of
                                    export marketing for over 26 years and will be able to leverage that experience in
                                    trade marketing fairs to attract customers for corn starch internationally. Matco
                                    also has experience of selling its rice glucose division products, to the same
                                    customer base that will be targeted for corn starch in the food segment. There is
                                    already a big established market for corn starch and we expect that the market is
                                    further growing at a very rapid pace due to demand of textiles from Pakistan and
                                    Food & FMCG demand within Pakistan. There is only one existing large player in the
                                    market - leaving ample opportunity for a new entrant to provide options for
                                    customers.<br><br>
                                    Pakistan economy is started to rebound in FY 2021 as the impact of the pandemic
                                    gradually fades and domestic demand recovers. Moreover, structural reforms should
                                    boost investment, while foreign demand is expected to pick up in tandem with the
                                    global economic recovery. Asian Development Bank projects growth of 1.5% in FY 2021,
                                    and 4.0% in FY 2022.
                                    Matco Foods Ltd. being Social Economic growth partner delivering its roll that will
                                    generate vacancies and economic activities in Pakistan, Insha’Allah. The Project is
                                    expected to be complete by June, 2022.
                                    <br><br>
                                    <span>About Matco Foods </span>
                                    Matco Foods Limited is a leading publicly-traded agri-business in South-Asia,
                                    providing convenient packaged consumer goods and quality ingredients. The company’s
                                    products include predominantly basmati rice, rice syrup, rice protein, rice
                                    maltodextrin, Himalayan pink salt and other gourmet salts, spices, dessert mixes,
                                    rice flour, gram flour and many more.
                                    <br><br>

                                    Matco has global portfolio of more than 150 corporate customers. It is the only agro
                                    processing company in Pakistan in which the International Finance Corporation (IFC)
                                    (World Bank Group) has invested equity. The company exports to over 65 countries and
                                    the flagship brand Falak is available in over 50 countries globally.
                                    <br><br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news10" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/2018 - matco ipo - large.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Limited announces successful closing
                                    of its Book Building process of its IPO.</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, January 24th
                                    2018<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods Limited, one of Pakistan’s leading
                                    agri-business’s, with a global portfolio of over 150 corporate clients and exports
                                    to over 60 destinations worldwide, announced the successful closing of the book
                                    building process of its initial public offering on 24th January 2018. A total offer
                                    of 30,418,770 shares was made against the offer size of 29,143,000 million ordinary
                                    shares, at a strike price of Rs.26.00. The gross proceeds to Matco Foods Limited
                                    from this offering were Rs. 757 million before deducting underwriting discounts,
                                    commissions and offering expenses. Successful bidders shall be provisionally
                                    allotted 75% of the issue size i.e. 21,857,000, and the remaining 25% i.e. 7,286,000
                                    shall be offered to retail investors and the general public at Rs.26.00 per share.
                                    In case the retail and general portion of the issue remains unsubscribed, the shares
                                    will be allotted back to the successful bidders on pro rata basis. Date of Public
                                    Subscription is from 29th and 30th January, 2018 inclusive, from 9:00am and 5:00pm.
                                    Muslim Commercial Bank (MCB) acted as book-running managers for the offering, and
                                    Arif Habib Limited acted as the consultant to the issue.
                                    <br><br>
                                    Matco Foods Limited expects to use the net proceeds from this public offering for
                                    the expansion of its Rice Glucose and Protein Plant from 10,000 MT of glucose and
                                    1,000 MT of protein production capacity per annum to 30,000 MT of glucose and 3,000
                                    MT of protein respectively. <br><br>
                                    The offering was made only by means of a prospectus. A copy of the final prospectus
                                    related to the offering was filed with the Securities and Exchange Commission
                                    Pakistan may be downloaded from the following websites: www.matcofoods.com,
                                    www.arifhabib.com, www.mcb.com, www.psx.com and www.cdcipo.com.
                                    This press release shall not constitute an offer to sell or the solicitation of an
                                    offer to buy, nor shall there be any sale of these securities in any state or
                                    jurisdiction in which such offer, solicitation or sale would be unlawful prior to
                                    registration or qualification under the securities laws of any such state or
                                    jurisdiction.
                                    <br><br>
                                    <span>About Matco Foods</span>
                                    Matco Foods Limited is a leading publicly-traded agri-business in South-Asia,
                                    providing convenient packaged consumer goods and quality ingredients. The company’s
                                    products include predominantly basmati rice, rice syrup, rice protein, rice
                                    maltodextrin, Himalayan pink salt and other gourmet salts, spices, dessert mixes,
                                    rice flour, gram flour and many more.
                                    Matco has global portfolio of more than 150 corporate customers. It is the only agro
                                    processing company in Pakistan in which the International Finance Corporation (IFC)
                                    (World Bank Group) has invested equity. The company exports to over 65 countries and
                                    the flagship brand Falak is available in over 50 countries globally.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news11" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100"
                                src="{{ asset('frontend-assets/img/2018 - matco rice glucose - large.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Limited signs agreement for expansion
                                    of Rice Glucose and Rice Protein Plant</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, March 3rd
                                    2021<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods Limited signed an agreement for the supply of a
                                    20,000 Tons per year Rice Glucose manufacturing plant with Beijing Meckey
                                    Engineering Co. This new expansion will increase the total production capacity of
                                    the company to 30,000 Tons of Rice Glucose and 3,000 Tons of Rice Protein
                                    respectively per year..<br><br>
                                    Khalid Ghori, CEO of Matco Foods spoke at the signing ceremony that “The new plant
                                    will include 2,000 tons of rice protein section also and also a spray dryer plant to
                                    manufacture 2,000 tons of maltodextrin per year, which will contribute towards
                                    import substitution”
                                    The signing ceremony was witnessed by Jawed Ali Ghori, Chairman Matco Foods and Dr.
                                    Tariq Ghori, Director Sales & Marketing.
                                    <br><br>
                                    Matco Foods Limited is committed to ensuring the best quality food products for its
                                    customers around the world. The company’s steep ascent as the customers’ preferred
                                    brand in the local and international markets reflects its remarkable success in
                                    keeping its long-term pledge to its customers. In a historic milestone, Matco Foods
                                    Limited was formally listed on the Pakistan Stock Exchange (PSX) in the first IPO
                                    for the year 2018 adding another company in the Food Sector on the PSX board
                                    <br><br>
                                    <span>About Matco Foods</span>
                                    Matco Foods Limited is a leading publicly-traded agri-business in South-Asia,
                                    providing convenient packaged consumer goods and quality ingredients. The company’s
                                    products include predominantly basmati rice, rice syrup, rice protein, rice
                                    maltodextrin, Himalayan pink salt and other gourmet salts, spices, dessert mixes,
                                    rice flour, gram flour and many more.
                                    Matco has global portfolio of more than 150 corporate customers. It is the only agro
                                    processing company in Pakistan in which the International Finance Corporation (IFC)
                                    (World Bank Group) has invested equity. The company exports to over 65 countries and
                                    the flagship brand Falak is available in over 50 countries globally.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news12" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/2017 - oxfam - large.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Oxfam and Matco Foods team up against rural
                                    poverty</p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>Karachi, March 3rd
                                    2021<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Under the project called ‘Towards a Gender Transformative and
                                    Sustainable Basmati Rice Value Chain in Pakistan’: Matco and Oxfam aim to work with
                                    rice growers and workers in 10 villages in Punjab as a pilot project. The overall
                                    objectives of the project is "Empowered and organized women and men rice growers and
                                    workers in Punjab, Pakistan achieving better prices for their sustainably produced
                                    rice, earning a higher income, and lobbying for improved working
                                    conditions".<br><br>
                                    Expressing his views on the occasion, Faizan Ghori, Director, Matco Foods said, “As
                                    a responsible corporate citizen, Matco is delighted to partner with Oxfam to help
                                    improve the livelihood of farmers in the Basmati rice growing areas of Pakistan. We
                                    believe this initiative has both a social and commercial impact. Greater
                                    productivity and sustainable production of rice will help farmers and also
                                    strengthen Matco’s supply chain.”<br><br>
                                    Oxfam’s Programme Director Ms. Javeria Afzal and Senior Programme Manager Mr. Qaisar
                                    Arafat were present at the signing ceremony. Speaking at the MoU signing ceremony,
                                    Ms Javeria Afzal noted that rice growers in Pakistan have limited opportunities for
                                    learning improved farming practices such as integrated pest management, alternatives
                                    to chemical fertilizers and water management. Moreover, Ms Afzal said a lack of
                                    understanding of market dynamics means many growers are unable to get a fair price
                                    for their produce. “Rice growers, most of whom are women in children working for low
                                    wages, are among some of the most vulnerable and marginalized in the rice industry,”
                                    she said.<br><br>

                                    The goal of the collaboration is to fight poverty and improve food security by
                                    implementing a joint development project. Matco Foods has shown willingness to
                                    develop partnership and collaboration on rice value chain work in Pakistan. Under
                                    the Rice value chain project in Muridke, Sheikhupura district, Matco Foods will
                                    support in providing technical support on sustainable rice production practices and
                                    improve knowledge and agricultural practices at field level.<br><br>
                                    <span>About Matco Foods</span>
                                    Matco Foods Limited is a leading publicly-traded agri-business in South-Asia,
                                    providing convenient packaged consumer goods and quality ingredients. The company’s
                                    products include predominantly basmati rice, rice syrup, rice protein, rice
                                    maltodextrin, Himalayan pink salt and other gourmet salts, spices, dessert mixes,
                                    rice flour, gram flour and many more.
                                    Matco has global portfolio of more than 150 corporate customers. It is the only agro
                                    processing company in Pakistan in which the International Finance Corporation (IFC)
                                    (World Bank Group) has invested equity. The company exports to over 65 countries and
                                    the flagship brand Falak is available in over 50 countries globally.<br><br>


                                    <span>About Oxfam in Pakistan</span>
                                    Oxfam has been working in Pakistan since 1973. We work with local groups,
                                    organisations and government to improve the life and livelihoods of people living in
                                    poverty and social exclusion. We also work to provide humanitarian assistance and
                                    promote a safe environment for people affected by disasters.
                                    We focus on ensuring poor women’s access to land and economic opportunities; ending
                                    violence against women and girls; ensuring people’s food security and access to
                                    essential services; increasing communities’ resilience to disasters and climate
                                    change. We work with local civil society to promote social justice, equal rights for
                                    all and responsive governance.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news13" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/fi.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Showcases Innovation at Food
                                    Ingredient Europe 2022
                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>6-8 December 2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods proudly participated in Food Ingredient Europe 2022, one
                                    of the leading global food ingredient exhibitions.<br><br>
                                    At the event, we showcased our commitment to innovation and excellence in the food
                                    industry. Visitors had the opportunity to explore our diverse range of our
                                    innovative ingredients, including starches, sweeteners, maltodextrins, dextrose
                                    monohydrate, glucose, rice protein, and gluten.<br><br>
                                    Food Ingredient Europe provided us with an excellent platform to connect with
                                    industry leaders, explore new market trends, and showcase our products and
                                    capabilities to a global audience. We are proud to have been part of such a
                                    prestigious event and look forward to continuing to deliver excellence in the food
                                    industry.
                                    <br><br>






                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news14" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/Gulfood new.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Gulfood 2022: Matco Foods Continues to Lead with
                                    Quality and Innovation
                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>13-17 February 2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods, Pakistan’s leading Food Corporation and the largest
                                    exporter of Basmati rice showcased its excellence once again at Gulfood 2022 in
                                    Dubai. As one of the most significant events in the global food trade economy,
                                    Gulfood provided an exceptional platform for Matco Foods to exhibit its latest
                                    products and innovations.<br><br>
                                    During Gulfood 2022, Matco Foods presented its diverse range of products, including
                                    Basmati Rice, Organic Basmati Rice, Himalayan Pink Salt, and a variety of Spices and
                                    Herbs.<br><br>
                                    It was an honor to have Mr. Abdul Razak Dawood, Adviser for Commerce and Investment,
                                    visit the Matco Foods Stall at Gulfood, Dubai.
                                    <br><br>
                                    Reflecting on the event, Jawed Ali Ghori, Chairman of Matco Foods, emphasized the
                                    importance of Gulfood as a platform for international collaboration, stating,
                                    “Participating in Gulfood allows us to connect with major international buyers and
                                    sellers. In a rapidly evolving global market, this event serves as an ideal forum to
                                    strengthen existing partnerships and explore new opportunities.”
                                    <br><br>
                                    Matco Foods' participation in Gulfood 2022 underscores its commitment to delivering
                                    quality products and innovative solutions to its customers worldwide.







                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news15" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/Gulfood Manufacturing.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods participated in Gulfood Manufacturing
                                    2022,
                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>8-10 November 2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods participated in Gulfood Manufacturing 2022 highlighting
                                    its commitment to innovation and excellence in the food industry.<br><br>
                                    At our stall, visitors experienced an extensive display of high-quality food
                                    products. We proudly showcased our diverse range of innovative ingredients,
                                    including starches, sweeteners, maltodextrins, dextrose monohydrate, glucose, rice
                                    protein, and gluten.<br><br>
                                    Gulfood Manufacturing provided us with an exceptional platform to connect with
                                    industry leaders, explore new market trends, and showcase our commitment to quality
                                    and innovation in the food industry.
                                    <br><br>
                                    We engaged in insightful discussions, established valuable connections, and received
                                    positive feedback on our innovative product range.<br><br>
                                    As a leading player in the food industry, Matco Foods is dedicated to delivering
                                    excellence and meeting the evolving needs of our customers worldwide. We are
                                    grateful for the opportunity to participate in such a prestigious event and look
                                    forward to continuing to drive innovation and excellence in the food industry.








                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade ne-modals" id="news16" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/hum masala.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Shines at Hum Masala Food Festival
                                    Lahore 2022

                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods, showcased its diverse range of products at the Hum
                                    Masala Food Festival in Lahore. The festival, celebrated for its exploration of
                                    culinary delights, provided the perfect platform for Matco Foods to display its wide
                                    range of offerings.<br><br>
                                    Matco Foods proudly presented its diverse range of high-quality food products at the
                                    festival. In addition to showcasing its products, Matco Foods offered irresistible
                                    discounts to festival-goers. The exclusive deals made it even more enticing for
                                    visitors to explore and purchase their favorite products.
                                    <br><br>
                                    The response from festival-goers was overwhelmingly positive, with many expressing
                                    their love for Matco Foods' diverse range of products. From the convenience of
                                    pre-packaged mixes to the promise of high-quality ingredients, visitors were
                                    impressed by the variety and quality offered by Matco Foods.<br><br>









                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ne-modals" id="news17" tabindex="-1" role="dialog" aria-labelledby="awardLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/IFTECH.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Excels at IFTECH Pakistan 2022
                                    Exhibition

                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>22-24 September 2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods proudly participated in the IFTECH Pakistan 2022
                                    Exhibition, one of the premier ingredient-based exhibitions in the region. Held
                                    annually, IFTECH Pakistan showcases the latest innovations and developments in the
                                    food industry.
                                    <br><br>
                                    At the exhibition, Matco Foods showcased its high-quality corn starches, rice
                                    glucose, and protein products. Our booth attracted a lot of attention, providing us
                                    with an excellent opportunity to showcase our innovative ingredients and connect
                                    with industry professionals.
                                    <br><br>
                                    Participating in IFTECH Pakistan allowed Matco Foods to strengthen its presence in
                                    the market and highlight its commitment to delivering top-notch products to
                                    customers worldwide.<br><br>
                                    We are grateful for the opportunity to participate in such a prestigious event and
                                    look forward to continuing to serve our customers with the best quality ingredients.









                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade ne-modals" id="news18" tabindex="-1" role="dialog"
        aria-labelledby="awardLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/matco starch plant.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Inauguration of Matco Corn Starch Plant 2022

                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>26 August 2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods proudly participated in the IFTECH Pakistan 2022
                                    Today, we are proud and delighted to announce the inauguration of our new Corn
                                    Starch Plant in the Special Economic Zone Faisalabad, FIEDMC.
                                    <br><br>
                                    This state-of-the-art facility marks a significant milestone for Matco Foods,
                                    further strengthening our position as a leading player in the food industry.
                                    <br><br>
                                    "We are thrilled to unveil our new Corn Starch Plant, which will enable us to meet
                                    the ever-growing demand for this versatile product," said Bilal Ghori, Director of
                                    Matco Foods. "I extend special thanks to all our valuable partners who have enabled
                                    us to achieve this goal in record time. We look forward to forming new partnerships
                                    and expanding our reach in the market."<br><br>
                                    The inauguration of the Corn Starch Plant reaffirms our commitment to innovation,
                                    quality, and meeting the evolving needs of our customers. We are excited about the
                                    opportunities that lie ahead and remain dedicated to delivering excellence in all
                                    that we do.









                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade ne-modals" id="news19" tabindex="-1" role="dialog"
        aria-labelledby="awardLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/independence.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Celebrates Independence Day 2022


                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">The company organized a special event to commemorate this
                                    significant day, where employees came together to celebrate the spirit of
                                    patriotism. The event featured flag hoisting, national anthem recitation, and
                                    various cultural performances.
                                    <br><br>
                                    "We take immense pride in celebrating Pakistan's Independence Day at Matco Foods,"
                                    said Wajeeha Khan, HR Manager at Matco Foods. "It's a day to honor our freedom
                                    fighters and reaffirm our commitment to the progress and prosperity of our nation."
                                    <br><br>
                                    The celebration was a testament to Matco Foods' strong Pakistani identity and its
                                    dedication to contributing to the country's growth and development.<br><br>










                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade ne-modals" id="news20" tabindex="-1" role="dialog"
        aria-labelledby="awardLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/womens day.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Celebrating International Women's Day 2022 at
                                    Matco Foods



                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods celebrated International Women's Day 2022 with great
                                    enthusiasm and dedication. Recognizing the invaluable contribution of women to the
                                    company's success, Matco Foods organized a special event to honor and celebrate its
                                    female employees.

                                    <br><br>
                                    The event included various activities such as inspirational talks, panel
                                    discussions, and recognition awards for outstanding women employees. It was an
                                    opportunity to acknowledge the significant role that women play in every aspect of
                                    Matco Foods' operations, from production to management.
                                    <br><br>
                                    International Women's Day at Matco Foods was a testament to the company's commitment
                                    to gender equality and empowerment in the workplace.<br><br>










                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade ne-modals" id="news21" tabindex="-1" role="dialog"
        aria-labelledby="awardLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/food festival.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Steals the Show at Karachi Eat Food
                                    Festival 2022



                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods, a leading name in the food industry, once again
                                    captivated the taste buds of food enthusiasts at the Karachi Eat Food Festival 2022.
                                    The festival, known for its celebration of diverse culinary experiences, provided
                                    the perfect platform for Matco Foods to showcase its tempting array of fries, fried
                                    chicken, and biryani.

                                    <br><br>
                                    At the festival, Matco Foods offered a delectable selection of irresistible treats,
                                    including crispy fries, mouthwatering fried chicken, and aromatic biryani. Matco
                                    Foods’ stall theme of fried chicken stole the show at the festival. The aroma of
                                    freshly fried chicken, coupled with the tantalizing flavors, attracted a large crowd
                                    to the Matco Foods stall. Visitors couldn't resist the temptation as they indulged
                                    in the crispy, golden goodness of Matco Foods' signature fried chicken.
                                    <br><br>
                                    The response from festival-goers was overwhelming, with many expressing their love
                                    for Matco Foods' delicious offerings. The perfect blend of flavors, quality
                                    ingredients, and impeccable preparation left a lasting impression on everyone who
                                    visited the Matco Foods stall.<br><br>
                                    "We are thrilled to have been a part of Karachi Eat Food Festival 2022," said
                                    Iftikhar Farooqui – Senior Marketing manager of Matco Foods. "It was truly
                                    gratifying to see so many people enjoying our food. We are committed to delivering
                                    exceptional taste and quality, and the positive feedback we received at the festival
                                    is a testament to that."<br><br>
                                    Matco Foods' participation in Karachi Eat Food Festival 2022 was yet another
                                    successful chapter in its journey to delight food enthusiasts with its delicious and
                                    flavorful offerings.










                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade ne-modals" id="news22" tabindex="-1" role="dialog"
        aria-labelledby="awardLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/Pak-Iraq Fair.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Exhibits at Pak-Iraq Fair 2022,
                                    Strengthening Bilateral Ties



                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>15-17 March 2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods, Pakistan’s leading Food Corporation, played a
                                    significant role in strengthening bilateral ties between Pakistan and Iraq at the
                                    Pak-Iraq Fair 2022.

                                    <br><br>
                                    The event provided an excellent platform for Matco Foods to showcase its products
                                    and explore new business opportunities in Iraq.
                                    <br><br>
                                    "It was an honor meeting Pakistan's Ambassador to Iraq, Mr. Ahmed Amjad Ali, at our
                                    stall. Our team also had the pleasure of meeting with the Former Prime Minister of
                                    Iraq, Mr. Ayad Allawi, who visited our stall today at the Pak-Iraq Fair," said
                                    Faizan Ali Ghori, Director of Matco Foods.
                                    <br><br>
                                    The participation of Matco Foods in the Pak-Iraq Fair 2022 reflects the company's
                                    commitment to expanding its presence in international markets and contributing to
                                    the strengthening of bilateral trade relations between Pakistan and Iraq.<br><br>











                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade ne-modals" id="news23" tabindex="-1" role="dialog"
        aria-labelledby="awardLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/Basmati Rice Award.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Receives Highest Exporter of Basmati
                                    Rice Award 2022




                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>27 September 2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods Limited is proud to be awarded The Highest Exporter of
                                    Basmati Rice Award from Pakistan for the year 2022 by the Rice Exporters Association
                                    of Pakistan (REAP).

                                    <br><br>
                                    We extend our sincere thanks to our valuable partners and customers for their
                                    unwavering support and trust, which has been instrumental in achieving this
                                    remarkable award.
                                    <br><br>
                                    At Matco Foods, we are committed to serving our customers with dedication and
                                    excellence. This award is a testament to our relentless pursuit of quality and
                                    innovation in the food industry.
                                    <br><br>
                                    We are honored to contribute to the economic landscape of Pakistan and look forward
                                    to continuing our journey of excellence. Thank you for your continued trust and
                                    support.<br><br>











                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade ne-modals" id="news24" tabindex="-1" role="dialog"
        aria-labelledby="awardLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/Saudi Foodex.jpg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Shines at Saudi Foodex 2022




                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>13-16 September 2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods, Pakistan’s leading Food Corporation, showcased its
                                    excellence once again at Saudi Foodex 2022. Held in Riyadh, Saudi Arabia, the event
                                    provided an excellent platform for Matco Foods to exhibit its wide range of products
                                    and explore new business opportunities in the Saudi market.

                                    <br><br>
                                    A highlight of the event was the visit of Pakistan's Ambassador to the Kingdom of
                                    Saudi Arabia, Mr. Ameer Khurram Rathore, to the Matco Foods stall. His visit
                                    underscored the strong bilateral relations between Pakistan and Saudi Arabia and the
                                    importance of such events in promoting trade between the two countries.
                                    <br><br>
                                    Matco Foods' participation in Saudi Foodex 2022 reflects the company's commitment to
                                    expanding its presence in international markets and delivering quality products to
                                    consumers worldwide.
                                    <br><br>












                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade ne-modals" id="news25" tabindex="-1" role="dialog"
        aria-labelledby="awardLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awardLabel">News / Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('frontend-assets/img/SIAL Paris.jpeg') }}"
                                alt="lastest_news" />
                        </div>
                        <div class="col-md-6">
                            <div class="most_lastest_news_details">
                                <p class="headLine two-row-ellipsis">Matco Foods Excels at SIAL Paris 2022

                                </p>
                                <p class="date"><i class="fa fa-calendar mr-2"></i>15-19 October 2022<i
                                        class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                <p class="desc">Matco Foods proudly exhibited its diverse range of high-quality food
                                    products at SIAL Paris 2022, the world's largest food innovation exhibition.

                                    <br><br>
                                    At our stall, visitors had the opportunity to explore our premium Basmati rice,
                                    aromatic spices, and other specialty food items. We showcased our commitment to
                                    quality, innovation, and sustainability in every product.
                                    <br><br>
                                    SIAL Paris provided us with an exceptional platform to connect with industry
                                    leaders, explore new market trends, and expand our global network. It was a valuable
                                    opportunity to engage with potential partners, customers, and stakeholders from
                                    around the world.

                                    <br><br>
                                    We are grateful for the opportunity to participate in such a prestigious event and
                                    showcase the excellence of Pakistani food products on the global stage. Matco Foods
                                    remains dedicated to delivering exceptional quality and taste, and we look forward
                                    to continuing to serve our customers worldwide with dedication and excellence.














                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade ne-modals" id="news26" tabindex="-1" role="dialog"
    aria-labelledby="awardLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="awardLabel">News / Events</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-100" src="{{ asset('frontend-assets/img/Campaign for Sustainable.jpg') }}"
                            alt="lastest_news" />
                    </div>
                    <div class="col-md-6">
                        <div class="most_lastest_news_details">
                            <p class="headLine two-row-ellipsis">Matco Foods Joins "SRP Around The World" Campaign for Sustainable Rice Production 2022


                            </p>
                            <p class="date"><i class="fa fa-calendar mr-2"></i>5 December 2022<i
                                    class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                            <p class="desc">Matco Foods is proud to participate in the "SRP Around The World" campaign in collaboration with the Sustainable Rice Platform. As part of this initiative, we are increasing awareness in the agriculture community regarding sustainability in the rice industry in Pakistan. Through our participation, we aim to promote sustainable rice production practices and contribute to the development of a more environmentally and socially responsible rice sector.

                                <br><br>
                                At Matco Foods, we are committed to sustainable practices and are dedicated to creating a positive impact in the rice industry. We believe that by working together with organizations like the Sustainable Rice Platform, we can drive positive change and build a more sustainable future for rice production in Pakistan and around the world.













                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






    @section('afterScripts')
        <script>
            $(document).ready(function() {
                if (window.matchMedia("(max-width: 767px)").matches) {
                    $(".list .news-list").slice(0, 5).css('display', 'flex');
                    $("body").on('click', '.read_more_news.view-more', function(e) {
                        e.preventDefault();
                        $(".list .news-list:hidden").slice(0, 5).css('display', 'flex');
                        if ($(".list .news-list:hidden").length == 0) {
                            $(".list .view-more-btn").css('display', 'none');
                        }
                    })
                }

            });
        </script>
    @endsection
</x-guest-layout>
