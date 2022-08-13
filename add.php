<?php
require_once "connection.php";
require_once "classes.php";

   

    
    $surname=$_POST['surname'];
    $username=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $adress=$_POST['address'];
    $department=$_POST['department'];
    $job=$_POST['job'];

    $user = new User();
   

    $user->setDetails($surname ,$username, $email ,$password, $adress, $department, $job);
    

    



    $sql = "INSERT INTO employees ( name, surname, email, adress, password ,department,job) VALUES ('$username', '$surname', '$email', '$adress','$password','$department','$job')";

    if (mysqli_query($con, $sql)) {
        header("location: home.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }


?>