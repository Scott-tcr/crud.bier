<<<<<<< HEAD
<?php
// auteur: Vul hier je naam in
// functie: verwijder een bier op basis van de id
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['id'])){

    // test of insert gelukt is
    if(deleteRecord($_GET['id']) == true){
        echo '<script>alert("Fietscode: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('index.php'); </script>";
    } else {
        echo '<script>alert("Fiets is NIET verwijderd")</script>';
    }
}
?>

=======
<?php
// auteur: Vul hier je naam in
// functie: verwijder een bier op basis van de id
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['id'])){

    // test of insert gelukt is
    if(deleteRecord($_GET['id']) == true){
        echo '<script>alert("Fietscode: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('index.php'); </script>";
    } else {
        echo '<script>alert("Fiets is NIET verwijderd")</script>';
    }
}
?>

>>>>>>> 8616bbad088c16b49022f6e03f95e8a6b4c44169
