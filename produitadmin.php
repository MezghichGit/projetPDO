<?php
session_start();
if ($_SESSION["email"] && $_SESSION["role"]=="admin") {
?>
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
        <a class="nav-link" href="dashboardadmin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produitadmin.php">Créer un produit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="clientsadmin.php">Liste clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Déconnexion</a>
      </li>
      <li class="nav-item" style="margin-left:600px">
        <a class="nav-link">Bonjour <?php echo $_SESSION["email"];?></a>
      </li>
    </ul>
  </div>
</nav>


<h1 align="center">Espace Admin</h1>


<h3 align="center" style="padding-top:20px">Ajouter nouveau produit</h3>

<div class="container">
        <div class="row">
            <div class="col-2"></div> <div class="col-8">
                <form action="addProduct.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Libelle</label>
                        <input type="text" name="libelle" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Prix</label>
                        <input type="text" name="prix" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>

                        <textarea name="description" class="form-control" placeholder="description du produit ici"></textarea>
                  
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="text" name="photo" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div><div class="col-2"></div>
        </div>
    </div>
</body>

</html>

<?php
}
else
{
  header('Location:signin.html');
}
?>