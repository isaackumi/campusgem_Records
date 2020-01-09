<?php
//for header redirection
ob_start();

//start session - needed to capture login information
session_start();

//connnect to the controller
require("../controllers/logincontroller.php");


//check if login button was clicked
if (isset($_POST['login'])) {

	//grab form details
	$email = $_POST['email'];
	$pass = $_POST['password'];

	//check if email exist
	$check_login = get_login_fxn($email);

	if ($check_login) {

		//get password from database
		$name = $check_login[0]['username'];
		$_SESSION['admin_username']= $name;

		//redirection to home page
		header('Location: ../dashboard/index.php');



	}
}

?>
