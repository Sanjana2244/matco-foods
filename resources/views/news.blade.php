<x-guest-layout>
    <h1 class="text-center my-5 text-uppercase primary-color">Latest News & Events</h1>
    <div class="row lastest_news m-0">
        <div class="col-md-4 p-0 cursor-pointer d-none d-sm-none d-md-block d-lg-block" data-toggle="modal"
            data-target="#covid">
            <div class="lastest_post" style="background-image: url('{{ asset('frontend-assets/img/2024-9.jpg') }}');">
                <div class="over-lay">
                    <div class="content">
                        <h6 class="text-center text-white two-row-ellipsis">Matco Foods Product Launching Ceremony, 2024"
                        </h6>
                        <p class="date text-center text-white mt-3"><i class="fa fa-calendar mr-2"></i>May / 3 /2024
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-0 cursor-pointer d-none d-sm-none d-md-block d-lg-block" data-toggle="modal"
            data-target="#newsEventModalnew">
            <div class="lastest_post" style="background-image: url('{{ asset('frontend-assets/img/2024-7.jpg') }}');">
                <div class="over-lay">
                    <div class="content">
                        <h6 class="text-center text-white two-row-ellipsis">Matco Foods at Karachi Eat Food Festival
                            2024!"
                        </h6>
                        <p class="date text-center text-white mt-3"><i class="fa fa-calendar mr-2"></i>January /2024
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-0 cursor-pointer d-none d-sm-none d-md-block d-lg-block" data-toggle="modal"
            data-target="#award">
            <div class="lastest_post" style="background-image: url('{{ asset('frontend-assets/img/2024-10.jpg') }}');">
                <div class="over-lay">
                    <div class="content">
                        <h6 class="text-center text-white two-row-ellipsis">Falak is Now Available at Noon UAE!"</h6>
                        <p class="date text-center text-white mt-3"><i class="fa fa-calendar mr-2"></i>May / 7 /2024
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
                            <p class="headLine two-row-ellipsis">Matco Foods Excels at Gulfood Dubai 2024"
                            </p>
                        </div>
                        <img class="w-100" src="{{ asset('frontend-assets/img/2024-6.jpg') }}" alt="lastest_news" />
                        <div class="text-center most_lastest_news_details pt-0 pt-sm-0 pt-md-5 pt-lg-5">
                            <p class="headLine two-row-ellipsis d-none d-sm-none d-md-block d-lg-block">Matco Foods
                                Excels at Gulfood Dubai 2024"</p>
                            <p class="date"><i class="fa fa-calendar mr-2"></i>19-23 feb 2024</p>
                            <p class="desc px-3 three-row-ellipsis">Matco Foods proudly participated in Gulfood Dubai
                                2024, one of the world's largest and most influential food and beverage exhibitions.
                                Showcasing Excellence At the event, we showcased our diverse range of high-quality
                                food products, including Basmati rice, spices, and recipe mixes.Connecting with
                                Industry Leaders Gulfood Dubai provided us with an exceptional platform to connect
                                with industry leaders, explore new market trends, and showcase our commitment to quality
                                and innovation in the food industry.Positive Feedback and Valuable Connections We
                                engaged in insightful discussions, established valuable connections, and received
                                positive feedback on our innovative product range.Committed to ExcellenceMatco
                                Foods is dedicated to delivering excellence and meeting the evolving needs of our
                                customers worldwide.Looking Ahead We are grateful for the opportunity to
                                participate in such a prestigious event and look forward to continuing to drive
                                innovation and excellence in the food industry.Thank you to everyone who visited our
                                booth at Gulfood Dubai 2024. Your support and feedback are invaluable as we continue to
                                grow and evolve.
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
                            @php

                                $const = config('events.news');
                                $index = true;
                                $heading = 0;
                                $sortedConst = collect($const)->sortByDesc('id')->values();

                            @endphp


                            {{-- 2022 --}}

                            @foreach ($sortedConst as $key => $news)
                                <div class="row mx-0 mb-2 cursor-pointer news-list " data-toggle="modal"
                                    data-target="#news{{ $key }}" data-location="{{ $news['heading'] }}">
                                    <div class="col-5 col-sm-5 col-md-5 pl-0"><img class="w-100"
                                            src="{{ $news['image'] }}" alt="news" />
                                    </div>
                                    <div class="col-7 col-sm-7 col-md-7">
                                        <p class="headLine mb-1 three-row-ellipsis">{{ $news['heading'] }}</p>
                                        <p class="date one-row-ellipsis"><i
                                                class="fa fa-calendar mr-2"></i>{{ $news['date'] }}</p>
                                    </div>
                                </div>
                                
                            @endforeach

                            <div class="row mx-0 mb-6 cursor-pointer my-4 text-center d-md-none view-more-btn"
                            >
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
                                <img class="w-100" src="{{ asset('frontend-assets/img/2024-9.jpg') }}"
                                    alt="lastest_news" />
                            </div>
                            <div class="col-md-6">
                                <div class="most_lastest_news_details">
                                    <p class="headLine two-row-ellipsis">Matco Foods Product Launching Ceremony, 2024"
                                    </p>
                                    <p class="date"><i class="fa fa-calendar mr-2"></i>3 May 2024<i
                                            class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                    <p class="desc">We're excited to introduce our latest range of recipe mixes,
                                        meticulously crafted to bring authentic flavors straight to your kitchen. Our
                                        newest offerings include:<br><br>
                                        Biryani Range: Experience the rich and aromatic flavors of traditional biryani,
                                        perfected in our easy-to-use recipe mix.<br><br>
                                        Curry Range: Delight your taste buds with our flavorful curry range, made with
                                        the finest ingredients to ensure an unforgettable dining experience.<br><br>
                                        BBQ Range: Elevate your BBQ game with our specially curated range of BBQ recipe
                                        mixes, designed to add a burst of flavor to your grilled dishes.<br><br>
                                        Garlic & Ginger Paste: Our convenient garlic and ginger paste is the perfect
                                        addition to any dish, adding depth and richness to your cooking.<br<<br>
                                            We want to extend a huge thank you to our incredible team and all our
                                            stakeholders for making this launch possible. Here's to many more successes
                                            together!"


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
                                <img class="w-100" src="{{ asset('frontend-assets/img/2024-10.jpg') }}"
                                    alt="lastest_news" />
                            </div>
                            <div class="col-md-6">
                                <div class="most_lastest_news_details">
                                    <p class="headLine two-row-ellipsis">Falak is Now Available at Noon UAE!"</p>
                                    <p class="date"><i class="fa fa-calendar mr-2"></i>May 7th
                                        2024<i class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                    <p class="desc">We are delighted to announce that our premium brand, Falak, is
                                        now available on Noon UAE!<br><br>
                                        Now, you can conveniently order your favorite Falak products and have them
                                        delivered straight to your doorstep anywhere in the UAE. Experience the
                                        exquisite taste and exceptional quality of Falak, now available at Noon
                                        UAE!<br><br>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <img class="w-100" src="{{ asset('frontend-assets/img/2024-6.jpg') }}"
                                    alt="lastest_news" />
                            </div>
                            <div class="col-md-6">
                                <div class="most_lastest_news_details">
                                    <p class="headLine two-row-ellipsis">Matco Foods Excels at Gulfood Dubai 2024</p>
                                    <p class="date"><i class="fa fa-calendar mr-2"></i>19-23 feb 2024<i
                                            class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                    <p class="desc">Matco Foods proudly participated in Gulfood Dubai 2024, one of
                                        the world's largest and most influential food and beverage
                                        exhibitions.<br><br><strong>Showcasing Excellence</strong><br><br>At the event,
                                        we showcased our diverse range of high-quality food products, including Basmati
                                        rice, spices, and recipe mixes.<br><br>
                                        <strong>Connecting with Industry Leaders</strong><br><br>
                                        Gulfood Dubai provided us with an exceptional platform to connect with industry
                                        leaders, explore new market trends, and showcase our commitment to quality and
                                        innovation in the food industry.
                                        <br><br><strong>Positive Feedback and Valuable Connections
                                        </strong><br><br>
                                        We engaged in insightful discussions, established valuable connections, and
                                        received positive feedback on our innovative product range.
                                        <br><br><strong>Committed to Excellence
                                        </strong><br><br>
                                        Matco Foods is dedicated to delivering excellence and meeting the evolving needs
                                        of our customers worldwide.
                                        <br><br><strong>Looking Ahead
                                        </strong><br><br>
                                        We are grateful for the opportunity to participate in such a prestigious event
                                        and look forward to continuing to drive innovation and excellence in the food
                                        industry.
                                        <br><br>
                                        Thank you to everyone who visited our booth at Gulfood Dubai 2024. Your support
                                        and feedback are invaluable as we continue to grow and evolve.



                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade ne-modals" id="newsEventModalnew" tabindex="-1" role="dialog"
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
                                <img class="w-100" src="{{ asset('frontend-assets/img/2024-7.jpg') }}"
                                    alt="lastest_news" />
                            </div>
                            <div class="col-md-6">
                                <div class="most_lastest_news_details">
                                    <p class="headLine two-row-ellipsis">Matco Foods at Karachi Eat Food Festival 2024!
                                    </p>
                                    <p class="date"><i class="fa fa-calendar mr-2"></i>jan 2024<i
                                            class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author</p>
                                    <p class="desc">Matco Foods was thrilled to be a part of the Karachi Eat Food
                                        Festival 2024, and it was an absolute delight to see the overwhelming response
                                        from the visitors. Our stall, designed in the nostalgic shape of the old Empress
                                        Market, became an instant hit, resonating perfectly with our theme, 'Purana
                                        Chaawal'.<br><br>
                                        The festival attendees were captivated by the aesthetics of our stall and
                                        thoroughly enjoyed the experience. Many influencers covered our stall, praising
                                        the attention to detail and the ambiance we created.<br><br>
                                        We engaged with our visitors through samplings, allowing them to taste our
                                        delicious offerings. Our photo booth was a major attraction, offering a fun and
                                        interactive way for visitors to engage with our brand.<br><br>
                                        At the event, we proudly served dishes, including the renowned Karachi Biryani,
                                        Makta Fries, flavorful soups, and crispy fried chicken. It was a joy to see
                                        everyone relishing the authentic flavors we had to offer<br><br>
                                        We are incredibly grateful for the overwhelming response and look forward to
                                        participating in more such events, bringing the best of Matco Foods to food
                                        lovers everywhere.

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
                                        Medal by President Arif Alvi at Rice Exporters Association Pakistan's 13th
                                        Export
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
        @foreach ($sortedConst as $key => $news)
            <div class="modal fade ne-modals" id="news{{ $key }}" tabindex="-1" role="dialog"
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
                                    <img class="w-100" src="{{ asset($news['image']) }}" alt="lastest_news" />
                                </div>
                                <div class="col-md-6">
                                    <div class="most_lastest_news_details">
                                        <p class="headLine two-row-ellipsis">{{ $news['heading'] }}"</p>
                                        <p class="date"><i class="fa fa-calendar mr-2"></i>{{ $news['date'] }}<i
                                                class="fa fa-minus mx-2"></i> <i class="fa fa-user mr-2"></i>Author
                                        </p>
                                        <p class="desc" style="white-space:pre-line">
                                            {!! $news['description'] !!}

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach










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
                $(document).ready(function() {

                    $('.news-list').click(function() {

                        var modalId = $(this).data('target');

                        $(modalId).modal('show');
                    });
                });
            </script>
        @endsection
</x-guest-layout>
