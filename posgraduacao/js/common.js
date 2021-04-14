$(function () {
    if ($(window).width() > 767) {

        $(".dropdown").hover(
                function () {
                    if ($(this).hasClass("dropdown-not-auto") == true)
                        return;

                    $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                    $(this).toggleClass('open');
                    $('span', this).toggleClass("caret caret-up");

                },
                function () {
                    if ($(this).hasClass("dropdown-not-auto") == true)
                        return;

                    $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                    $(this).toggleClass('open');
                    $('span', this).toggleClass("caret caret-up");
                });



        $("header .navbar .logo").hover(
                function () {
                    var $this = $("header .navbar .logo .slogan"); // caching $(this)
                    $this.data('initialText', $this.text());
                    $this.html('<i class="fa fa-angle-left" aria-hidden="true"></i> Clique para retornar a home');
                },
                function () {
                    var $this = $("header .navbar .logo .slogan"); // caching $(this)
                    $this.html($this.data('initialText'));
                }
        );
    }
});


function backToTop() {
    /* Check show or hide the button [back-to-top] */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

}

function checkNavbarScroll(homeStyle) {
    var topHeadBG = "rgba(255, 255, 255, 0.8)";

    /*
     if (homeStyle !== null)
     if (homeStyle == "home-2") {
     topHeadBG = "none";
     } */
    $(window).scroll(function () {
        if ($(window).width() > 767) {
            if ($(this).scrollTop() > 50) {
                $('header .navbar').css("padding-top", "20px").css("padding-bottom", "10px").css("background", "#FFF");
                $('header .logo img').css("height", "40px").css("padding-top", "5px");
                $('header .navbar-nav>li>.dropdown-menu').css("top", "44px");
            } else {
                $('header .navbar').css("padding-top", "20px").css("padding-bottom", "20px").css("background", topHeadBG);
                $('header .logo img').css("height", "44px").css("padding-top", "0px");
                $('header .navbar-nav>li>.dropdown-menu').css("top", "55px");
            }
        }
    });
}

function ayantoggle() {
    $(".forgot").slideToggle('slow');
}


/* porfolios */

$(window).load(function () {
    var $container = $('.portfolioContainer');
    if (!$container.length)
        return;

    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.portfolioFilter a').click(function () {
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});


/* Float action buttons */

$(function () {
    $(".fab,.fab-backdrop").click(function () {
        if ($(".fab-backdrop").is(":visible")) {
            $(".fab-backdrop").fadeOut(125);
            $(".fab.child").stop().animate({bottom: $("#masterfab").css("bottom"), opacity: 0}, 125, function () {
                $(this).hide();
            });
        } else {
            $(".fab-backdrop").fadeIn(125);
            $(".fab.child").each(function () {
                $(this).stop().show().animate({bottom: (parseInt($("#masterfab").css("bottom")) + parseInt($("#masterfab").outerHeight()) + 70 * $(this).data("subitem") - $(".fab.child").outerHeight()) + "px", opacity: 1}, 125);
            });
        }
    });
});


/* Replace Alert menu from desptop to mobile */
$(window).load(function () {
    var alertMenuHtml = '<li class="' + $('.menu-alert').attr('class') + '">' + $('.menu-alert').html() + '<li>';

    $('.mobile-alert .nav').append(alertMenuHtml);
});

/* Replace color for all theme */

function colorReplace(findHexColor, replaceWith) {

    // Convert rgb color strings to hex
    function rgb2hex(rgb) {
        if (/^#[0-9A-F]{6}$/i.test(rgb))
            return rgb;
        rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
        function hex(x) {
            return ("0" + parseInt(x).toString(16)).slice(-2);
        }
        return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
    }

    // Select and run a map function on every tag
    $('*').map(function (i, el) {
        // Get the computed styles of each tag
        var styles = window.getComputedStyle(el);

        // Go through each computed style and search for "color"
        Object.keys(styles).reduce(function (acc, k) {
            var name = styles[k];
            var value = styles.getPropertyValue(name);

            if (value !== null && name.indexOf("color") >= 0) {
                try {

                    // Convert the rgb color to hex and compare with the target color
                    if (value.indexOf("rgb(") >= 0 && rgb2hex(value).toLowerCase() === findHexColor.toLowerCase()) {
                        // Replace the color on this found color attribute
                        $(el).css(name, replaceWith);
                    }

                } catch (e) {

                }
            }
        });
    });
}

function showThemeSetting() {
    $(".theme-setting-panel").show();
}


function hideThemeSetting() {
    $(".theme-setting-panel").hide();
}
