<option value="">Please Select Category </option>
<?php     
foreach($categories as $cat){
?>		  
<option value="<?php echo $cat->id;?>"><?php echo $cat->name;?></option>
<?php }?> 