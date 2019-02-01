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
<div class="cart-text">Current items in your personal shopping cart:</div>
<?php

if(isset($_SESSION['user_id'])){

$user_id = $_SESSION['user_id'];
$query = 
"SELECT client_name, client_id
FROM clients
WHERE client_id = '$user_id'";

include "db_connection.php";
$db_result = $conn->query($query);  
foreach ($db_result as $row)
{   
echo '
        <div class="cart-checkoutbox">
            <div class="checkoutbox-property">Hello there, '.$row['client_name'].'</div>
            <div class="checkoutbox-property">you have '. $db_result->rowCount() .' items</div>'; 
}
$conn = null;
}
?>

<?php
if(isset($_SESSION['user_id'])){

$query = 
"SELECT SUM(artwork_price) 
AS 'total'
FROM cart";

include "db_connection.php";
$totalprice = $conn->query($query); 
$totalpricereturn= $totalprice->fetch(PDO::FETCH_ASSOC);

echo '
        <div class="checkoutbox-property">for a total of<i> $'.$totalpricereturn['total'].'</i></div>
        <a href="">Checkout</a>
        </div>';

$conn = null;
}
?>
<?php
if(isset($_SESSION['user_id'])){
$client_id = $_SESSION['user_id'];
$query = 
"SELECT artwork.artwork_name, artwork.artwork_price, artists.artist_name, artwork.artwork_url
FROM cart
INNER JOIN artwork 
ON artwork.artwork_id = cart.artwork_id
INNER JOIN artists
ON artwork.artist_id = artists.artist_id
INNER JOIN clients
ON cart.client_id = clients.client_id
WHERE clients.client_id = '$client_id'";

include "db_connection.php";
$db_result = $conn->query($query);  
foreach ($db_result as $row)
{   
    echo'
    <div class="cart-container">
        <div class="cart-left">
            <img src="img/' . $row['artwork_url'] . '" alt="">
        </div>
        <div class="cart-right">
            <div class="artwork-property">Artwork Name:</div>' . $row['artwork_name'] . '
            <div class="artwork-property">Artist:</div>' . $row['artist_name'] . '
            <div class="artwork-property">Price:</div>$' . $row['artwork_price'] . '
        </div>
    </div>';
}

$conn = null;
} else {
    echo '<div class="cart-not-loggedin">
    please log in to use the cart of death
    <div>';
}
?>

</body>
</html>

