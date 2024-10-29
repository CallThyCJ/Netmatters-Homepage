<?php
$host = getenv("MySQL_DB_HOST");
$dbname = getenv("MySQL_DB_NAME");
$username = getenv("MySQL_DB_USER_NAME");
$password = getenv("MySQL_DB_PASSWORD");


try {
    // Create PDO connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>