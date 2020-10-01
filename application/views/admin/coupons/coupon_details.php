
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="<?php echo base_url();?>admin/coupons/add">Add Coupon</a></li>
                </ol>
              </div>
              <h5 class="page-title">Coupons Details</h5>
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
                        <th>Coupon Code</th>
                        <th>Discount %</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      
<?php
$a=1;
foreach($all_coupons as $coupon){

?>          
                      
                      
                      
                      <tr>
                        <td><?php echo $a;?></td>
                        <td><?php echo $coupon->code;?></td>
                        <td><?php echo $coupon->discount;?></td>
                          
                          
                        <th> 
                        
                        <a href="<?php echo base_url('admin/coupons/edit').'/'.$coupon->id;?>" title="Edite Details"><span class="btn btn-warning waves-effect waves-light"><i class="ion-edit"></i></span></a> 
                       
                        <a  onclick="deleterecord('<?php echo $coupon->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        
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
      
      
      
      
      <!-- POPUP DETAILS -->
      
      
      
      
      
      
      
      
      
      
      
<script>
function deleterecord(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this  Category Details..",
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
var text1="you want to Deactivate this Category Details";
var confirm1="Yes, Deactivate!";
}
else
{
var text1="you want to Active this Category Details";
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
          
      
      
      
      
      