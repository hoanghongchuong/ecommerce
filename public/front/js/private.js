jQuery(function ($) {
    // $("header").load("header.html");
    // $("footer").load("footer.html");

    $(function() {
        return $(".modal").on("show.bs.modal", function() {
            var curModal;
            curModal = this;
            $(".modal").each(function() {
                if (this !== curModal) {
                    $(this).modal("hide");
                }
            });
        });
    });


    $('.banner-slider').owlCarousel({
        loop:true,
        autoplay: true,
        items:1,
        dots: true,
        nav: false,
        responsive:{
            0:  { items:1, center:true },
            480:{ items:1 },
            678:{ items:1 },
            960:{ items:1 }
        }
    });

    $('.product-slider').owlCarousel({
        loop:true,
        autoplay: true,
        items:4,
        margin: 20,
        dots: false,
        nav: false,
        responsive:{
            0:  { items:1, center:true },
            480:{ items:2 },
            678:{ items:3 },
            960:{ items:4 }
        }
    });

    $('.watched-slider').owlCarousel({
        loop:false,
        autoplay: true,
        items:10,
        margin: 10,
        dots: false,
        nav: false,
        responsive:{
            0:  { items:2 },
            480:{ items:4 },
            678:{ items:8 },
            960:{ items:10 }
        }
    });


    $('.cateChild-slider').owlCarousel({
        loop:true,
        autoplay: true,
        items:6,
        margin: 0,
        dots: false,
        nav: true,
        navText: ["<img src='/front/images/icon/i-left.png'>","<img src='/front/images/icon/i-right.png'>"],
        responsive:{
            0:  { items:2 },
            480:{ items:3 },
            678:{ items:4 },
            960:{ items:6 }
        }
    });

    $('.catalog-slider').owlCarousel({
        autoWidth:true,
        loop:false,
        autoplay: true,
        items:5,
        margin: 0,
        dots: false,
        nav: false,
        responsive:{
            0:  { items:3 },
            480:{ items:4 },
            678:{ items:4 },
            960:{ items:5 }
        }
    });

    //slider image product
    $(document).ready(function () {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: false,
            pagination: false,
            autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200
        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function () {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: 4,
                dots: false,
                autoplay: false,
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                margin: 10,
                nav: true,
                navText: ["<img src='/front/images/icon/prev-3.png'>", "<img src='/front/images/icon/next-3.png'>"],
                responsiveRefreshRate: 100,
                responsive: {
                    0: {
                        items: 1
                    },
                    420: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 3
                    },
                    1300: {
                        items: 4
                    },
                    1590: {
                        items: 4
                    }
                }
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;

            //if you disable loop you have to comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    });

    // Select all links with hashes
    $('#IntroMenu a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                    });
                }
            }
        });


    $(document).ready(function () {

        $('#check-code').click(function (e) {
            e.preventDefault();
            $('.check-code').toggleClass('show');
        });

    });


    $(window).scroll(function () {
        if($(window).scrollTop() > 650) {
            $("#IntroMenu").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("#IntroMenu").removeClass("active");
        }
    });

    //add number product
    $(function () {
        $('.add').on('click',function(){
            var $qty=$(this).closest('.action-number').find('.qty');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal)) {
                $qty.val(currentVal + 1);
            }
        });
        $('.minus').on('click',function(){
            var $qty=$(this).closest('.action-number').find('.qty');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal) && currentVal > 0) {
                $qty.val(currentVal - 1);
            }
        });
    });

    $(document).ready(function () {
        $('.read-more a').click(function (e) {
            e.preventDefault();
            $('.desc').addClass('show');
            $('.read-more').addClass('hidden');
        })
    });

    $(document).ready(function() {
        $("input[name='acc-check']").click(function() {
            var test = $(this).val();

            $("div.desc-acc").hide();
            $("#account-" + test).show();
        });
    });

    $(document).ready(function() {
        $("input[name='bank']").click(function() {
            var test = $(this).val();

            $(".desc-bank").hide();
            $("#bankInfo-" + test).show();
        });
    });


    $(document).ready(function () {
        $('.cate > .ul-list > li').click(function (e) {
            e.preventDefault();
            $(this).closest('.ul-list').find('> li').removeClass('current');
            $(this).addClass('current');
        })
    });

    $(document).ready(function(){

        $('#province_id').change(function(){
            var pro_id = $(this).val();
            // alert(pro_id);
            // $.get("ajax/province/"+pro_id, function(data){
            //     // alert(data);
            //     $('#district_id').html(data);
            // });
            $.ajax({
               url: window.urlLoadDistrict,
               type: 'get',
               data: {
                    id: pro_id
               },
                success: function (data) {
                    $('#district_id').html(data);
                }
            });
        });

        CKEDITOR.replace('contentProduct1' );
        CKEDITOR.replace('contentProduct2' );



    });
});
