<?php include 'header.php' ?>

<section class="projects">
        <div class="container">
        <h1>registratie: </h1><br>
       
    <table>
             <form method="post" action="../src/registratie.inc.php">
            
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="datum">Datum</label></td>
            <td><input required name="datum" type="date" placeholder="Vul hier de datum in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
            <tr>
            <td><label for="uren">Uren</label></td>
            <td><input name="uren" type="text" placeholder="Vul hier de uren in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="taakomschrijving">Taakomschrijving</label></td>
            <td><input required name="taakomschrijving" type="text" placeholder="Vul hier de omschrijving in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="klant">Klant</label></td>
            <td><input required name="klant" type="text" placeholder="Vul hier de klant in"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><input class="button" name="maakregistratie" type="submit" value="Maak registratie aan"></td>
        </tr>
             </form>
            </table>
            </div>
        </section>
    <?php include 'footer.php' ?>
