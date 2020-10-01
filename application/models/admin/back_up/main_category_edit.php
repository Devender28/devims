
      <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb">
              
                <ol class="breadcrumb">
                   <li class="breadcrumb-item "><a href="<?php echo base_url();?>admin/main_category_details">View Main Category Details</a></li>
               
                </ol>
              
               </div>
              <h5 class="page-title">Update Main Category</h5>
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
                    <form action="<?php echo base_url();?>admin/<?php echo $this->uri->segment(2);?>/<?php echo $this->uri->segment(3);?>" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Main Category Name</label>
                        <div>
                          <input type="text" class="form-control" name="name" placeholder="Living"  value="<?php echo $maincategory->name;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Featured Image</label>
                        <div>
                       
                        
                        
                         <input class="form-control" type="hidden"  name="image_old" value="<?php echo $maincategory->image;?>" required >
                         <input type="file" name="image"><br>
                        
                        
            <?php
	$filename0="../uploads/maincategory/".$maincategory->image;
	if(file_exists($filename0))
	{
	
    ?>
    <img src="<?php echo base_url('../uploads/maincategory/'.$maincategory->image);?>" width="200" height="100">
    <?php
	}
	else
	{
    ?>
  	<img src="<?php echo base_url('../uploads/dummy_images/dummy.jpg');?>" width="200" height="100">
	<?php
	}
    ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <div>
                           <textarea required class="form-control" rows="5" placeholder="test" name="description"><?php echo $maincategory->description;?></textarea>
                        </div>
                      </div>
                    
                      
                      
                      <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit" value="Update Category"  name="maincategory_edit">
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
     