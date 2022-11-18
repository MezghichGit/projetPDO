<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="margin: 10px;padding:10px">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Projet GK - PHP </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboardclient.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="commandesclient.php">Liste de mes commandes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Déconnexion</a>
      </li>
    </ul>
  </div>
</nav>


<h1 align="center">Espace Client</h1>


<h3 align="center" style="padding-top:20px">Liste de nos produits</h3>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Libelle</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
      <th scope="col">Disponibilité</th>
      <th scope="col">Commander</th>
    </tr>
  </thead>

  <tbody>
    <?php
        // récupération des produits de la base via PDO
        require_once(dirname(__FILE__)."/Config/Connexion.php");
        $pdoConnexion = new PDOConnexion();
        $pdo = $pdoConnexion->createConnexion();
        $strSQL = "SELECT * FROM produit";
        //execution de la requête et affichage des résultats
        foreach ($pdo->query($strSQL) as $row) {
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><img  width="20%" src="<?php echo $row['photo'];?>" /></td>
                <td><?php echo $row['libelle'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['prix'];?></td>
                <td><?php echo $row['disponibilite'];?></td>
                <td><a href="#" class="btn btn-success">Acheter</a></td>
            </tr>
            
    
    <?php
        }
    ?>

  </tbody>
  
</table>

</body>

</html>

<?php
?>