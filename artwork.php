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
    <label for="style">Art style: </label>
    <select name="style" class="artistpage-filter-style">
        <option value="artist_type_abstract">Abstract</option>
        <option value="artist_type_realism">Realism</option>
    </select>
    <label for="style">Art type: </label>
    <select name="style" class="artistpage-filter-style">
        <option value="artist_style_paintings">Paintings</option>
        <option value="artist_style_drawings">Drawings</option>
    </select>
    <label for="search"> Artist/Artwork: </label>
    <input id="artistpage-search" type="search" name="artistpage_search" placeholder="Search">
</div>

<div class="artwork-section">
    <div class="hot-art-container">
        <?php include "php/artworkcard.php"; ?>
    </div>
</div>
    

</body>
</html>

