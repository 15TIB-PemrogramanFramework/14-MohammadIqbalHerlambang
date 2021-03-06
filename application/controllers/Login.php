<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
		$this->load->model('Admin_model');
	}

	public function index()
	{
		if($this->session->userdata('logined') == true)// userdata itu penampung session. logined nama session && $this->session->userdata('logined')
		{
			redirect('Customer');
		}
		else if($this->session->userdata('admin') == true)
		{
			redirect('Admin');
		}

		if(!$this->input->post())
		{
			$this->load->view('login');
		}
		else
		{

			$cek_login_customer	=$this->Customer_model->cek_login($this->input->post('username'),$this->input->post('password'));
			$cek_login_admin	=$this->Admin_model->cek_login($this->input->post('username'),$this->input->post('password'));

			if(!empty($cek_login_customer))
			{
				$this->session->set_userdata('username',$cek_login_customer->nama_customer); // set untuk me set
				$this->session->set_userdata('logined', true);
				redirect("Customer");
			}
			if(!empty($cek_login_admin)) 
			{
				$this->session->set_userdata('username',$cek_login_admin->nama_admin);
				$this->session->set_userdata('admin', true);
				redirect("Admin");
			}
			else 
			{
				redirect("/");
			}
		}

	} 
	
	function logout()
	{
		$this->session->unset_userdata('logined');// unset itu menghapus isi session di userdata
		redirect("/");
	} 
	function logout_admin()
	{
		$this->session->unset_userdata('admin');
		redirect("/");
	}
	
}



/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */