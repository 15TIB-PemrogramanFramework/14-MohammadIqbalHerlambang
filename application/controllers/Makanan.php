<?php 

class Makanan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Makanan_model');
	}
	function index()
	{
		$data['data_makanan']=$this->Makanan_model->ambil_makanan();
		$this->load->view('Admin/Makanan',$data);
	}
	public function tambah()
	{
		$data=array(
			'action'			=>site_url('Makanan/tambah_aksi'),
			'id_makanan'		=>set_value('id_makanan'),
			'nama_makanan'	=>set_value('nama_makanan'),
			'gambar'			=>set_value('gambar'),
			'harga_makanan'	=>set_value('harga_makanan'),
			'jenis_makanan' 	=>set_value('jenis_makanan'),
			'button'			=>'Tambah'
		);
		$this->load->view('Admin/Tambah_Makanan',$data);
	}

	function tambah_aksi()
	{
		$gambar	=$this->input->post('gambar');
		$encoded_image = base64_encode(file_get_contents(base_url('gambar/'.$gambar)) );
		$data=array(
			'id_makanan'		=>$this->input->post('id_makanan'), //apa yang diinputkan
			'nama_makanan'	=>$this->input->post('nama_makanan'),
			'gambar'			=>$encoded_image,
			'harga_makanan' 	=>$this->input->post('harga_makanan'),
			'jenis_makanan'	=>$this->input->post('jenis_makanan'),
		);
		$this->Makanan_model->tambah_data($data); 
		redirect(site_url('Makanan'));
	}

	function edit($id_makanan){
		
		$makanan=$this->Makanan_model->ambil_makanan_id($id_makanan);
		$data=array(
			'id_makanan'		=>set_value('$id_makanan', $makanan->id_makanan), //nama variable yang akan dikirim ke view
			'nama_makanan'	=>set_value('$nama_makanan', $makanan->nama_makanan), 
			'gambar'			=>set_value('$gambar', "data:image/jpeg;base64,'.base64_encode($makanan->gambar).'"),
			'harga_makanan'	=>set_value('$harga_makanan', $makanan->harga_makanan),
			'jenis_makanan'	=>set_value('$jenis_makanan', $makanan->jenis_makanan),
			'action'			=>site_url('Makanan/edit_aksi'),
			'button'			=>'Edit'
		);
		$this->load->view('Admin/Tambah_Makanan',$data);
	}

	function edit_aksi(){
		$gambar	=$this->input->post('gambar');
		$encoded_image = base64_encode(file_get_contents(base_url('gambar/'.$gambar)) );
		$data=array(
			'id_makanan'		=>$this->input->post('id_makanan'),
			'gambar'			=>$encoded_image,
			'nama_makanan'	=>$this->input->post('nama_makanan'),
			'jenis_makanan'	=>$this->input->post('jenis_makanan'),
			'harga_makanan'	=>$this->input->post('harga_makanan'),
		);
		$id_makanan=$this->input->post('id_makanan');
		$this->Makanan_model->edit_makanan($id_makanan,$data);
		redirect(site_url('Makanan'));
	}
	function delete($id_makanan)
	{
		$this->Makanan_model->delete_makanan($id_makanan);
		redirect('Makanan');
	}
}

?>