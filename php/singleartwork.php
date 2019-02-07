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

<?php include "singleartworkcard2.php" ?>

<div class="single-artist-art">
    <div class="single-artist-moreart">More art:</div>
    <?php include "singleartworkartcard.php" ?>
</div>
<?php include "footer.php" ?>



</body>
</html>