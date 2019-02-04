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
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bobcat.css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>

<body>
<div id="scrolltracker"></div>

<?php include "header2.php" ?>


<div class="admin-form debug">
    <div class="admin-form-title">Add artist</div>
    <form action="addArtistHandler.php" method="GET">
        <input type="text" placeholder="name" name="name"><br>
        <input type="text" placeholder="artist-bio" name="artist_bio"><br>
        <select type="text" placeholder="style" name="style">
            <option value="Drawings">Drawing</option>
            <option value="Paintings">Painting</option>
        </select>   <br>
        <input type="text" placeholder="monthly" name="monthly"><br>
        <input type="text" placeholder="img url" name="url"><br>
        <select type="text" placeholder="type" name="type"><br>
            <option value="Realism">Realism</option>
            <option value="Abstract">Abstract</option>
        </select><br>
        <button type="submit">Submit</button>
    </form>
</div>

<div class="admin-form debug">
    <div class="admin-form-title">Add artwork</div>
    <form action="addArtwork1Handler.php" method="GET">
        <input type="text" placeholder="name" name="name"><br>
        <input type="text" placeholder="artist-id" name="artist_id"><br>
        <select type="select" placeholder="style" name="style">
            <option value="Drawing">Drawings</option>
            <option value="Painting">Painting</option>
        </select><br>
        <input type="text" placeholder="price" name="price"><br>
        <input type="text" placeholder="img url (fredjourdin1.jpg)" name="url">
        <br>
        <select type="select" placeholder="type" name="type">
            <option value="Realism">Realism</option>
            <option value="Abstract">Abstract</option>
        </select><br>
        <input type="text" placeholder="hot(0 or 1)" name="hot"><br>
        <button type="submit">Submit</button>
    </form>
</div>

 
</body>

</html>