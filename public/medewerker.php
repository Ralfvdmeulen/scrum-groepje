<?php include 'header.php' ?>

<section class="projects">
        <div class="container">
        <h1>Maak een account voor een medewerker: </h1><br>
       
    <table>
             <form method="post" action="../src/medewerker.inc.php">
            
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="voornaam">Voornaam</label></td>
            <td><input required name="voornaammedewerker" type="text" placeholder="Vul hier de voornaam in"></td>
        </tr>
        <tr>
            <td><br></td>
            <tr>
            <td><label for="tussenvoegsel">Tussenvoegsel</label></td>
            <td><input name="tussenvoegselmedewerker" type="text" placeholder="Vul hier het tussenvoegsel in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        </tr>
        <tr>
            <td><label for="achternaam">Achternaam</label></td>
            <td><input required name="achternaammedewerker" type="text" placeholder="Vul hier de achternaam in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
        <tr>
            <td><label for="wachtwoord">Wachtwoord </label></td>
            <td><input required name="wachtwoordmedewerker" type="password" placeholder="Vul hier het wachtwoord in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="functie">Functie </label></td>
            <td><select required name="functie" id="">
                <option name="eigenaar">Eigenaar</option>
                <option name="medewerker">Medewerker</option>
            </select></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><input class="button" name="voegmedewerkertoe" type="submit" value="Voeg medewerker toe"></td>
        </tr>
      
             </form>
            </table>
            </div>
        </section>
    <?php include 'footer.php' ?>
