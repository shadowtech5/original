<?php
   session_start();
   
   if(session_destroy()) {
   	setcookie("user_email", "", time() - 3600);
    header("Location: index.php");
   }
?>