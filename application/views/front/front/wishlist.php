            <div class="col-sm-12 col-lg-8 col-xl-10">
                <div class="row">
                    <div class="col-sm-12 mb10">
                        <div class="breadcrumb_content style2">
                            <div class="breadcrumb_content style2">
                            <span class="FilterButton">Menu</span>
                                <h2 class="breadcrumb_title">My Favorites</h2>
                                <p>We are glad to see you again!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="my_dashboard_review mb40">
                                <?php if(count($wishlist) < 1) { ?>
                                    <h4 colspan="4" class="text-thm text-center mb30">Wishlist is Empty</h4>
                                <?php } ?>
                            <div class="favorite_item_list">
                            <?php foreach ($wishlist as $item) {
                                            $prod = $this->db->get_where('product',array('id' => $item->product_id))->row();
                                            ?>
                                <div class="feat_property list favorite_page">
                                    <div class="thumb">
                                        <img class="img-whp" src="<?php echo base_url('uploads/projects/featured_image/'.$prod->featured_image);?>" alt="fp1.jpg">
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <a href="<?php echo base_url('product_view/'.$prod->slug.'/'.$prod->id);?>"><h4><?php echo $prod->name;?></h4></a>
                                            <p><span class="flaticon-placeholder"></span> <?php echo $prod->location;?></p>
                                            <a class="fp_price text-thm" href="product-view.php">₹ <?php echo $prod->price;?></a>
                                        </div>
                                    </div>
                                    <ul class="view_edit_delete_list mb0 mt35">
                                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a onclick="deleterecord('<?php echo $item->id;?>');"  href="javascript: void()"><span class="flaticon-garbage"></span></a></li>
                                    </ul>
                                </div>
                            <?php } ?>                                
                            <!--<div class="mbp_pagination">
                                    <ul class="page_navigation">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript: void()" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
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