<?php

try {
   
    $host = 'sql105.byethost9.com';
    $db   = 'b9_37928173_car_rental'; 
    $user = 'b9_37928173'; 
    $password = 'DDxHDJ@3WKUYiJ8'; 
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        PDO::ATTR_EMULATE_PREPARES   => false, 
    ];
    $pdo = new PDO($dsn, $user, $password, $options);

} catch (PDOException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    exit;
}

?>
