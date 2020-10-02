
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Register</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our LogIn Register -->
<section class="our-log-reg bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="sign_up_form inner_page">
                    <div class="heading">
                        <h3 class="text-center">Register as a Vendor</h3>
                        <p class="text-center">Have an account? <a class="text-thm" href="login.php">Login</a>
                        </p>
                    </div>
                    <div class="details">
                        <form method="post"><?php echo @$msg;?>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required id="exampleInputName2" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required id="exampleInputEmail3"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile" required id="exampleInputMobile3"
                                    placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" required id="exampleInputPassword4"
                                    placeholder="Password">
                            </div>
                            <div class="">
                                <div class="ui_kit_checkbox ">
                                    <h5 class="mb20">Select Vendor Type</h5>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="type[]" value="Designer" class="custom-control-input" id="customCheck80">
                                        <label class="custom-control-label" for="customCheck80">Designer</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="type[]" value="Supplier" class="custom-control-input" id="customCheck82">
                                        <label class="custom-control-label" for="customCheck82">Supplier</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="type[]" value="Contractor" class="custom-control-input" id="customCheck83">
                                        <label class="custom-control-label" for="customCheck83">Contractor</label>
                                    </div>
                                </div>
                            </div>
                            
                                <button type="submit" name="ven_register" class="btn btn-log btn-block btn-thm2">Register</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
