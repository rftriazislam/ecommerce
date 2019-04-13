
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
                        <th>Order Id</th>
                        <th>Grand Total</th>
                        <th>Order Activation</th>
                        <th>Order Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody> 
                    <?php 
                    foreach ($all_order as $V_order) 
                        {
                        
                     ?>
                    <tr>
                        <td><?php echo $V_order->order_id?></td>
                        <td class="center"><?php echo $V_order->grand_total?></td>
                      
                        <td class="center">
                            <?php
                          if($V_order->publication_status==1){
                              echo '<span class="label label-success">Pending</span>';
                          }
                          else{
                               echo '<span class="label label-important">complate</span>'; 
                          }
                             ?>
                        </td>
                        <td class="center"><?php echo $V_order->create_date_time?></td>
                    
                        <td class="center">
                            <?php
                            if($V_order->publication_status==1){
                                
                           
                            ?>
                             <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/order_pending/<?php echo $V_order->order_id ?>">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                           
                            <?php }else{?>
                           
                             <a class="btn btn-success" href="<?php echo base_url()?>Super_Admin/order_complate/<?php echo $V_order->order_id ?>">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            <?php }?>
                            
                            
                          
                            <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/view_order/<?php echo $V_order->order_id ?>">
                                <i class="halflings-icon white viewport"></i>  
                            </a>
                            <a class="btn btn-success" href="<?php echo base_url()?>Super_Admin/create_print/<?php echo $V_order->order_id ?>">
                                <i class="halflings-icon white print"></i>  
                            </a>
                            <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/create_invoice/<?php echo $V_order->order_id ?>">
                                <i class="halflings-icon white download"></i>  
                            </a>
                            <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/order_delete/<?php echo $V_order->order_id ?>" onclick="return productDelete()">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php } ?> 
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->