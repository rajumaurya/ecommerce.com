<?php 
class Admin_model extends CI_Model
{
    public function save_upload($itemname,$category,$subcategory, $desc,$price,$image)
    {
        // echo $itemname;die;
       $data=array(
           'itemName' =>$itemname,
           'category' =>$category,
           'subcategory'=>$subcategory,
           'disc' =>$desc,
           'image' =>$image,
           'price'=>$price,
           'status'=>1


       );
    //    print_r($data);die;
       $result= $this->db->insert('items',$data);
       return $result;
       echo true;
    }







/*   datatable    */

    var $table="items";
    var $select_column=array("id",'itemName','category','subcategory','disc','image','price','status');
    var $order_column=array(null,'itemName','category','subcategory','disc','price',null,null);
    public function make_query()
    {
        $this->db->select($this->select_column);
        $this->db->from($this->table);
        if(isset($_POST['search']['value'])){
             $this->db->like("itemName",$_POST['search']['value']);
             $this->db->or_like('category',$_POST['search']['value']);
             $this->db->or_like('subcategory',$_POST['search']['value']);
             $this->db->or_like('disc',$_POST['search']['value']);
             $this->db->or_like('price',$_POST['search']['value']);
             if(isset($_POST["order"]))  
             {  
                  $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
             }  
             else  
             {  
                  $this->db->order_by('id', 'DESC');  
             } 



        }
    }
    public function make_datatables()
    {
      $this->make_query();
      if($_POST['length']!=-1)
      
      {
          $this->db->limit($_POST['length'],$_POST['start']);
      }
      $query=$this->db->get();
      return $query->result();

    }
    public function get_filtered_data()
    {
        $this->make_query();
        $query=$this->db->get();
       return $query->num_rows();
       
    }
    public function get_all_data()
    {
        // $this->make_query();
       
       
            $this->db->select("*");
            $this->db->from($this->table);
            
    
            return $this->db->count_all_results();

            // return $this->db->get()->result();
           
    }
    function fetch_single_user($user_id)  
      {  
           $this->db->where("id", $user_id);  
           $query=$this->db->get('items'); 
           return $query->result();  
      }  
    function update_crud($user_id,$itemname,$category,$subcategory, $desc,$price,$image)  
      {  
           $this->db->where("id", $user_id);  
        //    $this->db->update("items", $data);
        //    echo true;

        $data=array(
            'itemName' =>$itemname,
            'category' =>$category,
            'subcategory'=>$subcategory,
            'disc' =>$desc,
            'image' =>$image,
            'price'=>$price
 
 
        );
     //    print_r($data);die;
        $result= $this->db->update('items',$data);
        return $result;
        echo true;
        
      }  
      public function delete_data($user_id)
      {
        
          $p=$this->db->where("id",$user_id);
          $this->db->delete("items");
          echo true;
      }
      function make_subadmin($user_id, $data)  
      {  
           $this->db->where("id", $user_id);  
           $this->db->update("items", $data);
           echo true;
      }  

      public function get_userno()
      {
        //   $this->db->select("count(*) as no ");
          $query=$this->db->get('auth');
          return $query->num_rows();
      }
}



?>