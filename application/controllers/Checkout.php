<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Checkout
 *
 * @author riaz
 */
class Checkout extends CI_Controller {
    public function index(){
        $data=array();
        $data['title'] = "Checkout Page";
        $data['slider']=FALSE;
        $data['main_content']=  $this->load->view('pages/checkout_page','',TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_category_info();
        $this->load->view('master', $data);
    }
     
    public function customer_registration()
    {
        $data=array();
        $data['customer_name']=$this->input->post('customer_name',TRUE);
        $data['customer_email']=$this->input->post('customer_email',TRUE);
        $data['customer_phone']=$this->input->post('customer_phone',TRUE);
        $data['customer_password']=md5($this->input->post('customer_password',TRUE));
        $data['city']=$this->input->post('city',TRUE);
        $data['zip_code']=$this->input->post('zip_code',TRUE);
        $data['country']=$this->input->post('country2',TRUE);
        $data['address']=$this->input->post('address',TRUE);
       $result=$this->Checkout_Model->save_customer_info($data);
 
       if($result)
       {
        $sdata=array();
        $sdata['customer_id']=$result->customer_id;
        $data['customer_name']=$this->input->post('customer_name',TRUE);
        $this->session->set_userdata($data);
           redirect('Checkout/customer_shipping');
       }
    
    }
    
    
    public function customer_login_check()
     {
        $customer_email=$this->input->post('customer_email',TRUE);
        $customer_password=md5($this->input->post('customer_password',TRUE));
        
        $result=$this->Checkout_Model->check_customer_info($customer_email,$customer_password);
        if($result)
       {
        $data=array();
        $data['customer_id']=$result->customer_id;
        $data['customer_name']=$result->customer_name;
        $this->session->set_userdata($data);
           redirect('Checkout/customer_shipping');
       }
       else{
           $data=array();
           $data['message']="Your Email Id Or Password invalid!";
           $this->session->set_userdata($data);
           redirect('Checkout');
       }
        
    }
    public function customer_shipping(){
         $data=array();
        $data['title'] = "shipping Page";
        $data['slider']=FALSE;
       
        $data['main_content']=  $this->load->view('pages/shipping_page',$data,TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_category_info();
        $this->load->view('master', $data);
    }
    public function save_shipping(){
        $data=array();
        $data['shipping_name']=$this->input->post('shipping_name',TRUE);
        $data['shipping_email']=$this->input->post('shipping_email',TRUE);
        $data['shipping_phone']=$this->input->post('shipping_phone',TRUE);
        $data['country']=$this->input->post('country2',TRUE);
        $data['city']=$this->input->post('city',TRUE);
        $data['zip_code']=$this->input->post('zip_code',TRUE);
        $data['address']=$this->input->post('address',TRUE);
       $result= $this->Checkout_Model->save_shipping_info($data);
           if($result)
       {
        $sdata=array();
        $sdata['shipping_id']=$result;
       
        $this->session->set_userdata($sdata);
           redirect('Checkout/customer_payment');
       }
    }
     public function customer_payment(){
         $data=array();
        $data['title'] = "payment Page";
        $data['slider']=FALSE;
       
        $data['main_content']=  $this->load->view('pages/payment_page',$data,TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_category_info();
        $this->load->view('master', $data);
    }
    public function customer_logout(){
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('customer_name');
        redirect('Welcome');
    }
    public function confirm_order(){
//        $customer_id=  $this->session->userdata('customer_id');
        $shipping_id=  $this->session->userdata('shipping_id');
        $payment_id=  $this->session->userdata('payment_id');
        $grand_total=  $this->session->userdata('grand_total');
       if($shipping_id==NULL && $payment_id==NULL  && $grand_total==NULL){
            redirect('Welcome'); 
        }
        
        $payment_method=  $this->input->post('payment_method',TRUE);
       
        if($payment_method=='cash_on_delivery'){
            $pdata=array();
            $pdata['payment_type']=$payment_method;
            $this->Checkout_Model->save_payment_info($pdata);
            $this->Checkout_Model->save_order_info();
                    
        }  else {
             $pdata=array();
            $pdata['payment_type']=$payment_method;
            $this->Checkout_Model->save_payment_info($pdata);
            $this->Checkout_Model->save_order_info();
        }
        
        $data=array();
        $data['title'] = "Confirmm Order Page";
        $data['slider']=FALSE;
        $data['main_content']=  $this->load->view('pages/confirm_page','',TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_category_info();
        $this->load->view('master', $data);
    }
    
    
    
    
    
    
    
}
