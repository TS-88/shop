<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function getAllNews()
	{
		$data = $this->db->get('news');
		return $data->result_array();
	}

	public function addNews($data)
	{
		$this->db->insert('news', $data); 
	}

	public function editNews($data,$id)
	{
		$this->db->update('news', $data,array('id' => $id));
	}

	public function getNewsById($id)
	{

		$query = $this->db->select('*')->where('id',$id)->get('news');
		return $query->result_array();
	}

	public function updateNewsById($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('news', $data); 
	}

	public function deleteNews($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->delete('news'); 
	}

	public function page($limit,$offset)
	{
		$this->db->limit($limit,$offset);
		$this->db->order_by('id','asc');
		$data = $this->db->get('news');
		return $data->result_array();
	}

	
}
