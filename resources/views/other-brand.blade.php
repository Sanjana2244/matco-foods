<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
            ])
        @endcomponent
    </section>
    <section class="rice-syrup py-6 container">
        {{-- <div class="product_heading text-center">
            <span class="text-uppercase"><strong>Other Leading Brands</strong></span>
        </div>
        <div class="section-divider d-none d-sm-none d-md-block">
            <hr>
        </div> --}}
        <div class="row justify-content-center section-2">
            <div class="col-md-4 text-center">
                <img class="" src="{{ asset('frontend-assets/img/Amber 169x301.png') }}" alt="Amber" />
                <div class="download_international_catalogue">
                    <a class="d-block download_link my-3">Amber Catalogue – International</a>
                    <x-read-more button_link="frontend-assets/pdf/Amber Catalogue.pdf" target="_blank" button_name="Click Here To Download"></x-read-more>
                </div>
            </div>
            <div class="offset-md-1 col-md-4 text-center">
                <img class=""
                    src="{{ asset('frontend-assets/img/Bahar 163x299.png') }}" alt="Bahar" />
                <div class="download_international_catalogue">
                    <a class="d-block download_link my-3">Bahar Catalogue – International</a>
                    <x-read-more button_link="frontend-assets/pdf/Bahar Catalogue.pdf" target="_blank" button_name="Click Here To Download"></x-read-more>
                </div>
            </div>
        </div>
        <div class="section-2 text-center">
            <div class="learn_more mt-5">
                <p>To view our full products range</p>
                <x-read-more button_link="/products" button_name="click here"></x-read-more>
            </div>
        </div> 
    </section>
</x-guest-layout>
