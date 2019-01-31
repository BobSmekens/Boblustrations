<?php

$query = "DELETE FROM cart";

include "db_connection.php";

$conn->query($query);  
$conn = null;


?>