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
            <td><label for="voornaam">Voornaam</label></td>
            <td><input name="voornaam" type="text" placeholder="Vul hier uw voornaam in"></td>
        </tr>
        <tr>
            <td><br></td>
            <tr>
            <td><label for="tussenvoegsel">Tussenvoegsel</label></td>
            <td><input name="tussenvoegsel" type="text" placeholder="Vul hier uw tussenvoegsel in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        </tr>
        <tr>
            <td><label for="achternaam">Achternaam</label></td>
            <td><input name="achternaam" type="text" placeholder="Vul hier uw achternaam in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
        <tr>
            <td><label for="mobielnummer">Mobiel nummer </label></td>
            <td><input name="mobielnummer" type="text" placeholder="Vul hier uw mobielnummer in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="vastnummer">Vast nummer </label></td>
            <td><input name="vastnummer" type="text" placeholder="Vul hier uw vastnummer in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="email">E-mail</label></td>
            <td><input name="email" type="email" placeholder="Vul hier uw email in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="addres">Adres</label></td>
            <td><input name="addres" type="text" placeholder="Vul hier uw addres in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="postcode">Postcode</label></td>
            <td><input name="postcode" type="text" placeholder="vul hier je postcode"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><input class="button" name="voegklanttoe" type="submit" value="Voeg klant toe"></td>
        </tr>
             </form>
            </table>
            </div>
        </section>
    <?php include 'footer.php' ?>
