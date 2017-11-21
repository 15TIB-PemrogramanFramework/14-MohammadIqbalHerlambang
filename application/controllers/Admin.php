<?php 

	class Admin extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Admin_model');
			$this->load->model('Customer_model');
		}
		function index()
		{
			$data['customer']=$this->Customer_model->ambil_data_customer();
			$this->load->view('Admin/Home',$data);
		}
	}

 ?>