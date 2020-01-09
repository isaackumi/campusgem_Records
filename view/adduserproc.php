<?php
session_start();
//include the controller
require('../controllers/userController.php');
//check if submit button was click
if (isset($_GET['uadd'])) {
	//grab form data and store in variable
	$pname = $_GET['username'];
	$pemail = $_GET['email'];
	$pphone = $_GET['phone'];
	$institution = $_GET['institution'];
  $fb = $_GET['fb'];
	$profile = $_GET['profile'];
	$year = date('Y');
	//call function to add
	$ret =  addcontactctrl($pname, $pemail, $pphone, $institution,$fb,$year,$profile);
	//echo result
	if ($ret) {
		 header('Location: ../index.php');
    	$_SESSION['response'] = 'New contact Inserted!';
	}else{
		 header('Location: ../index.php');
    	$_SESSION['response'] = 'Error Inserting record!';
	}
}
//check if submit button was click
if (isset($_GET['update'])) {
	//grab form data and store in variable
	$pid = $_GET['id'];
	$pname = $_GET['uname'];
	$pemail = $_GET['uemail'];
	$pphone = $_GET['uphone'];
	$pdob = $_GET['udob'];
	//call function to add
	$ret =  update_contact_ctrl($pid,$pname, $pemail, $pphone, $pdob);
	//echo result
	if ($ret) {
		 header('Location: listcontact.php');
    	$_SESSION['update_response'] = 'Contact Updated!';
	}else{
		 header('Location: listcontact.php');
    	$_SESSION['update_response'] = 'Error Occured!';
	}
}
?>
