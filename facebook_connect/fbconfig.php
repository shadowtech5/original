<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '1878966485648895','2824d912d645dcafa9a3dc1b6f3f7764' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://bookmyanchorss.com/original/facebook_connect/fbconfig.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me?fields=email,first_name,last_name' );
  $response = $request->execute();
  // get response

  $graphObject = $response->getGraphObject();
  $user_fname = $graphObject->getProperty('first_name'); // To Get Facebook full name
  $user_email = $graphObject->getProperty('email');    // To Get Facebook email ID
  $user_lname = $graphObject->getProperty('last_name');
  $staff = 0;
  $super_user = 0;
  echo "----------------->".$user_lname;
  echo "----------------->".$user_fname;
  echo"--------------->".$user_email;
	// include('../db_connnection.php');
 //  $sql = 'SELECT * from admin where username ="'.(string)$user_email.'"';
 //  $retval = mysql_query( $sql, $conn );
 //  if(! $retval ) 
 //  {
 //     die('Could not get data: ' . mysql_error());
 //  }
 //  if(!isset($_COOKIE['user_email']))
 //  {
 //     setcookie("user_email", $user_email, time() + 3600);  
 //  }
 //  if(mysql_num_rows($retval)==0){
 //     $insert_query = 'INSERT INTO `admin`(`username`, `first_name`, `last_name`, `super_user`, `staff`) VALUES ("'.$user_email.'","'.$user_fname.'","'.$user_lname.'",'.$staff.','.$super_user.')';
 //     mysql_query($insert_query, $conn) or die(mysql_error());
 //     header('Location: '.'bookmyanchors.com/original/index.php');
 //  }
 //  else{
 //     while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
 //     {
 //        if($staff =$row['staff'])
 //        {
 //           echo "staff";
 //        }
 //        elseif($super_user != $row['super_user'])
 //        {
 //           header('Location: '.'test.php');  
 //        }
 //        else
 //        {
 //          header('Location: '.'../index.php');
 //        }
 //     }
 //  }
} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
?>