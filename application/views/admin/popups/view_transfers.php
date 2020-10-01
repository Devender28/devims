<div class="block-content block-content-full block-content-narrow">
                    
                    
                     
                     
                     
                     
                       <div class="block">
                        <div class="block-header bg-success-light" >
                        
                            <h3 class="block-title">  Amount Transfered Details of <?php echo $this->fun->getnewfieldvalue('registrations','name','mobile',$id);?></h3>
                            
                            
                        </div>
                        <div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.No</th>                                        
                                        <th class="hidden-xs text-center">Date</th>
                                        <th class="hidden-xs text-center">amount</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  $a =1;
                                  
                                foreach($transfers as $transfer)
                                  { 
                                     
                                    ?>
                                    
                                   
                                    <tr <?php if($a%2) {echo 'class="danger"';} else echo 'class="info"';?>>
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="hidden-xs text-center"><?php echo $transfer->crdate;?></td>
                                        <td class="hidden-xs text-center"><?php echo $transfer->amount;?></td>
                                         
                                        
                                    </tr>
                                    <?php  $a++; 
                                        
                                      $tot_transfer->amount+=$transfer->amount;
                                    } ?>
                                    
                                    
                                    
                                   
                                    
                                       
                                        
                                        
                                        <td class="hidden-xs text-right text-danger bg-info" colspan="2"><strong>Total:</strong></td>
                                        <td class="hidden-xs text-center text-danger bg-info" colspan="3"><strong><?php echo $tot_transfer->amount;?></strong></td>
                                    </tr>
                                    </thead>
                                    
                                    
                                   
                                    
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>             
                     
                     
                     
                     
                    
                
                
                
                
                
                
                
                
                </div>