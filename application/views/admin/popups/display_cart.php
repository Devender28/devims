


<div class="block-content">

      <div class="block-content block-content-full text-center">
          <a href="#" class="btn btn-sm btn-primary"><i class="si si-basket fa-1x"></i>&nbsp;Cart Details</a>
        </div>


          <table class="table table-borderless table-striped table-vcenter" width="100%">
            
            
            <thead>
              <tr>
               <th class="text-center" width="5%">Sl.No</th>
                <th class="text-center" width="10%">Category</th>
                <th class="text-center" width="20%">Product</th>
                <th class="text-center" width="10%">Mrp</th>
                <!--<th class="text-center" width="10%">Serial No.</th>-->
                <th class="text-center" width="7%">Tax</th>
                <th class="text-center" width="10%">Cv</th>
                <th class="text-center" width="10%">Slab</th>
                <th class="text-center" width="10%">Quantity</th>
                <th class="text-center" width="12%">Total Ammount</th>
                
                <th class="text-center" width="6%">Action</th>
              </tr>
            </thead>
            
            
            
            
            
            
            
            <tbody>
             <?php
			      $id=0;
				   $i=1;
                   foreach($dummy as $ds)
                   { 
				?>   
				   
				   
				   
                <tr <?php if($i%2) {echo 'class="danger"';} else echo 'class="info"';?>>
                <td class="text-center" width="5%"><input class="form-control" type="text" value="<?php echo $i;?>"  name="i"      readonly="readonly"></td>
                <td class="text-center" width="15%"><input class="form-control" type="text" value="<?php echo $this->fun->getfieldvalue('category','name',$ds->category);?>" name="category_name" readonly="readonly">
                 
                 <input class="form-control"  name="product_id" type="hidden" value="<?php echo $ds->product;?>">
                 <input class="form-control"  name="category" type="hidden" value="<?php echo $ds->category;?>">
                 <input class="form-control"  name="registration_id" type="hidden" value="<?php echo $ds->registration_id;?>">
                </td>
               
               
                <td class="text-center" width="10%"><input class="form-control" type="text" value="<?php echo $this->fun->getproductname('product','name',$ds->product);?>" name="product_name"  readonly="readonly"></td>
                <td class="text-center" width="10%"><input class="form-control" type="text" value="<?php echo $ds->mrp;?>"  name="mrp"      readonly="readonly"></td>
                <td class="text-center" width="10%"><input class="form-control" type="text" value="<?php echo $ds->tax;?>"  name="tax"      readonly="readonly"></td>
                <td class="text-center" width="10%"><input class="form-control" type="text" value="<?php echo $ds->cv;?>"   name="cv"       readonly="readonly"></td>
                <td class="text-center" width="10%"><input class="form-control" type="text" value="<?php echo $ds->slab;?>"   name="cv"       readonly="readonly"></td>
                
                <td class="text-center" width="7%"><input class="form-control" type="text" value="<?php echo $ds->quantity;?>"  name="quantity" readonly="readonly"></td>
                <td class="text-center" width="10%"><input class="form-control" type="text" value="<?php echo $ds->final_product_cost;?>" name="final_product_cost" readonly="readonly"></td>
                
                
                
                
                <td class="text-center" width="10%"> <button id="submit_person<?php echo $ds->id;?>" class="btn btn-sm btn-primary" type="button" ><i class="fa fa-times"></i></button> </td>  
              
              </tr></td>
                
              
         
<script>
$("#submit_person<?php echo $ds->id;?>").click(function(e){
    e.preventDefault();
   
            $.ajax({
                type: "POST",
                url: <?php echo '"'.base_url('delete_dummysales').'"';?>,
               data: {id:<?php echo $ds->id;?>,mobile:<?php echo $ds->registration_id;?>},
                success:function(e) {
					
                     $("#ajdata").html(e);
                }
            });
        
});
</script>       
         
         
         
          <?php
		  $i++;
		   }
		  ?>
              
              
              
             <tr>
                <td colspan="5" class="text-right"><strong>Grand Total :</strong></td>
                <td class="text-right"><strong>Rs. </strong></td>
                <td class="text-center"><input class="form-control" type="text" id="total" name="total" value="<?php echo $tsum->tot;?>" readonly></td>
              </tr>          
              
              
              <tr>
                <td colspan="5" class="text-right"><strong>Wallet Amount :</strong></td>
                <td class="text-right"><strong>Rs. </strong></td>
                <td class="text-center"><input class="form-control" type="text" id="wallet_amount" name="wallet_amount_text" ></td>
              </tr>
              
              
              </tbody>
          </table>
          <div class="block-content block-content-full text-center">
          <input type="submit" name="final_sale" value="Payment" class="btn btn-sm btn-danger">
           
          </div>
      
      </div> 
      
      
      
      


     
     