
      <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb">
              
                <ol class="breadcrumb">
                   <li class="breadcrumb-item "><a href="<?php echo base_url();?>admin/coupons/details">View Coupons Details</a></li>
               
                </ol>
              
               </div>
              <h5 class="page-title">Update Coupon</h5>
            </div>
          </div>
          <!-- end row -->
        
        
      <?php echo $msg;?>  
        
          <div class="row">
            <!-- end col -->
            <div class="col-lg-12">
              <div class="card m-b-30">
                <div class="card-body">
                  <div class="col-lg-8 col-md-offset-4">
                    <form action="<?php echo base_url();?>admin/<?php echo $this->uri->segment(2);?>/<?php echo $this->uri->segment(3);?>/<?php echo $this->uri->segment(4);?>" method="post" enctype="multipart/form-data">
                      
										<div class="form-group">
                        <label>Code</label>
                        <div>
                          <input type="text" class="form-control" name="code" value="<?php echo $coupon->code;?>" required >
                        </div>
                      </div>

											<div class="form-group">
                        <label>Discount (in %)</label>
                        <div>
                          <input type="text" class="form-control" name="discount" value="<?php echo $coupon->discount;?>" required >
                        </div>
                      </div>

										

                    
                    
                      
                      
                      <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit" value="Update Coupon"  name="coupon_edit">
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
     