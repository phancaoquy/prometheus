<?php
// include '../config/config.php';

define('SVName', 'localhost:3306');
define("USRname", "root");
define('DBpass', '');
define('DBName', 'prometheus');

global $conn;
try {
    $conn = new PDO("mysql:host=" . SVName . ";dbname=" . DBName, USRname, DBpass);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>