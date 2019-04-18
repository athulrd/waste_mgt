<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexoptionController extends CI_Controller {
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
         $this->load->model('UserModel'); 
      } 
	public function index()
	{
        //$this->load->view('index'); 
		
	}
	public function login()
	{
        //$this->load->view('index');
       
        $email = $this->input->post('email');  
        $pass = $this->input->post('password'); 
        $data = array( 
            'emailid' => $email, 
            'password' => $pass
         ); 
        $result=$this->UserModel->login($data);
		if ($result == true) 
		{	 
			$this->load->view('home');
		}
		else
		{
			$this->load->view('index');
		}

		
	}
		public function register()
	{
        //$this->load->view('index'); 
		$name = $this->input->post('fname');
        $email = $this->input->post('email');  
        $pass = $this->input->post('password');  
        $data = array( 
        	'name' => $name,
            'emailid' => $email, 
            'password' => $pass
         ); 

        $result=$this->UserModel->register($data); 

        if ($result == true) 
        {
        	$this->load->view('home');
		}
		else
		{
			$this->load->view('index');
		}
    
		
	}


}
