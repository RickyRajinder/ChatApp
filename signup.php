<?php
include 'dbh.php';
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

if (strlen($password)>=8){
    $sql="insert into signup(username, email, password)
values ('$username','$email', '$password')";
    $result=$conn->query($sql);

    header("Location: index.php");
}
else {
    echo "Password must be 8 characters or longer";
}




?>