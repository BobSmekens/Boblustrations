

<?php
$artistname = $_GET['artist_id'];

$query = 
"SELECT artist_url, artist_description, artist_style, artist_name
FROM artists1
WHERE artist_id = '$artistname'";

include "oopattempt.php";
$connection = new Connection("localhost", "root", "", "boblustrations");
$connection->init_conn();

$db_result = $connection->conn->query($query); 
    foreach ($db_result as $row)
    {            
echo '
        <div class="singleartist-name">'.$row['artist_name'].'.</div>
        <div class="singleartist-flex">
            <div class="singleartist-image">
                <img src="../img/' . $row['artist_url'] . '" alt="">
            </div>
            <div class="singleartist-txt">
                <br><Strong>Style:</strong><br><br> '. $row['artist_style'] . ' <br>
                <br><Strong>Description:</strong><br><br>'. $row['artist_description'] . ' 
            </div>
        </div>';
    }

    $conn = null;
    ?>