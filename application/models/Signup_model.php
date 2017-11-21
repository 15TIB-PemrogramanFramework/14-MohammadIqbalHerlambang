<?php 

	class Signup_model extends CI_Model
	{
		public $customer = 'customer';

		function __construct()
		{
			parent::__construct();
		}
		function signup_customer($data)
		{
			return $this->db->insert($this->customer, $data);
		}
	}
?>
