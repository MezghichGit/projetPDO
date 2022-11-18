<?php
// Récupération des données du formulaire

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$password = $_POST["password"];
$dateInscription = date("Y-m-d H:i:s");

// Inscription d'un utilisateur
require_once(dirname(__FILE__)."/Config/Connexion.php");
$pdoConnexion = new PDOConnexion();
$pdo = $pdoConnexion->createConnexion();

$sql = "INSERT INTO user (nom,prenom,email,password,role,dateCreationCompte)
        VALUES ('".$nom."', '".$prenom."', '".$email."', '".$password."', 'client','".$dateInscription."')";
$pdo->exec($sql);
header('Location:index.php');

?>