
      <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb"> </div>
              <h5 class="page-title">Add Special Offer</h5>
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
                    <form action="<?php echo base_url();?><?php echo $this->uri->segment(1);?>/<?php echo $this->uri->segment(2);?>/<?php echo $this->uri->segment(3);?>" method="post" enctype="multipart/form-data">

									

                      <div class="form-group">
                        <label>Category</label>
                        <div>
                          <input type="text" class="form-control" name="cat" required >
                        </div>
                      </div>

											<div class="form-group">
                        <label>Add Title</label>
                        <div>
                          <input type="text" class="form-control" name="title" required >
                        </div>
                      </div>

											<div class="form-group">
                        <label>Amount</label>
                        <div>
                          <input type="text" class="form-control" name="amount" required >
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <div>
                           <textarea required class="summernote" rows="5"  name="description"></textarea>
                        </div>
                      </div>
                    
                      
                      
                      <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit" value="Add Special Offer"  name="specialoffer_add">
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
      