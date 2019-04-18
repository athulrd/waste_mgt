
  <?php 
   class statusModel extends CI_Model {
  
   var $table = 'locationtbl';
    var $column_order = array('binid','location_name','bin_status'); //set column field database for datatable orderable
    var $column_search = array('binid','location_name','bin_status'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    //var $order = array('binid' => 'desc');
   
      function __construct() { 
         parent::__construct(); 
      }
//SELECT bintbl.binid, locationtbl.location_name, binstatustbl.binstatus
//FROM bintbl
//INNER JOIN locationtbl ON bintbl.f_l_slno = locationtbl.l_slno
//INNER JOIN binstatustbl ON binstatustbl.f_b_slno =bintbl.b_slno



      public function get_bindatatables()
       {
           $this->_get_bindatatables_query();
           if(intval($this->input->get("length"))!= -1)
           $this->db->limit(intval($this->input->get("length")), intval($this->input->get("start")));
           $query = $this->db->get();
           return $query->result();
       }

       private function _get_bindatatables_query()
      {
         
       $this->db->select('bintbl.binid, locationtbl.location_name, binstatustbl.binstatus');
      $this->db->from('bintbl');
    //  $this->db->join('bustbl','f_b_slno=b_slno');
      $this->db->join('locationtbl','bintbl.f_l_slno = locationtbl.l_slno');
      $this->db->join('binstatustbl',' binstatustbl.f_b_slno =bintbl.b_slno');
   //  $this->db->group_by('bus_no');




 
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
           $this->_get_bindatatables_query();
           $query = $this->db->get();
           return $query->num_rows();
       }
 
    public function count_all()
       {
           $this->db->from($this->table);
           return $this->db->count_all_results();
       }



     
   

        
         
          

   } 

?> 










