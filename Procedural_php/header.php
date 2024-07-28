<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-transparent">
  <div class="container-fluid">
    <a class="navbar-brand text-danger fs-3" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto px-10 mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active   text-light fs-5" aria-current="page" href="#">Home</a>
        </li>
        <?php
        if (isset($_SESSION["userid"])) {
            echo "<li><a class='nav-link active fs-5  text-light' href='profile.php' class='right'>Profile</a></li>";
            echo "<li><a href='includes/logout_inc.php  text-light' class='right nav-link active fs-5'>Logout</a></li>";
        } else {
            echo "<a href='signup.php' class='left nav-link active fs-5  text-light'>Signup</a>";
            echo "<a href='login.php' class='left nav-link active fs-5  text-light'>Login</a>";
        }
        ?>
       
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5  text-light" aria-disabled="true">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success"  type="submit">Search</button>
      </form>
    </div>
  </div>
  
</nav>

</body>
</html>