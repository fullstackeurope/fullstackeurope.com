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
}

showNav.onclick = toggleNav;
hideNav.onclick = toggleNav;
