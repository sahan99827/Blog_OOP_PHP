<?php
// include functions
include('../controllers/RegsterController.php');
include('../controllers/LoginController.php');
include('../controllers/PostController.php');

//objects
 $postcont = new PostController();
 $auth = new LoginController;
 
 //login
if (isset($_POST['login_btn'])){
        $email =validateInput($db->conn,$_POST['email']);
        $password =validateInput($db->conn,$_POST['password']);

        $checkLogin = $auth->userLogin($email,$password);

        if ($checkLogin)
        {
                if($_SESSION['auth_user']['user_role'] === 'admin'){
                        redirect("Logged in  Successs","admin.php");
                       

                }
                else if($_SESSION['auth_user']['user_role'] === 'user'){
                        redirect("Logged in  Successs","index.php");
                        
                }        
        }
        else
        {
            redirect("Invalid Login","login/login.php");
           

        }
}



// register
if (isset($_POST['regstar_btn']))
{
$name = validateInput($db->conn,$_POST['name']);
$email = validateInput($db->conn,$_POST['email']);
$role = validateInput($db->conn,$_POST['role']);
$password = validateInput($db->conn,$_POST['password']);
$confirm_Password = validateInput($db->conn,$_POST['confirm_Password']);

$regster= new RegsterController;
$resul_password = $regster->confirmPassword($password,$confirm_Password);
if($resul_password)
{
       $result_User =$regster->isUserExists($email);
       if($result_User){
        redirect("Already Email Exists","login/regstar.php");
        
       }else {
        $regster_query = $regster->registeration($name,$email,$password,$role);
        if($regster_query)
        {
                redirect("Registered Successfully","login/login.php");

        }else
       {
                redirect("Somthing went worng ","login/regstar.php");

       }


       }

}else
{
        redirect("Password and Confirm Password Does not match","login/regstar.php");
}



}


?>