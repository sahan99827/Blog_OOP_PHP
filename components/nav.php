<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light pt">
  <div class="container">
      <a class="navbar-brand" href="#">SL Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <?php 
         if(isset($_SESSION['authenticated'])):
        if($_SESSION['auth_user']['user_role'] === 'admin'){
        ?>
         <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin </a>
        </li>
        <?php
        }

       
         ?>
       </div>
       </ul>
       <ul class="navbar-nav">
       <div class=" d-flex">
       <li class="nav-item ">
          <a class="nav-link" href="login/login.php" >Log out</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"> <?= $_SESSION['auth_user']['user_name'];?></a>
        </li>
       </div>
        

        <?php
           else :
        ?>
        <li class="nav-item d-flex">
          <a class="nav-link" href="login/login.php">Login</a>
        </li>
       <?php endif; ?>
      
       </ul>
  </div>
</nav>
</body>
</html>