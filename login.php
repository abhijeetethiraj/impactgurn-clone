<?php

$email = $_POST['email'];
$password = $_POST['password'];

$users = file("users.txt");

foreach($users as $user){
    $data = explode("|" , trim($user));
    if(
        $data[1] == $email
        &&
        $data[2] == $password
    ){
        header("LOcation: index.html");
        exit();
    }
}
echo "Invalid Login"

?>