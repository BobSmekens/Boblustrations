
var logo = document.getElementById("signup-logo");
var rollcount = 0;
function changeCorners () {
    if(rollcount == 0){
    logo.style.transform = "rotate(360deg)";
    logo.style.transition = "2s";
    rollcount = 1;
    } else {
    logo.style.transform = "rotate(-360deg)";
    logo.style.transition = "2s"; 
    rollcount = 0;
    }
}
logo.addEventListener("click", changeCorners);
