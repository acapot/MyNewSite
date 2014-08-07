<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

	function __construct()
	{	
		parent::__construct();
		$this ->load->database();
		
	}

	public function getProjects(){
		$this->db->select('*')->from('item as i');
		
		$this->db->join('cat_item as ci', 'ci.item_id = i.id');
		$this->db->join('categories','categories.id = ci.category_id');
		$this->db->group_by("title");

		$query = $this->db->get();
		//var_dump($query);
		return $query->result_array();
	}

	public function getProject($id){
		$this->db->select('*')->from('item')->where('id', $id);		

		$query = $this->db->get();
		//var_dump($query);
		return $query->result_array();
	}

	public function getCategories()
	{
		$query = $this->db->get('categories');
				
		if($query->num_rows() >0) 
			return $query->result_array();
		
		else return false;

		//$this->db->select('*')->from('categories');

		//$query = $this->db->get();
		//return $query->result_array();
	}
}