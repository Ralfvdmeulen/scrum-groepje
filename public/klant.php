<?php include 'header.php' ?>

<section class="projects">
        <div class="container">
        <h1>selecteer de boot: </h1><br>
       
        
    <table>
             <form method="post" action="../src/klant.inc.php">
        <tr>
            <td><label for="select">arsortement</label></td>
            <td>
            <select name="boot">
        <?php
        $query ="SELECT * FROM boten";
        //echo $sql;
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result))
        {
        echo "<option value='$row[0]'>$row[1]</option>";}?>
        </select>
        </div>
        
    </section>
            </td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="voornaam">Voornaam</label></td>
            <td><input name="voornaam" type="text"  value="<?php echo $_SESSION['klantnaam'];?>"></td>
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
            <td><label for="email">Email</label></td>
            <td><input name="email" type="email" placeholder="vul hier je email"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
        <tr>
            <td><label for="telefoonnummer">telefoonnummer</label></td>
            <td><input name="telefoonnummer" type="text" placeholder="vul hier je telefoonnummer"></td>
    
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
        <tr>
            <td><label for="dagdeel">dagdeel</label></td>
        <td><select id="cars" name="dagdeel">
            
            <option value="ochtend">ochtend</option>
            <option value="middag">middag</option>
            <option value="avond">avond</option>
        </select></td>
        </tr>

        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="drinken">drinken pakket</label></td>
        <td><select id="cars" name="drinken">
            <option value="nee">nee</option>
            <option value="ja">ja</option>
            
        </select></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="eten">eten pakket</label></td>
        <td><select id="cars" name="eten">
            <option value="nee">nee</option>
            <option value="ja">ja</option>
            
        </select></td>
        </tr>
        
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><input class="button" name="reserveer" type="submit" value="reserveer"></td>
        </tr>
             </form>
            </table>