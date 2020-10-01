

<!-- Home Design -->

<div class="home-four">

    <div class="container-fluid p0">

        <div class="row">

            <div class="col-lg-12">

                <div class="main-banner-wrapper">

                    <div class="banner-style-one owl-theme owl-carousel">

                        <div class="slide slide-one" style="background-image: url(<?php echo base_url(FRONT_ASSETS);?>images/home/3.jpg);height: 700px;">

                        </div>

                        <div class="slide slide-one" style="background-image: url(<?php echo base_url(FRONT_ASSETS);?>images/home/2.jpg);height: 700px;">

                        </div>

                        <div class="slide slide-one" style="background-image: url(<?php echo base_url(FRONT_ASSETS);?>images/home/1.jpg);height: 700px;">

                        </div>

                    </div>

                    <div class="carousel-btn-block banner-carousel-btn">

                        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>

                        <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>

                    </div><!-- /.carousel-btn-block banner-carousel-btn -->

                </div><!-- /.main-banner-wrapper -->

            </div>

        </div>

    </div>

    <div class="container home_iconbox_container">

        <div class="row posr">

            <div class="col-lg-12">

                <div class="home_content home4">

                    <div class="home-text text-center">

                        <h2 class="fz55">DREAM IT <span>and get it</span></h2>

                        <p class="fz18 color-white">Let IMS - Idea My Space help you find your dream home!</p>

                    </div>
					

                    
					
					<div class="home_adv_srch_opt home4">

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

                        <div class="tab-content home1_adsrchfrm" id="pills-tabContent">

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

        </div>

        <div class="row">

            <div class="col-lg-12">

                <h4 class="text-center color-white fw600 mb25 mb0-520">What are you looking for?</h4>

                <ul class="home4_iconbox mb0">

                    <li class="list-inline-item">

                        <a href="search-listing.php">

                            <div class="icon"><span class="flaticon-house"></span>

                                <p>Modern Villa</p>

                            </div>

                        </a>

                    </li>

                    <li class="list-inline-item">

                        <a href="search-listing.php">

                            <div class="icon"><span class="flaticon-house-1"></span>

                                <p>Family House</p>

                            </div>

                        </a>

                    </li>

                    <li class="list-inline-item">

                        <a href="search-listing.php">

                            <div class="icon"><span class="flaticon-building"></span>

                                <p>Apartment</p>

                            </div>

                        </a>

                    </li>

                    <li class="list-inline-item">

                        <a href="search-listing.php">

                            <div class="icon"><span class="flaticon-house-2"></span>

                                <p>Commercial</p>

                            </div>

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>

<!-- Feature Properties -->

