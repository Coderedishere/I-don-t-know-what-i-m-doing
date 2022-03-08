<?php
// Set up the database connection
$dsn = 'mysql:host=localhost;dbname=my_HLindner_final';
$username = 'final_user';
$password = 'sesame';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    exit();
}
?>
