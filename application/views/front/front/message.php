            <div class="col-sm-12 col-lg-8 col-xl-10">
                <div class="row">
                    <div class="col-lg-12 mb10">
                        <div class="breadcrumb_content style2">
                            <span class="FilterButton">Menu</span>
                            <h2 class="breadcrumb_title">Message</h2>
                            <p>We are glad to see you again!</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="message_container">
                            <div class="QueriesList">
                                <h4 class="text-center">Queries / Responses</h4>
                                <div class="ui_kit_table mt20 table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" width="10%">Id</th>
                                                <th scope="col" width="75%">Query</th>
                                                <th scope="col" width="15%">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            foreach($user_queries as $uq) {

                                            ?>
                                        <?php
                                        if($uq->status=="0")
                                        {
                                        ?>
                                            <tr>
                                                <td><?php echo $uq->order_id;?><br /><span class="RDate"><?php echo @date('d/m/y',strtotime($uq->crdate));?></span></td>
                                                <td>
                                                    <div class="QueryText"><?php echo $uq->msg;?></div>
                                                </td>
                                                <td><span class="Status Open">Open</span></td>
                                            </tr>
                                        <?php
                                        }
                                        else
                                        {
                                        ?> 
                                            <tr>
                                                <td><?php echo $uq->order_id;?><br /><span class="RDate"><?php echo @date('d/m/y',strtotime($uq->crdate));?></span></td>
                                                <td>
                                                    <div class="QueryText"><?php echo $uq->msg;?></div>
                                                    <div class="QueryResponse mt10"><u>Response:</u> <span class="RDate"><?php echo @date('d/m/y h:i:sa',strtotime($uq->crdate));?></span><br /><?php echo $uq->reply_msg;?></div>
                                                </td>
                                                <td class="ClosedTD">
                                                    <span class="Response fa fa-plus"></span>
                                                    <span class="Status Closed">Closed</span>
                                                </td>
                                            </tr>
                        
                                        <?php 
                                        }
                                        ?>					  
                                        
                                        <?php
                                        }
                                        ?>	
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--<div class="mt20">
                                    <div class="mbp_pagination">
                                        <ul class="page_navigation">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                                        class="flaticon-left-arrow"></span> Prev</a>
                                            </li>
                                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>--->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="message_container">
                            <h4 class="text-center">Request / Enquiry Form </h4>                                
                            <?php echo $msg;?>           
                            <form  method="post"  action="" />
                                <div class="mt20">
                                    <ul class="sasw_list">
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick" name="product_id" required>
                                                        <option value="">Select Property</option>
                                                        <?php 
                                                        foreach($orders as $ord) {
                                                        ?>                                                            
                                                        <option value="<?php echo $ord->order_id;?>,<?php echo $ord->product_id;?>"> <?php echo $this->fun->getnewfieldvalue('product','name','id',$ord->product_id);?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick" name="issue" required>
                                                        <option value="">Select Issue</option>
                                                        <option value="Need more Information">Need more Information</option>
                                                        <option value="Images missed">Images missed</option>
                                                        <option value="Links not working">Links not working</option>
                                                        <option value="Donloading problem">Donloading problem</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <textarea class="form-control" name="msg" placeholder="Message" required></textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_button">
                                                <button type="submit" class="btn btn-block btn-thm" name="request_form">Submit</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('span.Response').on('click', function() {
            if ($(this).hasClass('Response fa fa-plus')) {
                $(this).parent().siblings().children('div.QueryResponse').slideDown();
                $(this).removeClass('fa-plus').addClass('fa-minus');
            } else {
                $(this).parent().siblings().children('div.QueryResponse').slideUp();
                $(this).removeClass('fa-minus').addClass('fa-plus');
            }
        });
    });
</script>