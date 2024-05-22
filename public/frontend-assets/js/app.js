// home section 1

$(document).ready(function () {
    $('.home-section-1 .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        touchDrag  : false,
        mouseDrag  : false,
        autoplay: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
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

    $('.new-slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: false,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
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

    $('.certification .owl-carousel').owlCarousel({
        loop: true,
        dots: true,
        nav: false,
        autoplay: false,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    $('.company-location .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
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


    $('.news .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
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

    $('.international_brands .owl-carousel').owlCarousel({
        loop: true,
        dots: false,
        margin: 10,
        nav: true,
        autoplay: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 6
            }
        }
    });

    $('.local_brands .owl-carousel').owlCarousel({
        loop: true,
        dots: false,
        margin: 10,
        nav: true,
        autoplay: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 6
            }
        }
    });

    $('.journey .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: false,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $('.relation .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: false,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $('#awards .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    $('#sustainability .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: false,
        autoplay: false,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
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

    $(".input").focusout(function () {
        // $(".input").val("");
    });

    $(".fa-search").click(function () {
        $(".input").toggleClass("active");
        $(".input").val("");
        $(".fa-times").toggleClass("active");
        $("#product_list").empty();
    });

    $(".fa-times").click(function () {
        $(".input").toggleClass("active");
        $(".fa-times").toggleClass("active");
        $("#product_list").empty();
    });

    $('.js-example-basic-single').select2({
        minimumResultsForSearch: -1
    });

    $('.open-modal').on('click', function (e) {
        $(".modal-ne-image").attr("src", $(this).data("url"));
        $(".modal-ne-title").text($(this).data("title"));
        $(".modal-ne-date").text($(this).data("date"));
        $(".modal-ne-desc").text($(this).data("desc"));
    })

    let pathname = window.location.pathname;
    if (pathname == "/products" || pathname == "/investor-relations" || pathname == "/falak" || pathname == "/basmati-rice" || pathname == "/organic-rice" || pathname == "/rice-protein" || pathname == "/private-labelling" || pathname == "/maize-corn-starch" || pathname == "/about-us" || pathname == "/non-basmati-rice" || pathname == "/sustainability" || pathname == "/rice-syrup" || pathname == "/solids" || pathname == "/dextrose-monohydrate" || pathname == "/other-leading-brands" || pathname == "/careers" || pathname == "/contact-us") {
        $('.header .navbar .nav-item .nav-link').css({ "color": "white", })
        $('.header .navbar .nav-item i').css({ "color": "white", })
        $('.header .desktop img').attr("src", './frontend-assets/img/white-matco-logo.png');
    }

    // if (pathname == "/non-basmati-rice") {
    //     $('.header .desktop img').attr("src", './frontend-assets/img/white-matco-logo.png');
    // }

    $('.journey-modal').on('click', function name(e) {
        $(".modal-title").text($(this).data("year"));
        $(".modal-desc-body").text($(this).data("desc"));
    })

    // $('#financialResult .accordion').on('show.bs.collapse', function (e) {
    //     console.log(this);
    // })

    $('#search-product').on('keyup', function (e) {
        // e.preventdefault()
        var query = $(this).val();
        if (!query.trim()) {
            $("#product_list").empty();
        }
        $.ajax({
            url: '/search',
            type: "GET",
            data: { 'product': query },
            success: function (data) {
                $('#product_list').html(data);
            }
        })
    });


});