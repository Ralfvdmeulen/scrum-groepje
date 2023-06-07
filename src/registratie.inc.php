<?php include 'userfunction.php'?>
<?php
            $datum = $_POST['datum'];
            $uren = $_POST['uren'];
            $taakomschrijving = $_POST['taakomschrijving'];
            $klant = $_POST['klant'];
            $medewerker = $_POST['medewerker'];

            $sql = "INSERT INTO `registratie` (`datumtijd`, `uren`, `taakomschrijving`, `klant`, `medewerker`) VALUES ('$datum', '$uren', '$taakomschrijving', '$klant', '$medewerker');";
  ?>