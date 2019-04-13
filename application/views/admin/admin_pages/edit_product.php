<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Forms</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Product</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <p class="text-center"style="color:yellow">
                <?php
                $msg = $this->session->userdata('msg');
                if ($msg) {
                    echo $msg;
                    $this->session->unset_userdata('msg');
                }
                ?>
            </p>
            <form class="form-horizontal" action="<?php echo base_url() ?>Super_Admin/update_product" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name</label>
                        <div class="controls">
                            <input type="text" name="product_name" value="<?php echo $select_product->product_name?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                            <input type="hidden" name="product_id" value="<?php echo $select_product->product_id?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Category Name</label>
                        <div class="controls">
                            <select id="selectError3" name="category_id">
                                <option >Select Category Name</option>

                                <?php
                                foreach ($all_category as $V_category) {
                                    ?>
                                    <option value="<?php echo $V_category->category_id ?>"><?php echo $V_category->category_name ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Manufacture Name</label>
                        <div class="controls">
                            <select id="selectError3" name="manufacture_id">
                               
                                <option >Select Category Name</option>
                                <?php foreach ($all_manufacture as $V_manufacture){
                                    
                                
                                 ?>
                                <option value="<?php echo $V_manufacture->manufacture_id ?>"><?php echo $V_manufacture->manufacture_name ?></option>
                                <?php }?>

                            </select>
                        </div>
                    </div>


                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Category Description</label>
                        <div class="controls">
                            <textarea class="cleditor"  name="product_description" id="textarea2" rows="3"><?php echo $select_product->product_description?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Image</label>
                        <div class="controls">
                            <input type="file" name="product_image" class="span6 typeahead" id="typeahead" value="<?php echo $select_product->product_image?>"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Old Price</label>
                        <div class="controls">
                            <input type="text" name="product_old_price" value="<?php echo $select_product->product_old_price?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product New Price</label>
                        <div class="controls">
                            <input type="text" name="product_new_price" value="<?php echo $select_product->product_new_price?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Quantity</label>
                        <div class="controls">
                            <input type="text" name="product_quantity" value="<?php echo $select_product->product_quantity?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product SKU</label>
                        <div class="controls">
                            <input type="text" name="product_sku" value="<?php echo $select_product->product_sku?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Service</label>
                        <div class="controls">
                            <input type="text" name="product_service" value="<?php echo $select_product->product_service?>"class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="product_publication_status" >
                                <option >Select product Name</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                               
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->