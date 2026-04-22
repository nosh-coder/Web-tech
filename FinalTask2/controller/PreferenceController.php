<?php
if(isset($_POST['theme'])){
 setcookie('theme', $_POST['theme'], time()+86400*30);
 header('Location:index.php?page=settings');
}
$theme = $_COOKIE['theme'] ?? 'light';
?>