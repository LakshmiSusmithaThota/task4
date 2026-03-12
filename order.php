<?php
session_start();
include "db.php";

$user=$_SESSION['user'];
$food=$_GET['id'];

mysqli_query($conn,"INSERT INTO orders(user_id,food_id)
VALUES($user,$food)");

echo "Order placed successfully";

echo "<br><a href='dashboard.php'>Back</a>";
?>