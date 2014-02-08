<?php
Class Tools extends CI_Model
{
	 function add($name, $specifications)
 {
 	$session_data = $this->session->userdata('logged_in');
	$data = array(
   'name' => $name ,
   'specifications' =>  $specifications,
   'userid' => $session_data['id'],
   
);

var_dump($this->db->insert('tools', $data));
 }
 }
 
?>