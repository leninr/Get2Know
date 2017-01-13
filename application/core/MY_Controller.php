<?php

/**
* 
*/
class MY_Controller extends CI_Controller
{
	public $layout;
	function __construct()
	{
		parent:: __construct();
		$this->layout = 'Template/sample_template_v';
	}
}