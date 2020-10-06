<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one style2 navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid p0">
        <div class="top-bar text-right">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="mb0">

                       <?php if($this->session->userdata('id') && $this->session->userdata('type')=='user') { ?>

                                 <li class="list-inline-item list_s"><a href="<?php echo base_url('user/dashboard');?>" 
                        > <span class="dn-lg">My Dashboard</span></a></li>

						<?php } elseif($this->session->userdata('id') && $this->session->userdata('type')=='vendor') { ?>

<li class="list-inline-item list_s"><a href="<?php echo base_url('vendor/dashboard');?>" 
> <span class="dn-lg">My Dashboard</span></a></li>
                    <?php } else { ?>

                        <li class="list-inline-item">
                            <span class="fa fa-user-o"></span> <a href="javascript: void()" data-toggle="modal"
                                data-target=".bd-example-modal-lg">Login / Register</a>
                        </li>
                         <?php } ?>

                        <li class="list-inline-item">
                            <span class="fa fa-envelope-o"></span> <a
                                href="mailto: support@ideamyspace.com">support@ideamyspace.com</a>
                        </li>
                        <li class="list-inline-item">
                            <span class="fa fa-phone"></span> <a href="callto:+919876543210">9876543210</a>
                        </li>
                        <li class="list-inline-item">
                            <span class="fa fa-whatsapp"></span> <a href="https://wa.me/919876543210/?text=Hi"
                                target="_blank">9876543210</a>
                        </li>
                        <li class="list-inline-item">
                            <span class="fa fa-pencil-square-o"></span> <a href="<?php echo base_url('blog');?>">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="<?php echo base_url(FRONT_ASSETS);?>images/header-logo.png" alt="header-logo.jpg">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="javascript: void()" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="<?php echo base_url(FRONT_ASSETS);?>images/header-logo.png" alt="header-logo.png">
                <img class="logo2 img-fluid" src="<?php echo base_url(FRONT_ASSETS);?>images/header-logo2.png" alt="header-logo2.png">
                <span>Idea My Space</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                <li>
                    <a href="<?php echo base_url();?>"><span class="title">Home</span></a>
                </li>
                <li>
                    <a href="javascript: void()"><span class="title">Services</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="service-category.php"> Designer</a></li>
                        <li><a href="service-category.php"> Contractor</a></li>
                        <li><a href="service-category.php">Supplier</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void()"><span class="title">Sizes</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="search-listing.php">1 Bed Room</a></li>
                        <li><a href="search-listing.php">2 Bed Room</a></li>
                        <li><a href="search-listing.php">3 Bed Room</a></li>
                        <li><a href="search-listing.php">4 Bed Room</a></li>
                        <li><a href="search-listing.php">DUPLEX</a></li>
                        <li><a href="search-listing.php">MANSION</a></li>
                        <li><a href="javascript: void()">SMALL</a></li>
                        <li><a class="Color" href="javascript: void()"><strong>View All..</strong></a></li>
                    </ul>
                </li>
                <li>
                    <a href="solutions.php"><span class="title">Solutions</span></a>
                </li>
                <li class="last">
                    <a href="contact.php"><span class="title">Contact</span></a>
                </li>
                
                
                <li>
                    <div class="cart-dropdown">
                        <a href="<?php echo base_url();?>compare" role="button" data-toggle="tooltip" title="Compare">
                            <i class="fa fa-exchange" aria-hidden="true"></i>
                            <span class="cart-count badge-circle" id="display_compare"><?php echo $this->productmodel->compareCount();?></span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="cart-dropdown">
                        
						
						
					<?php if($this->session->userdata('id')) { ?>	
						
						
						
						
						<a href="<?php echo base_url();?>user/wishlist" 
                            title="Wish list" >
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <span class="cart-count badge-circle" id="display_wishlist"><?php echo $this->productmodel->wishlistCount();?></span>
                        </a>
						
					 <?php } else { ?>
					 
					    <a href="javascript: void()" data-toggle="modal"
                            data-target=".bd-example-modal-lg" title="Wish list" >
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <span class="cart-count badge-circle" id="display_wishlist"><?php echo $this->productmodel->wishlistCount();?></span>
                        </a>
	
						
						
					<?php } ?>	
						
						
						
                    </div>
                </li>
                <li>
                    <div class="cart-dropdown">
                        <a href="<?php echo base_url();?>cart" role="button" data-toggle="tooltip" title="Cart">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <span class="cart-count badge-circle"><?php echo $this->productmodel->cartCount();?></span>
                        </a>
                    </div>
                </li>
                
                
                
                
                <li class="list-inline-item add_listing"><a href="ven-register.php">
                        <span class="flaticon-plus"></span><span class="dn-lg"> Join Us</span></a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- Modal -->
