<?php
class Auth_model extends CI_Model
{
    public function idmatch($email,$password)
    {
        $this->db->where('users','1');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query=$this->db->get('users')->num_rows();
        // echo $query;die;
        if($query==1){
            $this->db->where('email',$email);
            $this->db->where('password',$password);
            $p=$this->db->get("users")->result()[0];
            $email=$p->email;
            $status=$p->status;
            $users=$p->user_type;
            $session_data=array(
              
                'email' =>$email,
                'status' =>$status,
                'user_type' =>$users,
                'logged_in'=>TRUE

            );
           $sd=$this->session->set_userdata($session_data);
           echo 1;
          
        }
        

    }


    public function user_check($email,$password)
    {
        $this->db->where('user_type','2');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query=$this->db->get('users')->num_rows();
        echo $query;die;
        if($query==1){
            $this->db->where('email',$email);
            $this->db->where('password',$password);
            $p=$this->db->get("users")->result()[0];
            $email=$p->email;
            $status=$p->status;
            $users=$p->user_type;
            $session_data=array(
              
                'email' =>$email,
                'status' =>$status,
                'user_type' =>$users,
                'logged_in'=>TRUE

            );
           $sd=$this->session->set_userdata($session_data);
           echo $sd;
          
        }
        

    }
    public function check_singup($email,$data)
    {
        // echo $email;die;
        $this->db->where('email',$email);
        $query=$this->db->get('users')->num_rows();
    //   echo $query;die;
        if($query==1){
            echo "email already exist";
        }
        else{
            $this->db->insert('users',$data);
             echo 1;
        }
        

    }

}

?>