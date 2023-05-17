<?php include 'header.php' ?>

<section class="projects">
        <div class="container">
        <h1>selecteer de boot: </h1><br>
       
        </section>
    <table>
             <form method="post" action="../src/klant.inc.php" 
    
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="voornaam">voornaam</label></td>
            <td><input name="voornaam" type="text" placeholder="vul hier je voornaam"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="achternaam">achternaam</label></td>
            <td><input name="achternaam" type="text" placeholder="vul hier je achternaam"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
        <tr>
            <td><label for="telefoonnummer">telefoonnummer </label></td>
            <td><input name="telefoonnummer" type="text" placeholder="vul hier je telefoonnummer"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="email">email</label></td>
            <td><input name="email" type="email" placeholder="vul hier je email"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="addres">addres</label></td>
            <td><input name="addres" type="text" placeholder="vul hier je addres"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="postcode">postcode</label></td>
            <td><input name="postcode" type="text" placeholder="vul hier je postcode"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><input class="button" name="voegklanttoe" type="submit" value="voegklanttoe"></td>
        </tr>
             </form>
            </table>
    <?php include 'footer.php' ?>
