<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Blog_post extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('Blog_post_view');
    }
}