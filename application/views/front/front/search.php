<section class="our-listing bgc-f7 pb30-991">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="dn db-991">

                    <div id="main2">

                        <span id="open2" class="flaticon-filter-results-button filter_open_btn style3 OpenSideMenu"> Show Filter</span>

                    </div>

                </div>

                <div class="breadcrumb_content style2 mt30-767 mb30-767">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active text-thm" aria-current="page">Search Result</li>

                    </ol>

                    <h2 class="breadcrumb_title">List of Property
                        <span class="MSearchIcon">Modify Search <span class="fa fa-search"></span></span>
                    </h2>

                </div>

            </div>

        </div>
	   
<?php $this->load->view(FRONT_INCLUDES.'modify_search'); ?>	   
	   
<div class="row">
	   
<?php $this->load->view(FRONT_INCLUDES.'search_left_sidebar'); ?>
			

<div class="col-md-12 col-lg-9">

<div class="row">

        
		
<?php
//echo $this->session->userdata('cat_id');
// echo $this->session->userdata('bedrooms');
 //echo $this->session->userdata('bathrooms');
 //echo $this->session->userdata('search_button');

?>	
		
<?php	
  
if($this->session->userdata('search_button')!="")
	  {
if($this->session->userdata('cat_id')==""){$cat_id="cat_id !="; }else
    { $cat_id="cat_id"; }	
    
 if($this->session->userdata('design_cat')==""){$design_cat="design_cat !="; }else
    { $design_cat="design_cat"; }	   
			  
if($this->session->userdata('bedrooms')==""){$bedrooms="bedrooms !="; }else
    { $bedrooms="bedrooms"; }	
	
if($this->session->userdata('bathrooms')==""){$bathrooms="bathrooms !="; }else
    { $bathrooms="bathrooms"; }	
		  

		  
if($this->session->userdata('style')==""){$style="style !="; }else
    { $style="style"; }


		  		  
if($this->session->userdata('facing')==""){$facing="facing !="; }else
    { $facing="facing"; }	
		  		  
			  
	$products= $this->db->
	get_where('product',array(
	
	"$cat_id"=>$this->session->userdata('cat_id'),
	"$design_cat"=>$this->session->userdata('design_cat'),
		"$bedrooms"=>$this->session->userdata('bedrooms'),
	"$bathrooms"=>$this->session->userdata('bathrooms'),
	
//	"$total_sq_feet"=>$this->session->userdata('total_sq_feet'),
	"$style"=>$this->session->userdata('style'),
	"$facing"=>$this->session->userdata('facing')
	

	
	
	))
	->result();
	  } 
	 
	 ?>

