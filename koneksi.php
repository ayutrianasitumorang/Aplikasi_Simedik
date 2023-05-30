<?php
$username   =   "root";
$passDB     =   "";
$host       =   "localhost";
$database   =   "simersa";
$koneksi = mysqli_connect ($host, $username, $passDB, $database);
if(!$koneksi){
    echo "Error connecting to database".$database;
}?>