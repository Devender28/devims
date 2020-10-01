<!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb"> 
              <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="<?php echo base_url('admin/blog/all_categories');?>">All Blog Categories</a></li>
                </ol>
                </div>
              <h5 class="page-title">Update Blog Category</h5>
            </div>
          </div>
          <!-- end row -->
         
         
         
        
         
          <div class="row">
            <!-- end col -->
            <div class="col-lg-12">
              <div class="card m-b-30">
                <div class="card-body">
                  <div class="col-lg-8 col-md-offset-4">

 <?php echo $msg;?>

                    <form action="#" method="post" enctype="multipart/form-data">
                     
                      <div class="form-group">
                       <label class="control-label"><strong>Category Name</strong></label>

						<input type="text" name="name" class="form-control" value="<?php echo $category->name;?>" required>
                      </div>
                     
                    
                      
                   <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit" value="Update Category"  name="updatecategory">
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








			



























