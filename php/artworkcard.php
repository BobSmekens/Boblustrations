<?php
if(isset($_GET['artwork_style'])) {
    $style = $_GET['artwork_style'];
}

if(isset($_GET['artwork_type'])) {
    $type = $_GET['artwork_type'];
}

if(isset($_GET['artwork_price'])) {
    $price = $_GET['artwork_price'];
}

if(isset($_GET['artwork_price']) && $price == '61' ){
    $price = $_GET['artwork_price'];
    $query = 
    "SELECT artwork.artist_id, artwork_url, artists.artist_id, artists.artist_name, artwork.artwork_name, artwork.artwork_price, artwork.artwork_type, artwork.artwork_style
    FROM artwork
    INNER JOIN artists ON artists.artist_id = artwork.artist_id
    WHERE artwork.artwork_price < $price";
}else if(isset($_GET['artwork_price']) && $price == '200' ){
    $price = $_GET['artwork_price'];
    $query = 
    "SELECT artwork.artist_id, artwork_url, artists.artist_id, artists.artist_name, artwork.artwork_name, artwork.artwork_price, artwork.artwork_type, artwork.artwork_style
    FROM artwork
    INNER JOIN artists ON artists.artist_id = artwork.artist_id
    WHERE artwork.artwork_price > 60 AND artwork.artwork_price < 201";
}else if(isset($_GET['artwork_price']) && $price == '5000' ){
     $price = $_GET['artwork_price'];
    $query = 
    "SELECT artwork.artist_id, artwork_url, artists.artist_id, artists.artist_name, artwork.artwork_name, artwork.artwork_price, artwork.artwork_type, artwork.artwork_style
    FROM artwork
    INNER JOIN artists ON artists.artist_id = artwork.artist_id
    WHERE artwork.artwork_price > 200";
}else if (isset($_GET['artwork_style'])){
    $query = 
    "SELECT artwork.artist_id, artwork_url, artists.artist_id, artists.artist_name, artwork.artwork_name, artwork.artwork_price, artwork.artwork_type, artwork.artwork_style
    FROM artwork
    INNER JOIN artists ON artists.artist_id = artwork.artist_id
    WHERE artwork.artwork_style = '$style'";
} else if(isset($_GET['artwork_type'])){
    $query =
    "SELECT artwork.artist_id, artwork_url, artists.artist_id, artists.artist_name, artwork_name, artwork_price, artwork_type, artwork_style
    FROM artwork
    INNER JOIN artists ON artists.artist_id = artwork.artist_id
    WHERE artwork.artwork_type = '$type'";
} else{
    $query = 
    "SELECT artwork.artist_id, artwork_url, artists.artist_id, artists.artist_name, artwork_name, artwork_price, artwork_type, artwork_style
    FROM artwork
    INNER JOIN artists ON artists.artist_id = artwork.artist_id";
}
/*
$query = 
"SELECT artwork.artwork_name, artwork.artwork_url, artwork.artwork_price, artwork.artwork_hot, artwork.artist_id, artists.artist_name, artists.artist_id
FROM artwork
INNER JOIN artists ON artists.artist_id = artwork.artist_id";
*/
include "db_connection.php";
$db_result = $conn->query($query);  
    foreach ($db_result as $row)
    {            
    echo    '<div class="hot-art-card">
                <img class="hot-art-img" src="img/' .
                $row['artwork_url'] . '" alt="">
                <div class="hot-art-text">
                    <div class="hot-art-artist">' . $row['artist_name']. '</div>
                    <div class="hot-art-artwork">' . $row['artwork_name']. '</div>
                    <div class="hot-art-price">$'. $row['artwork_price'] . '</div>
                </div>
            </div>';
    }
    $conn = null;
    ?>
