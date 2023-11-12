<?php
// include('../config/app.php');
include('../auth/authentication.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
		<?php include('../message.php')?>
      <div class="card mt-5">
        <div class="card-header">
          Login Form
      </div>
      <div class="card-body">

      <form action="" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label class="form-label">Your Name</label>
				<input type="text" name ="name" class="form-control" >
			</div>
			<div class="form-group">
				<label class="form-label">Your Email :</label>
				<input type="email" name ="email" class="form-control" >
			</div>
			<div class="form-group">
				<label class="form-label">Role :</label>
				<input type="text" name ="role" class="form-control" >
			</div>
			<div class="form-group">
				<label class="form-label">Password</label>
				<input type="password" name ="password" class="form-control" >
			</div>
			<div class="form-group">
				<label class="form-label">Confirm Password</label>
				<input type="password" name ="confirm_Password" class="form-control" >
			</div>
			



			<button type="submit" class="btn btn-primary mt-3" name="regstar_btn">Register</button>
			<button type="button" class="btn btn-danger mt-3"><a href="<?= baseurl('login.php')?>" style="color:black;text-decoration:none" >Sign in</a></button>
	</form>
      </div>
      </div>
   

    </div>
    <div class="col-md-3"></div>
    </div>
</div>





</body>
</html>