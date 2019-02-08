

<?php

$artistid = $_GET['artist_id'];

$query = 
"SELECT artwork_url, artwork_name, artwork_price, artwork_id
FROM artwork1
WHERE artwork_artist = '$artistname'";


$servername = "rdbms.strato.de";
$username = "U3664325";
$password = "banaan123!";
$database = "DB3664325";

$connection = new Connection("$servername", "$username", "$password", "$database");
$connection->init_conn();
$db_result = $connection->conn->query($query);  
    foreach ($db_result as $row) {  

echo '<div class="single-artist-art-card">
        <img src="../img/' . $row['artwork_url'] . '" alt="">
            <div class="art-title">' . $row['artwork_name'] . '</div>
            <div class="singe-artist-price">$' . $row['artwork_price'] . '</div>
            <a class="artworkcard-cart" href="singleartwork.php?artwork_id=' . $row['artwork_id'] . '">VIEW</a>
            <a class="artworkcard-cart" href="addToCartHandler.php?artwork_id=' . $row['artwork_id']. '&artwork_price=' . $row['artwork_price'] . '"> CART</a>
        </div>';

    }

    $conn = null;
    ?>


