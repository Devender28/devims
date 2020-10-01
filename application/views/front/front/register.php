<?php include 'includes/header.php'; ?>

<body>
    <div class="wrapper">
        <div class="preloader"></div>
        <?php include 'includes/menu.php'; ?>
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
                                <h3 class="text-center">Register to start learning</h3>
                                <p class="text-center">Have an account? <a class="text-thm" href="login.php">Login</a>
                                </p>
                            </div>
                            <div class="details">
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName2"
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail3"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword4"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword5"
                                            placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group ui_kit_select_search mb0">
                                        <select class="selectpicker" data-live-search="true" data-width="100%">
                                            <option data-tokens="SelectRole">Single User</option>
                                            <option data-tokens="Agent/Agency">Agent</option>
                                            <option data-tokens="SingleUser">Multi User</option>
                                        </select>
                                    </div>
                                    <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                        <label class="custom-control-label" for="exampleCheck3">Want to become an
                                            Vendor?</label>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                                    <div class="divide">
                                        <span class="lf_divider">Or</span>
                                        <hr>
                                    </div>
                                    <div class="row mt40">
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-fb mb0"><i
                                                    class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                        </div>
                                        <div class="col-lg">
                                            <button type="submit"
                                                class="btn btn2 btn-block color-white bgc-gogle mb0"><i
                                                    class="fa fa-google float-left mt5"></i> Google</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'includes/footer-body.php'; ?>
    </div>
    <!-- Wrapper End -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>