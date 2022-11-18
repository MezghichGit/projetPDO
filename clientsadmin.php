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
        <a class="nav-link" href="creerproduit.php">Créer un produit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="clientsadmin.php">Liste clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Déconnexion</a>
      </li>
    </ul>
  </div>
</nav>


<h1 align="center">Espace Admin</h1>


<h3 align="center" style="padding-top:20px">Liste des client inscrits</h3>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Role</th>
      <th scope="col">Date création compte</th>
      <th scope="col">Détails</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mezghich</td>
      <td>Mohamed Amine</td>
      <td>amine.mezghich@gmail.com</td>
      <td>123456</td>
      <td>Admin</td>
      <td>18/11/2022 11:50</td>
      <td><a href="#" class="btn btn-primary">Détails</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Toto</td>
      <td>Amine</td>
      <td>ma.mezghich@gmail.com</td>
      <td>22334455</td>
      <td>Client</td>
      <td>10/11/2022 10:50</td>
      <td><a href="#" class="btn btn-primary">Détails</a></td>
    </tr>

  </tbody>
</table>

</body>

</html>

<?php
?>