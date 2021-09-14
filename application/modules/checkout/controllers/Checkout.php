<?php 
class Checkout extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->library('Cart');
        $this->load->model("Checkout_model");
    }
    public function index()
    {
        $this->load->library("cart");
        $p['data']=$this->cart->contents();
        // $data=array();
    
        
       
        $this->load->view('checkout',$p);

        
    }
    public function savecheckout()
    { 
        $productname=$_POST['productname'];
    //    pirnt_r($productname);die;
        $quantity=$_POST['quantity'];
        $price=$_POST['price'];
        $totalprice=$_POST['total_price'];
        $count = count($_POST['quantity']);
        // print_r($count);die;
         $data=array();
        for($i=0;$i<$count;$i++){
           // print_r($_POST['quantity'][$i]);
            $data=array(
                'product_name'=>$_POST['productname'][$i],
                'price'=>$_POST['price'][$i],
                'quantity'=>$_POST['quantity'][$i],
                'total_price'=>$totalprice,

            );
            //  echo "<pre>";
            //  print_r($data);die;
                  $this->Checkout_model->savecheckout($data);

            
        }
        redirect(base_url('/payment'));
        
    }
}