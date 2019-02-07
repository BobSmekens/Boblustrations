function GetInfoFromDatabase(url, outputData) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            outputData(this);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

function showData(data) {
    console.log(data.responseText);
    var div = document.getElementsByClassName("hot-art-container");
    div[0].innerHTML = data.responseText;
}

GetInfoFromDatabase("php/artworkcard.php", showData);

/*                      artworks filters             */
var type = 0;
var style = 0;
var price = 0;

function filterStyleArt(filter) {
    style = filter;
    if (filter == "All") {
        GetInfoFromDatabase("php/artworkcard.php", showData);
    } else {
        GetInfoFromDatabase("php/artworkcard.php?artwork_style=" + filter + "&artist_type=" + type, showData);
    }
}

function filterTypeArt(filter) {
    type = filter;
    if (filter == "All") {
        GetInfoFromDatabase("php/artworkcard.php", showData);
    } else {
        GetInfoFromDatabase("php/artworkcard.php?artwork_type=" + filter, showData);
    }
}

function filterPriceArt(filter) {
    price = filter;
    if (filter == "All") {
        GetInfoFromDatabase("php/artworkcard.php", showData);
    } else {
        GetInfoFromDatabase("php/artworkcard.php?artwork_price=" + filter, showData);
    }
}