<?php

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];


    $mailTo = "cbnc5@att.net";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mail=send");

  }
