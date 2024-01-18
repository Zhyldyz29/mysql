<?php
// Database settings

require("fonctions.php");

$db = "essai";
$dbhost = "127.0.0.1";
$dbport = 3306;
$dbuser = "root";
$dbpasswd = "";

$pdo = new PDO(
    "mysql:host=127.0.0.1;dbname=" . $db . ";charset=UTF8",
    $dbuser,
    $dbpasswd,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
function getAllUser()
{

    global $pdo;
    $stmt = $pdo->prepare("SELECT  nom, prenom, id  FROM user");
    $stmt->execute();
    $res = $stmt->fetchAll();

    // debug($res);
    echo "<ul>";
    foreach ($res as $row) { ?>
        <li> <a href=profile.php?id=<?= $row['id'] ?>>
                <?= $row['id'] ?>
                <?= $row['nom'] ?>
                <?= $row['prenom'] ?></a></li>



    <?php }
    echo "</ul>";
}



getAllUser();

?>