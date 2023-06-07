
<?php include 'databasefunctions.php' ?>
<?php
$conn = db_connect();
function userexists($conn, $naam, $pass)
    {
        $mysqli = db_connect();
        $medewerkers = $mysqli->query("SELECT * FROM medewerker");
     
      

      if (mysqli_num_rows($medewerkers) > 0)
      {
         while($medewerker = mysqli_fetch_assoc($medewerkers))
          {
            if($naam == $medewerker["naam"] & $pass == $medewerker["wachtwoord"])
            {
                echo "inlog data is hetzelfde";
                header("location: ../Public/index.php");
                break;
            }
          }
        session_start();
        if($medewerker["functie"] == "medewerker"){
            $_SESSION["medewerker"] = "medewerker";
        }
        else if($medewerker["functie"] == "eigenaar"){
            $_SESSION["eigenaar"] = "eigenaar";
        }
        header("location: ../Public/index.php");
        exit();
          } else {
          echo "0 results";
     }
    }

    if (isset($_POST['del-knop']))
    {
       del_Klant($_POST['del-knop']);
       header("location: ../Public/klantoverzicht.php");
    }

    if (isset($_POST['del-knop-medewerker']))
    {
       del_Medewerker($_POST['del-knop-medewerker']);
       header("location: ../Public/medewerkeroverzicht.php");
    }

//     function loginuser($conn, $name, $pwd)
// {
//     $uidexists = userexists($conn, $name, $pwd);

//     if ($uidexists === false)
//     {
//         header("location: ../Public/login.php?error=wrongloginuidexit");
        
//         exit();
//     }

//     $databasepwd = $uidexists["wachtwoord"];
    
    
//     if($pwd == $databasepwd)
//     {
//         $checkpwd = true;
//     }
//     else {
//         $checkpwd = false;
//     }

//     if($checkpwd === false)
//     {
//         header("location: ../public/login.php?error=wronglogin");
//         exit();
//     }
//     else if($checkpwd === true)
//     {
//         session_start();
//         if($uidexists["voornaam"] == "admin"){
//             $_SESSION["useradmin"] = "admin";
//         }
//         else {
//             $_SESSION["userid"] = $uidexists["klantid"];
//         }
        
//         $_SESSION["klantnaam"] = $uidexists["voornaam"];
//         header("location: ../Public/index.php");
//         exit();
//     }
// }


?>