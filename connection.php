<?php      
    $host = "sql310.epizy.com";  
    $user = "epiz_31688575";  
    $password = "7PkvNxAeI8ETOd";  
    $db_name = "epiz_31688575_employee";  
    
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
    

?>  