
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Logın</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Logın</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our LogIn Register -->
<section class="our-log bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="login_form inner_page">
                    <form action="" method="post">
                        <div class="heading">
                            <h3 class="text-center">Login to your account</h3>
                            <p class="text-center">Don't have an account? <a class="text-thm" href="register.php">Sign
                                    Up!</a></p>
                        </div><?php echo @$msg;?>
                        <div class="form-group">
                            <input type="text" name="email" required class="form-control" id="venemail"
                                placeholder="Email  / Mobile Number">
                        </div>
                        <div class="form-group sign-in-passwrd">
                            <input type="password" name="password" required class="form-control" id="password"
                                placeholder="Password">
                        </div>
                        <div class="form-group  custom-checkbox">
                            <a class="btn-fpswd " id="devotp" onClick="ven_sendOTP();" href="javascript: void()">Get One Time
                                Password(OTP)</a>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                            <label class="custom-control-label" for="exampleCheck3">Remember me</label>
                            <a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
                        </div>
                        <button type="submit" name="ven_login" class="btn btn-log btn-block btn-thm2">Login</button>
						<span id="deven"></span>
                    </form>
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
                    <h2>Become a Real Estate Agent</h2>
                    <p>We only work with the best companies around the globe</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="parner_reg_btn text-right tac-smd">
                    <a class="btn btn-thm2" href="#">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
