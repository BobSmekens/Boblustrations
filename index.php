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
<?php include "php/header.php"; ?>

<div class="whitespace"></div>

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
            
            <form action="formHandler.php" method="GET">
                <input id="newsletter-email" type="text" placeholder="subscribe with e-mail">
                <input id="newsletter-submit" type="submit">
            </form>

        </div>
    </div>
</div>

<div class="footer">
    <div class="footer-copyright">Copyright &copy Bob Smekens 2019</div>
</div>   

</body>
</html>