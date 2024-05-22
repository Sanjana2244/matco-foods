<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
            ])
        @endcomponent
    </section>
    <section class="products py-3 container">
        {{-- <div class="landing_text text-center">
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out
                print, graphic or web designs. The passage is attributed to an unknown …</p>
        </div> --}}
        <div class="product_list_images mt-5">
            <div class="row">
                <div class="col-md-6 product_list">
                    <a href="{{ route('pages.falak') }}" class="d-block my-4 prod-falak active">Falak – The Flagship
                        Brand</a>
                    <a href="{{ route('pages.basmatiRice') }}" class="d-block prod-basmati my-4">Basmati Rice</a>
                    <a href="{{ route('pages.nonBasmatiRice') }}" class="d-block prod-nonbasmati my-4">Non-Basmati
                        Rice</a>
                    <a href="{{ route('pages.organicRice') }}" class="d-block prod-organic my-4">Organic Rice</a>
                    <a href="{{ route('pages.riceSyrup') }}" class="d-block prod-rice-syrup my-4">Rice Syrup</a>
                    <a href="{{ route('pages.riceProtien') }}" class="d-block prod-rice-protein my-4">Rice Protein</a>
                    <a href="{{ route('pages.solids') }}" class="d-block prod-solid my-4">Maltodextrin / Syrup Solids</a>
                    <a href="{{ route('pages.dextroseMonohydrate') }}" class="d-block dextrose-mono my-4">Organic Dextrose Monohydrate</a>

                    <a href="{{ route('pages.otherLeadingBrands') }}" class="d-block prod-other my-4">Other Leading
                        Brands</a>
                    <a href="{{ route('pages.privateLabelling') }}" class="d-block prod-private my-4">Private
                        Labelling</a>
                    <a href="{{ route('pages.maize') }}" class="d-block prod-maize my-4">Maize Corn Starch</a>
                    {{-- <a href="!#" class="d-block my-4">Spices & Herbs</a>
                    <a href="!#" class="d-block my-4">Salt</a>
                    <a href="!#" class="d-block my-4">Flours</a>
                    <a href="!#" class="d-block my-4">Desserts</a>
                    <a href="!#" class="d-block my-4">Pastes</a>
                    <a href="!#" class="d-block my-4">Maize Corn Starch</a> --}}
                </div>
                <div class="col-md-6 product_images">
                    <div class="owl-carousel owl-theme">
                        <div class="item text-center prod-falak">
                            <img src="{{ asset('frontend-assets/img/falak-new.png') }}" alt="falak" />
                            <h5><a href="{{ route('pages.falak') }}" class="d-block my-3">Falak – The Flagship
                                    Brand</a></h5>
                            <x-read-more button_link="{{ route('pages.falak') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item text-center prod-basmati">
                            <img src="{{ asset('frontend-assets/img/basmati-new.png') }}" alt="basmati" />
                            <h5><a href="{{ route('pages.basmatiRice') }}" class="d-block my-3">Basmati Rice</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.basmatiRice') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item text-center prod-nonbasmati">
                            <img src="{{ asset('frontend-assets/img/3 - Non-Basmati Rice.png') }}" alt="Non-Basmati Rice" />
                            <h5><a href="{{ route('pages.nonBasmatiRice') }}" class="d-block my-3">Non-Basmati
                                    Rice</a></h5>
                            <x-read-more button_link="{{ route('pages.nonBasmatiRice') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item text-center prod-organic">
                            <img src="{{ asset('frontend-assets/img/5 - Organic Rice.png') }}" alt="Organic Rice" />
                            <h5><a href="{{ route('pages.organicRice') }}" class="d-block my-3">Organic Rice</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.organicRice') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item text-center prod-rice-syrup">
                            <img src="{{ asset('frontend-assets/img/6 - Rice Syrup.png') }}" alt="Rice Syrup" />
                            <h5><a href="{{ route('pages.riceSyrup') }}" class="d-block my-3">Rice Syrup</a></h5>
                            <x-read-more button_link="{{ route('pages.riceSyrup') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item text-center prod-rice-protein">
                            <img src="{{ asset('frontend-assets/img/7 - Rice Protein.png') }}" alt="Rice Protein" />
                            <h5><a href="{{ route('pages.riceProtien') }}" class="d-block my-3">Rice Protein</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.riceProtien') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item text-center prod-solid">
                            <img src="{{ asset('frontend-assets/img/8 - Solids.png') }}" alt="Solids" />
                            <h5><a href="{{ route('pages.solids') }}" class="d-block my-3">Maltodextrin / Syrup Solids</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.solids') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item text-center dextrose-mono">
                            <img src="{{ asset('frontend-assets/img/mat-dex.png') }}" alt="mat-dex" />
                            <h5><a href="{{ route('pages.dextroseMonohydrate') }}" class="d-block my-3">Dextrose Monohydrate</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.dextroseMonohydrate') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item text-center prod-other">
                            <img src="{{ asset('frontend-assets/img/10 - Other brands.png') }}" alt="Other brands" />
                            <h5><a href="{{ route('pages.otherLeadingBrands') }}" class="d-block my-3">Other
                                    Leading Brands</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.otherLeadingBrands') }}"
                                button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item text-center prod-private">
                            <img src="{{ asset('frontend-assets/img/3 - Pvt Label.png') }}" alt="Pvt Label" />
                            <h5><a href="{{ route('pages.privateLabelling') }}" class="d-block my-3">Private
                                    Labelling</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.privateLabelling') }}" button_name="View More">
                            </x-read-more>
                        </div>
                        <div class="item text-center prod-maize">
                            <img src="{{ asset('frontend-assets/img/16 - Corn Starch 256x346.png') }}" alt="Corn Starch" />
                            <h5><a href="{{ route('pages.maize') }}" class="d-block my-3">Maize Corn Starch</a>
                            </h5>
                            <x-read-more button_link="{{ route('pages.maize') }}" button_name="View More">
                            </x-read-more>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        setCarouselCaption(arr[arr.length-1]);
                    }, 1);
                });
            });

            function setCarouselCaption(el) {
                $(".product_list .d-block").removeClass("active");
                $(".product_list ."+el).addClass("active");
            }
        </script>
    @endsection
</x-guest-layout>
