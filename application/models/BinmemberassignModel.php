<?php 
   class BinmemberassignModel extends CI_Model {


      function __construct() { 
         parent::__construct(); 
        
      } 
     public function binmemberassign_data($data)
      {
        $bin_number =$data['bin_number'];
       
        foreach( $data['members']as $key => $value){

          $data = array( 
            'f_binid' => $bin_number,
            'f_m_slno' => $value, 
            ); 
         
          //print_r($data);
          $this->db->insert("binmemberassigntbl", $data);
           
        }
        return true;
        /*$query = $this->db->query('SELECT * FROM connectivity_tbl');
         return $query->result();*/
        
      }
}
?> 

   
