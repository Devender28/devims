<option value="">Please Select Product </option>
<?php     
foreach($products as $product){
?>		  
<option value="<?php echo $product->id;?>"><?php echo $product->name;?></option>
<?php }?> 