<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Comment_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function comment() {


		$data=array(
			'comment'=>$this->input->post('comment'),
			);
		$this->db->insert('comment',$data);
	}

}