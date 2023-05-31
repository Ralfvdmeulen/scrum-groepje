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

            // Invoersels naar hoofdletters
            $naam = ucfirst($naam); 
            $achternaam = ucfirst($achternaam);
            $adres = ucfirst($adres);
      	$postcode = $_POST['postcode'];
            $letters = substr($postcode, -2); // Krijgt de laatste 2 letters van de postcode
            $letters = strtoupper($letters); // Maakt de letters hoofdletters
            $postcode = substr_replace($postcode, $letters, -2); // herplaatst de letters naar Hoofdletters

            $sql = "INSERT INTO klant (naam, tussenvoegsel ,achternaam, mobielnummer, vastnummer , email, adres, postcode) VALUES ('$naam','$tussenvoegsel', '$achternaam', '$mobielnummer', '$vastnummer', '$email', '$adres', '$postcode')";
            if (mysqli_query($conn, $sql)) {
                  echo " klant aangemaakt";
                  header("location: ../Public/klantoverzicht.php");
            }
  ?>