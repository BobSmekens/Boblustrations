<?php
if(isset($_GET['artist_style'])) {
    $style = $_GET['artist_style'];
}

if(isset($_GET['artist_type'])) {
    $type = $_GET['artist_type'];
}

if(isset($_GET['artist_name'])) {
    $name = $_GET['artist_name'];
}

if (isset($_GET['artist_style'])){
    $query = 
    "SELECT artist_id, artist_name, artist_description, artist_url, artist_style, artist_type
    FROM artists1
    WHERE artist_style = '$style'";
} else if(isset($_GET['artist_type'])){
    $query =
    "SELECT artist_id, artist_name, artist_description, artist_url, artist_style, artist_type
    FROM artists1
     WHERE artist_type = '$type'";
} else if (isset($_GET['artist_style']) && isset($_GET['artist_type']) ){
    $query = 
    "SELECT artist_id, artist_name, artist_description, artist_url, artist_style, artist_type
    FROM artists1
    WHERE artist_style = '$style' 
    AND artist_type = '$type'";
} else{
    $query = 
    "SELECT artist_id, artist_name, artist_description, artist_url, artist_style, artist_type
    FROM artists1";
}



include "db_connection.php";
$db_result = $conn->query($query);  
foreach ($db_result as $row)
    {   
        echo 
        '<div class="artistpage-container">      
            <div class="artistpage-txt">
                <div class="artistpage-name">' . $row['artist_name'] . '</div>
                <div class="artistpage-description">' . $row['artist_style'] . ' / '.
            $row['artist_type'] . '</div>
            </div>
            <div class="artistpage-img artistpage-txt">
                <img src="img/' . $row['artist_url'] . '" alt="">
            </div>
            <div class="artistpage-link"><a href="php/singleartist.php?artist_id='. $row['artist_id'] . '">VIEW ARTIST</a></div>

        </div>';
    }
$conn = null;
?>