<?php 
session_start();

include("../common/db.php");

if(isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user= $conn->prepare("INSERT into `users`
    (`id`,`username`,`email`,`password`,`address`) 
    VALUES (null,'$username','$email','$password','$address')
    ");

    $result=  $user->execute();  

    if ($result) {
        $_SESSION["user"] = ["username"=>$username,"email"=>$email];
        header("location: /Discuss");
    } else {
        echo "New user not registered";
    }

}

?>
