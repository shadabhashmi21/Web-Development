<?php
    $link = mysqli_connect("localhost", "root", "", "users");
    if(mysqli_connect_error()) {
        echo "Error connecting database";
    }
    $query = "SELECT * FROM users";
    if($result = mysqli_query($link, $query)) {
        $row = mysqli_fetch_array($result);
        echo "Email: ".$row['email']." Password: ".$row['password'];
        echo "<p>Email: ".$row[1]." Password: ".$row[2];
    }
?>