<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body container pb20">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content container" id="myTabContent">
                    <div class="row mt25 tab-pane fade show active" id="home" role="tabpanel"
                        aria-labelledby="home-tab">
                        <div class="col-lg-6 col-xl-6">
                            <div class="login_thumb">
                                <img class="img-fluid w100" src="<?php echo base_url(FRONT_ASSETS);?>images/resource/login.jpg" alt="login.jpg">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="login_form">

							<form action="" method="post">

                                    <div class="heading">
                                        <h4>Login</h4>
                                    </div>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control" id="email"
                                            placeholder="Mobile No. / Email" name="email" required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="input-group form-group sign-in-passwrd">
									<input type="password" class="form-control" id="password"
                                            placeholder="Password" name="password" required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-password"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <span>CLICK TO GET ONE TIME PASSWORD (OTP)</span> -->
                                    <div class="form-group  custom-checkbox">
									<a class="btn-fpswd " id="devotp" onClick="sendOTP();" href="javascript: void()">Get One Time
                                            Password(OTP)</a>
                                    </div>
                                    <button type="button" onClick="login();" class="btn btn-log btn-block btn-thm">Log In</button>
                                    <a class="btn-fpswd float-right" href="<?php echo base_url('forgotpassword');?>">Forgot password?</a>
									<span id="dev"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col-lg-6 col-xl-6">
                            <div class="regstr_thumb">
                                <img class="img-fluid w100" src="<?php echo base_url(FRONT_ASSETS);?>images/resource/regstr.jpg" alt="regstr.jpg">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="sign_up_form">
                                <div class="heading">
                                    <h4>Register</h4>
                                </div>
                                <form action="" method="post" id="register">
                                    <div class="form-group input-group">
									<input type="text" class="form-control" id="name"
                                            placeholder="Full Name" name="name" required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
									<input type="email" class="form-control" id="email1"
                                            placeholder="Email" name="email" required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
									<input type="text" class="form-control" id="mobile"
                                            placeholder="Mobile Number" name="mobile" required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-mobile"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
									<input type="password" class="form-control" id="password1"
                                            placeholder="Password" name="password" required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-password"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="privacy_policy1" name="privacy_policy" required>
                                        <label class="custom-control-label" for="privacy_policy1">I have read and
                                            accept the Terms and Privacy Policy?</label>
                                    </div>
                                    
                                        <button type="button" onClick="register();"  class="btn btn-log btn-block btn-thm">Sign
                                            Up</button>
											<span id="dev1"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- franchise Model--->
