<?php
/**
 * User: Teun van Glabbeek
 * Date: 06-04-2020
 * Time: 21:19
 * File: opdracht5.3.php
 */
?>

<?php
include "../Includes/Header.php"
?>

<form action="form_data53.php" method="post">

    <label>Corona enquete:</label><br>
    <hr>
    <label>Wat is je naam:</label><label><input name="First-LastName" type="text"></label<br><br>
    <label>Wat is je leeftijd:</label><label><input name="Age" type="number"></label><br>
    <label>Gemeente:</label>

    <select name="Township">
        <option value="Den Bosch">Den Bosch</option>
        <option value="Tilburg">Tilburg</option>
        <option value="Zaltbommel">Zaltbommel</option>
        <option value="Maasdriel">Maasdriel</option>
    </select><br>

    <label>Aantal inwoners gemeente:</label><label><input name="citizens" type="number"></label><br>
    <label>Ken je mensen die besmet zijn in je woonplaats?</label>
    <label><input name="Question" type="radio" value="Ja">Ja</input></label>
    <label><input name="Question" type="radio" value="Nee">Nee</input></label><br>
    <label>Aantal mensen besmet in je gemeente?*</label><label><input name="infected" type="number"></label><br>
    <input type="submit" name="verzenden" value="verzenden"><br>
    <label>* Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/coronavirus-kaart-van-nederland-per-gemeente">site RIVM</a></label>

</form>
<?php

?>

<?php
include "../Includes/Footer.php"
?>
