<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comentario_ctrl extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('comentario_model');
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
		$this->load->view('Vista/IngresarComentarios_view');
		
	}

	public function obtenerComentariosC(){
		$data['Comentarios'] = $this->comentario_model->obtenerComentarios();
		$this->load->view('Vista/MostComentarios_view',$data);
	}

	public function EditarComentarioC(){
		$data['id'] = $this->uri->segment(3);
		$data['idcom'] = $this->uri->segment(4);
		$data['idPre'] = $this->uri->segment(5);
		$data['Comentarios'] = $this->comentario_model->obtenerComentarioUpdate($data['id'],$data['idcom'],$this->uri->segment(5));
		$this->load->view('Vista/UpdateComentarios_view',$data);

	}

	public function actualizarComentarioC(){
		$data['id'] = $this->uri->segment(3);
		$data['idcom'] = $this->uri->segment(4);
		$data['idpreg'] = 1;
		$data = array(
			'idcontent' => $this->input->post('idcontent'), 
			'idusuario' => $this->input->post('idusuario'), 
			'idPregunta' => $this->input->post('idPregunta'),
			'Comentario' => $this->input->post('Comentario')
			);
		$this->comentario_model->actualizarComentarioM($this->uri->segment(3),$this->uri->segment(4),$this->uri->segment(5),$data);
		$this->obtenerComentariosC();

	}

	public function borrarComentarioC(){
		
		$this->comentario_model->ComentarioEliminar($this->uri->segment(3),$this->uri->segment(4),$this->uri->segment(5));
		$this->obtenerComentariosC();
	}

	public function InsertarComentarioC(){
		$data = array(
			'idcontent' => $this->input->post('idcontent'), 
			'idusuario' => $this->input->post('idusuario'), 
			'idPregunta' => $this->input->post('idPregunta'),
			'Comentario' => $this->input->post('Comentario')	
			);

		$this->comentario_model->InsertarComentarioM($data);
		$this->obtenerComentariosC();
		//$this->load->view('Vista/usuariosIngresar_view');
	}
}
