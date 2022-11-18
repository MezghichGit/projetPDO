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


<h3 align="center" style="padding-top:20px">Liste de mes commandes</h3>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Référence commande</th>
      <th scope="col">Date</th>
      <th scope="col">Libelle Produit</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">RefGK#1</th>
      <td>18/11/2022 10:15</td>
      <td>PC HP</td>
      <td>2400</td>
    </tr>
    <tr>
      <th scope="row">RefGK#3</th>
      <td>15/11/2022 10:15</td>
      <td>Smart Phone</td>
      <td>1900</td>
    </tr>

  </tbody>
</table>

</body>

</html>

<?php
?>