<?php 
class Dashboard_model extends CI_Model
{
    function __construct(){
        $this->products='items';

    }
    public function getdata($id='')
    {
        $this->db->select('*');
        $this->db->from($this->products);
        
        if($id){
            $this->db->where('id',$id);
            $query=$this->db->get();
            // print_r($query);die;
            return $query->num_rows();

        }
        else{
            $query=$this->db->get();
            return $query->result();
            echo "<pre>";
            print_r($query);
        }
        return !empty($result)?$result:false;
    }
    public function fetchallproducts()
    {
       $query= $this->db->get('items');
       return $query->result();
    }
    public function add_bill_details($data){
        $query=$this->db->insert('bill_details',$data);
        if($query){
            echo 1;
        }
        else{
            echo 2;
        }
    }
    public function getUserProfileInfo($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row_array();
    }
    public function userProfileUpdate($user_id, $postData)
    {
        $this->db->where('id', $user_id);
        $data = $this->db->update('users', $postData);
        // echo $this->db->last_query(); die;
        return $data;
        // return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
    public function getOneProduct($id)
    {
        $this->db->where('items.id', $id);
        $this->db->select('items.*');
        $this->db->join('users', 'users.id = items.id', 'inner');
        // $this->db->where('visibility', 1);
        $query = $this->db->get('items');
        return $query->row_array();
    }
    public function getProducts( $product_id)
    {
        if ($limit !== null && $start !== null) {
            $this->db->limit($limit, $start);
        }
        if (!empty($big_get) && isset($big_get['category'])) {
            $this->getFilter($big_get);
        }
        $this->db->where('items.id', $product_id);
        $this->db->select('items.*');
        $this->db->join('users', 'users.id = items.id');
        // if ($vendor_id !== false) {
        //     $this->db->where('vendor_id', $vendor_id);
        // }
        // if ($this->showOutOfStock == 0) {
        //     $this->db->where('quantity >', 0);
        // }
        // if ($this->showInSliderProducts == 0) {
        //     $this->db->where('in_slider', 0);
        // }
        // if ($this->multiVendor == 0) {
        //     $this->db->where('vendor_id', 0);
        // }
        // $this->db->order_by('position', 'asc');

        $query = $this->db->get('items');
        // echo($this->db->last_query());die;
        return $query->result();
    }

}

?>