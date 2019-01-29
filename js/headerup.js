var scrolltracker = document.getElementById("scrolltracker");
var navbar = document.getElementsByClassName("navbar");

window.addEventListener("scroll", navbarUp);

function navbarUp () {
    var navbar = document.getElementsByClassName("navbar");
    var scrolltrackertop = scrolltracker.getBoundingClientRect().top;
    if (scrolltrackertop <= -40) {
        navbar[0].style.transform = "translateY(-50px)";
    } else {
        navbar[0].style.transform = "translateY(0px)";
    }
};







