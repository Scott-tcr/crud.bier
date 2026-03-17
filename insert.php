<?php
    // functie: formulier en database insert fiets
    // auteur: Vul hier je naam in

    echo "<h1>Insert Bieren</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertRecord($_POST) == true){
            echo "<script>alert('bier is toegevoegd')</script>";
        } else {
            echo '<script>alert("bier is WEL toegevoegd")</script>';
        }
    }



    
?>
<html>
    <body>
        <form method="post">

        <label for="biercode">Biercode:</label>
        <input type="text" id="biercode" name="biercode" required><br>

        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="soort">Soort:</label>
        <input type="text" id="soort" name="soort" required><br>

        <label for="stijl">Stijl:</label>
        <input type="text" id="stijl" name="stijl" required><br>

        <label for="alcohol">Alcohol:</label>
        <input type="number" step="0.1" id="alcohol" name="alcohol" required><br>

        <label for="brouwcode">Brouwcode:</label>
        <?php
$brouwcodes = getBrouwcodes();
?>

<label for="brouwcode">Brouwcode:</label>
<select id="brouwcode" name="brouwcode" required>
    <option value="">-- Kies een brouwcode --</option>

    <?php
    foreach($brouwcodes as $row){
        echo "<option value='".$row['brouwcode']."'>".$row['brouwcode']."</option>";
    }
    ?>

</select><br>
        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href="index.php">Home</a>
    </body>
</html>