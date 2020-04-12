<?php
/**
 * User: Teun van Glabbeek
 * Date: 06-04-2020
 * Time: 21:22
 * File: form_data53.php
 */
?>

<?php
include "../Includes/Header.php"
?>

<table>
    <tr>
        <td>bedrijfsnaam:</td>
        <td><?php echo $_GET["bedrijfsnaam"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>voornamen:</td>
        <td><?php echo $_GET["voornamen"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>achternaam:</td>
        <td><?php echo $_GET["achternaam"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>tellnummer:</td>
        <td><?php echo $_GET["tellnummer"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><?php echo $_GET["E-mail"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>toevoeging:</td>
        <td><?php echo $_GET["toevoeging"]; ?>.<br /></td>
    </tr>
</table>

<?php
include "../Includes/Footer.php"
?>