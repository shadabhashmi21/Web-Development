<?php
    $emailTo = "shadabhashmi57@gmail.com";
    $subject = "Testing";
    $body = "Just Testing";
    $headers = "From: er.shadabhashmi@gmail.com";
    if(mail($emailTo, $subject, $body, $headers)) {
        echo "Email Sent Successfully";
    } else {
        echo "The email could not be sent";
    }