<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Froms</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Category</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <p class="text-center"style="color:yellow">
                <?php 
                $msg=$this->session->userdata('msg');
                if($msg){
                    echo $msg;
                    $this->session->unset_userdata('msg');
                }
                ?>
            </p>
            <form class="form-horizontal" name="edit_category" action="<?php echo base_url()?>Super_Admin/update_category" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name</label>
                        <div class="controls">
                            <input type="text" name="category_name" value="<?php echo $select_category->category_name?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                            <input type="hidden" name="category_id" value="<?php echo $select_category->category_id?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                    

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Category Description</label>
                        <div class="controls">
                            <textarea class="cleditor"  name="category_description" id="textarea2" rows="3"><?php echo $select_category->category_description?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publication_status">
                                <option >Select Category Name</option>
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

<script type="text/javascript">
    document.forms['edit_category'].elements['publication_status'].value='<?php echo $select_category->publication_status?>';
</script>