<!--breadcrumbs-->
<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="<?php echo base_url() ?>/Welcome" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li class="m_right_10 current"><a href="#" class="default_t_color">Checkout<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li><a href="#" class="default_t_color">Shopping Cart</a></li>
        </ul>
    </div>
</section>
<!--content-->
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
                <h2 class="color_dark tt_uppercase m_bottom_25">Shipment Information</h2>
                <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                            <h5 class="fw_medium m_bottom_15">Shipping To</h5>
                            <form action="<?php echo base_url();?>Checkout/save_shipping" method="post">
                                <ul>
                                    <li class="m_bottom_15">
                                        <label for="c_name_1" class="d_inline_b m_bottom_5">shipping Name</label>
                                        <input type="text" id="c_name_1" name="shipping_name" class="r_corners full_width">
                                    </li>
                                   
                                    <li class="m_bottom_15">
                                        <label for="f_name_1" class="d_inline_b m_bottom_5 required">Shipping Email</label>
                                        <input type="email" id="f_name_1" name="shipping_email" class="r_corners full_width">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="m_name_1" class="d_inline_b m_bottom_5 required">Shipping Phone</label>
                                        <input type="text" id="m_name_1" name="shipping_phone" class="r_corners full_width">
                                    </li>
                                  
                                    <li class="m_bottom_15">
                                        <label for="address_1" class="d_inline_b m_bottom_5 required">city</label>
                                        <input type="text" id="address_1" name="city" class="r_corners full_width">
                                    </li>
                                    
                                       <li class="m_bottom_15">
                                    <label class="d_inline_b m_bottom_5">Country</label>
                                    <!--product name select-->
                                    <div class="custom_select relative">
                                        <div class="select_title type_2 r_corners relative color_dark mw_0">Select Country</div>
                                        <ul class="select_list d_none"></ul>
                                        <select id="country2" name="country2"></select>
                                        <script  type="text/javascript">
                                            populateCountries("country2");
                                        </script>
                                    </div>
                                </li>
                                    
                                    
                                    <li class="m_bottom_15">
                                        <label for="code_1" class="d_inline_b m_bottom_5 required">Zip Code</label>
                                        <input type="text" id="code_1" name="zip_code" class="r_corners full_width">
                                    </li>
                                    <li colspan="2">
                                    <label for="notes" class="d_inline_b m_bottom_5">Address</label>
                                    <textarea id="notes" name="address" class="r_corners notes full_width"></textarea>
                                </li>
                                    
                                </ul>
                                <td colspan="2">
                                <button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Shipping Login</button></a>
                            </td>
                            </form>
                        </div>
                     
                    </div>
                </div>
        </div>
        </div>
        </div>
