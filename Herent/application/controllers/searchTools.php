<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class SearchTools extends CI_Controller {

 function __construct()
 {
   parent::__construct();
    $this->load->model('tools','',TRUE);
 }

 function searchByName()
 {
 	var_dump('niret hier');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     
	 $result=$this->tools->toolsFromName($this->input->post('toolname'));
	 $data["results"]=$result;
	 
	 $this->load->view('stdview/header_view');
     $this->load->view('searchTools_view', $data);
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
  function searchByCategory()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result=$this->tools->toolsFromCategory($this->input->post('category'));
	 $data["results"]=$result;
	 $this->load->view('stdview/header_view');
     $this->load->view('searchTools_view', $data);
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
  function searchByUsername()
 {
 	var_dump('hier');
   if($this->session->userdata('logged_in'))
   {
   	 
     $session_data = $this->session->userdata('logged_in');
      $this->load->model('user');
	  $result1=$this->user->idForUsername($this->input->post('username'));
	  var_dump($result1[0]->id);
	  $result=$this->tools->toolsFromUsername($result1['id']);
	 $data["results"]=$result;
	 
	$this->load->view('stdview/header_view');
     $this->load->view('searchTools_view', $data);
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 }