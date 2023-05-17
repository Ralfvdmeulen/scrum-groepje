<?php include 'header.php' ?>
<?php include '../config/config.php' ?>

<?php
    if (isset($_POST['submit'])) {
        $naam = $_POST['naam'];
        $achternaam = $_POST['achternaam'];
        $telefoonnummer = $_POST['telefoonnummer'];
        $email = $_POST['email'];
        $adres = $_POST['adres'];
        $postcode = $_POST['postcode'];
    }
?>