<?php
// reset de session variabelen zodat de user uitlogt 
session_start();
session_unset();
session_destroy();
header("location: ../Public/index.php");
exit();








?>