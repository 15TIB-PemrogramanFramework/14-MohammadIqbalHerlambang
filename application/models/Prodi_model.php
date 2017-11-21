<?php 

/**
 * 
 */
 class Prodi_model extends CI_Model
 {
 	public $nama_table='prodi';
 	public $id='id_prodi';
 	public $order='ASC';
 		

 	function __construct()
 	{
 		parent::__construct();
 	}
 	function ambil_data($value='')
 	{
 		$this->db->order_by($this->id,$this->order);
 		return $this->db->get($this->nama_table)->result();

 	}
 	
 	function tambah_data($data)//data dalam bentuk array
 	{
 	return $this->db->insert($this->nama_table,$data);
 	}

 	function hapus_data($id)//data dalam bentuk array
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->delete($this->nama_table);
 	}

 	function update_data($data)//data dalam bentuk array
 	{
 	return $this->db->insert($this->nama_table,$data);
 	}

 } 

 ?>