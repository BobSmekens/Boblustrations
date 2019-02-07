<?php
$query = "SELECT artwork_hot, artwork_name FROM artwork1 WHERE artwork_hot = 0";

include "db_connection.php";
$db_result = $conn->query($query);   
echo '<form action="isHotHandler.php" method="GET">
    <select name="artwork_name" id="">';

foreach($db_result as $row) {
        echo '<option value="' . $row['artwork_name'] . '">'.$row['artwork_name'].'<option>';
    }
 echo '
    </select>
    <button type="submit">is hot now</button>
</form>';
$conn = null;
?>