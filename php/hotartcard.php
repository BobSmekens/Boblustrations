<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artists</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>
<body>

<?php
$query = 
"SELECT artwork1.artwork_id, artwork1.artwork_name, artwork1.artwork_url, artwork1.artwork_price, artwork1.artwork_hot, artwork1.artwork_artist, artists1.artist_name, artists1.artist_id
FROM artwork1
INNER JOIN artists1 ON artists1.artist_id = artwork1.artwork_artist WHERE artwork_hot = 1 LIMIT 4";

include "oopattempt.php";
$connection = new Connection("localhost", "root", "", "boblustrations");
$connection->init_conn();

$db_result = $connection->conn->query($query);  
    foreach ($db_result as $row)
    {            
    echo    '<div class="hot-art-card id="hotartcard">
               <img class="hot-art-img" src="img/' .
                $row['artwork_url'] . '" alt="">
                <div class="hot-art-text">
                    <div class="hot-art-artist">' . $row['artist_name']. '</div>
                    <div class="hot-art-artwork">' . $row['artwork_name']. '</div>
                    <div class="hot-art-price">$'. $row['artwork_price'] . '</div>
                    <a href="php/singleartwork.php?artwork_id='. $row['artwork_id'].'">VIEW ARTWORK</a>
                </div>
            </div>';
    }
    $conn = null;
    ?>


</body>
</html>