<div class="sign_up_modal modal fade bd-franchise-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body container pb20">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
                <div class="tab-content container" id="myTabContent">
                    <div class="row mt25 tab-pane fade show active" id="franchisehome" role="tabpanel"
                        aria-labelledby="franch-tab">
                        <div class="col-lg-6 col-xl-6">
                            <div class="regstr_thumb">
                                <img class="img-fluid w100" src="<?php echo base_url(FRONT_ASSETS);?>images/resource/regstr.jpg" alt="regstr.jpg">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="sign_up_form">
                                <div class="heading">
                                    <h4>Subscribe as Franchise</h4>
                                </div>
                                <form action="#">
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control" id="exampleInputName"
                                            placeholder="Full Name">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="email" class="form-control" id="exampleInputEmail2"
                                            placeholder="Email">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control" id="exampleInputMobile"
                                            placeholder="Mobile Number">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-mobile"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="form_message" name="form_message" class="form-control required"
                                            rows="4" required="required" placeholder="Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2 text-center">
                <img class="nav_logo_img img-fluid mt20" src="<?php echo base_url(FRONT_ASSETS);?>images/header-logo.png" alt="header-logo.jpg">
                <span class="mt20">Idea My Space</span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item list_s"><a href="register.php"><span class="flaticon-user"></span></a>
                </li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <span>Services</span>
                <!-- Level Two-->
                <ul>
                    <li><a href="service-category.php"> Designer</a></li>
                    <li><a href="service-category.php"> Contractor</a></li>
                    <li><a href="service-category.php">Supplier</a></li>
                </ul>
            </li>
            <li>
                <span>Sizes</span>
                <!-- Level Two-->
                <ul>
                    <li><a href="search-listing.php">1 Bed Room</a></li>
                    <li><a href="search-listing.php">2 Bed Room</a></li>
                    <li><a href="search-listing.php">3 Bed Room</a></li>
                    <li><a href="search-listing.php">4 Bed Room</a></li>
                    <li><a href="search-listing.php">DUPLEX</a></li>
                    <li><a href="search-listing.php">MANSION</a></li>
                    <li><a href="javascript: void()">SMALL</a></li>
                    <li><a class="Color" href="javascript: void()"><strong>View All..</strong></a></li>
                </ul>
            </li>
            <li>
                <a href="solutions.php"><span>Solutions</span></a>
            </li>
            <!-- <li><span>Style</span>
                <ul>
                    <li><a href="javascript: void()">Apartments </a></li>
                    <li><a href="javascript: void()">House/Villa </a></li>
                    <li><a href="javascript: void()">Contemporary</a></li>
                    <li><a href="javascript: void()">FarmHouse </a></li>
                    <li><a href="javascript: void()">Shop/Showroom </a></li>
                    <li><a href="javascript: void()">Independent </a></li>
                    <li><a href="javascript: void()">Cottage </a></li>
                    <li><a href="javascript: void()">Modern </a></li>
                    <li><a href="javascript: void()">Warehouse/ Godown </a></li>
                    <li><a href="javascript: void()">Flat</a></li>
                    <li><a href="javascript: void()">Bungalow </a></li>
                    <li><a href="javascript: void()">Country </a></li>
                    <li><a href="javascript: void()">Office Space </a></li>
                    <li><a class="Color" href="javascript: void()"><strong>View All..</strong></a></li>
                </ul>
            </li> -->
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="javascript: void()" data-toggle="modal" data-target=".bd-example-modal-lg">Login / Register</a>
            </li>
            <!-- <li><a href="login.php"><span class="flaticon-user"></span> Login</a></li>
            <li><a href="register.php"><span class="flaticon-edit"></span> Register</a></li> -->
        </ul>
    </nav>
</div>
<!-- Quick Contact -->
<div class="QCBG"></div>
<div class="QuickContact">
    <div class="Inner">
        <span class="fa fa-chevron-left SlideArrow" title="Quick Contact"></span>
        <div class="form_grid">
            <h4 class="mb5"><img class="QLogo" src="<?php echo base_url(FRONT_ASSETS);?>images/header-logo.png" />Quick Contact</h4>
            <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post"
                novalidate="novalidate">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input id="form_name" name="form_name" class="form-control" required="required" type="text"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input id="form_email" name="form_email" class="form-control required email"
                                required="required" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input id="form_phone" name="form_phone" class="form-control required phone"
                                required="required" type="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input id="form_subject" name="form_subject" class="form-control required"
                                required="required" type="text" placeholder="Subject">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea id="form_message" name="form_message" class="form-control Small required" rows="8"
                                required="required" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group mb0 text-center mb20">
                            <button type="button" class="btn btn-lg btn-thm">Submit</button>
                        </div>
                        <ul class="SocialIcons text-center mb0">
                            <li class="list-inline-item"><a href="javascript: void()"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="javascript: void()"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="javascript: void()"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript: void()"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="javascript: void()"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
