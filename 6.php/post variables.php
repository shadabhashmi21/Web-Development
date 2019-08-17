<?php
    if($_POST) {
        $food = array("Biryani","Kofta");
        $known = false;
        foreach($food as $value) {
            if($value == $_POST['name']) {
                $known = true;
            }
        }
        if($known) {
            echo "Delicious";
        } else {
            echo "Distasteful";
        }
    }
?>
<form method="post">
    <p>What is your name?</p>
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>