<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bobcat.css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>
<body>
<div id="scrolltracker"></div>

<?php include "php/header.php" ?>

<div class="signup-container">

    <div class="signupform-left">
        <div class="signup-slogan">Easy art access</div>   
        <img id="signup-logo" src="img/illulogo.png" alt="">
        <div class="signup-slogan">Is here</div>
    </div>

    <div class="signupform-right">
        <div class="signup-title">Signup here</div>
        
        <form action="php/signupHandler.php" method="GET">
            <input type="text" name="client_name" placeholder="Name"><br>

            <input type="e-mail" name="client_email" placeholder="E-mail"><br>

            <input type="password" name="client_password" Placeholder="Password"><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>


</body>
</html>