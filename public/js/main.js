!(function ($) {
    ("use strict");

    // FAST TOUCH
    $(function () {
        FastClick.attach(document.body);
    });

    // team owlCarousel
    $("#our-team").owlCarousel({
        loop: true,
        autoplayHoverPause: false,
        center: true,
        items: 3,
        margin: 0,
        autoplay: false,
        dots: true,
        autoplayTimeout: 2000,
        smartSpeed: 450,
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1170: {
                items: 4,
            },
        },
    });

    // make box with same height
    $(".icon-box").matchHeight();
    $(".card-body").matchHeight();

    // animate on scroll
    AOS.init();

    $(document).ready(function () {
        $(window).on("scroll", function (e) {
            e.preventDefault();
            if ($(this).scrollTop() > 100) {
                $(".back-to-top").fadeIn();
            } else {
                $(".back-to-top").fadeOut();
            }
        });
        $(".back-to-top").click(function () {
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                500
            );
            return false;
        });
    });
    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            900: {
                items: 3,
            },
        },
    });
    $(".prop-carousel").owlCarousel({
        autoplay: false,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 1.3,
            },
            768: {
                items: 1.3,
            },
            900: {
                items: 1.3,
            },
        },
    });
})(jQuery);

// Date and Time at the Header and footer section
// footer
document.getElementById("year").innerHTML = new Date().getFullYear();

// Headers
var days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
var dayName = days[new Date().getDay()];

var day = new Date().getDate();

var months = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "July",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
];
var month = months[new Date().getMonth()];

var year = new Date().getFullYear();

var headTime = dayName + "," + " " + day + " " + month + " " + year + ".";
document.getElementById("date").innerHTML = headTime;

function showTime() {
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";

    if (h == 0) {
        h = 12;
    }

    if (h > 12) {
        h = h - 12;
        session = "PM";
    }

    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;

    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    setTimeout(showTime, 1000);
}
showTime();

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}