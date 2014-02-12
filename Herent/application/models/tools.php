<?php
Class Tools extends CI_Model
{
	 function add($name, $specifications, $category)
 {
 	
 	$session_data = $this->session->userdata('logged_in');
	$data = array(
   'name' => $name ,
   'specifications' =>  $specifications,
   'category' => $category,
   'userid' => $session_data['id'],
   
);

var_dump($this->db->insert('tools', $data));
 }
 
 function show()
 {
 	$session_data = $this->session->userdata('logged_in');
	
   $this -> db -> select('name, specifications');
   $this -> db -> from('tools');
   $this -> db -> where('userid', $session_data['id']);
   $query = $this -> db -> get();
   //var_dump($query -> num_rows());
   
   if($query -> num_rows() > 0)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
   }
   function delete($tool)
 	{
		$session_data = $this->session->userdata('logged_in');
		$this->db->where('userid', $session_data['id']);
		$this->db->where('name', $tool);
		var_dump($this->db->delete('tools')); 
 	}
	
	function toolsFromCategory($category)// verschillend van eigen userid
	{
		$this -> db -> select('name, specifications');
   		$this -> db -> from('tools');
  		$this -> db -> where('category', $category);
   		$query = $this -> db -> get();
   //var_dump($query -> num_rows());
  
   if($query -> num_rows() > 0)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
		
		
	}
 }
 
?>