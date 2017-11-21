<?php 
/**
* 
*/
class Aksesoris_model extends CI_Model
	{
	public $aksesoris='aksesoris';
	public $id_aksesoris = 'id_aksesoris';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}
	function ambil_aksesoris()
	{
		$this->db->select('*');
		$this->db->order_by($this->id_aksesoris,$this->order);
		return $this->db->get($this->aksesoris)->result();
	}
	function delete_aksesoris($id_aksesoris)
	{
		$this->db->where('id_aksesoris',$id_aksesoris);
		$this->db->delete($this->aksesoris);
	}
	function tambah_data($data)
	{
		return $this->db->insert($this->aksesoris, $data);
	}
	function ambil_aksesoris_id($id_aksesoris){
		$this->db->where($this->id_aksesoris,$id_aksesoris);
		return $this->db->get($this->aksesoris)->row();
	}
	function edit_aksesoris($id_aksesoris, $data){
		$this->db->where($this->id_aksesoris,$id_aksesoris);
		$this->db->update($this->aksesoris,$data);
	}
}
 ?>