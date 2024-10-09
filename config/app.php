<?php
Session_start();
//db connection
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD','admin@123');
define('DB_DATABASE', 'blog_system');

define('SITE_URL', 'http://127.0.0.1/Blog/');


include_once('DBConnection.php');
$db = new DbConnection;

//baseurl function
function baseurl($value) 
{
    echo SITE_URL.$value;
}
//redirect function
function redirect($message,$page)
{

    $redirectTo = SITE_URL.$page;
    $_SESSION['message'] ="$message";
    header("Location: $redirectTo");
    exit(0);
}
//validateInput function
function validateInput($dbcon,$value)
{
    return mysqli_real_escape_string($dbcon, $value);
}

?>