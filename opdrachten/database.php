<?php
$host="localhost";
$username="root";
$password="";
$database="webshop";

try{
$connect = new PDO ("mysql:host=$host;dbname=$database", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'Database connected';

}


catch (PDOException $error)
{
    $error->getMessage();
}