

function GetInfoFromDatabase(url, outputData) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        outputData(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}

function showData(data) {
    var div = document.getElementById("cardWrapper");
    div.innerHTML = data.responseText;
}

GetInfoFromDatabase("php/artistcard.php", showData);
var style = 0;
var type = 0;
function filterStyle(filter) {
    style = filter;
    GetInfoFromDatabase("php/artistcard.php?artist_style=" +filter+"&artist_type="+type, showData);
}

function filterType(filter) {
    type = filter;
    GetInfoFromDatabase("php/artistcard.php?artist_type=" +filter, showData);
}

function filterText (filter) {
    GetInfoFromDatabase("php/artistcard.php?artist_name=%" +filter+"%", showData);
}
