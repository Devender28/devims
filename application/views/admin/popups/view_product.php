<table class="table table-bordered">
                                        
                                        <tbody>
                                            
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td><strong>Product Name:</strong></td>
                                                <td class="hidden-xs">
                                                   <?php echo $product->name;?>
                                                </td>
                                                
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td><strong> Category:</strong></td>
                                                <td class="hidden-xs">
                                                    <?php echo $this->fun->getfieldvalue('category','name',$product->category);?>
                                                </td>
                                                
                                            </tr>

                                             <tr>
                                                <td class="text-center">3.</td>
                                                <td><strong> Specifications:</strong></td>
                                                <td class="hidden-xs">
                                                    <?php echo $product->specification;?>
                                                </td>
                                                
                                            </tr>

                                             <tr>
                                                <td class="text-center">4.</td>
                                                <td><strong> Product ID:</strong></td>
                                                <td class="hidden-xs">
                                                    <?php echo $product->product_id;?>
                                                </td>
                                                
                                            </tr>

                                             <tr>
                                                <td class="text-center">5.</td>
                                                <td><strong> Product Image:</strong></td>
                                                <td class="hidden-xs">
                                                    <img src="<?php echo base_url('../uploads/products/').'/'.$product->image;?>" width="100px">
                                                </td>
                                                
                                            </tr>
                                        
                                         </tbody>
                                    </table>