<?php
   $config = dirname(__FILE__) .'/hybridauth/config.php';
   include("hybridauth/Hybrid/Auth.php");
   try
   {
      $hybridauth = new Hybrid_Auth( $config );

      $google = $hybridauth->authenticate( "Google" );

      $user_profile = $google->getUserProfile();

      $user_email = $user_profile->email;
      $user_fname = $user_profile->firstName;
      $user_lname = $user_profile->lastName;
      $staff = 0;
      $super_user = 0;
      include('db_connnection.php');
      $sql = 'SELECT * from admin where username ="'.(string)$user_email.'"';
      $retval = mysql_query( $sql, $conn );
      if(! $retval ) 
      {
         die('Could not get data: ' . mysql_error());
      }
      session_start();
      if(!isset($_COOKIE['user_email']))
      {
         setcookie("user_email", $user_email, time() + 3600);  
      }
      if(mysql_num_rows($retval)==0){
         $insert_query = 'INSERT INTO `admin`(`username`, `first_name`, `last_name`, `super_user`, `staff`) VALUES ("'.$user_email.'","'.$user_fname.'","'.$user_lname.'",'.$staff.','.$super_user.')';
         mysql_query($insert_query, $conn) or die(mysql_error());
         header('Location: '.'index.php');
      }
      else{
         while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
         {
            if($staff =$row['staff'])
            {
               echo "staff";
            }
            elseif($super_user != $row['super_user'])
            {
               header('Location: '.'examples/dashboard.php');  
            }
            else
            {
               header('Location: '.'index.php');
            }
         }
      }
   }
   catch( Exception $e ){
      echo "Ooophs, we got an error: " . $e->getMessage();
   }
?>