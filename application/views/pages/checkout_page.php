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

            <div class="tabs m_bottom_45">
                <!--tabs navigation-->
                <nav>
                    <ul class="tabs_nav horizontal_list clearfix">
                        <li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Login</a></li>
                        <li><a href="#tab-2" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Register</a></li>
                    </ul>
                </nav>
                <section class="tabs_content shadow r_corners">
                    <div id="tab-1">
                        <!--login form-->
                        <h5 class="fw_medium m_bottom_15" style="color:red">
                            
                            <?php $msg=$this->session->userdata('message');
                                 if($msg) {
                                     echo $msg;
                                     $this->session->unset_userdata('message');
                                 }  
                                ?>
                        </h5>
                        <form action="<?php echo base_url();?>Checkout/customer_login_check" method="post">
                            <ul>
                                <li class="clearfix m_bottom_15">
                                    <div class="half_column type_2 f_left">
                                        <label for="username" class="m_bottom_5 d_inline_b">Customer Email</label>
                                        <input type="email" id="username" name="customer_email" class="r_corners full_width m_bottom_5">
                                        <a href="#" class="color_dark f_size_medium">Forgot your username?</a>
                                    </div>
                                    <div class="half_column type_2 f_left">
                                        <label for="password" class="m_bottom_5 d_inline_b">Customer Password</label>
                                        <input type="password" id="pass" name="customer_password" class="r_corners full_width m_bottom_5">
                                        <a href="#" class="color_dark f_size_medium">Forgot your password?</a>
                                    </div>
                                </li>
                                <li class="m_bottom_15">
                                    <input type="checkbox" class="d_none" name="checkbox_4" id="checkbox_4"><label for="checkbox_4">Remember me</label>
                                </li>
                                <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Log In</button></li>
                            </ul>
                        </form>
                    </div>
                    <div id="tab-2">
                        <form action="<?php echo base_url();?>Checkout/customer_registration" method="post">
                            <ul>
                                <li class="m_bottom_25">
                                    <label for="d_name" class="d_inline_b m_bottom_5 required">Customer Name</label>
                                    <input type="text" id="d_name" name="customer_name" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label for="u_email" class="d_inline_b m_bottom_5 required">Customer Email</label>
                                    <input type="email" id="u_email" name="customer_email" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label for="u_name" class="d_inline_b m_bottom_5 required">Customer Phone</label>
                                    <input type="text" id="u_name" name="customer_phone" class="r_corners full_width">
                                </li>

                                <li class="m_bottom_15">
                                    <label for="u_pass" class="d_inline_b m_bottom_5 required">Password</label>
                                    <input type="password" id="u_pass" name="customer_password" class="r_corners full_width">
                                </li>
                                <li>
                                    <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Confirm Password</label>
                                    <input type="password" id="u_repeat_pass" name="customer_password" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_25">
                                    <label for="d_name" class="d_inline_b m_bottom_5 required">City</label>
                                    <input type="text" id="d_name" name="city" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_25">
                                    <label for="d_name" class="d_inline_b m_bottom_5 required">Zip Code</label>
                                    <input type="text" id="d_name" name="zip_code" class="r_corners full_width">
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



                                <li colspan="2">
                                    <label for="notes" class="d_inline_b m_bottom_5">Address</label>
                                    <textarea id="notes" name="address" class="r_corners notes full_width"></textarea>
                                </li>


                            </ul>
                            <td colspan="2">
                                <a href="<?php echo base_url(); ?>Checkout">  <button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Login</button></a>
                            </td>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

