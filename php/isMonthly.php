<?php
$query = "SELECT artist_monthly, artist_name FROM artists1 WHERE artist_monthly = 0";

include "db_connection.php";
$db_result = $conn->query($query);  

echo '<form action="isMontlyArtist.php" method="GET">
    <select name="artist_name" id="">';

foreach($db_result as $row) {
        echo '<option value="' . $row['artist_name'] . '">'.$row['artist_name'].'</option>';
    };

 echo '
    </select>
    <button type="submit">is montly now</button>
</form>';
$conn = null;
?>