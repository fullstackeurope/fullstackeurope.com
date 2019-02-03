import SmoothScroll from 'smooth-scroll';

let scroll = new SmoothScroll('a[href*="#"]', {
    offset: 125,
});

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
