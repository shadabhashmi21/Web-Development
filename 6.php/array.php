<?php
$ar1 = array("BMW","Audi","Lamborghini","Mercedes");
$ar1[] = "Porsche";
print_r($ar1);
echo $ar1[2];
echo "<br><br>";
$ar2[0] = "Kofta";
$ar2[1] = "Biryani";
$ar2[5] = "Pizza";
$ar2["myfavourite"] = "Mutton Biryani";
print_r($ar2);
echo "<br><br>";
$ar3 = array(
    "Apple" => "IOS",
    "Google" => "Android",
    "Samsung" => "Bada");
unset($ar3["Samsung"]);
print_r($ar3);
echo sizeof($ar3);
?>