<?php
require_once "connection.php";

    $comp=$comp+1;
    
    $surname=$_POST['surname'];
    $username=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $adress=$_POST['address'];
    $department=$_POST['department'];
    $job=$_POST['job'];

    setDetails($emp_num, $surname ,$username, $email ,$password, $adress, $department, $job)
    

    $cityz=$_POST['city'];
    $details=$_POST['dff'];



    $sql = "INSERT INTO employees (serviceID, updates) VALUES ('$cityz', '$details')";

    if (mysqli_query($con, $sql)) {
        header("location: main.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
?>