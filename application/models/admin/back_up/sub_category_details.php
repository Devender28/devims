
      <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="<?php echo base_url();?>admin/sub_category">Add Sub Category</a></li>
                </ol>
              </div>
              <h5 class="page-title">Sub Category  Details</h5>
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
                        <th>Sl. No</th>
                        <th>Main Category Name</th>
                        <th>Category Name</th>
                        <th>Sub Category Name</th>
                        <th>Featured Image</th>
                        <th>Description</th>
                        <th>Status </th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      
<?php
$a=1;
foreach($all_sub_cat as $sub){

?>          
                      
                      
                      
                      <tr>
                        <td><?php echo $a;?></td>
                        <td><?php echo $this->fun->getNewFieldValue("main_category","name","id",$sub->main_cat_id)?></td>
                        <td><?php echo $this->fun->getNewFieldValue("category","name","id",$sub->cat_id)?></td>
                        <td><?php echo $sub->name;?></td>
                        <td><img src="<?php echo base_url('../uploads/sub_category/'.$sub->image);?>" width="128" height="58" class="img-responsive"></td>
                        <td><?php echo $sub->description;?></td>
                        <td>
                        
                        
                       
<a style="color:#FFF" class="btn btn-<?php if($sub->status=='1') { echo 'success';} else { echo 'danger';} ?> " onclick="status('<?php echo $sub->id;?>','<?php echo $sub->status;?>');"   ><?php if($sub->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a>
                       
                       
                       
                       
                       
                         </td>
                          
                          
                        <th> 
                        
                        <a href="<?php echo base_url('admin/sub_category_edit').'/'.$sub->id;?>" title="Edite Details"><span class="btn btn-warning waves-effect waves-light"><i class="ion-edit"></i></span></a> 
                       
                        <a  onclick="deleterecord('<?php echo $sub->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        
                        </th>
                      
                      
                      
                      </tr>
                     
                   
<?php $a++; } ?>                   
                   
                   
                   
                   
                   
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
      
     
      
<script>
function deleterecord(id,img){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this  Sub Category Details..",
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
          bdr: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data,status){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});
}





function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this  Sub Category Details",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Deactivate!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
          {
  $.post(<?php echo '"'.base_url('admin/status').'"';?>,
        {
          x: id, 
          y: 0,
		  z: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});} else {

  swal({
  title: "Are you sure?",
  text: "you want to Activate this  Sub Category Details",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Activate!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
           {
  $.post(<?php echo '"'.base_url('admin/status').'"';?>,
        {
          x: id, 
         y: 1,
		 z: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }

});
}
}

</script>
      
      
      
      
      
     