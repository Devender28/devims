
      <!-- Top Bar End -->
      <div class="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="float-right page-breadcrumb">
              
                <ol class="breadcrumb">
                   <li class="breadcrumb-item "><a href="<?php echo base_url();?>admin/support/details">View Queries</a></li>
               
                </ol>
              
               </div>
              <h5 class="page-title">Reply Message</h5>
            </div>
          </div>
          <!-- end row -->
        
        
      <?php echo $msg;?>  
        
          <div class="row">
            <!-- end col -->
            <div class="col-lg-12">
              <div class="card m-b-30">
                <div class="card-body">
                  <div class="col-lg-8 col-md-offset-4">
                    <form action="<?php echo base_url();?>admin/<?php echo $this->uri->segment(2);?>/<?php echo $this->uri->segment(3);?>/<?php echo $this->uri->segment(4);?>" method="post" enctype="multipart/form-data">
                      
                      	
                      
                      <div class="form-group">
                        <label>User Id</label>
                        <div>
                          <input type="text" class="form-control" name="user_id" placeholder="user_id"  value="<?php echo $query->user_id;?>" readonly>
                        </div>
                      </div>
                      
					  
					 <div class="form-group">
                        <label>Order id</label>
                        <div>
                          <input type="text" class="form-control" name="order_id" placeholder="order_id"  value="<?php echo $query->order_id;?>" readonly>
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label>Property Name</label>
                        <div>
                          <input type="text" class="form-control" name="product_id" placeholder="product_id"  value="<?php echo $this->fun->getnewfieldvalue('product','name','id',$query->product_id);?>" readonly>
                        </div>
                      </div>
                       
					  
                      <div class="form-group">
                        <label>Msg</label>
                        <div>
                           <textarea required class="form-control" rows="5" placeholder="test" name="msg" readonly><?php echo $query->msg;?></textarea>
                        </div>
                      </div>
					  
					  
					  
					  
					   <div class="form-group">
                        <label>Reply Msg</label>
                        <div>
                           <textarea required class="form-control" rows="5"  name="reply_msg" value="<?php echo $query->reply_msg;?>" ><?php echo $query->reply_msg;?></textarea>
                        </div>
                      </div>
					  
					  
					  
					  
					  
                    
                      
                      
                      <div class="form-group m-b-0">
                        <div>
                          <input class="btn btn-primary waves-effect" type="submit" value="Reply Message"  name="reply_message">
                        </div>
                      </div>
                    </form>
                  </div>
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
     