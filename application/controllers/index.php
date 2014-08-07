<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->view('headers');
		$this->load->view('templates/modal');
		
	}
	
	public function index()
	{
		//$data['string'] = 'Hola Mundo via variable';		
		$this->load->view('index/index');
		
	}

}