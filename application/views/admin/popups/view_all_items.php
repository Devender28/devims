


<div class="block">
                        <div class="block-header bg-gray-lighter">
                            <h3 class="block-title">Transaction Id :  <span style="margin:40px"><?php echo $orders->transaction_id;?></span></h3>
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
                                            <th class="text-center">Shipping</th>
                                            <th class="text-center">Wallet</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                       
                                       
                                       
                      <?php
					  $i=1;
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
                                            <td class="text-center"><?php echo $orders->shipping;?></td>
                                            <td class="text-center"><?php echo $orders->wallet_amount;?></td>
                                            <td class="text-center"><?php echo $allord->total_cost;?></td>
                                            <td class="text-center"><?php echo $allord->total_cost-$orders->wallet_amount+$orders->shipping;?></td>
                                        </tr>
                       <?php
					  $i++;
					  }
					  ?>
                                   
                                        <tr>
                                            <td colspan="6" class="text-right"><strong>Total Ammount:</strong></td>
                                            <td class="text-left">Rs.<?php echo $orders->total_amount;?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    
 
 
  
                 
                    