<?php

session_start();
if ($_SESSION["email"] && $_SESSION["role"]=="admin") {
// Récupération des données du formulaire

$libelle = $_POST["libelle"];
$prix = $_POST["prix"];
$description = $_POST["description"];
$photo = $_POST["photo"];
// Inscription d'un utilisateur
require_once(dirname(__FILE__)."/Config/Connexion.php");
$pdoConnexion = new PDOConnexion();
$pdo = $pdoConnexion->createConnexion();

$sql = "INSERT INTO produit (libelle,prix,description,disponibilite,photo)
        VALUES ('".$libelle."', '".$prix."', '".$description."', '1','".$photo."')";
$pdo->exec($sql);

/// Stocker dans le fichier historique.log
$id = fopen("historique.log", "a");
if ($id==false) {
    die("Erreur lors douverture de fichier");
} else {
    flock($id, LOCK_EX);
    //fwrite($id, "[$date] Une nouvelle inscription : $prenom $nom - $email"."\n");
    fwrite($id, "[".date("Y-m-d H:i:s")."] Ajout nouveau produit par ** ". $_SESSION["email"]." Détails Produit : $libelle - $prix\n");
    flock($id, LOCK_UN);

    $r=fclose($id);
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