<?php include("../src/databasefunctions.php") ?>
<?php include("header.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klachtoverzicht</title>
</head>
<body>
    <div class="overzicht-container">
        <div class="overzicht">
        <table class="klanten-overzicht">
            <tr>
                <th>Voornaam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
                <th>Mobielnummer</th>
                <th>Vastnummer</th>
                <th>Email</th>
                <th>Adres</th>
            </tr>
            <?php   
                $query = "SELECT * FROM klant";
                db_connect();
                $result = db_getData($query);
            
                foreach ($result as $data) {
                    echo "<tr>";
                    echo "<td>" . $data["naam"] . "</td>";
                    echo "<td>" . $data["tussenvoegsel"] . "</td>";
                    echo "<td>" . $data["achternaam"] . "</td>";
                    echo "<td>" . $data["mobielnummer"] . "</td>";
                    echo "<td>" . $data["vastnummer"] . "</td>";
                    echo "<td>" . $data["email"] . "</td>";
                    echo "<td>" . $data["adres"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </div>
    </div>
</body>
</html>
<?php include("footer.php") ?>