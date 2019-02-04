

<?php
$artworkid = $_GET['artwork_id'];

$query = 
"SELECT artwork_url, artwork1.artwork_artist, artwork_name, artwork_price, artwork_id, artists.artist_name, artwork_style, artwork_type
FROM artwork1
INNER JOIN artists
ON artwork1.artwork_artist = artists.artist_id
WHERE artwork_id = '$artworkid'";

include "db_connection.php";

$db_result = $conn->query($query);  
    foreach ($db_result as $row) {  

echo '<div class="singleartwork-left">
        <img src="../img/' . $row['artwork_url'] . '" alt="">
    </div>
    <div class="singleartwork-right">
    <div class="singleartwork-txtbox">
    <div class="singleartwork-property">Name:</div><div class="singleartwork-dbproperty">' . $row['artwork_name'] . '</div>
    <div class="singleartwork-property">Artist:</div><div class="singleartwork-dbproperty">'. $row['artist_name']. '</div>
    <div class="singleartwork-property">Style:</div><div class="singleartwork-dbproperty">' . $row['artwork_style'] . '</div>
    <div class="singleartwork-property">Type:</div><div class="singleartwork-dbproperty">' . $row['artwork_type'] . '</div>
    <div class="singleartwork-property">Price:$</div><div class="singleartwork-dbproperty">' . $row['artwork_price'] . '</div>
    <a class="artworkcard-cart" href="addToCartHandler.php?artwork_id=' . $row['artwork_id']. '&artwork_price=' . $row['artwork_price'] . '">ADD TO CART</a>

</div>
       
</div>';

    }

    $conn = null;
    ?>

