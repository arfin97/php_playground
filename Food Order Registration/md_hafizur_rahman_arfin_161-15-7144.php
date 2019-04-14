
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	$firstErr = ""; 
	$middleErr = ""; 
	$lastErr = ""; 
	$emailErr = "";
	$addressErr = "";
	$contactErr = "";

	$first = "";
	$middle = "";
	$last = "";
	$address = "";
	$email = "";
	$contact = "";
	$method = "";
	$type = "";

	$firstok = 0; $middleok = 0; $lastok = 0; $emailok = 0; $addressok = 0; $contactok = 0;

	function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
	}
	
	include("connection.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		if(empty($_POST["first"])) {
			$firstErr = "First Name is required";
		} 
		else{
			$name = test_input($_POST["first"]);
			// check if name only contains letters and whitespace
			if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$firstErr = "Only letters and white space allowed"; 
			}
			else{
				$firstok = 1;
			}
		}

		if(empty($_POST["middle"])) {
			$middleErr = "Middle Name is required";
		} 
		else{
			$name = test_input($_POST["middle"]);
			// check if name only contains letters and whitespace
			if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$middleErr = "Only letters and white space allowed"; 
			}
			else{
				$middleok = 1;
			}
		}

		if(empty($_POST["last"])) {
			$lastErr = "Last Name is required";
		} 
		else{
			$name = test_input($_POST["last"]);
			// check if name only contains letters and whitespace
			if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$lastErr = "Only letters and white space allowed"; 
			}
			else{
				$lastok = 1;
			}
		}



		  if (empty($_POST["email"])) {
		    $emailErr = "Email is required";
		  } else {
		    $email = test_input($_POST["email"]);
		    // check if e-mail address is well-formed
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $emailErr = "Invalid email format"; 
		    }
		    else{
				$emailok = 1;
			}
		  }

		if(empty($_POST["address"])) {
			$addressErr = "Address is required";
		} 
		else{
				$addressok = 1;
		}
		

		if(empty($_POST["contact"])) {
			$contactErr = "Contact is required";
		} 
		else{
			$name = test_input($_POST["contact"]);
			// check if name only contains letters and whitespace
			if(!preg_match("/^[0-9]*$/",$name)) {
				$contactErr = "Only Numbers are allowed"; 
			}
			else{
				$contactok = 1;
			}
		}


		$first = $_POST['first'];
		$middle = $_POST['middle'];
		$last = $_POST['last'];

		$address = $_POST['address'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];

		$method = $_POST['method'];
		$type = $_POST['type'];

		

		if($firstok and $middleok and $lastok and $addressok and $emailok and $contactok){
			$sql = "INSERT INTO foodorder(first, middle, last, address, email, contact, method, type) VALUES ('$first', '$middle', '$last', '$address', '$email', '$contact', '$method', '$type');";

			mysqli_query($conn,$sql);
			echo "<h1>Order Has Been Registered, Thank you.</h1>";
			
		}

	}

	
?>

	<h1>Food Order Registration System</h1>
	<p><span style="color: red;">* required field</span></p>
	<form action="index.php" method="POST">
		First Name 
		<input type="text" name="first" value="<?php echo $first;?>">
		<span style="color: red;">* <?php echo $firstErr;?></span>
		<br>
		Middle Name
		<input type="text" name="middle" value="<?php echo $middle;?>">
		<span style="color: red;">* <?php echo $middleErr;?></span>
		<br>
		Last Name
		<input type="text" name="last" value="<?php echo $last;?>">
		<span style="color: red;">* <?php echo $lastErr;?></span>
		<br>
		Address
		<input type="text" name="address" value="<?php echo $address;?>">
		<span style="color: red;">* <?php echo $addressErr;?></span>
		<br>
		Email
		<input type="text" name="email" value="<?php echo $email;?>">
		<span style="color: red;">* <?php echo $emailErr;?></span>
		<br>
		Contact
		<input type="text" name="contact" value="<?php echo $contact;?>">
		<span style="color: red;">* <?php echo $contactErr;?></span>
		<br>
		Payment Method
		<select name="method">
		    <option value="Bkash">Bkash</option>
		    <option value="Visa">Visa</option>
		    <option value="Rocket">Rocket</option>
		</select>
		<br>
		<br>


		Service Type
		<select name="type">
		    <option value="Regular">Regular</option>
		    <option value="Express">Express</option>
		    <option value="Premium">Premium</option>
		</select>
		<br>
		Save 
		<input type="submit" value="click to save">
	</form>



	<!-- 




	<h1>Search by name</h1>
	<form action="searchbysubject.php" method="POST">
		name 
		<input type="text" name="name"><br>
		search 
		<input type="submit" value="click to search">
	</form>




	<h1>Delete by name</h1>
	<form action="deletebysubject.php" method="POST">
		name 
		<input type="text" name="name"><br>
		Delete 
		<input type="submit" value="click to delete">
	</form>

	<h1>Update stock by name</h1>
	<form action="updatebysubject.php" method="POST">
		name 
		<input type="text" name="name"><br>

		stock
		<input type="text" name="stock"><br>
		update 
		<input type="submit" value="click to update content">
	</form>
 -->
	
</body>




</html>


