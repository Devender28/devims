      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb"> </div>
              <h5 class="page-title">Update Project</h5>
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
                            <option value="<?php echo $style->id;?>" <?php if($style->id == $product->style) echo "selected" ;?>><?php echo $style->name;?></option>
                            
                            
<?php
}
?>
                            
                            
                          </select>
                        </div>
                      </div>
					  
					  
					  
					  
					  <div class="form-group">
                        <label>Type</label>
                        <div>
                          <input type="radio"  name="offer_premium" value="Offer" <?php if($product->offer_premium == 'Offer') echo "checked" ;?>>
<label for="Offer">Offer</label> &nbsp;&nbsp;
<input type="radio" name="offer_premium" value="Premium" <?php if($product->offer_premium == 'Premium') echo "checked" ;?>>
<label for="Premium">Premium</label><br>
                        </div>
                      </div>
					  
					  
					  
				  
					  
											<div class="form-group">
                        <label>Select Design Category  </label>
                        <div>
                          <select class="js-select2 form-control" name="design_cat" style="width: 100%;" data-placeholder="Choose one.."  onchange="showCategory(this.value)"  required>
                           <option value="">Select Design</option>
                           <option value="residential" <?php if($product->design_cat == 'residential') echo "selected" ;?>>Residential</option>
                           <option value="commercial" <?php if($product->design_cat == 'commercial') echo "selected" ;?>>Commercial</option> 
                          </select>
                        </div>
                      </div>
					  
					  
					  
					  
                      
                      <div class="form-group">
                        <label>Select Main Category </label>
                        <div>
                          <select class="js-select2 form-control" id="main_cat" name="cat_id" style="width: 100%;" data-placeholder="Choose one.."  required>
                           <option value="">Please Select Main Category </option>
<?php

foreach($all_main as $main){

?> 
                            <option value="<?php echo $main->id;?>" <?php if($main->id == $product->cat_id) echo "selected" ;?>><?php echo $main->name;?></option>
                            
                            
<?php
}
?>
                            
                            
                          </select>
                        </div>
                      </div>
                      
					  
					  
					  
			<div class="form-group">
                        <label>Location</label>
                        <div>
                          <input type="text" class="form-control" name="location" value="<?php echo $product->location;?>" required >
                        </div>
                      </div>		  
					  
					  
					  <div class="form-group">
                        <label>Name</label>
                        <div>
                          <input type="text" class="form-control" name="name" value="<?php echo $product->name;?>" required >
													<input type="hidden" name="max_id" value="<?php echo $product->max_id; ?>" >
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label>Description</label>
                        <div>
                       <textarea  class="summernote" name="description"><?php echo $product->description;?></textarea>
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label>Bedrooms</label>
                        <div>
                          <input type="text" class="form-control" name="bedrooms" value="<?php echo $product->bedrooms;?>" required >
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label>Bathrooms</label>
                        <div>
                          <input type="text" class="form-control" name="bathrooms" value="<?php echo $product->bathrooms;?>" required >
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Price</label>
                        <div>
                          <input type="text" class="form-control" name="price" value="<?php echo $product->price;?>" required >
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Offer Price</label>
                        <div>
                          <input type="text" class="form-control" name="offer_price" value="<?php echo $product->offer_price;?>" required >
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

													<option <?php if($product->facing == 'North') echo "selected" ;?>>North</option>

													<option <?php if($product->facing == 'East') echo "selected" ;?>>East</option>

													<option <?php if($product->facing == 'West') echo "selected" ;?> >West</option>

													<option <?php if($product->facing == 'South') echo "selected" ;?> >South</option>

													<option <?php if($product->facing == 'North - East') echo "selected" ;?> >North - East</option>

													<option <?php if($product->facing == 'North - West') echo "selected" ;?>>North - West</option>

													<option <?php if($product->facing == 'South - West') echo "selected" ;?> >South - West</option>

													<option <?php if($product->facing == 'South - East') echo "selected" ;?>>South - East</option>

											</select>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label>Open Space</label>
                        <div>
                          <input type="text" class="form-control" name="open_space" value="<?php echo $product->open_space;?>" required >
                        </div>
                      </div>
                      
					  
					  
					  
                      
					  
					 <div class="form-group">
                        <label>Parking</label>
                        <div>
                          <input type="radio"  name="parking" value="Yes" <?php if($product->parking == 'Yes') echo "checked" ;?>>
<label for="Yes">Yes</label> &nbsp;&nbsp;
<input type="radio" name="parking" value="NO" <?php if($product->parking == 'NO') echo "checked" ;?>>
<label for="NO">NO</label><br>
                        </div>
                      </div>
					  
					  
					  
					  <div class="form-group">
                        <label>Compound Wall</label>
                        <div>
                          <input type="radio"  name="compound_wall" value="Yes" <?php if($product->compound_wall == 'Yes') echo "checked" ;?>>
<label for="Yes">Yes</label> &nbsp;&nbsp;
<input type="radio" name="compound_wall" value="NO" <?php if($product->compound_wall == 'NO') echo "checked" ;?>>
<label for="NO">NO</label><br>
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Build up Area</label>
                        <div>
                         	<input type="text" class="form-control" name="build_up_area" value="<?php echo $product->build_up_area; ?>" required >
                        </div>
                      </div>
					  
					  
					  
					  
                      
                      
                   
                      
                      
               <div class="form-group">
                        <label><h5 class="page-title">Additional Details</h5></label>
                        
                      </div> 


					

<div class="form-group">
                        <label>Kitchen</label>
                        <div>
                          <input type="radio"  name="kitchen" value="Yes" <?php if($product->kitchen == 'Yes') echo "checked" ;?>>
