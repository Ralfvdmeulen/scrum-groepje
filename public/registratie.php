<?php include 'header.php';
include_once("../src/databasefunctions.php");
$query = "SELECT * FROM `klant`;";
$result = db_getData($query) ?>

<section class="projects">
    <div class="container">

        <table class="registratie-overzicht" id="klantSelect">
            <tr>
                <th>Naam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
            </tr>
            <?php {
                while ($klanten = $result->fetch_assoc()) {
                    ?>
                    <?php
                    echo "<tr class=tr-click >";
                    echo "<td>" . $klanten['naam'] . "</td>";
                    echo "<td>" . $klanten['tussenvoegsel'] . "</td>";
                    echo "<td>" . $klanten['achternaam'] . "</td>";
                    echo "</tr> ";
                    ?>
                    <?php
                }
            } ?>
        </table>
        <div id="registratieForm" class="hide">
            <h1>registratie: </h1><br>

            <table>
                <form method="post" action="../src/registratie.inc.php">

                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><label for="datum">Datum</label></td>
                        <td><input required name="datum" type="date" placeholder="vul hier de datum"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><label for="uren">Uren</label></td>
                        <td><input name="uren" type="text" placeholder="Vul hier de uren"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><label for="taakomschrijving">Taakomschrijving</label></td>
                        <td><input required name="taakomschrijving" type="text" placeholder="vul hier de omschrijving ">
                        </td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><label for="klant">Klant</label></td>
                        <td><input id='klantIn' required name="klant" type="text" placeholder="vul hier de klant" readonly></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><label for="medewerker">Medewerker</label></td>
                        <td><input required name="medewerker" type="text" placeholder="vul hier de medewerker"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><input class="button" name="maakregistratie" type="submit" value="maak registratie">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
</section>
<script src="../public/js/registratie.js"></script>
<?php include 'footer.php' ?>