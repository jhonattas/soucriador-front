<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   unset($_SESSION["token"]);
   
   echo 'You have cleaned session';
   // header('Refresh: 2; URL = login.php');
   header('Refresh: 2; URL =  produtos');
?>
