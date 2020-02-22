<?php
session_start();
if (isset($_POST['submit-table'])) {

    require 'conn.php';


    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $option = $_POST['option'];
    $text = $_POST['text'];
    $date = $_POST['date'];

    if (empty($firstName) || empty($lastName) || empty($option) || empty($text) || empty($date)) {

        header("Location: ../inc/portfolio.php?error=emptyfields&firstname=\"$firstName\"&lastname=\"$lastName\"&option=\"$option\"&text=\"$text\"&date=\"$date");
        exit();

    } else {

        $sql = "INSERT INTO reservation (firstname,lastname,op,message,date) VALUE (?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../inc/portfolio.php?error=sqlerror");
            exit();
        } else {


            mysqli_stmt_bind_param($stmt, 'ssiss', $firstName, $lastName, $option, $text, $date);
            mysqli_stmt_execute($stmt);
            header("Location: ../inc/portfolio.php?booked=success");
            exit();
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);


    }

}
