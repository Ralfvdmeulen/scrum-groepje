
<?php include '../config/config.php' ?>
<?php

function userexists($conn, $email)
    {
        $sql = "SELECT * FROM klanten WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("location: ../Public/signup.php?error=statementfailedemail");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s",  $email);
        mysqli_stmt_execute($stmt);

        $resultdata = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultdata))
        {
            return $row;
        }
        else 
        {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }
    

    function loginuser($conn, $email, $pwd)
{
    $uidexists = userexists($conn, $email);

    if ($uidexists === false)
    {
        header("location: ../Public/login.php?error=wrongloginuidexit");
        exit();
    }

    $databasepwd = $uidexists["wachtwoord"];
    
    
    if($pwd == $databasepwd)
    {
        $checkpwd = true;
    }
    else {
        $checkpwd = false;
    }

    if($checkpwd === false)
    {
        header("location: ../public/login.php?error=wronglogin");
        exit();
    }
    else if($checkpwd === true)
    {
        session_start();
        if($uidexists["voornaam"] == "admin"){
            $_SESSION["useradmin"] = "admin";
        }
        else {
            $_SESSION["userid"] = $uidexists["klantid"];
        }
        
        $_SESSION["klantnaam"] = $uidexists["voornaam"];
        header("location: ../Public/index.php");
        exit();
    }
}


?>