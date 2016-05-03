<?php
/**
* 
*/
class user_view_blog extends CI_Controller
{
	
	public function index()
	{
		$this->load->database();
		$this->load->model('Post_list_model');
		$data['h']=$this->Post_list_model->post_list();
		$this->load->view('Blog',$data);
	}
}


?>