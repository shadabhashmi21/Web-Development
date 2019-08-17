<?php
    if($_GET) {
    $f=true;
    $i=2;
    while($i < $_GET['number'])    {
        if($_GET['number'] % $i == 0) {
            $f=false;
        }
        $i++;
    }
    if($f==true) {
        echo "Prime number";
    } else {
        echo "Not a prime number";
    }
    }
?>
<p>Enter your name</p>
<form>
    <input name="number" type="text">
    <input type="submit" value="Go!">
</form>