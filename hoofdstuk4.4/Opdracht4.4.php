<?php
/**
 * User: Teun van Glabbeek
 * Date: 15-03-2020
 * Time: 20:52
 * File: Opdracht4.4.php
 */

?>

<?php
include "../includes/Header.php"
?>

<?php
echo "<h1>oefening 4.4</h1>";
$nu = strtotime("now");
$datumVandaag = date('d-m-y', $nu);
// Vandaag

$datumDag = date('w', $nu);
echo "Vandaag is het de ".$datumDag. " dag en de datum is ".$datumVandaag;
echo "<br>";
$dagenWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
echo "Vandaag is het ".$dagenWeek[$datumDag] . " en datum is ". $datumVandaag;
// Dag van de week 0-7

$nu = strtotime('+1 days');
$datumVandaag = date('d-m-y', $nu);
$datumDag = date('w',$nu);
// Morgen

echo "<br>Morgen is het de ".$datumDag. " dag en de datum is ".$datumVandaag;
echo"<br>";
echo "Morgen is het ".$dagenWeek[$datumDag]. " en de datum is ". $datumVandaag;
?>

<?php

echo "<br>";
echo "<br>";

echo "<h1>Opdracht 4.4</h1>";

$dagenVanDeWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag"); // Arrey met alle dagen van de week
$test = ""; // Lege string
for($x=0; $x <15; $x++) {
    $dagnr = date('w', strtotime("+$x days")); // Laat het nummer van de dag zien
    $eendatum = date('d-m-Y', strtotime("+$x days")); // Laat de data zien
    $test .= "Dag $dagnr is {$dagenVanDeWeek[$dagnr]} $eendatum <br>"; // Dit komt in de lege string
}
// Loop om alles opnieuw af te spelen
echo $test
?>

<?php
include "../includes/Footer.php"
?>