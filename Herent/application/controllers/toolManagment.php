<?php
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class ToolManagement extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
    
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
?>