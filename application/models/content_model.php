<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class content_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getalldata(){

		$query = $this->db->get('tblcontenido');
		return $query->result();
	}

	function obtenerContUpdate($idCont){
		$query = $this->db->get_where('tblcontenido',
		array('idcontent' => $idCont));
		if($query->num_rows() > 0) return $query/*->result_array()*/;
		else return false;
	}

	public function InsertarContentM($data,$image_data = array()){

		$this->db->insert('tblcontenido', array(
			'idusuario' => $data['idusuario'],
			'idcategoria' => $data['idcategoria'],
			'nombreCont' => $data['nomCont'],
			'fechaCont' => $data['fechaCont'],
			'descripCont' => $data['descripcion'],
			'Cont' => $image_data['file_name']
			));
		return $this->db->insert_id();
	}

	function actualizarContM($idcontent,$datoDB){
		$data = array(
			'idusuario' => $datoDB['idusuario'],
			'idcategoria' => $datoDB['idcategoria'],
			'nombreCont' => $datoDB['nombreCont'],
			'descripCont' => $datoDB['descripCont']
			);
		$this->db->where('idcontent',$idcontent);
		$this->db->update('tblcontenido',$data);
	}

	 function ContEliminar($iduser){
		$this->db->delete('tblcontenido',array('idcontent'=>$iduser));
		/*
		$query = "DELETE FROM tblusuario WHERE idusuario = $iduser";
		$this->db->query($query);
		*/
	}

	function actualizarCalificacionM($idcontent,$datoDB){
		$data = array(
			'Calificación' => $datoDB
			);
		$this->db->where('idcontent',$idcontent);
		$this->db->update('tblcontenido',$data);
	}
}