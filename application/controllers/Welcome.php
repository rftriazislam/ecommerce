  <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{

    public function index() {
        $data = array();
        $data['title'] = "Home Page";
        $data['slider']=TRUE;
         $data['all_category']=$this->Welcome_Model->select_all_category();
        $data['all_manufacture']=$this->Welcome_Model->select_all_manufacture_info();
        $data['all_slider']=$this->Welcome_Model->select_all_slider_info();
        $data['all_product']=$this->Welcome_Model->select_all_product_info();
        $data['new_product']=$this->Welcome_Model->select_new_product_info();
        $data['best_product']=$this->Welcome_Model->select_best_product_info();
        $data['popular_product']=$this->Welcome_Model->select_popular_product_info();
        $data['banner']=$this->Welcome_Model->select_banner_info();
        
        $data['main_content']=$this->load->view('pages/home_page',$data,TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_category_info();
        $this->load->view('master', $data);
    }
    public function product_details($product_id,$category_id){
      $data = array();
        $data['title'] = "Product Details Page";
        $data['slider']=FALSE;
        $data['all_cat']=$this->Welcome_Model->select_all_category();
        $data['select_product']=$this->Welcome_Model->select_all_product_info_by_product_id($product_id);
        
        $hit_count=$data['select_product']->product_hit_count+1;
       
        $this->Welcome_Model->update_product_hit_count($hit_count,$product_id);
        
        
        $data['category_product']=$this->Welcome_Model->select_all_category_info_by_category_id($category_id);
         $data['main_content']=$this->load->view('pages/product_details_pages',$data,TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_category_info();
        $this->load->view('master', $data);   
    }
    public function category_product($category_id){
      $data = array();
        $data['title'] = "Category Product Page";
        $data['slider']=FALSE;
        $data['all_categor']=$this->Welcome_Model->select_all_category();  
        
        $data['category_product']=$this->Welcome_Model->select_all_category_info_by_category_id($category_id);
         
        $data['main_content']=$this->load->view('pages/category_product_pages',$data,TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_category_info();
        $this->load->view('master', $data);   
        
        
        
    }
    public function contact() {
        $data = array();
        $data['title'] = "Contact Page";
         $data['slider']=FALSE;
        $data['main_content']=$this->load->view('pages/contact','',TRUE);
         $data['all_category']=$this->Welcome_Model->select_all_category();
        $this->load->view('master', $data);
    }
      public function blog() {
        $data = array();
        $data['title'] = "Blog Page";
         $data['slider']=FALSE;
        $data['main_content']=$this->load->view('pages/blog','',TRUE);
         $data['all_category']=$this->Welcome_Model->select_all_category();
        $this->load->view('master', $data);
    }
      public function feature() {
        $data = array();
        $data['title'] = "Feature Page";
         $data['slider']=FALSE;
        $data['main_content']=$this->load->view('pages/feature','',TRUE);
         $data['all_category']=$this->Welcome_Model->select_all_category();
        $this->load->view('master', $data);
    }
 public function product_page(){
     $data=array();
     $data['slider']=FALSE;
     $data['title']='Product_page';
     $data['all_categor']=$this->Welcome_Model->select_all_category();
     $data['product_name']=  $this->Welcome_Model->select_product_info();
     
     $data['main_content']=$this->load->view('pages/product_page',$data,TRUE);
      $data['all_category']=$this->Welcome_Model->select_all_category();
     $this->load->view('master',$data);
 }
 
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
    

    
    // start wishlist
    public function wishlist_data($product_id){
       $qty=1;
        $product_info=$this->Cart_Model->select_product_info_by_product_id($product_id);
      $data=array(
      'id'  => $product_info->product_id,
       'qty' =>$qty,
          'price' => $product_info->product_new_price,
          'name'  =>$product_info->product_name ,
          'sku'   =>$product_info->product_sku,
          'image'  =>$product_info->product_image
          
          ); 
          $this->Welcome_Model->wishlist_by_product_id($data);
          redirect('Welcome/wishlist');
    }
    
    
    
     
    public function wishlist(){
        $data=array();
        $data['slider']=FALSE;
        $data['title']='Wishlist_page';
      
         $data['all_category']=$this->Welcome_Model->select_all_category();
        $data['wish_product']=  $this->Welcome_Model->wishlist_product_id();
        $data['main_content']=  $this->load->view('pages/wishlist_page',$data,TRUE);
         $data['all_category']=$this->Welcome_Model->select_all_category();
        $this->load->view('master',$data);
   
        }
        
        public function remove_wishlist($wishlist_id){
         $this->Welcome_Model->delete_wishlist_id_by_wishlist_id_id($wishlist_id);
        redirect('Welcome/wishlist'); 
        }


   public function  add_cart_wishlist($wishlist_id){
      $qty=  $this->input->post('qty',TRUE);
     $product_info=$this->Welcome_Model->select_wishlist_info_by_wishlist_id($wishlist_id);
      $data=array(
      'id'  => $product_info->wishlist_id,
       'qty' =>$qty,
          'price' => $product_info->price,
          'name'  =>$product_info->name ,
          'sku'   =>$product_info->sku,
          'image'  =>$product_info->image
          
          ); 
     
      
        $this->cart->insert($data);
        
       redirect('Cart/show_cart');
    }

        // end wishlist
}
