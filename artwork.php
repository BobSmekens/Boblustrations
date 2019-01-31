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

<div class="artistpage-filter">
<label for="style">Artwork style: </label>
    <select onchange="filterStyleArt(this.value)" name="style" class="artistpage-filter-style">
        <option value="All">All</option>    
        <option value="Painting">Paintings</option>
        <option value="Drawing">Drawings</option>
    </select>
    <label for="style">Artwork type: </label>
    <select onchange="filterTypeArt(this.value)" name="style" class="artistpage-filter-style">
        <option value="All">All</option>
        <option value="Abstract">Abstract</option>
        <option value="Realism">Realism</option>
    </select>
    <label for="price">Price: </label>
    <select onchange="filterPriceArt(this.value)" name="style" class="artistpage-filter-style">
        <option value="All">All</option>
        <option value="61">Below $60</option>
        <option value="200">$60-$200</option>
        <option value="5000">Above $200</option>
    </select>
<!--    
    <label for="search"> Artist/Artwork: </label>
    <input id="artistpage-search" type="search" name="artistpage_search" placeholder="Search">
-->
</div>

<div class="artwork-section">
    <div class="hot-art-container">
        <?php include "php/artworkcard.php"; ?>
    </div>
</div>
    
<script src="js/filterart.js"></script>

</body>
</html>

