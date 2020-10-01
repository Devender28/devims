<option value="">Please Select Sub Category </option>
<?php     
foreach($sub_categories as $sub){
?>		  
<option value="<?php echo $sub->id;?>"><?php echo $sub->name;?></option>
<?php }?> 