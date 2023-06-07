<?php include_once("header.php");
include_once("../src/databasefunctions.php");
$query = "SELECT * FROM `registratie`;";
$result = db_getData($query) ?>
<link rel="stylesheet" href="css/style.css">
<div class="overzicht-container">
    <div class="overzicht">
        <table class="klanten-overzicht">
            <tr>
                <th>Datum</th>
                <th>Uren</th>
                <th>Taakomschrijving</th>
                <th>Klant</th>
                <th>Medewerker  </th>
            </tr>
            <?php {
                while ($registraties = $result->fetch_assoc()) {
            ?>
                    <?php
                    echo "<tr>";
                    echo "<td>" . $registraties['datumtijd'] . "</td>";
                    echo "<td>" . $registraties['uren'] . "</td>";
                    echo "<td>" . $registraties['taakomschrijving'] . "</td>";
                    echo "<td>" . $registraties['klant'] . "</td>";
                    echo "<td>" . $registraties['medewerker'] . "</td>";
                    echo "</tr>";
                    ?>
            <?php
                }
            } ?>
        </table>
    </div>
</div>
</div>

<footer class="medewerkerfooter">
    <?php include_once("footer.php"); ?>
</footer>