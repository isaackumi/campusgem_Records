<?php
//connect to database class
require("../settings/db_class.php");


class login_class extends db_connection
{

	public function verify_login($e){
		//a query to get all login information base on email
		$sql = "SELECT * FROM admin WHERE email='$e'";

		//execute the query and return boolean
		return $this->db_query($sql);
	}
}

?>
