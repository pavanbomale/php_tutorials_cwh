<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<form action="/cwhphp/Forms/forms.php" method="post">

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  
  
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea  class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
  </div>
  
  <button type="submit" class="btn btn-danger">Submit</button>

</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>





<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = $_POST['email'];
  $name = $_POST['name'];
  $desc = $_POST['description'];
  
  $connection = mysqli_connect("localhost", "root", "", "cwhforms");
  
if (!$connection){
  die("connectION FAILED to the database" . mysqli_connect_error());
}
else{

  
  $sql_query = "INSERT INTO `userdata` (`name`, `email`, `description`) VALUES ('$name', '$email', '$desc')";
  $execute_query = mysqli_query($connection, $sql_query);
  
  
  if($execute_query){
    echo '<div class="alert alert-warning alert-dismissible fade show " role="alert">
    <strong>Success!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  else{
    echo '<div class="alert alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
}
}
?>
