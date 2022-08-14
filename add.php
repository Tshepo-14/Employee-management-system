<?php
require_once "connection.php";
require_once "classes.php";

   

    $user = new User();
    
    $surname=$user->surname=$_POST['surname'];
    $username=$userr->username=$_POST['name'];
    $email=$user->email=$_POST['email'];
    $password=$user->password=$_POST['password'];
    $adress=$user->adress=$_POST['address'];
    $department=$user->department=$_POST['department'];
    $job=$user->job=$_POST['job'];

    $user->setDetails($surname ,$username, $email ,$password, $adress, $department, $job);
 
    

    $sql = "INSERT INTO employees ( name, surname, email, adress, password ,department,job) VALUES ('$username', '$surname', '$email', '$adress','$password','$department','$job')";

    if (mysqli_query($con, $sql)) {
        header("location: home.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }


?>