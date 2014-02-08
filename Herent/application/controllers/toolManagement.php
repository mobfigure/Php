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
     $this->load->view('tools_view');
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
 function addTool()
 {
 	
 	$this->tools->add($this->input->post('name'), $this->input->post('specification'));
 	$this->load->view('tools_view');
 }
 }
 
 
?>