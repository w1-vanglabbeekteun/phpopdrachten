<?php
/**
 * User: Teun van Glabbeek
 * Date: 01-3-2020
 * Time: 21:32
 * File: opdracht3.2.php
 */
?>

<!DOCTYPE html>
<html lang="nl, eng">
<head>

    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
</head>
<body>
<h2>Uitwerking van <a href="../index.php"> PHP-opdrachten</a></h2>
<div class="box">
    <h1>Taak 1 & 2</h1>
    <?php
    $trafficLightColor = "groen"; // colors: groen, rood en orange
    $ambulanceComing = false; //options: true or false

    if($trafficLightColor == "groen" && $ambulanceComing == false)
    {
        $driveOn = true;
    }
    else
    {
        $driveOn = false;
    }
    if($driveOn == true)
    {
        echo ("<p><span style=\"color:lawngreen;text-align:center;\">U mag doorrijden</span></p>");
    }
    else if($driveOn == false)
    {
        echo ("<p><span style=\"color:red;text-align:center;\">U moet stoppen</span></p>");
    }
    ?>
    <h1>Taak 3</h1>
    <?php

    $currentAge = 17; // own age

    $countryName = "Nederland";

    if($countryName == "België")
    {
        if($currentAge >= 16 && $currentAge <=17)
        {
            echo ("Je mag hier zwakke alchol drinken");
        }
        else if($currentAge >= 18)
        {
            echo("Je mag hier alle alcohol drinken");
        }
    }
    else if(($countryName == "Bulgarije" || $countryName == "Nederland") && $currentAge == 18)
    {
        echo("Je mag hier alle alcohol drinken");
    }

    else if ($countryName == "Zweden"){
        if($currentAge >= 18 && $currentAge <=19)
        {
            echo ("Je mag hier zwakke alchol drinken");
        }
        else if($currentAge >= 20){
            echo("Je mag hier alle alchol drinken");
        }
    }
    else if($currentAge <= 15)
    {
        echo("Je mag nog geen alchol drinken");
    }
    echo ("Je woont in $countryName en bent $currentAge jaar oud");
    ?>
</div>
</body>
</html>