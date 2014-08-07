<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->view('headers');
		$this->load->helper('form');
		$this->load->model('admin_model');
	}
	
	public function index()
	{
		//var_dump($data['categorId']);
		$data['projects'] = $this->admin_model->getProjects();

		$this->load->view('admin/index',$data);
		$this->load->view('footer');		
	}

	public function adminPortfolio()
	{
		//var_dump($data['categorId']);
		$data['projects'] = $this->admin_model->getProjects();

		$this->load->view('admin/index',$data);
		$this->load->view('footer');		
	}
	
	public function delete(){

		$id = $this->input->post('id');
		
		$this->admin_model->delete($id);
		$data['projects'] = $this->admin_model->getProjects();
		$this->load->view('admin/index',$data);
		$this->load->view('footer');
	}

	//to view newReference we need the categories to show them
	public function newReference(){
	
		$data['categories'] = $this->admin_model->getCategories();	

		$this->load->view('admin/newReference',$data);
		$this->load->view('footer');
	}

	//create a projekt in DB
	public function createNewReference(){

		$id = $this->input->post('id');
		
		//$array = array('title' => $this->input->post('title'), 'text' => $this->input->post('description'), 'thumbnail_url' => $this->input->post('id'), 'url' => $this->input->post('id');
		$data = array(
				'title' 		=> $this->input->post('title'), 
				'text' 			=> $this->input->post('description'),
				'thumbnail_url' => 'img/thumbnail/'.$this->input->post('thumbnail'),
				'url' 			=> $this->input->post('url'),
				'test'			=> '1',
				'year' 			=> $this->input->post('year')
				);
		$newReferenceID = $this->admin_model->createNewReference($data);
		$img = 'img/thumbnail/'.$this->input->post('thumbnail');
		//var_dump($img);

		$multiCategories = $this->input->post('categories');
		$this->insertItemCategories($multiCategories, $newReferenceID);		

		$data['categories'] = $this->admin_model->getCategories();
		$this->load->view('admin/newReference',$data);
		$this->load->view('footer');
	}

	//insert categories Id and item id into the junction table cat_item
	private function insertItemCategories($multiCategories, $newReferenceID)
	{
		foreach ($multiCategories as $catId) {

			$this->admin_model->insertItemCategories($catId,$newReferenceID);
		}
	}

	public function insertCategory()
	{
		$newCat = $this->input->post('addCategory');
		//var_dump($newCat);
		$this->admin_model->insertCategory($newCat);	
		$data['categories'] = $this->admin_model->getCategories();	

		$this->load->view('admin/newReference',$data);
		$this->load->view('footer');
	}

	public function edit()
	{
		$newCat = $this->input->post('addCategory');
		$id = $this->input->post('id');
		$data['item'] = $this->admin_model->getProject($id);
		$categories = $this->admin_model->getCategories();

		//complement
		$data['categories'] = $this->checkRelatedCategory($categories, $data['item']);
		//var_dump($data['categories'] );
		$this->load->view('admin/edit',$data);
		$this->load->view('footer');
	}

	public function updateReference()
	{
		$data = array(
                'title' 		=> $this->input->post('title'), 
				'text' 			=> $this->input->post('description'),
				'thumbnail_url' => 'img/thumbnail/'.$this->input->post('thumbnail'),
				'url' 			=> $this->input->post('url'),
				'year' 			=> $this->input->post('year')
            );

		$id = $this->input->post('id');
		//var_dump($id);
		$this->admin_model->updateReference($id, $data);		

		$this->deleteRelatedCategories($id);

		$multiCategories = $this->input->post('categories');
		$this->insertItemCategories($multiCategories, $id);	

		$data['item'] = $this->admin_model->getProject($id);
		$categories = $this->admin_model->getCategories();

		$data['categories'] = $this->checkRelatedCategory($categories, $data['item']);

		$this->load->view('admin/edit',$data);
		$this->load->view('footer');
	}

	private function deleteRelatedCategories($referenceID)
	{
			$this->admin_model->deleteRelatedCategories($referenceID);
		
	}

	//this is to check all categories the project has to check the checkboxes into the view, the info pushes like true or false
	public function checkRelatedCategory($cat, $item)
	{
		foreach ($cat as $i=>$c) 
		{			
			$checked = $this->admin_model->checkRelatedCategory($c['id'],$item[0]['id']);
			$cat[$i]['checked'] = $checked;
			 //array('checked'=> $checked);
			
		}		
		return $cat;
	}

	



}