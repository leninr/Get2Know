<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pregunta_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function InsertarPreguntaM($data){
		$this->db->insert('tblpregunta', array(
			'idCategoria' => $data['idCategoria'],
			'PreguntaC' => $data['PreguntaC']
			));
	}

	function obtenerPreguntaM(){
		$query = $this->db->get('tblpregunta');
		if($query->num_rows() > 0) return $query->result_array();
		else return false;
	}

	function obtenerPreguntaUpdate($id){

		$array = array('idPregunta = ' => $id);

		$this->db->where('idPregunta', $id);
		$query = $this->db->get_where('tblpregunta');
		if($query->num_rows() > 0) return $query->result_array()/*->result_array()*/;
		else return false;
	}

	function borrarPreguntaM($iduser){
		$array = array('idPregunta = ' => $iduser);
		$this->db->delete('tblpregunta',$array);
		/*
		$query = "DELETE FROM tblusuario WHERE idusuario = $iduser";
		$this->db->query($query);
		*/
	}

	function actualizarPreguntaM($iduser, $data){
		$datos = array(
			'idCategoria' => $data['idCategoria'],
			'PreguntaC' => $data['PreguntaC']
			);
		$query = $this->db->where('idPregunta',$iduser);
		$actua = $this->db->update('tblpregunta',$datos);
	}

	function BuscarporCatePreguntaM($idCate){

		$array = array('idCategoria = ' => $idCate);

		$query = $this->db->get_where('tblpregunta',$array);
		if($query->num_rows() > 0) return $query->result_array()/*->result_array()*/;
		else return false;
	}

	function obtenerPreguntaFiltradoUserContM($idcontent,$idusuario){
		$this->db->where('idusuario',$idusuario);
		$this->db->where('idcontent',$idcontent);
		$query = $this->db->get('tblpregunta');
		if($query->num_rows() > 0) return $query->result_array();
		else return false;
	}

}



?>