<section id="best-property" class="best-property bgc-f7">

    <div class="container ovh">

        <div class="row">

            <div class="col-md-12">

                <div class="main-title text-center mb40">
                    <h2>Featured <span>Properties</span></h2>
                    <p>Let IMS - Idea My Space help you find your dream home!</p>
                </div>
                <div class="text-right mr20 mb10"><a class="text-thm Small" href="#">View All <span class="flaticon-next"></span></a></div>
            </div>

        </div>

        <div class="row">

  <?php
	  
	   foreach($products as $product)
	   {
       ?>         

	

		   <div class="col-md-3 col-lg-3">
		   
		   <form action="" method="post" id="idForm<?php echo $product->product_id;?>"> 
        <input  type="hidden" name="product_id" value="<?php echo $product->product_id;?>">	

                <div class="feat_property home_property home7 style4">

                    <div class="thumb">

                        <img class="img-whp" src="<?php echo base_url();?>uploads/projects/featured_image/<?php echo $this->fun->getnewfieldvalue('product','featured_image','id',$product->product_id);?>" alt="fp1.jpg">

                        <div class="thmb_cntnt">

                            <ul class="tag mb0">

                                <?php
								
								
								
						if($this->fun->getnewfieldvalue('product','offer_premium','id',$product->product_id)=="Offer")
						{
						?>

                            <li class="list-inline-item"><a href="#">Offer</a></li>
							
						<?php } else { ?>
 						
							
							

                             <li class="list-inline-item"><a href="#">Premium</a></li>

						<?php }?>

                            </ul>

                            <ul class="icon mb0">

                                <li class="list-inline-item">
							
							
							<a   onclick="comparerecord('<?php echo $product->product_id;?>');"  data-toggle="tooltip" title="Compare">

                                    <span class="flaticon-transfer-1"></span>
									
									</a>
									
						

                            </li>

                            <li class="list-inline-item"><a href="#" onclick="wishlist('<?php echo $product->product_id;?>');" data-toggle="tooltip" title="Wish list"><span

                                        class="flaticon-heart"></span></a></li>

                            </ul>

                        </div>

                    </div>

                    <div class="details">

                        <div class="tc_content">

                            <p class="text-thm"><?php echo $this->fun->getnewfieldvalue('main_category','name','id',$this->fun->getnewfieldvalue('product','cat_id','id',$product->product_id));?></p>

                            <h4><a href="<?php echo base_url();?>product_view/<?php echo $this->fun->getnewfieldvalue('product','slug','id',$product->product_id);?>/<?php echo $product->product_id;?>"><?php echo $this->fun->getnewfieldvalue('product','name','id',$product->product_id);?></a></h4>

                            <p><span class="flaticon-placeholder"></span> <?php echo $this->fun->getnewfieldvalue('product','location','id',$product->product_id);?></p>

                            <ul class="prop_details mb0">

                                <li class="list-inline-item"><a class="text-thm3" href="#"><i class="fa fa-bed"

                                            aria-hidden="true"></i> Beds: <?php echo $this->fun->getnewfieldvalue('product','bedrooms','id',$product->product_id);?></a></li>

                                <li class="list-inline-item"><a class="text-thm3" href="#"><i class="fa fa-bath"

                                            aria-hidden="true"></i> Baths: <?php echo $this->fun->getnewfieldvalue('product','bathrooms','id',$product->product_id);?></a></li>

                                <li class="list-inline-item"><a class="text-thm3" href="#"><i class="fa fa-arrows-alt"

                                            aria-hidden="true"></i> Sq Ft: <?php echo $this->fun->getnewfieldvalue('product','open_space','id',$product->product_id);?></a></li>

                            </ul>

                        </div>

                        <div class="fp_footer detail1">

                            <ul class="fp_meta float-left mb0">

                                <li class="list-inline-item"><a class="fp_price" href="#">₹<?php echo $this->fun->getnewfieldvalue('product','price','id',$product->product_id);?></a>

                                </li>

                            </ul>

                            <div class="fp_pdate float-right">

                                <ul class="fp_meta  float-left mb0">

                                    <li class="list-inline-item"><a href="<?php echo base_url();?>product_view/<?php echo $this->fun->getnewfieldvalue('product','slug','id',$product->product_id);?>/<?php echo $product->product_id;?>" data-toggle="tooltip"

                                            title="View"><span class=""><i class="fa fa-eye" aria-hidden="true"></i>

                                            </span></a></li>

                                   <li class="list-inline-item">
	<button type="submit" class="btn fpfBtn" name="add_cart">
<span class=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
</button>			
										
</li>

                                <li class="list-inline-item"><button type="submit" class="btn fpfBtn" name="buy_now"> <span class=""></span>BUY</button>

                                </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
				
			</form>	

            </div>
			
					
			
			
			
	<?php
}

?>		
			
			
			
		

            

          

        </div>

    </div>

</section>



