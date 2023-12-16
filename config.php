<?php
$server = "localhost";
$user = "root";
$password = "";
$databasename = "company";

$db = mysqli_connect($server,$user,$password,$databasename);
if(!$db){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>