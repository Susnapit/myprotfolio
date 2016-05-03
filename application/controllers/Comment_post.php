<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_post extends CI_Controller {


	 function __construct() {
        parent::__construct();
        $this->load->model('Comment_model');

    }


	public function index()
	{
		$this->load->view('Blog');
		
	}


	// public function contact() {

	// 	$data = array();
	// 	$data['list'] = "test";
	// 	$data['hi'] = "this is test from controller";
	// 	$this->load->view('home_page',$data);
	// }


	public function comment() {
		 $data = array(
                'comment' => $this->input->post('comment'),
                
            );

$this->Comment_model->comment($data);

redirect('', 'refresh');
// $this->load->view('Blog');
// echo "register successfully";



// if($result) {
// 			redirect('Register/user_dashboard');
// 		} 


// 	}

// public function user_dashboard(){
// 		$data = array();
// 		$this->load->view('WelcomeUser',$data);	
// 	}
}
}
?>
