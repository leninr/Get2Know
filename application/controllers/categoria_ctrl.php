<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoria_ctrl extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('categoria_model');
	}


	public function index()
	{
		$this->load->view('Vista/categoriaIngresar_view');

	}

	public function obtenerCategoriaC(){
		$data['Categorias'] = $this->categoria_model->obtenerCategoriaM();
		$this->load->view('Vista/MostCategoria_view',$data);
	}

	public function EditarCategoriaC(){
		$data['id'] = $this->uri->segment(3);
		$data['Categorias'] = $this->categoria_model->EditarCategoriaM($data['id']);
		$this->load->view('Vista/UpdateCategoria_view',$data);

	}

	public function actualizarCategoriaC(){

		if ($this->input->post('Esmusica') == null)
		{
			$valesMusica = 0;
		}else {
			$valesMusica = 1;
		}

		$data = array(
			'NomCategoria' => $this->input->post('NomCategoria'),
			'Esmusica' => $this->input->post('Esmusica')
			);
		$this->categoria_model->actualizarCategoriaM($this->uri->segment(3),$data);
		$this->obtenerCategoriaC();

	}

	public function borrarCategoriaC(){
		$id = $this->uri->segment(3);
		$this->categoria_model->borrarCategoriaM($id);
		$this->obtenerCategoriaC();
	}

	public function InsertarCategoriaC(){
		/*$esmusicvalor = $this->input->post('Esmusica');*/
		if ($this->input->post('Esmusica') == null)
		{
			$valesMusica = 0;
		}else {
			$valesMusica = 1;
		}
		$data = array(
			'NomCategoria' => $this->input->post('NomCategoria')
			);

		$this->categoria_model->InsertarCategoriaM($data);
		$this->load->model('content_model','b');
		$this->load->model('User_model', 'u');
		$this->load->model('categoria_model', 'c');
		$this->load->view('Vista/MostCont_view');
	}
}
?>
