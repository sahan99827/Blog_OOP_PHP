<?php 
// include_once('../config/app.php');
include_once(__DIR__ .'/../controllers/PostController.php');
// delete post
if (isset($_POST['delete_post']))
{
   
   if($_SESSION['auth_user']['user_role'] === 'admin')
   {
      $id = validateInput($db->conn,$_POST['delete_post']);
      $postDele = new PostController;
      $result = $postDele->deletePost($id);
      if ($result){
          redirect(" Successs Delete","admin.php");
  
      }
      else{
          redirect(" Faild Delete","admin.php");
  
      }
   }else
   {
      redirect("Con't Access to Delete","index.php");
   }
   
}

// Add post

if(isset($_POST['save_posts']) )
{
      $description = isset($_POST['description']) ? validateInput($db->conn, $_POST['description']) : '';
      $title = isset($_POST['title']) ? validateInput($db->conn, $_POST['title']) : '';
      $image = (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) ? $_FILES['image'] : '';

  
     $posts =new PostController;
     $result = $posts->savePost($title,$image, $description);
     if ($result)
     {

            if($_SESSION['auth_user']['user_role'] === 'admin'){
               redirect(" Successs Save","admin.php");

            }
            else if($_SESSION['auth_user']['user_role'] === 'user'){
               redirect(" Successs Save","index.php");

            }

     }
     else
     {
        redirect(" Fiald to Save","create.php");

     }
    // var_dump($result);
}

// Udate post
if(isset($_POST['update_posts']) )
{
         $id =  isset($_POST['id']) ? validateInput($db->conn, $_POST['id']) : '';
         $title = isset($_POST['title']) ? validateInput($db->conn, $_POST['title']) : '';
         $image = (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) ? $_FILES['image'] : '';
         $description = isset($_POST['description']) ? validateInput($db->conn, $_POST['description']) : '';
         
         $posts =new PostController;
          $result = $posts->upatePost($title,$image,$id, $description);  
         if ($result)
            {      

               if($_SESSION['auth_user']['user_role'] === 'admin'){
                  redirect(" update Successsfuly","admin.php");

               }
               else if($_SESSION['auth_user']['user_role'] === 'user'){
                  redirect(" update Successsfuly","index.php");

               }
            }
            else
            {
               redirect(" update Faild","update.php");
            }
    // var_dump($result);
}




?>