<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function InsertarUsuarioM($data){
		$this->db->insert('tblusuario', array(
			'UsuarioName' => $data['UsuarioName'],
			'Password' => $data['Password'],
			'Nombre' => $data['Nombre'],
			'Apellido' => $data['Apellido'],
			'email' => $data['email'],
			'sobre' => $data['sobre']
			));
	}

	function obtenerUsuarios(){
		$query = $this->db->get('tblusuario');
		if($query->num_rows() > 0) return $query->result_array();
		else return false;
	}

	function obtenerUsuariosUpdate($iduser){
		$query = $this->db->get_where('tblusuario',
		array('idusuario' => $iduser));
		if($query->num_rows() > 0) return $query/*->result_array()*/;
		else return false;
	}

	function UsuariosEliminar($iduser){
		$this->db->delete('tblusuario',array('idusuario'=>$iduser));
		/*
		$query = "DELETE FROM tblusuario WHERE idusuario = $iduser";
		$this->db->query($query);
		*/
	}

	function actualizarUsuarioM($iduser,$data){
		$datos = array(
			'UsuarioName' => $data['UsuarioName'],
			'Password' => $data['Password'],
			'Nombre' => $data['Nombre'],
			'Apellido' => $data['Apellido'],
			'email' => $data['email'],
			'sobre' => $data['sobre']
			);
		$query = $this->db->where('idusuario',$iduser);
		$actua = $this->db->update('tblusuario',$datos);
	}

	function LogInM($username,$password){
		
		$this->db->where('UsuarioName',$username);
		$this->db->where('Password',$password);
		$query=$this->db->get('tblusuario');

		if($query->num_rows() > 0) return $query->row()/*->result_array()*/;
		else return false;
	}

	function ReturnIduserM($username,$password){
		

		 $query = $this->db->select('idusuario')->from('tblusuario')->where('UsuarioName',$username)->where('Password',$password)->get();
    	return $query->row();
	}

}

?>