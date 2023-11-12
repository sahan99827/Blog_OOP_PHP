<?php
include(__DIR__ .'/../config/app.php');

class Controller 
{

    public $conn;
    //constructer function
    public function __construct()
    {
        $db = new DbConnection;
        $this->conn = $db->conn;



    }

    // Image Upload
    public function image($img)
    {

        if (!is_dir('images')) {
            mkdir('images');
        }

        if (empty($errors))
        {
         $image = $img ?? null;
         $imagePath ='';

         $ret= 'images/'.$this->randomString(8).'/'.$image['name'];
                   if ($image) {
              $imagePath =__DIR__ .'/../'.$ret; 

                // var_dump($imagePath).die();
              mkdir(dirname($imagePath));
             
              move_uploaded_file($image['tmp_name'],$imagePath);

          }
        }
        return $ret;
    }
    
    public function randomString($n)
    {
        return time();
    }
}
?>