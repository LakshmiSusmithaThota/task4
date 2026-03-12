<?php
session_start();
include "db.php";

if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<h2>Food Menu</h2>

<a href="logout.php">Logout</a>

<br><br>

<input type="text" id="search" placeholder="Search food">

<div id="result"></div>

<script>

document.getElementById("search").onkeyup=function(){

fetch("search.php?q="+this.value)
.then(res=>res.text())
.then(data=>document.getElementById("result").innerHTML=data);

}

</script>

<?php

$res=mysqli_query($conn,"SELECT * FROM foods");

while($row=mysqli_fetch_assoc($res)){

echo "<p>".$row['name']." - ₹".$row['price'];

echo " <a href='order.php?id=".$row['id']."'>Order</a>";

echo "</p>";

}

if($_SESSION['role']=="admin"){

echo "<br><a href='admin/dashboard.php'>Admin Panel</a>";

}

?>