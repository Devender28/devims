
      <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb"> </div>
              <h5 class="page-title">Add Featured Project</h5>
            </div>
          </div>
          <!-- end row -->
         
         
         
         
         
          <div class="row">
            <!-- end col -->
            <div class="col-lg-12">
              <div class="card m-b-30">
                <div class="card-body">
                  <div class="col-lg-8 col-md-offset-4">

                    <form action="" method="post" enctype="multipart/form-data">

										<div class="form-group"><?php echo $msg;?>

                        <label>Select Project </label>
                        <div>
                          <select class="js-select2 form-control" id="select-farmer-name-2" name="p_id" style="width: 100%;" data-placeholder="Choose one.." required>
                           <option value="">Please Select Project </option>
													<?php

													foreach($products as $product){

													?> 
														<option value="<?php echo $product->id;?>"><?php echo $product->name;?></option>
																											
													<?php
													}
													?>
                            
                            
                          </select>
                        </div>
                      </div>
                    
										
                    
                      
                      
                      <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit" value="Add Featured Project"  name="featured_add">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- container fluid -->
      </div>
      <!-- Page content Wrapper -->
      