<?php

    session_start();

    if (array_key_exists("content", $_POST)) {
        
        $link = mysqli_connect("localhost", "root", "", "secret");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }
        
        $query = "UPDATE users SET diary = '".mysqli_real_escape_string($link, $_POST['content'])."' WHERE email = '".mysqli_real_escape_string($link, $_SESSION['email'])."' LIMIT 1";
        
        if(mysqli_query($link, $query)) {
            echo "success";
            echo $_SESSION['email'];
        } else {
            echo "fail";
            mysqli_error($link);
        }
        
    }

?>
