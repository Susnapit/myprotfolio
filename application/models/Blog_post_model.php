<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_post_model extends CI_Model {
public function __construct()
{
parent::__construct();
}
public function post_blog() {


$data=array(
'blog_title'=>$this->input->post('blog_title'),
'blog_subject'=>$this->input->post('blog_subject'),
'image'=>($this->input->post('image')),
'blog_description'=>$this->input->post('blog_description'),
);
$this->db->insert('blog_post',$data);
}

}