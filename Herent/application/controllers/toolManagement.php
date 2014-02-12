<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ToolManagement extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('tools');
   $this->load->helper('form');
 }

 function index()
 {
 	
   if($this->session->userdata('logged_in'))
   {
   	$result= $this->tools->show();
	
	$data["result"]=$result;
	 $this->load->view('stdview/header_view');
     $this->load->view('tools_view',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
 function addTool()
 {
 	
 	$this->tools->add($this->input->post('name'), $this->input->post('specification'), $this->input->post('category'));
 	 redirect('/toolManagement', 'refresh');//$this->load->view('tools_view');
 }
  function deleteTool() // !! delete hammer means delete all hammers in the list
 {
 	var_dump($this->input->post('tool'));
	if ($this->input->post('tool') != FALSE)
	{
		$this->tools->delete($this->input->post('tool'));
		 redirect('/toolManagement', 'refresh');
	}
	else{
		 redirect('/toolManagement', 'refresh');
	}
	
	
 	
 }
 }
 
 
?>