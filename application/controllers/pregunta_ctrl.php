<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pregunta_ctrl extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('pregunta_model');
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
		$this->load->model('categoria_model', 'c');
		$this->load->view('Vista/IngresarPregunta_view');

	}

	public function obtenerPreguntaC(){
		$data['Preguntas'] = $this->pregunta_model->obtenerPreguntaM();
		$this->load->view('Vista/MostPregunta_view',$data);
	}

	public function EditarPreguntaC(){
		$data['id'] = $this->uri->segment(3);
		$data['Preguntas'] = $this->pregunta_model->obtenerPreguntaUpdate($data['id']);
		$this->load->view('Vista/UpdatePregunta_view',$data);

	}

	/*public function BuscarporCatePreguntaC($idCate){

		$data['Listcate'] = $this->pregunta_model->BuscarporCatePreguntaM($idCate);


	}*/


	public function actualizarPreguntaC(){
		$data['id'] = $this->uri->segment(3);
		$data['idcom'] = $this->uri->segment(4);
		$data = array(
			'idCategoria' => $this->input->post('idCategoria'),
			'PreguntaC' => $this->input->post('PreguntaC')
			);
		$this->pregunta_model->actualizarPreguntaM($this->uri->segment(3),$data);
		$this->obtenerPreguntaC();

	}

	public function borrarPreguntaC(){
		$id = $this->uri->segment(3);
		$this->pregunta_model->borrarPreguntaM($id);
		$this->obtenerPreguntaC();
	}

	public function InsertarPreguntaC(){
		$data = array(
			'idCategoria' => $this->input->post('idCategoria'),
			'PreguntaC' => $this->input->post('PreguntaC')
			);

		$this->pregunta_model->InsertarPreguntaM($data);
		$this->obtenerPreguntaC();
		//$this->load->view('Vista/usuariosIngresar_view');
	}
}
