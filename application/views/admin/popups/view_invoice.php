<div class="block" id="print">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    
                                    <button name="b_print" type="button" onClick="printdiv('print');"><i class="si si-printer"></i> Print Invoice</button>
                                </li>
                                
                                
                            </ul>
                            <img src="../uploads/images/logo.jpg" />
                            <h3 class="block-title">Transaction Id:<span class="label label-success"><?php echo $orders->transaction_id;?></span></h3>
                        </div>
                        
 <?php 
 $registered_id=$orders->registration_id;
 $registrations=$this->db->get_where('registrations', array('mobile' =>$registered_id))->row(); 
 ?>                         
                        
                        
                        
                        <div class="block-content block-content-narrow">
                            <!-- Invoice Info -->
                            <div class="h1 text-center push-30-t push-30 hidden-print">INVOICE</div>
                            <hr class="hidden-print">
                            <div class="row items-push-2x">
                                <!-- Company Info -->
                                <div class="col-xs-6 col-sm-4 col-lg-3">
                                    <p class="h4 font-w600 push-5-t">Billing Address</p>
                                    <address>
                                        <?php echo $registrations->name;?><br>
                                        <?php echo ucwords($registrations->address);?><br>
                                        <?php echo $registrations->district;?><br>
                                        <?php echo $registrations->state;?><br/>
                                        <i class="si si-call-end"></i> <?php echo $registrations->mobile;?>
                                    </address>
                                </div>
                                <!-- END Company Info -->

                                <!-- Client Info -->
                                <div class="col-xs-6 col-sm-4 col-sm-offset-4 col-lg-3 col-lg-offset-6 text-right">
                                    <p class="h4 font-w600 push-5">Shipping Address</p>
                                    <address>
                                        <?php echo $registrations->name;?><br>
                                        <?php echo ucwords($registrations->address);?><br>
                                        <?php echo $registrations->district;?><br>
                                        <?php echo $registrations->state;?><br/>
                                        <i class="si si-call-end"></i> <?php echo $registrations->mobile;?>
                                    </address>
                                </div>
                                <!-- END Client Info -->
                            </div>
                            <!-- END Invoice Info -->

                            <!-- Table -->
                            <div class="table-responsive push-50">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sl.No</th>
                                            <th class="text-center">Product Name</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">quantity</th>
                                            <th class="text-center">mrp</th>
                                            <th class="text-center">cv</th>
                                            <th class="text-center">tax</th>
                                            <th class="text-center">amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                      <?php
					  $i=1;$ship=0;
					  foreach($allorders as $allord)
					  {
					?>             
                                        
                                        
                                        
                                        <tr <?php if($i%2) {echo 'class="danger"';} else echo 'class="info"';?>>
                                           <td class="text-center"><?php echo $i;?></strong></td>
                                            <td class="text-center"><?php echo $this->fun->getproductname('product','name',$allord->product_id);?></strong></td>
                                            <td class="text-center"><img src="../uploads/products/<?php echo $this->fun->getproductname('product','image',$allord->product_id);?>" height="100" width="100"/></strong></td>
                                            <td class="text-center"><span class="badge badge-primary"><?php echo $allord->quantity;?></span></td>
                                            <td class="text-center"><?php echo $allord->mrp;?></td>
                                            <td class="text-center"><?php echo $allord->cv;?></td>
                                            <td class="text-center"><?php echo $allord->tax;?></td>
                                            <td class="text-center"><?php echo $allord->total_cost;?></td>
                                        </tr>
                      <?php
					  $i++;
					  $ship+=$allord->shipping; 
					  }
					  
					  ?>                   
                                        
                                       
                                       
  <?php
$transaction_id=$orders->transaction_id;
$tsum=$this->db->query("select sum(total_amount) as tot from orders where `transaction_id`='$transaction_id'")->row();
?>
                              
                                        <tr>
                                            <td colspan="6" class="text-right"><strong>Shipping:</strong></td>
                                            <td class="text-left">.Rs.<?php echo $ship;?></td>
                                        </tr>      
                                        
                                       
                                       
                                       <tr>
                                            <td colspan="6" class="text-right"><strong>Paid Amount:</strong></td>
                                            <td class="text-left">Rs.<?php echo number_format($tsum->tot);?></td>
                                        </tr>      
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Table -->

                            <!-- Footer -->
                            <hr class="hidden-print">
                            <p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>
                            <!-- END Footer -->
                        </div>
                    </div>