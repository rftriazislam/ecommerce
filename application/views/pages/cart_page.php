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
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                <h2 class="tt_uppercase color_dark m_bottom_25">Cart</h2>
                <!--cart table-->
                <table class="table_type_4 responsive_table full_width r_corners wraper shadow t_align_l t_xs_align_c m_bottom_30">
                    <thead>
                        <tr class="f_size_large">
                            <!--titles for td-->
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>SKU</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($this->cart->contents() as $items) {
                            
                            ?>
                            <tr>
                                <!--Product name and image-->
                                <td data-title="Product Image " class="t_md_align_c">
                                    <img width="60"  src="<?php echo base_url() . $items['image'] ?>" alt="" class="m_md_bottom_4 d_xs_block d_xs_centered">

                                </td>
                                <td data-title="Product name" class="t_md_align_c">
                                    <p class="d_inline_b m_left_5 color_dark"><?php echo $items['name'] ?></p>
                                </td>
                                <!--product key-->
                                <td data-title="SKU"><?php echo $items['sku'] ?></td>
                                <!--product price-->
                                <td data-title="Price">

                                    <p class="f_size_large color_dark">TK.<?php echo $items['price'] ?></p>
                                </td>
                                <!--quanity-->
                                <td data-title="Quantity">
                                    <form action="<?php echo base_url() ?>Cart/update_cart/<?php echo $items['rowid'] ?>" method="post">
                                        <input type="number" name="qty" min="0" value="<?php echo $items['qty'] ?>">
                                        <br><br>
                                        <i class="fa fa-check f_size_medium m_right_5" ></i><input class="color_dark" type="submit" value="Update">

                                    </form>
                                    <!--                        <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark m_bottom_10">
                                                                <button class="bg_tr d_block f_left"  data-direction="down">-</button>
                                                                <input type="text" name="" readonly value="<?php echo $items['qty'] ?>" class="f_left">
                                                                <button class="bg_tr d_block f_left" data-direction="up">+</button>
                                                            </div>
                                                            <div>
                                    -->                          <!--  <a href="<?php echo base_url() ?>Cart/update_cart/<?php echo $items['rowid'] ?>"  value="<?php echo $items['qty'] ?>"  class="color_dark"><i class="fa fa-check f_size_medium m_right_5" ></i>Update</a><br><!--
                                    -->                           


                                    <a href="<?php echo base_url(); ?>Cart/remove_cart/<?php echo $items['rowid'] ?>"  value="<?php echo $items['qty'] ?>"  class="color_dark"><i class="fa fa-times f_size_medium m_right_5"></i>Remove</a><br><!--
                                                            </div>-->

                                </td>
                                <!--subtotal-->
                                <td data-title="Subtotal">
                                    <p class="f_size_large fw_medium scheme_color">TK.<?php echo $items['subtotal'] ?></p>
                                </td>
                              
                            </tr>
                        <?php } ?>
                        <!--prices-->



                        <tr>
                            <td colspan="5">
                                <p class="fw_medium f_size_large t_align_r t_xs_align_c">Vat Total:</p>
                            </td>
                            <td colspan="1">
                                <p class="fw_medium f_size_large color_dark">TK.00.00</p>
                            </td>
                        </tr>

                        <!--total-->
                        <tr>
                            <td colspan="5" class="v_align_m d_ib_offset_large t_xs_align_l">
                                <!--coupon-->
                               <form class="d_ib_offset_0 d_inline_middle half_column d_xs_block w_xs_full m_xs_bottom_5">
