<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menudata extends CI_Controller {
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
	
		public function add_location()
	{
        //$this->load->view('index'); 
		$name = $this->input->post('name');
        $email = $this->input->post('latitude');  
        $pass = $this->input->post('longitude');  
        $data = array( 
        	'location_name' => $name,
            'latitude' => $email, 
            'longitude' => $pass
         ); 

        $result=$this->UserModel->add_location($data); 

        if ($result == true) 
        {
        	$this->load->view('menu/addLocation');
		}
		else
		{
			$this->load->view('index');
		}
    
		
	}

public function add_newmember()
	{
        //$this->load->view('index'); 
		$name = $this->input->post('name');
        $email = $this->input->post('number');  
        
        $data = array( 
        	'membername' => $name,
            'mobileno' => $email, 
            
         ); 

        $result=$this->UserModel->add_newmember($data); 

        if ($result == true) 
        {
        	$this->load->view('menu/addnewMember');
		}
		else
		{
			$this->load->view('index');
		}
    
		
	}



}
