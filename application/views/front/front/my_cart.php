            <div class="col-sm-12 col-lg-8 col-xl-10">
                <div class="row">
                    <div class="col-sm-12 mb10">
                        <div class="breadcrumb_content style2">
                            <span class="FilterButton">Menu</span>
                            <h2 class="breadcrumb_title">My Cart</h2>
                            <p>We are glad to see you again!</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="my_dashboard_review mb40">
                            <div class="property_table">
                                <div class="table-responsive mt0">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Property Title</th>
                                                <th scope="col">Date Added</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(count($cart) == 0) { ?>
                                            <tr>
                                                <th colspan="4" class="text-thm text-center">Cart is Empty</th>
                                            </tr>
                                        <?php } ?>
                                        <?php foreach ($cart as $item) { 
                                            $prod = $this->db->get_where('product',array('id' => $item->product_id))->row();
                                            ?>
                                            <tr>
                                                <th scope="row">
                                                    <div class="feat_property list favorite_page style2">
                                                        <div class="thumb">
                                                            <img class="img-whp" src="<?php echo base_url('uploads/projects/featured_image/'.$prod->featured_image);?>" alt="fp1.jpg">
                                                        </div>
                                                        <div class="details">
                                                            <div class="tc_content">
                                                                <a href="<?php echo base_url('product_view/'.$prod->slug.'/'.$prod->id);?>"><h4><?php echo $prod->name;?></h4></a>
                                                                <p><span class="flaticon-placeholder"></span> <?php echo $prod->location;?></p>
                                                                <a class="fp_price text-thm" href="javascript: void()">₹ <?php echo $prod->price;?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td><?php echo $item->crdate;?></td>
                                                <td>
                                                <?php echo $item->quantity;?>
                                                </td>
                                                <td>
                                                    <ul class="view_edit_delete_list mb0">
                                                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top"
                                                            title="delete"><a
                                            onclick="deleterecord('<?php echo $item->id;?>');"  href="javascript: void()"><span class="flaticon-garbage"></span></a></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                            <?php } ?>                                            
                                        </tbody>
                                    </table>
                                </div>                                
                                <!--<div class="mbp_pagination">
                                            <ul class="page_navigation">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript: void()" tabindex="-1" aria-disabled="true"> <span
                                                            class="flaticon-left-arrow"></span> Prev</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript: void()">1</a></li>
                                                <li class="page-item active" aria-current="page">
                                                    <a class="page-link" href="javascript: void()">2 <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript: void()">3</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript: void()">...</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript: void()">29</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript: void()"><span class="flaticon-right-arrow"></span></a>
                                                </li>
                                            </ul>
                                        </div>--->	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<input type="hidden" value="<?php echo $Table;?>" id="tb" />
<script type="text/javascript">
    function deleterecord(id) {
		  var tb = document.getElementById("tb").value;
        $.ajax({
                url: <?php echo '"'.base_url('delete').'"';?>,
                type: "POST",
                data: {x: id , bdr: tb},
                dataType: "html",
                success: function (data) {
                 document.location.href = ""				   
                }
            });
    }
</script>