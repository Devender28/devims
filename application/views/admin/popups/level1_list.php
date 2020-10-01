<div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Level <?php echo $level;?> Members of <?php echo $member;?></h3>
                        </div>
                        <div class="block-content" id="view_popup">
                           
                       
                       
                            <table class="table table-bordered table-striped js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center">SNo</th>                                        
                                        <th class="hidden-xs text-center">Name</th>
                                        <th class="hidden-xs text-center">Mobile</th>
                                        <th class="hidden-xs text-center">Email</th>
                                      <!--  <th class="hidden-xs text-center">Age</th> 
                                        <th class="hidden-xs text-center">Appointment Date</th>
                                        <th class="hidden-xs text-center">Location</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  
                                  if($level==1){
                                    $a =1;
                                foreach($level1list as $rf)
                                  { 
                                   
                                    ?>
                                    <tr <?php if($a%2) {echo 'class="danger"';} else echo 'class="info"';?>>
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="hidden-xs text-center"><?php echo $rf->name;?></td>
                                        <td class="hidden-xs text-center"><?php echo $rf->mobile;?></td>
                                        <td class="text-center"><?php echo $rf->email;?></td>                                        
                                       <!-- <td class="hidden-xs text-center"><?php echo $rf->age;?></td>
                                        <td class="hidden-xs text-center"><?php echo $rf->appointment_date;?></td>
                                        <td class="hidden-xs text-center"><?php echo $rf->location;?></td>-->

                                        
                                    </tr>
                                    <?php  $a++; } } 
                                    
                                        if($level==2){
                                         $a=1;
                                        foreach($level1list as $rf1)
                                  { 
                                     $level2list=$this->db->get_where('registrations',array('sponcer_mobile'=>$rf1->mobile))->result();
                                     foreach($level2list as $rf){
                                   
                                    ?>
                                    <tr <?php if($a%2) {echo 'class="danger"';} else echo 'class="info"';?>>
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="hidden-xs text-center"><?php echo $rf->name;?></td>
                                        <td class="hidden-xs text-center"><?php echo $rf->mobile;?></td>
                                        <td class="text-center"><?php echo $rf->email;?></td>                                        
                                       <!-- <td class="hidden-xs text-center"><?php echo $rf->age;?></td>
                                        <td class="hidden-xs text-center"><?php echo $rf->appointment_date;?></td>
                                        <td class="hidden-xs text-center"><?php echo $rf->location;?></td>-->

                                        
                                    </tr>
                                    <?php  $a++; } } }
                                    ?>
                                    
                                    
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>