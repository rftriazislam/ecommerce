<?php



class Admin extends CI_Controller {
     public function __construct() {
        parent::__construct();
        $admin_id=  $this->session->userdata('admin_id');
        if($admin_id!=NULL){
        redirect('Super_Admin','refresh');
        }
    }
    
    public function index(){
        $this->load->view('admin/login');
    }
    public function admin_login_cheek(){
        $admin_email=$this->input->post('admin_email',TRUE);
        $admin_password=md5($this->input->post('admin_password',TRUE)); 
        
        $result=$this->Admin_Model->cheek_admin_info($admin_email,$admin_password);
      if($result){
            $data=array();
            $data['admin_id']=$result->admin_id;
            $data['admin_name']=$result->admin_name;
            $this->session->set_userdata($data);
            redirect('Super_Admin');
        }
        else{
            $data=array();
             $data['messege']="Your Email or Password invalid";
             $this->session->set_userdata($data);
            redirect('Admin');
    }}
    
    public function admin_category_cheek(){
        $admin_id=md5($this->input->post('admin_id',TRUE));
        $result=$this->Admin_Model->cheek_admin_info($admin_id);
      if($result){
            $data=array();
            $data['admin_id']=$result->admin_id;
            $data['admin_name']=$result->admin_name;
            $this->session->set_userdata($data);
            redirect('Super_Admin');
        }
        else{
            $data=array();
             $data['messege']="Your Email or Password invalid";
             $this->session->set_userdata($data);
            redirect('Admin');
        }
  }
  
}
