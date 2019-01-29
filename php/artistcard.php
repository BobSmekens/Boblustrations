<?php
$query = 
"SELECT artist_name, artist_description, artist_url
FROM artists";

include "db_connection.php";
$db_result = $conn->query($query);  
    foreach ($db_result as $row)
    {   
        echo 
        '<div class="artistpage-container">      
            <div class="artistpage-txt">
                <div class="artistpage-name">' . $row['artist_name'] . '</div>
                <div class="artistpage-description">' . $row['artist_description'] . '</div>
            </div>
            <div class="artistpage-img artistpage-txt">
                <img src="img/' . $row['artist_url'] . '" alt="">
            </div>
            <div class="artistpage-link"><a href="">VIEW ARTWORKS</a></div>

        </div>';
    }
    $conn = null;
    ?>