<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artwork</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bobcat.css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>
<body>
<div id="scrolltracker"></div>

<?php include "php/header.php" ?>

<div class="whitespace"></div>
<br>
cart works

<?php
$query = 
"SELECT artist_country, artist_id, artist_name, artist_description, artist_url, artist_style, artist_type
FROM artists";
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
        <div class="artistpage-link"><a href="php/singleartist.php?artist_id='. $row['artist_id'] . '">VIEW ARTWORKS</a></div>

    </div>';
}
$conn = null;

?>


</body>
</html>

