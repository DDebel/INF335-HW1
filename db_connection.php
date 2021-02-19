<?php
// Database connection 
$host = "localhost";
$user = "root";
$password = "";
$db = "inf335";

// Set DSN
try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "*Connected successfully to $db database*" . '<br /> ';
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
