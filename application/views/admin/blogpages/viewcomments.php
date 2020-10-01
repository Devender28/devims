<?php 
$cmts=$this->db->order_by('id','desc')->get('comments')->result();

 ?>




  <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb">
               
              </div>
              <h5 class="page-title">View All Comments</h5>
            </div>
          </div>
          <!-- end row -->
          <div class="row">
            <div class="col-12">
              <div class="card m-b-30">
                <div class="card-body">
                  <table class="table table-bordered table-striped mb-none" id="datatable-buttons"">
									<thead>
												<tr>
													<th>S.No</th>
													<th>Name</th>
													<th>Email</th>
													<th>Post</th>
													<th>Comment</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<?php 


												 $a=1; foreach($cmts as $c) {  ?>
												<tr <?php if($c->status==0) { echo 'style="font-weight: bold;"'; }?>>
													<td><?php echo $a;?></td>
													<td><?php echo @$c->name;?> </td>
													<td><?php echo @$c->email;?></td>
													<td><?php $this->fun->getfieldvalue('blogpost','title',$c->postid);?></td>
													<td>
														<?php echo @$c->comment;?>
													</td>
													<td>
													<a style="color:#FFF" class="btn btn-<?php if($c->status=='1') { echo 'success';} else { echo 'danger';} ?> " onclick="status('<?php echo $c->id;?>','<?php echo $c->status;?>');"   ><?php if($c->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a>

													
													<br><br>	<a onclick="deleterecord('<?php echo $c->id;?>');" class="btn btn-xs btn-warning">Delete</a>
													</td>
												</tr> <?php $a++;} ?>
												
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
function deleterecord(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this Comment",
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
          bdr: <?php echo '"'.$this->encryption->encrypt($Table).'"';?>
        },
        function(data,status){ 
            //alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});
}


function status(id,st){ 
if(st==1)
{
var text1="you want to Deactivate this Comment";
var confirm1="Yes, Deactivate!";
}
else
{
var text1="you want to Active this Comment";
var confirm1="Yes, Active!";	
}



swal({
  title: "Are you sure?",
  text:text1, 
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: confirm1,
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
          {
  $.post(<?php echo '"'.base_url('admin/Actions/statuschk').'"';?>,
        {
          x: id, 
          y: st,
		 bdr: <?php echo '"'.$Table.'"';?>
        },
        function(data){
       // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});
}
</script>





		<html>
<head>
  
</head>
<body>
  
  
  
 
</body>
</html>






























