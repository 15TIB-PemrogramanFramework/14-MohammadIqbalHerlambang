<?php 
/**
* 
*/
class Makanan_model extends CI_Model
	{
	public $makanan='makanan';
	public $id_makanan = 'id_makanan';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}
	function ambil_makanan()
	{
		$this->db->select('*');
		$this->db->order_by($this->id_makanan,$this->order);
		return $this->db->get($this->makanan)->result();
	}
	function delete_makanan($id_makanan)
	{
		$this->db->where('id_makanan',$id_makanan);
		$this->db->delete($this->makanan);
	}
	function tambah_data($data)
	{
		return $this->db->insert($this->makanan, $data);
	}
	function ambil_makanan_id($id_makanan){
		$this->db->where($this->id_makanan,$id_makanan);
		return $this->db->get($this->makanan)->row();
	}
	function edit_makanan($id_makanan, $data){
		$this->db->where($this->id_makanan,$id_makanan);
		$this->db->update($this->makanan,$data);
	}
}
 ?>