<?php
//require_once "connection.php";
require_once "classes.php";

$user = new User();

$emp_nun=$user->emp_num=5;
$email=$user->$email=$_POST['email'];
$name=$user->$name=$_POST['name'];
$surname=$user->$surname=$_POST['surname'];
$gernder=$user->$gender=$_POST['gender'];
$password=$user->$password=$_POST['pass'];

$user->setDetails($emp_nun, $surname, $name, $email, $password, $gender);



?>