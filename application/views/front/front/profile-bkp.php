
<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2">
        <h2 class="breadcrumb_title">My Profile</h2>
        <p>We are glad to see you again!</p>
    </div>
</div>
<div class="col-lg-12">
    <div class="my_dashboard_review">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img class="ProPic mb20" src="<?php echo base_url('uploads/user/'.$user->image);?>" />
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 ProfDetails">
                        <p><span class="fa fa-user-o"></span> <span class="PName"><?php echo $user->name;?></span>
                        </p>
                        <p><span class="fa fa-envelope-o"></span> <?php echo $user->email;?></p>
                        <p><span class="fa fa-phone"></span> <?php echo $user->mobile;?></p>
                        <p><span class="fa fa-map-marker"></span> <span class="ProfAddress"> <?php echo $user->address;?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 text-right">
                <div class="my_profile_setting_input">
                    <a class="btn btn2" href="<?php echo base_url('user/profile_update');?>">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row mt10">
    <div class="col-lg-12">
        <div class="copyright-widget text-center">
            <p>© 2020 Idea My Space. All Rights Reserved.</p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
