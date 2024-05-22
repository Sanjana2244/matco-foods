<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
            ])
        @endcomponent
    </section>
    <section class="basmati py-6 container">
        <div class="product_heading text-center">
            <span class="text-uppercase"><strong>non-Basmati Rice</strong></span>
        </div>
        <div class="section-1 my-5">
            <div class="row">
                <div class="col-md-5 mt-5 mt-sm-5 mt-md-0">
                    <span class="text-uppercase">Varieties</span>
                    <ul class="mt-5">
                        <li>
                            <p>PK 386</p>
                        </li>
                        <li>
                            <p>PK 386 Steam</p>
                        </li>
                        <li>
                            <p>IRRI 9 (C9)</p>
                        </li>
                        <li>
                            <p>IRRI 6 White (Long Grain Rain)
                            </p>
                        </li>
                        <li>
                            <p>IRRI 6 Brown (Long Grain Rain)
                            </p>
                        </li>
                        <li>
                            <p>IRRI 6 Sella (Parboiled)
                            </p>
                        </li>
                        <li>
                            <p>Jasmine Rice
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 order-first order-sm-first order-md-last">
                    <img class="w-100" src="{{ asset('frontend-assets/img/2 - Product Image.jpg') }}" alt="product image" />
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
        </div>
    </section>
</x-guest-layout>
