<?php 
/**
 * 
 */
class M_admin extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	function login($data)
	{
		$sql = "select * from admin where email = ? and password = md5(?)";
		$hasil = $this->db->query($sql,array($data['email'],$data['password']));

		if($hasil->num_rows()>0){
			$data_login = $hasil->row();
			$data_session = array('email'=>$data_login->email,'id'=>$data_login->id_admin);

			$this->session->set_userdata('sessionuser',$data_session);
			return true;
		}else{
			return false;
		}
	}
}
 ?>