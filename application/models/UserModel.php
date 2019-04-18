<?php 
   class UserModel extends CI_Model {
	
    var $table = 'usertbl';
    var $column_order = array('slno','emailid','password'); //set column field database for datatable orderable
    var $column_search = array('slno','emailid','password'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('slno' => 'desc'); // default order 
   
      function __construct() { 
         parent::__construct(); 
      }



      public function get_datatables()
       {
           $this->_get_datatables_query();
           if(intval($this->input->get("length"))!= -1)
           $this->db->limit(intval($this->input->get("length")), intval($this->input->get("start")));
           $query = $this->db->get();
           return $query->result();
       }

       private function _get_datatables_query()
      {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {   $search=$this->input->get("search");
            if($search['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_GET['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_GET['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_GET['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_GET['order']['0']['column']], $_GET['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
      }
      
     public  function count_filtered()
       {
           $this->_get_datatables_query();
           $query = $this->db->get();
           return $query->num_rows();
       }
 
    public function count_all()
       {
           $this->db->from($this->table);
           return $this->db->count_all_results();
       }



       
   
      public function register($data) { 
         if ($this->db->insert("usertbl", $data)) { 
            return true; 
         } 
      } 

      public function login($data) {

         $condition = "emailid =" . "'" . $data['emailid'] . "' AND " . "password =" . "'" . $data['password'] . "'";
         $this->db->select('*');
         $this->db->from('usertbl');
         $this->db->where($condition);
         $this->db->limit(1);
         $query = $this->db->get();
            if ($query->num_rows() == 1) 
            {
            return true;
            } 
            else
            {
            return false;
            }

         }
   public function add_location($data) { 
         if ($this->db->insert("locationtbl", $data)) { 
            return true; 
         } 
      }  
  public function add_newmember($data) { 
         if ($this->db->insert("membertbl", $data)) { 
            return true; 
         } 
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