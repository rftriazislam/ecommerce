<?php


class Checkout_Model extends CI_Model {
    public function save_customer_info($data)
    {
        $this->db->insert('tbl_customer',$data);
          $result=  $this->db->insert_id('tbl_customer',$data);
          return $result;
        
        
    }
   public function check_customer_info($customer_email,$customer_password)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
       $this->db->where('customer_email',$customer_email);
       $this->db->where('customer_password',$customer_password);
        $query=$this->db->get();
        $result=$query->row();
      return $result;
    }
     public function save_shipping_info($data)
    {
        $this->db->insert('tbl_shipping',$data);
           $result= $this->db->insert_id();
          return $result;
    }
    public function save_payment_info($pdata){
        $this->db->insert('tbl_payment',$pdata);
           $result=  $this->db->insert_id();
        $this->session->set_userdata('payment_id',$result);
    }
    public function save_order_info(){
        $odata=array();
        $odata['customer_id']=  $this->session->userdata('customer_id');
        $odata['shipping_id']=  $this->session->userdata('shipping_id');
        $odata['payment_id']=  $this->session->userdata('payment_id');
        $odata['grand_total']=  $this->session->userdata('grand_total');
        
           $this->db->insert('tbl_order',$odata);
           $order_id=  $this->db->insert_id();
           $this->session->set_userdata('order_id',$order_id);
       $content=$this->cart->contents();
       foreach($content as $v_content){
           $oddata['order_id']=$this->session->userdata('order_id');
           $oddata['product_id']=$v_content['id'];
           $oddata['product_name']=$v_content['name'];
           $oddata['product_qty']=$v_content['qty'];
           $oddata['product_price']=$v_content['price'];
           $oddata['product_image']=$v_content['image'];
           $this->db->insert('tbl_order_details',$oddata);
                   
       }
    
         $sql="update tbl_productt as p,  tbl_order_details as od
              set p.product_quantity = p.product_quantity - od.product_qty
              where p.product_id=od.product_id and od.order_id='$order_id' ";
        $this->db->query($sql);
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('shipping_id');
        $this->session->unset_userdata('payment_id');
        $this->session->unset_userdata('order_id');
        $this->session->unset_userdata('g_total');
        $this->session->unset_userdata('grand_total');
        $this->cart->destroy();
       
       
       
    }
}
