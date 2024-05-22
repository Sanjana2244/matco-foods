<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
            ])
        @endcomponent
    </section>
    <section class="basmati py-6 container">
        <div class="product_heading text-center">
            <span class="text-uppercase"><strong>Organic Rice</strong></span>
        </div>
        <div class="product_desc text-center mt-3">
            <p>We guarantee traceability in all our processes and provide sustainable, premium quality Organic rice to our customers.  Our rice is organic certified by USDA and EU Organic from Control Union.</p>
        </div>
        <div class="section-1 my-5">
            <div class="row">
                <div class="col-md-4 mt-5 mt-sm-5 mt-md-0">
                    <span class="text-uppercase">Varieties</span>
                    <ul class="mt-5">
                        <li>
                            <p>Organic White Super Basmati Rice</p>
                        </li>
                        <li>
                            <p>Organic Brown Super Basmati Rice
                            </p>
                        </li>
                        <li>
                            <p>Organic 1121 White Basmati Rice
                            </p>
                        </li>
                        <li>
                            <p>Organic 1121 Brown Basmati Rice
                            </p>
                        </li>
                        <li>
                            <p>Organic Brown Long Grain (IRRI 6) Rice
                            </p>
                        </li>
                        <li>
                            <p>Organic White Long Grain (IRRI 6) Rice
                            </p>
                        </li>
                        <li>
                            <p>Organic 100% Broken Brown Rice
                            </p>
                        </li>
                        <li>
                            <p>Organic 100% Broken White Rice</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-first order-sm-first order-md-last text-right">
                    <img class="m-w-100" src="{{ asset('frontend-assets/img/2-OR-Product Image.png') }}" alt="organic product" />
                </div>
            </div>
        </div>
        <div class="section-divider">
            <hr>
        </div>
        <div class="section-2 text-center">
            <div class="learn_more mt-5">
                <p>To view our full products range</p>
                <x-read-more button_link="/products" button_name="click here"></x-read-more>
            </div>
            <div class="learn_more mt-4">
                <p>To download our product catalogue</p>
                <x-read-more target="_blank" button_link="frontend-assets/pdf/Matco Foods Organic brochure.pdf" button_name="click here"></x-read-more>
            </div>
        </div>
        <div class="section-3 mt-5">
            <div class="row justify-content-center">
                <div class="col-4 col-sm-4 col-md-2 text-right"><img class="w-75" src="{{ asset('frontend-assets/img/3 - USDA Logo.jpg') }}" alt="USDA Logo" /></div>
                {{-- <div class="col-1 col-sm-1 col-md-1 vertical_divider px-0">
                    <hr>
                </div> --}}
                <div class="col-4 col-sm-2 col-md-2"><img class="w-100" src="{{ asset('frontend-assets/img/4 - EU Organic.png') }}" alt="EU Organic" /></div>
            </div>
        </div>
    </section>
</x-guest-layout>
