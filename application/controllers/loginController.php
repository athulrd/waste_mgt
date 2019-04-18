<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
	public function index()
	{
        //$this->load->view('index'); 
		$this->load->model('UserModel');
		$name = "name1";
        $email = $this->input->post('email');  
        $pass = $this->input->post('password');  
        $data = array( 
        	'name' => $name,
            'emailid' => $email, 
            'password' => $pass
         ); 

        $this->UserModel->insert($data); 
        $this->load->view('index'); 
		
	}

}
