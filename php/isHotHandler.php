<?php 
$artwork_name = $_GET['artwork_name'];

$query = "UPDATE artwork1
SET artwork_hot = 1
WHERE artwork_name = '$artwork_name'";

include "db_connection.php";
$conn->query($query);  

echo $artwork_name . ' is now hot art';

?>