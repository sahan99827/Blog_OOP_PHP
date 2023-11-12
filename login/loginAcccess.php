<?php


if($_SESSION['auth_user']['user_role'] === 'user')
{
    redirect("User Cont access","login/login.php");

}




?>