<!--                                    <input type="text" placeholder="Enter your coupon code" name="" class="r_corners f_size_medium">
                                    <button class="button_type_4 r_corners bg_light_color_2 m_left_5 mw_0 tr_all_hover color_dark">Save</button>-->
                                </form>
                                <p class="fw_medium f_size_large t_align_r scheme_color p_xs_hr_0 d_inline_middle half_column d_ib_offset_normal d_xs_block w_xs_full t_xs_align_c">Grand Total:</p>
                            </td>
                            <td colspan="1" class="v_align_m">
                                <p class="fw_medium f_size_large scheme_color m_xs_bottom_10">TK.
                                    <?php
                                   $grand_total= $this->cart->total() ;
                                   $this->session->set_userdata('grand_total',$grand_total);
                                   echo $grand_total;
                                    ?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="<?php echo base_url() ;?>Welcome"> <button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Continue Shoping</button></a>
                        </td>
                            <td colspan="2">
                                <a href="<?php echo base_url() ;?>Checkout">  <button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Login</button></a>
                        </td>
                        </tr>
                    </tbody>
                </table>
                <!--tabs-->

                
              
            </section>
            <!--right column-->
            <aside class="col-lg-3 col-md-3 col-sm-3">
                <!--widgets-->
                <figure class="widget shadow r_corners wrapper m_bottom_30 ">
                    <figcaption>
                        <h3 class="color_light ">Categories Name</h3>
                    </figcaption>
                    <div class="widget_content">
                        <!--Categories list-->
                        <ul class="categories_list">
                            <?php
                            foreach ($all_cate as $V_category) {
                                ?>
                                <li class="active">
                                    <a href="#" class="f_size_large bg_info d_block relative">
                                        <b><?php echo $V_category->category_name ?></b>
                                        <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                    </a>

                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </figure>
                <!--compare products-->
                <figure class="widget shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">Compare Products</h3>
                    </figcaption>
                    <div class="widget_content">
                        <div class="clearfix m_bottom_15 relative cw_product">
                            <img src="images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
                            <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                        </div>
                        <hr class="m_bottom_15">
                        <div class="clearfix m_bottom_25 relative cw_product">
                            <img src="images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block bt_link">Elemenum vel</a>
                            <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                        </div>
                        <a href="#" class="color_dark"><i class="fa fa-files-o m_right_10"></i>Go to Compare</a>
                    </div>
                </figure>
                <!--wishlist-->
                <figure class="widget shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">Wishlist</h3>
                    </figcaption>
                    <div class="widget_content">
                        <div class="clearfix m_bottom_15 relative cw_product">
                            <img src="images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
                            <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                        </div>
                        <hr class="m_bottom_15">
                        <div class="clearfix m_bottom_25 relative cw_product">
                            <img src="images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block bt_link">Elemenum vel</a>
                            <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                        </div>
                        <a href="#" class="color_dark"><i class="fa fa-heart-o m_right_10"></i>Go to Wishlist</a>
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
                            <a href="#" class="color_dark d_block bt_link">Ut dolor dapibus</a>
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
                <!--tags-->
                <figure class="widget shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">Tags</h3>
                    </figcaption>
                    <div class="widget_content">
                        <div class="tags_list">
                            <a href="#" class="color_dark d_inline_b v_align_b">accessories,</a>
                            <a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">bestseller,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">clothes,</a>
                            <a href="#" class="color_dark d_inline_b f_size_big v_align_b">dresses,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">fashion,</a>
                            <a href="#" class="color_dark d_inline_b f_size_large v_align_b">men,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">pants,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">sale,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">short,</a>
                            <a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">skirt,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">top,</a>
                            <a href="#" class="color_dark d_inline_b f_size_big v_align_b">women</a>
                        </div>
                    </div>
                </figure>
                <!--New products-->
                <figure class="widget shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">New Products</h3>
                    </figcaption>
                    <div class="widget_content">
                        <div class="clearfix m_bottom_15">
                            <img src="images/new_products_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block m_bottom_5 bt_link">Ut tellus dolor dapibus</a>
                            <p class="scheme_color">$61.00</p>
                        </div>
                        <hr class="m_bottom_15">
                        <div class="clearfix m_bottom_15">
                            <img src="images/new_products_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block m_bottom_5 bt_link">Elementum vel</a>
                            <p class="scheme_color">$57.00</p>
                        </div>
                        <hr class="m_bottom_15">
                        <div class="clearfix m_bottom_5">
                            <img src="images/new_products_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block m_bottom_5 bt_link">Crsus eleifend elit</a>
                            <p class="scheme_color">$24.00</p>
                        </div>
                    </div>
                </figure>
                <!--Specials-->
                <figure class="widget shadow r_corners wrapper m_bottom_30">
                    <figcaption class="clearfix relative">
                        <h3 class="color_light f_left f_sm_none m_sm_bottom_10 m_xs_bottom_0">Specials</h3>
                        <div class="f_right nav_buttons_wrap_type_2 tf_sm_none f_sm_none clearfix">
                            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large color_light t_align_c bg_tr f_left tr_delay_hover r_corners sc_prev"><i class="fa fa-angle-left"></i></button>
                            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large color_light t_align_c bg_tr f_left m_left_5 tr_delay_hover r_corners sc_next"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </figcaption>
                    <div class="widget_content">
                        <div class="specials_carousel">
                            <!--carousel item-->
                            <div class="specials_item">
                                <a href="#" class="d_block d_xs_inline_b wrapper m_bottom_20">
                                    <img class="tr_all_long_hover" src="images/product_img_6.jpg" alt="">
                                </a>
                                <h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
                                <p class="f_size_large m_bottom_15"><s>$79.00</s> <span class="scheme_color">$36.00</span></p>
                                <button class="button_type_4 mw_sm_0 r_corners color_light bg_scheme_color tr_all_hover m_bottom_5">Add to Cart</button>
                            </div>
                            <!--carousel item-->
                            <div class="specials_item">
                                <a href="#" class="d_block d_xs_inline_b wrapper m_bottom_20">
                                    <img class="tr_all_long_hover" src="images/product_img_7.jpg" alt="">
                                </a>
                                <h5 class="m_bottom_10"><a href="#" class="color_dark">Integer rutrum ante </a></h5>
                                <p class="f_size_large m_bottom_15"><s>$79.00</s> <span class="scheme_color">$36.00</span></p>
                                <button class="button_type_4 mw_sm_0 r_corners color_light bg_scheme_color tr_all_hover m_bottom_5">Add to Cart</button>
                            </div>
                            <!--carousel item-->
                            <div class="specials_item">
                                <a href="#" class="d_block d_xs_inline_b wrapper m_bottom_20">
                                    <img class="tr_all_long_hover" src="images/product_img_5.jpg" alt="">
                                </a>
                                <h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
                                <p class="f_size_large m_bottom_15"><s>$79.00</s> <span class="scheme_color">$36.00</span></p>
                                <button class="button_type_4 mw_sm_0 r_corners color_light bg_scheme_color tr_all_hover m_bottom_5">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </figure>
                <!--Popular articles-->
                <figure class="widget shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">Popular Articles</h3>
                    </figcaption>
                    <div class="widget_content">
                        <article class="clearfix m_bottom_15">
                            <img src="images/article_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block bt_link p_vr_0">Aliquam erat volutpat.</a>
                            <p class="f_size_medium">50 comments</p>
                        </article>
                        <hr class="m_bottom_15">
                        <article class="clearfix m_bottom_15">
                            <img src="images/article_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block p_vr_0 bt_link">Integer rutrum ante </a>
                            <p class="f_size_medium">34 comments</p>
                        </article>
                        <hr class="m_bottom_15">
                        <article class="clearfix m_bottom_5">
                            <img src="images/article_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block p_vr_0 bt_link">Vestibulum libero nisl, porta vel</a>
                            <p class="f_size_medium">21 comments</p>
                        </article>
                    </div>
                </figure>
                <!--Latest articles-->
                <figure class="widget shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">Latest Articles</h3>
                    </figcaption>
                    <div class="widget_content">
                        <article class="clearfix m_bottom_15">
                            <img src="images/article_img_4.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block bt_link p_vr_0">Aliquam erat volutpat.</a>
                            <p class="f_size_medium">25 January, 2013</p>
                        </article>
                        <hr class="m_bottom_15">
                        <article class="clearfix m_bottom_15">
                            <img src="images/article_img_5.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block p_vr_0 bt_link">Integer rutrum ante </a>
                            <p class="f_size_medium">21 January, 2013</p>
                        </article>
                        <hr class="m_bottom_15">
                        <article class="clearfix m_bottom_5">
                            <img src="images/article_img_6.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="#" class="color_dark d_block p_vr_0 bt_link">Vestibulum libero nisl, porta vel</a>
                            <p class="f_size_medium">18 January, 2013</p>
                        </article>
                    </div>
                </figure>
            </aside>
        </div>
    </div>
</div>
