<?php include 'header.php' ?>

<section class="projects">
        <div class="container">
        <h1>registratie: </h1><br>
       
    <table>
             <form method="post" action="../src/klant.inc.php">
            
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="voornaam">datum</label></td>
            <td><input required name="voornaam" type="text" placeholder="vul hier de datum"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
            <tr>
            <td><label for="tussenvoegsel">uren</label></td>
            <td><input name="tussenvoegsel" type="text" placeholder="Vul hier de uren"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="achternaam">taakomschrijving</label></td>
            <td><input required name="achternaam" type="text" placeholder="vul hier de omschrijving "></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="achternaam">klant</label></td>
            <td><input required name="achternaam" type="text" placeholder="vul hier de klant"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="achternaam">medewerker</label></td>
            <td><input required name="achternaam" type="text" placeholder="vul hier de medewerker"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><input class="button" name="maakregistratie" type="submit" value="maak registratie"></td>
        </tr>
             </form>
            </table>
            </div>
        </section>
    <?php include 'footer.php' ?>
