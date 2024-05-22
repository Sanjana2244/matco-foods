<x-guest-layout>
    <section class="other home-section-1 contact_us">
        @component('components.slider-component', [
            'sliders' => $banner,
        ])
        @endcomponent
    </section>
    <section class="contact_details_form py-5">
        <h1 class="text-center mb-5 primary-color">CONTACT INFORMATION</h1>
        <div class="container">
            <div class="section-divider d-block d-sm-block d-md-none d-lg-none">
                <hr>
            </div>
            <div class="row company_information">
                <div class="col-md-12">
                    <h2 class="mb-5 mt-3 primary-color text-uppercase gotham-medium">Pakistan</h2>
                </div>
                <div class="col-md-2">
                    <p class="contact-us-heading">Address</p>
                </div>
                <div class="col-md-10">
                    <p>B-1/A, SITE, Phase 1, Super Highway Industrial Area, Karachi – 75340, Pakistan</p>
                </div>
                <div class="col-md-2">
                    <p class="contact-us-heading">Tel</p>
                </div>
                <div class="col-md-10">
                    <p>+9221-36411661 ,<br class="d-block d-sm-block d-md-none d-lg-none">+9221-36411662 ,<br
                            class="d-block d-sm-block d-md-none d-lg-none"> +9221-36411663</p>
                </div>
                <div class="col-md-2 d-none d-sm-none d-md-block">
                    <p>Social</p>
                </div>
                <div class="col-md-10">
                    <a target="_blank" href="https://www.facebook.com/matcofoods/ "><img class="ml-2"
                            src="{{ asset('frontend-assets/img/Path 3960.png') }}" alt="facebook" /></a>
                    <a target="_blank" href="https://www.instagram.com/matcofoods/"><img
                            src="{{ asset('frontend-assets/img/Group 893.png') }}" alt="instagram" /></a>
                    <a target="_blank" href="https://www.linkedin.com/company/matco-foods "><img
                            src="{{ asset('frontend-assets/img/Path 3959.png') }}" alt="linkedin" /></a>
                    <a target="_blank" href="https://www.youtube.com/c/FalakRiceChannel "> <img class=""
                            src="{{ asset('frontend-assets/img/Group 894.png') }}" alt="youtube" /></a>

                </div>
                <div class="col-md-2 mt-2">
                    <p class="contact-us-heading">Mobile</p>
                </div>
                <div class="col-md-10 mt-2">
                    <p>+92301-8250969 ,<br class="d-block d-sm-block d-md-none d-lg-none"> +92321-2422902</p>
                </div>
                <div class="col-md-2">
                    <p class="contact-us-heading">Glucose / Maltodextrin / Rice Protein</p>
                </div>
                <div class="col-md-10">
                    <p>+92333-1207746</p>
                </div>
                <div class="col-md-2">
                    <p class="contact-us-heading">Rice Plant Sadhoke, Punjab</p>
                </div>
                <div class="col-md-10">
                    <p>+92330-1236661</p>
                </div>
                <div class="col-md-2">
                    <p class="contact-us-heading">Corn Division Punjab</p>
                </div>
                <div class="col-md-10">
                    <p>+92321-6612044</p>
                </div>


                <div class="col-md-2">
                    <p class="contact-us-heading">Fax</p>
                </div>
                <div class="col-md-10">
                    <p>+9221-36880735</p>
                </div>

                <div class="col-md-2">
                    <p class="contact-us-heading">Email</p>
                </div>
                <div class="col-md-10">
                    <p class="mb-1">Matco Foods || <a href="">contact@matcofoods.com
                        </a></p>
                    <p class="mb-1">Falak Rice || <a href="">customercare@falakrice.com</a></p>
                    <p class="mb-1">Rice Protein / glucose || <a href="">glucose@matcofoods.com</a></p>

                    <p class="">Corn Division || <a href="">corn.division@matcofoods.com</a></p>
                </div>
                <div class="col-md-2 my-1 my-sm-1 my-md-3 my-lg-3">
                    <p class="contact-us-heading">Web</p>
                </div>
                <div class="col-md-10 my-1 my-sm-1 my-md-3 my-lg-3">
                    <p class="mb-1"><a href="">www.matcofoods.com
                        </a></p>
                    <p class="mb-0"><a href="">www.falakrice.com</a></p>
                </div>

            </div>
            <div class="section-divider mt-5 d-block d-sm-block d-md-none d-lg-none">
                <hr>
            </div>
            <form class="contact_us_form mt-4">
                {{-- <div class="form-row">
                    <div class="col-md-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Category</label>
                    </div>
                    <div class="col-md-5">
                        <select class="js-example-basic-single" name="state">
                            <option value="">Select Category</option>
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                </div> --}}
                <div class="form-row">
                    <div class="col-md-2 mt-4">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Your Full Name</label>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Email</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" value=""
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Subject</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" placeholder="Subject" name="subject" value=""
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Message</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message" style="height:250px" name="message" value=""
                                spellcheck="false"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-row text-center text-sm-center text-md-left text-lg-left">
                    <div class="col-md-2 pr-3 d-none d-sm-none d-md-none">
                        <label>Captcha</label>
                    </div>
                    <div class="col-md-5 w-auto">
                        <div class="g-recaptcha mx-auto" data-sitekey="6LezGzMeAAAAAOS7Bzf61Sw-Onwv7Ki5avdyi9Xe">
                        </div>
                    </div>
                </div>
                <div class="form-row text-center text-sm-center text-md-left text-lg-left">
                    <div class="offset-md-2 col-md-5 mt-3">
                        <div class="btn-submit"><button type="submit" class="btn">Submit
                                Information</button></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-guest-layout>
