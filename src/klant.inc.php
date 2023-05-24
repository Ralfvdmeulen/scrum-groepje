<?php include 'userfunction.php'?>
<?php
            $naam = $_POST['voornaam'];
            $tussenvoegsel = $_POST['tussenvoegsel'];
            $achternaam = $_POST['achternaam'];
            $mobielnummer = $_POST['mobielnummer'];
            $vastnummer = $_POST['vastnummer'];
            $email = $_POST['email'];
            $adres = $_POST['addres'];
            $postcode = $_POST['postcode'];

            $sql = "INSERT INTO klant (naam, tussenvoegsel ,achternaam, mobielnummer, vastnummer , email, adres, postcode) VALUES ('$naam','$tussenvoegsel', '$achternaam', '$mobielnummer', '$vastnummer', '$email', '$adres', '$postcode')";
            if (mysqli_query($conn, $sql)) {
                  echo " klant aangemaakt";
                  header("location: ../Public/klantoverzicht.php");
            }
  ?>