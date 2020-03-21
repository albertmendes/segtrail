$(document).ready(function() {
    var cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)fademTours\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    if (cookieValue == "true") {
        $(".tour-item").css("opacity", "1")
    }
    $(".header-bg").css("height", screen.height);
    var mm = 0;

    function mymove() {
        if (mm == 0) {
            $(".mydown").addClass("mydown-toggle");
            mm = 1
        } else {
            $(".mydown").removeClass("mydown-toggle");
            mm = 0
        }
    }
    var mymoveInterval = setInterval(mymove, 700);
    $(".mydown").mouseover(function() {
        clearInterval(mymoveInterval)
    });
    $(".mydown").mouseout(function() {
        mymoveInterval = setInterval(mymove, 700)
    });
    $(".mydown").on("click", function() {
        $("html, body").stop().animate({
            scrollTop: ($("#unsere_Touren").offset().top - 50)
        }, 1250, "easeInOutExpo", function() {
            history.pushState(null, null, "#unsere_Touren")
        })
    });
    $(".weitere").on("click", function() {
        $("html, body").animate({
            scrollTop: ($("#contact").offset().top)
        }, 1250, "easeInOutExpo")
    });
    $(".tour-item").mouseover(function() {
        $(".top").addClass("top-toggle");
        $(".zusatz").addClass("zusatz-toggle");
        $(".ort").addClass("ort-toggle")
    });
    $(".tour-item").mouseout(function() {
        $(".top").removeClass("top-toggle");
        $(".zusatz").removeClass("zusatz-toggle");
        $(".ort").removeClass("ort-toggle")
    });
    $(".portfolio-link").on("click", function(e) {
        e.preventDefault();
        var pmod = $(this).attr("href");
        var num = pmod.match(/\d+/)[0];
        switch (num) {
            case "1":
                window.location.href = "./Citytour-Wuerzburg";
                break;
            case "2":
                window.location.href = "./Stadtfuehrung-Wuerzburg";
                break;
            case "3":
                window.location.href = "./Stadt-Land-Fluss";
                break;
            case "4":
                window.location.href = "./Wein-und-Lust-Wuerzburg";
                break;
            case "5":
                window.location.href = "./Flaggschiff-Kreuzwertheim";
                break;
            case "6":
                window.location.href = "./Segway-Reblauskommando";
                break;
            case "7":
                window.location.href = "./Rundflug-Wertheim";
                break;
            case "8":
                window.location.href = "./Zwei-Laender-Tour-Wertheim";
                break;
            case "9":
                window.location.href = "./Stadtfuehrung-Wertheim";
                break;
            default:
                window.location.href = "./?id=1"
        }
    });
    var myInnerHeight = window.innerHeight * 2;
    var tour1_buchen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/wuerzburgtourenurban/product/segway-tour-wuerzburg-city-ticket-gutschein/appointments/page/1.html?isReservation=0";
    var tour1_gutscheinordern = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/wuerzburgtourenurban/product/segway-tour-wuerzburg-city-ticket-gutschein/voucher.html";
    var tour1_terminAnfragen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/appointmentRequest/category/wuerzburgtourenurban/product/segway-tour-wuerzburg-city-ticket-gutschein.html";
    var tour2_buchen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/wuerzburgtourenurban/product/segway-tour-wuerzburg-city-ticket-gutschein-stadtfuehrung/appointments/page/1.html?isReservation=0";
    var tour2_gutscheinordern = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/wuerzburgtourenurban/product/segway-tour-wuerzburg-city-ticket-gutschein-stadtfuehrung/voucher.html";
    var tour2_terminAnfragen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/appointmentRequest/category/wuerzburgtourenurban/product/segway-tour-wuerzburg-city-ticket-gutschein-stadtfuehrung.html";
    var tour3_buchen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/wuerzburgtourenurban/product/segway-tour-wuerzburg-wein-main-franken-ticket-gutschein/appointments/page/1.html?isReservation=0";
    var tour3_gutscheinordern = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/wuerzburgtourenurban/product/segway-tour-wuerzburg-wein-main-franken-ticket-gutschein/voucher.html";
    var tour3_terminAnfragen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/appointmentRequest/category/wuerzburgtourenurban/product/segway-tour-wuerzburg-wein-main-franken-ticket-gutschein.html";
    var tour4_buchen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/wein-touren-kulturell/product/segway-tour-wuerzburg-gutschein-wein-weinerlebnis/appointments/page/1.html?isReservation=0";
    var tour4_gutscheinordern = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/wein-touren-kulturell/product/segway-tour-wuerzburg-gutschein-wein-weinerlebnis/voucher.html";
    var tour4_terminAnfragen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/appointmentRequest/category/wein-touren-kulturell/product/segway-tour-wuerzburg-gutschein-wein-weinerlebnis.html";
    var tour5_buchen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/touren-main-spessart-elementar/product/segway-tour-kreuzwertheim-wertheim-main-wein-spessart/appointments/page/1.html?isReservation=0";
    var tour5_gutscheinordern = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/touren-main-spessart-elementar/product/segway-tour-kreuzwertheim-wertheim-main-wein-spessart/voucher.html";
    var tour5_terminAnfragen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/appointmentRequest/category/touren-main-spessart-elementar/product/segway-tour-kreuzwertheim-wertheim-main-wein-spessart.html";
    var tour6_buchen = "";
    var tour6_gutscheinordern = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/wein-touren-kulturell/product/segwayreblauskommando/voucher.html";
    var tour6_terminAnfragen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/appointmentRequest/category/wein-touren-kulturell/product/segwayreblauskommando.html";
    var tour7_buchen = "";
    var tour7_gutscheinordern = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/touren-main-tauber-idyllisch/product/segway-tour-wertheim-gutschein-ticket/voucher.html";
    var tour7_terminAnfragen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/appointmentRequest/category/touren-main-tauber-idyllisch/product/segway-tour-wertheim-gutschein-ticket.html";
    var tour8_buchen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/touren-main-tauber-idyllisch/product/segway-wertheim-kreuzwertheim-tour/appointments/page/1.html?isReservation=0";
    var tour8_gutscheinordern = "https://segway-wuerzburg.myobis.com/default.php/de/shop/category/touren-main-tauber-idyllisch/product/segway-wertheim-kreuzwertheim-tour/voucher.html";
    var tour8_terminAnfragen = "https://segway-wuerzburg.myobis.com/default.php/de/shop/appointmentRequest/category/touren-main-tauber-idyllisch/product/segway-wertheim-kreuzwertheim-tour.html";
    var tour9_buchen = "";
    var tour9_gutscheinordern = "https://segway-wuerzburg.myobis.com/easybook.php/de/shop/category/0/product/117cf47c-d7ad-445c-bc2e-f2ce8d0f09d4/voucher.html?isReservation=0";
    var tour9_terminAnfragen = "https://segway-wuerzburg.myobis.com/easybook.php/de/shop/appointmentRequest/category/0/product/117cf47c-d7ad-445c-bc2e-f2ce8d0f09d4.html";
    $("body").on("click", ".order-mode", function(e) {
        var myid = $(this).attr("id");
        $(".complete-overlay").css({
            width: window.innerWidth,
            height: $("body, html").height(),
            display: "block"
        });
        $(".complete-overlay").animate({
            opacity: 1
        }, 300);
        $(".touriframeWrapper").css({
            top: $("#page-top").offset().top + 55
        });
        $(".touriframeWrapper").css({
            top: $("#page-top").offset().top + 55
        });
        $(".touriframeWrapper").css("height", myInnerHeight);
        $(".tour-iframe").css("height", myInnerHeight);
        $(".tour-iframe").attr("src", eval(myid));
        e.preventDefault()
    });
    $(".caption").mouseover(function() {
        $(this).find(".beschreibung").addClass("beschr-add");
        $(this).find(".preis").addClass("preis-add");
        $(this).find(".fa-search-plus").addClass("search-plus-add")
    });
    $(".caption").mouseout(function() {
        $(this).find(".beschreibung").removeClass("beschr-add");
        $(this).find(".preis").removeClass("preis-add");
        $(this).find(".fa-search-plus").removeClass("search-plus-add")
    });
    $(".team-img").mouseover(function() {
        $(this).popover("show")
    });
    $(".team-img").mouseout(function() {
        $(this).popover("hide")
    });
    var beforeAppended = false;
    $(".cowboy").on("click", function() {
        if (beforeAppended === true) {
            $(".appendBeforeIframe").remove();
            $(".tour-iframe").css({
                "border-top-right-radius": "5px",
                "border-top-left-radius": "5px"
            });
            beforeAppended = false
        }
        $(".complete-overlay").css({
            width: window.innerWidth,
            height: $("body, html").height(),
            display: "block"
        });
        $(".complete-overlay").animate({
            opacity: 1
        }, 300);
        $(".touriframeWrapper").css("top", +($(document).scrollTop() + (window.innerHeight / 2 - 250)) + "px");
        $(".tour-iframe").attr("src", "https://segway-wuerzburg.myobis.com/easybook.php/de/shop/voucher/sale.html");
        $(".tour-iframe").animate({
            height: "450px"
        }, 500)
    });
    $(".close-iframe").on("click", function(e) {
        e.preventDefault();
        $(".complete-overlay").animate({
            opacity: "0"
        }, 400, function() {
            $(this).css("display", "none");
            $(".gutschein-iframe").attr("src", "");
            $(".tour-iframe").attr("src", "")
        })
    });
    $(".openCalendar").on("click", function(e) {
        $(".complete-overlay").css({
            width: window.innerWidth,
            height: $("body, html").height(),
            display: "block"
        });
        $(".complete-overlay").animate({
            opacity: 1
        }, 300);
        $(".tour-iframe").css({
            "border-top-right-radius": "0px",
            "border-top-left-radius": "0px"
        });
        if (beforeAppended === false) {
            var constCalendarString = '<h3>Ausgewählte Termine</h3><h4>für Einzelfahrer und Gruppen bis max. 3 Personen</h4><p>Hier finden Sie spezielle Terminangebote für Einzelfahrer und Gruppen bis zu 3 Personen.<br>Wunschtermin auswählen, online anmelden und schon heißt es "Start frei" für Ihr persönliches SEGWAY-Erlebnis. Viel Spaß!</p>';
            $('<div class="appendBeforeIframe">' + constCalendarString + "</div>").insertBefore(".tour-iframe");
            beforeAppended = true
        }
        $(".touriframeWrapper").css("top", +($(document).scrollTop() + (window.innerHeight / 2 - 250)) + "px");
        $(".tour-iframe").attr("src", "https://segway-wuerzburg.myobis.com/default.php/de/shop/calendar?logo=0");
        $(".tour-iframe").animate({
            height: window.innerHeight * 2
        }, 500);
        e.preventDefault()
    });
    if (window.performance) {}
    if (performance.navigation.type == 1) {
        if (window.location.hash != "") {
            $("html, body").animate({
                scrollTop: $(window.location.hash).offset().top - 50
            }, 1250, "easeInOutExpo")
        }
    } else {
        if (window.location.hash != "") {
            $("html, body").animate({
                scrollTop: $(window.location.hash).offset().top - 50
            }, 1250, "easeInOutExpo")
        }
    }
});
var cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)fademTours\s*\=\s*([^;]*).*$)|^.*$/, "$1");
var date = new Date();
var minutes = 15;
date.setTime(date.getTime() + (minutes * 60 * 1000));
if (cookieValue == "true") {
    $(".tour-item").css("opacity", "1")
}
var fademTours = 0;
var moveGutschein = 0;
var openFAQ = 0;
var moveContact = 0;
$(window).scroll(function() {
    var a = $(document).scrollTop();
    if (window.innerWidth > 500) {
        $(".header-bg").css("background-position", "0 " + ((55 - a / 10) + "px"))
    }
    if (document.getElementById("unsere_Touren")) {
        if (a >= ($("#unsere_Touren").offset().top - 144) && fademTours == 0) {
            fademTours = 1;
            if (cookieValue !== "true") {
                document.cookie = "fademTours=true;expires=" + date.toGMTString();
                $(".tour-text").addClass("tour-text-shine");
                setTimeout(function() {
                    $(".tour-text").removeClass("tour-text-shine")
                }, 600);
                $(".tour-item").each(function(b) {
                    $(this).delay(150 * b).animate({
                        opacity: 1
                    }, 500)
                })
            }
        }
    }
    if (document.getElementById("gutscheine")) {
        if (a >= ($("#gutscheine").offset().top - 50) && moveGutschein == 0) {
            moveGutschein = 1;
            $(".cowboy img").addClass("rollin")
        }
    }
    if (a >= ($("#faq").offset().top - 50) && openFAQ == 0) {
        openFAQ = 1;
        $("#accordion").animate({
            opacity: "1"
        }, 500)
    }
    if (a >= ($("#contact").offset().top - 233) && moveContact == 0) {
        moveContact = 1;
        $("#contactForm").addClass("contactMove")
				setTimeout(function() {
					$("#zustimmung").animate({"opacity": 1}, 500);
				},1000);
    }
});
$(document).ready(function() {
    if (window.innerHeight > 500) {
        $(".intro-text").css("top", (window.innerHeight - 650));
        $(".intro-text").animate({
            opacity: 1,
            top: window.innerHeight - 550
        }, 2000)
    } else {
        $(".intro-text").css("top", (window.innerHeight - 650));
        $(".intro-text").animate({
            opacity: 1,
            top: 0
        }, 2000)
    }
});

function getMyindicatorsHeight() {
    var a = $(".myindicators img").height();
    $("ul.myindicators").css("height", a)
}
$(document).ready(function() {
    getMyindicatorsHeight()
});
$(window).resize(function() {
    getMyindicatorsHeight()
});
$(document).keyup(function(a) {
    if (a.keyCode == 27) {
        $(".close-iframe").trigger("click")
    }
});
