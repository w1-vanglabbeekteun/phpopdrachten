<?php
/**
 * User: Teun van Glabbeek
 * Date: 22-03-2020
 * Time: 20:49
 * File: opdracht5.1.php
 */

include "../Includes/Header.php";
?>
    <table>
        <tr>
            <td>Bedrijfsnaam:</td>
            <td><?php echo $_GET['company']; ?></td>
        </tr>
        <tr>
            <td>Voornaam:</td>
            <td><?php echo $_GET['firstname']; ?></td>
        </tr>
        <tr>
            <td>Achternaam:</td>
            <td><?php echo $_GET['lastname']; ?></td>
        </tr>
        <tr>
            <td>Telefoon:</td>
            <td><?php echo $_GET['number']; ?></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><?php echo $_GET['mail']; ?></td>
        </tr>
        <tr>
            <td>Bericht:</td>
            <td><?php echo $_GET['message']; ?></td>
        </tr>
    </table>

<?php
include "../Includes/Footer.php";
?>