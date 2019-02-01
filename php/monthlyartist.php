<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artists</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bobcat.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>
<body>

<?php
$query = 
"SELECT artist_name, artist_description, artist_url, artist_id
FROM artists WHERE artist_monthly = 1 LIMIT 1";

include "db_connection.php";
$db_result = $conn->query($query);  
    foreach ($db_result as $row)
    {   
        echo 
        '<div class="monthly-artist-container">      
            <div class="monthly-artist-txt">
                <div class="monthly-artist-title">Artist of the month</div>
                <div class="monthly-artist-stripe"></div>
                <div class="monthly-artist-name">' . $row['artist_name'] . '</div>
                <div class="monthly-artist-description">' . $row['artist_description'] .
            '</div>
            <div class="monthly-artist-link"><a href="php/singleartist.php?artist_id='. $row['artist_id'].'">VIEW ARTIST</a></div>
         </div>
        <div class="monthly-artist-img">
            <img src="img/' . $row['artist_url'] . '" alt="">
        </div>
    </div>';
    }
    $conn = null;
    ?>


</body>
</html>