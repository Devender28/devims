
      <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb"> </div>
              <h5 class="page-title">Add  Sub Category</h5>
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
                    <form action="<?php echo base_url();?>admin/<?php echo $this->uri->segment(2);?>" method="post" enctype="multipart/form-data">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                     
                     
                     
                     <div class="form-group">
                        <label>Select Main Category </label>
                        <div>
                          <select class="js-select2 form-control" name="main_cat_id" style="width: 100%;"  data-placeholder="Choose one.."  onchange="showCategory(this.value)"  required>
                            <option value="">Please Select Main Categoru </option>
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
                          <select class="js-select2 form-control"  id="new_cat" name="cat_id" style="width: 100%;" data-placeholder="Choose one.."  onchange="showSubcategory(this.value)"  required>
                          <option value="">Please Select Category </option>
                           </select>
                        </div>
                      </div>
                      
                      
                      
                      
                      
                      
                      
                      
                     
                     
                     
                     
                     
                      <div class="form-group">
                        <label>Sub Category Name</label>
                        <div>
                          <input type="text" class="form-control" name="name" required >
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Featured Image</label>
                        <div>
                         <input  type="file" name="image"  required>
                        </div>
                      </div>
                      
                      
                      
                      
                       <div class="form-group">
                        <label>Banner Image</label>
                        <div>
                         <input  type="file" name="banner"  required>
                        </div>
                      </div>
                      
                      
                      
                      
                      <div class="form-group">
                        <label>Description</label>
                        <div>
                           <textarea required class="form-control" rows="5"  name="description"></textarea>
                        </div>
                      </div>
                    
                      
                      
                      <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit" value="Add Category"  name="sub_category_add">
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
      
      
      
      
      
      
      
      

      
      