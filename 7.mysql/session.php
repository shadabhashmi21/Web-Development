<?php
    session_start();
    if($_SESSION['email']) {
        echo "You are logged in!";
    }
?>