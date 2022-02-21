
//'INSERT INTO users (username,email,password) values ('$username','$email','$password')';
<?php
$servername = "localhost";
$dbuser = "root";
$password = "";
$dbname = "seasideparkhotel";

// Create connection
$conn = new mysqli($servername, $dbuser, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(username, email, password)
VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {  
  echo "Thank You For Join With Us...";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
   
