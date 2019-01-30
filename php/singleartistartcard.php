

<?php
$artistid = $_GET['artist_id'];

$query = 
"SELECT artwork_url, artwork_name, artwork_price
FROM artwork
WHERE artist_id = '$artistname'";

include "db_connection.php";

$db_result = $conn->query($query);  
    foreach ($db_result as $row) {  

echo '<div class="single-artist-art-card">
        <img src="../img/' . $row['artwork_url'] . '" alt="">
        <div class="art title">' . $row['artwork_name'] . '</div>
        <div class="singe-artist-price">$' . $row['artwork_price'] . '</div>
        </div>';

    }

    $conn = null;
    ?>


