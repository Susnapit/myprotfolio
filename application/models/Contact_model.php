<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact_model extends CI_Model {
public function __construct()
{
parent::__construct();
}
public function contact_user() {


$data=array(
'contact_name'=>$this->input->post('contact_name'),
'contact_email'=>$this->input->post('contact_email'),
'contact_subject'=>$this->input->post('contact_subject'),
'contact_message'=>$this->input->post('contact_message'),
);
$this->db->insert('contact_me',$data);
}
}