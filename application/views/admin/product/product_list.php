      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="<?php echo base_url();?>admin/product/add_project">Add Project</a></li>
                </ol>
              </div>
              <h5 class="page-title">Project  Details</h5>
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
                        <th>Category Name</th>
						<th>Project Name</th>
                      	 <th>Bedrooms</th>
						 <th>Bathrooms</th>
						 <th>Price</th>
						 <th>Location</th>
						 <th>Featured Image</th>
						 
					  <th>Status </th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      
<?php
$a=1;
foreach($products as $product){

?>          
                      
                      
                      
                      <tr>
                        <td><?php echo $a;?></td>
                        <td><?php 
						


						echo $this->Fun->getNewFieldValue("main_category","name","id",$product->cat_id)?></td>
                        
                        <td><?php echo $product->name;?></td>
						<td><?php echo $product->bedrooms;?></td>
						<td><?php echo $product->bathrooms;?></td>
						<td><?php echo $product->price;?></td>
						<td><?php echo $product->location;?></td>
                       <td><img src="<?php echo base_url('uploads/projects/featured_image/'.$product->featured_image);?>" width="128" height="58" class="img-responsive"></td>
                        
                        <td>
                        
                        
                       
<a style="color:#FFF" class="btn btn-<?php if($product->status=='1') { echo 'success';} else { echo 'danger';} ?> " onclick="status('<?php echo $product->id;?>','<?php echo $product->status;?>');"   ><?php if($product->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a>
                       
                       
                       
                       
                       
                         </td>
                          
                          
                     <th> 
					 
	 				 
                        
    <a href="<?php echo base_url('admin/product/project_edit').'/'.$product->id;?>" title="Edite Details"><span class="btn btn-warning waves-effect waves-light"><i class="ion-edit"></i></span></a> 
                    
                        <a  onclick="deleterecord('<?php echo $product->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        
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
      <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title mt-0">Product Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="btn btn-warning waves-effect waves-light" style="background-color:#000;"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
              <table width="100%" border="0" class="table" align="center">
  <tr>
    <td width="5%">1</td>
    <td nowrap width="25%">Category name</td>
    <td width="70%">Living</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Sub Category</td>
    <td>Sofa</td>
  </tr>
  <tr>
    <td>3</td>
    <td >Second Level Sub Category Selection</td>
    <td>Table</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Product Name</td>
    <td>Chair</td>
  </tr>
  
  <tr>
    <td>5</td>
    <td>Trending</td>
    <td>Featured</td>
  </tr>
  
  <tr>
    <td>6</td>
    <td>Featured Image</td>
    <td><img src="assets/images/logo.png"></td>
  </tr>
  
  <tr>
    <td>7</td>
    <td>Multiple Images</td>
    <td><img src="assets/images/logo.png" width="128" height="58"> <img src="assets/images/logo.png" width="128" height="58"> <img src="assets/images/logo.png" width="128" height="58"></td>
  </tr>
  
   <tr>
    <td>8</td>
    <td>Price</td>
    <td>5000</td>
  </tr>
  
  <tr>
    <td>9</td>
    <td>Product Details</td>
    <td>Your sofa is the centre of attention in your</td>
  </tr>
  
  
  <tr>
    <td>10</td>
    <td>Discount</td>
    <td>20%</td>
  </tr>
  
  
  
  <tr>
    <td>11</td>
    <td>Features</td>
    <td>Your sofa is the centre of attention in your</td>
  </tr>
  
  
  
  <tr>
    <td>12</td>
    <td>Description</td>
    <td>Your sofa is the centre of attention in your</td>
  </tr>
  
  
  <tr>
    <td>13</td>
    <td>Care Instructions</td>
    <td>Your sofa is the centre of attention in your</td>
  </tr>
  
  
  <tr>
    <td>14</td>
    <td>Warranty</td>
    <td>1 year</td>
  </tr>
  
  
  <tr>
    <td>15</td>
    <td>Returns</td>
    <td>Your sofa is the centre of attention in your</td>
  </tr>
  
  <tr>
    <td>16</td>
    <td>Quality Promise</td>
    <td>Your sofa is the centre of attention in your</td>
  </tr>
  
  
</table>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
      
      
      
      
  <script>
function deleterecord(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this  Project Details..",
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
var text1="you want to Deactivate this Project Details";
var confirm1="Yes, Deactivate!";
}
else
{
var text1="you want to Active this Project Details";
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
          
      
      
      
      
      