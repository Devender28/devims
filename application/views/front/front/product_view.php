<section class="our-listing-single bgc-f7 pb30-991">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mt35">
                <div class="home10-mainslider">
                    <div class="container-fluid p0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-banner-wrapper home10">
                                    <div class="banner-style-one owl-theme owl-carousel">
<?php 
$multi_images=$this->db->get_where('product_images',array('max_id'=>$product->max_id))->result();
foreach($multi_images as $multi_image)
{
?>
<div class="slide slide-one"
style="background-image: url(<?php echo base_url();?>uploads/projects/images/<?php echo $multi_image->image;?>);height: 400px;">
</div>
<?php
}
?>								
                                    </div>
                                    <div class="carousel-btn-block banner-carousel-btn">
                                        <span class="carousel-btn left-btn"><i
                                                class="flaticon-left-arrow-1 left"></i></span>
                                        <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
                                    </div><!-- /.carousel-btn-block banner-carousel-btn -->
                                </div><!-- /.main-banner-wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
                <section class="p0">
                    <div class="container">
                        <div class="row listing_single_row style2">
                            <div class="col-lg-7 col-xl-8">
                                <div class="single_property_title multicolor_style mt30-767">
                                    <h2><?php echo $product->name;?></h2>
                                    <p><?php echo $product->location;?></p>
                                </div>
                                <!-- <div class="dn db-991">
                                    <div id="main2">
                                        <span id="open2" class="flaticon-filter-results-button filter_open_btn style3"> Show Filter</span>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-5 col-xl-4">
                                <div class="single_property_social_share multicolor_style text-right tal-767">
                                    <div class="price">
                                        <h2>₹<?php echo $product->price;?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div id="tab-1" class="col-lg-12">
                        <div class="listing_single_description">
                            <div class="lsd_list">
                                <ul class="mb0">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><?php echo $this->fun->getnewfieldvalue('main_category','name','id',$product->cat_id);?></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-bed" aria-hidden="true"></i>Beds: <?php echo $product->bedrooms;?></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-bath" aria-hidden="true"></i>Baths: <?php echo $product->bathrooms;?></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i> Sq Ft: <?php echo $product->open_space;?></a></li>
                                </ul>
                            </div>
                            <h4 class="mb30">Description</h4>
                            <div class="ProductDescription">
                                <?php echo $product->description;?></p>
                            </div>
                            <p class="ShowMore" style="display: none;">
                                <span class="text-thm fz14">Show More <span class="fa fa-angle-down"></span></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="additional_details">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb15">Property Details</h4>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li>
                                            <p><i class="fa fa-code" aria-hidden="true"></i> Property ID :</p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-external-link-square" aria-hidden="true"></i>Open Space :</p>
                                        </li>
                                        <!-- <li>
                                            <p><i class="fa fa-arrows-alt" aria-hidden="true"></i> Property Size :</p>
                                        </li>
                                        <li>
                                            <p>Year Built :</p>
                                        </li> -->
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li>
                                            <p><span>IMS-<?php echo $product->id;?></span></p>
                                        </li>
                                        <li>
                                            <p><span><?php echo $product->open_space;?></span></p>
                                        </li>
                                        <!-- <li>
                                            <p><span>1560 Sq Ft</span></p>
                                        </li>
                                        <li>
                                            <p><span>2016-01-09</span></p>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li>
                                            <p><i class="fa fa-compass" aria-hidden="true"></i>Facing :</p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-window-restore" aria-hidden="true"></i>Compound Wall :</p>
                                        </li>
                                        <!-- <li>
                                            <p>Garage :</p>
                                        </li>
                                        <li>
                                            <p>Garage Size :</p>
                                        </li> -->
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li>
                                            <p><span><?php echo $product->facing;?></span></p>
                                        </li>
                                        <li>
                                            <p><span><?php echo $product->compound_wall;?></span></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li>
                                            <p><i class="fa fa-car" aria-hidden="true"></i>Parking :</p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-building" aria-hidden="true"></i>Build up Area :</p>
                                        </li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li>
                                            <p><span><?php echo $product->parking;?></span></p>
                                        </li>
                                        <li>
                                            <p><span><?php echo $product->build_up_area;?></span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="additional_details">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb15">Additional details</h4>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <ul class="list-inline-item">
                                        <li>
                                            <p><span class="flaticon-tick"></span>Kitchen :</p>
                                        </li>
                                        <li>
                                            <p><span class="flaticon-tick"></span>Pool Size :</p>
                                        </li>
                                        <li>
                                            <p><span class="flaticon-tick"></span>Additional Guest Rooms :</p>
                                        </li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li>
                                            <p><span><?php echo $product->kitchen;?></span></p>
                                        </li>
                                        <li>
                                            <p><span><?php echo $product->pool_size;?> Sqft</span></p>
                                        </li>
                                        <li>
                                            <p><span><?php echo $product->additional_rooms;?></span></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <ul class="list-inline-item">
                                        <li>
                                            <p><span class="flaticon-tick"></span>Living Area :</p>
                                        </li>
                                        <li>
                                            <p><span class="flaticon-tick"></span>Amenities :</p>
                                        </li>
                                        <li>
                                            <p><span class="flaticon-tick"></span>Equipment :</p>
                                        </li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li>
                                            <p><span><?php echo $product->living_area;?> Sqft</span></p>
                                        </li>
                                        <li>
                                            <p><span><?php echo $product->amenities;?></span></p>
                                        </li>
                                        <li>
                                            <p><span><?php echo $product->equipment;?></span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="property_attachment_area">
                            <h4 class="mb30">Property Attachments</h4>
                            <div class="iba_container style2">
                                <div class="icon_box_area style2">
                                    <div class="score"><span class="flaticon-document text-thm fz30"></span></div>
                                    <div class="details">
                                       <a href="<?php echo base_url();?>uploads/projects/attachments/<?php echo $product->attachment1;?>" target="_blank" download> <h5><span class="flaticon-download text-thm pr10"></span> Demo Word Document</h5></a>
                                    </div>
                                </div>
                                <div class="icon_box_area style2">
                                    <div class="score"><span class="flaticon-pdf text-thm fz30"></span></div>
                                    <div class="details">
                                       <a href="<?php echo base_url();?>uploads/projects/attachments/<?php echo $product->attachment2;?>" target="_blank"  download> <h5><span class="flaticon-download text-thm pr10"></span> Demo pdf Document</h5></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div id="tab-4" class="application_statics mt30">
                            <h4 class="mb30">Floor plans</h4>
                            <div class="faq_according style2">
                                <div class="accordion" id="accordionExample">
                                    <div class="card floor_plan">
                                        <div class="card-header active" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item">First Floor</li>
                                                        <li class="list-inline-item">
                                                            <p>Size:</p> <span><?php echo $product->first_size;?> Sqft</span>
                                                        </li>
                                                        <!-- <li class="list-inline-item">
                                                            <p>Rooms:</p> <span>670 Sqft</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p>Baths:</p> <span>530 Sqft</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p>Price:</p> <span>$1489</span>
                                                        </li> -->
                                                    </ul>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                            <div class="card-body text-center">
                                                <img class="img-fluid" src="<?php echo base_url();?>uploads/projects/foor_plans/<?php echo $product->foor_plan1;?>" alt="floor_plan.png">
                                                <p><?php echo $product->first_floor_description;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card floor_plan">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item">Second Floor</li>
                                                        <li class="list-inline-item">
                                                            <p>Size:</p> <span><?php echo $product->second_size;?> Sqft</span>
                                                        </li>
                                                        <!-- <li class="list-inline-item">
                                                            <p>Rooms:</p> <span>670 Sqft</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p>Baths:</p> <span>530 Sqft</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p>Price:</p> <span>$1489</span>
                                                        </li> -->
                                                    </ul>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body text-center">
                                                <img class="img-fluid" src="<?php echo base_url();?>uploads/projects/foor_plans/<?php echo $product->foor_plan2;?>" alt="floor_plan.png">
                                                <p><?php echo $product->second_floor_description;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div id="tab-5" class="shop_single_tab_content style2 mt30">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Property video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="listing-tab" data-toggle="tab" href="#listing" role="tab" aria-controls="listing" aria-selected="false">Virtual Tour</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="property_video">
                                        <div class="thumb">
                                            <img class="pro_img img-fluid w100" src="<?php echo base_url(FRONT_ASSETS);?>images/background/7.jpg" alt="7.jpg">
                                            <div class="overlay_icon">
                                                <a class="video_popup_btn red popup-youtube popup-img" href="<?php echo $product->property_video;?>"><span class="flaticon-play"></span></a>
                                                <!-- <div class="NoVideo">No Video Available!</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade row pl15 pl0-1199 pr15 pr0-1199" id="listing" role="tabpanel" aria-labelledby="listing-tab">
                                    <div class="property_video">
                                        <div class="thumb">
                                            <iframe class="h400 w100" src="<?php echo $product->virtual_tour;?>" frameborder="0" allowfullscreen></iframe>
                                            <!-- <img class="pro_img img-fluid w100" src="<?php echo base_url(FRONT_ASSETS);?>images/background/7.jpg" alt="7.jpg">
                                            <div class="overlay_icon">
                                                <a class="video_popup_btn red popup-youtube popup-img" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play"></span></a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div id="tab-6" class="product_single_content">
                             <div class="mbp_pagination_comments mt30">
                                <ul class="total_reivew_view">
									<?php
                                        $ct= $this->productmodel->review_count($this->uri->segment(3));									
                                        $rtc=$this->productmodel->rating_count($this->uri->segment(3));
                                        if($ct==0)
                                        {
                                        $avg=0;
                                        $favg=0;
                                        } else{
                                            $avg=@$rtc/@$ct;
                                            $favg=round($avg);
                                        }								
									?> 
									<li class="list-inline-item sub_titles">
									<?php echo $ct;?> Reviews</li>
                                    <li class="list-inline-item">
                                        <ul class="star_list">
										<?php												
												for($i=1;$i<=$favg;$i++)
												{ ?>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<?php	}
                                                $r=5-$favg;
												if($r>0)
												{
													for($i=1;$i<=$r;$i++)
												{ ?>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
											<?php	}
												} ?>
                                        </ul>
                                    </li>
                                    <li class="list-inline-item avrg_review">									
									( <?php echo $favg;?> out of 5 )</li>
                                    <!-- <li class="list-inline-item write_review">Write a Review</li> -->
                                </ul>
								<?php 
								$rvs= $this->productmodel->reviews($this->uri->segment(3));
								foreach($rvs as $rv) {
								?>
                                <div class="mbp_first media">
                                  <!--  <img src="<?php //echo base_url(FRONT_ASSETS);?>images/testimonial/1.png" class="mr-3" alt="1.png"> -->
                                    <div class="media-body">
                                        <h4 class="sub_title mt-0"><?php echo $rv->name;?>
                                            <div class="sspd_review dif">
                                                <ul class="ml10">
												<?php												
												for($i=1;$i<=$rv->rating;$i++)
												{ ?>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<?php	}
                                                $r=5-$rv->rating;
												if($r>0)
												{
													for($i=1;$i<=$r;$i++)
												{ ?>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
											<?php	}
												} ?>
                                                </ul>
                                            </div>
                                        </h4>
                                        <a class="sspd_postdate fz14" href="#"><?php echo date('F d, Y',strtotime($rv->crdate));?></a>
                                        <p class="mt10"><?php echo $rv->description;?></p>
                                    </div>
                                </div>
								<div class="custom_hr"></div>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product_single_content">
                            <div class="mbp_pagination_comments mt30">
                                <div class="mbp_comment_form style2">
                                    <h4>Write a Review</h4>
                                    <ul class="sspd_review">
                                        <li class="list-inline-item">
                                            <!-- <ul class="mb0">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul> -->
								<form class="comments_form" method="post"><?php
											echo @$msg1; ?>								    
                                            <input type="text" name="rating" required class="StarRating" />
                                        </li>
                                        <li class="list-inline-item review_rating_para">Your Rating & Review</li>
                                    </ul>
                                        <div class="form-group">
                                            <input type="text" name="title" required class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="desc" required id="exampleFormControlTextarea1" rows="12" placeholder="Your Review"></textarea>
                                        </div>
                                        <button type="submit" name="review" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4 mt35">
                <div class="feat_property home7 style4">
                    <div class="details">
                        <div class="tc_content">
                            <p class="text-thm">Apartment</p>
                            <h4>Renovated Apartment</h4>
                            <h3 class="mb20">₹1,13,000</h3>
                            <form action="" method="post" id="idForm<?php echo $product->id;?>"> 
                                <input  type="hidden" name="product_id" value="<?php echo $product->id;?>">
                                <button type="submit" class="btn btn-block btn-thm buy-btn"  name="buy_now">BUY</button>
                            </form>
                            <!-- <ul class="prop_details mb0">
                                <li class="list-inline-item"><a class="text-thm3" href="#"><i class="fa fa-bed" aria-hidden="true"></i> Beds: 4</a></li>
                                <li class="list-inline-item"><a class="text-thm3" href="#"><i class="fa fa-bath" aria-hidden="true"></i> Baths: 2</a></li>
                                <li class="list-inline-item"><a class="text-thm3" href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i> Sq Ft: 5280</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="sidebar_listing_list">
                    <div class="sidebar_advanced_search_widget">
                        <div class="sl_creator">
                            <h4 class="mb25">Listed By</h4>
                            <div class="media">
                                <img class="mr-3" src="<?php echo base_url(FRONT_ASSETS);?>images/team/lc1.png" alt="lc1.png">
                                <div class="media-body">
                                    <h5 class="mt-0 mb0">Kiran Kumar</h5>
                                    <p class="mb0">(123)456-7890</p>
                                    <p class="mb0">info@ideamyspace.com</p>
                                    <a class="text-thm" href="#">View My Listing</a>
                                </div>
                            </div>
                        </div>
                        <ul class="sasw_list mb0">
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Your Name">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="exampleInputName2" placeholder="Phone">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required" placeholder="I'm interest in [ Listing Single ]"></textarea>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_button">
                                    <button type="submit" class="btn btn-block btn-thm">submit</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar_listing_list">
                    <div class="sidebar_advanced_search_widget">
                        <h4 class="mb25">Questions</h4>
                        <ul class="sasw_list mb0">
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Your Name">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Phone">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                                </div>
                            </li>
                            <li>
                                <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                        <select class="selectpicker w100 show-tick">
                                            <option>When do you want to start construction?</option>
                                            <option>0-3 Months</option>
                                            <option>3-6 Months</option>
                                            <option>6-12 Months</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                        <select class="selectpicker w100 show-tick">
                                            <option>Are you working with a builder?</option>
                                            <option>No</option>
                                            <option>Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                        <select class="selectpicker w100 show-tick">
                                            <option>Where do you plan on building?</option>
                                            <option>Hyderabad</option>
                                            <option>Vijayawada</option>
                                            <option>pune</option>
                                            <option>Miami</option>
                                            <option>New York</option>
                                            <option>Orlando</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required" placeholder="Your Message"></textarea>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_button">
                                    <button type="submit" class="btn btn-block btn-thm">Submit</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(window).on('load', function() {
        var Show = 0, Height = $('div.ProductDescription').height();
        if(Height > 108) {
            $('div.ProductDescription').css({ height: '108px', overflow: 'hidden' });
            $('p.ShowMore').css('display', 'block');
            $('p.ShowMore span.text-thm').on('click', function() {
                if(Show == 0) {
                    $('div.ProductDescription').animate({'height' : + Height , overflow: 'visible'}, 300);
                    $(this).html('Show Less <span class="fa fa-angle-up"></span>');
                    Show = 1;
                } else {
                    $('div.ProductDescription').animate({'height' : '108px', overflow: 'hidden'}, 300);
                    $(this).html('Show More <span class="fa fa-angle-down"></span>');
                    Show = 0;
                }
            });
        }
    });
</script>