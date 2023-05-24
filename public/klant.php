<?php include 'header.php' ?>

<section class="projects">
        <div class="container">
        <h1>Voeg een Klant toe: </h1><br>
       
    <table>
             <form method="post" action="../src/klant.inc.php">
            
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="voornaam">voornaam</label></td>
            <td><input required name="voornaam" type="text" placeholder="vul hier je voornaam"></td>
        </tr>
        <tr>
            <td><br></td>
            <tr>
            <td><label for="tussenvoegsel">tussenvoegsel</label></td>
            <td><input name="tussenvoegsel" type="text" placeholder="vul hier je tussenvoegsel"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        </tr>
        <tr>
            <td><label for="achternaam">achternaam</label></td>
            <td><input required name="achternaam" type="text" placeholder="vul hier je achternaam"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
        <tr>
            <td><label for="mobielnummer">mobielnummer </label></td>
            <td><input name="mobielnummer" type="text" placeholder="vul hier je mobielnummer"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="vastnummer">vastnummer </label></td>
            <td><input name="vastnummer" type="text" placeholder="vul hier je vastnummer"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="email">email</label></td>
            <td><input required name="email" type="email" placeholder="vul hier je email"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="addres">addres</label></td>
            <td><input required name="addres" type="text" placeholder="vul hier je addres"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="postcode">postcode</label></td>
            <td><input required name="postcode" type="text" placeholder="vul hier je postcode"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><input class="button" name="voegklanttoe" type="submit" value="voeg klant toe"></td>
        </tr>
             </form>
            </table>
            </div>
        </section>
    <?php include 'footer.php' ?>
