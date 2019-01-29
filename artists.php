<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artists</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bobcat.css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>
<body>
<?php include "php/header.php" ?>

<div class="whitespace"></div>

<div class="artistpage-filter debug">
Filter by:
    <select name="style" id="artistpage-filter-style">
        <option value="artist_style_paintings">Paintings</option>
        <option value="artist_style_drawings">Drawings</option>
    </select>
    <input id="artistpage_search" type="search" name="artistpage_search" placeholder="Search">
</div>

<?php include "php/artistcard.php"; ?>


</body>
</html>