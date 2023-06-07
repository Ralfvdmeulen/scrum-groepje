<?php include 'header.php' ?>

<?php 

?>
<div class="page registreren">
        <div class="container">
            <h1>Inloggen</h1><br>
            <div class="login">
            <table>
               
             <form method="post" action="../src/login.inc.php">
        <tr>
            <td><label for="username">Naam</label></td>
            <td><input name="username" type="text" placeholder="Vul hier uw naam in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
        <tr>
            <td><label for="wachtwoord">Wachtwoord</label></td>
            <td><input name="wachtwoord" type="password" placeholder="Vul hier uw wachtwoord in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
        <tr>
            <td><input name="login" type="submit" value="login"></td>
        </tr>
             </form>
            </table>
        </div>
       
    </div>

<?php include 'footer.php' ?>
