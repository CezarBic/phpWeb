<?php
require 'conn.php';



$sql = "SELECT * FROM reservation";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

foreach ($result as $row){
    $id = $row['id'];
}

if(isset($_POST['delete'])){
        $sqll = "DELETE FROM `reservation` WHERE `reservation`.`id` ='$id'";
        $stmtt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmtt,$sqll);
        mysqli_stmt_execute($stmtt);
        header("Location: ../inc/tabel.php");
        exit();

}


