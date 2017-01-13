<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_ctrl extends CI_Controller {

		function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('User_model');
		//$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('Vista/login_view');
		
	}

	public function validate(){
		
		$userNa = $this->input->post('username');
		$pass = $this->input->post('password');

		if($userNa)
		{

			$usuario = $this->User_model->LogInM($userNa,$pass);
			$idusuario = $this->User_model->ReturnIduserM($userNa,$pass);

			if($usuario/*->num_rows()==1*/)
			{
				$data = array(
					'username'=> $userNa,
					'idusuario' => $idusuario,
					'is_logged_in'=> TRUE
				);
				$this->session->set_userdata('ci_session',$data);
				redirect(base_url().'content_ctrl/MostrarContenido');
			}
			else
			{
				$this->index();
			}
		}
		
	}

	public function logout(){

		$this->session->unset_userdata('ci_session');
		$this->index();
	}
}
