<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cart
 *
 * @author riaz
 */
class Cart extends CI_Controller {
      public function  add_cart($product_id){
      $qty=  $this->input->post('qty',TRUE);
     $product_info=$this->Cart_Model->select_product_info_by_product_id($product_id);
      $data=array(
      'id'  => $product_info->product_id,
       'qty' =>$qty,
          'price' => $product_info->product_new_price,
          'name'  =>$product_info->product_name ,
          'sku'   =>$product_info->product_sku,
          'image'  =>$product_info->product_image
          
          ); 
        
          $this->cart->insert($data);
       redirect('Cart/show_cart');
    }
    public function show_cart(){
         $data = array();
        $data['title'] = " Show Cart Page";
        $data['slider']=FALSE;
         $data['all_cate']=$this->Cart_Model->select_all_category();
        $data['main_content']=$this->load->view('pages/cart_page',$data,TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_category_info();
        $this->load->view('master', $data);
    }
    public function update_cart($rowid){
         $data=array(
      'rowid'  => $rowid,
       'qty' =>  $this->input->post('qty',TRUE)
       );  
          $this->cart->update($data);
          print_r($data);
        
       redirect('Cart/show_cart');
    }
    public function remove_cart($rowid){
         $data=array(
      'rowid'  => $rowid,
       'qty' => 0
       );  
          $this->cart->update($data);
          print_r($data);
        
       redirect('Cart/show_cart');
    }
    
    
}
