  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statusController extends CI_Controller {
  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
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
        
         $this->load->model('statusModel'); 
         //$this->load->model('Model');
        
      }
  

 

   

  


  public function bindatatablegetconnectivitydata()
  {

    //header('Content-Type: application/json');
     //echo $this->ConnectivityModel->connectivity_datatabledata();
    // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


         $connectivity_data=$this->statusModel->get_bindatatables();
         $data = array();
         $no = $start;


    foreach($connectivity_data as $r) {
                  
                    $no++;
                    $row = array();
                    $row[] = $no;
                    $row[] = $r->binid;
                    $row[] = $r->location_name;
                    $row[] = $r->binstatus;
                
                  /*$row[] = '
                      <button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                      <button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-default view_btn">view</button>
                      <button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button
                      ';*/
                    
                    //$row[] = '<button type="button" id="'.$r->.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                   // <button type="button" id="'.$r->slno.'" data-toggle="modal" data-target="#myModal" class="btn btn-default view_btn">view</button>
                   // <button type="button" id="'.$r->slno.'"  class="btn btn-danger delete_btn">delete</button
                     // ';

         
                    $data[] = $row;
                   
         
             

          }


            $output = array(
                        "draw" => $draw,
                        "recordsTotal" => $this->statusModel->count_all(),
                        "recordsFiltered" => $this->statusModel->count_filtered(),
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

  


