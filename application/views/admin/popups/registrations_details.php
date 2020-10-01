<?php
if($distributors->rating=="Green")
	 {
	 $color="success";
	 }
     elseif($distributors->rating=="Blue")
	 {
	 
	 $color="info";
	 }
	 elseif($distributors->rating=="Red")
	 {
	  $color="primary";
	 }
	  elseif($distributors->rating=="Black")
	 {
	  $color="default";
	 }
?>	
	
<div class="block">
       <div class="content content-boxed">
          <h4 class="block-title">Distributor Details:</h4>
        </div>
            <div class="block-content clearfix">
              <div class="col-sm-6 col-lg-3 border-r">
                <div class="block-content-full clearfix">
                  
                  <div class="text-left pull-left push-10-l">
                    <div class="font-w600 ">
                    
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <?php 
										
										$filename1="./uploads/distributors/$distributors->profile_image";
										
										if(file_exists($filename1))
										{
										?>
                                        <a href="<?php echo  base_url();?>uploads/distributors/<?php echo  $distributors->profile_image;?>" target="_blank"/> <img src="<?php echo  base_url();?>uploads/distributors/<?php echo  $distributors->profile_image;?>"   width="150" height="80"> </a>
                                        
									   
									    <?php
										}
										else
										{
										?>
                                        
                                       <a href="<?php echo  base_url();?>uploads/images/profile_image.jpg" target="_blank"/> <img src="<?php echo  base_url();?>uploads/images/profile_image.jpg"   width="150" height="80">  </a>
                                        
                                        <?php
										}
										?>
                    
                    
                    
                    
                    
                    
                    <br/>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $distributors->first_name;?>&nbsp;<?php echo $distributors->last_name;?>
                    
                    
                    
                    
                    
                    
                    
                    
                    </div>
                    <div class="text-muted"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 border-r">
                <div class="block">
                  <address>
                  <h5 class="font-w700"><i class="si si-pointer"></i> Address</h5>
                   <span class="font-w800" style="font-weight:bold">State:</span><?php echo $distributors->state_name;?><br/>
				   <span class="font-w800" style="font-weight:bold">District:</span><?php echo $distributors->district;?><br/>
				    <span class="font-w800" style="font-weight:bold">City:</span><?php echo $distributors->city;?><br/>
                  </address>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 border-r">
                <div class="block">
                  <address>
                  <i class="fa fa-mobile-phone"></i><?php echo $distributors->mobile;?>,<?php echo $distributors->mobile1;?><br>
                  <i class="fa fa-phone"></i><?php echo $distributors->landline;?><br>
                  <i class="fa fa-envelope-o"></i> <a href="mailto:<?php echo $distributors->email;?>"><?php echo $distributors->email;?></a>
                  </address>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="block">
                 <p class="nice-copy"><strong>Rating:</strong> <label class="css-input css-radio  css-radio-<?php echo $color;?> push-5-r">
                    <input type="radio"  value="Green" name="rating" checked="">
                    <span></span><?php echo $distributors->rating;?></label></p>
                </div>
              </div>
            </div>
          </div>


