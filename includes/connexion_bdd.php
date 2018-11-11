<?php // use actual date() format displayed in your table.
$servername = "localhost";
$port = "3308";
$username = "root";
$password = "";
$database = "blog";
try {
    $bdd = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
