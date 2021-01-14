<?php
   include("config.php");
   session_start();
   
  
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $lozinka = mysqli_real_escape_string($con,$_POST['lozinka']);

      
      $sql = "SELECT * FROM korisnici WHERE email = '$email'";
      
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      
      if($count == 1) {
         
         $verified = password_verify($lozinka, $row['lozinka']);

         if($verified)
         {
            $_SESSION['user'] = $row;
            header("location: welcome.php");
         }
         else
         {
            header("location: ../login/login.html");
         }
      }else {
         header("location: ../login/login.html");
      }
   }
?>
