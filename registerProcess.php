<?php 
include('includes/dbconx.php');
include('includes/errors.php');

if(isset($_POST['submit'])){
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashPassword);
    $result = $stmt->execute();

    if($result){
        header('location:login.php');
        exit();
    } else {
        echo "Try again. Something went wrong<p><a href='registerUser.php'>Register</a>";
    }

    $stmt->close();
    $conn->close();
} 
?>
