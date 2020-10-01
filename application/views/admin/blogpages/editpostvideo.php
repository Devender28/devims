<!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb"> </div>
              <h5 class="page-title">Update Blog Video Post</h5>
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
                          <option value="<?php echo $category->id;?>" <?php if($category->id===$post->category){ echo 'selected';} ?>><?php echo $category->name;?></option> <?php } ?>
							</select>	
                      </div>

                      <div class="form-group">
                      <label class="control-label"><strong>Post Title</strong></label>
							<input type="text" name="title" class="form-control" value="<?php echo $post->title;?>" required>
                      </div>

                     
                       
							<div class="form-group">
								<label class="control-label"><strong>Video Url</strong></label>
							
								<input type="url" name="video" class="form-control" value="<?php echo $post->video;?>" required>*add youtube url
							</div>
						
                                        <div class="clearfix"></div>
                                        
											<div class="form-group">
                                            
												<label class="control-label"><strong>Post Description</strong></label>
												<textarea name="desc" class="form-control summernote" id="summernote" required data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $post->description;?></textarea>
											</div>
																			
										
                    <div class="form-group">
                                            
											<label class="control-label"><strong>Meta Title</strong></label>
											<textarea name="m_title" class="form-control" ><?php echo $post->meta_title;?></textarea>
										</div>
								

										
										<div class="form-group">
																					
											<label class="control-label"><strong>Meta Description</strong></label>
											<textarea name="m_desc" class="form-control" ><?php echo $post->meta_description;?></textarea>
										</div>
									

										
										<div class="form-group">
																					
											<label class="control-label"><strong>Meta Keywords</strong></label>
											<textarea name="m_key" class="form-control" ><?php echo $post->meta_keywords;?></textarea>
										</div>
								
										<div class="form-group">
																					
											<label class="control-label"><strong>Tags</strong></label>
											<textarea name="tags" class="form-control" ><?php echo $post->tags;?></textarea>
										</div>

								
							       <div class="form-group">
								     <input class="btn btn-primary waves-effect" type="submit" value="Update Video Post"  name="updatevideopost">
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












			

























