
      <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb">
              
                <ol class="breadcrumb">
                   <li class="breadcrumb-item "><a href="<?php echo base_url();?>admin/specialoffer/details">View Special Offer Details</a></li>
               
                </ol>
              
               </div>
              <h5 class="page-title">Update Special Offer</h5>
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
                        <label>Category</label>
                        <div>
                          <input type="text" class="form-control" name="cat" value="<?php echo $specialoffer->category;?>" required >
                        </div>
                      </div>

											<div class="form-group">
                        <label>Add Title</label>
                        <div>
                          <input type="text" class="form-control" name="title" value="<?php echo $specialoffer->title;?>" required >
                        </div>
                      </div>

											<div class="form-group">
                        <label>Amount</label>
                        <div>
                          <input type="text" class="form-control" name="amount" value="<?php echo $specialoffer->amount;?>" required >
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <div>
                           <textarea required class="summernote" rows="5"  name="description"><?php echo $specialoffer->description;?></textarea>
                        </div>
                      </div>

                    
                    
                      
                      
                      <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit" value="Update Special Offer"  name="specialoffer_edit">
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
     