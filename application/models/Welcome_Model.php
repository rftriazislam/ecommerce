<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome_Model
 *
 * @author riaz
 */
class Welcome_Model extends CI_Model{
     public function select_all_category_info(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
     
                
    }
    
     public function select_all_category(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
     
                
    }
    
   
      public function select_all_product_info(){
        $this->db->select('*');
        $this->db->from('tbl_productt');
        $this->db->where('product_publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
     
                
    }
      public function select_all_manufacture_info(){
        $this->db->select('*');
        $this->db->from('tbl_manufacture');
        $this->db->where('publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
     
                
    }
      public function select_all_slider_info(){
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
     
                
    }
      public function select_all_product_info_by_product_id($product_id){
        $this->db->select('*');
        $this->db->from('tbl_productt');
        $this->db->where('product_id',$product_id);
        $this->db->join('tbl_manufacture','tbl_productt.manufacture_id=tbl_manufacture.manufacture_id');
        $query=$this->db->get();
        $result=$query->row();
        return $result;
     
                
    }
     public function select_all_category_info_by_category_id($category_id){
        $this->db->select('*');
        $this->db->from('tbl_productt');
       $this->db->where('category_id',$category_id);
       $query=$this->db->get();
       $result=$query->result();
       return $result;
    
               
    }
    public function select_new_product_info(){
        $this->db->select('*');
        $this->db->from('tbl_productt');
        $this->db->where('product_publication_status',1);
        $this->db->order_by('product_id','desc');
        $this->db->limit(10);
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
                
    }
    public function select_best_product_info(){
        $this->db->select('*');
        $this->db->from('tbl_productt');
        $this->db->where('product_publication_status',1);
        $this->db->order_by('product_hit_count','desc');
        $this->db->limit(3);
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
                
    }
    public function select_popular_product_info(){
        $this->db->select('*');
        $this->db->from('tbl_productt');
        $this->db->where('product_publication_status',1);
        $this->db->order_by('product_hit_count','aesc');
        $this->db->limit(3);
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
                
    }
    public function update_product_hit_count($hit_count,$product_id){
     
         
        
        $this->db->set('product_hit_count', $hit_count );
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_productt');
    
    }
  
   
  public function select_product_info(){
         $this->db->select('*');
        $this->db->from('tbl_productt');
       $this->db->where('product_publication_status',1);
       $query=$this->db->get();
       $result=$query->result();
       return $result;
                
    }
   
  
  public function select_banner_info(){
         $this->db->select('*');
        $this->db->from('tbl_banner');
//       $this->db->where('publication_status',1);
//       $this->db->where('publication_status',2);
//       $this->db->where('publication_status',3);
//       $this->db->where('publication_status',4);
      
       $query=$this->db->get();
       $result=$query->result();
       return $result;
                
    }
    public function wishlist_by_product_id($data){
        $this->db->insert('tbl_wishlist',$data);
    }
    
    public function wishlist_product_id(){
         $this->db->select('*');
        $this->db->from('tbl_wishlist');
       $this->db->where('product_publication_status',1);
       $query=$this->db->get();
       $result=$query->result();
       return $result;
                
    }
    public function delete_wishlist_id_by_wishlist_id_id($wishlist_id){
         $this->db->where('wishlist_id',$wishlist_id);
        $this->db->delete('tbl_wishlist');
    }
     public function select_wishlist_info_by_wishlist_id($wishlist_id){
        $this->db->select('*');
        $this->db->from('tbl_wishlist');
        $this->db->where('wishlist_id',$wishlist_id);
        $query=$this->db->get();
        $result=$query->row();
        
        return $result;
   }
}
