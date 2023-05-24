<?php include_once("header.php");
include_once("../src/databasefunctions.php");
$query = "SELECT * FROM `medewerker`;";
$result = db_getData($query)?>
<link rel="stylesheet" href="css/styleMedewerkers.css">
<div class="containerMedewerker">
<table>
    <tr>
        <th>Naam</th>
        <th>Achternaam</th>
        <th>Wachtwoord</th>
        <th>Functie</th>
    </tr>
<?php
{
    while($medewerkers = $result->fetch_assoc()) {
        ?>
            <?php
                     echo "<tr>";
                     echo "<td>" . $medewerkers['naam'] . "</td>";
                     echo "<td>" . $medewerkers['achternaam'] . "</td>";
                     echo "<td>" . $medewerkers['wachtwoord'] . "</td>";
                     echo "<td>" . $medewerkers['functie'] . "</td>";
                     echo "</tr>";
                     ?>
        <?php
    }
}?>
</table>
</div>
<footer class="medewerkerfooter">
<?php include_once("footer.php");?>
</footer>
