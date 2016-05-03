<?php
class update_model extends CI_Model{
// Function To Fetch All Students Record
function show_blogs(){
$query = $this->db->get('blog_post');
$query_result = $query->result();
return $query_result;
}
// Function To Fetch Selected Student Record
function show_blog_id($data){
$this->db->select('*');
$this->db->from('blog_post');
$this->db->where('id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
// Update Query For Selected Student
function update_blog_id1($id,$data){
$this->db->where('id', $id);
$this->db->update('blog_post', $data);
}
}
?>