<label for="Yes">Yes</label> &nbsp;&nbsp;
<input type="radio" name="kitchen" value="NO" <?php if($product->kitchen == 'NO') echo "checked" ;?>>
<label for="NO">NO</label><br>
                        </div>
                      </div>					
                      
                      
                  <div class="form-group">
                        <label>Living Area</label>
                        <div>
                          <input type="text" class="form-control" name="living_area" value="<?php echo $product->living_area;?>" required >
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Pool Size</label>
                        <div>
                          <input type="text" class="form-control" name="pool_size" value="<?php echo $product->pool_size;?>" required >
                        </div>
                      </div>
					  
					  
				  
					  
					  <div class="form-group">
                        <label>Amenities</label>
                        <div>
                          <input type="text" class="form-control" name="amenities" value="<?php echo $product->amenities;?>" required >
                        </div>
                      </div>
					  
					
					  
					  <div class="form-group">
                        <label>Additional Guest Rooms</label>
                        <div>
                          <input type="radio"  name="additional_rooms" value="Yes" <?php if($product->additional_rooms == 'Yes') echo "checked" ;?>>
<label for="Yes">Yes</label> &nbsp;&nbsp;
<input type="radio" name="additional_rooms" value="NO" <?php if($product->additional_rooms == 'NO') echo "checked" ;?>>
<label for="NO">NO</label><br>
                        </div>
                      </div>	
					  
					  
					  
					  
					  
					  
					  <div class="form-group">
                        <label>Equipment </label>
                        <div>
                          <input type="text" class="form-control" name="equipment" value="<?php echo $product->equipment;?>" required >
                        </div>
                      </div>
					  
                  
                      
                      <div class="form-group">
                        <label><h5 class="page-title">Property Attachments</h5></label>
                        
                      </div>       

                       <div class="form-group">
                        <label>multiple Images</label>
                        <div>
                         <input type="file" name="userfile[]" accept="image/*" multiple >
                        </div> <br>

												<?php 
                          $postimages=$this->db->get_where('product_images',array('max_id'=>$product->max_id))->result();
                            $count = $this->db->get_where('product_images',array('max_id'=>$product->max_id))->num_rows();
												foreach($postimages as $pimg){?>
													<span class="pull-left mb-xs mr-xs">
													<a onclick="deletegalimg('<?php echo $pimg->id;?>')" class="pull-right btn btn-xs btn-warning">x</a>
											<img height="75" src="<?php echo base_url().'uploads/projects/images/'.$pimg->image;?>">
											
											</span>
											 <?php } ?>

                      </div>
                      
                      
					  
					  <div class="form-group">
                        <label>Attachment1</label>
                        <div>
                          <input name="attachment1" type="file" value="<?php echo $product->attachment1;?>" >
													<input name="old_attachment1" type="hidden" value="<?php echo $product->attachment1;?>" >
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label>Attachment2</label>
                        <div>
                          <input name="attachment2" type="file" value="<?php echo $product->attachment2;?>" >
													<input name="old_attachment2" type="hidden" value="<?php echo $product->attachment2;?>" >
                        </div>
                      </div>
					  
					  
					  
					  
					  <div class="form-group">
                        <label><h5 class="page-title">Foor Plans</h5></label>
                        
                      </div>       
                      
					  <div class="form-group">
                        <label>First Foor Plan Size </label>
                        <div>
                          <input type="text" class="form-control" name="first_size" value="<?php echo $product->first_size;?>" >
                        </div>
                      </div>
                      
					  
					  <div class="form-group">
                        <label>First Foor Plan Image</label>
                        <div>
                          <input name="foor_plan1" type="file"  >
                        </div>
												<img height="75" src="<?php echo base_url().'uploads/projects/foor_plans/'.$product->foor_plan1;?>">
												<input name="old_foor_plan1" type="hidden" value="<?php echo $product->foor_plan1;?>" >
                      </div>
					  
					  <div class="form-group">
                        <label>Second Foor Plan Size  </label>
                        <div>
                          <input type="text" class="form-control" name="second_size" value="<?php echo $product->second_size;?>" >
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label>Second Foor Plan Image</label>
                        <div>
                          <input name="foor_plan2" type="file" >
                        </div>
												<img height="75" src="<?php echo base_url().'uploads/projects/foor_plans/'.$product->foor_plan2;?>">
												<input name="old_foor_plan2" type="hidden" value="<?php echo $product->foor_plan2;?>" >
                      </div>
					  
					  
					  
					  
					  
					  <div class="form-group">
                        <label><h5 class="page-title">Other Details</h5></label>
                        
                      </div>  


                    <div class="form-group">
                        <label>Property video</label>
                        <div>
                          <input type="text" class="form-control" name="property_video" value="<?php echo $product->property_video;?>" >
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Virtual Tour</label>
                        <div>
                          <input type="text" class="form-control" name="virtual_tour" value="<?php echo $product->virtual_tour;?>" >
                        </div>
                      </div>					  



					  <div class="form-group">
                        <label>Featured Image</label>
                        <div>
                          <input name="image" type="file"  >
                        </div>
												<img height="75" src="<?php echo base_url().'uploads/projects/featured_image/'.$product->featured_image;?>">
												<input name="old_fimage" type="hidden" value="<?php echo $product->featured_image;?>" >
                      </div>
					  
               
                      
                   
                      
                     
                      
                      
                      
                      <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit"  name="update_product" value="Update Product" >
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
      
      
      
   
      
      
      
			<script type="text/javascript">
function deletegalimg(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this  gallery image..",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
          { 
  $.post(<?php echo '"'.base_url('admin/Actions/delete').'"';?>,
        {
          x: id, 
         // y: img, 
          bdr: <?php echo '"'.$this->encryption->encrypt('product_images').'"';?>
        },
        function(data,status){ 
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});
}
</script>
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
