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
<?php include "php/header2.php" ?>
<!--
<div class="singleartist-container debug">
    <div class="singleartist-flex debug">
        <div class="singleartist-image debug">
            <img src="../img/artist1.jpg" alt="">
        </div>
        <div class="singleartist-txt debug">
            Name: naam <br>
            Style: stijl <br>
            Description: beschrijving qwdqwdqwd wqdqwdwqdq qwdqwdwqd qdwqdwdq
            dwqwdqwdw wqdqwdwqd wqdqwdq qwdqwd qwdqd qd q <br>
        </div>
    </div>
</div>
-->
<div class="singleartist-container debug">
    <?php include "singleartistcard.php" ?>
</div>

    <div class="single-artist-art">

    <?php include "singleartistartcard.php" ?>
        
    </div>



</body>
</html>