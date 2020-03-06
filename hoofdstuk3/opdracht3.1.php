<?php
/**
 * User: Teun van Glabbeek
 * Date: 1-3-2020
 * Time: 18:56
 * File: opdracht3.1.php
 */
?>

<!DOCTYPE html>

<html lang="nl">
<head>
    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="CSS/style.css" type="text/css" rel="stylesheet">
</head>

<body>
<h2>Uitwerking van <a href="../index.php"> PHP-opdrachten</a></h2>
<div class="box">
    <?php
    $evenement = "Elfstedentocht";
    $fries = "Alvestêdetocht";
    $km = "200";
    $schaatstocht = "schaatstocht";
    $natuurijs = "natuurijs";
    $kvdfes = "Koninklijke Vereniging De Friesche Elf Steden";
    $provincie = "Leeuwarden";
    $stad = "Friesland";
    $num = "15";
    $jaar = "1909";
    $verhaal = "De $evenement (Fries: $fries) is een $km
                kilometer lange $schaatstocht over $natuurijs die wordt
                georganiseerd door de $kvdfes. $provincie, de hoofdstad van $stad, is start- en
                aankomstplaats. De $evenement is inmiddels $num maal
                verreden en werd voor het eerst in $jaar gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("$verhaal");
    $verhaal2 = "De " . $evenement .  " (Fries: " . $fries . ") is een " . $km . " kilometer lange " . $num . " over " . $natuurijs . " die wordt
                georganiseerd door de " . $kvdfes .". " . $provincie . ",  de hoofdstad van " . $stad . ",  is start- en
                aankomstplaats. De " . $evenement . " is inmiddels " . $num . " maal
                verreden en werd voor het eerst in " . $jaar . " gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("$verhaal2");
    ?>
</div>
</body>
</html>