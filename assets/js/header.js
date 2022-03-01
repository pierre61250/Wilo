var scrollpos = window.scrollY;
var header = document.getElementById("header");
var navcontent = document.getElementById("nav-content");
var navaction = document.getElementById("navAction");
var toToggle = document.querySelectorAll(".toggleColour");
var logoBlanc = document.getElementById('logo-blanc');
var logoNoir = document.getElementById('logo-noir');

document.addEventListener("scroll", function () { /*Apply classes for slide in bar*/
    scrollpos = window.scrollY;

    if (scrollpos > 10) {
        logoBlanc.classList.add("u-display-none");
        logoNoir.classList.remove("u-display-none");
        header.classList.remove('pt-8');
        header.classList.add("bg-white");
        if (navaction) {
            navaction.classList.remove("bg-white");
            navaction.classList.add("gradient");
            navaction.classList.remove("text-black", "opacity-75");
            navaction.classList.add('bg-gradient-to-r', 'from-yellow-300', 'to-yellow-500');            
        }
        // Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-black");
            toToggle[i].classList.remove("text-white");
        }
        header.classList.add("shadow");
        navcontent.classList.remove("bg-gray-100");
        navcontent.classList.add("bg-white");
    } else {
        logoBlanc.classList.remove("u-display-none");
        logoNoir.classList.add("u-display-none");
        header.classList.add('pt-8');
        header.classList.remove("bg-white");
        if (navaction) {
            navaction.classList.remove("gradient");
            navaction.classList.add("bg-white", "opacity-75");
            navaction.classList.remove("text-white");
            navaction.classList.add("text-black");
            navaction.classList.remove('bg-gradient-to-r', 'from-yellow-300', 'to-yellow-500');            
        }
        // Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-black");
        }

        header.classList.remove("shadow");
        navcontent.classList.remove("bg-white");
        navcontent.classList.add("bg-gray-100");
    }
});

// Menu Burger
var navMenuDiv = document.getElementById("nav-content");
var navMenu = document.getElementById("nav-toggle");

document.onclick = check;
function check(e) {
    var target = (e && e.target) || (event && event.srcElement);

    // Nav Menu
    if (!checkParent(target, navMenuDiv)) { // click NOT on the menu
        if (checkParent(target, navMenu)) { // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
                navMenuDiv.classList.remove("hidden");
            } else {
                navMenuDiv.classList.add("hidden");
            }
        } else { // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
        }
    }
}
function checkParent(t, elm) {
    while (t.parentNode) {
        if (t == elm) {
            return true;
        }
        t = t.parentNode;
    }
    return false;
}

export default {}