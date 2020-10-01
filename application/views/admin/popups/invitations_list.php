
                            <table class="table table-bordered table-striped js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center">SNo</th>     
                                        <th class="hidden-xs text-center">Mobile</th>
                                        <th class="hidden-xs text-center">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  $a =1;
                                foreach($invitations as $rf)
                                  { 
                                   
                                    ?>
                                    <tr <?php if($a%2) {echo 'class="danger"';} else echo 'class="info"';?>>
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="hidden-xs text-center"><?php echo $rf->registered_mobile;?></td>
                                        <td class="text-center"><?php echo $rf->email;?></td>     

                                        
                                    </tr>
                                    <?php  $a++; } ?>
                                   
                                    
                                    
                                    
                                    
                                    
                                    
                                </tbody>
                            </table>
                       