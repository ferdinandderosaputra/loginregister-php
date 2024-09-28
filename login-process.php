<?php 

include('includes/dbconx.php');
include('includes/errors.php');

if(isset($_POST['submit'])){

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
		
$sql = "SELECT username, password FROM users WHERE username = '$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 

if ($result->num_rows == 1 && $username==$row['username'] && password_verify($password, $row['password']) ) {
  

header('location:admin.php');
}

 else {
    header('location:login.php');
}

} 
$conn->close();
 
?>














 
















