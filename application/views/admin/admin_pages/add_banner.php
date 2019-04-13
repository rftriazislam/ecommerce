<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">from</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Banner</h2>
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
            <form class="form-horizontal" action="<?php echo base_url()?>Super_Admin/save_banner" method="post"  enctype="multipart/form-data" >
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Banner Name</label>
                        <div class="controls">
                            <input type="text" name="banner_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Banner date</label>
                        <div class="controls">
                            <input type="date" name="banner_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Banner  image</label>
                        <div class="controls">
                            <input type="file" name="banner_image" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                        </div>
                    </div>
                 
                   
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Banner Type</label>
                        <div class="controls">
                            <select id="selectError3" name="banner_type">
                                <option >Select banner Type</option>
                                <option value="TOP">Top</option>
                                <option value="MIDDLE">Middle</option>
                                <option value="BOTTOM">Bottom</option>
                               
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publication_status">
                                <option >Select Banner Status</option>
                       
                                
                                <option value="0">Unpublished</option>
                               
                                <option value="1">TOP</option>
                                <option value="2">MIDDLE L</option>
                                  <option value="3">MIDDLE R</option>
                                <option value="4">BOTTOM</option>
                                
                               
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Banner</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
