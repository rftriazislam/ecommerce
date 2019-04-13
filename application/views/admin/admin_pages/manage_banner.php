
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
           
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Banner ID</th>
                        <th>Banner Name</th>
                         <th>Banner Status</th>
                        <th>Banner Type</th>
                        
                       
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody> 
                    <?php 
                    foreach ($all_banner as $V_banner) 
                        {
                        
                     ?>
                    <tr>
                        <td><?php echo $V_banner->banner_id?></td>
                        <td class="center"><?php echo $V_banner->banner_name?></td>
                        <td class="center">
                             
                            <?php
                          if($V_banner->publication_status==0){
                              echo '<span class="label label-important">OFF</span>';
                          }
                          elseif($V_banner->publication_status==1){
                               echo '<span class="label label-warning">TOP</span>'; 
                          }
                           elseif($V_banner->publication_status==2){
                                 echo '<span class="label label-info">MIDDLE L</span>'; 
                          }
                           elseif($V_banner->publication_status==3){
                                 echo '<span class="label label-dark">MIDDLE R</span>'; 
                          }
                          else{
                                echo '<span class="label label-success">BOTTOM</span>';
                          }
                             ?>
                           
                        </td>
                        <td class="center"><?php echo $V_banner->banner_type?></td>
                    
                        <td class="center">
                            <?php
                            if($V_banner->publication_status==1){
                                
                           
                            ?>
                             <a class="btn btn-success" href="<?php echo base_url()?>Super_Admin/banner_unpublished/<?php echo $V_banner->banner_id ?>">
                                  <p>ON</p>
                            </a>
                           
                            <?php }else{?>
                           
                             <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/banner_published/<?php echo $V_banner->banner_id ?>">
                                   <p>OFF</p>
                            </a>
                            <?php }    ?>
                           
                            
                            <a class="btn btn-warning" href="<?php echo base_url()?>Super_Admin/banner_top/<?php echo $V_banner->banner_id ?>">
                                <p>TOP</p> 
                            </a>
                            
                            <a class="btn btn-primary" href="<?php echo base_url()?>Super_Admin/banner_middle_l/<?php echo $V_banner->banner_id ?>">
                                   <p>Middle L</p>
                            </a>
                            <a class="btn btn-dark " href="<?php echo base_url()?>Super_Admin/banner_middle_r/<?php echo $V_banner->banner_id ?>">
                                   <p>Middle R</p>
                            </a>
                            
                            <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/banner_bottom/<?php echo $V_banner->banner_id ?>">
                                <p>Bottom</p>
                            </a>
                            
                            <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/banner_delete/<?php echo $V_banner->banner_id ?>" onclick="return sliderDelete()">
                                  <p>Delete</p>
                            </a>
                        </td>
                    </tr>
                    <?php } ?> 
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->
