<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seasideparkhotel";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST["email"];
$password = $_POST["password"];

$sql1 = "SELECT email, password FROM users WHERE email = '$email' AND password = '$password'";
$result1 = $conn->query($sql1);
 

if ($result1->num_rows > 0) {
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;
  header("Location: http://localhost/Sea_Side_South_Park/booking/booking.php");
  exit();
}
else{
    echo "incorrect username or password";
    echo '<script type="text/javascript">',
     'setTimeout();',
     '</script>';
}
$conn->close();
?>

<script>
setTimeout(function () {    
    window.location.href = 'http://localhost/Sea_Side_South_Park/index.html'; 
},2000); // 2 seconds
</script>