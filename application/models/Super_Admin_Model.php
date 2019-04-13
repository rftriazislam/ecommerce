<?php


class Super_Admin_Model extends CI_Model {
    
    
    //-------------------- start category
    
    
    
    Public function save_category_info($data){
        $this->db->insert('tbl_category',$data);
    }
    
    Public function select_all_category_info(){
        $this->db->select('*');
        $this->db->from('tbl_category');
       $query=$this->db->get();
       $result=$query->result();
       return $result;
       
    }
    public function delete_category_by_category_id($category_id){
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
        
    }
    
    public function unpublished_category_by_category_id($category_id){
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    public function published_category_by_category_id($category_id){
        $this->db->set('publication_status',1);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    public function select_category_by_category_id($category_id){
         $this->db->select('*');
        $this->db->from('tbl_category');
       $this->db->where('category_id',$category_id);
       $query=$this->db->get();
       $result=$query->row();
       return $result;
}
public function update_category_info($data,$category_id){
  
    $this->db->where('category_id',$category_id);
    $this->db->update('tbl_category',$data);
   
    
}


//---------------------end category
//
//
//
// --------------------start menufacture

    public function save_manufacture_info($data){
    $this->db->insert('tbl_manufacture', $data );
    }
     Public function select_all_manufacture_info(){
       $this->db->select('*');
       $this->db->from('tbl_manufacture');
       $query=$this->db->get();
       $result=$query->result();
        return $result;
        }
       public function delete_manufacture_by_manufacture_id($manufacture_id){
        $this->db->where('manufacture_id',$manufacture_id);
        $this->db->delete('tbl_manufacture');
        
    }
           
        public function unpublished_manufacture_by_manufacture_id($manufacture_id) {
         $this->db->set('publication_status',0);
        $this->db->where('manufacture_id',$manufacture_id);
        $this->db->update('tbl_manufacture');
        }    
           
           
        public function published_manufacture_by_manufacture_id($manufacture_id){
            $this->db->set('publication_status',1);
        $this->db->where('manufacture_id',$manufacture_id);
        $this->db->update('tbl_manufacture');
        }

public function select_manufacture_by_manufacture_id($manufacture_id){
     $this->db->select('*');
        $this->db->from('tbl_manufacture');
       $this->db->where('manufacture_id',$manufacture_id);
       $query=$this->db->get();
       $result=$query->row();
       return $result;
}
public function update_manufacture_info($data,$manufacture_id){
  
    $this->db->where('manufacture_id',$manufacture_id);
    $this->db->update('tbl_manufacture',$data);
   
    
}


//----------------------end menufacture



//----------------------start product

public function select_all_category(){
      $this->db->select('*');
       $this->db->from('tbl_category');
       $this->db->where('publication_status',1);
       $query=$this->db->get();
       $result=$query->result();
       return $result;
}
public function select_all_manufacture(){
      $this->db->select('*');
        $this->db->from('tbl_manufacture');
       $this->db->where('publication_status',1);
       $query=$this->db->get();
       $result=$query->result();
       return $result;
}
 Public function save_product_info($data){
        $this->db->insert('tbl_productt',$data);
    }
    public function select_all_product_info(){
        $this->db->select('*');
        $this->db->from('tbl_productt');
      //  $this->db->where('product_publication_status',1);
       $query=$this->db->get();
        $result=$query->result();
        return $result;
        
     }
       public function delete_product_by_product_id($product_id){
        $this->db->where('product_id',$product_id);
        $this->db->delete('tbl_productt');
        
    }
   public function unpublished_product_by_product_id($product_id){
        $this->db->set('product_publication_status',0);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_productt');
   }
   public function published_product_by_product_id($product_id){
        $this->db->set('product_publication_status',1);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_productt');
   }
    
    
   public function select_product_by_product_id($product_id){
        $this->db->select('*');
        $this->db->from('tbl_productt');
       $this->db->where('product_id',$product_id);
       $query=$this->db->get();
       $result=$query->row();
       return $result;
   }
    public function update_product_info($data,$product_id){
  
    $this->db->where('product_id',$product_id);
    $this->db->update('tbl_productt',$data);
   
    
}
    
    //----------------------------end product
    //
    //
    //
    //------------------------------slider start
    
 Public function save_slider_info($data){
        $this->db->insert('tbl_slider',$data);
    }
    
    Public function select_all_slider_info(){
       $this->db->select('*');
       $this->db->from('tbl_slider');
       $query=$this->db->get();
       $result=$query->result();
        return $result;
        }
        public function delete_slider_by_slider_id($slider_id){
        $this->db->where('slider_id',$slider_id);
        $this->db->delete('tbl_slider');
        
    }
       public function unpublished_slider_by_slider_id($slider_id) {
         $this->db->set('publication_status',0);
        $this->db->where('slider_id',$slider_id);
        $this->db->update('tbl_slider');
        }    
           
           
        public function published_slider_by_slider_id($slider_id){
            $this->db->set('publication_status',1);
        $this->db->where('slider_id',$slider_id);
        $this->db->update('tbl_slider');
        }
        public function select_slider_by_slider_id($slider_id){
        $this->db->select('*');
        $this->db->from('tbl_slider');
       $this->db->where('slider_id',$slider_id);
       $query=$this->db->get();
       $result=$query->row();
       return $result;
}
// end slider
//------------star= banner

Public function save_banner_info($data){
        $this->db->insert('tbl_banner',$data);
    }

    
    public function select_all_banner_info(){
        $this->db->select('*');
       $this->db->from('tbl_banner');
       $query=$this->db->get();
       $result=$query->result();
        return $result;
    }
public function delete_banner_by_banner_id($banner_id){
    $this->db->where('banner_id',$banner_id);
        $this->db->delete('tbl_banner');
}
public function unpublished_banner_by_banner_id($banner_id){
      $this->db->set('publication_status',0);
        $this->db->where('banner_id',$banner_id);
        $this->db->update('tbl_banner');
    
        }
        public function published_banner_by_banner_id($banner_id){
           $this->db->set('publication_status',1);
        $this->db->where('banner_id',$banner_id);
        $this->db->update('tbl_banner'); 
        }
        public function banner_top_banner_by_banner_id($banner_id){
           $this->db->set('publication_status',1);
        $this->db->where('banner_id',$banner_id);
        $this->db->update('tbl_banner'); 
        }
        public function banner_middle_l_banner_by_banner_id($banner_id){
           $this->db->set('publication_status',2);
        $this->db->where('banner_id',$banner_id);
        $this->db->update('tbl_banner'); 
        }
        public function banner_middle_r_banner_by_banner_id($banner_id){
           $this->db->set('publication_status',3);
        $this->db->where('banner_id',$banner_id);
        $this->db->update('tbl_banner'); 
        }
        public function banner_bottom_banner_by_banner_id($banner_id){
           $this->db->set('publication_status',4);
        $this->db->where('banner_id',$banner_id);
        $this->db->update('tbl_banner'); 
        }

//------------end banner
    // start order
    public function select_all_order_info(){
         $this->db->select('*');
        $this->db->from('tbl_order');
        $query=$this->db->get();
        $result=$query->result();
        return $result; 
    }
   
   public function select_order_info_by_id($order_id)
   {
       $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('order_id',$order_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result; 
   }
   public function select_customer_info_by_id($customer_id)
   {
       $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id',$customer_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result; 
   }
   public function select_shipping_info_by_id($shipping_id)
   {
       $this->db->select('*');
        $this->db->from('tbl_shipping');
        $this->db->where('shipping_id',$shipping_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result; 
   }
   public function select_order_details_info($order_id)
   {
       $this->db->select('*');
        $this->db->from('tbl_order_details');
        $this->db->where('order_details_id',$order_id);
        $query=$this->db->get();
        $result=$query->result();
//        echo '<pre>';
//        print_r($result);
//        exit();
        return $result; 
   }
     public function unpending_order_by_order_id($order_id){
        $this->db->set('publication_status',0);
        $this->db->where('order_id',$order_id);
        $this->db->update('tbl_order');
   }
//   public function complete_order_by_order_id($order_id){
//        $this->db->set('publication_status',1);
//        $this->db->where('order_id',$order_id);
//        $this->db->update('tbl_order');
//   }
   public function delete_order_by_order_id($order_id){
        $this->db->where('order_id',$order_id);
        $this->db->delete('tbl_order');
   }
  
//end order 
    
    

    // end order
    
}