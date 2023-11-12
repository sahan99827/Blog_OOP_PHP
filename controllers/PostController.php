<?php 

// namespace Controllers;

include_once(__DIR__ .'/Controller.php');

class PostController extends Controller
{
    
    //view post
    public function index(){

        $postQuery = "SELECT * FROM posts;";
        $result = $this->conn->query($postQuery);
        if ($result->num_rows > 0)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }


    //insert a new post
    public function savePost($value, $img, $desc)
    {
        $description =  $desc;
        $title =$value;
        $image =$img;

        if($_SERVER['REQUEST_METHOD']==='POST')
        {
            
            	if(empty($title)){
            		$errors[] = 'Post title is required';
            	} 
            	if(empty($description)){
            		$errors[] = 'Post description is required';
            	} 
            
                $imagePath = $this->image($image);
                
                // var_dump($imagePath);

            	if (empty($errors)) {
            	

                  $regster_qury ="INSERT INTO posts (title,image,description) VALUES('$title','$imagePath','$description')";
                //   var_dump($regster_qury); die;
                  $result = $this->conn->query($regster_qury);
                  return $result;

                }
             
        }
    }
        
          
   
         	
    public function edit($id)
    {
        $post_id =validateInput($this->conn,$id);

        $postQuery ="SELECT * FROM posts WHERE id='$post_id' LIMIT 1";
        $result = $this->conn->query($postQuery);
     
        if ($result->num_rows == 1)
        {
            $data = $result->fetch_assoc();
            return $data;
        }
        else{
            return false;
        }

    } 
    

    //update data
    public function upatePost($value, $img, $id, $desc)
    {
        $post_id = validateInput($this->conn,$id);

        $description =  $desc;
        $title =$value;
        $image = $img;

        if($_SERVER['REQUEST_METHOD']==='POST')
        {
            
            	if(empty($title)){
            		$errors[] = 'Post title is required';
            	} 
                if(empty($description)){
            		$errors[] = 'Post description is required';
            	} 
            
                $imagePath = $this->image($image);

            	if (empty($errors)) {

                
            	   $regster_qury ="UPDATE posts  SET title='".$title."',image='".$imagePath."' ,description='".$description."'   where id='".$post_id."' LIMIT 1";
                  $result = $this->conn->query($regster_qury);
                  return $result;

                }
              
        }
    }
    //delete data
    public function deletePost($id){

        $postId = validateInput($this->conn,$id);

        $deletepost ="DELETE FROM posts WHERE id='$postId' LIMIT 1";
        $result = $this->conn->query($deletepost);
        if ($result){
            return true;
        }
        else{
            return false;
        }
    }







         





}




?>











