<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function __construct()
	{	
		parent::__construct();
		$this ->load->database();
		$this->load->library('main_model');
		
	}

	public function getProjects()
	{
		return $this->main_model->getProjects();
	}

	public function getProject($id)
	{
		return $this->main_model->getProject($id);		
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('item');

		$this->db->where('item_id',$id);
		$this->db->delete('cat_item');
	}

	public function getCategories()
	{
		return $this->main_model->getCategories();
	}

	public function insertCategory($newCat)
	{
		$this->db->set('name',$newCat);
		$this->db->insert('categories');
	}

	public function createNewReference($data)
	{
		$this->db->set($data);
		$this->db->insert('item');
		return $this->db->insert_id();
	}

	public function insertItemCategories($catId,$newReferenceID)
	{
		$data = array('category_id' => $catId, 'item_id' => $newReferenceID);
		$this->db->set($data);
		$this->db->insert('cat_item');
	}

	public function checkRelatedCategory($catId,$itemId)
	{		
		$query = $this->db->get_where('cat_item',array('category_id'	=>$catId,
											        	'item_id'		=>$itemId));

	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}

	public function updateReference($id, $data)
	{		
		$this->db->where('id', $id);
		$this->db->update('item', $data);
	}

	public function deleteRelatedCategories($id)
	{		
		$this->db->where('item_id',$id);		
		$this->db->delete('cat_item');
	}
}