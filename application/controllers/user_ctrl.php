<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_ctrl extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('User_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Vista/usuariosIngresar_view');

	}

	public function obtenerdatos(){
		$data['usuarios'] = $this->User_model->obtenerUsuarios();
		$this->load->view('Vista/usuarios_view',$data);
	}

	public function EditarUsuarioC(){
		$data['id'] = $this->uri->segment(3);
		$data['usuarios'] = $this->User_model->obtenerUsuariosUpdate($data['id']);
		$this->load->view('Vista/usuariosUpdate',$data);

	}

	public function ActualizarUsuarioC(){
		$data = array(
			'UsuarioName' => $this->input->post('UsuarioName'),
			'Password' => $this->input->post('Password'),
			'Nombre' => $this->input->post('Nombre'),
			'Apellido' => $this->input->post('Apellido'),
			'email' => $this->input->post('email'),
			'sobre' => $this->input->post('sobre')
			);
		$this->User_model->actualizarUsuarioM($this->uri->segment(3),$data);


		$usuario = $this->User_model->LogInM($this->input->post('UsuarioName'),$this->input->post('Password'));

		if($usuario/*->num_rows()==1*/)
		{
				$dats = array(
					'username'=> $this->input->post('UsuarioName'),
					//'idusuario' => $idusuario,
					'is_logged_in'=> TRUE
				);
				$this->session->set_userdata($dats);
				$this->session->set_userdata($usuario);
		}

		$this->load->model('content_model','b');
		$this->load->model('User_model', 'u');
		$this->load->model('categoria_model', 'c');
		$this->load->view('Vista/MostCont_view');

	}

	public function borrarUsuarioC(){
		$id = $this->uri->segment(3);
		$this->User_model->UsuariosEliminar($id);
		$this->obtenerdatos();
	}

	public function InsertarUsuarioC(){
		$data = array(
			'UsuarioName' => $this->input->post('UsuarioName'),
			'Password' => $this->input->post('Password'),
			'Nombre' => $this->input->post('Nombre'),
			'Apellido' => $this->input->post('Apellido'),
			'email' => $this->input->post('email'),
			'sobre' => $this->input->post('sobre')
			);

		$this->User_model->InsertarUsuarioM($data);
		$this->load->view('Vista/usuariosIngresar_view');
	}
}
