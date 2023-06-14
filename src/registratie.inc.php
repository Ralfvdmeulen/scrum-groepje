<?php include 'userfunction.php'?>
<?php
            $datum = $_POST['datum'];
            $uren = $_POST['uren'];
            $taakomschrijving = $_POST['taakomschrijving'];
            $klant = $_POST['klant'];
            $medewerker = $_POST['medewerker'];
            

            $sql = "INSERT INTO klant (naam, tussenvoegsel ,achternaam, mobielnummer, vastnummer , email, adres, postcode) VALUES ('$naam','$tussenvoegsel', '$achternaam', '$mobielnummer', '$vastnummer', '$email', '$adres', '$postcode')";
            if (mysqli_query($conn, $sql)) {
                  echo " klant aangemaakt";
                  header("location: ../Public/klantoverzicht.php");
            }
  ?>