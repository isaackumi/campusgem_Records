<?php
session_start();
require('../controllers/userController.php');
 $id = $_GET['deleteId'];
$delete = delete_contact_ctrl($id);
if ($delete) {
    header('Location: ../dashboard/index.php');
    $_SESSION['response'] = 'Record deleted succesfully!';
} else {
     header('Location: ../dashboard/index.php');
    $_SESSION['response'] = 'Error deleting contact!';
}
?>
