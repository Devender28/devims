 <div id="ModifySearchDiv" class="row" style="display: none">
            <div class="col-lg-12">
                <div class="home_adv_srch_opt home4 mt0">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">

                        <li class="nav-item">

                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"

                                role="tab" aria-controls="pills-home" aria-selected="true">Residential</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"

                                role="tab" aria-controls="pills-profile" aria-selected="false">Commercial</a>

                        </li>

                    </ul>

                    <div class="tab-content home1_adsrchfrm mb40" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"

                                aria-labelledby="pills-home-tab">

                           <form   method="post"    action="<?php echo base_url();?>search">	

                               <input type="hidden" name="design_cat"  value="residential"/>

						    <div class="home1-advnc-search home4">

                                        <ul class="h1ads_1st_list mb0">

                                            <li class="list-inline-item">

                                                <div class="search_option_two">

                                                    <div class="candidate_revew_select">

                                                        <select class="selectpicker w100 show-tick"  name="cat_id"  required>

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

                                            <li class="list-inline-item">

                                                <div class="search_option_two">

                                                    <div class="candidate_revew_select">

                                                        <select name="bedrooms" class="selectpicker w100 show-tick">
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

                                            <li class="list-inline-item">

                                                <div class="search_option_two">

                                                    <div class="candidate_revew_select">

                                                        <select name="bathrooms" class="selectpicker w100 show-tick">
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

                                            
											
											<li class="list-inline-item SqFt">

                                                <div class="form-group">

                                                    <input type="text" class="form-control" id="exampleInputEmail"

                                                        placeholder="Total Sq/Ft" name="total_sq_feet" value="">

                                                    <label for="exampleInputEmail"><span class=""><i

                                                                class="fa fa-arrows-alt" aria-hidden="true"></i>

                                                        </span></label>

                                                </div>

                                            </li>
											
											
											
											
											
											
											
											
											
											




                                            <li class="custome_fields_520 list-inline-item">

                                                <div class="navbered">

                                                    <div class="mega-dropdown home4">

                                                        <span id="show_advbtn" class="dropbtn">Advanced <i

                                                                class="flaticon-more pl10 flr-520"></i></span>

                                                        <div class="dropdown-content">

                                                            <div class="row p15">

                                                                <div class="col-lg-12">

                                                                    <h4 class="text-thm3">Amenities</h4>

                                                                </div>

                                                            </div>

                                                            <div class="row p15 pt0-xsd">

                                                                <div class="col-lg-11 col-xl-10">

                                                                    <ul class="apeartment_area_list mb0">

                                                                        <li class="list-inline-item">

                                                                            <div class="candidate_revew_select">

                                                                                <select

                                                                                    class="selectpicker w100 show-tick" name="style">

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

                                                                        </li>

                                                                        <li class="list-inline-item">

                                                                            <div class="candidate_revew_select">

                                                                                <select

                                                                                    class="selectpicker w100 show-tick"  name="facing">

                                                                                    <option value="">Facing</option>

                                                                                    <option value="North">North</option>

                                                                                    <option value="East">East</option>

                                                                                    <option value="West">West</option>

                                                                                    <option value="South">South</option>

                                                                                    <option value="North-East">North-East</option>

                                                                                    <option value="North-West">North-West</option>

                                                                                    <option value="South-West">South-West</option>

                                                                                    <option value="South-East">South-East</option>

                                                                                </select>

                                                                            </div>

                                                                        </li>

                                                                        <li class="list-inline-item">

                                                                            <div class="candidate_revew_select">

                                                                                <select

                                                                                    class="selectpicker w100 show-tick">

                                                                                    <option>Year built</option>

                                                                                    <option>2013</option>

                                                                                    <option>2014</option>

                                                                                    <option>2015</option>

                                                                                    <option>2016</option>

                                                                                    <option>2017</option>

                                                                                    <option>2018</option>

                                                                                    <option>2019</option>

                                                                                    <option>2020</option>

                                                                                </select>

                                                                            </div>

                                                                        </li>

                                                                        <li class="list-inline-item">

                                                                            <div class="candidate_revew_select">

                                                                                <select

                                                                                    class="selectpicker w100 show-tick">

                                                                                    <option>Built-up Area</option>

                                                                                    <option>Adana</option>

                                                                                    <option>Ankara</option>

                                                                                    <option>Antalya</option>

                                                                                    <option>Bursa</option>

                                                                                    <option>Bodrum</option>

                                                                                    <option>Gaziantep</option>

                                                                                    <option>İstanbul</option>

                                                                                    <option>İzmir</option>

                                                                                    <option>Konya</option>

                                                                                </select>

                                                                            </div>

                                                                        </li>

                                                                    </ul>

                                                                </div>

                                                                <div class="col-lg-1 col-xl-2">

                                                                    <div class="mega_dropdown_content_closer">

                                                                        <h5 class="text-thm text-right mt15"><span

                                                                                id="hide_advbtn"

                                                                                class="curp">Hide</span>

                                                                        </h5>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>

                                            <li class="list-inline-item">

                                                <div class="search_option_button">

                                                    <button type="submit" name="search_button" class="btn btn-thm3" value="Search">Search</button>

                                                </div>

                                            </li>

                                        </ul>

                                    </div>

                                </form>

                            </div>
							
							

                      <div class="tab-pane fade" id="pills-profile" role="tabpanel"

                                aria-labelledby="pills-profile-tab">

                    <form   method="post"    action="<?php echo base_url();?>search">	
					
					<input type="hidden" name="bedrooms" value="" /> 
					<input type="hidden" name="bathrooms" value="" /> 
					
                    <input type="hidden" name="design_cat"  value="commercial"/>  
                            
					

                        		<div class="home1-advnc-search home4">

                                        <ul class="h1ads_1st_list mb0">

                                            <li class="list-inline-item">

                                                <div class="search_option_two">

                                                    <div class="candidate_revew_select">

                                                         <select class="selectpicker w100 show-tick"  name="cat_id"  required>

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

                                            <li class="list-inline-item SqFt">

                                                <div class="form-group">

                                                    <input type="text" class="form-control" id="exampleInputEmail"

                                                        placeholder="Total Sq/Ft"  name="total_sq_feet" value="">

                                                    <label for="exampleInputEmail"><span class=""><i

                                                                class="fa fa-arrows-alt" aria-hidden="true"></i>

                                                        </span></label>

                                                </div>

                                            </li>

                                            <li class="custome_fields_520 list-inline-item">

                                                <div class="navbered">

                                                    <div class="mega-dropdown home4">

                                                        <span id="show_advbtn2" class="dropbtn">Advanced <i

                                                                class="flaticon-more pl10 flr-520"></i></span>

                                                        <div class="dropdown-content">

                                                            <div class="row p15 pt0-xsd">

                                                                <div class="col-lg-11 col-xl-10">

                                                                    <ul class="apeartment_area_list mb0">

                                                                        <li class="list-inline-item">

                                                                            <div class="candidate_revew_select">

                                                                                <select

                                                                                    class="selectpicker w100 show-tick" name="style">

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

                                                                        </li>

                                                                        <li class="list-inline-item">

                                                                            <div class="candidate_revew_select">

                                                                                <select

                                                                                    class="selectpicker w100 show-tick">

                                                                                    <option>Year built</option>

                                                                                    <option>2013</option>

                                                                                    <option>2014</option>

                                                                                    <option>2015</option>

                                                                                    <option>2016</option>

                                                                                    <option>2017</option>

                                                                                    <option>2018</option>

                                                                                    <option>2019</option>

                                                                                    <option>2020</option>

                                                                                </select>

                                                                            </div>

                                                                        </li>

                                                                        <li class="list-inline-item">

                                                                            <div class="candidate_revew_select">

                                                                                <select

                                                                                    class="selectpicker w100 show-tick"  name="facing">

                                                                                    <option value="">Facing</option>

                                                                                    <option value="North">North</option>

                                                                                    <option value="East">East</option>

                                                                                    <option value="West">West</option>

                                                                                    <option value="South">South</option>

                                                                                    <option value="North-East">North-East</option>

                                                                                    <option value="North-West">North-West</option>

                                                                                    <option value="South-West">South-West</option>

                                                                                    <option value="South-East">South-East</option>

                                                                                </select>

                                                                            </div>

                                                                        </li>

                                                                        <li class="list-inline-item">

                                                                            <div class="candidate_revew_select">

                                                                                <select

                                                                                    class="selectpicker w100 show-tick">

                                                                                    <option>Built-up Area</option>

                                                                                    <option>Adana</option>

                                                                                    <option>Ankara</option>

                                                                                    <option>Antalya</option>

                                                                                    <option>Bursa</option>

                                                                                    <option>Bodrum</option>

                                                                                    <option>Gaziantep</option>

                                                                                    <option>İstanbul</option>

                                                                                    <option>İzmir</option>

                                                                                    <option>Konya</option>

                                                                                </select>

                                                                            </div>

                                                                        </li>

                                                                    </ul>

                                                                </div>

                                                                <div class="col-lg-1 col-xl-2">

                                                                    <div class="mega_dropdown_content_closer">

                                                                        <h5 class="text-thm text-right mt15"><span

                                                                                id="hide_advbtn2"

                                                                                class="curp">Hide</span>

                                                                        </h5>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>

                                            <li class="list-inline-item CustomSearch">

                                                <div class="search_option_button">

                                                   <button type="submit" name="search_button" class="btn btn-thm3" value="Search">Search</button>

                                                </div>

                                            </li>

                                        </ul>

                                    </div>

                                </form>

                            </div>
							
						
						
						

                    </div>

                    </div>
            </div>
        </div>
		