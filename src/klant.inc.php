<?php include 'userfunction.php'?>
<?php include '../public/header.php' ?>
<?php
            $naam = $_POST['voornaam'];
            $achternaam = $_POST['achternaam'];
            $telefoonnummer = $_POST['telefoonnummer'];
            $email = $_POST['email'];
            $adres = $_POST['addres'];
            $postcode = $_POST['postcode'];

            $sql = "INSERT INTO klant (naam, achternaam, telefoonnummer, email, adres, postcode) VALUES ('$naam', '$achternaam', '$telefoonnummer', '$email', '$adres', '$postcode')";
            if (mysqli_query($conn, $sql)) {
                  echo " Klant aangemaakt";
            }
  ?>