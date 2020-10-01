

<!-- Shop Checkouts Content -->

<section class="shop-checkouts bgc-f7">

    <div class="container">

        <div class="row">

            <div class="col-xl-6">

                <div class="breadcrumb_content style2">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active text-thm" aria-current="page">Cart</li>

                    </ol>

                    <h4 class="breadcrumb_title">Cart</h4>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-xl-12">

                <div class="cart_page_form ims-cart">

                    

                        <table class="table table-responsive">

                            <thead>

                                <tr class="carttable_row">

                                    <th class="cartm_title">Product</th>

                                    <th class="cartm_title">Price</th>

                                    <th class="cartm_title">Total</th>

                                    <th class="cartm_title"></th>

                                </tr>

                            </thead>

                            <tbody class="table_body">
                                <?php if($this->productmodel->cartCount() == 0) { ?>
                                    <tr>
                                        <th colspan="4" class="text-thm text-center">Cart is Empty</th>
                                    </tr>
                                <?php } ?>
 <?php 

				 $total=0;

				 $cart_details=$this->productmodel->cartDetails();

				 foreach($cart_details as $cd)

				 {

				 $pd=$this->db->get_where('product',array("id"=>$cd->product_id))->row();

				 $q_price=($pd->price)*($cd->quantity);

				 $total+=$q_price;

				 ?>

 <form action="" method="post" >
  <input  type="hidden" name="product_id" value="<?php echo $cd->id;?>">

							  <tr>

                                    <th scope="row">

                                        <ul class="cart_list">

                                            <li class="list-inline-item pr20"><a href="#"><img

                                                        src="<?php echo base_url();?>uploads/projects/featured_image/<?php echo $pd->featured_image;?>" alt="cart1.png" width="200px"></a></li>

                                            <li class="list-inline-item"><a class="cart_title" href="#"><?php echo $pd->name;?></a></li>

                                        </ul>

                                    </th>

                                    <td class="text-thm">₹<?php echo $pd->price;?></td>

                                    <td class="cart_total text-thm">₹<?php echo $pd->price;?></td>

                                    <td>

									<button type="submit" class="btn btn-default1" name="delete_cart">

                                    <span class=""><i class="fa fa-trash" aria-hidden="true"></i></span>

                                   </button>			

									</td>

                                </tr>
		</form>		
				  <?php

				  }

				  ?>	
                            </tbody>

                        </table>

                    </form>

	  <!--			   <div class="checkout_form mt30">

                        <div class="checkout_coupon ui_kit_button">

                            <form class="form-inline">

                                <input class="form-control coupon_input" type="search" placeholder="Coupon Code"

                                    aria-label="Search">

                                <button type="button" class="btn btn2">Apply Coupon</button>

                                <button type="button" class="btn btn3">Update Cart</button>

                            </form>

                        </div>

                    </div>
		--->			
                </div>

            </div>

            <div class="col-lg-5 offset-lg-7">

                <div class="order_sidebar_widget style2 mb30">

                    <h4 class="title">Cart Total</h4>

                    <ul>

			<!--			

						<li class="subtitle">

                            <p>Subtotal <span class="float-right">₹13,000</span></p>

                        </li>
			--->			

						

                        <li class="subtitle">

                            <p>Total <span class="float-right totals color-orose">₹<?php echo number_format($total,1);?></span></p>

                        </li>

                    </ul>

                    <div class="ui_kit_button payment_widget_btn">
<?php if($this->session->userdata('id')) { ?>					
 <button type="button" class="btn dbxshad btn-lg btn-thm btn-block"><a

              href="<?php echo base_url();?>user/my_cart"  >Proceed to checkout</a></button>
	<?php } else { ?>

		<button type="button" class="btn dbxshad btn-lg btn-thm btn-block"><a

                                  data-toggle="modal"

                            data-target=".bd-example-modal-lg" >Proceed to checkout</a></button>		

	<?php } ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section