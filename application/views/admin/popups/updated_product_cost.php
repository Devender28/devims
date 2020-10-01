<div class="block">
                        <div class="block-header bg-success-light" >
                            <h3 class="block-title"><?php echo $this->fun->getproductname('product','name',$product_cat->product_id);?>&nbsp;&nbsp;( <?php echo $this->fun->getfieldvalue('category','name',$product_cat->category);?> )</small></h3>
                        </div>
                        <div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center">SNo</th>
                                        <th class="text-center">Date</th>
                                       
                                        <th class="hidden-xs">MRP</th>
                                        <th class="hidden-xs">CV</th>
                                        <th class="hidden-xs">Tax</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  $a =1;
                                foreach($costs as $pro){?>
                                    <tr <?php if($a%2) {echo 'class="danger"';} else echo 'class="info"';?>>
                                        <td class="text-center"><?php echo $a;?></td>
                                        
                                        <td class="text-center"><?php echo date('M j Y g:i A', strtotime($pro->crdate));?></td>
                                       <td class="font-w600"><?php echo $pro->mrp;?></td>
                                      <td class="font-w600"><?php echo $pro->cv;?></td>
                                      <td class="font-w600"><?php echo $pro->tax;?></td>
                                        
                                    </tr>
                                    <?php  $a++; } ?>
                                   
                                    
                                    
                                    
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>