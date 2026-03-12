<?php
include "../db.php";

if(isset($_POST['add'])){

$name=$_POST['name'];
$price=$_POST['price'];
$desc=$_POST['description'];

mysqli_query($conn,"INSERT INTO foods(name,price,description)
VALUES('$name','$price','$desc')");

echo "Food Added";

}
?>

<form method="post">

<input name="name"><br><br>

<input name="price"><br><br>

<textarea name="description"></textarea><br><br>

<button name="add">Add Food</button>

</form>