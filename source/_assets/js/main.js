// Navigation scroll
import SmoothScroll from 'smooth-scroll';

let scroll = new SmoothScroll('a[href*="#"]', {
    offset: 125,
});

// Mobile navigation toggle
let header = document.getElementById("header");
let navigation = document.getElementById("navigation");
let showNav = document.getElementById("show-nav");
let hideNav = document.getElementById("hide-nav");

function toggleNav()
{
    if (navigation.classList.contains("hidden")) {
        navigation.classList.remove("hidden");
        showNav.classList.add("hidden");
        hideNav.classList.remove("hidden");
    } else {
        navigation.classList.add("hidden");
        showNav.classList.remove("hidden");
        hideNav.classList.add("hidden");
    }

    toggleHeaderBackground();
}

showNav.onclick = toggleNav;
hideNav.onclick = toggleNav;

// Toggle header background
function toggleHeaderBackground()
{
    if (
        window.scrollY  >= 50 ||
        document.body.classList.contains('content-page') ||
        ! navigation.classList.contains("hidden")
    ) {
        header.style.background = "rgba(39, 29, 119, .88)";
    } else if (navigation.classList.contains("hidden")) {
        header.style.background = "none";
    }
}

window.addEventListener("scroll", toggleHeaderBackground);

// Countdown timer
let element = document.getElementById("timer");
let timestamp = element.getAttribute('data-expires');
let countDownDate = new Date(timestamp * 1000).getTime();
console.log(timestamp);
function startCounter()
{
    let runningCounter = setInterval(() => {
        let timeDistance = countDownDate - new Date().getTime();

        let days = element.getElementsByClassName('days')[0];
        days.innerHTML = format(Math.floor(timeDistance / (1000 * 60 * 60 * 24)));

        let hours = element.getElementsByClassName('hours')[0];
        hours.innerHTML = format(Math.floor((timeDistance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));

        let minutes = element.getElementsByClassName('minutes')[0];
        minutes.innerHTML = format(Math.floor((timeDistance % (1000 * 60 * 60)) / (1000 * 60)));

        let seconds = element.getElementsByClassName('seconds')[0];
        seconds.innerHTML = format(Math.floor((timeDistance % (1000 * 60)) / 1000));

        // element.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

        if (timeDistance < 0) {
            clearInterval(runningCounter);
            // days.innerHTML = 0;
        }
    }, 1000);

    function format(number) {
        return number.toString().padStart(2, '0');
    }
}

startCounter();
