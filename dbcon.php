<?php

$server = "sql205.epizy.com";
$username = "epiz_32708529";
$password = "Gmppr6MR9ZyLG";
$dbname = "epiz_32708529_blogz";
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "students_blog";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con) {
  die("Connection Failed". mysqli_connect_error());
}

?>