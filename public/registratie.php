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
            <td><label for="datum">datum</label></td>
            <td><input required name="datum" type="date" placeholder="vul hier de datum"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
            <tr>
            <td><label for="uren">uren</label></td>
            <td><input name="uren" type="text" placeholder="Vul hier de uren"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="taakomschrijving">taakomschrijving</label></td>
            <td><input required name="taakomschrijving" type="text" placeholder="vul hier de omschrijving "></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="klant">klant</label></td>
            <td><input required name="klant" type="text" placeholder="vul hier de klant"></td>
        </tr>
        <tr>
            <td><br></td>
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
