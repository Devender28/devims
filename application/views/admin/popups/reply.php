 
  <form class="form-horizontal push-5-t" method="post" enctype="multipart/form-data"  id="reg-form"> 
 
 <div class="form-group">
     <label class="col-xs-12" for="login1-username">Message</label>
          <div class="col-xs-12">
               <textarea class="form-control" name="message" rows="7" placeholder="Enter your message.." required></textarea>
               <input type="hidden" value="<?php echo $id;?>"  name="id" />
               
          </div>
</div>
                           
                           
                     
                     
<div class="form-group">
               <div class="col-xs-12">
                  <button class="btn btn-sm btn-success" type="submit" name="reply" onClick="showDetails3(this.value)"><i class="fa fa-arrow-right push-5-r"></i> Submit</button>
              </div>
</div>

 </form>