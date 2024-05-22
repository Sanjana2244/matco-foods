<x-guest-layout>
    <section class="other investorRelationPage home-section-1">
        @component('components.slider-component', [
            'sliders' => $banner,
        ])
        @endcomponent
    </section>
    {{-- <img src="{{ asset('frontend-assets/img/2 - Product Image.jpg') }}" alt="product image" /> --}}

  

    <section class="investor_relation_tabs py-6">
        <ul
            class="nav nav-tabs justify-content-center mb-2 mb-sm-2 mb-md-5 d-block d-sm-block d-md-flex text-center text-sm-center text-md-left">
            <li class="nav-item">
                <a href="#companyInformation" class="nav-link active text-uppercase" data-toggle="tab"><span>Company’s
                        INFORMATION</span></a>
            </li>
            <hr class="d-none d-sm-none d-md-block">
            <li class="nav-item">
                <a href="#governance" class="nav-link text-uppercase" data-toggle="tab"><span>Governance</span></a>
            </li>
            <hr class="d-none d-sm-none d-md-block">
            <li class="nav-item">
                <a href="#notices" class="nav-link text-uppercase" data-toggle="tab"><span>Notices</span></a>
            </li>
            <hr class="d-none d-sm-none d-md-block">
            {{-- <li class="nav-item">
                <a href="#election" class="nav-link text-uppercase" data-toggle="tab"><span>Election of
                        Directors</span></a>
            </li>
            <hr class="d-none d-sm-none d-md-block"> --}}
            <li class="nav-item">
                <a href="#investorInformation" class="nav-link text-uppercase" data-toggle="tab"><span>Investor
                        Information</span></a>
            </li>
            <hr class="d-none d-sm-none d-md-block">
            <li class="nav-item">
                <a href="#financialResult" class="nav-link text-uppercase" data-toggle="tab"><span>Financial
                        Results</span></a>
            </li>
            <hr class="d-none d-sm-none d-md-block">
            <li class="nav-item">
                <a href="#corporateBriefingSession" class="nav-link text-uppercase" data-toggle="tab"><span>Corporate Briefing Session</span></a>
            </li>
            <hr class="d-none d-sm-none d-md-block">

            <li class="nav-item">
                <a href="#unclaimed" class="nav-link text-uppercase" data-toggle="tab"><span>
                        Unclaimed Dividend And Shares
                    </span></a>
            </li>
            <hr class="d-none d-sm-none d-md-block">
        </ul>
        <div class="section-divider d-block d-sm-block d-md-none d-lg-none">
            <hr>
        </div>
        <div class="tab-content mt-3 mt-sm-3 mt-md-0">
            <div class="tab-pane fade show active container text-center" id="companyInformation">
                <h1 class="text-uppercase mb-4 primary-color">Company INFORMATION</h1>
                <p class="sub_heading text-uppercase">Status of the Company</p>
                <p class="desc mb-0">Listed on <a href="https://www.psx.com.pk/">Pakistan StockExchange Ltd</a></p>
                <p class="desc">Symbol: MFL</p>
                <p class="desc mb-0">List of permissible business activities</p>
                <p class="desc mb-4">Please refer attached <a target="_blank"
                        href="frontend-assets/pdf/Memorandum_of_Association.pdf">Memorandum of Association</a></p>
                <p class="sub_heading text-uppercase mb-0">COMPANY Registration Number:</p>
                <p class="desc mb-4">0021510</p>
                <p class="sub_heading text-uppercase mb-0">NTN:</p>
                <p class="desc mb-4">0711108</p>

                <table class="table mb-4 d-none d-sm-none d-md-table">
                    <tbody>
                        <tr>
                            <td class="head text-center" colspan="2">Board of Directors</td>
                        </tr>
                        <tr>
                            <td>Mr. Jawed Ali Ghori </td>
                            <td class="text-center">Chairman</td>
                        </tr>
                        <tr>
                            <td>Mr. Khalid Sarfaraz Ghori </td>
                            <td class="text-center">Chief Executive Officer</td>
                        </tr>
                        <tr>
                            <td>Mr. Faizan Ali Ghori, CFA </td>
                            <td class="text-center">Executive Director</td>
                        </tr>
                        <tr>
                            <td>Mr. Safwan Khalid Ghori, CFA </td>
                            <td class="text-center">Executive Director</td>
                        </tr>
                        <tr>
                            <td>Syed Kamran Rasheed </td>
                            <td class="text-center">Independent Director</td>
                        </tr>
                        <tr>
                            <td>Mr. Abdul Samad Khan </td>
                            <td class="text-center">Independent Director</td>
                        </tr>
                        <tr>
                            <td>Mrs. Faryal Murtaza </td>
                            <td class="text-center">Non- Executive Director</td>
                        </tr>
                        <tr>
                            <td>Ms. Umme Habibah </td>
                            <td class="text-center">Independent Director</td>
                        </tr>
                        <tr>
                            <td>Mr. Mohammad Mohsin </td>
                            <td class="text-center">Independent Director</td>
                        </tr>
                    </tbody>
                </table>

                <p class="sub_heading text-uppercase mb-0 d-md-none">Board of Directors</p>

                <div class="borad sm-directors p-3 m-3">
                    <p class="sub_heading mb-0 gotham-bold">Mr. Jawed Ali Ghori</p>
                    <p class="sub_heading  mb-0 gotham-medium">Chairman</p>
                </div>

                <div class="borad sm-directors p-3 m-3">
                    <p class="sub_heading mb-0 gotham-bold">Mr. Khalid Sarfaraz Ghori</p>
                    <p class="sub_heading  mb-0 gotham-medium">Chief Executive Officer</p>
                </div>

                <div class="borad sm-directors p-3 m-3">
                    <p class="sub_heading mb-0 gotham-bold">Mr. Faizan Ali Ghori, CFA</p>
                    <p class="sub_heading  mb-0 gotham-medium">Executive Director
                    </p>
                </div>

                <div class="borad sm-directors p-3 m-3">
                    <p class="sub_heading mb-0 gotham-bold">Mr. Safwan Khalid Ghori, CFA </p>
                    <p class="sub_heading  mb-0 gotham-medium">Executive Director
                    </p>
                </div>

                <div class="borad sm-directors p-3 m-3">
                    <p class="sub_heading mb-0 gotham-bold">Syed Kamran Rasheed </p>
                    <p class="sub_heading  mb-0 gotham-medium">Independent Director</p>
                </div>

                <div class="borad sm-directors p-3 m-3">
                    <p class="sub_heading mb-0 gotham-bold">Mr. Abdul Samad Khan </p>
                    <p class="sub_heading  mb-0 gotham-medium">Independent Director</p>
                </div>

                <div class="borad sm-directors p-3 m-3">
                    <p class="sub_heading mb-0 gotham-bold">Mrs. Faryal Murtaza </p>
                    <p class="sub_heading  mb-0 gotham-medium">Non- Executive Director
                    </p>
                </div>

                <div class="borad sm-directors p-3 m-3">
                    <p class="sub_heading mb-0 gotham-bold">Ms. Umme Habibah </p>
                    <p class="sub_heading  mb-0 gotham-medium">Independent Director
                    </p>
                </div>

                <div class="borad sm-directors p-3 m-3 mb-4">
                    <p class="sub_heading mb-0 gotham-bold">Mr. Mohammad Mohsin </p>
                    <p class="sub_heading  mb-0 gotham-medium">Independent Director
                    </p>
                </div>

                <div class="view-more btn mb-4 d-md-none"><a href="#" class="btn-readMore">View More</a></div>

                <table class="table mb-4 d-none d-sm-none d-md-table">
                    <tbody>
                        <tr>
                            <td class="head text-center" colspan="2">Audit Committee</td>
                        </tr>
                        <tr>
                            <td>Syed Kamran Rasheed </td>
                            <td class="text-center">Chairman</td>
                        </tr>
                        <tr>
                            <td>Mr. Abdul Samad Khan </td>
                            <td class="text-center">Member</td>
                        </tr>
                        <tr>
                            <td>Mr. Mohammad Mohsin</td>
                            <td class="text-center">Member</td>
                        </tr>
                    </tbody>
                </table>

                <p class="sub_heading text-uppercase mb-0 d-md-none">Audit Committee</p>

                <div class="sm-directors p-3 m-3">
                    <p class="sub_heading mb-0 gotham-bold">Syed Kamran Rasheed </p>
                    <p class="sub_heading mb-0 gotham-medium">Chairman</p>
                </div>

                <div class="sm-directors p-3 m-3">
                    <p class="sub_heading mb-0 gotham-bold">Mr. Abdul Samad Khan </p>
                    <p class="sub_heading mb-0 gotham-medium">Member</p>
                </div>

                <div class="sm-directors p-3 m-3 mb-4">
                    <p class="sub_heading mb-0 gotham-bold">Mr. Mohammad Mohsin </p>
                    <p class="sub_heading mb-0 gotham-medium">Member</p>
                </div>

                <table class="table mb-4 d-none d-sm-none d-md-table">
                    <tbody>
                        <tr>
                            <td class="head text-center">Chief Financial Officer</td>
                            <td class="head text-center">Company Secretary</td>
                        </tr>
                        <tr>
                            <td>Mr. Muhammad Aamir Farooqui</td>
                            <td class="text-center">Muhammad Noman Ansari</td>
                        </tr>
                    </tbody>
                </table>

                <p class="sub_heading text-uppercase mb-0 d-md-none">Chief Financial Officer </p>

                <div class="sm-directors p-3 m-3 mb-4">
                    <p class="sub_heading mb-0 gotham-bold">Mr. Muhammad Aamir Farooqui</p>
                </div>

                <p class="sub_heading text-uppercase mb-0 d-md-none">Company Secretary </p>

                <div class="sm-directors p-3 m-3 mb-4">
                    <p class="sub_heading  mb-0 gotham-bold">Muhammad Noman Ansari</p>
                </div>

                <table class="table mb-4 d-none d-sm-none d-md-table">
                    <tbody>
                        <tr>
                            <td class="head text-center">Auditors</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="col-md-6 mx-auto p-3">Grant Thornton Anjum Rahman <br> (GTAR)<br>
                                    1st and 3rd Floor, Modern Motors House<br>
                                    Beaumont Road, Karachi, Pakistan<br><br>
                                    Tel (Office): +92 (21) 3567 2951-6<br>
                                    Fax: +92 (21) 3568 8834<br>
                                    Website: <a href="www.gtpak.com">www.gtpak.com</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p class="sub_heading text-uppercase mb-0 d-md-none">Auditors</p>

                <div class="sm-directors p-3 m-3 mb-4 bg-white">
                    <p class="desc primary-color gotham-medium">Grant Thornton Anjum Rahman<br> (GTAR)<br>
                        1st and 3rd Floor, Modern Motors House<br>
                        Beaumont Road, Karachi, Pakistan<br><br>
                        Tel (Office): +92 (21) 3567 2951-6<br>
                        Fax: +92 (21) 3568 8834<br>
                        Website: <a href="www.gtpak.com">www.gtpak.com</a></p>
                </div>

                <p class="sub_heading text-uppercase mb-4">Company Locations</p>
                <div class="row mb-4">
                    <div class="col-md-3 d-none d-sm-none d-md-block">
                        <div class="bg-white address">
                            <p class="heading">REGISTERED OFFICE</p>
                            <p class="location mb-4">Matco Foods Limited<br>B-1/A, S.I.T.E. Phase 1, Super Highway
                                Industrial, Area,
                                Karachi, Pakistan P.O. Box 75950
                            </p>
                            <p class="number">+92 (301) 8250969,<br>+92 (21) 3631 5099,<br> 92
                                301-8250969,</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-none d-sm-none d-md-block">
                        <div class="bg-white address">
                            <p class="heading">RICE PLANT</p>
                            <p class="location mb-4">A 15-16, S.I.T.E. Super Highway,
                                Karachi, Pakistan
                            </p>
                            <p class="number">+92 (21) 3688 1297,<br> +92 (333) 120 7780</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-none d-sm-none d-md-block">
                        <div class="bg-white address">
                            <p class="text-uppercase heading">RICE GLUCOSE PLANT</p>
                            <p class="location mb-4">G-205, Gadap Road, S.I.T.E. Super Highway<br>Industrial Area,
                                Karachi, Pakistan</p>
                            <p class="number">+92333-1207746</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-none d-sm-none d-md-block">
                        <div class="bg-white address">
                            <p class="heading text-uppercase">SADHOKE PLANT</p>
                            <p class="location mb-4">50 KM, Main G.T. Road, Sadhoke District, Gujranwala,
                                Punjab P.O. Box No. 52386
                            </p>
                            <p class="number">+92 (55) 666 5774,<br> +92 (55) 666 5676,<br>+92330-1236661</p>


                        </div>
                    </div>

                    <div class="col-md-12 company-location d-md-none">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="bg-white address">
                                    <p class="heading">REGISTERED OFFICE</p>
                                    <p class="location mb-4">Matco Foods Limited<br>B-1/A, S.I.T.E. Phase 1, Super
                                        Highway
                                        Industrial, Area,
                                        Karachi, Pakistan P.O. Box 75950
                                    </p>
                                    <p class="number">+92 (301) 8250969,<br>+92 (21) 3631 5099,<br> 92
                                        301-8250969</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="bg-white address">
                                    <p class="heading">RICE PLANT</p>
                                    <p class="location mb-4">A 15-16, S.I.T.E. Super Highway,
                                        Karachi, Pakistan
                                    </p>
                                    <p class="number">+92 (21) 3688 1297,<br> +92 (333) 120 7780</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="bg-white address">
                                    <p class="text-uppercase heading">RICE GLUCOSE PLANT</p>
                                    <p class="location mb-4">G-205, Gadap Road, S.I.T.E. Super Highway<br>Industrial
                                        Area,
                                        Karachi, Pakistan</p>
                                    <p class="number">+92333-1207746</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="bg-white address">
                                    <p class="heading text-uppercase">SADHOKE PLANT</p>
                                    <p class="location mb-4">50 KM, Main G.T. Road, Sadhoke District, Gujranwala,
                                        Punjab P.O. Box No. 52386
                                    </p>
                                    <p class="number">+92 (55) 666 5774,<br> +92 (55) 666 5676,<br>+92330-1236661</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="bg-white address">
                                    <p class="heading text-uppercase">FAISALABAD OFFICE</p>
                                    <p class="location mb-4">Matco Foods Limited – Corn Starch Division<br>Plot 87,
                                        Block - K,
                                        Wapda City, Faisalabad
                                    </p>
                                    {{-- <p class="number">+92 (55) 666 5774,<br> +92 (55) 666 5676</p> --}}
                                </div>
                            </div>


                            <div class="item">
                                <div class="bg-white address">
                                    <p class="heading text-uppercase">FAISALABAD OFFICE</p>
                                    <p class="location mb-4">CORN STARCH PLANT – FAISALABAD<br>Plot # 53, Allama Iqbal
                                        Industrial City, SEZ, Faisalabad, Punjab
                                    </p>
                                    {{-- <p class="number">+92 (55) 666 5774,<br> +92 (55) 666 5676</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="row mb-4">
                    <div class="col-md-3 d-none d-sm-none d-md-block">
                        <div class="bg-white address">
                            <p class="heading">FAISALABAD OFFICE</p>
                            <p class="location mb-4">Matco Foods Limited – Corn Starch Division<br>Plot 87, Block - K,
                                Wapda City, Faisalabad
                            </p>

                        </div>
                    </div>
                    <div class="col-md-3 d-none d-sm-none d-md-block">
                        <div class="bg-white address">
                            <p class="heading">FAISALABAD OFFICE</p>
                            <p class="location mb-4">CORN STARCH PLANT – FAISALABAD<br>Plot # 53, Allama Iqbal
                                Industrial City, SEZ, Faisalabad, Punjab
                            </p>

                        </div>
                    </div>



                    {{-- <div class="col-md-12 company-location d-md-none">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="bg-white address">
                                    <p class="heading">REGISTERED OFFICE</p>
                                    <p class="location mb-4">Matco Foods Limited<br>B-1/A, S.I.T.E. Phase 1, Super
                                        Highway
                                        Industrial, Area,
                                        Karachi, Pakistan P.O. Box 75950
                                    </p>
                                    <p class="number">+92 (301) 8250969,<br>+92 (21) 3631 5099,<br> 92
                                        301-8250969</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="bg-white address">
                                    <p class="heading">RICE PLANT</p>
                                    <p class="location mb-4">A 15-16, S.I.T.E. Super Highway,
                                        Karachi, Pakistan
                                    </p>
                                    <p class="number">+92 (21) 3688 1297,<br> +92 (333) 120 7780</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="bg-white address">
                                    <p class="text-uppercase heading">RICE GLUCOSE PLANT</p>
                                    <p class="location mb-4">G-205, Gadap Road, S.I.T.E. Super Highway<br>Industrial
                                        Area,
                                        Karachi, Pakistan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="bg-white address">
                                    <p class="heading text-uppercase">SADHOKE PLANT</p>
                                    <p class="location mb-4">50 KM, Main G.T. Road, Sadhoke District, Gujranwala,
                                        Punjab P.O. Box No. 52386
                                    </p>
                                    <p class="number">+92 (55) 666 5774,<br> +92 (55) 666 5676</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- 
                    <div class="col-md-6 mt-5 pr-md-0 links">
                        <div class="address address-links align-items-center d-flex justify-content-center">
                            <img class="d-none d-sm-none d-md-block"
                                src="{{ asset('frontend-assets/img/website.png') }}" alt="">
                            <img class="d-md-none" src="{{ asset('frontend-assets/img/mwebsite.png') }}"
                                alt="">
                            <p class="location mb-0 ml-2"><a href="www.matcofoods.com">www.matcofoods.com</a></p>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-6 mt-5 pl-md-0 links">
                        <div class="address address-links align-items-center d-flex justify-content-center">
                            <img class="d-none d-sm-none d-md-block"
                                src="{{ asset('frontend-assets/img/emailimport.png') }}" alt="">
                            <img class="d-md-none" src="{{ asset('frontend-assets/img/memailimport.png') }}"
                                alt="">
                            <p class="location mb-0 ml-2"><a
                                    href="mailto:contact@matcofoods.com">contact@matcofoods.com</a>
                            </p>
                        </div>
                    </div> --}}
                </div>

                <div class="row">
                    <div class="col-md-6 mt-5 pr-md-0 links">
                        <div class="address address-links align-items-center d-flex justify-content-center">
                            <img class="d-none d-sm-none d-md-block"
                                src="{{ asset('frontend-assets/img/website.png') }}" alt="address">
                            <img class="d-md-none" src="{{ asset('frontend-assets/img/mwebsite.png') }}"
                                alt="address">
                            <p class="location mb-0 ml-2"><a href="https://www.matcofoods.com/">www.matcofoods.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mt-5 pl-md-0 links">
                        <div class="address address-links align-items-center d-flex justify-content-center">
                            <img class="d-none d-sm-none d-md-block"
                                src="{{ asset('frontend-assets/img/emailimport.png') }}" alt="address">
                            <img class="d-md-none" src="{{ asset('frontend-assets/img/memailimport.png') }}"
                                alt="address">
                            <p class="location mb-0 ml-2"><a
                                    href="mailto:contact@matcofoods.com">contact@matcofoods.com</a>
                            </p>
                        </div>
                    </div>


                </div>



                {{-- <p class="desc mb-4 text-uppercase">Phone numbers of head office, registered office</p>
                <p class="sub_heading text-uppercase">Details of Associated CompaniES</p>

                <p class="desc heading text-uppercase">JKT General Trading FZE</p>

                <p class="desc">It is a free zone establishment with limited liability registered in Sharjah
                    Airport
                    International Free Zone Authority, Sharjah United Arab Emirates (UAE) under trading license no.
                    12689. The registered office of the Establishment is at PO Box 123347, Sharjah, UAE. The
                    Establishment engages in general trading as per the trade license.</p>
                <p class="desc heading text-uppercase">Matco Marketing (Private) Limited</p>
                <p class="desc">It was incorporated in Pakistan as a private limited company in June 16, 2017.
                    Its main
                    business activity of wholesalers, indenting agents and manufacturer’s representative, sale
                    representative either on commission or profit sharing basis, import, export, locally distributed and
                    sale of all kind of Rice, Cereals and related commodities..</p>
                <p class="desc heading text-uppercase">Barentz Pakistan (Private) Limited</p>
                <p class="desc">Barentz Pakistan (Private) Limited has been incorporated in Pakistan on June
                    28, 2019 as
                    per agreement between Matco Foods Limited and Barentz International B.V. Matco Foods Limited has
                    subscribed 49% of total shareholding of Rs. 50 Million, thereby, constituting an associated company.
                    Barentz Pakistan is engaged in the sourcing of ingredients and additives for the local Food,
                    Nutrition & Pharmaceutical industry, from manufacturers around the world.</p> --}}
            </div>
            <div class="tab-pane fade text-center p-4 p-sm-4 p-md-0" id="governance">
                <h1 class="text-uppercase mb-4 primary-color">GOVERNANCE</h1>
                <p class="sub_heading text-uppercase mb-0">Shareholding Pattern</p>
                <p class="desc mb-4">Check embedded file <a target="_blank"
                        href="frontend-assets/pdf/Pattern of Shareholding.pdf">Pattern of share
                        holding</a></p>
                <p class="sub_heading text-uppercase mb-0">Name of the Legal AdvisoR</p>
                <p class="desc mb-0">Muhammad Javaid Akhtar</p>
                <p class="desc mb-4">A-55/56, Federal ‘B’ Area, Karachi, Pakistan</p>
                <p class="sub_heading text-uppercase mb-4"><a target="_blank" class="primary-color"
                        href="frontend-assets/pdf/Profile of Directors(Updated).pdf">PROFILE OF
                        DIRECTOR</a></p>
            </div>
            <div class="tab-pane fade text-center" id="notices">
                <h1 class="text-uppercase mb-5 primary-color">Notices</h1>
                <h5 class="text-uppercase mb-4 primary-color">Meetings</h5>
                <p class="desc mb-4">Notices of general meetings, dividend / bonus declaration and right issue</p>


                {{-- <p class="sub_heading text-uppercase mb-0">2020 - 2021</p>
                <p class="desc mb-4"><a target="_blank"
                        href="frontend-assets/pdf/Notice_of_Annual_General_Meeting_2021.pdf">Annual General Meeting
                        Notice</a></p>
                <p class="sub_heading text-uppercase mb-0">2019 - 2020</p>
                <p class="desc mb-4"><a target="_blank"
                        href="frontend-assets/pdf/Notice_of_Annual_General_Meeting_2020.pdf">Annual General Meeting
                        Notice</a></p>
                <p class="sub_heading text-uppercase mb-0">2018 - 2019</p>
                <p class="desc mb-0"><a target="_blank"
                        href="frontend-assets/pdf/Extraordinary_General_Meeting_Notice.pdf">Extra ordinary meeting
                        2018-2019</a></p>
                <p class="desc mb-4"><a target="_blank"
                        href="frontend-assets/pdf/Notice_of_Annual_General_Meeting_2019.pdf">Annual General Meeting
                        Notice</a></p>
                <p class="sub_heading text-uppercase mb-0">2017 - 2018</p>
                <p class="desc mb-5"><a target="_blank"
                        href="frontend-assets/pdf/Notice_of_Annual_General_Meeting_for_the_year_ended_June_30,_2018.pdf">Annual
                        General Meeting Notice</a></p> --}}

                <div class="container">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">2023 - 24
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>


                            <div id="collapseSeven" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/AGM Notice-Newspaper-English 2023.pdf">
                                            <div class="download-btn">
                                                <span class="">AGM Notice-Newspaper-English 2023</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/AGM Notice-Newspaper-Urdu 2023.pdf">
                                            <div class="download-btn">
                                                <span class="">AGM Notice-Newspaper-Urdu 2023</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Results of Poll for Special Resolutions at AGM held on 28-10-2023.pdf">
                                            <div class="download-btn">
                                                <span class="">Results of Poll for Special Resolutions at AGM held on 28-10-2023</span>
                                              
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>

                                    
                                 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">2022 - 23
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>


                            <div id="collapseSix" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Notice_of_AGM_for_Newpaper_2022.pdf">
                                            <div class="download-btn">
                                                <span class="">Annual General Meeting Notice 2022</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/NOTICE OF EOGM-ROZNAMA DUNYA-JUNE 1-2023.pdf">
                                            <div class="download-btn">
                                                <span class="">NOTICE OF EOGM-ROZNAMA DUNYA-JUNE 1-2023</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>

                                    
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/NOTICE OF EOGM-PAKISTAN TODAY-JUNE 1-2023.pdf">
                                            <div class="download-btn">
                                                <span class="">NOTICE OF EOGM-PAKISTAN TODAY-JUNE 1-2023</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">2020 - 21
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Notice_of_Annual_General_Meeting_2021.pdf">
                                            <div class="download-btn">
                                                <span class="">Annual General Meeting Notice</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">2019 - 20
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Notice_of_Annual_General_Meeting_2020.pdf">
                                            <div class="download-btn">
                                                <span class="">Annual General Meeting Notice</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left  text-center collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">2018 - 19
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Extraordinary_General_Meeting_Notice.pdf">
                                            <div class="download-btn">
                                                <span class="">Extra ordinary meeting
                                                    2018-2019</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Notice_of_Annual_General_Meeting_2019.pdf">
                                            <div class="download-btn">
                                                <span class="">Annual General Meeting
                                                    Notice</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">2017 - 18

                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Notice_of_Annual_General_Meeting_for_the_year_ended_June_30,_2018.pdf">
                                            <div class="download-btn">
                                                <span class="">Annual
                                                    General Meeting Notice</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="text-uppercase mb-4 primary-color">Announcements</h5>
                {{-- <p class="desc mb-0">Disclosure of Material Information </p>
                <p class="desc mb-4"><a target="_blank" href="">Corn Starch pdf</a></p> --}}
                <div class="container">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">Disclosure of Material Information
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="">
                                            <div class="download-btn">
                                                <span class="">Corn Starch pdf</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade container" id="election">
                <h1 class="text-uppercase mb-4 text-center primary-color">ELECTION OF DIRECTORS</h1>
                <div class="section-divider d-block d-sm-block d-md-none d-lg-none">
                    <hr>
                </div>
                <div class="row justify-content-center">
                    <div class="offset-md-1 col-md-8">
                        <table class="table table-borderless election">
                            <tbody>
                                <tr>
                                    <td>Mr. Jawed Ali Ghori<br><span>Chairman/Non-Executive Director</span><br
                                            class="d-md-none"><span class="d-md-none">Elected on October 31,
                                            2018</span></td>
                                    <td class="d-none d-sm-none d-md-table">Elected on October 31, 2018</td>
                                </tr>
                                <tr>
                                    <td>Mr. Khalid Sarfaraz Ghori<br><span>Chief Executive Director</span><br
                                            class="d-md-none"><span class="d-md-none">Elected on October 31,
                                            2018</span></td>
                                    <td class="d-none d-sm-none d-md-table">Elected on October 31, 2018</td>
                                </tr>
                                <tr>
                                    <td>Dr. Tariq Ghori<br><span>Executive Director</span><br class="d-md-none"><span
                                            class="d-md-none">Elected on October 31,
                                            2018</span></td>
                                    <td class="d-none d-sm-none d-md-table">Elected on October 31, 2018</td>
                                </tr>
                                <tr>
                                    <td>Mr. Faizan Ali Ghori<br><span>Executive Director</span><br
                                            class="d-md-none"><span class="d-md-none">Elected on October 31,
                                            2018</span></td>
                                    <td class="d-none d-sm-none d-md-table">Elected on October 31, 2018</td>
                                </tr>
                                <tr>
                                    <td>Mrs. Faryal Murtaza<br><span>Non-Executive Director</span><br
                                            class="d-md-none"><span class="d-md-none">Elected on October 31,
                                            2018</span></td>
                                    <td class="d-none d-sm-none d-md-table">Elected on October 31, 2018</td>
                                </tr>
                                <tr>
                                    <td>Ms. Ume Habibah Independent<br><span>Independent Director</span><br
                                            class="d-md-none"><span class="d-md-none">Elected on October 31,
                                            2018</span></td>
                                    <td class="d-none d-sm-none d-md-table">Elected on October 31, 2018</td>
                                </tr>
                                <tr>
                                    <td>Mr. Naeem-ur-Rehman Akhoond<br><span>Independent Director</span><br
                                            class="d-md-none"><span class="d-md-none">Elected on October 31,
                                            2018</span></td>
                                    <td class="d-none d-sm-none d-md-table">Elected on October 31, 2018</td>
                                </tr>
                                <tr>
                                    <td>Mr. Syed Kamran Rasheed<br><span>Independent Director</span><br
                                            class="d-md-none"><span class="d-md-none">Elected on October 31,
                                            2018</span></td>
                                    <td class="d-none d-sm-none d-md-table">Elected on October 31, 2018</td>
                                </tr>
                                <tr>
                                    <td>Mr. Abdul Samad Khan<br><span>Independent Director</span><br
                                            class="d-md-none"><span class="d-md-none">Elected on October 31,
                                            2018</span></td>
                                    <td class="d-none d-sm-none d-md-table">Elected on October 31, 2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade text-center" id="investorInformation">
                <div class="container">
                    <h1 class="text-uppercase mb-4 primary-color">INVESTOR INFORMATION</h1>

                    <p class="sub_heading text-uppercase mb-0">Stock Ticker:</p>
                    <p class="desc mb-0">Symbol of the company assigned by respective Stock Exchange and website
                        links of
                        Stock Exchanges where the company is ‘MFL’.</p>
                    <p class="desc mb-4">Pakistan Stock Exchange Website : <a href="www.psx.com.pk">www.psx.com.pk</a>
                    </p>
                    <p class="sub_heading text-uppercase mb-0">e-Dividend Mandate: </p>
                    <p class="desc mb-4"> <a target="_blank" href="frontend-assets/pdf/e-Dividend Mandate From.pdf">e-Dividend Mandate Form</a>
                        <p class="sub_heading text-uppercase mb-0">Proxy Form AGM 2023: </p>
                        <p class="desc  mb-0"> <a target="_blank" href="frontend-assets/pdf/Proxy Form-English-AGM 2023.pdf">Proxy Form-English-AGM 2023</a>
                        <p class="desc mb-4"> <a target="_blank" href="frontend-assets/pdf//Proxy Form-Urdu-AGM 2023.pdf">Proxy Form-Urdu-AGM 2023</a>

                            <p class="sub_heading text-uppercase mb-0">Postal Ballot AGM 2023: </p>
                            <p class="desc mb-0"> <a target="_blank" href="frontend-assets/pdf/Postal Ballot-English-AGM 2023.pdf">Postal Ballot-English-AGM 2023</a>
                            <p class="desc mb-4"> <a target="_blank" href="frontend-assets/pdf//Postal Ballot-Urdu-AGM 2023.pdf">Postal Ballot-Urdu-AGM 2023</a>
    

                    {{-- <p class="sub_heading text-uppercase mb-0">Proxy Form AGM 2023: </p> --}}

                    
                    {{-- <p class="desc mb-4"> <a target="_blank" href="frontend-assets/pdf/Proxy Form-English-AGM 2023.pdf">Proxy Form-English-AGM 2023</a> --}}

                        {{-- <p class="sub_heading text-uppercase mb-0">Proxy Form AGM 2023: </p> --}}


                    {{-- <p class="desc mb-4"> <a target="_blank" href="frontend-assets/pdf/Postal Ballot-Urdu-AGM 2023.pdf">Postal Ballot-Urdu-AGM 2023</a>
                        <p class="sub_heading text-uppercase mb-0">Postal Ballot AGM 2023: </p> --}}

                    {{-- <p class="desc mb-4"> <a target="_blank" href="frontend-assets/pdf/Proxy Form-Urdu-AGM 2023.pdf">Proxy Form-Urdu-AGM 2023</a>
                        <p class="sub_heading text-uppercase mb-0">Postal Ballot AGM 2023: </p> --}}

                    {{-- <p class="desc mb-4"> <a target="_blank" href="frontend-assets/pdf/Postal Ballot-English-AGM 2023.pdf">Postal Ballot-English-AGM 2023</a></p> --}}
                    
                    
                    

                    <p class="sub_heading text-uppercase mb-0">Financial highlights for previous six years:</p>
                    <p class="desc mb-4">Check embedded file <a target="_blank"
                            href="frontend-assets/pdf/6 Years data for Annual Report.pdf"> 6 Years data for Annual
                            Report</a></p>

                    <p class="sub_heading text-uppercase ">EPS, P/E ratio and breakup value as per latest yearly
                        financial
                        statements:</p>
                    <div class="row justify-content-center mb-4">
                        {{-- <div class="col-md-4 text-center">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>EPS</td>
                                        <td>1.24</td>
                                    </tr>
                                    <tr>
                                        <td>Breakup Value</td>
                                        <td>55.29</td>
                                    </tr>
                                    <tr>
                                        <td>P/E Ratio</td>
                                        <td>15.37</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> --}}
                        <div class="col-md-3">
                            <div class="statistics mx-auto">
                                <h2>3.45</h2>
                                <p>EPS</p>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 mt-sm-4 mt-md-0">
                            <div class="statistics mx-auto">
                                <h2>57.67</h2>
                                <p>Breakup Value</p>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 mt-sm-4 mt-md-0">
                            <div class="statistics mx-auto">
                                <h2>7.22</h2>
                                <p>P/E Ratio</p>
                            </div>
                        </div>
                    </div>


                    <p class="sub_heading text-uppercase ">Free float of the shares of the Company:</p>
                    {{-- <div class="row justify-content-center mb-4">
                        <div class="col-md-8 text-center">
                            <table class="table d-none d-sm-none d-md-table">
                                <tbody>
                                    <tr>
                                        <td>2020-21</td>
                                        <td>As at September 30, 2020</td>
                                        <td><a class="text-decoration-underline" href="">Free Float September 30,
                                                2020</a></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4">2019-20</td>
                                        <td>As at June 30, 2020</td>
                                        <td><a class="text-decoration-underline" href="">Free Float June 30, 2020</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>As at March 31, 2020</td>
                                        <td><a class="text-decoration-underline" href="">Free Float March 31, 2020</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>As at December 31, 2019</td>
                                        <td><a class="text-decoration-underline" href="">Free Float December 31,
                                                2019</a></td>
                                    </tr>
                                    <tr>
                                        <td>As at September 30, 2019</td>
                                        <td><a class="text-decoration-underline" href="">Free Float September 30,
                                                2019</a></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4">2018-19</td>
                                        <td>As at June 30, 2019</td>
                                        <td><a class="text-decoration-underline" href="">Free Float June 30, 2019</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>As at March 31, 2019</td>
                                        <td><a class="text-decoration-underline" href="">Free Float March 31, 2019</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>As at December 31, 2018</td>
                                        <td><a class="text-decoration-underline" href="">Free Float December 31,
                                                2018</a></td>
                                    </tr>
                                    <tr>
                                        <td>As at September 30, 2018</td>
                                        <td><a class="text-decoration-underline" href="">Free Float September 30,
                                                2018</a></td>
                                    </tr>
                                    <tr>
                                        <td>2017-18</td>
                                        <td>As at June 30, 2018</td>
                                        <td><a class="text-decoration-underline" href="">Free Float June 30, 2018</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table d-md-none">
                                <tbody>
                                    <tr>
                                        <td colspan="2">2020-21</td>
                                    </tr>
                                    <tr>
                                        <td>As at September 30, 2020</td>
                                        <td><a>Free Float September 30, 2020</a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">2019-20</td>
                                    </tr>
                                    <tr>
                                        <td>As at June 30, 2020</td>
                                        <td><a class="text-decoration-underline" href="">Free Float June 30, 2020</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>As at March 31, 2020</td>
                                        <td><a class="text-decoration-underline" href="">Free Float March 31, 2020</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>As at December 31, 2019</td>
                                        <td><a class="text-decoration-underline" href="">Free Float December 31,
                                                2019</a></td>
                                    </tr>
                                    <tr>
                                        <td>As at September 30, 2019</td>
                                        <td><a class="text-decoration-underline" href="">Free Float September 30,
                                                2019</a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">2018-19</td>
                                    </tr>
                                    <tr>
                                        <td>As at June 30, 2019</td>
                                        <td><a class="text-decoration-underline" href="">Free Float June 30, 2019</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>As at March 31, 2019</td>
                                        <td><a class="text-decoration-underline" href="">Free Float March 31, 2019</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>As at December 31, 2018</td>
                                        <td><a class="text-decoration-underline" href="">Free Float December 31,
                                                2018</a></td>
                                    </tr>
                                    <tr>
                                        <td>As at September 30, 2018</td>
                                        <td><a class="text-decoration-underline" href="">Free Float September 30,
                                                2018</a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">2017-18</td>
                                    </tr>
                                    <tr>
                                        <td>As at June 30, 2018</td>
                                        <td><a class="text-decoration-underline" href="">Free Float June 30, 2018</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> --}}

                    <div class="accordion" id="accordionExample">
                        {{-- <div class="card">
                            <div class="card-header" id="unclaimed-dividend-shares">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapse-unclaimed-dividend-shares"
                                        aria-expanded="false"
                                        aria-controls="collapse-unclaimed-dividend-shares">Unclaimed Dividend and
                                        Shares
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse-unclaimed-dividend-shares" class="collapse"
                                aria-labelledby="unclaimed-dividend-shares" data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Unclaimed Shares.pdf">
                                            <div class="download-btn">
                                                <span class="">Unclaimed Shares</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/2nd Final Dividend - June 30, 2019.pdf">
                                            <div class="download-btn">
                                                <span class="">2nd Final Dividend - June 30, 2019</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/1st Final Dividend - June 30, 2018.pdf">
                                            <div class="download-btn">
                                                <span class="">1st Final Dividend - June 30, 2018</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/1st Interim Dividend - December 31, 2017.pdf">
                                            <div class="download-btn">
                                                <span class="">1st Interim Dividend - December 31, 2017</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="card">
                            <div class="card-header" id="heading-23">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapse-23" aria-expanded="false"
                                        aria-controls="collapse-23">2022 - 23
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse-23" class="collapse" aria-labelledby="heading-23"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free Float Share - September 30, 2022.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float September 30, 2022</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free Float Shares - December 31, 2022.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float December 31, 2022</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/MFL-Free Float as at March 31, 2023.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float March 31, 2023</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/MFL-Free Float as at June 30, 2023.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float June 30, 2023</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>






                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-22">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapse-22" aria-expanded="false"
                                        aria-controls="collapse-22">2021 - 22
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse-22" class="collapse" aria-labelledby="heading-22"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free Float December 31, 2021.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float December 31, 2021</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free Float September 30, 2021.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float September 30, 2021</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Free Float March 31, 2022.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float March 31, 2022</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>


                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free Float Shares June 30, 2022.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float June 30, 2022</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">2020 - 21
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Free_Float_June_30,_2021.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float June 30, 2021</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Free_Float_March_31,_2021.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float March 31, 2021</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free_Float_December_31,_2020.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float December 31, 2020</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free_Float_September_30,_2020.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float September 30, 2020</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">2019 - 20
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Free_Float_June_30,_2020.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float June 30, 2020</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Free_Float_March_31,_2020.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float March 31, 2020</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free_Float_December_31,_2019.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float December 31, 2019</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/NFFSecurityWiseSummaryReport157070715146010_4_1_1091570703049570.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float September 30, 2019</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left  text-center collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">2018 - 19
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free_Float_Shares_as_at_March_31,_2019(1).pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float June 30, 2019</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free_Float_Shares_as_at_March_31,_2019.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float March 31, 2019</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free_Float_as_on_December_31,_2018.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float December 31, 2018</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Free_Float_September_30,_2018.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float September 30, 2018</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">2017 - 18
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Free_Float_June_30,_2018.pdf">
                                            <div class="download-btn">
                                                <span class="">Free Float June 30, 2018</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="sub_heading text-uppercase my-3">VIS CREDIT RATING COMPANY LIMITED:</p>
                    {{-- <p class="desc mb-2">Check embedded file <a href="#"> 6 Year Financial Performance</a></p> --}}
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-4 text-center">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Date</td>
                                        <td>December 12, 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Rating Type</td>
                                        <td>Entity</td>
                                    </tr>
                                    <tr>
                                        <td>Long Term</td>
                                        <td>BBB+</td>
                                    </tr>
                                    <tr>
                                        <td>Short Term</td>
                                        <td>A-2</td>
                                    </tr>
                                    <tr>
                                        <td>Outlook</td>
                                        <td>Stable</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <p class="sub_heading text-uppercase mb-0">Contact details for assisting and handling investor
                        grievances:</p>
                    <p class="desc mb-4">For Complaints / Suggestions please write to the Company Secretary on <a
                            href="#">danish.ahmed@matcofoods.com</a></p> --}}

                    <p class="sub_heading text-uppercase mb-0">Website Compliance Certificate</p>
                    <p class="desc mb-4">Check embedded file <a target="_blank"
                            href="frontend-assets/pdf/Website_Compliance_Certificate.pdf"> Website Compliance
                            Certificate</a></p>

                    <p class="sub_heading text-uppercase mb-0">Registrar of the Company:</p>
                    <p class="desc mb-0">CDC Share Registrar Service Limited.</p>
                    <p class="desc mb-0">CDC House, 99-B, Block - B</p>
                    <p class="desc mb-0">S.M.C.H.S, Main Shahra-e-Faisal</p>
                    <p class="desc mb-0">Karachi-74400.</p>
                    <p class="desc mb-0">Tel: Customer Support Service (Toll Free) 0800-CDCPL (23275)</p>
                    <p class="desc mb-0">Fax: (92-21) 34326053</p>
                    <p class="desc mb-0">Email: <a href="mailto:info@cdcsrsl.com"> info@cdcsrsl.com</a></p>
                    <p class="desc mb-4">Website: <a href="www.cdcsrsl.com">www.cdcsrsl.com</a></p>

                    <p class="sub_heading text-uppercase mb-0">Auditors of the Company:</p>
                    <p class="desc mb-0">Grant Thornton Anjum Rahman | Chartered Accountants</p>
                    <p class="desc mb-4">1st & 3rd Floor, Modern Motors House Beaumont Road, Karachi, Pakistan</p>

                    <p class="sub_heading text-uppercase  mb-0">Contact Details</p>
                    <p class="desc mb-0">If you are a shareholder, you can contact us at:</p>
                    <p class="desc mb-0">Muhammad Noman Ansari,</p>
                    <p class="desc  mb-0">ACMA</p>
                    <p class="desc mb-0"><a href="mailto:noman.ansari@matcofoods.com">noman.ansari@matcofoods.com</a>
                    </p>
                    <p class="desc mb-0"><a href="mailto:corporate@matcofoods.com">corporate@matcofoods.com</a>
                    </p>
                    <p class="desc">PH: +92 0300 8617763</p>
                </div>
            </div>
            <div class="tab-pane fade text-center" id="financialResult">
                <h1 class="text-uppercase mb-5 primary-color">FINANCIAL RESULTS</h1>
                <div class="container">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">2023 - 24
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseSeven" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row text-left">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Condensed Interim Financial Statements for the period ended September 30, 2023.pdf">
                                            <div class="download-btn">
                                                <span class="">1st Quarterly Report </span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/MFL-Half Year Report 2024-signed.pdf">
                                            <div class="download-btn">
                                                <span class="">Half Yearly Report 2024</span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/3RD QUARTERLY FINANCIAL STATEMENTS 2024.pdf">
                                            <div class="download-btn">
                                                <span class="">3rd Quarterly Report 2024</span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>


                                 

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapsefive" aria-expanded="false"
                                        aria-controls="collapsefive">2022 - 23
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapsefive" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row text-left">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Matco_1st_Quarterly_Report_2023.pdf">
                                            <div class="download-btn">
                                                <span class="">1st Quarterly Report </span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/2nd Quarterly Report 2023-signed.pdf">
                                            <div class="download-btn">
                                                <span class="">2nd Quarterly Report </span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>


                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/3rd Quarterly Report 2023.pdf">
                                            <div class="download-btn">
                                                <span class="">3rd Quarterly Report </span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Annual Report 2023_opt 2.pdf">
                                            <div class="download-btn">
                                                <span class="">Annual Report 2023</span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseZero" aria-expanded="false"
                                        aria-controls="collapseZero">2021 - 22
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseZero" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row text-left">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Matco_1st_Quarterly_Report_2022.pdf">
                                            <div class="download-btn">
                                                <span class="">1st Quarterly Report </span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Half Yearly Report 2022.pdf">
                                            <div class="download-btn">
                                                <span class="">Half Yearly Report</span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/3rd Quarterly Report 2022 Final.pdf">
                                            <div class="download-btn">
                                                <span class="">3rd Quarterly Report </span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Annual Report 2022.pdf">
                                            <div class="download-btn">
                                                <span class="">Annual Report 2022</span>
                                                <img cl src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                {{-- <img clasnoneblock noneblock d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}" alt="" /> --}}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">2020 - 21
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row text-left">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Annual_Report_2021.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Annual Report 2021</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Third_Quarterly_Report_2021.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Third Quarterly Report 2021</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/halfyearlyreport2021-finalNew.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Half Yearly Report 2021</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/1st_Quarterly_Report_2021.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco First Quarterly Report 2021</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">2019 - 20
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body row text-left">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Annual_Report_2020.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Annual Report 2020</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/3rd_Quarterly_Report_2019-20.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Third Quarterly Report 2019 -
                                                    2020</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Half_Yearly_Report_2019-20.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Half Yearly Report 2019 -
                                                    2020</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Matco_First_Quarterly_Report_2019-20.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco First Quarterly Report 2019 -
                                                    2020</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left  text-center collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">2018 - 19
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body row text-left">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Annual_Report_2019.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Annual Report 2019</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Third_Quarterly_Report_March_31,_2019.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Third Quarterly Report 2019</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Half_Yearly_Report_2019_Matco_Foods.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Half Yearly Report 2019</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/First_Quarter_2018.pdf">
                                            <div class="download-btn">
                                                <span class="">First Quarter 2018</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">2017 - 18

                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body row text-left">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Final Annual Report 2018.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Final Annual Report, 2018</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/Matco3rdQuarterAccountsMarch312018.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco 3rd Quarter Accounts March 31,
                                                    2018</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Matco_Report2.pdf">
                                            <div class="download-btn">
                                                <span class="">Matco Half Yearly Accounts December 31,
                                                    2017</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade text-center primary-color" id="announcement">
                <h1 class="text-uppercase mb-4">Announcement</h1>
                <p class="desc mb-4"><a href="#">Disclosure of Material Information - Corn Starch</a></p>
            </div>
            <div class="tab-pane fade text-center primary-color" id="newsLetter">
                <h1 class="text-uppercase my-5">NEWS LETTER</h1>
                <p class="desc mb-4"><a href="#">Click Here to Download</a></p>
            </div>
            <div class="tab-pane fade text-center" id="unclaimed">
                <div class="container">
                    <h1 class="text-uppercase mb-4 primary-color">Unclaimed Dividend and Shares</h1>

                    {{-- <p class="sub_heading text-uppercase ">Free float of the shares of the Company:</p> --}}

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="unclaimed-dividend-shares">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapse-unclaimed-dividend-shares"
                                        aria-expanded="false"
                                        aria-controls="collapse-unclaimed-dividend-shares">Unclaimed Dividend and
                                        Shares
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse-unclaimed-dividend-shares" class="collapse"
                                aria-labelledby="unclaimed-dividend-shares" data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/D-1-1st Interim Dividend 2017-18.pdf">
                                            <div class="download-btn">
                                                <span class="">D-1-1st Interim Dividend 2017-18</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/D-2-Final Dividend 2017-18.pdf">
                                            <div class="download-btn">
                                                <span class="">D-2-Final Dividend 2017-18</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/D-3-Final Dividend 2018-19.pdf">
                                            <div class="download-btn">
                                                <span class="">D-3-Final Dividend 2018-19</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/D-4-Final Dividend 2019-20.pdf">
                                            <div class="download-btn">
                                                <span class="">D-4-Final Dividend 2019-20</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <a target="_blank"
                                            href="frontend-assets/pdf/List Unclaimed Shares.pdf">
                                            <div class="download-btn">
                                                <span class="">List Unclaimed Shares</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="download" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="download" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade text-center" id="corporateBriefingSession">
                <div class="container">
                    <h1 class="text-uppercase mb-4 primary-color">Corporate Briefing Session</h1>

                    {{-- <p class="sub_heading text-uppercase ">Free float of the shares of the Company:</p> --}}

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="unclaimed-dividend-shares">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-center" type="button"
                                        data-toggle="collapse" data-target="#collapse-unclaimed-dividend-shares"
                                        aria-expanded="false"
                                        aria-controls="collapse-unclaimed-dividend-shares">Corporate Briefing Session
                                        <i class="d-none d-sm-none d-md-block fa fa-plus pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-down pull-right"></i>
                                        <i class="d-md-none fa fa-chevron-up pull-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse-unclaimed-dividend-shares" class="collapse"
                                aria-labelledby="unclaimed-dividend-shares" data-parent="#accordionExample">
                                <div class="card-body row">
                                    <div class="col-md-6 my-1">
                                        <a target="_blank" href="frontend-assets/pdf/Analyst Briefing 2023.pdf">
                                            <div class="download-btn">
                                                <span class="">Analyst Briefing 2023</span>
                                                <img class=""
                                                    src="{{ asset('frontend-assets/img/download.png') }}"
                                                    alt="" />
                                                <img class="d-none d-sm-none d-md-none"
                                                    src="{{ asset('frontend-assets/img/mdownload.png') }}"
                                                    alt="" />
                                            </div>
                                        </a>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @section('afterScripts')
        <script>
            $(document).ready(function() {
                if (window.matchMedia("(max-width: 767px)").matches) {
                    $(".borad.sm-directors").slice(0, 5).show();
                    $('.view-more.btn').on('click', function(e) {
                        e.preventDefault();
                        $(".borad.sm-directors:hidden").slice(0, 5).slideDown();
                        if ($(".borad.sm-directors:hidden").length == 0) {
                            $(".view-more.btn").css('display', 'none');
                        }
                    })
                }
            });
        </script>
    @endsection
</x-guest-layout>
