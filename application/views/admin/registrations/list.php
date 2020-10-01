
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              
              <h5 class="page-title">Registrations</h5>
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
                        <th>Sl. No<?php echo $Table;?></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                         <th>Password</th>
                        <th>Image</th>
                         <th>Status </th> 
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      
<?php
$a=1;
foreach($registrations as $reg){

?>          
                      
                      
                      
                      <tr>
                        <td><?php echo $a;?></td>
                        <td><?php echo $reg->name;?></td>
                        <td><?php echo $reg->email;?></td>
                        <td><?php echo $reg->mobile;?></td>
                        <td><?php echo $reg->password;?></td>
                        <td><img src="<?php echo base_url('../uploads/profile/'.$reg->image);?>" width="128" height="58" class="img-responsive"></td>
                        
                        <td>
                        
                        
                       
<a style="color:#FFF" class="btn btn-<?php if($reg->status=='1') { echo 'success';} else { echo 'danger';} ?> " onclick="status('<?php echo $reg->id;?>','<?php echo $reg->status;?>');"   ><?php if($reg->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a>
                       
 <a  onclick="deleterecord('<?php echo $reg->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-trash" aria-hidden="true"></i></a>                      
                       
                       
                       
                         </td>
                          
                          
                     
                      
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
      
      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
     
      
      
  <script>
function deleterecord(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this  Registrations Details..",
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
            alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});
}





function status(id,st){ 
if(st==1)
{
var text1="you want to Deactivate this  Registrations Details";
var confirm1="Yes, Deactivate!";
}
else
{
var text1="you want to Active this  Registrations Details";
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
          
      
      
      
      
      
     