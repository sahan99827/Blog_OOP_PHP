<?php 
  include_once('controllers/PostController.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL Blog</title>

    <style>
          body, html {
            height: 100%;
           padding: 20px 10px;
           
          }
          p{
            width: 500px !important;
            text-align: justify;
            text-justify: inter-word;
          }
          h2{
            text-align: center !important;
            color:#808080;
          }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <?php 
  include('components/nav.php');
  include('message.php');
 
      $posts = new PostController;
      $result =$posts->index();
      if ($result){

        foreach ($result as $i => $post) {
      ?>
<br>
        <div class="container">
          <div class="row">
            <div class="col-md-3" >
                 
            </div>
            <div class="col-md-6">
             
              <hr>
                 <h2><b><?php echo $post['title'] ?></b></h2>
                 <hr>
                <img class="thumb-image" src="<?php echo $post['image'] ?>" width="150px" height="150px">
                <br> <br>
                <div>
                <p><b><?php echo $post['description'] ?></b></p>

                </div>
                <h5><?php echo $post['create_date'] ?></h5>
                <br> 

            <button type="button" class="btn btn-sm btn-primary"><a href="update.php?id=<?php echo $post['id'] ?>"   style="color:black; text-decoration:none" >Edit Post</a> </button>
            <button type="button" class="btn btn-sm btn-danger"><a href="create.php" style="color:black;text-decoration:none" >Create Post</a></button> 
          
           <?php  
              if(isset($_SESSION['authenticated'])){
                if($_SESSION['auth_user']['user_role'] === 'admin'){
           ?>
           
            <form style ="display: inline-block" method="post" action="user/post-valid.php">
                  <button type="submit" class="btn btn-sm btn-outline-danger" name= "delete_post" value="<?php echo $post['id'] ?>">Delet</button> 
              </form>
             <br><br>
              <?php
                }
                }
              ?>
            </div>
            <div class="col-md-3"></div>
         

          </div>
        </div>
        
          
             

<?php 
   }
  }else
  {
    echo "NO RECords Found";
  }


?>
</body>
</html>
