<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_blog extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('Blog_post_model');

    }
	public function index()
	{

		$this->load->view('Blog_post_view');
		

	}
	public function post_blog()
	{
		 $data = array(
                'blog_title' => $this->input->post('blog_title'),
                'blog_subject' => $this->input->post('blog_subject'),
                'image' => $this->input->post('image'),
                'blog_description' => $this->input->post('blog_description'),
      
                
            );	
		 
		
					
	// $config['upload_path'] = './uploads/';
 //    $config['allowed_types'] = 'gif|jpg|png';
 //    $config['max_size'] = '100';
 //    $config['max_width']  = '1024';
 //    $config['max_height']  = '768';
 //    $config['overwrite'] = TRUE;
 //    $config['encrypt_name'] = FALSE;
 //    $config['remove_spaces'] = TRUE;
 //    if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
 //    $this->load->library('upload', $config);
 //    if ( ! $this->upload->do_upload('userfile'))
 //    {
 //        echo 'error';
 //    }
 //    else
 //    {

 //        return array('upload_data' => $this->upload->data());
 //    }
		 
     $this->Blog_post_model->post_blog($data);
    // $this->load->view('Blog_post_view',$data);
     echo "successfully posted";
	
	}
	
}
?>