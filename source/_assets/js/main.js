import $ from 'jquery';
import Chocolat from 'chocolat';
import SmoothScroll from 'smooth-scroll';
import AnchorJS from 'anchor-js';

// Navigation scroll
new SmoothScroll('a[href*="#"]', {
    // header: '[data-scroll-header]',
    // offset: 25,
});

document.addEventListener('scrollStart', closeNav, false);

// Mobile navigation toggle
let header = document.getElementById("header");
let navigation = document.getElementById("navigation");
let navigationButton = document.getElementById("navigationButton");
let showNav = document.getElementById("show-nav");
let hideNav = document.getElementById("hide-nav");

function toggleNav()
{
    if (navigation.classList.contains("hidden")) {
        openNav();
    } else {
        closeNav();
    }

    toggleHeaderBackground();
}

function openNav()
{
    navigation.classList.remove("hidden");
    navigationButton.classList.remove("hidden");
    showNav.classList.add("hidden");
    hideNav.classList.remove("hidden");
}

function closeNav()
{
    navigation.classList.add("hidden");
    navigationButton.classList.add("hidden");
    showNav.classList.remove("hidden");
    hideNav.classList.add("hidden");
}

$('#show-nav').on('click touchdown', toggleNav);
$('#hide-nav').on('click touchdown', toggleNav);

// Toggle header background
function toggleHeaderBackground()
{
    if (window.pageYOffset >= 50) {
        header.style.padding = "16px 0";
    } else {
        header.style.padding = "32px 0";
    }

    if (
        window.pageYOffset >= 50 ||
        ! navigation.classList.contains("hidden") ||
        document.body.classList.contains('content-page')
    ) {
        header.style.background = "rgba(39, 29, 119, .88)";
    } else if (navigation.classList.contains("hidden")) {
        header.style.background = "none";
    }
}

window.addEventListener("scroll", toggleHeaderBackground);

// Countdown timer
let timers = document.getElementsByClassName("timer");

for (let i = 0; i < timers.length; i++) {
    let timer = timers[i];
    let timestamp = timer.getAttribute('data-expires');
    let countDownDate = new Date(timestamp * 1000).getTime();

    startCounter(timer, countDownDate);
}

function startCounter(timer, countDownDate)
{
    let runningCounter = setInterval(() => {
        let timeDistance = countDownDate - new Date().getTime();
        let timerThresholdDays = parseInt(timer.getAttribute('data-threshold-days'));

        if (timeDistance < 0) {
            clearInterval(runningCounter);

            return;
        }

        let daysLeft = timerCalculateDays(timeDistance);

        if (daysLeft > timerThresholdDays) {
            return;
        }

        $(timer).removeClass('hidden');

        let days = timer.getElementsByClassName('days')[0];
        days.innerHTML = daysLeft;

        let hours = timer.getElementsByClassName('hours')[0];
        hours.innerHTML = formatCounter(Math.floor((timeDistance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));

        let minutes = timer.getElementsByClassName('minutes')[0];
        minutes.innerHTML = formatCounter(Math.floor((timeDistance % (1000 * 60 * 60)) / (1000 * 60)));

        let seconds = timer.getElementsByClassName('seconds')[0];
        seconds.innerHTML = formatCounter(Math.floor((timeDistance % (1000 * 60)) / 1000));
    }, 1000);
}

function formatCounter(number) {
    return number.toString().padStart(2, '0');
}

function timerCalculateDays(timeDistance)
{
    return formatCounter(Math.floor(timeDistance / (1000 * 60 * 60 * 24)));
}

// Photo Enlarger
$.fn.Chocolat = Chocolat;

$(document).ready(function(){
    $('.venue-gallery').Chocolat({
        enableZoom: false,
        loop: true
    });
});

// Anchor Links
let anchors = new AnchorJS({
    placement: "left",
});

anchors.add('#page h2');
anchors.add('#page h3');
