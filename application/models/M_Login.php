<?php 
class M_Login extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	} 
	public function checkUsernameExists($username)
	{
		$query = $this->db->query('Select count(*) from users where username = "'.$username.'"');

		$num = $query->num_rows();
		if($num)
			return true;
		else 
			return false;	
	}
	public function getPasswordHash($username)
	{
		$name = $this->db->query('Select password from users where username="'.$username.'"')->row_array();
		return $name['password'];
	}
}
?>