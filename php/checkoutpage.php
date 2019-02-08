<?php session_start() ?>
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

<?php 
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Uber' || $_SESSION['user_type'] == "Admin"){
        include "../php/header2Admin.php";
    } else {
        include "../php/header2.php"; 
    } 
?>

<div class="checkoutform-box">
    <form action="checkoutformhandler.php">
        <input type="text" name="firstname">

    </form>

</div>

<?php
$client_id = $_SESSION['client_id'];

$query = "SELECT * FROM cart
INNER JOIN artwork1
ON artwork1.artwork_id = cart.artwork_id
INNER JOIN clients
ON clients.client_id = cart.client_id
WHERE cart.client_id = '$client_id'";

include "db_connection.php";
$db_result = $conn->query($query); 
 
foreach ($db_result as $row)
{   
echo '
        <div class="cart-checkoutbox debug">
            <div class="checkoutbox-property">Hello there, '.$row['client_id'].'</div>
            </div>'
          ; 
}
$conn = null;

?>
<?php
if(isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];

$query = 
"SELECT SUM(artwork_price) 
AS 'total'
FROM cart
WHERE client_id = $user_id";

include "db_connection.php";

$totalprice = $conn->query($query); 
$totalpricereturn= $totalprice->fetch(PDO::FETCH_ASSOC);

echo '<div class="checkoutpage-box debug">
        <div class="checkoutbox-property">Checkout amount is:<i> $'.$totalpricereturn['total'].'</i></div>
        <a href="clearCartHandler.php">Checkout</a>
        </div>';

$conn = null;
}
?>
 

</body>

</html>