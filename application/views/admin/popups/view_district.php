<table class="table table-bordered">
                                        
                                        <tbody>
                                            
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td><strong>District Name:</strong></td>
                                                <td class="hidden-xs">
                                                   <?php echo ucwords(str_replace('_',' ',$dist->name));?>
                                                </td>
                                                
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td><strong> State:</strong></td>
                                                <td class="hidden-xs">
                                                    <?php echo ucwords(str_replace('_',' ',$this->fun->getfieldvalue('state','name',$dist->state)));?>
                                                </td>
                                                
                                            </tr>

                                             <tr>
                                                <td class="text-center">3.</td>
                                                <td><strong> Shipping Amount:</strong></td>
                                                <td class="hidden-xs">
                                                    <?php echo $dist->shipping;?>
                                                </td>
                                                
                                            </tr>

                                            
                                        
                                         </tbody>
                                    </table>