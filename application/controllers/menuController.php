<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menuController extends CI_Controller {
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
         $this->load->model('BinmemberassignModel'); 
         $this->load->model('BinModel'); 
         $this->load->model('UserModel');
        
      }
	public function index()
	{
        $this->load->view('index'); 
	}

	public function add_location()
	{
		$this->load->helper('url'); 
        $this->load->view('menu/addLocation');
	}

	public function add_new_bin()
	{
		$this->load->helper('url'); 
        $this->load->view('menu/addnewBin'); 
	}

		public function add_new_member()
	{
		$this->load->helper('url'); 
        $this->load->view('menu/addnewMember'); 
	}

		public function bin_status()
	{
		$this->load->helper('url'); 
        $this->load->view('menu/binStatus'); 
	}

		public function assign_bin_member()
	{
		$this->load->helper('url'); 
        $this->load->view('menu/assignBinmember'); 
	}

	public function trial()
	{
        $this->load->view('menu/trial'); 
	}


          public function addassignbinmember()
	{
		//$this->load->helper('url'); 
        //$this->load->view('menu/addassignbinmember'); 
        //$bin_number = $this->input->post('bin_number');  
       // $members[] = $this->input->post('members'); 
        //print_r($members);
           $bin_number = $this->input->post('bin_number');
		   $members = $this->input->post('members'); 
		    //$data = array();/*

		    foreach( $members as $key => $value){
		      $data['bin_number']=$bin_number;
		      $data['members'][$key]=$value;
		      //echo json_encode($data);
		    }
		    $binmemberassign_data=$this->BinmemberassignModel->binmemberassign_data($data);

		    //$binmemberassign_data=$this->BinMemberAssignModel->binmemberassign_data($data);
		    echo json_encode($binmemberassign_data);
		    //echo json_encode($binmemberassign_data);

		    //$this->food_model->add_food($data);
        /*$data = array( 
            'username' => $username, 
            'password' => $pass
         ); 
        $result=$this->UserModel->login($data);
        $connectivity_data=$this->ConnectivityModel->connectivity_data();
        $data['result']=$connectivity_data;*/
        //SELECT bintbl.binid,locationtbl.location_name from bintbl left join locationtbl on bintbl.f_l_slno=locationtbl.l_slno
	}

		public function view_members()
	{
		$this->load->helper('url'); 
        $this->load->view('menu/viewMembers'); 
	}


          public function addbin()
	{
		//$this->load->helper('url'); 
        //$this->load->view('menu/addassignbinmember'); 
        //$bin_number = $this->input->post('bin_number');  
       // $members[] = $this->input->post('members'); 
        //print_r($members);
           $binno = $this->input->post('binno');
		   $location = $this->input->post('location'); 
		    //$data = array();/*

		      $data['binid']=$binno;
		      $data['f_l_slno']=$location;
		      //echo json_encode($data);
		    
		    $bin_data=$this->BinModel->bin_data($data);

		    //$binmemberassign_data=$this->BinMemberAssignModel->binmemberassign_data($data);
		    echo json_encode($bin_data);
		    //echo json_encode($binmemberassign_data);

		    //$this->food_model->add_food($data);
        /*$data = array( 
            'username' => $username, 
            'password' => $pass
         ); 
        $result=$this->UserModel->login($data);
        $connectivity_data=$this->ConnectivityModel->connectivity_data();
        $data['result']=$connectivity_data;*/
	}


	public function datatablegetconnectivitydata()
	{

		//header('Content-Type: application/json');
		 //echo $this->ConnectivityModel->connectivity_datatabledata();
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


         $connectivity_data=$this->UserModel->get_datatables();
         $data = array();
         $no = $start;


		foreach($connectivity_data as $r) {
          	   		$no++;
            		$row = array();
                    $row[] = $no;
                    $row[] = $r->emailid;
                    $row[] = $r->password;

               		/*$row[] = '
                  		<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                  		<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-default view_btn">view</button>
                  		<button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button
                  		';*/
                    
                    $row[] = '<button type="button" id="'.$r->slno.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                    <button type="button" id="'.$r->slno.'" data-toggle="modal" data-target="#myModal" class="btn btn-default view_btn">view</button>
                  	<button type="button" id="'.$r->slno.'"  class="btn btn-danger delete_btn">delete</button
                  		';

         
                    $data[] = $row;
                   
         
             

          }


            $output = array(
                        "draw" => $draw,
                        "recordsTotal" => $this->UserModel->count_all(),
                        "recordsFiltered" => $this->UserModel->count_filtered(),
                        "data" => $data,
                );
 
        
        //output to json format
        echo json_encode($output);


          
            /*

          $output = array(
                 "draw" => $draw,
                // "recordsTotal" => $connectivity_data->num_rows(),
                 //"recordsFiltered" => $connectivity_data->num_rows(),
                 "data" => $data
            );
         // print_r($output);
          echo json_encode($output);
          exit();*/
	}


public function datatablegetconnectivitystatusdata()
	{

		//header('Content-Type: application/json');
		 //echo $this->ConnectivityModel->connectivity_datatabledata();
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


         $connectivity_data=$this->UserModel->get_datatables();
         $data = array();
         $no = $start;


		foreach($connectivity_data as $r) {
          	   		$no++;
            		$row = array();
                    $row[] = $no;
                    $row[] = $r->emailid;
                    $row[] = $r->password;

               		/*$row[] = '
                  		<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                  		<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-default view_btn">view</button>
                  		<button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button
                  		';*/
                    
                    $row[] = '<button type="button" id="'.$r->slno.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                    <button type="button" id="'.$r->slno.'" data-toggle="modal" data-target="#myModal" class="btn btn-default view_btn">view</button>
                  	<button type="button" id="'.$r->slno.'"  class="btn btn-danger delete_btn">delete</button
                  		';

         
                    $data[] = $row;
                   
         
             

          }


            $output = array(
                        "draw" => $draw,
                        "recordsTotal" => $this->UserModel->count_all(),
                        "recordsFiltered" => $this->UserModel->count_filtered(),
                        "data" => $data,
                );
 
        
        //output to json format
        echo json_encode($output);


          
            /*

          $output = array(
                 "draw" => $draw,
                // "recordsTotal" => $connectivity_data->num_rows(),
                 //"recordsFiltered" => $connectivity_data->num_rows(),
                 "data" => $data
            );
         // print_r($output);
          echo json_encode($output);
          exit();*/
	}






}
