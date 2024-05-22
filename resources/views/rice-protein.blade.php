<x-guest-layout>
    <section class="other home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
        ])
        @endcomponent
    </section>
    <section class="rice-syrup py-6 container">
        <div class="product_heading text-center">
            <span class="text-uppercase"><strong>Rice Protein</strong></span>
        </div>
        <div class="product_desc text-center mt-3 mb-5">
            <p>Rice protein is a concentrated fraction of the entire rice grain, produced through an all - natural a wet
                milling process. Its production process is a series of fermentation, filtration and enzyme processing to
                remove the protein and fiber from the rice grain. Matco can supply organic and conventional protein
                between 50% - 70% protein content.</p>
        </div>
        <div class="section-divider">
            <hr>
        </div>
        <div class="section-2 text-center mt-5">
            <div class="learn_more">
                <p>Rice Syrup & Protein Catalogue</p>
                <x-read-more target="_blank" button_link="frontend-assets/pdf/Matco Foods Rice Protein Catalogue.pdf"
                    button_name="click here"></x-read-more>
            </div>
        </div>
        <div class="section-5 my-5">
            <span class="feature text-uppercase">Rice Protein Features</span>
            <div class="d-block feature-list my-5">
                <span class="d-inline">Maintains Muscle Mass</span>
                <hr class="d-inline-block">
                <span class="d-inline">Burns Fat</span>
                <hr class="d-inline-block">
                <span class="d-inline">Excellent Source of Amino Acid</span>
                <hr class="d-inline-block">
                <span class="d-inline">Suitable for Vegetarians & Vegan</span>
                <hr class="d-inline-block">
                <span class="d-inline">Suitable for Vegetarians</span>
                <hr class="d-inline-block">
                <span class="d-inline">Lowers Blood Sugar</span>
                <hr class="d-inline-block">
                <span class="d-inline">Hypo Allergenic</span>
            </div>
        </div>
        <div class="section-6 mb-3">
            <span class="text-uppercase">Product Range</span>
            <div class="row mt-3">
                <div class="col-md-6">
                    <table class="table">
                        <tbody class="text-center">
                            <tr>
                                <td class="product_range text-center" colspan="2">Product Range</td>
                            </tr>
                            <tr>
                                <td>Organic Rice Protein</td>
                                <td class="text-center">50 - 70</td>
                            </tr>
                            <tr>
                                <td>Conventional Rice Protein</td>
                                <td class="text-center">50 - 70</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="section-7 mt-5">
                        <span class="text-uppercase">Handling and Storage</span>
                        <p class="mt-3">Protein powder is kept in a dry area away from direct sunlight, with
                            relative
                            humidity
                            maintained below 65% and temperature below 70°F/ 24°C.</p>
                    </div>
                </div>
                <div class="col-md-6 order-first order-sm-first order-md-last text-right">
                    <img class="mb-4 w-100" src="{{ asset('frontend-assets/img/2 -RP Product Image.jpg') }}"
                        alt="RP Product" />
                </div>
            </div>

        </div>
        <div class="section-7">
            {{-- <span class="text-uppercase">Handling and Storage</span>
            <p class="mt-3">Protein powder is kept in a dry area away from direct sunlight, with relative
                humidity
                maintained below 65% and temperature below 70oF/ 24oC.</p> --}}
            <div class="row my-5">
                <div class="col-md-6">
                    <span class="text-uppercase">Packaging</span>
                    <p class="my-4">We adhere to international packaging standards and offer flexibility and
                        customization in our packaging solutions for our customers.</p>
                    <ul class="ml-n-4">
                        <li>
                            <p>Jumbo bags with inner polyethylene lining</p>
                        </li>
                        <li>
                            <p>Paper bags</p>
                        </li>
                    </ul>
                    <span class="text-uppercase">sales</span>
                    <ul class="ml-n-4">
                        <li>
                            <p>Please Contact <a href="">glucose@matcofoods.com</a> or +92-333-1207746
                            </p>
                        </li>

                    </ul>
                </div>
                <div class="col-md-6 text-right">
                    <img class="mb-4 w-100" src="{{ asset('frontend-assets/img/3 - Packaging.jpg') }}" alt="Packaging" />
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
        <x-certification-component></x-certification-component>
    </section>
</x-guest-layout>
