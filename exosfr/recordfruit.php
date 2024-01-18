<?php


debug($_POST); // variable PHP prédéfinie qui récupère les champs input du formulaire appelant.


$fh = fopen("fruits.txt","a+");
fwrite($fh,$_POST['fruit']."\n");
fclose($fh);



/* 
smith; jon; 6
durand; pol; 77
*/
?>
