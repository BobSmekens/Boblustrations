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

<?php
$query = 
"SELECT artwork.artwork_name, artwork.artwork_price
FROM cart
INNER JOIN artwork 
ON artwork.artwork_id = cart.artwork_id";

include "db_connection.php";
$db_result = $conn->query($query);  
foreach ($db_result as $row)
{   
 echo $row['artwork_name'] . '<br>' . $row['artwork_price'] . '<br><br>';
}
$conn = null;

?>


</body>
</html>