<?php
	  
	   foreach($products as $product)
	   {
       ?>
		
		
		<div class="col-md-4 col-lg-4">
		
		<form action="" method="post" id="idForm<?php echo $product->id;?>"> 
        <input  type="hidden" name="product_id" value="<?php echo $product->id;?>">		
 
		
		

            <div class="feat_property home7 style4">

                <div class="thumb">

                    <a href="product-view.php">

                        <img class="img-whp" src="<?php echo base_url();?>uploads/projects/featured_image/<?php echo $product->featured_image;?>" alt="fp1.jpg">

                    </a>

                    <div class="thmb_cntnt">

                        <ul class="tag mb0">
						
						
						<?php
						if($product->offer_premium=="Offer")
						{
						?>

                            <li class="list-inline-item"><a href="#">Offer</a></li>
							
						<?php } else { ?>
 						
							
							

                             <li class="list-inline-item"><a href="#">Premium</a></li>

						<?php }?>


					   </ul>

                        <ul class="icon mb0">

                            <li class="list-inline-item">
							
							
							<a   onclick="comparerecord('<?php echo $product->id;?>');"  data-toggle="tooltip" title="Compare">

                                    <span class="flaticon-transfer-1"></span>
									
									</a>
									
						

                            </li>

                            <li class="list-inline-item"><a href="#" onclick="wishlist('<?php echo $product->id;?>');" data-toggle="tooltip" title="Wish list"><span

                                        class="flaticon-heart"></span></a></li>
										
										
										
				
										
										
										
										

                        </ul>

                    </div>

                </div>

                <div class="details">

                    <div class="tc_content">

                        <p class="text-thm"><?php echo $this->fun->getnewfieldvalue('main_category','name','id',$product->cat_id);?></p>

                        <h4><a href="<?php echo base_url();?>product_view/<?php echo $product->slug;?>/<?php echo $product->id;?>"><?php echo $product->name;?></a></h4>

                        <p><span class="flaticon-placeholder"></span><?php echo $product->location;?></p>

                        <ul class="prop_details1 mb0">

                            <li class="list-inline-item"><a class="text-thm3" href="#"><i class="fa fa-bed"

                                        aria-hidden="true"></i> <?php echo $product->bedrooms;?></a></li>

                            <li class="list-inline-item"><a class="text-thm3" href="#"><i class="fa fa-bath"

                                        aria-hidden="true"></i> <?php echo $product->bathrooms;?></a></li>

                            <li class="list-inline-item"><a class="text-thm3" href="#"><i class="fa fa-arrows-alt"

                                        aria-hidden="true"></i> <?php echo $product->open_space;?></a></li>

                        </ul>

                    </div>

                    <div class="fp_footer detail1">

                        <ul class="fp_meta float-left mb0">

                            <li class="list-inline-item"><a class="fp_price" href="#">₹<?php echo $product->price;?></a>

                            </li>

                        </ul>

                        <div class="fp_pdate float-right">

                            <ul class="fp_meta float-left mb0">

                                <li class="list-inline-item"><a href="<?php echo base_url();?>product_view/<?php echo $product->slug;?>/<?php echo $product->id;?>" data-toggle="tooltip"

                                        title="View"><span class=""><i class="fa fa-eye" aria-hidden="true"></i>

                                        </span></a></li>

                                <li class="list-inline-item">
	<button type="submit" class="btn fpfBtn" name="add_cart">
<span class=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
</button>			
										
</li>

                                <li class="list-inline-item"><button type="submit" class="btn fpfBtn" name="buy_now"> <span class=""></span>BUY</button>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>
			
	</form>		
			
			

        </div>
		
		  

        
 <?php
}

?>
    </div>

</div>
</div>

</div>

</section>

<script type="text/javascript">
    function comparerecord(id) {		
		//alert(id);      
        $.ajax({
                url: <?php echo '"'.base_url('addcompare').'"';?>,
                type: "POST",
                data: {x: id },
                dataType: "html",
                success: function (data) {
                 //alert(data);
                 $('#idForm input[type="text"]').val('');
				 $('#content').val('');
				 document.getElementById("display_compare").innerHTML=data; 				   
                }
            });			
    }
</script>

<script type="text/javascript">
    function wishlist(id) {		
		//alert(id);      
        $.ajax({
                url: <?php echo '"'.base_url('addwishlist').'"';?>,
                type: "POST",
                data: {x: id },
                dataType: "html",
                success: function (data) {
                 //alert(data);
                 $('#idForm input[type="text"]').val('');
				 $('#content').val('');
				 document.getElementById("display_wishlist").innerHTML=data; 				   
                }
            });			
    }
</script>

<script>
    $(document).ready(function() {
        if ($('span.MSearchIcon').length > 0) {
            $('span.MSearchIcon').on('click', function() {
                if($('div#ModifySearchDiv').hasClass('active')) {
                    $('div#ModifySearchDiv').slideUp();
                    $('div#ModifySearchDiv').removeClass('active');
                } else {
                    $('div#ModifySearchDiv').slideDown();
                    $('div#ModifySearchDiv').addClass('active');
                }
            });
            $('span.OpenSideMenu').on('click', function() {
                $('body').addClass("body_overlay");
                $('div.sidebar_listing_grid1.MobSlide').css('left', '0');
            });
            $('div.sidebar_listing_grid1.MobSlide span.flaticon-close').on('click', function() {
                $('div.sidebar_listing_grid1.MobSlide').css('left', '-300px');
                $("body").removeClass("body_overlay");
            });
        }
        if ($('input[type=radio][name=mcategory]').length > 0) {
            $('input[type=radio][name=mcategory]').on('change', function() {
                if($(this).val()=='mresidential') {
                    $('div#CommercialDiv').css('display', 'none');
                    $('div#ResidentialDiv').css('display', 'block');
                } else {
                    $('div#ResidentialDiv').css('display', 'none');
                    $('div#CommercialDiv').css('display', 'block');
                }
            });
        }
    });
</script>