<!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb"> </div>
              <h5 class="page-title">Add Gallery Post</h5>
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

                    <form action="" method="post" enctype="multipart/form-data">
                     
                      <div class="form-group">
                       <label class="control-label">Select Category</label>
							<select name="cat" class="form-control" required placeholder="Select Category" required>
								<option value="">Select Category</option>
								<?php 
	                              foreach($categories as $category){
								?>
								<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option> <?php } ?>
							</select>	
                      </div>

                      <div class="form-group">
                      <label class="control-label"><strong>Post Title</strong></label>
							<input type="text" name="title" class="form-control" required>
                      </div>

                      

                       
							<div class="form-group">
								<label class="control-label"><strong>Post Images :</strong></label>
							
								<input type="file" name="userfile[]" accept="image/*" multiple required>
							</div>
						
                                        <div class="clearfix"></div>
                                        
											<div class="form-group">
                                            
												<label class="control-label"><strong>Post Description</strong></label>
												
												<textarea name="desc" class="form-control summernote" required data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'></textarea>
											</div>
																			
										
                     <div class="form-group">
                                            
												<label class="control-label"><strong>Meta Title</strong></label>
												<textarea name="m_title" class="form-control" ></textarea>
											</div>
									

										 
											<div class="form-group">
                                            
												<label class="control-label"><strong>Meta Description</strong></label>
												<textarea name="m_desc" class="form-control" ></textarea>
											</div>
										

										 
											<div class="form-group">
                                            
												<label class="control-label"><strong>Meta Keywords</strong></label>
												<textarea name="m_key" class="form-control" ></textarea>
											</div>
									
											<div class="form-group">
                                            
												<label class="control-label"><strong>Tags</strong></label>
												<textarea name="tags" class="form-control" ></textarea>
											</div>

								
							       <div class="form-group">
								     <input class="btn btn-primary waves-effect" type="submit" value="Add Gallery Post"  name="addblogpostgallery">
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
function deleterecord(id){ 
	$.post(<?php echo '"'.base_url('delete/blogpt').'"';?>,
        {
          x: id,
         
        },
        function(data,status){
            //alert("Data: " + data + "\nStatus: " + status);
            if(data)alert("Successfully Deleted");
            location.href="<?php echo base_url('blog/addpostgallery').'/'.$post->blogid;?>";
        });
}
</script>



























