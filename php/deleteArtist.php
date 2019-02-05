<?php
$query = "SELECT artist_name FROM artists1";

include "db_connection.php";
$db_Result = $conn->query($query);  

echo '<form action="removeArtistHandler.php" method="GET">
    <select name="artist_name" id="">';

foreach($db_Result as $row) {
        echo '<option value="' . $row['artist_name'] . '">'.$row['artist_name'].'<option>';
    }
 echo '
    </select>
    <button type="submit">delete artist</button>
</form>';

?>