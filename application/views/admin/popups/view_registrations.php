 <table class="table table-bordered table-striped js-dataTable-full-pagination">
                                <thead>
                                    
                                </thead>
                                <tbody>
                                
                                
                                  <tr  class="info">
                                        <td >Sponcer Type:</td>
                                        <td ><?php echo $registrations->sponcer_type;?></td>
                                    </tr>
                                    
                                  <?php  
                                    if($registrations->sponcer_type!="company")
									{
									?>
                                    
                                    
                                    <tr class="danger">
                                        <td >Sponcer Name:</td>
                                        <td ><?php echo $this->fun->getnewfieldvalue('registrations','name','mobile',$registrations->sponcer_mobile);?></td>
                                    </tr>
                                    
                                    <?php
									}
									?>
                               
                                 
                                    <tr class="danger">
                                        <td >Sponcer Mobile:</td>
                                        <td ><?php echo $registrations->sponcer_mobile;?></td>
                                    </tr>
                                    
                                    
                                    
                                   
                                   
                                    
                                     <tr  class="info">
                                        <td >Name:</td>
                                        <td ><?php echo $registrations->name;?></td>
                                    </tr>
                                    
                                    
                                    
                                    
                                    <tr class="danger">
                                        <td >Date Of Birth:</td>
                                        <td ><?php echo $registrations->date_of_birth;?></td>
                                    </tr>
                                     <tr  class="info">
                                        <td >Gender</td>
                                        <td ><?php echo $registrations->gender;?></td>
                                    </tr>
                                    
                                    
                                    
                                    
                                    <tr class="danger">
                                        <td >Email:</td>
                                        <td ><?php echo $registrations->email;?></td>
                                    </tr>
                                    <tr  class="info">
                                        <td >Mobile</td>
                                        <td ><?php echo $registrations->mobile;?></td>
                                    </tr>
                                    
                                    
                                    <tr class="danger">
                                        <td >Aadhar Number:</td>
                                        <td ><?php echo $registrations->aadhaar_number;?></td>
                                    </tr>
                                    <tr  class="info">
                                        <td >Pan Number</td>
                                        <td ><?php echo $registrations->pan_number;?></td>
                                    </tr>
                                    
                                    
                                    <tr class="danger">
                                        <td >Address:</td>
                                        <td ><?php echo $registrations->address;?></td>
                                    </tr>
                                    <tr  class="info">
                                        <td >State</td>
                                        <td >
										  <?php echo @ucwords(str_replace('_',' ',$this->fun->getnewfieldvalue('state','name','id',$registrations->state)));?></td>
                                    </tr>
                                    
                                    
                                    <tr class="danger">
                                        <td >District:</td>
                                        <td ><?php echo @ucwords(str_replace('_',' ',$this->fun->getnewfieldvalue('district','name','id',$registrations->district)));?></td>
                                    </tr>
                                    <tr  class="info">
                                        <td >Pincode</td>
                                        <td ><?php echo $registrations->pincode;?></td>
                                    </tr>
                                    
                                    
                                    <tr class="danger">
                                        <td >A/C Holder Name:</td>
                                        <td ><?php echo $registrations->bank_name;?></td>
                                    </tr>
                                    <tr  class="info">
                                        <td >A/C  Number</td>
                                        <td ><?php echo $registrations->ac_no;?></td>
                                    </tr>
                                    
                                    <tr class="danger">
                                        <td >Bank:</td>
                                        <td ><?php echo $registrations->bank;?></td>
                                    </tr>
                                    <tr  class="info">
                                        <td >Branch</td>
                                        <td ><?php echo $registrations->branch;?></td>
                                    </tr>
                                    
                                    
                                    
                                    <tr class="danger">
                                        <td >IFSC code:</td>
                                        <td ><?php echo $registrations->ifsc_code;?></td>
                                    </tr>
                                    <tr  class="info">
                                        <td >Profile Pic</td>
                                        <td >
                                        
                                        <?php
										if($registrations->image!="")
										{
										?>
                                        <img src="<?php echo base_url('../uploads/registrations/'.$registrations->image);?>" width="100px" height="100">
                                        <?php
										}
										else
										{
										?>
                                        
                                        <img src="<?php echo base_url('../assets/img/avatars/avatar1.jpg');?>" width="100px" height="100">
                                        
                                        <?php
										}
										?>
                                        
                                        
                                        </td>
                                    </tr>
                                    
                                
                                
                                
                                
                                
                                </tbody>
                            </table>           
                        