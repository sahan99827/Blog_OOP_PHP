 <?php 
        include_once('controllers/PostController.php');
        include_once('login/loginAcccess.php');

  ?>


 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <style>
          body, html {
            height: 100%;
            margin: 0;
          }

        
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Blog Crud</title>
    <style>
          h1{
            text-align: center !important;
            color:gold;
          }
          a{
            color:white;
            text-decoration:none
          }
      </style>
  </head>
  <body>
      <div class="bg">
      <?php include('message.php')?>
      </div>
    <h1>Admin Panal </h1>

              <!-- Link Button -->
    <p>
     <button class="btn btn-sm btn-info"> <a href="Create.php"  >create post</a></button>
      <button  class="btn btn-sm btn-info"> <a href="index.php" >Post View</a> </button>
    </p>
   
              <!-- View Table -->

    <table class="w-100 table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        <?php  
              $posts = new PostController;
              $result =$posts->index();
              if ($result){

                foreach ($result as $i => $post) {
                  ?>
              <tr>
          <th scope="row"><?php echo $i +1 ?></th>
          <td>
            <img class="thumb-image" src="<?php echo $post['image'] ?>">
          </td>
          <td><?php echo $post['title'] ?></td>
     
          <td>
           <a href="update.php?id=<?php echo $post['id'] ?>"  class="btn btn-sm btn-outline-primary">Edit</a> 
           <form style ="display: inline-block" method="post" action="user/post-valid.php">
               <button type="submit" class="btn btn-sm btn-outline-danger" name= "delete_post" value="<?php echo $post['id'] ?>">Delet</button> 
           </form>

           
          </td>           
    </tr>
              <?php    
                }
              }else
              {
                echo "NO RECords Found";
              }
        ?>

  </tbody>
</table>
  
  </body>
</html>