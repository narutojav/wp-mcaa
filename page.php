<?php get_header(); ?>
<div class="row main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  <?php
  	$thumb_id = get_post_thumbnail_id();
  	$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', false);
  ?>
  <div id="cover-img" style="background-image:url(<?php echo $thumb_url[0];   ?>)">
    <div class="container">
      <h3><?php the_title(); ?></h3>
    </div>
  </div>
  <div id="content">
    <div class="container">
      <div class="row main">
        <div class="col-md-3">
          <ul class="nav-side">
            <?php wp_nav_menu( array( 'theme_location' => 'primary','container' => false, 'items_wrap'  => '%3$s', 'walker' => new My_Walker_Nav_Menu() ) ); ?>
          </ul>
        </div>
        <div class="col-md-9 about">
          <?php the_content(); ?>

        </div>
      </div>
    </div>
  </div>
<?php  endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>
