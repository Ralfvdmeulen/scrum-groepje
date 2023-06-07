<?php
include_once("header.php");
include_once("../src/databasefunctions.php");

$query = "SELECT * FROM `klant`;";
$result = db_getData($query);
?>

<link rel="stylesheet" href="./css/style.css">
<div class="overzicht-container">
    <div class="overzicht">
        <table class="klanten-overzicht">
            <tr>
                <th>Naam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
                <th>Mobiel nummer</th>
                <th>Vast nummer</th>
                <th>Email</th>
                <th>Adres</th>
                <th>Postcode</th>
            </tr>
            <?php
            while ($klanten = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $klanten['naam'] . "</td>";
                echo "<td>" . $klanten['tussenvoegsel'] . "</td>";
                echo "<td>" . $klanten['achternaam'] . "</td>";
                echo "<td>" . $klanten['mobielnummer'] . "</td>";
                echo "<td>" . $klanten['vastnummer'] . "</td>";
                echo "<td>" . $klanten['email'] . "</td>";
                echo "<td>" . $klanten['adres'] . "</td>";
                echo "<td>" . $klanten['postcode'] . "</td>";
                echo "<td>
                        <form class='del-form' method='POST' action='../src/userfunction.php'>
                            <input class=del-knop-input name='del-knop' type='submit' value='".$klanten['ID']."'>
                        </form>
                    </td>";
                echo "</tr> ";
            }
            ?>
        </table>
    </div>
</div>
<script src="../public/js/jquery-3.6.3.min.js"></script>
<script src="../public/js/jquery.js"></script>
<?php include_once("footer.php"); ?>