<body class="fixed-left">
<script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
<!-- Loader -->



<!-- Begin page -->

<div class="accountbg">

  <div class="content-center">

    <div class="content-desc-center">

      <div class="container">

          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="card">
                <div class="row AdminLogin">
                  <div class="col-md-6 Left">
                    <div class="Inner">
                      <div class="m-b-15"><a href="" class="logo logo-admin"><img src="<?php echo base_url();?>assets/admin/images/logo.png" /> Idea My Space</a></div>
                      <div class="Desc">For your Home Design, Interior Design, Floor Plan and Elevation Design</div>
                      <div class="CRight">© CopyRights 2020 - IMS</div>
                    </div>
                  </div>
                  <div class="col-md-6 Right">

                    <div class="card">

                      <div class="card-body">
                        <div class="Inner">
                          <h4 class="text-muted text-center font-18"><b>Login</b></h4>                  

                          <?php echo  @$msg;?>                  

                          <div class="p-2">

                            <form class="form-horizontal m-t-20" ction="" method="post">

                              <div class="form-group row LogIn">

                                <div class="col-12">
                                  <input class="form-control" type="text" name="username" required />
                                  <label>User Name</label>
                                </div>

                              </div>

                              <div class="form-group row LogIn">
                                
                                <div class="col-12">
                                  <input class="form-control" type="password" name="password" required />
                                  <label>Password</label>
                                </div>

                              </div>                            

                              <div class="form-group text-center row m-t-20">

                                <div class="col-12">

                                  <button class="btn btn-primary btn-block waves-effect waves-light" name="login" type="submit">Log In</button>

                                </div>

                              </div>
                              <script>
                                $(window).on('load', function() {
                                  $('div.AdminLogin div.Left div.Inner, div.AdminLogin div.Right div.Inner').animate({'margin-left': '0'}, 300);
                                });
                              </script>

                            </form>

                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- end row -->

      </div>

    </div>

  </div>

</div>

