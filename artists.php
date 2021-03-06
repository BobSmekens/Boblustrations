<?php session_start() ?>
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
<div id="scrolltracker"></div>

<?php 
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Uber' || $_SESSION['user_type'] == "Admin"){
        include "php/headerAdmin.php";
    } else {
        include "php/header.php"; 
    } 
?>
<div class="whitespace"></div>

<div class="artistpage-filter">
<form action="artists.php" method="GET">
    <label for="style">Artist style: </label>
    <select onchange="filterStyle(this.value)" name="style" class="artistpage-filter-style">
        <option value="All">All</option>
        <option value="Paintings">Paintings</option>
        <option value="Drawings">Drawings</option>
    </select>
    <label for="style">Artist type: </label>
    <select onchange="filterType(this.value)" name="type" class="artistpage-filter-style">
        <option value="All">All</option>
        <option value="Abstract">Abstract</option>
        <option value="Realism">Realism</option>
    </select>
<!--    <button id="filterbtn" type="submit">search</button>-->
</form>
<!--
    <label for="search"> Artist name: </label>
    <input onchange="filterText(this.value)" id="artistpage-search" type="search" name="artistpage_search" placeholder="Search">
-->
</div>

<div id="cardWrapper">
    <?php //include "php/artistcard.php"; ?>
</div>
<?php include "php/footer.php" ?>

<script src="js/filter.js"></script>
</body>
</html>