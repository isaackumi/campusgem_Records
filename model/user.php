<?php
//include the database class
require('../settings/db_class.php');
/**
 *
 */
class person_class extends db_connection
{
	//properties
	public $user_id = null;
	public $user_name = null;
	//method for insert
	public function addcontact_mthd($a, $b, $c, $d,$e,$f,$g,$h){
		//write the query
		$sql = "INSERT INTO `user`(`first_name`,`last_name`, `email`, `contact`, `institution`,`facebook`,`year`,`profile`) VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h')";
		//run the query
		return $this->db_query($sql);
	}

	public function display_all_contact_mthd(){
		//write the sql for select
		$sql = "SELECT * FROM user";
		//run the sql execution
		return $this->db_query($sql);
	}

	public function delete_contact_mthd($a){
		//write the sql for select
		$sql = "DELETE
					 FROM user
				WHERE user_id='$a'";
		//run the sql execution
		return $this->db_query($sql);
	}
	public function getUserById($id){
		$sql = "SELECT *
					FROM user
				WHERE `user_id`='$id'";
		//run the sql execution
		return $this->db_query($sql);
	}


	public function update_contact_mthd($id,$a, $b, $c, $d,$e,$f,$g,$h){
		//write the sql for select
		$sql = "UPDATE studentlist
					SET `pname`='$a',
						`email`='$b',
						`pcontact`='$c',
						`pdob`='$d'
					WHERE pid='$id'";
		//run the sql execution
		return $this->db_query($sql);
	}
}
?>