<section class="bgc-f7 pt0">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="SpecialOffer">
                    <h3><span class="fa fa-tags HeadingIcon"></span>Special Offer</h3>
                    <div class="ui_kit_tab mt30">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">

						<?php 
						$a=0;
						foreach($spl_offers as $offer) { ?>

                            <li class="nav-item">
                                <a class="nav-link <?php if(!$a) echo 'active';?>" data-toggle="tab" href="#plan<?php echo $offer->id;?>"><?php echo $offer->category;?></a>
                            </li>

						<?php $a++; } ?>
							
						
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">

						<?php 
						$a=0;
						foreach($spl_offers as $offer) { ?>

                            <div id="plan<?php echo $offer->id;?>" class="container tab-pane <?php if(!$a) { echo 'active';} else {echo 'fade';} ?>">
                                <h4 class="text-thm"><?php echo $offer->title;?></h4>
                                <!-- <ul class="order_list list-style-type-bullet"> -->
                                 <div id="devtest"> <?php echo $offer->description;?></div>
                                <!-- </ul> -->
                                <div class="my_profile_setting_input mt30">
                                    <button class="btn btn2" data-toggle="modal" data-target=".SOffer_modal" onclick="ChangeOffer('<?php echo $offer->category;?>')">Order Now</button>
                                </div>
                            </div>

						<?php $a++; } ?>

                           
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="sign_up_modal SOffer_modal modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <img class="img-fluid w100" src="<?php echo base_url(FRONT_ASSETS);?>images/resource/requirement.jpg" alt="requirement.jpg">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <h4 class="text-center mb30">Special Offer Enquiry</h4>
                                        <?php //include 'includes/quick_contact.php'; ?>
										<?php $this->load->view(FRONT_INCLUDES.'quick_contact');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="FreePlans">
                    <h3 class="mb30"><span class="fa fa-picture-o HeadingIcon"></span>Free Plans
                    <a class="text-thm Small float-right" href="<?php echo base_url();?>free_plans_all">View All <span class="flaticon-next"></span></a>
                </h3>
                    <div class="row Plans">
					
                        
		 <?php
	     foreach($free_cat_details as $cat)
	     {
		  $free_paid="Free";
		  $product_count=$this->db->get_where('product',array("free_paid"=>$free_paid,"cat_id"=> $cat->id))->num_rows();	 
		?>		
						
						<div class="col-xl-4 col-lg-4 col-md-4">
                            <a class="properti_city" href="<?php echo base_url();?>free_plans/<?php echo $cat->slug;?>/<?php echo $cat->id;?>">
                                <div class="thumb"><img class="img-fluid w100" src="<?php echo base_url(FRONT_ASSETS);?>images/property/pc5.jpg" alt="pc5.jpg"></div>
                                <div class="overlay">
                                    <div class="details">
                                        <h5><?php echo $cat->name;?></h5>
                                        <p><?php echo $product_count;?> Plans</p>
                                    </div>
                                </div>
                            </a>
                        </div>
						
		                 
		 <?php
			}
		 ?>				
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Why Chose Us -->

<section id="why-chose" class="whychose_us bgc-f7 pb30">

    <div class="container">

        <div class="row">

            <div class="col-md-7">

                <h2>Why choose Idea My Space?</h2>

                <p>Join hands to Excel</p>

                <div class="row service-advantages">

                    <div class="col-md-6">

                        <i class="fa fa-bath" aria-hidden="true"></i>

                        <p>Plan and Customize any plan</p>

                    </div>

                    <div class="col-md-6">

                        <i class="fa fa-bath" aria-hidden="true"></i>

                        <p>With in Budget</p>

                    </div>

                </div>

                <div class="row service-advantages">

                    <div class="col-md-6">

                        <i class="fa fa-bath" aria-hidden="true"></i>

                        <p>Support and Services</p>

                    </div>

                    <div class="col-md-6">

                        <i class="fa fa-bath" aria-hidden="true"></i>

                        <p>Plan and Customize any plan</p>

                    </div>

                </div>

                <div class="row service-advantages">

                    <div class="col-md-6">

                        <i class="fa fa-bath" aria-hidden="true"></i>

                        <p>With in Budget</p>

                    </div>

                    <div class="col-md-6">

                        <i class="fa fa-bath" aria-hidden="true"></i>

                        <p>Support and Services</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Our Testimonials -->

