<?php

$query = "DELETE FROM cart";

include "oopattempt.php";
$connection = new Connection("localhost", "root", "", "boblustrations");
$connection->init_conn();

$connection->conn->query($query);  
$conn = null;


?>