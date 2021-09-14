<?php 

class Checkout_model extends CI_Model
{
    public function savecheckout($data)
    { 
        
              $this->db->insert("user_order",$data);
             // return $query->result();
             echo true;
        
       
    }
    
}
?>