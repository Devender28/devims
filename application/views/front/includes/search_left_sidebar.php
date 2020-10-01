<div class="col-lg-3 col-xl-3">



                <div class="sidebar_listing_grid1 MobSlide">
                    <span class="flaticon-close"></span>                    

                    <div class="terms_condition_widget imscategory">

                        <h4 class="title">Style</h4>

                        <div class="widget_list">

                            <ul class="list_details">

				 <?php
				 
				 $a=1;
				 $colors = array("hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
				                 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
								 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
								 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
								 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
								 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
								 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures"
								 );

	              foreach($all_styles as $styles)

	               {
$style_count=$this->db->get_where('product',array("style"=> $styles->id))->num_rows();	
                   ?>		 

							 <li><a href="<?php echo base_url();?>style/<?php echo $styles->slug;?>"><i class="fa fa-square mr10 <?php echo $colors[$a];?>"></i><?php echo $styles->name;?> 

							 <span  class="float-right"><?php echo $style_count;?> </span></a></li>

				  <?php 
				  $a++;

				   }

				  ?>	

			              </ul>



                        </div>



                    </div>



                    <div class="terms_condition_widget imscategory">



                        <h4 class="title">Categories Property</h4>



                        <div class="widget_list">



                            <ul class="list_details">

               				

					<?php
				$a=1;
				 $colors = array("hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
				                 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
								 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
								 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
								 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
								 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures",
								 "hot", "featured", "rent", "sale", "open", "closures", "sold", "closures"
								 );

	                foreach($cat_details as $cat)

	                {
						
				$product_count=$this->db->get_where('product',array("cat_id"=> $cat->id))->num_rows();		

                    ?>	 



							 <li><a href="<?php echo base_url();?>categories/<?php echo $cat->slug;?>"><i class="fa fa-square mr10 <?php echo $colors[$a];?>"></i><?php echo $cat->name;?>

							 <span  class="float-right"><?php echo $product_count;?></span></a></li>



              				

				   <?php
				    $a++;

				    }

				    ?>

				            </ul>



                        </div>



                    </div>

                    <div class="sidebar_listing_list">
                        <h4 class="mb25">Modify Search</h4>
                        <div class="ui_kit_radiobox mb20">
                            <div class="radio">
                                <input id="radio_residential" name="mcategory" type="radio" checked="checked" value="mresidential">
                                <label for="radio_residential"><span class="radio-label"></span> Residential</label>
                            </div>
                            <div class="radio">
                                <input id="radio_commercial" name="mcategory" type="radio" value="mcommercial">
                                <label for="radio_commercial"><span class="radio-label"></span> Commercial</label>
                            </div>
                        </div>
                        
						
						
						
		<form   method="post"    action="<?php echo base_url();?>search">	

                               <input type="hidden" name="design_cat"  value="residential"/>				
						      <input type="hidden" name="facing" value="" /> 
						
						
						<div id="ResidentialDiv">
                            <ul class="sasw_list style2 mb0">
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick" name="cat_id"  required>
											
											
                                               <option value="">Select category</option>

                                                            
															
								       <?php
	  
	                                    foreach($res_cat_details as $cat)
	                                    {
                                        ?>		
															
										<option value="<?php echo $cat->id;?>"><?php echo $cat->name;?></option>
										
                                       <?php
						               }
						               ?>
												
												
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick" name="bedrooms">
                                              <option value="">Bedrooms</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick" name="bathrooms">
                                                <option value="">Bathrooms</option>
                                                       <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="text" name="total_sq_feet" class="form-control" id="" placeholder="Total Sq/Ft">
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick" name="style">
                                               <option value="">Style Categories</option>

                                                                                    <?php
	  
	                                    foreach($style_details as $style)
	                                    {
                                        ?>		
															
										<option value="<?php echo $style->id;?>"><?php echo $style->name;?></option>
										
                                       <?php
						               }
						               ?>
                                           
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_button">
                                        <button type="submit" name="search_button" class="btn btn-block btn-thm" value="Search">Search</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
						
					 </form>	
					 
					 
					 
				<form   method="post"    action="<?php echo base_url();?>search">	
					
					<input type="hidden" name="bedrooms" value="" /> 
					<input type="hidden" name="bathrooms" value="" /> 
			        <input type="hidden" name="design_cat"  value="commercial"/>   	
                    <input type="hidden" name="style"  value=""/>          
                    <input type="hidden" name="facing"  value=""/>          

                 
						
                        <div id="CommercialDiv" style="display: none">
                            <ul class="sasw_list style2 mb0">
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick" name="cat_id"  required>
                                                 <option value="">Select category</option>

                                                            
															
								       <?php
	  
	                                    foreach($com_cat_details as $cat)
	                                    {
                                        ?>		
															
										<option value="<?php echo $cat->id;?>"><?php echo $cat->name;?></option>
										
                                       <?php
						               }
						               ?>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Total Sq/Ft"  name="total_sq_feet" value="">
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_button">
                                        <button type="submit" class="btn btn-block btn-thm" name="search_button" value="Search">Search</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
						
				</form>		
						
						
                    </div>

                </div>



            </div>