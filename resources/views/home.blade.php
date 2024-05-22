<x-guest-layout>
    <section class="home-section-1">
        @component('components.slider-component', [
            'sliders' => $sliders,
            ])
        @endcomponent
        <div class="mouse_scroll_down text-center">
            <a href="#know-us"><img src="{{ asset('frontend-assets/img/mouseDown.png') }}" alt="scroll_down"></a>
        </div>
    </section>
    <section id="know-us" class="know_us_better py-5">
        <h2 class="text-center heading-knw pb-4 pb-sm-4 pb-md-4 pb-lg-4 px-5 px-sm-5 px-md-0 px-lg-0 mb-0">KNOW US BETTER
        </h2>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-9 text-center mission">
                    <img class="mb-4 mb-sm-4 mb-md-4 mb-lg-4" src="{{ asset('frontend-assets/img/mission.png') }}"
                        alt="scroll_down">
                    <h4 class="text-uppercase mb-4 mb-sm-4 mb-md-4 mb-lg-4">{{ $info[0]->title }}</h4>
                    <p class="desc mb-0 mb-sm-0 mb-md-4 mb-lg-4">{{ $info[0]->description }}</p>
                </div>
            </div>
        </div>
    </section>
    @if ($productSlider)
        <section class="products">
            @foreach ($productSlider as $key => $item)
                <x-product-banner buttonLink="{{ $item->link }}" buttonName="{{ $item->link_text }}"
                    bannerTitle="{{ $item->title }}" bannerTagline="{{ $item->tagline }}"
                    bannerDescription="{{ $item->description }}"
                    bannerURL="{{ $agent->isMobile() ? optional($item->mobileFile)->url : optional($item->file)->url }}">
                </x-product-banner>
            @endforeach
        </section>
    @endif
    @if (count($newSlider))
        <section class="news my-5 px-4 px-sm-4 px-md-0 px-lg-0 text-center">
            <h1 class="">Latest News & Events</h1>
            <div class="row lastest_news m-0 pt-3 pb-5">
                <div class="col-md-4 p-0 cursor-pointer d-none d-sm-none d-md-block d-lg-block" data-toggle="modal"
                    data-target="#newsEventModal">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/2024-9.jpg') }}');">
                        <div class="over-lay">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis">Matco Foods Product Launching Ceremony, 2024"                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 cursor-pointer d-none d-sm-none d-md-block d-lg-block" data-toggle="modal"
                    data-target="#newsEventModal">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/2024-7.jpg') }}');">
                        <div class="over-lay">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis">Matco Foods at Karachi Eat Food Festival 2024!"
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-0 cursor-pointer d-none d-sm-none d-md-block d-lg-block" data-toggle="modal"
                    data-target="#newsEventModal">
                    <div class="lastest_post"
                        style="background-image: url('{{ asset('frontend-assets/img/2024-10.jpg') }}');">
                        <div class="over-lay">
                            <div class="content">
                                <h6 class="text-center text-white two-row-ellipsis">Falak is Now Available at Noon UAE!"

                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 new-slider p-0 d-block d-sm-block d-md-none d-lg-none mb-3">
                    <div class="owl-carousel owl-theme">
                        <div class="item" data-toggle="modal" data-target="#newsEventModal">
                            <div class="lastest_post"
                                style="background-image: url('{{ asset('frontend-assets/img/2024-9.jpg') }}');">
                            </div>
                            <div class="content headline p-2 mt-4">
                                <p class="text-center one-row-ellipsis primary-color">Matco Foods Product Launching Ceremony, 2024"</p>
                            </div>
                        </div>
                        <div class="item" data-toggle="modal" data-target="#newsEventModal">
                            <div class="lastest_post"
                                style="background-image: url('{{ asset('frontend-assets/img/2024-7.jpg') }}');">
                            </div>
                            <div class="content headline primary-color p-2 mt-4">
                                <p class="text-center one-row-ellipsis">Matco Foods at Karachi Eat Food Festival 2024!"</p>
                            </div>
                        </div>
                        <div class="item" data-toggle="modal" data-target="#newsEventModal">
                            <div class="lastest_post"
                                style="background-image: url('{{ asset('frontend-assets/img/2024-10.jpg') }}');">
                            </div>
                            <div class="content headline p-2 mt-4">
                                <p class="text-center one-row-ellipsis primary-color">Falak is Now Available at Noon UAE!"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <x-read-more button_link="/news" button_name="{{ $info[0]->link_text }}">
                </x-read-more>
            {{-- <div class="owl-carousel owl-theme">
                @foreach ($newSlider->chunk(3) as $news)
                    <div class="item text-center">
                        @foreach ($news as $item)
                            <div class="my-4 my-sm-4 my-md-5 my-lg-5 px-2 px-sm-2 px-md-0 px-lg-0">
                                <h4 class="date">{{ $item->date->format(config('global.DATE_FORMAT')) }}</h4>
                                <a class="link" href="#">{{ $item->title }}</a>
                            </div>
                            @if (!$loop->last)
                                <hr>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div> --}}
        </section>

    @endif
</x-guest-layout>
