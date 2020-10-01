



<div class="block">
                        <div class="block-header bg-gray-lighter">
                            <h3 class="block-title">Transaction Id:<span class="label label-success"><?php echo $orders->transaction_id;?></span></h3>
                        </div>
                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                           <th class="text-center">Sl.No</th>
                                            <th class="text-center">Product Name</th>
                                             <th class="text-center">Image</th>
                                            <th class="text-center">quantity</th>
                                            <th class="text-center">mrp</th>
                                            <th class="text-center">cv</th>
                                            <th class="text-center">tax</th>
                                            <th class="text-center">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                       
                                       
                                       
                      <?php
					  $i=1; $ship=0;
					  foreach($allorders as $allord)
					  {
					?>
                                       
                                       
                                       
                                       
                                        <tr <?php if($i%2) {echo 'class="danger"';} else echo 'class="info"';?>>
                                           <td class="text-center"><?php echo $i;?></strong></td>
                                            <td class="text-center"><?php echo $this->fun->getproductname('product','name',$allord->product_id);?></strong></td>
                                            <td class="text-center"><img src="<?php echo base_url();?>../uploads/products/<?php echo $this->fun->getproductname('product','image',$allord->product_id);?>" height="100" width="100"/></strong></td>
                                            <td class="text-center"><?php echo $allord->quantity;?></td>
                                            <td class="text-center"><?php echo $allord->mrp;?></td>
                                            <td class="text-center"><?php echo $allord->cv;?></td>
                                            <td class="text-center"><?php echo $allord->tax;?></td>
                                            <td class="text-center"><?php echo $allord->total_cost;?></td>
                                        </tr>
                       <?php
					  $i++;
					$ship+=$allord->shipping;  }
					  ?>

                                         <tr>
                                            <td colspan="6" class="text-right"><strong>Shipping:</strong></td>
                                            <td class="text-left">Rs.<?php echo $ship;?></td>
                                        </tr>
                                       
                                        <tr>
                                            <td colspan="6" class="text-right"><strong>Paid Amount:</strong></td>
                                            <td class="text-left">Rs.<?php echo $orders->total_amount;?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    
 <?php 
 $registered_id=$orders->registration_id;
 $registrations=$this->db->get_where('registrations', array('mobile' =>$registered_id))->row(); 
 	
?>  
 
  
  <div class="row">
                        <div class="col-lg-6">
                            <!-- Billing Address -->
                            <div class="block">
                                <div class="block-header bg-gray-lighter">
                                    <h3 class="block-title">Billing Address</h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="h4 push-5"><?php echo $registrations->name;?></div>
                                    <address>
                                        <?php echo ucwords($registrations->address);?><br>
                                        <?php echo $registrations->district;?><br>
                                        <?php echo $registrations->state;?><br><br>
                                        <i class="fa fa-phone"></i> <?php echo $registrations->mobile;?><br>
                                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)" style="color:red"><?php echo $registrations->email;?></a>
                                    </address>
                                </div>
                            </div>
                            <!-- END Billing Address -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Shipping Address -->
                            <div class="block">
                                <div class="block-header bg-gray-lighter">
                                    <h3 class="block-title">Shipping Address</h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="h4 push-5"><?php echo $registrations->name;?></div>
                                    <address>
                                        <?php echo ucwords($registrations->address);?><br>
                                        <?php echo $registrations->district;?><br>
                                        <?php echo $registrations->state;?><br><br>
                                        <i class="fa fa-phone"></i> <?php echo $registrations->mobile;?><br>
                                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)" style="color:red"><?php echo $registrations->email;?></a>
                                    </address>
                                </div>
                            </div>
                            <!-- END Shipping Address -->
                        </div>
                    </div>                  
                    