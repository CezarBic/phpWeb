<?php

if(isset($_POST['submit-mail'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo= "bican.cezar@gmail.com";
    $headers = "From: ".$mail;
    $txt = "You have receive an e-mail from: ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../index.php?mailsend");
}
