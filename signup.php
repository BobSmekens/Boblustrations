<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous">
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
            <div class="signup-slogan">Is just around the corner</div>
        </div>

        <div class="signupform-right">
            <div class="signup-title">Signup here</div>

            <form action="php/signupHandler.php" method="GET">
                <i class="fas fa-headset"></i>
                <input type="text" name="client_name" placeholder="Name"><br>
                <i class="fab fa-mailchimp"></i>
                <input type="e-mail" name="client_email" placeholder="E-mail"><br>

                <i class="fas fa-lock"></i>
                <input type="password" name="client_password" Placeholder='Password'><br>

                <button onclick="signupCompleted()" type="submit">Submit</button>

                <div id="signup-completed">Signup completed!</div>
            </form>
        </div>
    </div>

    <script src="js/redirectclick.js"></script>
</body>

</html>