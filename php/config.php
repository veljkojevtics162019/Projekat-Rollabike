<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "rollabike";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Nije uspela konekcija ". mysqli_connect_error());  
    }  
?>  