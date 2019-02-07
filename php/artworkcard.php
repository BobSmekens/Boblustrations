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
    "SELECT artwork1.artwork_artist, artwork_url, artists1.artist_id, artists1.artist_name, artwork1.artwork_name, artwork1.artwork_price, artwork_id, artwork1.artwork_type, artwork1.artwork_style
    FROM artwork1
    INNER JOIN artists1 ON artists1.artist_id = artwork1.artwork_artist
    WHERE artwork1.artwork_price < $price";
}else if(isset($_GET['artwork_price']) && $price == '200' ){
    $price = $_GET['artwork_price'];
    $query = 
    "SELECT artwork1.artwork_artist, artwork_url, artists1.artist_id, artists1.artist_name, artwork1.artwork_name, artwork1.artwork_price, artwork_id, artwork1.artwork_type, artwork1.artwork_style
    FROM artwork1
    INNER JOIN artists1 ON artists1.artist_id = artwork1.artwork_artist
    WHERE artwork1.artwork_price > 60 AND artwork1.artwork_price < 201";
}else if(isset($_GET['artwork_price']) && $price == '5000' ){
     $price = $_GET['artwork_price'];
    $query = 
    "SELECT artwork1.artwork_artist, artwork_url, artists1.artist_id, artists1.artist_name, artwork1.artwork_name, artwork1.artwork_price, artwork_id, artwork1.artwork_type, artwork1.artwork_style
    FROM artwork1
    INNER JOIN artists1 ON artists1.artist_id = artwork1.artwork_artist
    WHERE artwork1.artwork_price > 200";
}else if (isset($_GET['artwork_style'])){
    $query = 
    "SELECT artwork1.artwork_artist, artwork_url, artists1.artist_id, artists1.artist_name, artwork1.artwork_name, artwork1.artwork_price, artwork_id, artwork1.artwork_type, artwork1.artwork_style
    FROM artwork1
    INNER JOIN artists1 ON artists1.artist_id = artwork1.artwork_artist
    WHERE artwork1.artwork_style = '$style'";
} else if(isset($_GET['artwork_type'])){
    $query =
    "SELECT artwork1.artwork_artist, artwork_url, artists1.artist_id, artists1.artist_name, artwork_name, artwork_price, artwork_type, artwork_id, artwork_style
    FROM artwork1
    INNER JOIN artists1 ON artists1.artist_id = artwork1.artwork_artist
    WHERE artwork1.artwork_type = '$type'";
} else{
    $query = 
    "SELECT artwork1.artwork_artist, artwork_url, artists1.artist_id, artists1.artist_name, artwork_name, artwork_price, artwork_type, artwork_id, artwork_style
    FROM artwork1
    INNER JOIN artists1 ON artists1.artist_id = artwork1.artwork_artist";
}

//include "db_connection.php";
include "oopattempt.php";
$connection = new Connection("localhost", "root", "", "boblustrations");
$connection->init_conn();

$db_result = $connection->conn->query($query);  
    foreach ($db_result as $row)
    {            
    echo    '<div class="hot-art-card" id="artworkcard">
                <img class="hot-art-img" src="img/' .
                $row['artwork_url'] . '" alt="">
                <div class="hot-art-text">
                    <div class="hot-art-artist">' . $row['artist_name']. '</div>
                    <div class="hot-art-artwork">' . $row['artwork_name']. '</div>
                    <div class="hot-art-price">$'. $row['artwork_price'] . '</div>
                    <a class="artworkcard-link" href="php/singleartwork.php?artwork_id=' . $row['artwork_id'] . '">VIEW</a>                    
                    <a class="artworkcard-cart" href="php/addToCartHandler.php?artwork_id=' . $row['artwork_id']. '&artwork_price=' . $row['artwork_price'] . '"> CART</a>
                </div>
            </div>';
    }
    $conn = null;
    ?>
