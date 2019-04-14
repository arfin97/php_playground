<?php 
	include_once 'includes/dbh.inc.php'
?>
<?php
	$sql = "SELECT * FROM posts;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['id']."<br>";
			echo $row['subject']."<br>";
		}
	}	
?>