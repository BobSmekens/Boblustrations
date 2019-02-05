<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bobcat.css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>
<body>
<?php 
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Uber' || $_SESSION['user_type'] == "Admin"){
        include "header2Admin.php";
    } else {
        include "header.php"; 
    } 
?>
<div class="signup-container">

    <div class="signupform-left debug">
        <div class="signup-slogan">Easy art access</div>   
        <img id="signup-logo" src="..\img/illulogo.png" alt="">
        <div class="signup-slogan">Is here</div>
    </div>

    <div class="signupform-right">
        <div class="signup-title">Signup here</div>
        <form action="signupHandler.php" method="GET">
            <input type="text" name="client_name" placeholder="Name"><br>

            <input type="e-mail" name="client_email" placeholder="E-mail"><br>

            <input type="password" name="client_password" Placeholder="Password"><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>


</body>
</html>