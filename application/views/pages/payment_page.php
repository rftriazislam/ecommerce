     <!--breadcrumbs-->
<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="<?php echo base_url() ?>/Welcome" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li class="m_right_10 current"><a href="#" class="default_t_color">Checkout<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li><a href="#" class="default_t_color">Payment Page</a></li>
        </ul>
    </div>
</section>
<!--content-->
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <form action="<?php echo base_url()?>Checkout/confirm_order" method="post">
   
                <h2 class="tt_uppercase color_dark m_bottom_30">Payment</h2>
                <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                    <figure class="block_select clearfix relative m_bottom_15">
                        <input type="radio" checked name="payment_method" value="cash_on_delivery" class="d_none">
                        <img src="<?php echo base_url()?>asset/front_end/images/payment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                        <figcaption class="d_table d_sm_block">
                            <div class="d_table_cell d_sm_block p_sm_right_0 p_right_45 m_mxs_bottom_5">
                                <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Cash On Delivery</h5>
                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turp. Donec sit amet eros. </p>
                            </div>
                           
                        </figcaption>
                    </figure>
                    <hr class="m_bottom_20">
                    <figure class="block_select clearfix relative">
                        <input type="radio" name="payment_method" value="paypal" class="d_none">
                        <img src="<?php echo base_url()?>asset/front_end/images/payment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                        <figcaption>
                            <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Paypal</h5>
                            <p>Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. 
                                Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                        </figcaption>
                    </figure>
                    
                    <br>
                    <button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Payment Submit</button></a>
               </div>
              </form>
                
                </div>
                </div>
                </div>

