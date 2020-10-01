<!-- Inner Page Breadcrumb -->

<section class="inner_page_breadcrumb">

    <div class="container">

        <div class="row">

            <div class="col-xl-6">

                <div class="breadcrumb_content">

                    <h4 class="breadcrumb_title">Compare</h4>

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Compare</li>

                    </ol>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Our Pricing Table -->

<section class="our-pricing bgc-fa">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 offset-lg-3">

                <div class="main-title text-center">

                    <h2>Compare Listings</h2>

                    <p>We provide full service at every step</p>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">

                <div class="membership_container">

                    <ul class="mc_parent_list">

	<?php

    if($compare_count)

	{

    ?>
						<li class="list-inline-item">

                            <ul class="mc_child_list one">

                                <li>

                                    <div class="membership_header dn"></div>

                                </li>

                                <li>Beds Rooms</li>

                                <li>Bath Rooms</li>

                                <li>Sq ft</li>

                                <li>Status</li>

                                <li>&nbsp;</li>
                            </ul>

                        </li>
      <?php 

				 foreach($compare_details as $cd)

				 {

				 $pd=$this->db->get_where('product',array("id"=>$cd->product_id))->row();

				 ?>  

						<li class="list-inline-item">

                            <ul class="mc_child_list two text-center">

                                <li>

                                    <div class="membership_header">

                                        <div class="thumb">

										<a onclick="deleterecord('<?php echo $cd->id;?>');"><span class="flaticon-close"></span></a>

                                            <img class="img-fluid w90" src="<?php echo base_url();?>uploads/projects/featured_image/<?php echo $pd->featured_image;?>" alt="1.jpg" width="250px">

                                            <div class="price">₹<?php echo $pd->price;?></div>

                                        </div>

                                        <div class="details">

                                            <h4><?php echo $pd->name;?></h4>

                                            <p class="mt10"><?php echo $this->fun->getnewfieldvalue('main_category','name','id',$pd->cat_id);?></p>

                                        </div>

                                    </div>

                                </li>

                                <li><a href="#"><?php echo $pd->bedrooms;?></a></li>

                                <li><a href="#"><?php echo $pd->bathrooms;?></a></li>

                                <li><a href="#"><?php echo $pd->open_space;?></a></li>

                                <li><a class="btn pricing_btn" href="#">Active</a></li>
                                <li>
                                    <button type="submit" class="btn btn-thm" name="add_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button> &nbsp;
                                    <button type="submit" class="btn btn-thm" name="buy_now">BUY</button>
                                </li>
                            </ul>

                        </li>

			<?php

				  }

				  ?>	

<?php

	}

?>		

		              </ul>

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