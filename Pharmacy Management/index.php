
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Show all</h1>
	<form action="showall.php" method="POST">
		<input type="submit" value="click to show all">
	</form>

	<h1>Add Medicine</h1>
	<form action="insert.php" method="POST">
		Name 
		<input type="text" name="name"><br>
		Cat
		<input type="text" name="cat"><br>
		Manufracture
		<input type="text" name="manu"><br>
		Current Stock
		<input type="text" name="stock"><br>
		Save 
		<input type="submit" value="click to save">
	</form>



	




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

	
</body>


</html>


