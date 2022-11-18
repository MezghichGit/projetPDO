<?php

session_start();
if ($_SESSION["email"] && $_SESSION["role"]=="client") {
// Récupération des données du formulaire

$idProduit= $_GET["idProduit"];
$idUser= $_SESSION["id"];
$prix= $_GET["prix"];
$dateCommande = date("Y-m-d H:i:s");


// Inscription d'un utilisateur
require_once(dirname(__FILE__)."/Config/Connexion.php");
$pdoConnexion = new PDOConnexion();
$pdo = $pdoConnexion->createConnexion();

$sql = "INSERT INTO commande (date,prixCommande,idUser,idProduit)
        VALUES ('".$dateCommande."', '".$prix."', '".$idUser."', '".$idProduit."')";
$pdo->exec($sql);

//mettre à jour la valeur de disponibilite
$sql = "update produit set disponibilite=0 where id='".$idProduit."'";
$pdo->exec($sql);




/// Stocker dans le fichier commandes.xml

// si le fichier n'existe pas, on le crée

if (!file_exists("commandes.xml")) {
    $chxml="<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<commandes>\n<commande>\n<date>$dateCommande</date>\n<prixCommande>$prix</prixCommande>\n<idProduit>$idProduit</idProduit>\n<idUser>$idUser</idUser>\n</commande>\n</commandes>";
   
  } else {
    // sinon, il faut ajouter à la fin du fichier
    try {
        $xml=simplexml_load_file("commandes.xml");
        $chxml = $xml->asXML();
        $chxml = str_replace("</commandes>","",$chxml);
        $chxml=$chxml."<commande>\n<date>$dateCommande</date>\n<prixCommande>$prix</prixCommande>\n<idProduit>$idProduit</idProduit>\n<idUser>$idUser</idUser>\n</commande>\n</commandes>";

        //var_dump($xml);
    } catch(Throwable $e) {
        echo $e->getMessage();
    }

}
$verif=file_put_contents("commandes.xml", $chxml);

///
header('Location:dashboardclient.php');
}
else{
    header('Location:index.php');
    exit();
}


?>