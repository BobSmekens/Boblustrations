<?php
session_start();
$user_email = $_GET["client_email"];
$user_password = $_GET["client_password"];
$user_id = 0;
$query = "SELECT client_name, client_id, client_type
        FROM clients
        WHERE client_email = '$user_email'
        AND client_password = '$user_password'" ;     

$servername = "rdbms.strato.de";
$username = "U3664325";
$password = "banaan123!";
$database = "DB3664325";
include "oopattempt.php";
$connection = new Connection("$servername", "$username", "$password", "$database");
$connection->init_conn();

$db_result = $connection->conn->query($query);  

    if ($db_result->rowCount() !== 0 ) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['user_email'] = $user_email;
        
        foreach ($db_result as $row){
            $user_id = $row['client_id'];
            $user_type = $row['client_type'];
        };
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_type'] = $user_type;
        header('Location: ../login.php?user=' . $_SESSION['user_id']);
    } else {
        header('Location: ../login.php');
        $_SESSION['wrongcredentials'] = true;
    }

$conn = null;
        
      
?>
