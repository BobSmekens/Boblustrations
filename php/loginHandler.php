<?php
session_start();
$user_email = $_GET["client_email"];
$user_password = $_GET["client_password"];
$user_id = 0;
$query = "SELECT client_name, client_id
        FROM clients
        WHERE client_email = '$user_email'
        AND client_password = '$user_password'" ;     

include "db_connection.php";

$db_result = $conn->query($query);

    if ($db_result->rowCount() !== 0 ) {
        echo 'Welcome ' . $user_email;
        $_SESSION['loggedIn'] = true;
        $_SESSION['user_email'] = $user_email;
        foreach ($db_result as $row){
        $user_id = $row['client_id'];
        };
        $_SESSION['user_id'] = $user_id;
        header('Location: ../login.php?user=' . $_SESSION['user_id']);
    } else {
        header('Location: ../login.php');
    }

$conn = null;
        
      
?>
