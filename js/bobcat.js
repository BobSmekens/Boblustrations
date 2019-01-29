var landingpageSliderCount = 1;
var sliderImages = ['url("img/fredjourdin1.jpg")', 
                    'url("img/fredjourdin2.jpg")', 
                    'url("img/fredjourdin3.jpg")',
                    'url("img/fredjourdin4.jpg")',
                    'url("img/fredjourdin5.jpg")',
                    'url("img/carlosaugustomotta1.jpg")',
                    'url("img/danlaurentiuarcus1.jpg")',
                    'url("img/danlaurentiuarcus2.jpg")',
                    'url("img/meirelesdepinho1.jpg")',
                    'url("img/meirelesdepinho2.jpg")',
                    ];
var artists = [ "Fred Jourdin", 
                "Fred Jourdin", 
                "Fred Jourdin", 
                "Fred Jourdin", 
                "Fred Jourdin",
                "Carlos Augusto Motta",
                "Dan Laurentiu Arcus",
                "Dan Laurentiu Arcus",
                "Meireles de Pinho",
                "Meireles de Pinho"
                ];                   
var slider = document.getElementsByClassName("landingpage-slider");
var buttonRight = document.getElementById("btn-right");
var scrolltracker = document.getElementById("scrolltracker");
var navbar = document.getElementsByClassName("navbar");

window.addEventListener("scroll", navbarUp);

function landingpageSliderPlus () {
    var sliderArtist = document.getElementsByClassName("slider-artistname");

    slider[0].style.backgroundImage = sliderImages[landingpageSliderCount];
    sliderArtist[0].innerHTML = artists[landingpageSliderCount];

    if (landingpageSliderCount >= sliderImages.length -1) {
        landingpageSliderCount = 0;
    } else {
        landingpageSliderCount++;
    }

    if(landingpageSliderCount === 3) {
        document.getElementById("btn-right").style.color = "black";
        document.getElementById("btn-left").style.color = "black";
    } else {
        document.getElementById("btn-right").style.color = "white";
        document.getElementById("btn-left").style.color = "white";
    }
};

function landingpageSliderMinus () {
    var sliderArtist = document.getElementsByClassName("slider-artistname");

    sliderArtist[0].innerHTML = artists[landingpageSliderCount];
    slider[0].style.backgroundImage = sliderImages[landingpageSliderCount];

    if (landingpageSliderCount <= 0) {
        landingpageSliderCount = sliderImages.length -1;
    } else {
        landingpageSliderCount --;
    }

    if(landingpageSliderCount === 1) {
        document.getElementById("btn-right").style.color = "black";
        document.getElementById("btn-left").style.color = "black";
    } else {
        document.getElementById("btn-right").style.color = "white";
        document.getElementById("btn-left").style.color = "white";
    }
};

//var buttonRight = document.getElementById("btn-right");
//buttonRight.addEventListener("click", landingpageSliderPlus);

setInterval(landingpageSliderPlus, 5000);

function navbarUp () {
    var navbar = document.getElementsByClassName("navbar");
    var scrolltrackertop = scrolltracker.getBoundingClientRect().top;
    if (scrolltrackertop <= -40) {
        navbar[0].style.transform = "translateY(-50px)";
    } else {
        navbar[0].style.transform = "translateY(0px)";
    }
};




