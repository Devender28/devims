<!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb"> 
               <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="<?php echo base_url('admin/blog/all_galleryposts');?>">All Gallery Posts</a></li>
                </ol>
              </div>
              <h5 class="page-title">Update Gallery Post</h5>
            </div>
          </div>
          <!-- end row -->
         
         
         
        
         
          <div class="row">
            <!-- end col -->
            <div class="col-lg-12">
              <div class="card m-b-30">
                <div class="card-body">
                  <div class="col-lg-8 col-md-offset-4">

                          <form action="" method="post" enctype="multipart/form-data">
                     <?php echo @$msg; ?>
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

							<input type="hidden" name="maxid" value="<?php echo $post->maxid; ?>" >
                      </div>

                      
                     

                       
							<div class="form-group">
								<label class="control-label"><strong>Post Image</strong></label>
							
								<input type="file" name="userfile[]" accept="image/*" ><br><br>

								<?php 
                                         $postimages=$this->db->get_where('postgallery',array('maxid'=>$post->maxid))->result();
                                         $count = $this->db->get_where('postgallery',array('maxid'=>$post->maxid))->num_rows();
												foreach($postimages as $pimg){?>
													<a class="pull-left mb-xs mr-xs">
													<button onclick="if(confirm('Do you want to Delete this Image?')) deletegalimg('<?php echo $pimg->id;?>','<?php echo $pimg->image;?>','<?php echo $count;?>')" class="pull-right btn btn-xs btn-warning">x</button>
											<img height="75" src="<?php echo base_url().'uploads/blog/post/'.$pimg->image;?>">
											</a>
											 <?php } ?>
							</div>
						
                                        <div class="clearfix"></div>
                                        
											<div class="form-group">
                                            
												<label class="control-label"><strong>Post Description</strong></label>
												<textarea name="desc" class="form-control summernote" required data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $post->description;?></textarea>
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
								     <input class="btn btn-primary waves-effect" type="submit" value="Update Gallery Post"  name="updatepostgal">
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
function deletegalimg(id,image,count){ alert('image')
	$.post(<?php echo '"'.base_url('blog/deletegalimg').'"';?>,
        {
          x: id,
          y: image
        }, 
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
            if(data)alert("Successfully Deleted");
            if(count===1){
            location.href="<?php echo base_url('blog/editgalpost/'.$post->id); ?>"; 
        } else location.href="";
        });
}
</script>
