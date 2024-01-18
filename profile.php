<?php
// Database settings

require("fonctions.php");


$lid = $_GET['id'];
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
function getAllUsers()
{

global $pdo; 
$stmt = $pdo->prepare("SELECT * FROM user");
$stmt->execute();
$res = $stmt->fetchAll();

// debug($res);

foreach ($res as $row) {
  echo "<h1>" . $row['nom'] . " " . $row['prenom'] . "</h1>";
  echo "<p><i>" . $row['email'] . "</i></p>";
  echo $row['id'] . '';
  echo "<hr>";
}
}


function getOneUser($id)
{

  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM user WHERE id = ?");
  $stmt->execute([$id]);
  $row = $stmt->fetch();
  // debug($row);
  echo "<h1>" . $row['nom'] . " " . $row['prenom'] . "</h1>";
  echo "<p><i>" . $row['email'] . "</i></p>";
  echo "<hr>";
}

// getAllUsers();
getOneUser($lid);
?>