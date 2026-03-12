<?php
include "db.php";

if(isset($_POST['register'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

mysqli_query($conn,"INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')");

echo "Registration Successful";
}
?>

<h2>Register</h2>

<form method="post">

<input name="name" placeholder="Name"><br><br>

<input name="email" placeholder="Email"><br><br>

<input type="password" name="password"><br><br>

<button name="register">Register</button>

</form>

<a href="login.php">Login</a>