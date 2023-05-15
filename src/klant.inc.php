<?php include 'userfunction.php'?>
<?php

// isset voor het reserveren
if(isset($_POST["reserveer"]))
{
    $resboot = $_POST['boot'];
    $resvoornaam = $_POST['voornaam'];
    $resachternaam = $_POST['achternaam'];
    $resemail = $_POST['email'];
    $restelefoonnummer = $_POST['telefoonnummer'];
    $resdagdeel = $_POST['dagdeel'];
    $resdrinken = $_POST['drinken'];
    $reseten = $_POST['eten'];

    // $resboot, $resvoornaam, $resachternaam, $resemail, $restelefoonnummer, $resdagdeel, $resdrinken, $reseten 
   // error handlings geeft aan in de url wat de error is en wordt gebruikt in andere functies checkt ook of hij leeg is
    if(emptyinputreserveren($resvoornaam, $resachternaam, $resemail, $restelefoonnummer) !== false)
    {
    header("location: ../Public/reserveren.php?error=emptyinputreserveren");
    exit();
    }
    reserveer($resboot, $resvoornaam, $resachternaam, $resemail, $restelefoonnummer, $resdagdeel, $resdrinken, $reseten);
}
else {
    header("location: ../Public/reserveren.php");
    exit();
}
