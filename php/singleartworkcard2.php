<?php session_Start();?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>singleartist</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bobcat.css" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>
<body>
<?php 
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Uber' || $_SESSION['user_type'] == "Admin"){
        include "header2Admin.php";
    } else {
        include "header2.php"; 
    } 
?>
<?php
$artworkid = $_GET['artwork_id'];

$query = 
"SELECT artwork_url, artwork1.artwork_artist, artwork_name, artwork_price, artwork_id, artists1.artist_name, artwork_style, artwork_type
FROM artwork1
INNER JOIN artists1
ON artwork1.artwork_artist = artists1.artist_id
WHERE artwork_id = '$artworkid'";

include "db_connection.php";

$db_result = $conn->query($query);  
    foreach ($db_result as $row) {  
echo '
<div class="whitespace"></div>
<div class="singleartwork2-wrapper">
    <div class="singleartwork2-name">'.$row['artwork_name'].'.</div>
    <div class="singleartwork2-content">
        <div class="singleartwork2-image"><img src="../img/'.$row['artwork_url'].'" alt=""></div>
        <div class="singleartwork2-info">
            <div class="singleartwork-property">Artist:</div><div class="singleartwork-dbproperty">'. $row['artist_name']. '</div>
            <div class="singleartwork-property">Style:</div><div class="singleartwork-dbproperty">' . $row['artwork_style'] . '</div>
            <div class="singleartwork-property">Type:</div><div class="singleartwork-dbproperty">' . $row['artwork_type'] . '</div>
            <div class="singleartwork-property">Price:</div><div class="singleartwork-dbproperty">$' . $row['artwork_price'] . '</div>
            <a class="artworkcard-cart" href="addToCartHandler.php?artwork_id=' . $row['artwork_id']. '&artwork_price=' . $row['artwork_price'] . '">ADD TO CART</a>
        </div>
    </div>
</div>';
}

?>

</body>
</html>