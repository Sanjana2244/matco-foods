<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
            ])
        @endcomponent
    </section>
    <section class="basmati py-6 container">
        <div class="product_heading text-center">
            <span class="text-uppercase"><strong>Basmati Rice</strong></span>
        </div>
        <div class="product_desc text-center mt-3">
            <p>We are the largest basmati Rice exporters in Pakistan with more than 55 years of experience in
                agri-business, exporting our flagship brand Falak and private label brands to over 60 countries. We
                offer the widest variety of Basmati, Non-Basmati and Organic rice to our customers</p>
        </div>
        <div class="section-1 my-5">
            <div class="row">
                <div class="col-md-4 mt-5 mt-sm-5 mt-md-0">
                    <span class="text-uppercase">Varieties</span>
                    <ul class="mt-5">
                        <li>
                            <p>White Super Basmati Rice</p>
                        </li>
                        <li>
                            <p>Brown Super Basmati Rice</p>
                        </li>
                        <li>
                            <p>Super Sella (Parboiled) Basmati Rice</p>
                        </li>
                        <li>
                            <p>Steam Basmati Rice</p>
                        </li>
                        <li>
                            <p>Super Fine Basmati Rice</p>
                        </li>
                        <li>
                            <p>Pure Basmati Sella (Parboiled)</p>
                        </li>
                        <li>
                            <p>1121 Steam Basmati Rice</p>
                        </li>
                        <li>
                            <p>1121 White Basmati Rice</p>
                        </li>
                        <li>
                            <p>1121 Brown Basmati Rice</p>
                        </li>
                        <li>
                            <p>1121 Sella (Parboiled) Basmati Rice</p>
                        </li>
                        <li>
                            <p>100% Broken Basmati Rice</p>
                        </li>
                        <li>
                            <p>D-198</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-first order-sm-first order-md-last text-center text-sm-center text-md-right">
                    <img class="w-75" src="{{ asset('frontend-assets/img/2 - Product Image.png') }}" alt="Product image" />
                </div>
            </div>
        </div>
        <div class="section-divider">
            <hr>
        </div>
        <div class="section-2 text-center">
            <div class="learn_more mt-5">
                <p>To learn more about the flagship brand Falak </p>
                <x-read-more button_link="/falak" button_name="click here"></x-read-more>
            </div>
            <div class="learn_more mt-4">
                <p>To learn more about our Private Labelling services</p>
                <x-read-more button_link="/private-labelling" button_name="click here"></x-read-more>
            </div>
            <div class="learn_more mt-4">
                <p>To view our full products range</p>
                <x-read-more button_link="/products" button_name="click here"></x-read-more>
            </div>
        </div>
    </section>
</x-guest-layout>
