<?php include 'userfunction.php'?>
<?php include '../config/config.php' ?>
<?php

// isset voor het reserveren
if(isset($_POST["submit"]))
{
        if (isset($_POST['voegklantttoe'])) {
            $naam = $_POST['naam'];
            $achternaam = $_POST['achternaam'];
            $telefoonnummer = $_POST['telefoonnummer'];
            $email = $_POST['email'];
            $adres = $_POST['adres'];
            $postcode = $_POST['postcode'];

            $sql = "INSERT INTO klant (naam, achternaam, telefoonnummer, email, adres, postcode) VALUES ('$naam', '$achternaam', '$telefoonnummer', '$email', '$adres', '$postcode')";

        }
    }
        
//     // $resboot, $resvoornaam, $resachternaam, $resemail, $restelefoonnummer, $resdagdeel, $resdrinken, $reseten 
//    // error handlings geeft aan in de url wat de error is en wordt gebruikt in andere functies checkt ook of hij leeg is
//     if(emptyinputreserveren($resvoornaam, $resachternaam, $resemail, $restelefoonnummer) !== false)
//     {
//     header("location: ../Public/reserveren.php?error=emptyinputreserveren");
//     exit();
//     }
//     reserveer($resboot, $resvoornaam, $resachternaam, $resemail, $restelefoonnummer, $resdagdeel, $resdrinken, $reseten);
// }
// else {
//     header("location: ../Public/reserveren.php");
//     exit();
// }
