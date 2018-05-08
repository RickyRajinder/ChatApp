<?php
include 'dbh.php';
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

if(!array_key_exists('password', $_POST))
    die('no password specified');

$password = trim($_POST['password']);
if(strlen($password) < 8)
    die('Password must be at least 8 characters');

$sql="insert into signup(username, email, password)
values ('$username','$email', '$password')";
    $result=$conn->query($sql);

    header("Location: index.php");




?>