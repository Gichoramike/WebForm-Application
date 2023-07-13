<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";


	//create connection
	$conn =  new mysqli($servername,$username,$password);

	//check connection
	if($conn->connect_error){
		die("connection failed: " .$conn->connect_error);
	}
	echo "connected successfully";



?>

<html>
	<body>
	Full name <?php echo $_POST["field1"]; ?>
	Email Address : <?php echo $_POST["field3"]:?>



	</body>

</html>