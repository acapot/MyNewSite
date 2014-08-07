<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	function __construct()
	{	
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('portfolio_model');
	}


	public function index()
	{
		$data['categories']= $this->portfolio_model->getCategories();

		//var_dump($data['categories']);
		$data['projects'] = $this->portfolio_model->getProjects();
		
		$data['size'] = 4;
		$this->load->view('headers');
		$this->load->view('portfolio/portfolio',$data);
		$this->load->view('footer');		
	}

	

	public function showByCategory()
	{		
		$data['categories']= $this->portfolio_model->getCategories();
		$categorId = $this->input->post('categoryId');
		
		if($categorId == 0) 
			$data['projects'] = $this->portfolio_model->getProjects();
		
		else $data['projects'] = $this->portfolio_model->getProjectsByCategory($categorId);
		$data['size'] = 4;
		$this->load->view('headers');
		$this->load->view('portfolio/portfolio',$data);
		$this->load->view('footer');		
	}

	public function showProject()
	{
		$data['segment']= $this->uri->segment(3);
		$data['project'] = $this->portfolio_model->getProject($data['segment']);
		$this->load->view('headers');
		$this->load->view('portfolio/showProject',$data);
		$this->load->view('footer');		
	}

	public function json(){
		$data['projects'] = $this->portfolio_model->getProjects();
		$data['categories']= $this->portfolio_model->getCategories();
		$this->load->view('portfolio/utils/JSON_collection',$data);				
	}

	
}