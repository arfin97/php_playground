
<?php
	include('connection.php');
	$name = $_POST['name'];
	$sql = "DELETE FROM med WHERE name='$name';";
	$result = mysqli_query($conn, $sql);
	echo "Deleted: back to previous page <a href='index.php'> link </a>";
?>