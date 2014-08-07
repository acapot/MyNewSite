<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model {

	function __construct()
	{	
		parent::__construct();
		$this ->load->database();
		$this->load->library('main_model');
		
	}

	public function getCategories()
	{
		return $this->main_model->getCategories();
	}

	public function getProjectsByCategory($catId){
		$this->db->select('*')->from('item as i');
		
		$this->db->join('cat_item as ci', 'ci.item_id = i.id');
		$this->db->join('categories','categories.id = ci.category_id')->where('ci.category_id', $catId);
		$this->db->group_by("title");

		$query = $this->db->get();
		//var_dump($query);
		return $query->result_array();
	}
	public function getProjects(){
		return $this->main_model->getProjects();
	}

	public function getProject($id){
		return $this->main_model->getProject($id);		
	}

}