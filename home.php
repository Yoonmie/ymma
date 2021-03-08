<!DOCTYPE html>
<?php
session_start();
if($_SESSION['login']==null)
{
  header("Location: login.php");
}
else {
  if(isset($_POST['btn-logout'])) {
    session_destroy();
    header("Location: login.php");
  }
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Home Page</title>
</head>
<body>
<form action="home.php" method="post">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="logout" name="btn-logout">Log Out</button>
    </form>
  </div>
</nav>
<div class="main">
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-4">Hello, world!</h1>
      <p>Welcome to Bootstrap!  Here you go....</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
  </div>

<div class="container col-lg-8 col-sm-11">
  <div class="row">
  <div class="card col-5 p-0 mb-3">
  <div class="card-header bg-secondary"> Featured </div>
  <div class="card-body bg-light">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
  </div>
  <div class="card col-5 p-0 offset-2 mb-3">
  <div class="card-header bg-secondary"> Featured </div>
  <div class="card-body bg-light">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
  </div>
  <div class="card col-5 p-0 mb-3">
  <div class="card-header bg-secondary"> Featured </div>
  <div class="card-body bg-light">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
  </div>
  <div class="card col-5 p-0 offset-2 mb-3 ">
  <div class="card-header bg-secondary"> Featured </div>
  <div class="card-body bg-light">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
  </div>

  </div>
  </div>
</div>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>
