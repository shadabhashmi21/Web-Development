<?php
    $link = mysqli_connect("localhost", "root", "", "users");
    if(mysqli_connect_error()) {
        echo "Error connecting database";
    }
    $query = "INSERT INTO users(email, password) VALUES('hashmishadab84@gmail.com', '1234')";
    if(mysqli_query($link, $query) === TRUE) {
        echo "New record created";
    }else {
        echo mysqli_error($link);
    }
    $query = "UPDATE users SET email = 'hashmishadab60@gmail.com' WHERE id = 1 LIMIT 1";
    if(mysqli_query($link, $query) === TRUE) {
        echo "New record created";
    }else {
        echo mysqli_error($link);
    }
?>