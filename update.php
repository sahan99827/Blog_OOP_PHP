 <?php 

// include_once('config/app.php');
  include_once(__DIR__ .'/controllers/PostController.php');


  if(isset($_GET['id']))
  {
    $post_id = validateInput($db->conn, $_GET['id']);
    $post = new PostController;
    $result = $post->edit($post_id);
    if($result){
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
          h2{
            text-align: center !important;
            
          }
      </style>
  </head>

  <body>
        <?php include('message.php')?>

  	<p>
  		<a href="admin.php" class="btn btn-secondary">Go Back to Products</a>
  	</p>
    <h1><b>Update Post</b> <h2><b><?php echo $result['title'] ?></b></h2></h1>
       
              <!-- update form -->
    <form action="user/post-valid.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $result['id'] ?>"> 

    	<?php if ($result['image']): ?> 
    		 <img  src="<?php echo $result['image'] ?>" class="thumb2-image" name="imgV" > 
    	<?php endif; ?>
             
      <div class="form-group">
        <label>Image</label>
        <br>
        <input type="file" name="image" required>
      </div>
      <div class="form-group">
        <label>Post Title</label>
        <input type="text" name ="title" class="form-control" value="<?php echo $result['title'] ?>">
      </div>
      <div class="form-group">
      <label>Post Description</label>
      <br>
    <textarea id="description" name="description" rows="7" cols="100">
    <?php echo $result['description'] ?>

    </textarea>
    </div>

      <button type="submit" class="btn btn-primary" name="update_posts">Submit</button>
    </form>
              <!-- end update form -->

    <?php

          }
          else{
            echo "<h4>Not Record Found</h4>";
          }

          }else
          {
          echo "<h4> Something went wrong</h4>";
          }

    ?>



  </body>
</html>

 




















