<?php      
    //$host = "sql210.epizy.com";  
    //$user = "epiz_31225069";  
    //$password = "iRpgYziOBtey";  
    //$db_name = "epiz_31225069_outage";  
    
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
    

?>  