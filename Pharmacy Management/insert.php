<?php
	include("connection.php");
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$cat = $_POST['cat'];
		$manu = $_POST['manu'];
		$stock = $_POST['stock'];
// 		medicine
// name
// group
// manu
// stock

		echo "Inserted Group: $cat <br>";
		
		$sql = "INSERT INTO med(name, cat, manu, stock) VALUES ('$name', '$cat', '$manu', '$stock');";

		mysqli_query($conn,$sql);
		echo "Go back to previous page <a href='index.php'> link </a>";
		// header("Location: index.php");

	}

	
?>