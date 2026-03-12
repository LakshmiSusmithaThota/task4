<?php
include "../db.php";

$id=$_GET['id'];

$data=mysqli_fetch_assoc(
mysqli_query($conn,"SELECT * FROM foods WHERE id=$id")
);

if(isset($_POST['update'])){

$name=$_POST['name'];
$price=$_POST['price'];
$desc=$_POST['description'];

mysqli_query($conn,"UPDATE foods SET
name='$name',price='$price',description='$desc'
WHERE id=$id");

header("Location: dashboard.php");

}
?>

<form method="post">

<input name="name" value="<?php echo $data['name']; ?>"><br>

<input name="price" value="<?php echo $data['price']; ?>"><br>

<textarea name="description"><?php echo $data['description']; ?></textarea>

<button name="update">Update</button>

</form>