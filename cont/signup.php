<?php

if (isset($_POST['signup-submit'])){

     require 'conn.php';

     $name = $_POST['name'];
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $rpPassword = $_POST['repeatPassword'];

     if(empty($name) || empty($username) || empty($email) || empty($password) || empty($rpPassword)){
         header("Location: ../inc/signup.php?error=emptyfields&name=\"$name\"&username=\"$username\"&email=\"$email");
         exit();

     }
     elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username) ){
         header("Location: ../inc/signup.php?error=invalidemail&username");
         exit();

     }
     elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
         header("Location: ../inc/signup.php?error=invalidmail&name=\"$name\"&username=\"$username");
         exit();

     }
     elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
         header("Location: ../inc/signup.php?error=invalidusername&name=\"$name\"&email=\"$email");
         exit();

     }
     elseif ($password !== $rpPassword){
         header("Location: ../inc/signup.php?error=passwordcheck&name=\"$name\"&username=\"$username\"&email=\"$email");
         exit();

     }
     else{
         $sql = "SELECT usernameUser FROM users WHERE usernameUser=?";
         $stmt = mysqli_stmt_init($conn);

         if(!mysqli_stmt_prepare($stmt,$sql)){
             header("Location: ../inc/signup.php?error=sqlerror");
             exit();
         }
         else{
             mysqli_stmt_bind_param($stmt, 's',$username);
             mysqli_stmt_execute($stmt);
             mysqli_stmt_store_result($stmt);
             $resultCheck = mysqli_stmt_num_rows($stmt);
             if($resultCheck > 0){
                 header("Location: ../inc/signup.php?error=usernametaken&name=\"$name\"&email=\"$email");
                 exit();
             }
             else{
                 $sql = "INSERT INTO users (nameUser,usernameUser,emailUser,pwdUser) VALUE (?,?,?,?)";
                 $stmt = mysqli_stmt_init($conn);

                 if(!mysqli_stmt_prepare($stmt,$sql)){
                     header("Location: ../inc/signup.php?error=sqlerror");
                     exit();
                 }
                 else{
                     $hpwd = password_hash($password, PASSWORD_DEFAULT);

                     mysqli_stmt_bind_param($stmt, 'ssss', $name,$username, $email,$hpwd );
                     mysqli_stmt_execute($stmt);
                     header("Location: ../inc/portfolio.php?signup=success");
                     exit();
                 }
             }
         }
     }
     mysqli_stmt_close($stmt);
     mysqli_close($conn);

}
else{
    header("Location: ../inc/signup.php");
    exit();
}