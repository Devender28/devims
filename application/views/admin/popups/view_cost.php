<table class="table table-bordered">
                                        
                                        <tbody>
                                            
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td><strong>Product Name:</strong></td>
                                                <td class="hidden-xs">
                                                   <?php echo $this->fun->getproductname('product','name',$cost->product_id);?>
                                                </td>
                                                
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td><strong> Category:</strong></td>
                                                <td class="hidden-xs">
                                                    <?php echo $this->fun->getfieldvalue('category','name',$cost->category);?>
                                                </td>
                                                
                                            </tr>

                                             <tr>
                                                <td class="text-center">3.</td>
                                                <td><strong> MRP:</strong></td>
                                                <td class="hidden-xs">
                                                    <?php echo $cost->mrp;?>
                                                </td>
                                                
                                            </tr>

                                             <tr>
                                                <td class="text-center">4.</td>
                                                <td><strong> CV:</strong></td>
                                                <td class="hidden-xs">
                                                    <?php echo $cost->cv;?>
                                                </td>
                                                
                                            </tr>

                                            <tr>
                                                <td class="text-center">4.</td>
                                                <td><strong> Tax:</strong></td>
                                                <td class="hidden-xs">
                                                    <?php echo $cost->tax;?>
                                                </td>
                                                
                                            </tr>

                                             <tr>
                                                <td class="text-center">5.</td>
                                                <td><strong> Product Image:</strong></td>
                                                <td class="hidden-xs">
                                                    <img src="<?php echo base_url('../uploads/products/').'/'.$this->fun->getproductname('product','image',$cost->product_id);?>" width="100px">
                                                </td>
                                                
                                            </tr>
                                        
                                         </tbody>
                                    </table>