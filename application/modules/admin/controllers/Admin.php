<?php 
class Admin extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        // if(!$this->session->userdata('email')){
        //     redirect('auth');
        //   }
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model("Admin_model");
    }
    public function index()
    {
        $userno['user']=$this->Admin_model->get_userno();
        // $data=$userno[0]->no;
        $this->load->view('admin',$userno);
        $this->load->view('header2');
        $this->load->view("table");
        $this->load->view("footer2");

    }
     public function item()
     {
        $this->load->view('header2');
        $this->load->view("table");
        $this->load->view("footer2");;
     }
     function do_upload(){
        //  echo($_POST['item']);die;
        $config['upload_path']="./assets/img";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){
            $data = array('upload_data' => $this->upload->data());
            
            $itemname= $this->input->post('item');
            $category= $this->input->post('category');
            $subcategory= $this->input->post('subcategory');
            $desc= $this->input->post('desc');
            $price=$this->input->post('price');
            $image= $data['upload_data']['file_name']; 
             
            $result= $this->Admin_model->save_upload($itemname,$category,$subcategory, $desc,$price,$image);
            // echo "hello";die;
            echo json_decode($result);
        }
 
     

    }
    //  function additem()
    //  {
    //      $data=array('itemName'=>$_POST['item'],'category'=>$_POST['category'],'subcategory'=>$_POST['subcategory'],'desc'=>$_POST['desc'],'image'=>$_POST['img']);
    //      print_r($data);die;
    //  }

/*   product table   */

public function fetch_user()
{ 
     
   

 //    $this->Dashboard_model->make_datatables();
    $fetch_data=$this->Admin_model->make_datatables();
//   print_r($fetch_data);die;
    $data=array();
    foreach($fetch_data as $row)  
    { 
         
     
         $sub_array = array();  
         $sub_array[] = $row->id;
         $sub_array[] = $row->itemName;  
         $sub_array[] = $row->category;  
         $sub_array[] = $row->subcategory;  
         $sub_array[] = $row->disc;
         $sub_array[] =  '<img src="'.base_url().'assets/img/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';
         $sub_array[] = $row->price;
         $sub_array[] =  $row->status;
         $sub_array[] = '<button type="button"  name="update" id="'.$row->id.'" class="btn btn-warning btn-xs update">Update</button>';  
         $sub_array[] = '<button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs delete">Delete</button>'; 
        
         $data[] = $sub_array;  
    }  
    $output = array(  
         "draw"                    =>     @intval($_POST["draw"]),
         "recordsTotal"          =>      $this->Admin_model->get_all_data(),  
         "recordsFiltered"     =>     $this->Admin_model->get_filtered_data(),  
         "data"                    =>     $data  
    );  
    echo json_encode($output);  
} 
function fetch_single_user()  
    {  
         $output = array();  
         $data = $this->Admin_model->fetch_single_user($_POST["user_id"]); 
         foreach($data as $row)  
         {  
              $output['itemName'] =  $row->itemName;  
              $output['category'] = $row->category;  
              $output['subcategory'] = $row->subcategory;  
              $output['disc'] = $row->disc;  
              $output['image'] = $row->image;  
              $output['price'] = $row->price;  
              $output['status'] = $row->status;  
              
         }  
         echo json_encode($output);  
    }  
public function updatedata()
{
   // print_r($_POST);die;
   // if(isset($_POST["action"]) == "Edit")  
   // {
      //   echo "hello";die;
      
        // $updated_data = array(  
        //      'itemName'          =>     $this->input->post('itemName'),  
        //      'category'               =>     $this->input->post('category'),  
        //      'subcategory'          =>     $this->input->post('subcategory'),  
        //      'disc'          =>     $this->input->post('disc'),  
        //      'image'          =>     $this->input->post('image'),  
        //      'price'          =>     $this->input->post('price'),  
        // );  
       //  print_r("$updated_data");die;

       $config['upload_path']="./assets/img";
       $config['allowed_types']='gif|jpg|png';
       $config['encrypt_name'] = TRUE;
        
       $this->load->library('upload',$config);
       if($this->upload->do_upload("image")){
           $data = array('upload_data' => $this->upload->data());
           
           $itemname= $this->input->post('itemName');
           $category= $this->input->post('category');
           $subcategory= $this->input->post('subcategory');
           $desc= $this->input->post('disc');
           $price=$this->input->post('price');
           $image= $data['upload_data']['file_name']; 
            
           $result= $this->Admin_model->update_crud($_POST["user_id"],$itemname,$category,$subcategory, $desc,$price,$image);
           // echo "hello";die;
        //    echo $result;die;
           echo json_decode($result);
       
        // $this->Admin_model->update_crud($_POST["user_id"], $updated_data);  
         
   }  
   
 }
public function delete()
{
   // $u=($_POST);die;
   // $u=$_GET['user_id'];
   $this->Admin_model->delete_data($_POST['user_id']);

}
public function gettotaluser()
    {
        $userno['user']=$this->Admin_model->get_userno();
        // $data=$userno[0]->no;
        $this->load->view('admin',$userno);

    }
  

}




?>