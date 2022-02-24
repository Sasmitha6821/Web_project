<?php
	$firstName = $_POST['Firstname'];
	$lastName = $_POST['Lastname'];
	$gender = $_POST['country'];
	$email = $_POST['subject'];

	$conn = new mysqli('localhost','root','','contact');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Firstname, Lastname, country, subject) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Firstname, $Lastname, $country, $subject);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