<section class="our-testimonials bgc-f7">

    <div class="container">

        <div class="row">

            <div class="col-xl-5 col-lg-5 col-md-5">

                <div class="mb30">

                    <h3><span class="fa fa-money HeadingIcon"></span>Thank you note exchanged</h3>

                    <p class="pl55">Business done between IMS members</p>

                </div>

                <div class="testimonial_post">

                    <ul class="thanks-note">

                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p><i class="flaticon-calendar"></i> September 14, 2020</p>

                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p>Business Given <span>Rs.50000</span></p>

                            </div>

                        </div>

                        <li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">Country Architects <br><small class="text-thm">Residential

                                        Architect</small></h5>

                            </a>

                        </li><li class="Arrow">

                            <img class="arrow-img" src="<?php echo base_url(FRONT_ASSETS);?>images/testimonial/arrow.png" alt=".jpg">

                        </li><li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">High-Rise Designers <br><small class="text-thm">Elevation

                                        Designer</small></h5>

                            </a>

                        </li>

                    </ul>

                    <ul class="thanks-note">

                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p><i class="flaticon-calendar"></i> September 15, 2020</p>

                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p>Business Given <span>Rs.40000</span></p>

                            </div>

                        </div>

                        <li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">Modern Engineers <br><small class="text-thm">Structure

                                        Engineer</small></h5>

                            </a>

                        </li><li class="Arrow">

                            <img class="arrow-img" src="<?php echo base_url(FRONT_ASSETS);?>images/testimonial/arrow.png" alt=".jpg">

                        </li><li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">Real Estate Engineers <br><small class="text-thm">Electrical

                                        Engineer</small></h5>

                            </a>

                        </li>

                    </ul>

                    <ul class="thanks-note">

                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p><i class="flaticon-calendar"></i> September 16, 2020</p>

                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p>Business Given <span>Rs.30000</span></p>

                            </div>

                        </div>

                        <li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">Luxury House Services <br><small class="text-thm">Estimation

                                        Service</small></h5>

                            </a>

                        </li><li class="Arrow">

                            <img class="arrow-img" src="<?php echo base_url(FRONT_ASSETS);?>images/testimonial/arrow.png" alt=".jpg">

                        </li><li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">James Consultants <br><small class="text-thm">MEP Consultant</small>

                                </h5>

                            </a>

                        </li>

                    </ul>

                    <ul class="thanks-note">

                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p><i class="flaticon-calendar"></i> September 14, 2020</p>

                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p>Business Given <span>Rs.80000</span></p>

                            </div>

                        </div>

                        <li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">Country Architects <br><small class="text-thm">Residential

                                        Architect</small></h5>

                            </a>

                        </li><li class="Arrow">

                            <img class="arrow-img" src="<?php echo base_url(FRONT_ASSETS);?>images/testimonial/arrow.png" alt=".jpg">

                        </li><li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">High-Rise Designers <br><small class="text-thm">Elevation

                                        Designer</small></h5>

                            </a>

                        </li>

                    </ul>

                    <ul class="thanks-note">

                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p><i class="flaticon-calendar"></i> September 15, 2020</p>

                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p>Business Given <span>Rs.60000</span></p>

                            </div>

                        </div>

                        <li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">Modern Engineers <br><small class="text-thm">Structure

                                        Engineer</small></h5>

                            </a>

                        </li><li class="Arrow">

                            <img class="arrow-img" src="<?php echo base_url(FRONT_ASSETS);?>images/testimonial/arrow.png" alt=".jpg">

                        </li><li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">Real Estate Engineers <br><small class="text-thm">Electrical

                                        Engineer</small></h5>

                            </a>

                        </li>

                    </ul>

                    <ul class="thanks-note">

                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p><i class="flaticon-calendar"></i> September 16, 2020</p>

                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">

                                <p>Business Given <span>Rs.70000</span></p>

                            </div>

                        </div>

                        <li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">Luxury House Services <br><small class="text-thm">Estimation

                                        Service</small></h5>

                            </a>

                        </li><li class="Arrow">

                            <img class="arrow-img" src="<?php echo base_url(FRONT_ASSETS);?>images/testimonial/arrow.png" alt=".jpg">

                        </li><li>

                            <a class="InlineBlock" href="vendor-profile.php">

                                <h5 class="title">James Consultants <br><small class="text-thm">MEP Consultant</small>

                                </h5>

                            </a>

                        </li>

                    </ul>

                </div>

                <a class="float-right text-thm mt10" href="thank-note.php">View All <span

                        class="flaticon-next"></span></a>

            </div>

            <div class="col-xl-7 col-lg-7 col-md-7">

                <div class="mb30">

                    <h3><span class="fa fa-sticky-note HeadingIcon"></span>Post your requirement</h3>

                    <p class="pl55">Tell us what you need</p>

                </div>

                <div class="testimonial_post Requirement">

                    <h4 class="text-center text-thm mb25">How it Works</h4>

                    <div class="row">

                        <div class="col-xl-3 col-lg-3 col-md-3">

                            <div class="hiw">

                                Tell us what you need by filling the form

                            </div>

                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3">

                            <div class="hiw">

                                Receive Verified Supplier Details

                            </div>

                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3">

                            <div class="hiw">

                                Compare Quotations and Seal the Deal

                            </div>

                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3">

                            <div class="hiw Last">

                                Get from IMS & 100% Buyer Protection

                            </div>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">

                            <h5 class="mt20">Requirement Information</h5>

                            <ul class="sasw_list">

                                <li>

                                    <div class="search_area mb10">

                                        <input type="text" class="form-control" id="product"

                                            placeholder="Enter Produt/Service">

                                    </div>

                                </li>

                                <li>

                                    <div class="search_area mb10">

                                        <textarea class="form-control" placeholder="Requirement Details"></textarea>

                                    </div>

                                </li>

                                <li>

                                    <div class="wrap-custom-file Doc">

                                        <input type="file" name="afile" id="afile"

                                            accept=".jpeg, .jpg, .doc, .xls, .pdf" />

                                        <label for="afile">

                                            <span><i class="flaticon-download"></i> Attach Image</span>

                                        </label>

                                    </div>

                                </li>

                                <li>

                                    <div class="mb10"><small>Looking for Suppliers</small></div>

                                    <div class="ui_kit_radiobox Custom2 mb10">

                                        <div class="radio">

                                            <input id="awindia" name="radio" type="radio">

                                            <label for="awindia"><span class="radio-label"></span> Anywhere in

                                                India</label>

                                        </div>

                                        <div class="radio">

                                            <input id="scity" name="radio" type="radio">

                                            <label for="scity"><span class="radio-label"></span> Specific City</label>

                                        </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="search_area mb10">

                                        <input type="text" class="form-control" id="city1" list="city_list"

                                            placeholder="City 1">

                                    </div>

                                </li>

                                <li>

                                    <div class="search_area mb10">

                                        <input type="text" class="form-control" id="city2" list="city_list"

                                            placeholder="City 2">

                                    </div>

                                </li>

                            </ul>

                            <datalist id="city_list">

                                <option>Hyderabad</option>

                                <option>Warangal</option>

                                <option>Kurnool</option>

                                <option>Vijayawada</option>

                                <option>Vizag</option>

                                <option>Guntur</option>

                            </datalist>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">

                            <h5 class="mt20">Quantity</h5>

                            <ul class="sasw_list">

                                <li>

                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">

                                            <div class="search_area mb0">

                                                <input type="text" class="form-control" id="quantity"

                                                    placeholder="Quantity">

                                            </div>

                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">

                                            <div class="search_option_two mb0">

                                                <div class="candidate_revew_select">

                                                    <select class="selectpicker w100 show-tick" id="units">

                                                        <option>Units</option>

                                                        <option>Numbers</option>

                                                        <option>Kilo Grams</option>

                                                        <option>Litres</option>

                                                        <option>Sqare Feets</option>

                                                        <option>Feets</option>

                                                        <option>Others</option>

                                                    </select>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            </ul>

                            <h5 class="mt20">Contact Details</h5>

                            <ul class="sasw_list">

                                <li>

                                    <div class="search_area mb10">

                                        <input type="text" class="form-control" id="phone"

                                            placeholder="Mobile/Phone Number">

                                    </div>

                                </li>

                                <li>

                                    <div class="search_area mb10">

                                        <input type="text" class="form-control" id="name" placeholder="Name">

                                    </div>

                                </li>

                                <li>

                                    <div class="search_area mb10">

                                        <input type="email" class="form-control" id="email" placeholder="Email Address">

                                    </div>

                                </li>

                                <li>

                                    <div class="search_area mb10">

                                        <input type="text" class="form-control" id="city" placeholder="City">

                                    </div>

                                </li>

                                <li id="OTPLi">

                                    <div class="search_option_button">

                                        <button class="btn btn-block btn-thm"

                                            onclick="document.getElementById('OTPLi').style.display = 'none'; document.getElementById('SubmitLi').style.display = 'block';">Get

                                            OTP</button>

                                    </div>

                                </li>

                                <li id="SubmitLi" style="display: none;">

                                    <div class="search_area mb10">

                                        <input type="text" class="form-control" id="otp" placeholder="Enter OTP">

                                    </div>

                                    <div class="search_option_button">

                                        <button data-toggle="modal" data-target=".requirement_modal"

                                            class="btn btn-block btn-thm">Submit</button>

                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Modal -->

