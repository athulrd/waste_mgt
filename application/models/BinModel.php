<?php 
   class BinModel extends CI_Model {


      function __construct() { 
         parent::__construct(); 
        
      } 


        public function bin_data($data) 
        { 
         if ($this->db->insert("bintbl", $data))
          { 
            return true; 
          } 
        } 

}
?> 

   
