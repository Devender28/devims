
<!-- Blog Single Post -->
<section class="blog_post_container bgc-f7 pb30">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content style2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="breadcrumb-item active text-thm" aria-current="page">blog</li>
                    </ol>
                    <h2 class="breadcrumb_title">Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="main_blog_post_content">
                    <div class="mbp_thumb_post">
                        <div class="blog_sp_tag"><a href="#">Construction</a></div>
                        <h3 class="blog_sp_title"><?php echo $post->title;?></h3>
                        <ul class="blog_sp_post_meta">
                            <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png"
                                        alt="pposter1.png"></a></li>
                            <li class="list-inline-item"><a href="#">Kiran Kumar</a></li>
                            <li class="list-inline-item"><span class="flaticon-calendar"></span></li>
                            <li class="list-inline-item"><a href="#"><?php echo @date('F d, Y',strtotime($post->crdate));?></a></li>
                            <li class="list-inline-item"><span class="flaticon-chat"></span></li>
                            <li class="list-inline-item"><a href="#">
							<?php 
							$count = $this->blogmodel->comment_count($post->id);
							echo $count;
							
							?>
							</a></li>
                        </ul>

                        <div class="thumb blog-slider">

						<?php 

							if($post->type == 'image')
								{

						?>	

                            <img class="img-fluid" src="<?php echo base_url('uploads/blog/post/'.$post->image);?>" alt="bs1.jpg">

								<?php }

							if($post->type == 'video')
								{

						?>	

							<iframe width="100%" height="400" src="<?php echo $post->video;?>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

							<?php }

							if($post->type == 'gallery')
								{
									$imgs = $this->db->get_where('postgallery',array('maxid'=>$post->maxid))->result();

									

						?>	

								<div class="fp_single_item_slider">
								<?php 							

									foreach($imgs as $img) {

									?>	

                                <div class="item">
                                    <img class="img-whp" src="<?php echo base_url('uploads/blog/post/'.$img->image);?>" alt="fp1.jpg">
                                </div>

								<?php } ?>

								</div>

								<?php } ?>	
                        </div>

                        <div class="details">
                            <p class="mb30"><?php echo $post->description;?></p>
                        </div>
                        <ul class="blog_post_share">
                            <li>
                                <p>Share</p>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>


					<?php 							

								$nxt=$this->blogmodel->get_nextpost($post->id);
								$pre=$this->blogmodel->get_prepost($post->id);

									?>	
                    <div class="mbp_pagination_tab">
                        <div class="row">

						<?php if($pre) { ?>

                            <div class="col-sm-6 col-lg-6">
                                <div class="pag_prev">
                                    <a href="<?php echo base_url('blog/'.$pre->slug);?>"><span class="flaticon-back"></span></a>
                                    <div class="detls">
                                        <h5>Previous Post</h5>
                                        <p> <?php echo $pre->title;?></p>
                                    </div>
                                </div>
                            </div>

                        <?php } else { ?> <div class="col-sm-6 col-lg-6"></div> <?php } if($nxt) { ?>

                            <div class="col-sm-6 col-lg-6">
                                <div class="pag_next text-right">
                                    <a href="<?php echo base_url('blog/'.$nxt->slug);?>"><span class="flaticon-next"></span></a>
                                    <div class="detls">
                                        <h5>Next Post</h5>
                                        <p><?php echo $nxt->title;?></p>
                                    </div>
                                </div>
                            </div>

							<?php } ?>

                        </div>
                    </div>

					<?php 
                     
                    
                     $cmts = $this->blogmodel->get_comments($post->id);
         
                ?>
				
                    <div class="product_single_content mb30">
                        <div class="mbp_pagination_comments">
                            <div class="total_review">
                                <h4 class="mb20"><?php echo $count;?> Reviews</h4>
                                <!-- <ul class="review_star_list mb0 pl10">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                <a class="tr_outoff pl10" href="#">( 4.5 out of 5 )</a> -->
                                <!-- <a class="write_review float-right fn-xsd" href="#">Write a Review</a> -->
                            </div>

							<?php 
                
								foreach($cmts as $cmt) {

							?>

                            <div class="mbp_first media">
                                
                                <div class="media-body">
                                    <h4 class="sub_title mt-0"><?php echo $cmt->name;?>
                                      
                                    </h4>
                                    <a class="sspd_postdate fz14" href="#"><?php echo @date('F d, Y',strtotime($cmt->crdate));?></a>
                                    <p class="fz14 mt10"><?php echo $cmt->comment;?></p>
                                </div>
                            </div>
                            <div class="custom_hr"></div>

							<?php } ?> 
							
                           
                        </div>
                    </div>
                    <div class="bsp_reveiw_wrt">
                        <h4>Write a Review</h4>
                        <?php echo @$msg;?>
                        <form class="comments_form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName1"
                                    aria-describedby="textHelp" name="name" required placeholder="Review Title">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="comment" required id="exampleFormControlTextarea1" rows="6"
                                    placeholder="Your Review"></textarea>
                            </div>
                            <button type="submit" class="btn btn-thm" name="submit_comment">Submit Review</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb20">
                        <h4>Related Posts</h4>
                    </div>

					<?php 
						foreach($recentposts as $post) {
					?>

                    <div class="col-md-6 col-lg-6">
                        <div class="for_blog feat_property">
                            <div class="thumb">
							<?php 

if($post->type == 'image')
	{

?>	

<img class="img-fluid" src="<?php echo base_url('uploads/blog/post/'.$post->image);?>" alt="bs1.jpg">

	<?php }

if($post->type == 'video')
	{

?>	

<iframe width="100%" height="400" src="<?php echo $post->video;?>"
	frameborder="0"
	allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
	allowfullscreen></iframe>

<?php }

if($post->type == 'gallery')
	{
		$imgs = $this->db->get_where('postgallery',array('maxid'=>$post->maxid))->result();

		

?>	

	<div class="fp_single_item_slider">
	<?php 							

		foreach($imgs as $img) {

		?>	

	<div class="item">
		<img class="img-whp" src="<?php echo base_url('uploads/blog/post/'.$img->image);?>" alt="fp1.jpg">
	</div>

	<?php } ?>

	</div>

	<?php } ?>	
                                <div class="tag">Construction</div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <h4><?php echo $post->title;?></h4>
                                    <ul class="bpg_meta">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><?php echo @date('F d, Y',strtotime($post->crdate));?></a></li>
                                    </ul>
                                    <p><?php echo dev_trim($post->description,100);;?></p>
                                </div>
                                <div class="fp_footer Custom">
                                    <a class="fp_pdate float-right text-thm" href="<?php echo base_url('blog/'.$post->slug);?>">Read More <span
                                            class="flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

					<?php } ?>

                   
                </div>
            </div>
            <?php $this->load->view(FRONT_INCLUDES.'blog_sidebar'); ?>
