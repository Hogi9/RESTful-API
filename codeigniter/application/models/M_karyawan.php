<?php 
/**
 * 
 */
class M_karyawan extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get_data()
	{
		//karyawan = nama tabel pada db
		return $this->db->get('karyawan')->result();
	}

	public function insert_data($data)
	{
		$sql = "INSERT INTO karyawan (nama,telp,alamat,gaji) values (?,?,?,?)";
		$this->db->query($sql,array($data['nama'],$data['telp'],$data['alamat'],$data['gaji']));
	}

	public function get_specific($id)
	{
		return $this->db
					->where('id_karyawan',$id)
					->get('karyawan')
					->result();
	}
	public function update_data($data)
	{
		$sql = "UPDATE karyawan SET nama = ?, telp = ?, alamat = ?, gaji = ? WHERE id_karyawan = ?";
		$this->db->query($sql, array($data['nama'],$data['telp'],$data['alamat'],$data['gaji'],$data['id']));
	}

	public function delete_data($id)
	{
		$sql = "DELETE FROM karyawan WHERE id_karyawan = ?";
		$this->db->query($sql,$id);
	}
}
 ?>