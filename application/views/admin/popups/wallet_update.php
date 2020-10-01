  <form class="form-horizontal push-5-t" method="post" enctype="multipart/form-data" action="" > 
 
 <div class="form-group">
     <label class="col-xs-12" for="login1-username">Amount to be Transfered</label>
          <div class="col-xs-12">
               <input type="number"  min="0" name="amount" id="txtWeight" onkeyup="this.value = minmax(this.value, 0,<?php echo $this->fun->getnewfieldvalue('wallet','ammount','mobile',$id);?>)"   onpaste="return false"/>
               <input type="hidden" value="<?php echo $id;?>"  name="mobile"  />
               
          </div>
</div>
                           
                           
                     
                     
<div class="form-group">
               <div class="col-xs-12">
                  <input class="btn btn-sm btn-success" value="Submit" type="submit" name="update_wall"/>
              </div>
</div>

 </form>