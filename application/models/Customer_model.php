<?php 
/**
* 
*/
class Customer_model extends CI_Model
	{
	public $nama_table='customer';
	public $id_customer = 'id_customer';
	public $nama_customer = 'nama_customer';
	public $password_customer = 'password_customer';
	public $notelp_customer = 'notelp_customer';
	public $alamat_customer = 'alamat_customer';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('nama_customer',$username);
		$this->db->where('password_customer',$password);
 		return $this->db->get($this->nama_table)->row();// row untuk mengambil satu data aja.

 	}
	function tambah_data()
	{
		return $this->db->insert($this->nama_table, $data);
	}
	function ambil_data_customer()
	{
		return $this->db->get($this->nama_table)->result();
	}
	function delete_customer($id_customer)
	{
		$this->db->where('id_customer',$id_customer);
		$this->db->delete($this->nama_table);
	}


}
 ?>