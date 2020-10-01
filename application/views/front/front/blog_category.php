
<!-- Main Blog Post Content -->
<section class="blog_post_container bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content style2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="breadcrumb-item active text-thm" aria-current="page"><a href="<?php echo base_url('blog');?>">blog</a></li>
						<li class="breadcrumb-item active text-thm" aria-current="page"><?php echo $this->uri->segment(3);?></li>
                    </ol>
                    <h2 class="breadcrumb_title">Blog posts</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

				<?php 

						foreach($posts as $post)
						{

						
						?>

                    <div class="col-lg-4">
                        <div class="for_blog feat_property">

						<?php 

							if($post->type == 'image')
								{

						?>						

                            <div class="thumb">
                                <img class="img-whp" src="<?php echo base_url('uploads/blog/post/'.$post->image);?>" alt="1.jpg">
                                <div class="blog_tag">Construction</div>
                            </div>

								<?php }

							if($post->type == 'video')
								{

						?>

							<div class="thumb">
                                <iframe width="100%" height="225" src="<?php echo $post->video;?>"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <div class="blog_tag">Dev</div>
                            </div>

								<?php }

							if($post->type == 'gallery')
								{

								?>

							<div class="thumb">
                                <div class="fp_single_item_slider">
                                    <div class="item">
                                        <img class="img-whp" src="<?php echo base_url(FRONT_ASSETS);?>images/property/fp1.jpg" alt="fp1.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-whp" src="<?php echo base_url(FRONT_ASSETS);?>images/property/fp2.jpg" alt="fp2.jpg">
                                    </div>
                                </div>
                                <div class="blog_tag">Construction</div>
                            </div>

								<?php 

								}

								?>



                            <div class="details">
                                <div class="tc_content">
                                    <h4><?php echo $post->title;?></h4>
                                    <ul class="bpg_meta">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><?php echo @date('F j, Y',strtotime($post->crdate));?></a></li>
                                    </ul>
                                    <p><?php echo dev_trim($post->description,100);?></p>
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mbp_pagination mt20">
						<ul class="page_navigation">
						<?php echo $links;?>
						</ul>

                           <!-- <ul class="page_navigation">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                            class="flaticon-left-arrow"></span> Prev</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">29</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
