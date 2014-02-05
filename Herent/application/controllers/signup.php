<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
 	$this->load->helper('form');
 	 $this->load->view('signup_view');
 	}
function validate()
{
	 
	$this->load->library('form_validation');
	$this->form_validation->set_rules('username', 'Username', 'trim|min_length[3]|required|xss_clean');
	$this->form_validation->set_rules('voornaam', 'voornaam', 'trim|alpha|min_length[3]|required|xss_clean');
	$this->form_validation->set_rules('achternaam', 'achternaam', 'trim|alpha|min_length[3]|required|xss_clean');
	$this->form_validation->set_rules('email', 'email', 'trim|valid_email|required|xss_clean');
	$this->form_validation->set_rules('password', 'password', 'trim|min_length[5]|required|xss_clean');
	
	
	if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.&nbsp; User redirected to login page
     $this->load->view('signup_view');
   }
   else
   {
   	//$this->user->add($username, $voornaam, $achternaam, $email, $password);
	$this->user->add($this->input->post('username'), $this->input->post('voornaam'), $this->input->post('achternaam'), $this->input->post('email'), $this->input->post('password'));
    //if all ok redirect to model 'user'
   }

}

}

?>