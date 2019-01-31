

<?php
$artistname = $_GET['artist_id'];

$query = 
"SELECT artist_url, artist_description, artist_style, artist_name
FROM artists
WHERE artist_id = '$artistname'";

include "db_connection.php";

$db_result = $conn->query($query);  
    foreach ($db_result as $row)
    {            
echo '<div class="singleartist-flex">
        <div class="singleartist-image">
            <img src="../img/' . $row['artist_url'] . '" alt="">
        </div>
        <div class="singleartist-txt">
            <Strong>Name: </strong> <br><br>' . $row['artist_name'] . '<br>
            <br><Strong>Style:</strong><br><br> '. $row['artist_style'] . ' <br>
            <br><Strong>Description:</strong><br><br>'. $row['artist_description'] . ' 
        </div>
    </div>';
    }

    $conn = null;
    ?>