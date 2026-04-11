<?php
session_start();
$usernameErr = $_SESSION['usernameErr'] ?? '';
$passwordErr = $_SESSION['passwordErr'] ?? '';

unset($_SESSION['usernameErr']);
unset($_SESSION['passwordErr']);
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <form method="POST" action="loginValidation.php">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" id="username" name="username" required>
                </td>
                <td>
                    <p style="color: purple;"> <?php echo "username error"; ?> </p>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" id="password" name="password" required>
                </td>
                <td>
                    <p style="color: red;"> <?php echo "password error"; ?> </p>
                </td>
            </tr>
        </table>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>