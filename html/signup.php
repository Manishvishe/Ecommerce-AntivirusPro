<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$username = "root"; 
$password = "manish45"; 
$database = "p_booking"; 
$port = 3306;


$your_db_connection = new mysqli($host, $username, $password, $database, $port);


if ($your_db_connection->connect_error) {
    die("Connection failed: " . $your_db_connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql = "INSERT INTO logsign (username, email, password) VALUES (?, ?, ?)";
    

    $stmt = $your_db_connection->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sss", $username, $email, $password);
        if ($stmt->execute()) {
            
            echo '<script type="text/javascript">alert("Registration successful!");</script>';
            echo '<script type="text/javascript">window.location = "login.html";</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error in preparing the SQL statement: " . $your_db_connection->error;
    }

    
    $your_db_connection->close();
}
?>