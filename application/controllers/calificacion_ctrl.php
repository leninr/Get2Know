<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calificacion_ctrl extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('calificacion_model');
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
		$this->load->view('Vista/IngresarCalificacion_view');
		
	}

	public function obtenerCalificacionC(){
		$data['Calificaciones'] = $this->calificacion_model->obtenerCalificacionM();
		$this->load->view('Vista/MostCalificacion_view',$data);
	}

	public function EditarCalificacionC(){
		$data['id'] = $this->uri->segment(3);
		$data['idcom'] = $this->uri->segment(4);
		$data['idPre'] = $this->uri->segment(5);
		$data['Calificaciones'] = $this->calificacion_model->obtenerCalificacionUpdate($data['id'],$data['idcom'],$this->uri->segment(5));
		$this->load->view('Vista/UpdateCalificacion_view',$data);

	}

	public function actualizarCalificacionC(){
		$data['id'] = $this->uri->segment(3);
		$data['idcom'] = $this->uri->segment(4);
		$data['idpreg'] = 1;
		$data = array(
			'idcontent' => $this->input->post('idcontent'), 
			'idusuario' => $this->input->post('idusuario'), 
			'idPregunta' => $this->input->post('idPregunta'),
			'Calificacion' => $this->input->post('Calificacion')
			);
		$this->calificacion_model->actualizarCalificacionM($this->uri->segment(3),$this->uri->segment(4),$this->uri->segment(5),$data);
		$this->obtenerCalificacionC();

	}

	public function borrarCalificacionC(){
		
		$this->calificacion_model->CalificacionEliminar($this->uri->segment(3),$this->uri->segment(4),$this->uri->segment(5));
		$this->obtenerCalificacionC();
	}

	public function InsertarCalificacionC(){
		$data = array(
			'idcontent' => $this->input->post('idcontent'), 
			'idusuario' => $this->input->post('idusuario'), 
			'idPregunta' => $this->input->post('idPregunta'),
			'Calificacion' => $this->input->post('Calificacion')	
			);

		$this->calificacion_model->InsertarCalificacionM($data);
		$this->obtenerCalificacionC();
		//$this->load->view('Vista/usuariosIngresar_view');
	}
}
