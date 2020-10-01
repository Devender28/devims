 
  <form class="form-horizontal push-5-t" method="post" enctype="multipart/form-data"  id="reg-form"> 
 
 <div class="form-group">
     <label class="col-xs-12" for="login1-username">Order Status:</label>
          <div class="col-xs-12">
              <label class="css-input css-radio css-radio-danger push-10-r">
                                                <input type="radio" name="status" value="notdelivered" checked=""><span></span> Not Delivered
                                            </label>
                                            
                                            
              <label class="css-input css-radio css-radio-success">
                                                <input type="radio" name="status" value="delivered"><span></span>Delivered
                                            </label>                              
              <input type="hidden" value="<?php echo $id;?>"  name="id" />                              
               
          </div>
</div>
                           
                           
                     
                     
<div class="form-group">
               <div class="col-xs-12">
                  <button class="btn btn-sm btn-success" type="submit" name="submit_status" ><i class="fa fa-arrow-right push-5-r"></i> Update</button>
              </div>
</div>

 </form>