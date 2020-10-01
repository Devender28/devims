      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb"> </div>
              <h5 class="page-title">Add Project</h5>
            </div>
          </div>
      <?php echo $msg;?>
          
          
          <div class="row">
            <!-- end col -->
            <div class="col-lg-12">
              <div class="card m-b-30">
                <div class="card-body">
                  <div class="col-lg-8 col-md-offset-4">
                    <form action="" method="post" enctype="multipart/form-data">
                      
                      
					  
					  
<div class="form-group">
                        <label>Please Select Style  </label>
                        <div>
                          <select class="js-select2 form-control" id="select-farmer-name-2" name="style" style="width: 100%;" data-placeholder="Choose one.."  required>
                           <option value="">Please Select Style</option>
<?php

foreach($all_styles as $style){

?> 
                            <option value="<?php echo $style->id;?>"><?php echo $style->name;?></option>
                            
                            
<?php
}
?>
                            
                            
                          </select>
                        </div>
                      </div>
					  
					  
					  
					  
					  <div class="form-group">
                        <label>Type</label>
                        <div>
                          <input type="radio"  name="offer_premium" value="Offer">
<label for="Offer">Offer</label> &nbsp;&nbsp;
<input type="radio" name="offer_premium" value="Premium">
<label for="Premium">Premium</label><br>
                        </div>
                      </div>
					  
					  
					  
				  
											<div class="form-group">
                        <label>Select Design Category  </label>
                        <div>
                          <select class="js-select2 form-control" name="design_cat" style="width: 100%;" data-placeholder="Choose one.."  onchange="showCategory(this.value)"  required>
                           <option value="">Select Design</option>
                           <option value="residential">Residential</option>
                           <option value="commercial">Commercial</option> 
                          </select>
                        </div>
                      </div>
					  
					  
                      
                      <div class="form-group">
                        <label>Select Main Category </label>
                        <div>
                          <select class="js-select2 form-control" id="main_cat" name="cat_id" style="width: 100%;" data-placeholder="Choose one.." required>
                           <option value="">Please Select Main Category </option>

                            
                            
                          </select>
                        </div>
                      </div>
                      
					  
					  
					  
			<div class="form-group">
                        <label>Location</label>
                        <div>
                          <input type="text" class="form-control" name="location" required >
                        </div>
                      </div>		  
					  
					  
					  <div class="form-group">
                        <label>Name</label>
                        <div>
                          <input type="text" class="form-control" name="name" required >
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label>Description</label>
                        <div>
                       <textarea  class="summernote" name="description"></textarea>
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label>Bedrooms</label>
                        <div>
                          <input type="text" class="form-control" name="bedrooms" required >
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label>Bathrooms</label>
                        <div>
                          <input type="text" class="form-control" name="bathrooms" required >
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Price</label>
                        <div>
                          <input type="text" class="form-control" name="price" required >
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Offer Price</label>
                        <div>
                          <input type="text" class="form-control" name="offer_price" required >
                        </div>
                      </div>
					  
					  
					  
					  
					  <div class="form-group">
                        <label><h5 class="page-title">Property Details</h5></label>
                        
                      </div>       
                      
					  
					  
					  <div class="form-group">
                        <label>Facing </label>
                        <div>
                          <!-- <input type="text" class="form-control" name="facing" required > -->
													<select	class="form-control" name="facing" required>

													<option>North</option>

													<option>East</option>

													<option>West</option>

													<option>South</option>

													<option>North - East</option>

													<option>North - West</option>

													<option>South - West</option>

													<option>South - East</option>

											</select>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label>Open Space</label>
                        <div>
                          <input type="text" class="form-control" name="open_space" required >
                        </div>
                      </div>
                      
					  
					  
					  
                      
					  
					 <div class="form-group">
                        <label>Parking</label>
                        <div>
                          <input type="radio"  name="parking" value="Yes">
<label for="Yes">Yes</label> &nbsp;&nbsp;
<input type="radio" name="parking" value="NO">
<label for="NO">NO</label><br>
                        </div>
                      </div>
					  
					  
					  
					  <div class="form-group">
                        <label>Compound Wall</label>
                        <div>
                          <input type="radio"  name="compound_wall" value="Yes">
<label for="Yes">Yes</label> &nbsp;&nbsp;
<input type="radio" name="compound_wall" value="NO">
<label for="NO">NO</label><br>
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Build up Area</label>
                        <div>
												<input type="text" class="form-control" name="build_up_area" required >
                          <!-- <input type="radio"  name="build_up_area" value="Yes">
<label for="Yes">Yes</label> &nbsp;&nbsp;
<input type="radio" name="build_up_area" value="NO">
<label for="NO">NO</label><br> -->
                        </div>
                      </div>
					  
					  
					  
					  
                      
                      
                   
                      
                      
               <div class="form-group">
                        <label><h5 class="page-title">Additional Details</h5></label>
                        
                      </div> 


					

