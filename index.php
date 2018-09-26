
<link rel="stylesheet" href="style.css">

<?php

$nimi = "Alex loog";
$n = 12; // täisarv e integer
$n1 = 2.4423; // kümnendmurd e float e ujukomaarv
$t = true; //tõeväärtus e boolean

$m = array (8, "Tere", $n, 3.14, $nimi, false);

$n2 = 122;
$n3 = "122";

$nn = $n2 + $n1;
$nm = $n2.$n1;

echo "<h1> Tere IT-17E! Mina olen $nimi </h1>";

echo '<h1> Tere IT-17E! Mina olen $nimi</h1>';

echo "<p> See ei ole enam pealkiri, vaid lihtsalt sisu</p>";

echo "<p>" .$m[2]."</p>"; // concatenate e ühendamine

echo $nn." ".$nm."<br />";

echo "$n2 krüpteeritult on: ".md5($n2);

?>