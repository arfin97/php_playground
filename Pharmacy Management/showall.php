<?php
	include('connection.php');
	$sql = "SELECT * FROM med;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);



	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)) {

			echo "subject: ".$row['name']."<br>";
			echo "cat: ".$row['cat']."<br>";
			echo "manu: ".$row['manu']."<br>";
			echo "stock: ".$row['stock']."<br>";

			echo "<br>";


		}
	}	
?>
