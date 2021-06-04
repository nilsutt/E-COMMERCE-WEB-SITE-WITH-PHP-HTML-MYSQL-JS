<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];


    $mailTo = "nilsutatlici62@gmail.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: iletisim.php?mailsend");
}




?>