<div class="form-group">
                        <label>Kitchen</label>
                        <div>
                          <input type="radio"  name="kitchen" value="Yes">
<label for="Yes">Yes</label> &nbsp;&nbsp;
<input type="radio" name="kitchen" value="NO">
<label for="NO">NO</label><br>
                        </div>
                      </div>					
                      
                      
                  <div class="form-group">
                        <label>Living Area</label>
                        <div>
                          <input type="text" class="form-control" name="living_area" required >
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Pool Size</label>
                        <div>
                          <input type="text" class="form-control" name="pool_size" required >
                        </div>
                      </div>
					  
					  
				  
					  
					  <div class="form-group">
                        <label>Amenities</label>
                        <div>
                          <input type="text" class="form-control" name="amenities" required >
                        </div>
                      </div>
					  
					
					  
					  <div class="form-group">
                        <label>Additional Guest Rooms</label>
                        <div>
                          <input type="radio"  name="additional_rooms" value="Yes">
<label for="Yes">Yes</label> &nbsp;&nbsp;
<input type="radio" name="additional_rooms" value="NO">
<label for="NO">NO</label><br>
                        </div>
                      </div>	
					  
					  
					  
					  
					  
					  
					  <div class="form-group">
                        <label>Equipment </label>
                        <div>
                          <input type="text" class="form-control" name="equipment" required >
                        </div>
                      </div>
					  
					  
					  
                      
                      
 <!--                     
                      
                      <div class="form-group">
                        <div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups" name="trending" data-parsley-mincheck="2">
                            <label class="custom-control-label" for="customCheck1">Trending</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups" name="featured" data-parsley-mincheck="2">
                            <label class="custom-control-label" for="customCheck2">Featured</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups" name="recommended" data-parsley-mincheck="2">
                            <label class="custom-control-label" for="customCheck3">Recommended</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4" data-parsley-multiple="groups" name="bestseller" data-parsley-mincheck="2">
                            <label class="custom-control-label" for="customCheck4">Bestseller</label>
                          </div>
                        </div>
                      </div>
                      
 -->                     
                      
                      <div class="form-group">
                        <label><h5 class="page-title">Property Attachments</h5></label>
                        
                      </div>       

                       <div class="form-group">
                        <label>multiple Images</label>
                        <div>
                         <input type="file" name="userfile[]" accept="image/*" multiple required>
                        </div>
                      </div>
                      
                      
					  
					  <div class="form-group">
                        <label>Attachment1</label>
                        <div>
                          <input name="attachment1" type="file" required >
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label>Attachment2</label>
                        <div>
                          <input name="attachment2" type="file" required >
                        </div>
                      </div>
					  
					  
					  
					  
					  <div class="form-group">
                        <label><h5 class="page-title">Floor Plans</h5></label>
                        
                      </div>       
                      
					  <div class="form-group">
                        <label>First Floor Plan Size </label>
                        <div>
                          <input type="text" class="form-control" name="first_size" required >
                        </div>
                      </div>
                      
					  
					  <div class="form-group">
                        <label>First Floor Plan Image</label>
                        <div>
                          <input name="foor_plan1" type="file" required >
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label>Second Floor Plan Size  </label>
                        <div>
                          <input type="text" class="form-control" name="second_size" required >
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label>Second Floor Plan Image</label>
                        <div>
                          <input name="foor_plan2" type="file" required >
                        </div>
                      </div>
					  
					  
					  
					  
					  
					  <div class="form-group">
                        <label><h5 class="page-title">Other Details</h5></label>
                        
                      </div>  


                    <div class="form-group">
                        <label>Property video</label>
                        <div>
                          <input type="text" class="form-control" name="property_video" required >
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Virtual Tour</label>
                        <div>
                          <input type="text" class="form-control" name="virtual_tour" required >
                        </div>
                      </div>					  



					  <div class="form-group">
                        <label>Featured Image</label>
                        <div>
                          <input name="image" type="file" required >
                        </div>
                      </div>
					  
                  <!--   

					 <div class="form-group">
                        <label>Attachment2</label>
                        <div>
                          <input name="multiple_images[]" type="file" multiple required>
                        </div>
                      </div>
					  
					--->  
					  
                      
                   
                      
                     
                      
                      
                      
                      <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit"  name="add_product" value="Add Product" >
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
 url: <?php echo '"'.base_url('admin/product/display_category').'"';?>,
 data: {
  get_val:val
 },
  success: function (response) {
	  
  document.getElementById("main_cat").innerHTML=response; 
 }
 }); 
  
  
  
  
}
</script>  
