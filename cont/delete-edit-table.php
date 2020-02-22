<?php
require '../cont/conn.php';

$sql = "SELECT * FROM reservation";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

foreach ($result as $row){
    $id = $row['id'];
    $fname = $row['firstname'];
    $lname = $row['lastname'];
    $op = $row['op'];
    $msg =  $row['message'];
    $date = $row['date'];
}

