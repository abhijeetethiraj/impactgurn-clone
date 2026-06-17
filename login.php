<?php
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];
    session_start();
$sql= "SELECT *FROM users WHERE email = '$email'";
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_assoc($result);

if(
    $user  &&
    password_verify($password ,$user['password']  )
){
$_SESSION['user_id'] = $user['id'];
$_SESSION['name'] = $user['name'];
$_SESSION['email'] = $user['email'];
    header("Location:index.html");
    exit();

}else{
         echo "Invalid Email or Password";
}

?>