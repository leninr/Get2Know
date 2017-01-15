<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calificacion_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function InsertarCalificacionM($data){
		$this->db->insert('tblcalificacion', array(
			'idcontent' => $data['idcontent'],
			'idusuario' => $data['idusuario'],
			'idPregunta' => $data['idPregunta'],
			'Calificacion' => $data['Calificacion']
			));
	}

	function obtenerCalificacionM(){
		$query = $this->db->get('tblcalificacion');
		if($query->num_rows() > 0) return $query->result_array();
		else return false;
	}

	function obtenerCalificacionUpdate($iduser,$idComent,$idPregunta){

		$array = array('idusuario = ' => $iduser, ' idcontent = ' => $idComent, ' idPregunta = ' => $idPregunta);


		$query = $this->db->get_where('tblcalificacion',$array);
		if($query->num_rows() > 0) return $query/*->result_array()*/;
		else return false;
	}

	function CalificacionEliminar($iduser,$idComent,$idPregunta){
		$array = array('idusuario = ' => $iduser, ' idcontent = ' => $idComent, ' idPregunta = ' => $idPregunta);
		$this->db->delete('tblcalificacion',$array);
		/*
		$query = "DELETE FROM tblusuario WHERE iduscccser";
		$this->db->query($query);
		*/
	}

	function actualizarCalificacionM($iduser, $idComent,$idPregunta,$data){
		$datos = array(
			'idcontent' => $data['idcontent'],
			'idusuario' => $data['idusuario'],
			'idPregunta' => $data['idPregunta'],
			'Calificacion' => $data['Calificacion']
			);
		$query = $this->db->where('idusuario',$iduser);
		$query2 = $this->db->where('idcontent',$idComent);
		$query3 = $this->db->where('idPregunta',$idPregunta);
		$actua = $this->db->update('tblcalificacion',$datos);
	}


	function obtenerCalificacionFilContenido($idcontent){

		$array = array('idcontent = ' => $idcontent);

		$query = $this->db->get_where('tblcalificacion',$array);
		if($query->num_rows() > 0) return $query->result_array()/*->result_array()*/;
		else return false;
	}

	function obtenerSumaCalificacion($idContent){


		$this->db->select_sum('Calificacion');
		$this->db->from('tblcalificacion');
		$this->db->where('idcontent',$idContent);
		$query = $this->db->get();
		return $query->row()->Calificacion;
	}

	function obtenerCountCalificacion($idContent){


		$this->db->where('idcontent', $idContent);
		$num_rows = $this->db->count_all_results('tblcalificacion');
		return $num_rows; // prints the number of rows in table users with account status $i
	}

	function obtenerCalificacionUsuarioPreguntaContenido($idUsuario, $idPregunta, $idContent){

		$this->db->where('idcontent', $idContent);
		$this->db->where('idusuario', $idUsuario);
		$this->db->where('idPregunta', $idPregunta);

		$query = $this->db->get('tblcalificacion');
		if($query->num_rows() > 0) return $query->row_array();
		else return false;
	}

}

?>
