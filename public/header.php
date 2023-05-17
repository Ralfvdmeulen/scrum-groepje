<?php include '../config/config.php';?>
<?php include '../config/database.php';?>
<?php include '../src/userfunction.php';?>

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
                <li class="nav-item"><a href="index.php" class="nav-link">overzicht</a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>

            </div>
        </nav>
    </header>