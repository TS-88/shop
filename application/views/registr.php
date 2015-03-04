<html>
	<head>
		<title>database</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		 <form method="post">
		 	<span>email:</span><br>
		 	<input type="text" name="email">
		 	<br>
		 	<span>name:</span><br>
		 	<input type="text" name="name">
		 	<br>
		 	<span>last name:</span><br>
		 	<input type="text" name="last_name">
		 	<br>
		 	<span>password:</span><br>
		 	<input type="password" name="password">
		 	<br>
		 	<span>confirm password:</span><br>
		 	<input type="password" name="c_password">
		 	<br>
		 	<input class="submit" type="submit" value="send" name="send">
		 </form>
	</body>
</html>

<?php


include 'config.php';

if (isset($_POST['send'])) { 	
	
	$email = $_POST["email"];
	$name = $_POST['name'];
	$last_name = $_POST['last_name'];
	$password = $_POST['password'];


	$sql = "INSERT INTO users (email, name, last_name, password)
	VALUES ('".$email."','".$name."', '".$last_name."', '".$password."')";	
	echo "duq hajoxutyamb grancvel eq!!!";
	mysqli_query($conn,$sql);
	
if (empty($email) || empty($name) || empty($last_name) || empty($password)) { 
 	 exit("lracreq bolor dashternel partadir!!!");

 }
}
?>