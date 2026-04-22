<form method="post">
<input name="username" placeholder="Username">
<span><?= $_SESSION['errors']['username'] ?? '' ?></span><br>
<input name="email" placeholder="Email">
<span><?= $_SESSION['errors']['email'] ?? '' ?></span><br>
<input type="password" name="password" placeholder="Password"><br>
<span><?= $_SESSION['errors']['password'] ?? '' ?></span><br>
<input type="password" name="confirm" placeholder="Confirm Password">
<span><?= $_SESSION['errors']['confirm'] ?? '' ?></span><br>
<button name="register">Register</button>
<a href="index.php?page=login">Login</a>
</form>