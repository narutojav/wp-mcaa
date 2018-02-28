<?php get_header(); ?>
<div class="row main">
  <div id="cover-img" style="background-image:url(<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>)">
  	<div class="container">
      <?php
        $current_cat_id = the_category_ID(false);
        echo '<h3>' . get_cat_name($current_cat_id) . '</h3>';
      ?>
  	</div>
  </div>
  <div id="content">
  	<div class="container">
  		<!-- <div class="row">
  			<ul class="active-cont">
  				<li><a href="">Civil Aviation Authority</a></li>
  				<li><a href=""> About CAAS</a></li>
  				<li><a href=""> Events</a></li>
  				<li><a href="">Safety Series Events</a></li>
  			</ul>
  		</div> -->
  		<div class="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php
        	$thumb_id = get_post_thumbnail_id();
        	$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', false);
          $excerpt = strip_tags($post->post_content);
    						if (strlen($excerpt) > 200) {
    						$excerpt = substr($excerpt, 0, 200);
    						$excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
    						$excerpt .= '...';
    						}
                ?>
  				<div class="col-md-3">
  					<article class="main-article">
  						<div class="singleContentBlock">
  							<img src="<?php echo $thumb_url[0];   ?>" alt="" />
                <h5><?php the_title(); ?></h5>
                <p>
                  <?php echo $excerpt; ?>
                </p>
                <a href="<?php the_permalink() ?>">Read more</a>
  							<div style="text-align: right; display: ">
  								<span id="lastModifiedDate" style="display:inline-block;font-style:italic; margin-bottom: 20px;"><?php the_date(); ?></span>
  							</div>
  						</div>
  					</article>
  				</div>
          <?php endwhile; ?>
  			</div>
  		</div>
  </div>
</div>
<?php get_footer(); ?>
