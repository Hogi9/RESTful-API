<?php 
/**
  * 
  */
 class karyawan extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		//M_karyawan = nama file model
 		//dbkaryawan = inisialisasi variable
 		$this->load->model('M_karyawan','dbkaryawan');
 		$this->load->model('M_admin','dbadmin');
 	}

 	public function index()
 	{
 		$this->load->view('v_login'); 
 	}

 	public function lihat()
 	{
 		if($this->session->userdata('sessionuser')==NULL){
 			redirect('karyawan');
 		}

		//karyawan = inisialisasi variable 
 		$data['karyawan']= $this->dbkaryawan->get_data();
 		$this->load->view('V_karyawan',$data); 	
 	}

 	public function insert()
 	{
 		if($this->session->userdata('sessionuser')==NULL){
 			redirect('karyawan');
 		}

 		if ($this->input->post()) {
 			//insert ke database
 			$data = $this->input->post();
 			//untuk mencegah tombol cancel melakukan input data null 
 			if($data['nama']==NULL || $data['alamat'] == NULL || $data['telp'] == NULL || $data['gaji'] == NULL){
 				redirect('karyawan/lihat');
 			}
 			//memanggil model
 			$this->dbkaryawan->insert_data($data);
 			//karyawan = redirect ke controller ini kembali
 			redirect('karyawan/lihat');
 		}else{
 			$this->load->view('v_insert');
 		}
 	}

 	public function update($id)
 	{
 		if($this->session->userdata('sessionuser')==NULL){
 			redirect('karyawan');
 		}

 		if ($id!=NULL){
 			//menampilkan data yang akan diupdate
 			$data['karyawan'] = $this->dbkaryawan->get_specific($id);
 			$this->load->view('v_update',$data);
 		}
 	}

 	public function store_data(){
 		if($this->session->userdata('sessionuser')==NULL){
 			redirect('karyawan');
 		}

 		// //storing / update data
 		if ($this->input->post()) {
 				$input = $this->input->post();
 				$this->dbkaryawan->update_data($input);
 				redirect('karyawan/lihat');
 			}
 	}

 	public function delete($id)
 	{
 		if($this->session->userdata('sessionuser')==NULL){
 			redirect('karyawan');
 		}

 		if ($id!=NULL){
 			//delete data
 			$this->dbkaryawan->delete_data($id);
 			redirect('karyawan/lihat');
 		}
 	}

 	public function do_login()
 	{
 		if($this->input->post()){
 			$input = $this->input->post();
 			if($this->dbadmin->login($input)){
 				if($this->session->userdata('sessionuser')){
 					redirect('karyawan/lihat');
 				}
 			}else{
 				redirect('karyawan');
 			}
 		}
 	}

 	public function destroy_sess()
 	{
 		$this->session->sess_destroy();
 		redirect('karyawan');
 	}
 } ?>