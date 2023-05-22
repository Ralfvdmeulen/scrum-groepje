<?php include 'header.php' ?>

<section class="projects">
        <div class="container">
        <h1>maak een account een medewerker: </h1><br>
       
    <table>
             <form method="post" action="../src/medewerker.inc.php">
            
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="voornaam">voornaam</label></td>
            <td><input name="voornaammedewerker" type="text" placeholder="vul hier je voornaam"></td>
        </tr>
        <tr>
            <td><br></td>
            <tr>
            <td><label for="tussenvoegsel">tussenvoegsel</label></td>
            <td><input name="tussenvoegselmedewerker" type="text" placeholder="vul hier je tussenvoegsel"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        </tr>
        <tr>
            <td><label for="achternaam">achternaam</label></td>
            <td><input name="achternaammedewerker" type="text" placeholder="vul hier je achternaam"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
        <tr>
            <td><label for="wachtwoord">wachtwoord </label></td>
            <td><input name="wachtwoordmedewerker" type="password" placeholder="vul hier het wachtwoord"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="functie">functie </label></td>
            <td><input name="functiemedewerker" type="text" placeholder="vul hier de functie"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><input class="button" name="voegmedewerkertoe" type="submit" value="voeg medewerker toe"></td>
        </tr>
      
             </form>
            </table>
            </div>
        </section>
    <?php include 'footer.php' ?>
