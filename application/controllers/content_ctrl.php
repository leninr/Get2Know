<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class content_ctrl extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('content_model');
		$this->load->model('pregunta_model');
		$this->load->model('calificacion_model');

	}

	public function index()
	{
		//$this->load->view('Vista/cont_view');
		$this->load->model('categoria_model', 'c');
		$this->load->view('Vista/upload_form', array('error' => ' ' ));
	}

	public function MostrarContenido(){

		if($this->session->userdata('is_logged_in'))
		{
			$this->load->model('content_model','b');

			$this->load->model('User_model', 'u');
			$this->load->model('categoria_model', 'c');
			$this->load->view('Vista/MostCont_view');
		}
		else {
			$this->load->view('Vista/NoLogeado_view');
		}
	}

	public function do_upload()
  {

        	$datoDB = array(
			'idusuario' => $this->session->userdata('idusuario'),
			'idcategoria' => $this->input->post('idcategoria'),
			'nomCont' => $this->input->post('nomCont'),
			'descripCont' => $this->input->post('descripCont'),
			'fechaCont' => date("Y-m-d"),
			'userfile' => $this->input->post('userfile')
			);

                $config['upload_path']          = './file/';
                $config['allowed_types']        = 'gif|jpg|png';
                //$config['max_size']             = 100;
               // $config['max_width']            = 1024;
               // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('Vista/upload_form', $error);
                }
                else
                {

                		$data = array('upload_data' => $this->upload->data());
                        $this->content_model->InsertarContentM($datoDB,$this->upload->data());
                        $this->load->view('Vista/upload_success', $data);
                }
        }

    public function edit(){
    	/*$getrow = $this->db->query("SELECT * FROM tblcontenido WHERE idcontent= '{$idcontent}'");
    	$data['id'] = $this->uri->segment(3);
		$getrow = $this->User_model->obtenerContUpdate($data['id']);
    	$row = $getrow->row();*/


    	$data['id'] = $this->uri->segment(3);
		$data['Conte'] = $this->content_model->obtenerContUpdate($data['id']);
		$this->load->model('categoria_model', 'c');
		$this->load->view('Vista/UpdateContenido_view', $data);

    }

    public function do_edit(){
    	$id = $this->uri->segment(3);
    	$datoDB = array(
			'idusuario' => $this->input->post('idusuario'),
			'idcategoria' => $this->input->post('idcategoria'),
			'nombreCont' => $this->input->post('nomCont'),
			'descripCont' => $this->input->post('descripcion'),
			'fechaCont' => $this->input->post('fechaCont'),
			'userfile' => $this->input->post('userfile')
			);

    	$this->content_model->actualizarContM($id, $datoDB);

    }

     public function do_edit2(){
    	$idcontent = $this->input->post('idcontent');
    	$datoDB = array(
			'idcategoria' => $this->input->post('idcategoria'),
			'nombreCont' => $this->input->post('nombreCont'),
			'descripCont' => $this->input->post('descripCont'),
			);

    	$this->content_model->actualizarContM($idcontent, $datoDB);

    	$this->MostrarContenido();

    	/*if(!empty($_FILES['userfile']['name'][0])){

    		$getpic = $this->db->query
    	}*/


    }

     public function do_editPrueba(){

    	$idcontent = $this->uri->segment(3);
    	$data = array(
			'nombreCont' => $this->input->post('nombreCont')
			);
		$this->db->where('idcontent', $idcontent);
		$this->db->update('tblcontenido',$data);


    }

   public function borrarContC(){
		$id = $this->uri->segment(3);
		$this->content_model->ContEliminar($id);
		$this->MostrarContenido();
	}

	public function InsertarContentC(){

		$status = "";
		$msg = "";
		//$filename = 'userfile';
		$filename = 'userfile';





		if(empty($data['nomCont'])){

			$status = "error";
			$msg = "Please Enter title";
		}
		$this->content_model->InsertarContentM($datoDB);
		/*if($status != "error"){

			$config['upload_path'] = './file';
			$config['allowed_types'] = 'gif|jpg|png';
			//$config['encrypt_name'] = true;

			$this->load->library('upload',$config);


			if(!$this->upload->do_upload('my_file_input_name')){

				$status = 'error';
				$msg  = $this->upload->display_errors('','');

			}else{

				$this->content_model->InsertarContentM($data);

				$dato = array('upload_data' => $this->upload->data());
                $fullpath= $dato['upload_data']['full_path'];
                $file_name = $dato['upload_data']['file_name'];
				/*if($file_id){

					redirect('content_ctrl/index');
				}else{

					unlink($data['full_path']);
					$status = "error";
					$msg = "please try again";
				}*/
		//	}
			//@unlink($_FILES[$data['userfile']]);
		//}
		//echo json_encode(array('status' => $status,'msg'=>$msg ));

	}

	public function MostrarContenidoFiltrado(){

		if($this->session->userdata('is_logged_in'))
		{
	    	$data['id'] = $this->uri->segment(3);
				$data['Conte'] = $this->content_model->obtenerContUpdate($data['id']);


				$data['pregunta'] = $this->pregunta_model->BuscarporCatePreguntaM($data['Conte']->result()[0]->idcategoria);

				$data['CalFil'] = $this->calificacion_model->obtenerCalificacionFilContenido($data['id']);

				$data['sumacal'] = $this->calificacion_model->obtenerSumaCalificacion($data['id']);

				$data['countcal'] = $this->calificacion_model->obtenerCountCalificacion($data['id']);

				if ($data['countcal'] != 0) {

					$data['resultadoCal'] = $data['sumacal'] / $data['countcal'];
				}else
				{
					$data['resultadoCal'] = "no hay preguntas";
				}



				$data['iduser'] = $this->session->userdata('ci_session');


				$this->load->view('Vista/cont_update_view',$data);

    	}
			else {
				$this->load->view('Vista/NoLogeado_view');
			}
    }

    public function actualizarCalificacionConC(){
    	$idcontent = $this->uri->segment(3);
    	$datoDB = $this->input->post('Calificación');


    	$this->content_model->actualizarCalificacionM($idcontent, $datoDB);

    	/*$this->MostrarContenidoFiltrado();*/

    	/*if(!empty($_FILES['userfile']['name'][0])){

    		$getpic = $this->db->query
    	}*/


    }

		public function MostrarContenidoIndividual(){

			if($this->session->userdata('is_logged_in'))
			{
		    	$data['id'] = $this->uri->segment(3);
					$data['Conte'] = $this->content_model->obtenerContUpdate($data['id']);


					$data['pregunta'] = $this->pregunta_model->BuscarporCatePreguntaM($data['Conte']->result()[0]->idcategoria);

					$data['CalFil'] = $this->calificacion_model->obtenerCalificacionFilContenido($data['id']);

					$data['sumacal'] = $this->calificacion_model->obtenerSumaCalificacion($data['id']);

					$data['countcal'] = $this->calificacion_model->obtenerCountCalificacion($data['id']);

					if ($data['countcal'] != 0) {

						$data['resultadoCal'] = $data['sumacal'] / $data['countcal'];
					}else
					{
						$data['resultadoCal'] = "no hay preguntas";
					}



					$data['iduser'] = $this->session->userdata('idusuario');


					$this->load->model('content_model','b');

					$this->load->model('User_model', 'u');
					$this->load->model('categoria_model', 'c');
					$this->load->model('calificacion_model', 'l');
					$this->load->view('Vista/MostContIndividual_view',$data);

	    	}
				else {
					$this->load->view('Vista/NoLogeado_view');
				}
	    }
}
