<?php
 
session_start();

$userNameErr = $_SESSION['userNameErr'] ?? '';
$fullNameErr = $_SESSION['fullNameErr'] ?? '';
$emailErr = $_SESSION['emailErr'] ?? '';
$phoneNumberErr = $_SESSION['phoneNumberErr'] ?? '';

$userName = $_SESSION['old_userName'] ?? '';
$fullName = $_SESSION['old_fullName'] ?? '';
$email = $_SESSION['old_email'] ?? '';
$phoneNumber = $_SESSION['old_phoneNumber'] ?? '';

unset($_SESSION['userNameErr']);
unset($_SESSION['fullNameErr']);
unset($_SESSION['emailErr']);
unset($_SESSION['phoneNumberErr']);

?>

<html>
<head>
    <title>Form Page</title>
</head>
<body>

<form action="../controller/formValidation.php" method="POST">

<label>User Name:</label>
<input type="text" name="userName" value="<?php echo $userName; ?>">
<?php echo $userNameErr; ?>
<br><br>

<label>Full Name:</label>
<input type="text" name="fullName" value="<?php echo $fullName; ?>">
<?php echo $fullNameErr; ?>
<br><br>

<label>Email:</label>
<input type="email" name="email" value="<?php echo $email; ?>">
<?php echo $emailErr; ?>
<br><br>

<label>Phone Number:</label>
<input type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>">
<?php echo $phoneNumberErr; ?>
<br><br>

<button type="submit">Submit</button>

</form>

</body>
</html>