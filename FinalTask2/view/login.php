<?php if(!isset($_SESSION['user'])) header('Location:index.php?page=login'); ?>
<h1>Welcome <?= $_SESSION['user'] ?></h1>
<p>Login Time: <?= $_SESSION['time'] ?></p>
<a href="index.php?page=settings">Settings</a><br>
<a href="index.php?page=logout">Logout</a>