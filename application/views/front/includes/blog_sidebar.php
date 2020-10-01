<div class="col-lg-4">
    <div class="terms_condition_widget imscategory">
        <h4 class="title">Categories</h4>
        <div class="widget_list">
            <ul class="list_details">

			<?php 
                
                foreach($categories as $cat) {

            ?>

                <li><a href="<?php echo base_url('blog/category/'.$cat->slug);?>"><i class="fa fa-square mr10 new"></i><?php echo $cat->name;?> <span class="float-right"><?php echo $this->blogmodel->get_postcount($cat->id);?>
                        </span></a></li>
				<?php } ?>
						
              
            </ul>
        </div>
    </div>
    <div class="blog_tag_widget">
        <h4 class="title">Tags</h4>
        <ul class="tag_list">
            <li class="list-inline-item"><a href="#">Apartment</a></li>
            <li class="list-inline-item"><a href="#">Real Estate</a></li>
            <li class="list-inline-item"><a href="#">Estate</a></li>
            <li class="list-inline-item"><a href="#">Luxury</a></li>
            <li class="list-inline-item"><a href="#">Real</a></li>
        </ul>
    </div>
</div>
</div>
</div>
</section>
