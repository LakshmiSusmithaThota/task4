<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$res=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
$user=mysqli_fetch_assoc($res);

if($user && password_verify($password,$user['password'])){

$_SESSION['user']=$user['id'];
$_SESSION['role']=$user['role'];

header("Location: dashboard.php");

}else{

echo "Invalid Login";

}

}
?>

<h2>Login</h2>

<form method="post">

<input name="email"><br><br>

<input type="password" name="password"><br><br>

<button name="login">Login</button>

</form>