<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_ctrl extends CI_Controller {

		function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('Vista/login_view');

	}

	/*public function validate(){

		$userNa = $this->input->post('username');
		$pass = $this->input->post('password');

		if($userNa)
		{

			$usuario = $this->User_model->LogInM($userNa,$pass);
			$idusuario = $this->User_model->ReturnIduserM($userNa,$pass);

			if($usuario)
			{
				$data = array(
					'username'=> $userNa,
					'idusuario' => $idusuario,
					'nombre' => $usuario,
					'is_logged_in'=> TRUE
				);
				$this->session->set_userdata('ci_session',$data);
				$this->session->set_userdata('user',$usuario);
				redirect(base_url().'content_ctrl/MostrarContenido');
			}
			else
			{
				$this->index();
			}
		}

	}*/

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
					//'idusuario' => $idusuario,
					'is_logged_in'=> TRUE
				);
				$this->session->set_userdata($data);
				$this->session->set_userdata($usuario);
				redirect(base_url().'content_ctrl/MostrarContenido');
			}
			else
			{
				$this->index();
			}
		}

	}

	public function logout(){

		$this->session->sess_destroy();

		$this->index();
	}
}
