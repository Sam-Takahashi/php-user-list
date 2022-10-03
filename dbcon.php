<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$server = $_ENV['SERVER'];
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$dbname = $_ENV['DBNAME'];

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con) {
  die("Connection Failed". mysqli_connect_error());
}

?>