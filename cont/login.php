<?php

if(isset($_POST['login'])){

    require 'conn.php';

    $username = $_POST['usr'];
    $password = $_POST['pwp'];

    if(empty($username) || empty($password)){
        header("Location: ../inc/portfolio.php?error=empltyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE usernameUser=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../inc/portfolio.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pasCheck = password_verify($password, $row['pwdUser']);
                if($pasCheck == false){
                    header("Location: ../inc/portfolio.php?error=passworwrong");
                    exit();
                }elseif ($pasCheck == true){
                    session_start();
                    $_SESSION['usernameUser'] = $row['usernameUser'];
                    header("Location: ../inc/tabel.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../inc/portfolio.php?error=passworwrong");
                    exit();
                }
            }else{
                header("Location: ../inc/portfolio.php?error=nouser");
                exit();
            }

        }
    }

}
else{
    header("Location: ../inc/portfolio.php");
    exit();
}