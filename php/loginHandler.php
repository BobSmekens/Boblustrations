

<?php
$user_email = $_GET["client_email"];
$user_password = $_GET["client_password"];

$query = "SELECT client_name
        FROM clients
        WHERE client_email = '$user_email'
        AND client_password = '$user_password'" ;     

include "db_connection.php";

$db_result = $conn->query($query);

    if ($db_result->rowCount() !== 0 ) {
        echo 'Welcome ' . $user_email;
    } else {
        echo 'alert("login incorrect")';
    }

$conn = null;
        
       header('Location: ../login.php?user=' . $user_email);
?>
