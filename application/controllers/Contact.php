<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	 function __construct() {
        parent::__construct();
        $this->load->model('Contact_model');

    }


	public function index()
	{
		$this->load->view('footer');
		
	}


	// public function contact() {

	// 	$data = array();
	// 	$data['list'] = "test";
	// 	$data['hi'] = "this is test from controller";
	// 	$this->load->view('home_page',$data);
	// }


	public function contact_user() {
		 $data = array(
                'contact_name' => $this->input->post('contact_name'),
                'contact_email' => $this->input->post('contact_email'),
                'contact_subject' => $this->input->post('contact_subject'),
                'contact_message' => $this->input->post('contact_message'),
                
            );

$this->Contact_model->contact_user($data);
redirect('', 'refresh');
// $this->load->view('home_page');
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
