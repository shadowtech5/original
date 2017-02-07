<?php
	$staff = 0;
  	$super_user = 0;
	session_start();
	define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
	require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
	$fb = new Facebook\Facebook([
	  	'app_id' => '1878966485648895',
	  	'app_secret' => '2824d912d645dcafa9a3dc1b6f3f7764',
	  	'default_graph_version' => 'v2.8',
	]);
	$helper = $fb->getRedirectLoginHelper();
	try {
	  $accessToken = $helper->getAccessToken();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  // When Graph returns an error
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  // When validation fails or other local issues
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	if (isset($accessToken)) {
		// Logged in!
		$_SESSION['facebook_access_token'] = (string) $accessToken;

		// Now you can redirect to another page and use the
		// access token from $_SESSION['facebook_access_token']
		$fb->setDefaultAccessToken($accessToken);
		$response = $fb->get('/me?fields=email,first_name,last_name', $accessToken);
		$userNode = $response->getGraphUser();
		if (isset($userNode['email']))
		{
			$user_email = $userNode['email'];
		}
		else{
			echo "no email";
		}
		$user_fname = $userNode['first_name'];
		$user_lname = $userNode['last_name'];
		
		include('db_connnection.php');
		$sql = 'SELECT * from admin where username ="'.(string)$user_email.'"';
		$retval = mysql_query( $sql, $conn );
		if(! $retval ) 
		{
			die('Could not get data: ' . mysql_error());
		}
		if(!isset($_COOKIE['user_email']))
		{
			setcookie("user_email", $user_email, time() + 3600);  
		}
		if(mysql_num_rows($retval)==0){
			$insert_query = 'INSERT INTO `admin`(`username`, `first_name`, `last_name`, `super_user`, `staff`) VALUES ("'.$user_email.'","'.$user_fname.'","'.$user_lname.'",'.$staff.','.$super_user.')';
			mysql_query($insert_query, $conn) or die(mysql_error());
			header('Location: index.php');
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
				   header('Location: '.'test.php');  
				}
				else
				{
				  header('Location: index.php');
				}
			}
		}
	}
?>