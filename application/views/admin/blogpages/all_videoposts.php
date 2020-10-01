
    <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="<?php echo base_url('admin/blog/addvideopost');?>">Add Video Post</a></li>
                </ol>
              </div>
              <h5 class="page-title">Blog Video Posts</h5>
            </div>
          </div>
          <!-- end row -->
          <div class="row">
            <div class="col-12">
              <div class="card m-b-30">
                <div class="card-body">
                  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
										<tr>
											<th>S No</th>
											<th>Title</th>
											<th>Category</th>
											<th>Video URL</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
										$a =1;
                                          foreach($posts as $post){
										?>
										<tr class="gradeX">
											<td><?php echo $a++;?></td>
											<td><?php echo $post->title;?></td>
											<td><?php echo $this->fun->getfieldvalue('blogcategory','name',$post->category);?></td>
											<td><?php echo $post->video;?> </td>
											<td>

												 <a href="<?php echo base_url('admin/blog/editvideopost').'/'.$post->id;?>" title="Edite Details"><span class="btn btn-warning waves-effect waves-light"><i class="ion-edit"></i></span></a> 
                       
                        <a  onclick="deleterecord('<?php echo $post->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-trash" aria-hidden="true"></i></a>
											</td>
											
																
										</tr>
										<?php } ?>
										

										
									</tbody>
								</table>
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



function deleterecord(id,img){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this blog post..",
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
  $.post(<?php echo '"'.base_url('admin/delete').'"';?>,
        {
          x: id, 
          y: img, 
          bdr: <?php echo '"'.$this->encryption->encrypt($Table).'"';?>
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






























