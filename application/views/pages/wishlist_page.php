<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="#" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li><a href="#" class="default_t_color">Wishlist</a></li>
        </ul>
    </div>
</section>
<!--content-->
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                <h2 class=" text-center color_dark m_bottom_20">My Wishlist</h2>

                <hr class="m_bottom_30 divider_type_3">
                <!--wishlist table-->
                <table class="table_type_1 responsive_table full_width t_align_l r_corners wraper shadow bg_light_color_1 m_bottom_30">
                    <thead>
                        <tr class="f_size_large">
                            <!--titles for td-->
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>sku</th>
                            <th>Price</th>
                            <th>Quantity</th> 
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($wish_product as $v_product) {
                            ?>
                            <tr>
                                <!--product image-->
                                <td data-title="Product Image"><img src="<?php echo base_url() . $v_product->image ?>" alt=""></td>
                                <!--product name and category-->
                                <td data-title="Product Name">
                                    <span class="fw_medium f_size_ex_large color_dark "><?php echo $v_product->name ?></span><br>

                                </td>
                                <td data-title="sku ">
                                    <span class="fw_medium  f_size_ex_large color_dark "><?php echo $v_product->sku ?></span>

                                </td>
                                <!--product price-->
                                <td data-title="Price">
                                    <span class="fw_medium  f_size_ex_large color_dark ">TK.<?php echo $v_product->price ?></span>
                                </td>
                                <!--quanity-->
                                <td data-title="Quantity">
                                    <span class="fw_medium  f_size_ex_large color_dark "><?php echo $v_product->qty ?></span>
                                </td>
                                <!--add or remove buttons-->
                                <td  data-title="Action">

                                    
                                        <a href="<?php echo base_url() ?>Welcome/add_cart_wishlist/<?php echo $v_product->wishlist_id?>" class="color_dark">
                                            <button  class="  button_type_13 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large ">Add to cart</button>
                                        </a>
                                   
                                    <br>
                                    <a href="<?php echo base_url() ?>Welcome/remove_wishlist/<?php echo $v_product->wishlist_id ?>" class="color_dark">
                                        <button class="button_type_1 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large">Remove</button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>


            </section>
            <!--right column-->
            <aside class="col-lg-3 col-md-3 col-sm-3">
                <!--widgets-->
                <figure class="widget shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">Categories</h3>
                    </figcaption>
                    <div class="widget_content">
                        <!--Categories list-->
                        <ul class="categories_list">

                            <?php
                            foreach ($all_category as $V_category) {
                                ?>
                                <li class="active">
                                    <a href="<?php echo base_url() ?>Welcome/product_page" class="f_size_large scheme_color d_block relative">
                                        <b><?php echo$V_category->category_name ?></b>
                                        <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                    </a>

                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </figure>


                <!--banner-->
                <a href="#" class="d_block r_corners m_bottom_30">
                    <img src="images/banner_img_6.jpg" alt="">
                </a>
                <!--Bestsellers-->
                <figure class="widget shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">Bestsellers</h3>
                    </figcaption>
                    <div class="widget_content">
                        <div class="clearfix m_bottom_15">
                            <img src="images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
                            <!--rating-->
                            <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                            <p class="scheme_color">$61.00</p>
                        </div>
                        <hr class="m_bottom_15">
                        <div class="clearfix m_bottom_15">
                            <img src="images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block bt_link">Elementum vel</a>
                            <!--rating-->
                            <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                            <p class="scheme_color">$57.00</p>
                        </div>
                        <hr class="m_bottom_15">
                        <div class="clearfix m_bottom_5">
                            <img src="images/bestsellers_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block bt_link">Crsus eleifend elit</a>
                            <!--rating-->
                            <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                            <p class="scheme_color">$24.00</p>
                        </div>
                    </div>
                </figure>
            </aside>
        </div>
    </div>
</div>