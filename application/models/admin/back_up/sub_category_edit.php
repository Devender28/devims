
      <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb">
              
                <ol class="breadcrumb">
                   <li class="breadcrumb-item "><a href="<?php echo base_url();?>admin/sub_category_details">View  Sub Category Details</a></li>
               
                </ol>
              
               </div>
              <h5 class="page-title">Update Sub Category</h5>
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
                        <label>Select Main Category </label>
                        <div>
                          <select class="js-select2 form-control" id="select-farmer-name-2" name="main_cat_id" style="width: 100%;" data-placeholder="Choose one.."  onchange="showCategory(this.value)"  required>
                           


                         <option value="<?php echo $sub_category->main_cat_id;?>"><?php echo $this->fun->getNewFieldValue("main_category","name","id",$sub_category->main_cat_id)?></option>

<?php

foreach($all_main as $main){

?> 
                            <option value="<?php echo $main->id;?>"><?php echo $main->name;?></option>
                            
                            
<?php
}
?>
                            
                            
                          </select>
                        </div>
                      </div>
                      
                      
                      
                      
                      
                      
                      <div class="form-group">
                        <label>Select Category </label>
                        <div>
                          <select class="js-select2 form-control" id="new_cat" name="cat_id" style="width: 100%;" data-placeholder="Choose one.." >
                           


                         <option value="<?php echo $sub_category->cat_id;?>"><?php echo $this->fun->getNewFieldValue("category","name","id",$sub_category->cat_id)?></option>

                         
                            
                          </select>
                        </div>
                      </div>
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      <div class="form-group">
                        <label>Sub Category Name</label>
                        <div>
                          <input type="text" class="form-control" name="name" placeholder="Living"  value="<?php echo $sub_category->name;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Featured Image</label>
                        <div>
                       
                        
                        
                         <input class="form-control" type="hidden"  name="image_old" value="<?php echo $sub_category->image;?>" required >
                         <input type="file" name="image"><br>
                        
                        
            <?php
	$filename0="../uploads/sub_category/".$sub_category->image;
	if(file_exists($filename0))
	{
	
    ?>
    <img src="<?php echo base_url('../uploads/sub_category/'.$sub_category->image);?>" width="200" height="100">
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
                        <label>Banner Image</label>
                        <div>
                       
                        
                        
                         <input class="form-control" type="hidden"  name="banner_old" value="<?php echo $sub_category->banner;?>" required >
                         <input type="file" name="banner"><br>
                        
                        
            <?php
	$filename0="../uploads/sub_banners/".$sub_category->banner;
	if(file_exists($filename0))
	{
	
    ?>
    <img src="<?php echo base_url('../uploads/sub_banners/'.$sub_category->banner);?>" width="200" height="100">
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
                           <textarea required class="form-control" rows="5" placeholder="test" name="description"><?php echo $sub_category->description;?></textarea>
                        </div>
                      </div>
                    
                      
                      
                      <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit" value="Update Sub Category"  name="sub_category_edit">
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
     
     
     
 <script>
function showCategory(val) {
 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/display_category').'"';?>,
 data: {
  get_val:val
 },
  success: function (response) {
	  
  document.getElementById("new_cat").innerHTML=response; 
 }
 }); 
  
  
  
  
}
</script>  