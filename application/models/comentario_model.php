<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comentario_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function InsertarComentarioM($data){
		$this->db->insert('tblcomentario', array(
			'idcontent' => $data['idcontent'],
			'idusuario' => $data['idusuario'],
			'idPregunta' => $data['idPregunta'],
			'Comentario' => $data['Comentario']
			));
	}

	function obtenerComentarios(){
		$query = $this->db->get('tblcomentario');
		if($query->num_rows() > 0) return $query->result_array();
		else return false;
	}

	function obtenerComentarioUpdate($iduser,$idComent,$idPregunta){

		$array = array('idusuario = ' => $iduser, ' idcontent = ' => $idComent, ' idPregunta = ' => $idPregunta);

		$query = $this->db->get_where('tblcomentario',$array);
		if($query->num_rows() > 0) return $query/*->result_array()*/;
		else return false;
	}

	function ComentarioEliminar($iduser,$idComent,$idPregunta){
		$array = array('idusuario = ' => $iduser, ' idcontent = ' => $idComent, ' idPregunta = ' => $idPregunta);
		$this->db->delete('tblcomentario',$array);
		/*
		$query = "DELETE FROM tblusuario WHERE iduscccser";
		$this->db->query($query);
		*/
	}

	function actualizarComentarioM($iduser, $idComent,$idPregunta,$data){
		$datos = array(
			'idcontent' => $data['idcontent'],
			'idusuario' => $data['idusuario'],
			'idPregunta' => $data['idPregunta'],
			'Comentario' => $data['Comentario']
			);
		$query = $this->db->where('idusuario',$iduser);
		$query2 = $this->db->where('idcontent',$idComent);
		$query3 = $this->db->where('idPregunta',$idPregunta);
		$actua = $this->db->update('tblcomentario',$datos);
	}
}

?>