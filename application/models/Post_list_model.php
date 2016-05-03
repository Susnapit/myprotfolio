<?php 
/**
* 
*/
class Post_list_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function post_list()
	{
		$query = $this->db->get('blog_post');
		return $query;
	}
}


?>