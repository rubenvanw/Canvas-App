<?php
$db_host = "localhost";
$db_username = "85748_ruben";
$db_password = "pocketoli";
$db_database = "database_algemeen";


try{
    $database = new PDO("mysql:host={$db_host};dbname={$db_database};charset=utf8mb4", $db_username, $db_password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "connectie gelukt" . "<br/>";
} catch (PDOException $exception){
    // echo "connectie mislukt";
    print "Error!: " . $e->getMessage() . "<br/>";
}
