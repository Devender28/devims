            <div class="col-sm-12 col-lg-8 col-xl-10">
                <div class="row">
                    <div class="col-sm-12 mb10">
                        <div class="breadcrumb_content style2">
                            <span class="FilterButton">Menu</span>
                            <h2 class="breadcrumb_title">My Profile</h2>
                            <p>We are glad to see you again!</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="feat_property list agency">
                            <div class="thumb">
                                <img class="" src="<?php echo base_url('uploads/user/'.$user->image);?>" alt="Profile Pic">
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <h4><?php echo $user->name;?></h4>
                                    <!-- <p class="text-thm">AnkithAlladi007</p> -->
                                    <ul class="prop_details mb0">
                                        <li>Mobile: <?php echo $user->mobile;?></li>
                                    <!-- <li>Office: 134 456 3210</li> -->
                                        <li>Email: <?php echo $user->email;?></li>
                                        <li>Address: <?php echo $user->address;?></li>
                                    </ul>
                                </div>
                                <div class="fp_footer text-right">
                                    <a class="fp_pdate text-thm" href="<?php echo base_url('user/profile_update');?>">Edit Profile <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>