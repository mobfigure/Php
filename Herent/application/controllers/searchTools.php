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
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     
	//zoeken op naam
	
	//zoeken op categorie
	
	//zoeken op username
	 
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
     $result=$this->tools->toolsFromCategory("keuken");
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
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     
	//zoeken op naam
	
	//zoeken op categorie
	
	//zoeken op username
	 
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