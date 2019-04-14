<?php
	include('connection.php');
	$name = $_POST['name'];
	$stock = $_POST['stock'];

	$sql = "UPDATE med SET stock='$stock' WHERE name='$name';";
	$result = mysqli_query($conn, $sql);
	echo "Deleted: back to shwoall page <a href='showall.php'> link </a>";
?>