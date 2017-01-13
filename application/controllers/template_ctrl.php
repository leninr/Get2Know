<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Template_ctrl extends MY_Controller
{
	function __construct(){
		parent:: __construct();
		
	}

	function sample_template($data = NULL){

		if($this->session->userdata('ci_session'))
		{
		$data['content_view'] = 'welcome_message';
		$this->load->view($this->layout, $data);
		}
	}
	
}