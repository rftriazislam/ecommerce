<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cart_Model
 *
 * @author riaz
 */
class Cart_Model extends CI_Model{
   public function select_product_info_by_product_id($product_id){
        $this->db->select('*');
        $this->db->from('tbl_productt');
        $this->db->where('product_id',$product_id);
        $query=$this->db->get();
        $result=$query->row();
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
    
}
