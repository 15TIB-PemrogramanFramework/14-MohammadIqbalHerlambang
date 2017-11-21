<?php 
class Sign_up extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Signup_model');
	}
	function index()
	{
		if(!$this->input->post())
		{
			$this->load->view('sign_up');
		}
		else
		{
			 $data=array(
				'nama_customer'			=>$this->input->post('username'),
				'password_customer'		=>$this->input->post('password'),
				'alamat_customer'		=>$this->input->post('alamat'),
				'notelp_customer'		=>$this->input->post('nohp'),
			);
			$this->Signup_model->signup_customer($data);
			redirect('/');
		}
	}
}
?>