<?php include 'userfunction.php'?>
<?php

// isset voor het inloggen
if(isset($_POST["login"]))
{
    session_start();
    $_SESSION['medewerkersid'] = $medewerker["ID"];
    $loginname = $_POST['username'];
    $loginpassword = $_POST['wachtwoord'];
}
userexists($conn, $loginname, $loginpassword);
