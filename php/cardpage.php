<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artwork</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bobcat.css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>

<body>
    <div id="scrolltracker"></div>
    <?php include "classes_Cards.php" ?>
 
<?php
$db_connection = new Db_connect;
$connected = $db_connection->Connect_innit();

$query = "SELECT * FROM artists1";

foreach($db_result as $row) {
$card = new card_artistcard($row['artist_name'], $row['artist_style'], $row['artist_type'], $row['artist_url'], $row['artist_id']);
$card-> echoCard();
}

$card1 = new card_artistcard('bob', 'drawings', 'realism', '../img/fredjourdin1.jpg', 3);
$card1->echoCard();
?>
    

</body>

</html>