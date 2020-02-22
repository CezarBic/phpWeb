<?php
$localhost = 'localhost';
$user = 'phpmyadmin';
$password = 'coderslab';
$db = 'web';

$conn = mysqli_connect($localhost,$user,$password,$db);

if(!$conn){
    die("Connection faild: ".mysqli_connect_error());
}