<?php 
   
    $servername = "localhost";  
    $username = "root";  
    $password = ""; 
   
    $database = "shopping"; 
   
      
     $conn = mysqli_connect($servername, $username, $password, $database); 
   
    
   
    if($conn) { 
        echo "success";  
    }  
    else { 
        die("Error". mysqli_connect_error());  
    }  
?> 