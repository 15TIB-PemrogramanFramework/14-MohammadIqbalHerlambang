<?php 

	class Pesanan_model extends CI_Model
	{
		public $pesanan = 'pesanan';
		function __construct()
		{
			parent::__construct();
		}
		function tambah_pesanan($data)
		{
			return $this->db->insert($this->pesanan,$data);
		}
		function ambil_data_pesanan()
		{
			$this->db->select('*');
			return $this->db->get($this->pesanan)->result();
		}
		function delete($id_pesanan)
		{
			$this->db->where('id_pesanan',$id_pesanan);
			$this->db->delete($this->pesanan);
		}
	}

 ?>