<?php 

class Aksesoris extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Aksesoris_model');
	}
	function index()
	{
		$data['data_aksesoris']=$this->Aksesoris_model->ambil_aksesoris();
		$this->load->view('Admin/Aksesoris',$data);
	}
	public function tambah()
	{
		$data=array(
			'action'			=>site_url('Aksesoris/tambah_aksi'),
			'id_aksesoris'		=>set_value('id_aksesoris'),
			'nama_aksesoris'	=>set_value('nama_aksesoris'),
			'gambar'			=>set_value('gambar'),
			'harga_aksesoris'	=>set_value('harga_aksesoris'),
			'jenis_aksesoris' 	=>set_value('jenis_aksesoris'),
			'button'			=>'Tambah'
		);
		$this->load->view('Admin/Tambah_Aksesoris',$data);
	}

	function tambah_aksi()
	{
		$gambar	=$this->input->post('gambar');
		$encoded_image = base64_encode(file_get_contents(base_url('gambar/'.$gambar)) );
		$data=array(
			'id_aksesoris'		=>$this->input->post('id_aksesoris'), //apa yang diinputkan
			'nama_aksesoris'	=>$this->input->post('nama_aksesoris'),
			'gambar'			=>$encoded_image,
			'harga_aksesoris' 	=>$this->input->post('harga_aksesoris'),
			'jenis_aksesoris'	=>$this->input->post('jenis_aksesoris'),
		);
		$this->Aksesoris_model->tambah_data($data); 
		redirect(site_url('Aksesoris'));
	}

	function edit($id_aksesoris){
		
		$aksesoris=$this->Aksesoris_model->ambil_aksesoris_id($id_aksesoris);
		$data=array(
			'id_aksesoris'		=>set_value('$id_aksesoris', $aksesoris->id_aksesoris), //nama variable yang akan dikirim ke view
			'nama_aksesoris'	=>set_value('$nama_aksesoris', $aksesoris->nama_aksesoris), 
			'gambar'			=>set_value('$gambar', "data:image/jpeg;base64,'.base64_encode($aksesoris->gambar).'"),
			'harga_aksesoris'	=>set_value('$harga_aksesoris', $aksesoris->harga_aksesoris),
			'jenis_aksesoris'	=>set_value('$jenis_aksesoris', $aksesoris->jenis_aksesoris),
			'action'			=>site_url('Aksesoris/edit_aksi'),
			'button'			=>'Edit'
		);
		$this->load->view('Admin/Tambah_Aksesoris',$data);
	}

	function edit_aksi(){
		$gambar	=$this->input->post('gambar');
		$encoded_image = base64_encode(file_get_contents(base_url('gambar/'.$gambar)) );
		$data=array(
			'id_aksesoris'		=>$this->input->post('id_aksesoris'),
			'gambar'			=>$encoded_image,
			'nama_aksesoris'	=>$this->input->post('nama_aksesoris'),
			'jenis_aksesoris'	=>$this->input->post('jenis_aksesoris'),
			'harga_aksesoris'	=>$this->input->post('harga_aksesoris'),
		);
		$id_aksesoris=$this->input->post('id_aksesoris');
		$this->Aksesoris_model->edit_aksesoris($id_aksesoris,$data);
		redirect(site_url('Aksesoris'));
	}
	function delete($id_aksesoris)
	{
		$this->Aksesoris_model->delete_aksesoris($id_aksesoris);
		redirect('Aksesoris');
	}
}

?>