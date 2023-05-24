<?php include '../public/header.php' ?>
<?php include 'userfunction.php'?>
<?php
            $naam = $_POST['voornaammedewerker'];
            $tussenvoegsel = $_POST['tussenvoegselmedewerker'];
            $achternaam = $_POST['achternaammedewerker'];
            $wachtwoord = $_POST['wachtwoordmedewerker'];
            $functie = $_POST['functiemedewerker'];
         

            $sql = "INSERT INTO medewerker (naam, tussenvoegsel , achternaam, wachtwoord, functie)
             VALUES ('$naam', '$tussenvoegsel', '$achternaam', '$wachtwoord', '$functie')";
            if (mysqli_query($conn, $sql)) {
                  header('location: ../public/medewerkeroverzicht.php');
            }
  ?>