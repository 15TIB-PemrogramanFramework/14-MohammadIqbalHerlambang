<?php 
/**
* 
*/
class Admin_model extends CI_Model
	{
public $nama_table='admin';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('nama_admin',$username);
		$this->db->where('password_admin',$password);
 		return $this->db->get($this->nama_table)->row();// row untuk mengambil satu data aja.

 	} 
}
 ?>