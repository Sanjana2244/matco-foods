<x-guest-layout>
    <section class="home-section-1 career">
        @component('components.slider-component', [
            'sliders' => $banner,
            ])
        @endcomponent
    </section>
    <section class="career_form py-6">
        <div class="container">
            <form class="contact_us_form">
                <div class="form-row">
                    <div class="form-row">
                        <div class="col-md-9 text-center">
                            <p>Congratulations on your first step towards joining Matco! At Matco Foods, you will be
                                constantly challenged and exposed to new and exciting opportunities, in an environment
                                where your opinion matters! We owe our success of over 50 years to our greatest strength
                                and asset – our people! We wish you the best of luck!</p>
                        </div>
                    </div>
                    <div class="section-divider d-block d-sm-block d-md-none d-lg-none">
                        <hr>
                    </div>
                    <div class="col-md-7 text-center mt-5 mb-3">
                        <label class="mb-3 applying-for">Applying for</label>
                        {{-- <select class="js-example-basic-single" name="state">
                            <option value="">Select Position</option>
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select> --}}
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mt-4">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Name</label>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Last Name</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" placeholder="Last Name" name="Last_name" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Location</label>
                    </div>
                    <div class="col-md-5">
                        <select id="city" class="js-example-basic-single" name="state">
                            <option value="">Select City</option>
                            <option value="Karachi">Karachi</option>
                            <option value="Sadhoke">Sadhoke</option>
                            <option value="Faisalabad">Faisalabad</option>
                        </select>
                    </div>
                </div>
                <div class="form-row my-3">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Department</label>
                    </div>
                    <div class="col-md-5">
                        <select id="department" class="js-example-basic-single" name="state">
                            <option value="">Select Position</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Phone Number</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" placeholder="Phone Number" name="phone" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Employment Status</label>
                    </div>
                    <div class="col-md-5">
                        <select class="js-example-basic-single" name="state">
                            <option value="">Select Employment Status</option>
                            <option value="Employed">Employed</option>
                            <option value="Unemployed">Unemployed</option>
                        </select>
                    </div>
                </div>
                <div class="form-row my-3">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Education Level</label>
                    </div>
                    <div class="col-md-5">
                        <select class="js-example-basic-single" name="state">
                            <option value="">Select Education Level</option>
                            <option value="High School">High School</option>
                            <option value="Diploma ">Diploma </option>
                            <option value="Undergraduate ">Undergraduate </option>
                            <option value="Post Graduate">Post Graduate</option>
                            <option value="Professional Education">Professional Education</option>

                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Experience Level</label>
                    </div>
                    <div class="col-md-5">
                        <select class="js-example-basic-single" name="state">
                            <option value="">Select Experience Level</option>
                            <option value="Fresh Graduate">Fresh Graduate</option>
                            <option value="1 – 2 years ">1 – 2 years </option>
                            <option value="3 – 5 years">3 – 5 years</option>
                            <option value="6 – 9 years">6 – 9 years</option>
                            <option value="10+ years">10+ years</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="col-md-2 mt-2">
                        <label class="d-none d-sm-none d-md-block d-lg-block">Message</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message" style="height:250px" name="message"
                                value="" spellcheck="false"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-row my-3 text-center text-sm-center text-md-left text-lg-left">
                    <div class="col-md-2 pr-3">
                        <label>Email Your Resume</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <p><a href="mailto:career@matcofoods.com">career@matcofoods.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="form-row text-center text-sm-center text-md-left text-lg-left">
                    <div class="col-md-2 pr-3 d-none d-sm-none d-md-block">
                        <label>Captcha</label>
                    </div>
                    <div class="col-md-5 w-auto">
                        <div class="g-recaptcha mx-auto" data-sitekey="6LezGzMeAAAAAOS7Bzf61Sw-Onwv7Ki5avdyi9Xe"></div>
                    </div>
                </div>
                <div class="form-row text-center text-sm-center text-md-left text-lg-left">
                    <div class="offset-md-2 col-md-5 mt-3">
                        <div class="btn-submit"><button type="submit" class="btn">Apply Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @section('afterScripts')
        <script>
            $('#city').on('change', function() {

                let karachi = ['Accounts & Finance',
                    'Administration',
                    'Costing & Budgeting',
                    'Export Logistics',
                    'Human Resources',
                    'Information Technology',
                    'Interal Audit',
                    'Marketing',
                    'New Product Development',
                    'Production - Boiler Section',
                    'Production - Planning & Production',
                    'Procurement - Bi-product',
                    'Procurement - General',
                    'Project Management',
                    'Quality Control & Assurance',
                    'Repair & Maintenance',
                    'Sales - Brand Export',
                    'Sales - Local',
                    'Sales - Private Label Export',
                    'Security',
                    'Supply Chain',
                    'Warehousing & Stores'
                ];

                let sadhoke = ['Accounts & Finance',
                    'Administration',
                    'Human Resources',
                    'Information Technology',
                    'Interal Audit',
                    'Kisan Dost Program - CSR',
                    'Production - Boiler Section',
                    'Production - Par Boiling & Drying',
                    'Production - Planning & Production',
                    'Procurement - Bi-product',
                    'Procurement - General',
                    'Quality Control & Assurance',
                    'Repair & Maintenance',
                    'Security',
                    'Supply Chain',
                    'Warehousing & Stores'
                ];

                let faisalabad = [
                    'Accounts & Finance',
                    'Administration',
                    'Human Resources',
                    'Information Technology',
                    'Interal Audit',
                    'Marketing',
                    'Production - Boiler Section',
                    'Production - Planning & Production',
                    'Procurement - General',
                    'Quality Control & Assurance',
                    'Repair & Maintenance',
                    'Security',
                    'Supply Chain',
                    'Warehousing & Stores'
                ]

                $('#department').empty()
                $("#department").append(`<option value="">Select Department</option>`);

                if (this.value == "Karachi") {
                    karachi.forEach(i => {
                        $("#department").append(`<option value="${i}">${i}</option>`);
                    });
                } else if (this.value == "Sadhoke") {
                    sadhoke.forEach(i => {
                        $("#department").append(`<option value="${i}">${i}</option>`);
                    });
                } else {
                    faisalabad.forEach(i => {
                        $("#department").append(`<option value="${i}">${i}</option>`);
                    });
                }
            });
        </script>
    @endsection
</x-guest-layout>
