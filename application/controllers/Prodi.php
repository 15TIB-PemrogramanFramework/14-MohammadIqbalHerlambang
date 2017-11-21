<?php 

/**
 * nama kelas harus sesuai dengan nama file
 */
 class Prodi extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Prodi_model');
 	}
 	function index()
 	{
 		$data['prodi']=$this->Prodi_model->ambil_data();
 		//kurung siku menandakan dia variabel Array dimana didalamnya nama variabelnya.

 		$this->load->view('prodi/prodi_list',$data);
		//print_r($this->Prodi_model->ambil_data());

/*print_r untuk mencetak nilainya*/
	}
	function tambah()
	{
		$data=array(
			'aksi' => site_url('prodi/tambah_aksi'),
			'nama' => set_value('nama'),
			'jurusan' => set_value('jurusan'),
			'akreditasi' => set_value('akreditasi'),
			'id_prodi' => set_value('id_prodi'),
			'button' => 'Add' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('prodi/prodi_form',$data);
	}
	function tambah_aksi()
	{
		$data=array(

			'nama_prodi' => $this->input->post('nama'),
			'jurusan_prodi' => $this->input->post('jurusan'),
			'akreditas_prodi' => $this->input->post('akreditasi'),
			);
					 $this->Prodi_model->tambah_data($data);
redirect(site_url('Prodi'));
	}
	
	function delete($id){
		$this->Prodi_model->hapus_data($id);
		redirect(site_url('Prodi'));
	}
 } 

 ?>