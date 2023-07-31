(function($) {
    window.onload = function() {
        $(document).ready(function() {
            backToTop();
            menuMobile();
            searchHeader();
            socialMediaToggle();
            pageNav();
            serviceSidebar();
            homeServiceCarousel();
            $('.show-flk').addClass('active');
            showMoreItem()
        });
    };
})(jQuery);

if ($(window).width() > 1024) {
    new WOW().init();
}
$(document).mouseup(function(e) {
    // if the target of the click isn't the container nor a descendant of the container
    if (!$('.header__search').is(e.target) && $('.header__search').has(e.target).length === 0) {
        $('.header__search form').removeClass('active');
    }
});

function resizeFlickity() {
    $('.home-banner').removeClass('flickity-before-show').flickity('resize')
}
resizeFlickity()

// Set same height item
var setHeight = function setSameHeight(h, cl) {
    var h = 0;
    $(cl).each(function() {
        if ($(this).outerHeight() > h) {
            h = $(this).outerHeight();
        }
    }).css({ 'height': h });
}

if ($(window).width() > 1024) {
    var footerItemTitle = setHeight('ft', '.footer-item__title')
}


var hst = setHeight('home-service-title', '.home-service-item__title')
var hsd1 = setHeight('home-service-desc', '.home-service-item__desc')

var setMinHeight = function setSameMinHeight(k, cls) {
    var k = 0;
    $(cls).each(function() {
        if ($(this).outerHeight() > k) {
            k = $(this).outerHeight();
        }
    }).css({ 'min-height': k });
}

var hsdmin = setMinHeight('home-service-desc', '.home-service-item__desc')

function backToTop() {
    var backToTop = document.querySelector(".backToTop");

    if (backToTop == null) {
        return 0;
    } else {
        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 10) {
                backToTop.classList.add("show__backToTop");
            } else {
                backToTop.classList.remove("show__backToTop");
            }
        });
        backToTop.addEventListener("click", function() {
            window.scroll({
                top: 0,
                behavior: "smooth"
            });
        });
    }
}

function searchHeader() {
    $('.header__search-btn').click(function() {
        $(this).next('form').toggleClass('active')
    })
}


function menuMobile() {
    if (
        $(".header__bars").length ||
        $(".menu-mobile").length ||
        $(".overlay").length
    ) {
        $(".header__bars").click(function() {
            $(".overlay").addClass("overlay-active");
            $(".menu-mobile").addClass("menu-mobile-active");
        });
        $(".overlay").click(function() {
            $(".overlay").removeClass("overlay-active");
            $(".menu-mobile").removeClass("menu-mobile-active");
            $('.box-search_header').removeClass('active');
            $('.sidebar-service').removeClass('active');
        });
        $(".menu-mobile-close").click(function() {
            $(".overlay").removeClass("overlay-active");
            $(".menu-mobile").removeClass("menu-mobile-active");
        });
    }
    $('.menu-mobile').show();
    $(".menu-mobile ul li.menu-item-has-children ul").before(`<span class="li-plus"></span>`);
    $('.current-menu-item').parent().prev('.li-plus').addClass('clicked');
    if ($(".li-plus").length) {
        $(".li-plus").click(function(e) {
            if ($(this).hasClass("clicked")) {
                $(this).removeClass("clicked").next("ul").slideUp(500);
                $(this).parent().removeClass('active');
            } else {
                $(this).addClass("clicked").next("ul").slideDown(500);
                $(this).parent().addClass('active')
            }
        });
    }

}

function socialMediaToggle() {
    if ($('.fixed-social-media').length) {
        $('.social-media__button').click(function() {
            if ($(this).hasClass('clicked')) {
                $(this).removeClass('clicked');
                $('.social-media__list').hide('200')
            } else {
                $(this).addClass('clicked');
                $('.social-media__list').show('200')
            }
        })
    }
}

// Page Navigation
function pageNav() {
    $('.page-nav__list').show();
    $('.page-nav__button').click(function() {
        $(this).addClass('clicked');
        $(this).parent().find('.page-nav__list').addClass('clicked')
    })
    $('.page-nav__close').click(function() {
        $('.page-nav__button').removeClass('clicked');
        $(this).parent().removeClass('clicked')
    })
}

function serviceContentHeight() {
    if ($(window).width() >= 1200) {
        // $('.service-item__content-inner').each(function() {
        //     $(this).height($(this).next('.service-item__image-wrapper').find('.service-item__image').outerHeight());
        // })
    }
}
serviceContentHeight();


function serviceSidebar() {
    $('.sidebar-service-item__head').click(function() {
        $(this).toggleClass('active')
        $(this).next('nav').slideToggle('400');
    })

    $('.service-sidebar-button').click(function() {
        $('.sidebar-service').addClass('active');
        $('.overlay').addClass('overlay-active');
    })

    $('.sidebar-service__close').click(function() {
        $('.sidebar-service').removeClass('active');
        $('.overlay').removeClass('overlay-active');
    })
}


jQuery(document).ready(function($) {

    var full_path = location.href.split("#")[0];
    $(".page-nav__list a").each(function() {
        var $this = $(this);
        if (full_path.indexOf($this.prop("href").split("#")[0]) != -1) {
            $this.parent().addClass("current-menu-item");
        }
    });
});

function homeServiceCarousel() {
    if ($(window).width() < 1023) {
        $('.home-service__carousel').flickity({
            groupCells: true,
            cellAlign: "left",
            contain: true,
            imagesLoaded: true,
            autoPlay: 5000,
        })
    } else {
        $('.home-service__carousel').flickity({
            cellAlign: "left",
            contain: true,
            imagesLoaded: true,
            autoPlay: 5000,
        })
        $(".home-service-item").mouseenter(function() {
            $('.home-service__carousel').flickity('resize');
        }).mouseleave(function() {
            $('.home-service__carousel').flickity('resize')
        });
    }
}

function showMoreItem() {
    if ($(".recruitment-item-wrapper").length) {
        size_li = $(".recruitment-item-wrapper").length;
        x = 4;
        $(".recruitment-item-wrapper:lt(" + x + ")").show();
        $(".show-more-recruitment").click(function() {
            x = x + 4 <= size_li ? x + 4 : size_li;
            $(".recruitment-item-wrapper:lt(" + x + ")").show();
            $(".recruitment-item-wrapper:lt(" + x + ")").each(function() {
                $(this).find('img').attr('src', $(this).find('img').data('src'));
            })
            if (x == size_li) {
                $(".show-more-recruitment").hide();
            }
        });
        if (x >= size_li) {
            $(".show-more-recruitment").hide();
        }
    }

    if ($('.recruitment-item-wrapper').length < 5) {
        $('.show-more-recruitment').hide();
    }
}