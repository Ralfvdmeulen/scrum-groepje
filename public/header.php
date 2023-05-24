

<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scrumproject groep 1</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <header>
        <nav class="navbar">
        
            <ul class="nav-menu">
            <?php
                      // als de user ingelogt is wordt er een sessie aangemaakt die dan de header verandert

            if(isset($_SESSION["medewerker"]))
            {
                echo '<li class="nav-item"><a href="index.php" class="nav-link">home</a></li>';
                echo '<li class="nav-item"><a href="registratie.php" class="nav-link">registratie</a></li>';
                echo '<li class="nav-item"><a href="registratieoverzicht.php" class="nav-link">registratie overzicht</a></li>';
                echo '<li class="nav-item"><a href="../src/logout.inc.php" class="nav-link">logout</a></li>';
            }
            else if (isset($_SESSION["eigenaar"])) 
            {
                echo '<li class="nav-item"><a href="index.php" class="nav-link">home</a></li>';
                echo '<li class="nav-item"><a href="registratie.php" class="nav-link">registratie</a></li>';
                echo '<li class="nav-item"><a href="registratieoverzicht.php" class="nav-link">registratie overzicht</a></li>';
                echo '<li class="nav-item"><a href="klant.php" class="nav-link">klanten aanmaken</a></li>';
                echo '<li class="nav-item"><a href="klantoverzicht.php" class="nav-link">klanten overzicht</a></li>';
                echo '<li class="nav-item"><a href="medewerker.php" class="nav-link">medewerkers aanmaken</a></li>';
                echo '<li class="nav-item"><a href="medewerkeroverzicht.php" class="nav-link">medewerker overzicht</a></li>';
                echo '<li class="nav-item"><a href="../src/logout.inc.php" class="nav-link">logout</a></li>';
            }
            else {

            echo '<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>';  
            }
            ?>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>

            </div>
        </nav>
    </header>