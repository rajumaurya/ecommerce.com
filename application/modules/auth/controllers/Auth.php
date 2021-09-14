<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('Auth_model');
    }
    public function index()
    {
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }
    public function signup()
    {
        // $this->load->view('header');
        $this->load->view('signup');
        // $this->load->view('footer');

        
    }
    public function login_check()
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        // $this->load->model('Auth_model');
        $this->Auth_model->idmatch( $email, $password);
        
    }
    public function user_login()
    {
        $this->load->view('userlogin');
    }
    public function user_check()
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        // $this->load->model('Auth_model');
        $this->Auth_model->user_check( $email, $password);
        
    }
    public function check()
    {
        
        // echo "hello ists working";die;

        $data=array("email"=>$_POST['email'],"password"=>$_POST['password'],"status"=>1,"user_type"=>2);
        // print_r($data);die;
        // print_r($data);die;
        $this->Auth_model->check_singup( $_POST['email'],$data);
        
    }
    public function logout()
    {
        $this->session->unset_userdata($session_data);
        $this->session->sess_destroy();
        redirect('dashboard');
    }

    
}


?>