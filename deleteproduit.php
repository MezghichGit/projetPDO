<?php

session_start();
if ($_SESSION["email"] && $_SESSION["role"]=="admin") {
// Récupération des données du formulaire

$idproduit = $_GET["id"];

// Inscription d'un utilisateur
require_once(dirname(__FILE__)."/Config/Connexion.php");
$pdoConnexion = new PDOConnexion();
$pdo = $pdoConnexion->createConnexion();

$sql = "delete from produit where id='".$idproduit."'";
$pdo->exec($sql);

/// Stocker dans le fichier historique.log
$idfile = fopen("historique.log", "a");
if ($idfile==false) {
    die("Erreur lors douverture de fichier");
} else {
    flock($idfile, LOCK_EX);
    //fwrite($id, "[$date] Une nouvelle inscription : $prenom $nom - $email"."\n");
    fwrite($idfile, "[".date("Y-m-d H:i:s")."] Suppression produit par ** ". $_SESSION["email"]." Détails ID Produit : $idproduit\n");
    flock($idfile, LOCK_UN);

    $r=fclose($idfile);
    if ($r==false) {
        die("Erreur lors de la fermeture du fichier");
    }
}
///
header('Location:dashboardadmin.php');
}
else{
    header('Location:index.php');
    exit();
}


?>