<?php
    session_start();
    
    $diaryContent = "";
    /*if(array_key_exists("id", $_COOKIE)) {
   // echo $_SESSION['id'] = $_COOKIE['id'];
    }*/
    if(array_key_exists("email", $_SESSION)) {
        echo "<p>Logged In! <a href='project.php?logout=1'>Log out</a></p>";
       $_SESSION['email'] ;
        $link = mysqli_connect("localhost", "root", "", "secret");
        if(mysqli_connect_error()) {
            die ("Error connecting database");
        }
       // $query = "SELECT  diary FROM users WHERE id = ".mysqli_real_escape_string(18);
        
        $query = "SELECT diary FROM users WHERE email = ' ".mysqli_real_escape_string($link, $_SESSION["email"])."' LIMIT 1";
        
        mysqli_query($link ,$query);
        $row = mysqli_fetch_array(mysqli_query($link ,$query));
        $diaryContent = $row['diary'];
    } else {
        header("Location: project.php");
    }
    include("header.php");
?>
    <div class="container-fluid">
        <textarea id="diary" class="form-control"><?php echo $diaryContent; ?></textarea>
    </div>
<?php
    include("footer.php");
?>