<div class="sign_up_modal requirement_modal modal fade" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span

                        aria-hidden="true">&times;</span></button>

            </div>

            <div class="modal-body container">

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6">

                        <img class="img-fluid w100" src="<?php echo base_url(FRONT_ASSETS);?>images/resource/requirement.jpg" alt="requirement.jpg">

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">

                        <div class="requirement_content">

                            <div class="mb10"><span class="fa fa-check-circle text-thm"></span></div>

                            <h4 class="mb10">Thank You!</h4>

                            <div class="Text">IMS has received your requirement</div>

                            <div class="Text mb10">Want to add/edit details to your requirement? do it here:</div>

                            <div><a class="btn btn-thm circle" href="requirements-list.php">Manage Your

                                    Requirement(s)</a></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Our Blog -->

<section class="our-blog bgc-f7 pb30">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 offset-lg-3">

                <div class="main-title text-center">

                    <h2>Industry Trends and Tips</h2>

                    <p>Let IMS - Idea My Space help you find your dream home!</p>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-6 col-lg-4 col-xl-4">

                <div class="for_blog feat_property">

                    <div class="thumb">

                        <img class="img-whp" src="<?php echo base_url(FRONT_ASSETS);?>images/blog/bh1.jpg" alt="bh1.jpg">

                        <div class="blog_tag">Construction</div>

                    </div>

                    <div class="details">

                        <div class="tc_content Custom">

                            <h4>Redfin Unveils the Best Canadian Cities for Biking</h4>

                            <ul class="bpg_meta">

                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>

                                <li class="list-inline-item"><a href="#">January 16, 2020</a></li>

                            </ul>

                            <p>Which is the real and ideal solution for retail, institutional and residential

                                properties.</p>

                        </div>

                        <div class="fp_footer Custom">

                            <a class="fp_pdate float-right text-thm" href="#">Read More <span

                                    class="flaticon-next"></span></a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-6 col-lg-4 col-xl-4">

                <div class="for_blog feat_property">

                    <div class="thumb">

                        <img class="img-whp" src="<?php echo base_url(FRONT_ASSETS);?>images/blog/bh2.jpg" alt="2.jpg">

                        <div class="blog_tag">Construction</div>

                    </div>

                    <div class="details">

                        <div class="tc_content Custom">

                            <h4>Housing Markets That Changed the Most This Decade</h4>

                            <ul class="bpg_meta">

                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>

                                <li class="list-inline-item"><a href="#">January 16, 2020</a></li>

                            </ul>

                            <p>Which is the real and ideal solution for retail, institutional and residential

                                properties.</p>

                        </div>

                        <div class="fp_footer Custom">

                            <a class="fp_pdate float-right text-thm" href="#">Read More <span

                                    class="flaticon-next"></span></a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-6 col-lg-4 col-xl-4">

                <div class="for_blog feat_property">

                    <div class="thumb">

                        <img class="img-whp" src="<?php echo base_url(FRONT_ASSETS);?>images/blog/bh3.jpg" alt="3.jpg">

                        <div class="blog_tag">Construction</div>

                    </div>

                    <div class="details">

                        <div class="tc_content Custom">

                            <h4>Redfin Unveils the Best Canadian Cities for Biking</h4>

                            <ul class="bpg_meta">

                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>

                                <li class="list-inline-item"><a href="#">January 16, 2020</a></li>

                            </ul>

                            <p>Which is the real and ideal solution for retail, institutional and residential

                                properties.</p>

                        </div>

                        <div class="fp_footer Custom">

                            <a class="fp_pdate float-right text-thm" href="#">Read More <span

                                    class="flaticon-next"></span></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Our Partners -->

