<!--Php page that checks correct login details of user-->
<?php
require_once "connection.php";
require_once "classes.php";


    $username=$_POST['user'];
    $password=$_POST['pass'];
    


    $username_err = $password_err = $login_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //username
        if(empty(trim($_POST["user"]))){
            $username_err = "Please enter username.";
        } else{
            $username = trim($_POST["user"]);
        }
        //password
        if(empty(trim($_POST["pass"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["pass"]);
        }
        
       
    }
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      

        $sql = "select * from employees where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $seconds = 5 + time();
       
       
        echo "<br>";
       
       
        
        
        if($count == 1) {  
            //echo "<h1> Successful </h1>";
            session_start();
            $user = new User();
            $user->setEmail($username);
            $_SESSION['login'] = "1";
            header("location: profile.php");
        }  
        else{  
           //insert javascript code stating wrong information
           echo "<script>  
           alert('Please enter correct login details');
           location.href = 'index.html';
           </script>"; 
           session_start();
		   $_SESSION['login'] = '';
           header("location: index.html");
        }  
        

?>