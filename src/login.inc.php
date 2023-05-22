<?php include 'userfunction.php'?>
<?php

// isset voor het inloggen
if(isset($_POST["login"]))
{
    $loginname = $_POST['username'];
    $loginpassword = $_POST['wachtwoord'];
}
loginuser($conn, $loginemail, $loginpassword);
?>