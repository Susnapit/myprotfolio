<?php
class Update_blog extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('update_model');
}
function show_blog_id() {
$id = $this->uri->segment(3);
$data['blog_title'] = $this->update_model->show_blogs();
$data['blog_subject'] = $this->update_model->show_blog_id($id);
$this->load->view('update_blog_view', $data);
}
function update_blog_id1() {
$id= $this->input->post('did');
$data = array(
'blog_title' => $this->input->post('blog_title'),
'blog_subject' => $this->input->post('blog_subject'),
'image' => $this->input->post('image'),
'blog_description' => $this->input->post('blog_description')
);
$this->update_model->update_blog_id1($id,$data);
$this->show_blog_id();
}
}
?>