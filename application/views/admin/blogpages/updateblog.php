
      <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb"> </div>
              <h5 class="page-title">Update Blog Details</h5>
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
                    <form action="<?php echo base_url();?>blog/<?php echo $this->uri->segment(2);?>" method="post" enctype="multipart/form-data">
                     
                     
                     
                    
                     
                     
                     
                     
                      <div class="form-group">
                        <label>Blog Title </label>
                        <div>
                          <input type="text" class="form-control" name="btitle" value="<?php echo $blog->title;?>" required >
                        </div>
                      </div>
                      <div class="form-group">
                      

                        	<label class="control-label"><strong>Blog Banner Image</strong></label>
											
							 <img height="75" src="<?php echo base_url().'../uploads/blog/'.$blog->image;?>">
											 <input type="hidden" name="imageold" class="form-control" value="<?php echo $blog->image;?>" required>
												<input type="file" name="bimage" accept="image/*" >

                      </div>

                    


                      <div class="form-group">
                       
                        <label class="control-label"><strong>Blog Tag</strong></label>
												<input type="text" name="btag" class="form-control" value="<?php echo $blog->tag;?>" required>
                      </div>
                    
                      
                      
                   <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit" value="Update Blog"  name="updateblog">
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
      








































				









































































