<?php
if(isset($_POST['register']))
{
 $_SESSION['errors']=[];
 if(!ValidationModel::username($_POST['username'])) $_SESSION['errors']['username']='Min 3 chars';
 if(!ValidationModel::email($_POST['email'])) $_SESSION['errors']['email']='Invalid email';
 if(!ValidationModel::password($_POST['password'])) $_SESSION['errors']['password']='Min 6 chars';
 if($_POST['password'] != $_POST['confirm']) $_SESSION['errors']['confirm']='Password mismatch';
 if(empty($_SESSION['errors']))
{
   $_SESSION['reg_user']=$_POST['username'];
   $_SESSION['reg_pass']=$_POST['password'];
   header('Location:index.php?page=login'); exit();
 }
}

if(isset($_POST['login']))
{
 if($_POST['username']==($_SESSION['reg_user']??'') && $_POST['password']==($_SESSION['reg_pass']??''))
{
   $_SESSION['user']=$_POST['username'];
   $_SESSION['time']=date('Y-m-d H:i:s');
   header('Location:index.php?page=dashboard'); exit();
 }
}
?>