<section id="our-partners" class="our-partners">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 offset-lg-3">

                <div class="main-title text-center">

                    <h2>Our Associates</h2>

                    <p>We work with the best companies of National & International standard.</p>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4 col-lg">

                <div class="our_partner">

                    <img class="img-fluid" src="<?php echo base_url(FRONT_ASSETS);?>images/partners/1.png" alt="1.png">

                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg">

                <div class="our_partner">

                    <img class="img-fluid" src="<?php echo base_url(FRONT_ASSETS);?>images/partners/2.png" alt="2.png">

                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg">

                <div class="our_partner">

                    <img class="img-fluid" src="<?php echo base_url(FRONT_ASSETS);?>images/partners/3.png" alt="3.png">

                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg">

                <div class="our_partner">

                    <img class="img-fluid" src="<?php echo base_url(FRONT_ASSETS);?>images/partners/4.png" alt="4.png">

                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg">

                <div class="our_partner">

                    <img class="img-fluid" src="<?php echo base_url(FRONT_ASSETS);?>images/partners/5.png" alt="5.png">

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Start Partners -->

<section class="start-partners bgc-thm pt50 pb50">

    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <div class="start_partner tac-smd">

                    <h2>Franchise Opportunities </h2>

                    <p>IMS offering business</p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="parner_reg_btn text-right tac-smd">

                    <a class="btn btn-thm2" data-toggle="modal" data-target=".bd-franchise-modal-lg"

                        href="javascript: void()">Register Now</a>

                </div>

            </div>

        </div>

    </div>

</section>

<script>
    $(document).ready(function() {
        $('.SpecialOffer .order_list li').wrapInner('<span></spam>');
    });
</script>

<script type="text/javascript">
    function comparerecord(id) {
		//alert(id);
        $.ajax({
                url: <?php echo '"'.base_url('addcompare').'"';?>,
                type: "POST",
                data: {x: id },
                dataType: "html",
                success: function (data) {
                 //alert(data);
                 $('#idForm input[type="text"]').val('');
				 $('#content').val('');
				 document.getElementById("display_compare").innerHTML=data; 				   
                }
            });			
    }
</script>

<script type="text/javascript">
    function wishlist(id) {
		//alert(id);
        $.ajax({
                url: <?php echo '"'.base_url('addwishlist').'"';?>,
                type: "POST",
                data: {x: id },
                dataType: "html",
                success: function (data) {
                 //alert(data);
                 $('#idForm input[type="text"]').val('');
				 $('#content').val('');
				 document.getElementById("display_wishlist").innerHTML=data; 
                }
            });
    }
</script>