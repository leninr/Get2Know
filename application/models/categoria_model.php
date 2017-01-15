<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoria_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function InsertarCategoriaM($data){
			$this->db->insert('tblcategoria', array(
			'NomCategoria' => $data['NomCategoria'],
			'Esmusica' => $data['Esmusica']
			));
	}

	function obtenerCategoriaM(){
		$query = $this->db->get('tblcategoria');
		if($query->num_rows() > 0) return $query->result_array();
		else return false;
	}

	function EditarCategoriaM($id){

		$array = array('idCategoria = ' => $id);

		$query = $this->db->get_where('tblcategoria',$array);
		if($query->num_rows() > 0) return $query/*->result_array()*/;
		else return false;
	}

	function borrarCategoriaM($iduser){
		$array = array('idCategoria = ' => $iduser);
		$this->db->delete('tblcategoria',$array);
	}

	function actualizarCategoriaM($id,$data){
		$datos = array(
			'NomCategoria' => $data['NomCategoria'],
			'Esmusica' => $data['Esmusica']
			);
		$query = $this->db->where('idCategoria',$id);
		$actua = $this->db->update('tblcategoria',$datos);
	}


	function findById($id){

		$this->db->select('*');
		$this->db->where('idCategoria',$id);
		$this->db->from('tblcategoria');
		$query=$this->db->get();

		if($query->num_rows() > 0) return $query->result();
		else return false;
	}

	function obtenerCategoriaParaDropdownM(){
		$query = $this->db->get('tblcategoria');
		if($query->num_rows() > 0) return $query->result();
		else return false;
	}

}


?>
