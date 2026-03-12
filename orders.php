<?php
include "../db.php";

$res=mysqli_query($conn,"
SELECT users.name, foods.name AS food
FROM orders
JOIN users ON orders.user_id=users.id
JOIN foods ON orders.food_id=foods.id
");
?>

<h2>Orders</h2>

<?php

while($row=mysqli_fetch_assoc($res)){

echo "<p>";
echo "User: ".$row['name']."<br>";
echo "Food: ".$row['food'];
echo "</p><hr>";

}

?>