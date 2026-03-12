<?php
include "db.php";

$q=$_GET['q'];

$res=mysqli_query($conn,"SELECT * FROM foods
WHERE name LIKE '%$q%'");

while($row=mysqli_fetch_assoc($res)){

echo "<p>".$row['name']." - ₹".$row['price']."</p>";

}
?>