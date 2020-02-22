<?php
session_start();

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: ../inc/portfolio.php?logout=succesfully");
    exit();

}else{
    session_destroy();
    header("Location: ../inc/portfolio.php?logout=succesfully");
    exit();
}

