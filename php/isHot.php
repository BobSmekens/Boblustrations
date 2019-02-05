<?php
$query = "SELECT artwork_hot, artwork_name FROM artwork1";

include "db_connection.php";
$db_Result = $conn->query($query);  

echo '<form action="isHotHandler.php" method="GET">
    <select name="artwork_name" id="">';

foreach($db_Result as $row) {
        echo '<option value="' . $row['artwork_name'] . '">'.$row['artwork_name'].'<option>';
    }
 echo '
    </select>
    <button type="submit">is hot now</button>
</form>';

?>