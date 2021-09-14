<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->model("Dashboard_model");
    }
    public function index()
    {
        $data['items'] = $this->Dashboard_model->fetchallproducts();
        // $data['fetch_data']=$this->Dashboard_model->getdata();
        $this->load->view('_parts/header');
        $this->load->view('shop/index', $data);
        $this->load->view('_parts/footer');
    }
    public function add()
    {
        $this->load->library("cart");
        $data = array(
            "id" => $_POST["product_id"],
            "name" => $_POST["product_name"],
            "qty" => $_POST["quantity"],
            "price" => $_POST["product_price"],
        );
        $this->cart->insert($data); //return rowid
        echo $this->view();
    }

    public function load()
    {
        echo $this->view();
    }

    public function remove()
    {

        $this->load->library("cart");
        $row_id = $_POST['row_id'];

        $data = array(
            'rowid' => $row_id,
            'qty' => 0,
        );
        $this->cart->update($data);
        echo $this->view();
    }

    public function clear()
    {
        $this->load->library("cart");
        $this->cart->destroy();
        echo $this->view();
    }

    public function view()
    {
        $this->load->library("cart");
        $output = '';
        $output .= '
     <h3>Shopping Cart</h3><br />
     <div class="table-responsive">
      <div align="right">
       <button type="button" id="clear_cart" class="btn btn-warning">Clear Cart</button>
      </div>
      <br />
      <table class="table table-bordered" >
       <tr>
        <th width="40%">Name</th>
        <th width="15%">Quantity</th>
        <th width="15%">Price</th>
        <th width="15%">Total</th>
        <th width="15%">Action</th>
       </tr>
     ';
        $count = 0;
        foreach ($this->cart->contents() as $items) {
            $count++;
            $output .= '
      <tr>
       <td>' . $items["name"] . '</td>
       <td>' . $items["qty"] . '</td>
       <td>' . $items["price"] . '</td>
       <td>' . $items["subtotal"] . '</td>
       <td><button type="button" name="remove" class="btn btn-danger btn-xs remove_inventory" id=" ' . $items['rowid'] . ' ">Remove</button></td>
      </tr>

      ';
        }
        $output .= '
      <tr>
       <td colspan="4" align="right">Total</td>
       <td>' . $this->cart->total() . '</td>
      </tr>
     </table>
     </div>
     <a href="http://localhost/ecommerce/dashboard/checkout" >checkout</a>
     ';

        if ($count == 0) {
            $output = '<h3 align="center">Cart is Empty</h3>';
        }
        return $output;
    }

    public function account()
    {
        $this->load->view('_parts/header');
        $this->load->view('shop/account.php');
        $this->load->view('_parts/footer');

    }
    public function wishlist()
    {
        $data = array();
        $head = array();   
        $data1=array();
        $prodata=array();
        $user_id = $this->session->userdata('logged_user');
        $user_id=1;
        $userdata= $this->Dashboard_model->getUserProfileInfo($user_id);

        if(empty($user_id)) redirect(base_url('login'));
        $check=explode(',',$userdata['wlist']);
        // print_r($check);die;
      
        foreach($check as $product_id){
          if (filter_var($product_id, FILTER_VALIDATE_INT)) {
            $product_id1[]=$product_id;
            @$productData  = $this->Dashboard_model->getOneProduct($product_id);

            @$prodata['products'] = $this->Dashboard_model->getProducts($product_id);
            //   echo count($prodata);die;
          }
        }
        if(@$prodata['products']!=''){
         foreach($prodata['products'] as $val){
            //  echo "<pre>";
            //  print_r($val);die;
        $v[]=$val->id;
        if(in_array($val->id,$product_id1)){ 
            // print_r($product_id1);die;
          $prodata1[$val->id] = $val;
          $data1[]= $prodata1[$val->id];

         }
      
      }
       $data['prod']=$data1;
    }else{
      $data=0;
    }

    
        $this->load->view('_parts/header');
        $this->load->view('shop/wishlist',$data,$head);
        $this->load->view('_parts/footer');
    }
    public function checkout()
    {
        // $this->load->library("cart");
        $this->load->view('_parts/header');
        $this->load->view('shop/checkout');
        $this->load->view('_parts/footer');
    }
    public function cart()
    {
        $this->load->view('_parts/header');
        $this->load->view('shop/cart');
        $this->load->view('_parts/footer');
    }

    public function add_bill_detail()
    {
        $data = array('first_name' => $_POST['fname'], 'last_name' => $_POST['lname'], 'company_name' => $_POST['company'], 'email' => $_POST['email'], 'phone' => $_POST['phone'], 'appartment' => $_POST['appartment'], 'address' => $_POST['address'], 'country' => $_POST['country'], 'city' => $_POST['city'], 'district' => $_POST['district'], 'postcode' => $_POST['postcode']);
        $this->Dashboard_model->add_bill_details($data);
    }

    public function wlist($store_url=null)
    {
        $data = array();
        $head = array();   
        $data1=array();
        $prodata=array();
        $user_id = $this->session->userdata('logged_user');
        $user_id=1;
        $userdata= $this->Dashboard_model->getUserProfileInfo($user_id);

        if(empty($user_id)) redirect(base_url('login'));
        $check=explode(',',$userdata['wlist']);
      
        foreach($check as $product_id){
          if (filter_var($product_id, FILTER_VALIDATE_INT)) {
            $product_id1[]=$product_id;
            $productData  = $this->Dashboard_model->getOneProduct($product_id);
            $pTranslation = $this->Dashboard_model->getTranslations($product_id);
            $vendorDetails   = $this->Dashboard_model->getVendorByUrl(null,$productData['vendor_id']);
            @$prodata['products'] = $this->Dashboard_model->getProducts($vendorDetails->id);
          }
        }
        if(@$prodata['products']!=''){
         foreach($prodata['products'] as $val){
        $v[]=$val->id;
        if(in_array($val->id,$product_id1)){ 
          $prodata1[$val->id] = $val;
          $data1[]= $prodata1[$val->id];

         }
      
      }
       $data['prod']=$data1;
    }else{
      $data=0;
    }

   // print_r( $check);
      $this->render('wlist', $head, $data);
    }
    public function addwlist()
    {

        $user_id = $this->session->userdata('logged_user');
        $user_id=1;
        if (empty($user_id)) {
            echo json_encode(array('message' => 'user id empty'));} else
        if (empty($this->input->post('product_id'))) {
            echo json_encode(array('message' => 'Product id empty'));} else {
            //$user_id=$userId;
            $product_id = $this->input->post('product_id');
            $userdata = $this->Dashboard_model->getUserProfileInfo($user_id);
            $check = explode(',', $userdata['wlist']);
            if (in_array($product_id, $check)) {
                $product_id1[] = $product_id;
                $check = array_diff($check, $product_id1);
            } else {
                $check[] = $product_id;
            }
            $wlist = implode(',', $check);
            $data = array('wlist' => $wlist);
            $upd = $this->Dashboard_model->userProfileUpdate($user_id, $data);
            if ($upd) {
                $udata = $this->Dashboard_model->getUserProfileInfo($user_id);
                echo json_encode(array('wlist' => $wlist, 'message' => 'update wishlist successfully!'));

            } else {
                echo json_encode(array('message' => 'something wrong'));
            }
        }
    }

}
