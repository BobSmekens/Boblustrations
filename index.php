<?php 
session_start() ;


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bobcat.css" />
    <script src="js/bobcat.js"></script>
    <script src="js/headerup.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>

<body>
    <div id="scrolltracker"></div>
    <?php 
    
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Uber' || $_SESSION['user_type'] == "Admin"){
        include "php/headerAdmin.php";
    } else {
        include "php/header.php"; 
    }
    
    ?>

    <div class="landingpage-slider">
        <button id="btn-left" class="slider-btn" onclick="landingpageSliderMinus()">&#8668</button>
        <button id="btn-right" class="slider-btn" onclick="landingpageSliderPlus()">&#8669</button>
        <div class="slider-artistname">Fred Jourdin</div>
    </div>

    <!--                         hot art                      -->
    <div class="hot-art-section">

        <div class="section-title">Hot art this week:</div>
        <div class="hot-art-container">
            <?php include "php/hotartcard.php"; ?>
        </div>
    </div>

    <div class="section-divider-line"></div>

    <!--                      artist of the month             -->

    <?php include "php/monthlyartist.php" ?>
    <!--                            newsletter                -->
    <div class="newsletter-banner">
        <div class="newsletter-layover">
            <div class="newsletter-title">Subscribe to newsletter</div>
            <div class="newsletter-txt">Get updates on new art, new artists and discounts</div>
            <div class="newsletter-form">
                <form action="php/newsletterHandler.php" method="GET">
                    <input id="newsletter-email" name="newsletter_email" type="text" placeholder="subscribe with e-mail">
                    <input id="newsletter-submit" type="submit" onclick="signupCompleted()">
                </form>
            </div>
        </div>
    </div>

<?php include "php/footer.php" ?>

<script href="js/redirectclick.js"></script>
</body>

</html>