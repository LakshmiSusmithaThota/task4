<?php
session_start();
include "../db.php";

$users=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));
$foods=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM foods"));
$orders=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orders"));
?>

<h2>Admin Dashboard</h2>

<p>Total Users: <?php echo $users ?></p>
<p>Total Foods: <?php echo $foods ?></p>
<p>Total Orders: <?php echo $orders ?></p>

<a href="add_food.php">Add Food</a><br><br>

<h3>Food List</h3>

<?php

$res=mysqli_query($conn,"SELECT * FROM foods");

while($row=mysqli_fetch_assoc($res)){

echo "<p>";

echo $row['name']." - ₹".$row['price'];

echo " <a href='edit_food.php?id=".$row['id']."'>Edit</a>";

echo " <a href='delete_food.php?id=".$row['id']."'>Delete</a>";

echo "</p>";

}
?>

<br>
<a href="orders.php">View Orders</a>