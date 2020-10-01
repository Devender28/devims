 <table class="table table-bordered table-striped js-dataTable-full-pagination">
                                <thead>
                                    
                                </thead>
                                <tbody>
                               
                                 
                                    <tr class="danger">
                                        <td >Referral Id:</td>
                                        <td ><?php echo $refrelas->referral_id;?></td>
                                    </tr>
                                    <tr  class="info">
                                        <td >Name:</td>
                                        <td ><?php echo $refrelas->name;?></td>
                                    </tr>
                                    
                                    
                                   
                                   
                                    <tr class="danger">
                                        <td >Age</td>
                                        <td ><?php echo $refrelas->age;?></td>
                                    </tr>
                                     <tr  class="info">
                                        <td >Gender:</td>
                                        <td ><?php echo $refrelas->gender;?></td>
                                    </tr>
                                    
                                    
                                    
                                    
                                    <tr class="danger">
                                        <td >Email:</td>
                                        <td ><?php echo $refrelas->email;?></td>
                                    </tr>
                                     <tr  class="info">
                                        <td >Mobile</td>
                                        <td ><?php echo $refrelas->mobile;?></td>
                                    </tr>
                                    
                                    
                                    
                                    
                                    <tr class="danger">
                                        <td >Address:</td>
                                        <td ><?php echo @$refrelas->location;?></td>
                                    </tr>
                                    <tr  class="info">
                                        <td >State</td>
                                        <td ><?php echo @str_replace('_',' ',ucwords($this->fun->getfieldvalue('state','name',$refrelas->state)));?></td>
                                    </tr>
                                    
                                    
                                    <tr class="danger">
                                        <td >District:</td>
                                        <td ><?php echo @str_replace('_',' ',ucwords($this->fun->getfieldvalue('district','name',$refrelas->district)));?></td>
                                    </tr>
                                    <tr  class="info">
                                        <td >Pincode</td>
                                        <td ><?php echo $refrelas->pincode;?></td>
                                    </tr>
                                    
                                    
                                    <tr class="danger">
                                        <td >Purpose:</td>
                                        <td ><?php echo $refrelas->purpose;?></td>
                                    </tr>
                                   
                                    <tr  class="info">
                                        <td >Appointment Date</td>
                                        <td ><?php echo $refrelas->appointment_date;?></td>
                                    </tr>
                                    
                                    
                                    <tr class="Message">
                                        <td >Referal Message:</td>
                                        <td ><?php echo $refrelas->message;?></td>
                                    </tr>
                                
                                
                                
                                
                                </tbody>
                            </table>           
                        