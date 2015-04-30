<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');

session_start(); //if a session does not exist it will create. But if already exist won't. HOWEVER you always need to call it. The data is usually stored as a cookie on client.

// isset checks to see if there is a key for the action inputted in URL. 
// if false, doesn't even check $_GET['action'] == 'end'
// if true continues onto $_GET['action'] == 'end'
// purpose of this function is to destroy the session aka logout.
if(isset($_GET['action']) && $_GET['action'] == 'end'){
	//destroys the session by setting $_Session to an empty array.
	$_SESSION = array();
	// destroy the actual session ID. If the client tries to use that cookie again
	// will not evaluate to usable session
	session_destroy();

	//logic that redirects people after they end the session like logging out
	// similar to string functions in c++

	// explode() will split strings where there is a / into an array
	// the second parameter means get all things after oregonstate.edu/.
	// the -1 means grab everything BUT the last thing, in this case the file name.
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	// implode() will combine things in an array into a string with a / behind them.

	// combined with explode get everything but the filename itself.
	$filePath = implode('/',$filePath);

	//sends you back to the server
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/Logout.html", true);
	die();
}

if(session_status() == PHP_SESSION_ACTIVE){
	if(isset($_GET['name'])){
		$_SESSION['name'] = $_GET['name'];
	}

	if(!isset($_SESSION['visits'])){
		$_SESSION['visits'] = 0;
	}

	$_SESSION['visits']++;
	echo "Hi $_SESSION[name], you have visited this page $_SESSION[visits] times. \n";
}
?>