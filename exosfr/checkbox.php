<?php

require('../fonctions.php');

if (isset($_GET['fruit'])) {

    $name = $_GET['fruit'];

    foreach ($name as $fruit) {
        echo "Vous avez choisi: " . $fruit . "<br>";
    }
} else {
 
    header("Location: tableaufruits.php");
}
?>