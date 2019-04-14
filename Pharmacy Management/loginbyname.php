
<?php
	include('connection.php');
	$name = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user WHERE username='$name';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$gotit = $row['username'];
			if($password ==  $row['password']){
				header("Location: index.php");

			}else{
				echo "Login failed.<br>";
			}
		
			
		

			echo "<br>";
			echo "Go back to previous page <a href='index.php'> link </a>";
		}
	}else{
		echo $name." couldn't found<br>";
	}
?>