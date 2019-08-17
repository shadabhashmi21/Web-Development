<?php
$a = array("Java", "Python", "C", "C++");
foreach ($a as $key => $value) {
    $a[$key] = $value." Programming Language";
    echo "Array item ".$key." is ".$value."<br>";
}
for ($i = 0; $i < sizeof($a); $i++) {
    echo $a[$i]."<br>";    
}
for ($i = 10; $i >= 0; $i--) {
    echo $i."<br>";
}
?>