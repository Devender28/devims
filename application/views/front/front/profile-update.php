			<div class="col-sm-12 col-lg-8 col-xl-10">
                <div class="row">
                    <div class="col-sm-12 mb10">
						<div class="breadcrumb_content style2">
                            <span class="FilterButton">Menu</span>
							<h2 class="breadcrumb_title">Update Profile</h2>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="my_dashboard_review">
							<div class="row">
								<div class="col-xl-12">
									<form method="post" enctype='multipart/form-data'>
									<?php echo @$msg;?>
									<div class="row">
										<div class="col-lg-12">
											<div class="mb30">
												<img class="ProfilePic" src="<?php echo base_url('uploads/user/'.$user->image);?>" /><br />
												<div class="wrap-custom-file Doc">
													<input type="file" name="profile_image" id="image1" accept=".jpeg, .jpg" />
													<label  for="image1">
														<span><i class="flaticon-download"></i> Upload Profile Pic</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-6">
											<div class="my_profile_setting_input form-group">
												<label for="formGroupExampleInput1">Name</label>
												<input type="text" class="form-control" id="formGroupExampleInput1" name="name" value="<?php echo $user->name;?>">
												<input type="hidden" name="old_profile_image" value="<?php echo $user->image;?>" />
											</div>
										</div><div class="col-lg-6 col-xl-6">
											<div class="my_profile_setting_input form-group">
												<label for="formGroupExampleEmail">Email</label>
												<input type="email" class="form-control" id="formGroupExampleEmail" name="email" value="<?php echo $user->email;?>"> 
											</div>
										</div>
										<!-- <div class="col-lg-6 col-xl-6">
											<div class="my_profile_setting_input form-group">
												<label for="formGroupExampleInput3">First Name</label>
												<input type="text" class="form-control" id="formGroupExampleInput3">
											</div>
										</div><div class="col-lg-6 col-xl-6">
											<div class="my_profile_setting_input form-group">
												<label for="formGroupExampleInput4">Last Name</label>
												<input type="text" class="form-control" id="formGroupExampleInput4">
											</div>
										</div> -->
										<div class="col-lg-6 col-xl-6">
											<div class="my_profile_setting_input form-group">
												<label for="formGroupExampleInput5">Mobile</label>
												<input type="text" class="form-control" id="formGroupExampleInput5" name="mobile" value="<?php echo $user->mobile;?>">
											</div>
										</div>
										<!-- <div class="col-lg-6 col-xl-6">
											<div class="my_profile_setting_input form-group">
												<label for="formGroupExampleInput10">Phone</label>
												<input type="text" class="form-control" id="formGroupExampleInput10">
											</div>
										</div> -->
										<div class="col-xl-12">
											<div class="my_profile_setting_input form-group">
												<label for="formGroupExampleInput13">Address</label>
												<div class="row">
												<div class="col-md-6">
														<input type="text" class="form-control mb10" name="address" id="formGroupExampleInput13" value="<?php echo $user->address;?>">
													</div>
												<!--	<div class="col-md-6">
														<input type="text" class="form-control mb10" id="formGroupExampleInput13" placeholder="Flat, Building, Apartment">
													</div>
													 <div class="col-md-6">
														<input type="text" class="form-control mb10" id="formGroupExampleInput13" placeholder="Street, Colony, Sector, Village">
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control mb10" id="formGroupExampleInput13" placeholder="Town / City">
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control mb10" id="formGroupExampleInput13" placeholder="State / Province / Region">
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control" id="formGroupExampleInput13" placeholder="Postal / Zip Code">
													</div> -->
												</div>
											</div>
										</div>
										<div class="col-xl-12 text-right">
											<div class="my_profile_setting_input">
												<button type="submit" name="update_profile" class="btn btn2">Update Profile</button>
											</div>
										</div>
									</div>
									</form>
                                    <form method="post">  <?php echo @$pass_msg;?>
									<div class="row">
										<div class="col-xl-12">
											<div class="row">
												<div class="col-xl-12">
													<h3 class="mt50 mb50">Change Password</h3>
												</div>
												<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
														<label for="formGroupExampleOldPass">Old Password</label>
														<input type="text" class="form-control" id="formGroupExampleOldPass" name="old_pass">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-xl-6">
													<div class="my_profile_setting_input form-group">
														<label for="formGroupExampleNewPass">New Password</label>
														<input type="text" class="form-control" id="formGroupExampleNewPass" name="new_pass">
													</div>
												</div>
												<div class="col-lg-6 col-xl-6">
													<div class="my_profile_setting_input form-group">
														<label for="formGroupExampleConfPass">Confirm New Password</label>
														<input type="text" class="form-control" id="formGroupExampleConfPass" name="confirm_pass">
													</div>
												</div>
												<div class="col-xl-12">
													<div class="my_profile_setting_input float-right fn-520">
														<button type="submit" name="update_password" class="btn btn2">Update Password</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</section> 
