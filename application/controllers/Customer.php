<?php 
/**
* 
*/
class Customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
		$this->load->model('Aksesoris_model');
		$this->load->model('Makanan_model');
		$this->load->model('Pesanan_model');
	}

	public function index(){
		$this->load->view('Customer/Home');
	}


	public function Aksesoris()
	{
		$data['data_aksesoris']	=$this->Aksesoris_model->ambil_aksesoris();
		$this->load->view('Customer/Aksesoris',$data);
	}

	public function Makanan()
	{
		$data['data_makanan']	=$this->Makanan_model->ambil_makanan();
		$this->load->view('Customer/Makanan',$data);	
	}
	function tambah_pesanan($id_aksesoris)
	{
		$aksesoris = $this->Aksesoris_model->ambil_aksesoris_id($id_aksesoris);
		$data=array(
			'action'		=>site_url('Customer/pesanan_aksi'),
			'nama_pesanan'	=>set_value('$nama_pesanan', $aksesoris->nama_aksesoris),
			'harga_pesanan'	=>set_value('$harga_pesanan', $aksesoris->harga_aksesoris),
			'button'		=>'Pesan'
		);
		$this->load->view('Customer/Pesan_Aksesoris',$data);
	}
	function pesanan_aksi()
	{
		$data=array(//apa yang diinputkan
			'nama_pesanan'	=>$this->input->post('nama_pesanan'),
			'harga_pesanan'	=>$this->input->post('harga_pesanan'),
		);
		$this->Pesanan_model->tambah_pesanan($data); 
		redirect(site_url('Customer/Pesanan'));
	}
	function delete1($id_pesanan)
	{
		$this->Pesanan_model->delete($id_pesanan);
		redirect('Customer/Pesanan');
	}
	function tambah_pesanan1($id_makanan)
	{
		$makanan = $this->Makanan_model->ambil_makanan_id($id_makanan);
		$data=array(
			'action'		=>site_url('Customer/pesanan_aksi1'),
			'nama_pesanan'	=>set_value('$nama_pesanan', $makanan->nama_makanan),
			'harga_pesanan'	=>set_value('$harga_pesanan', $makanan->harga_makanan),
			'button'		=>'Pesan'
		);
		$this->load->view('Customer/Pesan_Makanan',$data);
	}
	function pesanan_aksi1()
	{
		$data=array(//apa yang diinputkan
			'nama_pesanan'	=>$this->input->post('nama_pesanan'),
			'harga_pesanan'	=>$this->input->post('harga_pesanan'),
		);
		$this->Pesanan_model->tambah_pesanan($data); 
		redirect(site_url('Customer/Pesanan'));
	}

	public function Pesanan()
	{
		$data['data_pesanan']=$this->Pesanan_model->ambil_data_pesanan();
		$this->load->view('Customer/Pesanan',$data);
	}
	public function tambah()
	{
		$data=array(
			'action'			=>site_url('product/tambah_aksi'),
			'id_customer'		=>set_value('id_customer'),
			'nama_customer'		=>set_value('nama_customer'),
			'password_customer'	=>set_value('password_customer'),
			'notelp_customer'	=>set_value('notelp_customer'),
			'alamat_customer' 	=>set_value('alamat_customer'),
			'button'			=>'Tambah'
		);
		$this->load->view('Admin/Home',$data);
	}
	function tambah_aksi()
	{
		$data=array(
		'id_customer'		=>$this->input->post('id_customer'), //apa yang diinputkan
		'nama_customer'		=>$this->input->post('nama_customer'),
		'password_customer' =>$this->input->post('password_customer'),
		'notelp_customer'	=>$this->input->post('notelp_customer'),
		'alamat_customer'	=>$this->input->post('alamat_customer'),
	);
		$this->Customer_model->tambah_data($data); 
		redirect(site_url('Admin'));
	}
	function delete($id_customer)
	{
		$this->Customer_model->delete_customer($id_customer);
		redirect('Admin');
	}
}
?>
