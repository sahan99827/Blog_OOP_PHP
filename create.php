 <?php 

    // include_once('config/app.php');

  ?>


 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Blog Crud</title>

    <style>
      h1{
            text-align: center !important;
            color:gold;
          }
      </style>
  </head>

  <body>
      <?php include('message.php')?>

  	 <p>
  		<a href="admin.php" class="btn btn-secondary">Go Back to</a>
  	</p>
  	
    <h1>Create New Post</h1>

              <!-- Add form -->

      <form action="user/post-valid.php" method="post" enctype="multipart/form-data">
    
  <div class="form-group">
    <label>Image</label>
    <br>
    <input type="file" name="image" required>
  </div>
   <div class="form-group">
    <label>Post Title</label>
    <input type="text" name ="title" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Post Description</label>
    <br>
    <textarea id="description" name="description" rows="7" cols="100">


    </textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="save_posts">Submit</button>
</form>
              <!-- end Add form -->

  </body>
</html>

 




















